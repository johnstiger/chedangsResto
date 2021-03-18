<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/css/home.css">
    <title>@yield('title') || Chedang Resto</title>
  </head>
  <body>
    <header>
      <div class="content-left">
        <ul>
          <li><a href="{{route('goRegister')}}">Order</a></li>
          <li><a href="#">Drinks</a></li>
          <li><a href="#">Desserts</a></li>
          <li><a href="#">More Fried</a></li>
          <li><a href="#">Snacks</a></li>
          <li><a href="#">Home</a></li>
        </ul>
      </div>
    </header>
    <div class="container">
      @yield('content')
    </div>
  </body>
</html>
