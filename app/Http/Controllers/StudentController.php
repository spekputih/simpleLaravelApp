<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use Session;

class StudentController extends Controller
{

  public function __construct()
   {
       $this->middleware('auth', ['except'=>'store']);
   }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $student=Student::paginate(10);
       return view('Student.index')->withStudent($student);
    }

    public function create()
    {
        return view('Student.create');
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
        'matric_no' =>'required|Numeric',
        'name'      =>'required|max:255',
        'course'    =>'required|max:255',
        'level'     =>'required|max:255',
        'kuliyyah'  =>'required|max:255',
        'email'     =>'required|max:255'

      ));
      $student=new Student;
      $student-> matric_no = $request-> matric_no;
      $student-> name      = $request-> name;
      $student-> course    = $request-> course;
      $student-> level     = $request-> level;
      $student-> kuliyyah  = $request-> kuliyyah;
      $student-> email     = $request-> email;
      $student->save();
      Session::flash('success', 'The data was successfully recorded.');
      if (is(url('/'))) {
        return view('Pages.welcome')->withStudent($student);
      }
      else
      {
        return view('Student.create')->withStudent($student);
      }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $student=Student::find($id);
        return view('Student.show')->withStudent($student);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $student=Student::find($id);
      return view('Student.edit')->withStudent($student);
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
      $this->validate($request, array(
        'matric_no' =>'required|Numeric',
        'name'      =>'required|max:255',
        'course'    =>'required|max:255',
        'level'     =>'required|max:255',
        'kuliyyah'  =>'required|max:255',
        'email'     =>'required|max:255'

      ));
      $student=Student::find($id);
      $student-> matric_no = $request-> matric_no;
      $student-> name      = $request-> name;
      $student-> course    = $request-> course;
      $student-> level     = $request-> level;
      $student-> kuliyyah  = $request-> kuliyyah;
      $student-> email     = $request-> email;
      $student->save();
      Session::flash('success', 'The data was successfully recorded.');
      return redirect()->route('student.show', $student->id);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student=Student::find($id);
        $student->delete();
        Session::flash('success', 'Student details has successfully deleted.');
        return redirect()->route('student.index', $student->id);
    }
}
