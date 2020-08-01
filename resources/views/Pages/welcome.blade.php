@extends('main')
@section('banner')
 <div class="banner">
@stop
@section('active')
<li class="active"><a href="index.php"><span data-hover="Home">Home</span></a></li>
<li><a href="\about"><span data-hover="About Us">About Us</span></a></li>
<li><a href="\mail"><span data-hover="Mail Us">Mail Us</span></a></li>
@stop
@section('content')
		<div class="container">
			<div class="agile_banner_info">
				<div class="agile_banner_info1">
					<h3>SITC is really  <span>AWESOME</span></h3>
					<div id="typed-strings" class="agileits_w3layouts_strings">
						<p>better <i>education</i> for better world</p>
						<p><i>education</i> is a journey not a race</p>
						<p>character is a wish for a perfect <i>education</i></p>
					</div>
					<span id="typed" style="white-space:pre;"></span>
				</div>
			</div>
			<div class="banner_agile_para">
				<p>We are Looking Forward to Your Future. We are Here to Help You to Achieve What Your Expectation Toward Your Job Requirement.</p>
			</div>
			<div class="w3_agile_social_icons">
				<ul class="agileinfo_social_icons">
					<li><a href="#" class="w3_agileits_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					<li><a href="#" class="wthree_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
					<li><a href="#" class="agileinfo_google"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
				</ul>
			</div>
			<div class="w3_banner_color">
				<span></span>
			</div>
			<div class="w3_scroll_arrow">
			  <a href="#team" class="scroll scroll-down"><span class="dot"> </span></a>
			</div>
		</div>
	</div>
<!-- //banner -->
<!-- banner-bottom -->
	<div class="banner-bottom">
		<div class="container">
			<div class="col-md-6 w3ls_banner_bottom_left">
				<div class="w3ls_banner_bottom_left1">
					<p>01</p>
					<span class="glyphicon glyphicon-briefcase" aria-hidden="true"></span>
				</div>
				<div class="w3ls_banner_bottom_right1">
					<h2>the whole purpose of <span>SITC</span> is to turn mirrors into windows</h2>
					<p>To enculcate the student the real world of of industry epectation toward students and to provide them a platform to increase their skill of employability for industry perspective </p>
					<div class="w3l_more">
						<a href="javascript:void(0);" class="button button--nina" data-text="Learn more" data-toggle="modal" data-target="#defaultModal">
							<span>L</span><span>e</span><span>a</span><span>r</span><span>n</span> <span>m</span><span>o</span><span>r</span><span>e</span>
						</a>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="col-md-6 w3ls_banner_bottom_right">
				<section class="slider">
					<div class="flexslider">
						<ul class="slides">
							<li>
								<div class="agileits_w3layouts_banner_bottom_grid">
									<img src="images/1.jpg" alt=" " class="img-responsive" />
								</div>
							</li>
							<li>
								<div class="agileits_w3layouts_banner_bottom_grid">
									<img src="images/2.jpg" alt=" " class="img-responsive" />
								</div>
							</li>
							<li>
								<div class="agileits_w3layouts_banner_bottom_grid">
									<img src="images/3.jpg" alt=" " class="img-responsive" />
								</div>
							</li>
						</ul>
					</div>
				</section>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //banner-bottom -->
<!-- bootstrap-pop-up -->

<!-- //bootstrap-pop-up -->
<!-- register -->
	<div class="register">
		<div class="container">
			<div class="col-md-6 w3layouts_register_right">
				<form action="{{ route('student.store') }}" method="post">
                    {!! csrf_field() !!}
					<input name="matric_no" placeholder="Matric number" type="text" required>
					<input name="name" placeholder="Name" type="text" required>
					<input name="course" placeholder="Course" type="text" required>
		            <input name="level" placeholder="Level" type="text" required>
		            <input type="text" name="kuliyyah" placeholder="Kuliyyah" required>
					<input name="email" placeholder="Email" type="email" required>
					<input type="submit" value="Send">
                    @include('partials._message')
				</form>
			</div>
			<div class="col-md-6 w3layouts_register_left">
				<h3><span>Register</span> now</h3>
				<p>Come and Join us. We are together build our future to the new perspective </p>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //register -->
<!-- team -->

<!-- //team -->
<!-- gallery-top -->
	<div class="gallery-top">
		<div class="agileinfo_gallery_top">
			<h3><span>Education</span> is the most powerful weapon which you can use to change
				the world</h3>
		</div>
	</div>
<!-- //gallery-top -->
<!-- gallery -->
	<div class="gallery">
		<ul id="flexiselDemo1">
      @foreach( $gallery as $galleries )
			<li>
				<div class="wthree_gallery_grid">
					<a href="{{ asset('images/'.$galleries->image_name) }}" class="lsb-preview" data-lsb-group="header">
						<div class="view second-effect">
							<img src="{{ asset('images/'.$galleries->image_name) }}" alt="" class="img-responsive" />
							<div class="mask">
								<p>Edifying</p>
							</div>
						</div>
					</a>
				</div>
			</li>
      @endforeach
		</ul>
	</div>
