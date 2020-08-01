<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;
use Session;
use Image;
use Storage;

class PostController extends Controller
{
  public function __construct()
   {
       $this->middleware('auth');
   }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $post= Post::orderBy('id', 'desc')->paginate(10);
        return view('posts.index')->withPosts($post);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $category=Category::all();
       return view('posts.create')->withCategory($category);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
          'title'=>'required|max:255',
          'slug'=>"required|alpha_dash|min:5|max:255|unique:posts,slug",
          'body'=>'required',
          'category_id'=>'integer'
        ]);

        $post=new Post;
        $post-> title = $request-> title;
        $post-> slug = $request-> slug;
        $post-> body = $request-> body;
        $post-> category_id = $request-> category_id;

        if ($request->hasFile('featured_image')){
          $image=$request-> file('featured_image');
          $filename=time().'.'. $image->getClientOriginalExtension();
          $location = public_path('images/'.$filename);
          Image::make($image)->resize(800,400)->save($location);
          $post->image = $filename;
        }
        $post-> save();
        Session::flash('success', 'The Post has been saved');
        return redirect()->route('posts.index');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $post=Post::find($id);
       return view('posts.show')->withPost($post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $post=Post::find($id);
      return view('posts.edit')->withPost($post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $this->validate($request, [
        'title'=>'required|max:255',
        'slug'=>"required|alpha_dash|min:5|max:255|unique:posts,slug,$id",
        'body'=>'required',
        'category_id'=>'integer',
        'featured_image'=>'image'
      ]);

      $post=Post::find($id);
      $post-> title = $request-> title;
      $post-> slug = $request-> slug;
      $post-> body = $request-> body;
      $post-> category_id = $request-> category_id;

      if ($request->hasFile('featured_image')) {
        $oldfilename = $post->image;
        $newimage = $request-> file('featured_image');
        $newfilename = time().'.'.getClientOriginalExtension();
        $location= public_path('images/'.$newfilename);
        $post-> image = $newfilename;
        Image::make($image)->resize(800,400)->save($location);
        Storage::delete($oldfilename);

      }

      $post-> save();
      Session::flash('success', 'The Post has been saved');
      return redirect()->route('posts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post=Post::find($id);
        Storage::delete($post->image);
        $post->delete();
        return redirect()->route('posts.index');
    }
}
