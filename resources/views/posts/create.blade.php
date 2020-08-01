@extends('adminmain')

@section('title', '| Create New Post')
@section('content')
<div id="page-wrapper">
  <div class="main-page">
    <div class="forms">
      <div class="row">
        <h3 class="title1">Create New Post</h3>
        <div class="form-three widget-shadow">
          <div class=" panel-body-inputin">
            <form class="form-horizontal" action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
              {!! csrf_field() !!}
              <div class="form-group">
                <label class="col-md-2 control-label">Title</label>
                <div class="col-md-8">
                  <div class="input-group">
                    <span class="input-group-addon">
                      <i class="fa fa-heart"></i>
                    </span>
                    <input type="text" name="title" class="form-control1" placeholder="Title">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-2 control-label">Slug</label>
                <div class="col-md-8">
                  <div class="input-group">
                    <span class="input-group-addon">
                      <i class="fa fa-pencil"></i>
                    </span>
                    <input type="text" name="slug" class="form-control1" placeholder="Slug">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-2 control-label">Image</label>
                    <input type="file" name="featured_image" style="margin-left:10px;" placeholder="Image">
              </div>

              <div class="form-group">
                <label class="col-md-2 control-label">Category</label>
                <div class="col-md-8">
                  <div class="input-group">
                    <span class="input-group-addon">
                      <i class="fa fa-book"></i>
                    </span>
                    <select class="form-control1" placeholder="category" name="category_id">
                      @foreach($category as $categories)
                        <option value="{{ $categories->id }}">{{ $categories->name }}</option>
                      @endforeach

                    </select>

                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="txtarea1" class="col-sm-2 control-label">Body</label>
                <div class="col-sm-8"><textarea name="body" id="txtarea1" cols="75" rows="10" type="form-control1"></textarea></div>
              </div>
              <div class="col-sm-8 col-dash">
                <button class="btn btn-block btn-success" type="submit">Submit</button>

              </div>
              <br>
              <br>
            </form>
          </div>
          @include('partials._message')

        </div>
      </div>
    </div>
  </div>
</div>


@endsection
