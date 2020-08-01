@extends('adminmain')
@section('title', '| Edit')
@section('content')
          <div id="page-wrapper">
            <div class="main-pages">
              <div class="left-margin-show-page">
              <h1 class="text-primary"><i class="fa fa-edit" aria-hidden="true"></i> Detail</h1>
              <div class="row">
                  {!! Form::model($student, ['route'=>['student.update', $student->id], 'method'=>'PUT'])!!}
                  <div class="row">
                  <div class="col-md-12">

                  {{Form::label('matric_no', 'Matric Number:')}}
                  {{Form::text('matric_no', null, ['class' => 'form-control input-lg'])}}
                  {{ Form::label('name', 'Name:', ['class' => 'form-spacing-top'])}}
                  {{Form::text('name', null, ['class' => 'form-control form-spacing-bottom'])}}
                  {{ Form::label('course', 'Course:', ['class' => 'form-spacing-top'])}}
                  {{Form::text('course', null, ['class' => 'form-control form-spacing-bottom'])}}
                  {{ Form::label('level', 'Level:', ['class' => 'form-spacing-top'])}}
                  {{Form::text('level', null, ['class' => 'form-control form-spacing-bottom'])}}
                  {{ Form::label('kuliyyah', 'Kuliyyah:', ['class' => 'form-spacing-top'])}}
                  {{Form::text('kuliyyah', null, ['class' => 'form-control form-spacing-bottom'])}}
                  {{ Form::label('email', 'Email:', ['class' => 'form-spacing-top'])}}
                  {{Form::email('email', null, ['class' => 'form-control form-spacing-bottom'])}}

                  </div>
                  </div>
                  <div class="row">
                  <div class="col-md-12">
                  <ul class="list-inline well well-sm">
                  <li class="list-inline-item"><h5>Created at: {{date('M j, Y h:ia', strtotime($student->created_at))}}</h5></li>
                  <li class="list-inline-item"><h5>Last Updated: {{date('M j, Y h:ia',strtotime($student->updated_at))}}</h5></li>
                  <div class="col-md-4 col-md-offset-8">
                   <div class="col-md-6">
                     {!!Html::linkroute('student.show', 'Cancel', array($student->id), ['class'=>'btn btn-danger btn-block'])!!}
                   </div>
                   <div class="col-md-6">
                     {{Form::submit('Save Changes', ['class' => 'btn btn-success btn-block'])}}
                   </div>
                  </div>
                  </ul>
                  </div>
                  {!! Form::close() !!}

                  </div>

          </div>
        </div>
      </div>
@stop
