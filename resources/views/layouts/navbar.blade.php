<header id="header" class="fixed-top">
    <nav class=" navbar navbar-expand-lg navbar-light d-flex align-items-center" >
      <a href="{{URL('/')}}">
        <img src="https://pmb.itk.ac.id/assets/layout/image/itk.png" class="logo mr-left" width="auto" height="60"
          alt="logo-itk">
        <h1 class="logo mr-auto">SimBanding
      </a></h1>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse  flex-row-reverse " id="navbarNavAltMarkup">
        <div class="navbar-nav d-inline-flex">
          <a class="nav-item nav-link {{ Request::is('/') ? 'customnav' : '' }}" href="{{URL('/')}}">
            {!! Request::is('/') ? '<i class="fas fa-home"></i>' : '' !!} Home
          </a>

          <a class="nav-item nav-link {{ Request::is('pengumuman') ? 'customnav' : '' }}" href="{{URL('/pengumuman')}}">
            {!! Request::is('pengumuman') ? '   <i class="fas fa-bullhorn"></i>' : '' !!}

            Pengumuman
          </a>
          <a class="nav-item nav-link  {{ Request::is('berkas') ? 'customnav' : '' }}" href="{{URL('/berkas')}}">
            {!! Request::is('berkas') ? '<i class="fas fa-archive "></i>' : '' !!}

            Berkas
          </a>

          <a class="nav-item nav-link pr-4  border-right {{ Request::is('FAQ') ? 'customnav' : '' }}" href="{{URL('/FAQ')}}">
            {!! Request::is('FAQ') ? ' <i class="far fa-question-circle fa-2X "></i>' : '' !!}

            FAQ
          </a>
          @if (Route::has('login'))
          @auth
          <a href="{{URL('/dashboard')}}" class="nav-item nav-link scrollto" style="margin-left: 0.7rem"><i class="far fa-user fa-lg"></i></a>
          @else
          <a href="{{URL('/login')}}" class="nav-item nav-link scrollto" style="margin-left: 0.7rem"><i class="far fa-user fa-lg"></i></a>
          {{-- <a href="/register" class="get-started-btn scrollto">Register</a> --}}
          @endauth
          @endif
        </div>
      </div>
    </nav>
  </div>
</header>

<script>

</script>