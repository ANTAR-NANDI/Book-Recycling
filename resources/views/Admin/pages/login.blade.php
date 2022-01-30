	@extends('User.layouts.defaults')
	@section('abc')

	<!-- Page Content -->
	<div class="content">
		<div class="container">

			<div class="row">
				<div class="col-md-12">

					<!-- Login Tab Content -->
					<div class="account-content">
						<div class="row  align-items-center justify-content-center">
							<div class="col-md-8 col-lg-8">
								<div class="login-header">
									<h3>Login <span>Doccure</span></h3>
								</div>
								<form class="form-horizontal" method="post" action="{{ URL::to('loginstore')}}">
									@csrf
									<div class="form-group form-focus">
										<input type="email" name="email" class="form-control floating">
										<label class="focus-label">Email</label>
									</div>
									<div class="form-group form-focus">
										<input type="password" name="password" class="form-control floating">
										<label class="focus-label">Password</label>
									</div>
									<div class="text-right">
										<a class="forgot-link" href="{{route('register')}}">Forgot Password ?</a>
									</div>
									<button class="btn btn-primary btn-block btn-lg login-btn mb-2" type="submit">Login</button>
									<div class="text-center dont-have">Don’t have an account? <a href="{{route('register')}}">Register</a></div>
								</form>
							</div>
						</div>
					</div>
					<!-- /Login Tab Content -->

				</div>
			</div>

		</div>

	</div>
	<!-- /Page Content -->

	@stop