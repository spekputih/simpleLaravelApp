@extends('adminmain')
@section('title', '| Student')
@section('content')
<div id="page-wrapper">
  <div class="main-page">
    <div class="row">

<div class="panel panel-default">
<!-- Default panel contents -->
      <div class="panel-heading"><h3 class="text-primary">
        <span class="glyphicon glyphicon-apple" aria-hidden="true"></span> Registered Students
          <a href="{{route('student.create')}}" class="btn btn-default"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Add Users</a>
      </h3>

      </div>

      <!-- Table -->
      <table class="table table-inverse">
        <thead>
          <tr>
            <th>#</th>
            <th>Matric No</th>
            <th>Name</th>
            <th>Course</th>
            <th>Level</th>
            <th>Kuliyyah</th>
            <th>Email</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          @foreach($student as $students)
          <tr>
            <th scope="row">{{ $students->id }}</th>
            <td>{{ $students->matric_no }}</td>
            <td>{{ $students->name }}</td>
            <td>{{ $students->course }}</td>
            <td>{{ $students->level }}</td>
            <td>{{ $students->kuliyyah }}</td>
            <td>{{ $students->email }}</td>
            <td><a href="{{ route('student.show', $students->id) }}" class="btn btn-default btn-sm">
                <i class="fa fa-star" aria-hidden="true"></i> view</a>
            <a href="{{route('student.edit',$students->id)}}" class="btn btn-default btn-sm">Edit</a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
</div>

@stop
