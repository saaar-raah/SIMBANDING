<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">
        <a href="/">
        <img src="https://pmb.itk.ac.id/assets/layout/image/itk.png" class="logo mr-left" width="auto" height="60" alt="logo-itk" >
        <h1 class="logo mr-auto">SIBANDING</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->


        <nav class="nav-menu d-none d-lg-block">
            <ul>
                <li class=""><a href="#alur">ALUR</a></li>
                <li class=""><a href="#berkas">BERKAS YANG DIBUTUHKAN</a></li>
                <li class=""><a href="#contact">CONTACT</a></li>
                <li class=""><a href="/pengumuman">PENGUMUMAN</a></li>
                <li class=""><a href="/FAQ">FAQ</a></li>

            </ul>
        </nav>
        <!-- .nav-menu -->

        @if (Route::has('login'))
        @auth
            <a href="/dashboard" class="get-started-btn scrollto">Dashboard</a>
        @else
            <a href="/login" class="get-started-btn scrollto">Login</a>
            {{-- <a href="/register" class="get-started-btn scrollto">Register</a> --}}
        @endauth
    @endif

    </div>
</header>