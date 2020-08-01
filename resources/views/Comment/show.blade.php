
@extends('adminmain')
@section('title', '| Comment')
@section('content')
		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-pages">
				<div class="row">
          <div class="well">
            <div class="left-margin-show-page">

            <h1 class="text-primary"><i class="fa fa-pencil" aria-hidden="true"></i> Comment</h1>
            <hr>
            <dl class="well font-bigger">
              <div class="left-well">
                {!! Form::open(['route'=>['comment.destroy',$dashboard->id], 'method'=>'DELETE']) !!}
                {!! Form::submit('Delete', ['class'=>'btn btn-danger btn-sm']) !!}
                {!! Form::close() !!}
              </div>
                <dt class="text-muted">Name</dt>
                <dd><small>{{ $dashboard->name }}</small></dd>

                <dt class="text-muted">Email</dt>
                <dd><small>{{ $dashboard->email }}</small></dd>

                <dt class="text-muted">Course</dt>
                <dd><small>{{ $dashboard->course }}</small></dd>

                <dt class="text-muted">Message</dt>
                <dd><small>{{ $dashboard->message }}</small></dd>

            </dl>
            </div>

          </div>
				</div>
			</div>
		</div>

@stop
