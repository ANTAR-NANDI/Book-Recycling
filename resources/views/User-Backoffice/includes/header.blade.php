<div class="container">

	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Offcanvas Menu Begin -->
	<div class="offcanvas-menu-overlay"></div>
	<div class="offcanvas-menu-wrapper">
		<div class="offcanvas__close">+</div>
		<ul class="offcanvas__widget">
			<li><span class="icon_search search-switch"></span></li>
			<li><a href="#"><span class="icon_heart_alt"></span>
					<div class="tip">2</div>
				</a></li>
			<li><a href="#"><span class="icon_bag_alt"></span>
					<div class="tip">2</div>
				</a></li>
		</ul>
		<div class="offcanvas__logo">
			<a href="./index.html"><img src="{{ asset('User/img/profile.png')}}" alt=""></a>
		</div>
		<div id="mobile-menu-wrap"></div>
		<div class="offcanvas__auth">
			<a href="#">Login</a>
			<a href="#">Register</a>
		</div>
	</div>
	<!-- Offcanvas Menu End -->

	<!-- Header Section Begin -->
	<header class="header">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xl-3 col-lg-2">
					<div class="header__logo">
						<a href="{{route('backoffice-home')}}"><img src="{{ asset('User/img/logo.png')}}" alt=""></a>
					</div>
				</div>
				<div class="col-xl-6 col-lg-7">
					<nav class="header__menu header__right">
						<ul>
							<li class="active"><a href="{{route('backoffice-home')}}">Home</a></li>
							<li><a href="{{route('backoffice-shop')}}">Shop</a></li>
							<li><a href="{{route('backoffice-about')}}">About</a></li>
							<li><a href="{{route('backoffice-contact')}}">Contact</a></li>
							<li><a href="{{route('backoffice-contact')}}">Post A Book</a></li>



						</ul>
					</nav>
				</div>
				<div class="col-lg-3">
					<nav class="header__menu header__right">
						<ul style="margin:0px">
							<li class="nav-item dropdown">
								<a href="{{route('home')}}"><img src="{{ asset('User/img/logo1.png')}}" alt="" width="50" height="50"></a>
								<ul class="dropdown">
									<li><a href="./product-details.html">Profile</a></li>
									<li><a href="./shop-cart.html">Messages</a></li>
									<li><a href="./checkout.html">Checkout</a></li>
									<li><a href="{{route('logout')}}">Logout</a></li>
								</ul>
								<!-- <ul class="dropdown-menu">
									<li><a class="dropdown-item" href="department.html">Departments</a></li>
									<li><a class="dropdown-item" href="department-single.html">Department Single</a></li>
								</ul> -->
							</li>

							<!-- <li class="nav-item dropdown">
								<a class="dropdown-item" href="department.html">Departments</a>
								<ul class="dropdown-menu" aria-labelledby="dropdown02">
									<li><a class="dropdown-item" href="department.html">Departments</a></li>
									<li><a class="dropdown-item" href="department-single.html">Department Single</a></li>
								</ul>
							</li> -->


						</ul>
					</nav>

				</div>




				<div class="canvas__open">
					<i class="fa fa-bars"></i>
				</div>
			</div>
	</header>
	<!-- Header Section End -->