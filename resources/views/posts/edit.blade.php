@extends('adminmain')

@section('title', '| Create New Post')
@section('content')
<div id="page-wrapper">
  <div class="main-page">
    <div class="forms">
      <div class="row">

        <h3 class="title1">Variable Forms :</h3>
        <div class="form-three widget-shadow">
          <div class=" panel-body-inputin">
            {!! Form::model($post, ['route'=>['posts.update', $post->id], 'method'=>'PUT', 'class'=>'form-horizontal'])!!}
              <div class="form-group">
                <label class="col-md-2 control-label">Title</label>
                <div class="col-md-8">
                  <div class="input-group">
                    <span class="input-group-addon">
                      <i class="fa fa-heart"></i>
                    </span>
                    <input type="text" value="{{ $post->title }}" name="title" class="form-control1" placeholder="Title">
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
                    <input type="text" name="slug" value="{{ $post->slug }}" class="form-control1" placeholder="Slug">
                  </div>
                </div>
              </div>

              <div class="form-group">
                <label class="col-md-2 control-label">Category</label>
                <div class="col-md-8">
                  <div class="input-group">
                    <span class="input-group-addon">
                      <i class="fa fa-book"></i>
                    </span>
                    <input type="integer" value="{{ $post->category->name }}" name="category_id" class="form-control1" placeholder="Category">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="txtarea1" class="col-sm-2 control-label">Body</label>
                <div class="col-sm-8">{{Form::textarea('body', null, ['class' => 'form-control1', 'cols'=>'75', 'rows'=>'20', 'id'=>'txtarea1'])}}
                  </div>
              </div>
              <div class="col-sm-8 col-dash">
                <button class="btn btn-block btn-success" type="submit">Submit</button>

              </div>
              <br>
              <br>
            </form>
          </div>
        </div>
        @include('partials._message')
      </div>
    </div>
  </div>
</div>


@endsection
