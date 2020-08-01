<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Gallery;
use Session;
use Image;


class PagesController extends Controller
{

  public function getModalpost($id){
    $post= Post::find($id);
    return response()->json(array('post'=>$post), 200);
  }

  public function getGallery(){
    $gallery = Gallery::all();
    return view('Pages.gallery')->withGallery($gallery);
  }

  public function store(Request $request){
    $this->validate($request, [
      'featured_image'=>'required'
    ]);
    $gallery=new Gallery;
    $image = $request->file('featured_image');
    $filename = time().'.'.$image->getClientOriginalExtension();
    $location = public_path('images/'.$filename);
    Image::make($image)->resize(800,400)->save($location);
    $gallery->image_name = $filename;
    $gallery-> save();
    Session::flash('success', 'The image has been succesfully stored!');
    return redirect()->route('gallery.index')->withGallery($gallery);
    }

    public function delete($id){
      $gallery = Gallery::find($id);
      Storage::delete($gallery->image_name);
      $gallery->delete();
      return redirect()->route('gallery')->withGallery($gallery);
    }


  public function getLogin(){
    return view('Pages.login');
}
  public function getIndex(){
    $post=Post::all();
    $gallery=Gallery::all();
    return view('Pages/welcome')->withPost($post)->withGallery($gallery);
}
  public function show($id)
{
   $post=Post::find($id);
   return view('Pages.show')->withPost($post);
}
  public function getAbout(){
    return view('Pages.about');
}
  public function getMail(){
    return view('Pages.mail');
}
}
