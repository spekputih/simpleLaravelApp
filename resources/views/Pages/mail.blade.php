@extends('main')
@section('banner')
 <div class="banner1">
@stop
@section('active')
<li><a href="\"><span data-hover="Home">Home</span></a></li>
<li><a href="\about"><span data-hover="About Us">About Us</span></a></li>
<li class="active"><a href="\mail"><span data-hover="Mail Us">Mail Us</span></a></li>
@stop
@section('content')
		<div class="wthree_banner1_info">
			<div class="container">
				<h3><span>Mail</span> Us</h3>
			</div>
		</div>
	</div>
<!-- //banner -->
<!-- mail -->
	<div class="courses">
		<div class="container">
			<div class="w3_agile_team_grid">
				<div class="w3_agile_team_grid_left">
					<p>01</p>
					<span class="glyphicon glyphicon-arrow-down" aria-hidden="true"></span>
				</div>
				<div class="w3_agile_team_grid_right">
					<h3>Get in <span>touch</span> with us</h3>
					<p>Aliquam sit amet sapien felis. Proin vel dolor sed risus maximus gravida.
						Ut suscipit orci sem, eget lobortis sem dictum eu. Etiam congue ex sed volutpat fringilla.</p>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="agileits_w3layouts_team_grids agileits_mail_grids">
				<div class="col-md-12 agileinfo_mail_grid_left">
					<form action="{{ route('comment.store') }}" method="post">
            {!! csrf_field() !!}
						<span class="input input--nariko">
							<input class="input__field input__field--nariko" name="name" type="text" id="input-20" placeholder=" " required="" />
							<label class="input__label input__label--nariko" for="input-20">
								<span class="input__label-content input__label-content--nariko">Your Name</span>
							</label>
						</span>
						<span class="input input--nariko">
							<input class="input__field input__field--nariko" name="email" type="email" id="input-21" placeholder=" " required="" />
							<label class="input__label input__label--nariko" for="input-21">
								<span class="input__label-content input__label-content--nariko">Your Email</span>
							</label>
						</span>
						<span class="input input--nariko">
							<input class="input__field input__field--nariko" name="course" type="text" id="input-22" placeholder=" " required="" />
							<label class="input__label input__label--nariko" for="input-22">
								<span class="input__label-content input__label-content--nariko">Your Course</span>
							</label>
						</span>
						<textarea name="message" placeholder="Your message here..." required=""></textarea>
						<input type="submit" value="Send">

					</form>
          @include('partials._message')
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	
<!-- //mail -->
@stop
@section('script')
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
