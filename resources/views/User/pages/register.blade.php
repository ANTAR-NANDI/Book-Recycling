	@extends('User.layouts.defaults')
	@section('abc')
	<div class="content">
		<div class="container-fluid">

			<div class="row">
				<div class="col-md-12">

					<!-- Register Content -->
					<div class="account-content">
						<div class="login-header">
							<h3>User Registration</h3>
						</div>
						@if ($errors->any())
						<div class="alert alert-danger">
							<ul>
								@foreach ($errors->all() as $error)
								<h6>{{ $error }}</h6>
								@endforeach
							</ul>
						</div>
						@endif
						@if(Session::has('message'))
						<p class="alert alert-info">{{ Session::get('message') }}</p>
						@endif
						<div class="col-md-12 col-lg-12 login-right">

							<form class="form-horizontal" method="post" action="{{ URL::to('registerstore')}}">
								@csrf
								<!-- Register Form -->
								<div class="row">

									<div class="col-md-6">

										<label class="focus-label">First Name</label>
										<div class="form-group form-focus">
											<input type="text" name="firstname" class="form-control floating">

										</div>
										<label class="focus-label">Email</label>
										<div class="form-group form-focus">
											<input type="email" name="email" class="form-control floating">

										</div>
										<label class="focus-label">Create Password</label>
										<div class="form-group form-focus">
											<input type="password" name="password" class="form-control floating">
											<label class="focus-label">Create Password</label>
										</div>
									</div>
									<div class="col-md-6">
										<label class="focus-label">Last Name</label>
										<div class="form-group form-focus">
											<input type="text" name="lastname" class="form-control floating">

										</div>
										<label class="focus-label">Mobile Number</label>
										<div class="form-group form-focus">
											<input type="number" name="mobile" class="form-control floating">

										</div>
										<label class="focus-label">Confirm Password</label>
										<div class="form-group form-focus">
											<input type="password" name="repassword" class="form-control floating">
											<!-- <label class="focus-label">Create Password</label> -->
										</div>
									</div>
								</div>

								<div class="text-right">
									<h2> <a class="forgot-link" href="{{route('login')}}">Already have an account?</a></h2>
								</div>
								<button class="align-center btn btn-primary login-btn" type="submit">Signup</button>
							</form>
							<script>
								@if(session('message'))

								var type = "{{Session::get('alert-type','info')}}"


								switch (type) {
									case 'success':

										toastr.success("{{ Session::get('message') }}");

										break;
										@endif
								}
							</script>
						</div>
					</div>
					<!-- /Register Content -->

				</div>
			</div>

		</div>

	</div>

	@stop