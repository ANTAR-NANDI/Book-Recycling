<!DOCTYPE html>
<html lang="en">

<head>
  @include('Admin.includes.head')

</head>

<body class="fixed-navbar">

  @include('Admin.includes.header')

  @include('Admin.includes.sidebar')
  @yield('abc')

  @include('Admin.includes.footer')

</body>

</html>