<!-- //gallery -->

            <div class="w3_agile_team_grid_right1">
				<div class="w3_agile_team_grid_right">

					<h3>Edifying Offered <span>Services</span></h3>
					<p>Aliquam sit amet sapien felis. Proin vel dolor sed risus maximus gravida.
						Ut suscipit orci sem, eget lobortis sem dictum eu. Etiam congue ex sed volutpat fringilla.</p>

				</div>
            </div>
				<div class="clearfix"> </div>
			</div>
			<div class="agileinfo_services_grids">
            @foreach($post as $posts)
				<div class="col-md-4 w3_agile_services_grid">
					<div class=" wthree_services_grid1">
						<h3></h3>
                        <div class="view second-effect">
			            <a href="#defaultModal" class="post-open" id="{{ $posts->id }}"><img src="{{ asset('images/'.$posts->image) }}" class="img-responsive" alt="" height="30%" width="100%"></a>
			            <div class="mask">
			              <a href="#defaultModal" class="post-open" id="{{ $posts->id }}"></a>
			            </div>
			            </div>
							<div class="agile_services_grid1_sub">

							</div>
			            <hr>
			            <h4><a href="javascript:void(0);" data-toggle="modal" data-target="#defaultModal_{{ $posts->id }}">{{ $posts->title }}
			            	<p>{{ substr($posts->body, 0, 200) }}{{ strlen($posts->body) > 200 ? "....": "" }}</p>
			            <hr>
			            <p>{{ date('M j,Y'.' #'.'h:ia', strtotime($posts->created_at)) }}
			               <a href="#" class="badge float-right">{{ $posts->category->name }}</a></a></h4>
			        	</p>

					</div>
					<div class="agileits_w3layouts_services_grid1">
						<div class="w3_agileits_services_grid1">

							<div class="clearfix"> </div>
						</div>
             <div class="modal video-modal fade" id="defaultModal_{{ $posts->id }}" tabindex="-1" role="dialog" aria-labelledby="myModal">
          		<div class="modal-dialog" role="document">
          			<div class="modal-content">
          				<div class="modal-header">
          				 {{ $posts->title }}
          					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          				</div>
          				<section>
          					<div class="modal-body">
          						<img src="{{ asset('images/'.$posts->image) }}" alt=" " class="img-responsive" />
          						<p>{{ $posts->body }}</p>
          					</div>
          				</section>
          			</div>
          		</div>
          	</div>

					</div>
				</div>
        @endforeach
				<div class="clearfix"> </div>

				<br>
			</div>

		</div>
	</div>
<!-- //services -->
<!-- services-bottom -->
	<div class="services-bottom">
		<div class="container">
			<div class="agileits_services_bottom_grid">
				<h3>the great aim of <span>education</span> is not knowledge but action</h3>
				<p>Nullam laoreet vestibulum condimentum. Cras elit nisl, consequat sed sollicitudin ac faucibus, cursus vitae nisl.</p>
			</div>
		</div>
	</div>
  <!-- gallery-top -->
  	<div class="gallery-top-bottom">
  		<div class="agileinfo_gallery_top">
  			<h3><span>Education</span> is the most powerful weapon which you can use to change
  				the world</h3>
  		</div>
  	</div>
  <!-- //gallery-top -->
@stop
@section('script')
<!-- carousal -->
	<script src="js/slick.js" type="text/javascript" charset="utf-8"></script>
	<script type="text/javascript">
		$(document).on('ready', function() {
		  $(".center").slick({
			dots: true,
			infinite: true,
			centerMode: true,
			slidesToShow: 2,
			slidesToScroll: 2,
			responsive: [
				{
				  breakpoint: 768,
				  settings: {
					arrows: true,
					centerMode: false,
					slidesToShow: 2
				  }
				},
				{
				  breakpoint: 480,
				  settings: {
					arrows: true,
					centerMode: false,
					centerPadding: '40px',
					slidesToShow: 1
				  }
				}
			 ]
		  });
		});
	</script>
<!-- //carousal -->
<!-- flexisel -->
		<script type="text/javascript">
		$(window).load(function() {
			$("#flexiselDemo1").flexisel({
				visibleItems: 4,
				animationSpeed: 1000,
				autoPlay: true,
				autoPlaySpeed: 3000,
				pauseOnHover: true,
				enableResponsiveBreakpoints: true,
				responsiveBreakpoints: {
					portrait: {
						changePoint:480,
						visibleItems: 1
					},
					landscape: {
						changePoint:640,
						visibleItems:2
					},
					tablet: {
						changePoint:768,
						visibleItems: 2
					}
				}
			});

		});
	</script>
	<script type="text/javascript" src="js/jquery.flexisel.js"></script>
<!-- //flexisel -->
<!-- gallery-pop-up -->
	<script src="js/lsb.min.js"></script>
	<script>
	$(window).load(function() {
		  $.fn.lightspeedBox();
		});
	</script>
<!-- //gallery-pop-up -->
<!-- flexSlider -->
	<script defer src="js/jquery.flexslider.js"></script>
	<script type="text/javascript">
		$(window).load(function(){
		  $('.flexslider').flexslider({
			animation: "slide",
			start: function(slider){
			  $('body').removeClass('loading');
			}
		  });
		});
	</script>
<!-- //flexSlider -->
<!-- banner-type-text -->
	<script src="js/typed.js" type="text/javascript"></script>
    <script>
		$(function(){

			$("#typed").typed({
				// strings: ["Typed.js is a <strong>jQuery</strong> plugin.", "It <em>types</em> out sentences.", "And then deletes them.", "Try it out!"],
				stringsElement: $('#typed-strings'),
				typeSpeed: 30,
				backDelay: 500,
				loop: false,
				contentType: 'html', // or text
				// defaults to false for infinite loop
				loopCount: false,
				callback: function(){ foo(); },
				resetCallback: function() { newTyped(); }
			});

			$(".reset").click(function(){
				$("#typed").typed('reset');
			});

		});

		function newTyped(){ /* A new typed object */ }

		function foo(){ console.log("Callback"); }
    </script>
<!-- //banner-type-text -->
<!-- start-smooth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smooth-scrolling -->
<!-- for bootstrap working -->
	<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear'
				};
			*/

			$().UItoTop({ easingType: 'easeOutQuart' });

			});
	</script>
<!-- //here ends scrolling icon -->
@stop
</body>
</html>
