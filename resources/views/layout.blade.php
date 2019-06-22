<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.css">

  <title>@yield('title', 'BlogApp')</title>
  <meta name="description" content="The HTML5 Herald">
  <meta name="author" content="SitePoint">

</head>

<body>
  <div class="container">
    @yield('content')
     <ul>
  	   <li><a href="/"> Home</a></li>
       <li><a href="/contact"> Contact Us</a></li>
       <li><a href="/about"> About Us</a></li>
     </ul>
  </div>
</body>
</html>