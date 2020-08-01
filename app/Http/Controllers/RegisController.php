<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Evaluate;
use App\Student;


class RegisController extends Controller
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
        $evaluate=Evaluate::orderBy('id','asc')->paginate(10);
        return view('Comment.index')->withEvaluate($evaluate);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $this->validate($request, array(
        'name'=>'required|max:255',
        'email'=>'required',
        'course'=>'required',
        'message'=>''
        ));

        $evaluate = new Evaluate;
        $evaluate -> name = $request -> name;
        $evaluate -> email = $request -> email;
        $evaluate -> course =  $request -> course;
        $evaluate -> message =  $request -> message;
        $evaluate->save();
        Session::flash('success', 'The comment was successfully recorded!');
        return view('Pages.mail')->withDashboard($evaluate);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $evaluation=Evaluate::find($id);
      return view('Comment.show')->withDashboard($evaluation);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $evaluate=Evaluate::find($id);
        $evaluate->delete();
        Session::flash('success', 'The message was successfully deleted');
        return redirect()->route('comment.index');
    }
}
