<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">

<title>@yield('title')</title>

<!-- Bootstrap core CSS -->
<link href="{{ asset('template_madan/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

<!-- Custom styles -->
<link href="{{ asset('template_madan/css/style.css') }}" rel="stylesheet">
<script src="{{ asset('template_madan/js/mystyle.js') }}"></script>

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="{{ url('/') }}">Pemilihan Mahasiswa Teladan IT Del</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-

target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
          <center>
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="{{ url('/') }}">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="{{ url('/fuzzyTopsis') }}">Fuzzy Topsis</a>
              </li>
              <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="{{ url('/sawPage') }}">SAW</a>
              </li>
              <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="{{ url('/perbandingan') }}">Perbandingan</a>
              </li>
            </ul>
          </center>

      </div>
    </div>
  </nav>
  <!-- END : Navigation -->
