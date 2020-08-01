@extends('main')

@section('title', '| View Post')

@section('content')
   <div class="row">
     <div class="col-md-8 col-md-offset-2">
       <h1 class="text-center">{{ $post->title }}</h1>
       <p>{{ $post->body }}</p>
     </div>
  </div>
  <div class="row">
  <div class="col-md-8 col-md-offset-2">
    <ul class="list-inline well well-sm text-center">
      <li class="list-inline-item"><h5>Created at: {{date('M j, Y h:ia', strtotime($post->created_at))}}</h5></li>
      <li class="list-inline-item"><h5>Last Updated: {{date('M j, Y h:ia',strtotime($post->updated_at))}}</h5></li>
    </ul>
  </div>

  </div>
@stop
