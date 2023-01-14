<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body style="background-color: #FFFBEB";>
  <nav class="navbar" style="background-color: #263159;">
    <div class="container-fluid mx-3">
      <a class="navbar-brand" href="{{route('home')}}" style="color: white; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-size: 1.7rem;" >
        <img src="../assets/logo.png" alt="logo" width="75" height="75" class="d-inline-block align-text-middle">
        Meksiko Software House
      </a>
      {{-- <form class="d-flex" role="search" action="search" method="GET">
        <input class="form-control me-2" type="search" placeholder="Nama Karyawan" aria-label="Search">
        <button class="btn btn-success" type="submit">Search</button>
      </form> --}}
      <form action="{{route('search')}}" method="GET" class="d-flex" role="search">
          <input type="search" class="form-control me-2" name="search" placeholder="Search">
          <button type="submit" class="btn btn-success">Search</button>
    </form>
    </div>
  </nav>

    @yield('content')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>