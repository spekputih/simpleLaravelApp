@extends('adminmain')

@section('title', '| View Post')

@section('content')
<div id="page-wrapper">
  <div class="main-page">
   <div class="row">
     <div class="col-md-12">
       <h1>{{ $post->title }}</h1>
       <p class="lead">{{ $post->body }}</p>
     </div>
  </div>
  <div class="row">
  <div class="col-md-12">
    <ul class="list-inline well well-sm">
      <li class="list-inline-item"><h5>Created at: {{date('M j, Y h:ia', strtotime($post->created_at))}}</h5></li>
      <li class="list-inline-item"><h5>Last Updated: {{date('M j, Y h:ia',strtotime($post->updated_at))}}</h5></li>
      <div class="col-md-4 col-md-offset-8">
        <div class="col-md-6">
          {!!Html::linkroute('posts.edit', 'Edit', array($post->id), ['class'=>'btn btn-primary btn-block'])!!}
        </div>
        <div class="col-md-6">
          {!! Form::open(['route' => ['posts.destroy', $post->id], 'method' => 'DELETE']) !!}
          {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-block'])!!}
          {!! Form::close() !!}
        </div>
      </div>
    </ul>
  </div>
</div>

</div>

  </div>

@stop
