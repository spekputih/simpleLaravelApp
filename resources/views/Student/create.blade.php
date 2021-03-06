
@extends('adminmain')
@section('title', '| Create')
@section('content')
		<!-- main content start-->
    <div id='page-wrapper' class='background-pic'>
       <div class="row main-pages">
         <div class="box-title ">

           <h1><i class="fa fa-user" aria-hidden="true"></i> Add Student</h1>
         </div>
      <div class="col-md-8">
            {!! Form::open(array('route' => 'student.store'))!!}
                {{ Form::label('matric_no','Matric Number:')}}
                {{ Form::text('matric_no', null, array('class' => 'form-control', 'required'=>''))}}
                {{ Form::label('name','Name:')}}
                {{ Form::text('name', null, array('class' => 'form-control', 'required'=>''))}}
                {{ Form::label('course','Course:')}}
                {{ Form::text('course', null, array('class' => 'form-control', 'required'=>''))}}
                {{ Form::label('level','Level:')}}
                {{ Form::text('level', null, array('class' => 'form-control', 'required'=>''))}}
                {{ Form::label('kuliyyah','Kuliyyah:')}}
                {{ Form::text('kuliyyah', null, array('class' => 'form-control', 'required'=>''))}}
                {{ Form::label('email','Email:')}}
                {{ Form::email('email', null, array('class' => 'form-control', 'required'=>''))}}
                {{ Form::submit('Create Post', array('class' => 'btn btn-success btn-lg btn-block', 'style' => 'margin-top: 20px'))}}
             {!! Form::close()!!}
          </div>

      <div class="col-md-4 main-pages">
        <h3><span>Register</span> now</h3>
        <p>Come and Join us. We are together build our future to the new perspective </p>
      </div>
      </div>
      <div class="clearfix"> </div>
    </div>
    </div>
    @stop
