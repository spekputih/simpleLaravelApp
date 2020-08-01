<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\Evaluate;
use App\User;

class AdminController extends Controller
{
  public function __construct()
   {
       $this->middleware('auth');
   }

  public function getDashboard(){
    $count_student =Student::all()->count();
    $count_comment =Evaluate::all()->count();
    $count_user    =User::all()->count();
    return view('Pages.dashboard')
        ->withStudent($count_student)
        ->withUser($count_user)
        ->withComment($count_comment);
  }
}
