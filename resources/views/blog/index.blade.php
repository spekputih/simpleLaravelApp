@extends('main')
@section('title', '| Blog')
@section('content')
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
      <h1>Blog</h1>
      <hr>
     </div>
     <div class="col-md-8 col-md-offset-2">
       @foreach($post as $posts)
               <h2>{{ $posts->title }}</h2>
               <p>{{ substr($posts->body, 0, 500) }}{{ strlen($posts->body) > 0 ? "....": "" }}</p>
               <a href="{{ route('blog.single', $posts->slug) }}" class="btn btn-primary">Read More</a>
           <br>
       @endforeach

     </div>
    </div>
    <div class="text-center">
      {!! $post->links(); !!}
    </div>

@stop
