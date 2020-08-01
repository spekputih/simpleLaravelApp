@extends('adminmain')
@section('title', '| Create New Category')
@section('content')

    <div id="page-wrapper">
      <div class="main-page">
        <div class="row">
          <div class="spacebottom col-md-12">
            <div class="panel panel-default">
              <!-- Default panel contents -->
              <div class="panel-heading"><h3 class="text-primary">
                <i class="fa fa-pencil" aria-hidden="true"></i> List
                <button type="button" class="btn btn-primary header-right"
                     data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">
                     Open modal for @mdo</button></h3>
              </div>
              <div class="panel-body">
                <table class="table table-inverse">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Category</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>

                    @foreach( $category as $cats )
                      <tr>
                      <th scope="row">{{ $cats->id }}</th>
                      <td>{{ $cats->name }}</td>
                      <td><a href="" class="btn btn-default btn-sm">
                            <i class="fa fa-star" aria-hidden="true"></i> view</a>
                            <form class="btn btn-danger btn-sm" action="{{ route('category.index') }}" method="POST">
                              {!! csrf_field() !!}
                              Delete
                            </form></td>
                      <td></td>
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
          <div class="col-md-2 col-md-offset-10">

          <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" id="exampleModalLabel">Create Category</h4>
                </div>
                <div class="modal-body">
                  <form method="POST" action="{{ route('category.store') }}">
                    {!! csrf_field() !!}
                    <div class="form-group">
                      <label for="recipient-name" class="control-label">Category:</label>

                      <input type="text" class="form-control" id="recipient-name" name="category">
                    </div>

                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Send message</button>
                </div>
                </form>
              </div>
            </div>
          </div>

        </div>

      </div>

    </div>
    </div>

@stop
