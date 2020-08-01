@extends('adminmain')
@section('title', '| Create New Post')
@section('content')
<div id="page-wrapper">
  <div class="main-page">
	
	<form action="{{ route('gallery.store') }}" method="POST" class="well"  enctype="multipart/form-data">
		{!! csrf_field() !!}
		<label>Insert Image</label>
		<input type="file" name="featured_image">
		<hr>
		<input type="submit" style="float: right;" class="btn btn-default btn-sm" name="submit" value="Submit">
		<br>
	</form>

	<div class="well">
	<table class="table table-inverse table-hover">
	<thead>
		<tr>
			<th>#</th>
		    <th>Name</th>
		    <th>Image</th>
			<th>Date Created</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
		@foreach($gallery as $galleries)
		<tr>
		<th>{{$galleries->id}}</th>
			<th>{{$galleries->image_name}}</th>
			<th><img src="{{ asset('images/'.$galleries->image_name) }} " height="100px" width="100px"></th>
			<th>{{$galleries->created_at}}</th>
			<th></th>
		</tr>
		@endforeach
	</tbody>

	</table>
	</div>
	<div>
		@include('partials._message')
	</div>
	
  </div>
 </div>

@endsection