<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>@yield('tittle')</title>
  </head>
  <body>


    <header>
      <a href="#">Home</a>
      <a href="/login">login</a>
    </header>
    <br>

    @yield('content')
    <br>

    <footer>
        <p>
        &copy;gan & sosmed 2018
      </p>
    </footer>
  </body>


</html>
