
@extends('adminmain')
@section('title', '| Comment')
@section('content')
		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
				<div class="row">
						<div class="spacebottom col-md-12">
							<div class="panel panel-default">
							  <!-- Default panel contents -->
							  <div class="panel-heading"><h3 class="text-primary">
									<i class="fa fa-pencil" aria-hidden="true"></i> Comment</h3>
								</div>
							  <div class="panel-body">
									<table class="table table-inverse">
									  <thead>
									    <tr>
									      <th>#</th>
									      <th>Name</th>
									      <th>Email</th>
									      <th>Subject</th>
												<th>message</th>
												<th></th>
									    </tr>
									  </thead>
									  <tbody>

		                    @foreach($evaluate as $evaluates)
		                    <tr>
									      <th scope="row">{{ $evaluates->id }}</th>
		                    <td>{{ $evaluates->name }}</td>
									      <td>{{ substr($evaluates->email,0,30) }}{{ strlen($evaluates->email)>30 ?"...":"" }}</td>
									      <td>{{ $evaluates->course }}</td>
									      <td>{{ substr($evaluates->message,0,10) }}{{ strlen($evaluates->email)>10 ?"...":"" }}</td>
												<td><a href="{{ route('comment.show', $evaluates->id) }}" class="btn btn-default btn-sm">
													    <i class="fa fa-star" aria-hidden="true"></i> view</a></td>
		                    <td>  {!! Form::open(['route'=>['comment.destroy',$evaluates->id], 'method'=>'DELETE']) !!}
		                          {!! Form::submit('Delete', ['class'=>'btn btn-danger btn-sm']) !!}
		                          {!! Form::close() !!}</td>
		                    </tr>

		                    @endforeach
										</tbody>

									</table>

							  </div>

							  <!-- Table -->
							  <table class="table">
							    ...
							  </table>
							</div>
						</div>
                @include('partials._message')
				</div>
			</div>
		</div>

@stop
