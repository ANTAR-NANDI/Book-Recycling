<!DOCTYPE html>
<html lang="en">

<head>
  @include('User.includes.head')
  <style type="text/css">
  	.auth-link a:hover {
  text-decoration: underline;
}
  </style>
}
</head>

<body>

  @include('User.includes.header')

  @yield('abc')

  @include('User.includes.footer')

</body>

</html>