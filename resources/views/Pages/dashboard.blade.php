
@extends('adminmain')
@section('title', '| Home')
@section('content')
		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
				<div class="row">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">Website Overview</h3>
						</div>
						<div class="panel-body">
							<div class="col-md-4">
								<div class="well text-center">
									<a href="{{ route('student.index') }}"><h2><span class="fa fa-book" aria-hidden="true"></span> {{ $student }}</h2>
									<h4>Registered Student</h4></a>
								</div>
							</div>
							<div class="col-md-4">
								<div class="well text-center">
									<a href="#"><h2><span class="fa fa-user" aria-hidden="true"></span> {{ $user }}</h2>
									<h4>User</h4></a>
								</div>
							</div>
							<div class="col-md-4">
								<div class="well text-center">
									<a href="{{ route('comment.index') }}"><h2><span class="fa fa-comment" aria-hidden="true"></span> {{ $comment }}</h2>
									<h4>Comment</h4></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

@stop
