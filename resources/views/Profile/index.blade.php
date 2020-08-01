@extends('adminmain')
@section('title', '| Profile')
@section('content')
     <div id="page-wrapper">
       <div class="main-page">
      <div class="row">
        <div class="col-md-10">
           <h1>Profile</h1>
        </div>
        <div class="col-md-2">
          <a href="{{route('profile.create')}}" class="btn btn-lg btn-primary btn-block btn-h1-margin-top">Add Picture</a>
        </div>

      </div>
      <hr>
      <div class="row">
        <table class="table">
          <thead class="thead-inverse">
            <tr>
              <th>#</th>
              <th>Picture</th>
              <th>Created at</th>
              <th></th>
            </tr>
          </thead>
          <tbody>

            <tr>
              <th scope="row">{{ isset(Auth::user()->picture->picture_name) ? Auth::user()->picture->id:''  }}</th>
              <td>{{ isset(Auth::user()->picture->picture_name) ? Auth::user()->picture->picture_name:'' }}</td>
              <td>{{ isset(Auth::user()->picture->picture_name) ? date('M j,Y h:ia', strtotime(Auth::user()->picture->created_at)):'' }}</td>
              <td><a href="{{ isset(Auth::user()->picture->picture_name) ? route('profile.show', Auth::user()->picture->id):''}}" class="btn btn-default btn-sm">View</a>
                <a href="{{ isset(Auth::user()->picture->picture_name) ? route('profile.edit',Auth::user()->picture->id):''}}" class="btn btn-default btn-sm">Edit</a></td>
            </tr>

          </tbody>
        </table>
        <div class="text-center">

        </div>

      </div>
      </div>
      </div>
@stop
