<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo"><img src="assets1/img/logo-kua.png" alt="" class="img-fluid"></a>
      <h5>Kantor Urusan Agama <br> Kecamatan Warungkondang
      </h5>
      <!-- Uncomment below if you prefer to use an image logo -->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#pricing">Alur Pendaftaran Online</a></li>
          <li><a class="nav-link scrollto" href="#pricing1">Alur Pendaftaran Offline</a></li>
          <li><a class="nav-link scrollto" href="#team">Team</a></li>
          <li><a class="nav-link scrollto" href="#footer">Contact</a></li>
          @if (Route::has('login'))
          @auth 
          <li><a class="getstarted scrollto" href="{{url('/logout')}}">logout</a></li>
          @else
          <li><a class="getstarted scrollto" href="{{ route('login') }}">Masuk/Daftar</a></li>
            @endauth
          @endif
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->