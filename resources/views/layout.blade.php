<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>@yield('title', 'BlogApp')</title>
  <meta name="description" content="The HTML5 Herald">
  <meta name="author" content="SitePoint">

</head>

<body>
  @yield('content')
  <ul>
  	 <li><a href="/"> Home</a></li>
    <li><a href="/contact"> Contact Us</a></li>
    <li><a href="/about"> About Us</a></li>
  </ul>
</body>
</html>