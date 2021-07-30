<!DOCTYPE html>
<html lang="en">

@include('layouts.header')

<body>

    <!-- ======= Header ======= -->
    @include('layouts.navbar')
    <!-- End Header -->

    <!-- ======= Hero Section ======= -->
        @yield('tambahanheader')
    <!-- End Hero -->

    <main id="main">
        {{-- <x-notif> --}}
        @yield('content')

        @include('layouts.footer')
        <!-- End Contact Section -->

    </main>


    <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>
    <div id="preloader"></div>

    @include('layouts.scripts')


</body>

</html>