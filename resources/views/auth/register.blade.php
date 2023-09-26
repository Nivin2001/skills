@extends('web.layouts.master')
@section('content')

<!-- /Hero-area -->

		<!-- Contact -->
		<div id="contact" class="section">

			<!-- container -->
			<div class="container">

				<!-- row -->
				<div class="row">
                    @if(session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                    @endif


					<!-- login form -->
					<div class="col-md-6 col-md-offset-3">
						<div class="contact-form">
							<h4>Sign Up</h4>
							<form method="post" action="{{url('register')}}">
                                @csrf
								<input class="input" type="text" name="name" placeholder="Name">
								<input class="input" type="email" name="email" placeholder="Email">
								<input class="input" type="password" name="password" placeholder="Password">
								<input class="input" type="password" name="password_confirmation" placeholder="Confirm Password">
								<button type="submit" class="main-button icon-button pull-right">Sign Up</button>
							</form>
						</div>
					</div>
					<!-- /login form -->

				</div>
				<!-- /row -->

			</div>
			<!-- /container -->

		</div>
		<!-- /Contact -->

		<!-- Footer -->

		<!-- Footer -->
		<footer id="footer" class="section">

			<!-- container -->
			<div class="container">

				<!-- row -->
				<div id="bottom-footer" class="row">

					<!-- social -->
					<div class="col-md-4 col-md-push-8">
						<ul class="footer-social">
							<li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
							<li><a href="#" class="youtube"><i class="fa fa-youtube"></i></a></li>
							<li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
						</ul>
					</div>
					<!-- /social -->

					<!-- copyright -->
					<div class="col-md-8 col-md-pull-4">
						<div class="footer-copyright">
							<span>&copy; Copyright 2021. All Rights Reserved. | Made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="#">SkillsHub</a></span>
						</div>
					</div>
					<!-- /copyright -->

				</div>
				<!-- row -->

			</div>
			<!-- /container -->
@endsection
