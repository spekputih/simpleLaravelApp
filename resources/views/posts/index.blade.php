@extends('adminmain')
@section('title', '| All Post')
@section('content')
     <div id="page-wrapper">
       <div class="main-page">



      <div class="row">
        <div class="col-md-10">
           <h1>All Post</h1>
        </div>
        <div class="col-md-2">
          <a href="{{route('posts.create')}}" class="btn btn-lg btn-primary btn-block btn-h1-margin-top">New post</a>
        </div>

      </div>
      <hr>
      <div class="row">
        <table class="table">
          <thead class="thead-inverse">
            <tr>
              <th>#</th>
              <th>Title</th>
              <th>Body</th>
              <th>Category</th>
              <th>Created at</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            @foreach($posts as $post)
            <tr>
              <th scope="row">{{ $post->id }}</th>
              <td>{{ $post->title }}</td>
              <td>{{ substr($post->body, 0, 50) }}{{ strlen($post->body) > 0 ? "....": "" }}</td>
              <td>{{ $post->category->name }}</td>
              <td>{{ date('M j,Y h:ia', strtotime($post->created_at)) }}</td>
              <td><a href="{{route('posts.show', $post->id)}}" class="btn btn-default btn-sm">View</a>
                <a href="{{route('posts.edit',$post->id)}}" class="btn btn-default btn-sm">Edit</a></td>
            </tr>
            @endforeach
          </tbody>
        </table>
        <div class="text-center">
          {!! $posts->links(); !!}
        </div>

      </div>
      </div>
      </div>
@stop
