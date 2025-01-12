<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Tutoring </title>

    <!-- Bootstrap core CSS -->
    <link href="{{ url('public/assets/frontend/dist/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
    <link href="{{ url('public/assets/frontend/blog.css') }}" rel="stylesheet">
    <style>
      

    </style>
  </head>

  <body>

    <div class="container-fluid">
      <header class="blog-header py-3">
        <div class="row flex-nowrap justify-content-between align-items-center">
          <div class="col-2 text-center">
            <a class="blog-header-logo text-dark" href="#">Tutoring Website</a>
          </div>
          <div class="col-4 d-flex justify-content-end align-items-center">
            <a class="btn btn-sm btn-outline-secondary"  href="{{ url('logout')}}" style="margin-right: 20px">Sign up/Sign In</a>
          </div>
        </div>
      </header>

      <div class="nav-scroller py-1 mb-2">
        <nav class="nav d-flex justify-content-between">
          <a class="p-2 text-muted" href="{{ url('frontend/home')}}">Homepage</a>
          <a class="p-2 text-muted" href="{{ url('frontend/course')}}">Course Catalog</a>
          <a class="p-2 text-muted" href="{{ url('frontend/user')}}">User Profile</a>
          <a class="p-2 text-muted" href="{{ url('frontend/lesson')}}">Lesson Pages</a>
        </nav>
      </div>

    @yield('konten')

    <footer class="blog-footer">
            <strong>Copyright &copy; {{date('Y')}} Muhammad Ardiansyah Asrifah</strong></br>
            All rights reserved.
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="{{ url('public/assets/frontend/js/vendor/jquery-slim.min.js') }}"><\/script>')</script>
    <script src="{{ url('public/assets/frontend/js/vendor/popper.min.js') }}"></script>
    <script src="{{ url('public/assets/frontend/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ url('public/assets/frontend/js/vendor/holder.min.js') }}"></script>
    <script>
      Holder.addTheme('thumb', {
        bg: '#55595c',
        fg: '#eceeef',
        text: 'Thumbnail'
      });
    </script>
  </body>
</html>
