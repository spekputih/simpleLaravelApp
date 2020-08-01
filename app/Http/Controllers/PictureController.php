<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Image;
use App\Picture;
use Session;

class PictureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profile=Picture::all();
        return view('Profile.index')->withProfiles($profile);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Profile.create');
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
            'user_id' => 'integer'
        ]);

        $profile=new Picture;
        $profile-> user_id = $request -> user_id;
        $image= $request -> file('featured_profile');
        $filename=time().'.'.$image->getClientOriginalExtension();
        $location=public_path('images/'.$filename);
        Image::make($image)->resize(100,100)->save($location);
        $profile-> picture_name = $filename;
        $profile-> save();
        Session::flash('Success', 'The Information has been recorded.');
        return redirect()->route('profile.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $profile = Picture::find($id);
        return view('Profile.show')->withProfile($profile);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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

      ]);

      $profile=Picture::find($id);
      $image= $request -> file('featured_profile');
      $filename=time().'.'.$image->getClientOriginalExtension();
      $location=public_path('images/'.$filename);
      Image::make($image)->save($location);
      $profile-> picture_name = $filename;
      $profile-> save();
      Session::flash('Success', 'The Information has been recorded.');
      return redirect()->route('profile.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
