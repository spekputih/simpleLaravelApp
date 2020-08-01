@extends('adminmain')
@section('title', '| Profile')
@section('content')
    <div id=page-wrapper>
      <div class="main-page">
        <div class="row">
          <div class="col-md-10 profile widget-shadow">
						<h4 class="title3">Profile</h4>
						<div class="profile-top">
							<img src="images/img1.png" alt="">
							<h4>{{ Auth::user()->name }}</h4>
							<h5>Lorem Ipsum is simply dummy</h5>
						</div>
						<div class="profile-text">
							<div class="profile-row">
								<div class="profile-left">
									<i class="fa fa-envelope profile-icon"></i>
								</div>
								<div class="profile-right">
									<h4> {{ Auth::user()->email }} </h4>
									<p>Email</p>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="profile-row row-middle">
								<div class="profile-left">
									<i class="fa fa-mobile profile-icon"></i>
								</div>
								<div class="profile-right">
									<h4>222-555-111</h4>
									<p>Contact Number</p>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="profile-row">
								<div class="profile-left">
									<i class="fa fa-pencil profile-icon"></i>
								</div>
								<div class="profile-right">
									<h4>Biochemical Engineer</h4>
									<p>Course</p>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
						<div class="profile-btm">
							<ul>
								<li>
									<h4>420</h4>
									<h5>Following</h5>
								</li>
								<li>
									<h4>100</h4>
									<h5>Likes</h5>
								</li>
								<li>
									<h4>60</h4>
									<h5>Shares</h5>
								</li>
							</ul>
						</div>
					</div>

        </div>

      </div>

    </div>

@stop
