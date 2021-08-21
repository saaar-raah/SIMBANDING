<header id="header" class="fixed-top">
  {{-- <div class="container d-flex align-items-center">  --}}
    {{-- <a href="/">
      <img src="https://pmb.itk.ac.id/assets/layout/image/itk.png" class="logo mr-left" width="auto" height="60"
        alt="logo-itk">
      <h1 class="logo mr-auto">SiBanding
    </a></h1> --}}
    <!-- Uncomment below if you prefer to use an image logo -->


    {{-- <nav class="nav-menu d-none d-lg-block"> --}}
    <nav class=" navbar navbar-expand-lg navbar-light d-flex align-items-center" >
      <a href="/">
        <img src="https://pmb.itk.ac.id/assets/layout/image/itk.png" class="logo mr-left" width="auto" height="60"
          alt="logo-itk">
        <h1 class="logo mr-auto">SiBanding
      </a></h1>
      {{-- <a class="navbar-brand" href="#">Navbar</a> --}}
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse  flex-row-reverse " id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-item nav-link active" href="/">Home</a>
          <a class="nav-item nav-link active" href="/alur">Alur</a>
          <a class="nav-item nav-link active" href="/berkas">Berkas</a>
          <a class="nav-item nav-link active" href="/pengumuman">Pengumuman</a>
          <a class="nav-item nav-link active" href="/FAQ">FAQ</a>
          {{-- <a class="nav-item nav-link active" href="/kontak">Kontak</a> --}}
          {{-- <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form> --}}
          @if (Route::has('login'))
          @auth
          <a href="/dashboard" class="nav-item get-started-btn1 scrollto">Dashboard</a>
          @else
          <a href="/login" class="nav-item get-started-btn scrollto">Login</a>
          {{-- <a href="/register" class="get-started-btn scrollto">Register</a> --}}
          @endauth
          @endif
        </div>
      </div>


      {{-- <ul>
        <li class=""><a href="/">Home</a></li>
        <li class=""><a href="/alur">Alur</a></li>
        <li class=""><a href="/berkas">Berkas</a></li>
        <li class=""><a href="/pengumuman">Pengumuman</a></li>
        <li class=""><a href="/FAQ">FAQ</a></li>
        <li class=""><a href="/kontak">Kontak</a></li>
      </ul> --}}
    </nav>
    <!-- .nav-menu -->

    {{-- @if (Route::has('login'))
    @auth
    <a href="/dashboard" class="get-started-btn scrollto">Dashboard</a>
    @else
    <a href="/login" class="get-started-btn scrollto">Login</a> --}}
    {{-- <a href="/register" class="get-started-btn scrollto">Register</a> --}}
    {{-- @endauth
    @endif --}}

  </div>
</header>