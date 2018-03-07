<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
  </head>
  <body>


    <header>
      <nav>
        <a href="#">Home</a>
        <a href="/login">login</a>

      </nav>
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
