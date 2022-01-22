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
	                    <div class="col-md-12 col-lg-12 login-right">


	                        <!-- Register Form -->
	                        <div class="row">

	                            <div class="col-md-6">
	                                <form action="https://dreamguys.co.in/demo/doccure/doctor-dashboard.html">
	                                    <label class="focus-label">Name</label>
	                                    <div class="form-group form-focus">
	                                        <input type="text" class="form-control floating">

	                                    </div>
	                                    <label class="focus-label">Mobile Number</label>
	                                    <div class="form-group form-focus">
	                                        <input type="text" class="form-control floating">

	                                    </div>
	                                    <label class="focus-label">Create Password</label>
	                                    <div class="form-group form-focus">
	                                        <input type="password" class="form-control floating">
	                                        <label class="focus-label">Create Password</label>
	                                    </div>
	                            </div>
	                            <div class="col-md-6">
	                                <form action="https://dreamguys.co.in/demo/doccure/doctor-dashboard.html">
	                                    <label class="focus-label">Name</label>
	                                    <div class="form-group form-focus">
	                                        <input type="text" class="form-control floating">

	                                    </div>
	                                    <label class="focus-label">Mobile Number</label>
	                                    <div class="form-group form-focus">
	                                        <input type="text" class="form-control floating">

	                                    </div>
	                                    <label class="focus-label">Create Password</label>
	                                    <div class="form-group form-focus">
	                                        <input type="password" class="form-control floating">
	                                        <label class="focus-label">Create Password</label>
	                                    </div>
	                            </div>
	                            </form>

	                        </div>

	                        <div class="text-right">
	                            <h2> <a class="forgot-link" href="{{route('login')}}">Already have an account?</a></h2>
	                        </div>
	                        <button class="align-center btn btn-primary login-btn" type="submit">Signup</button>

	                    </div>
	                </div>
	                <!-- /Register Content -->

	            </div>
	        </div>

	    </div>

	</div>

	@stop