
@extends('adminmain')
@section('title', '| Details')
@section('content')
		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-pages">
				<div class="row">
          <div class="well">
            <div class="left-margin-show-page">

            <h1 class="text-primary"><i class="fa fa-database" aria-hidden="true"></i> Detail</h1>
            <hr>
            <dl class="well font-bigger">
							<div class="left-well">
								{!! Form::open(['route'=>['student.destroy',$student->id], 'method'=>'DELETE']) !!}
								{!! Form::submit('Delete', ['class'=>'btn btn-danger']) !!}
								{!! Form::close() !!}
              </div>
              <div class="left-well">
									<a href="{{ route('student.edit', $student->id) }}" class="btn btn-default">Edit</a>
              </div>


								<dt class="text-muted">Matric Number</dt>
								<dd><small>{{ $student->matric_no }}</small></dd>

                <dt class="text-muted">Name</dt>
                <dd><small>{{ $student->name }}</small></dd>

                <dt class="text-muted">Email</dt>
                <dd><small>{{ $student->email }}</small></dd>

                <dt class="text-muted">Course</dt>
                <dd><small>{{ $student->course }}</small></dd>

								<dt class="text-muted">level</dt>
                <dd><small>{{ $student->level }}</small></dd>

								<dt class="text-muted">Kuliyyah</dt>
                <dd><small>{{ $student->kuliyyah }}</small></dd>

            </dl>
            </div>

          </div>
				</div>
			</div>
		</div>
    @stop
