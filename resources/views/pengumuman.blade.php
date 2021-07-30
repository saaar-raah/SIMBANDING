<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>SIBANDING</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Logo -->
    <link rel="icon" href="https://itk.ac.id/wp-content/uploads/2020/04/cropped-site-logo-32x32.png" sizes="32x32">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <!-- JS -->
    <link rel="stylesheet" href="{{asset('/venobox/venobox.css')}}" type="text/css" media="screen" />
    <link href="{{asset('/css/owl.carousel/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- Template Main CSS File -->
    <link href="{{asset('/css/style.css')}}" rel="stylesheet">


</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center">
            <a href="/">
                <img src="https://pmb.itk.ac.id/assets/layout/image/itk.png" class="logo mr-left" width="auto" height="60" alt="logo-itk">
                <h1 class="logo mr-auto">SIBANDING
            </a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->


            <nav class="nav-menu d-none d-lg-block">
                <ul>
                    {{-- <li class=""><a href="#alur">ALUR</a></li> --}}
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


    <main id="main">
        <section id="hero" class="d-flex align-items-center testimonials">
            <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
                <div class="row content-center">
                    <div class="col-lg-12 text-left">

                        <div class="owl-carousel testimonials-carousel">
                            @foreach ($carouselpengumuman as $pengumumans)
                            <div style="background: url({{asset('img/pengumuman/'.$pengumumans->foto)}}) no-repeat center center ; height:512px; opacity:0.8;">
                                <a href="{{route('pengumumanAdmin.show',$pengumumans->id)}}" class="testimonial-item ">
                                    <div class="pengumuman col-lg-12">
                                        {{$pengumumans->judul}}
                                        <br>
                                        <h6>{{$pengumumans->isi}}</h6>
                                    </div>
                                </a>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    {{-- <div class="col-lg-7 text-center">
                <img class="img-fluid max-width: 100%" src="{{asset("img/banding-ukt.jpg")}}" alt="">
                </div> --}}
            </div>

            </div>
        </section>

        <section id="services" class="services section-bg d-flex align-items-center mt-4">
            <div class="container position-relative aos-init aos-animate" data-aos="fade-up">

                <div class="row">
                    <div class="section-title">
                        <h1>PENGUMUMAN</h1>
                        <h6>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.
                        </h6>
                    </div>
                    @foreach ($pengumuman as $pengumumans)
                    <div class="col-lg-3 col-md-12 mt-auto d-flex align-items-stretch mt-4 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="200">
                        <div class="icon-box iconbox-orange " width="100" height="100">
                            <div class="icon">
                                <img class="img-fluid max-width: 100%" width="100" height="100" src="{{asset('/img/pengumuman/'.$pengumumans->foto)}}" alt="">
                                <i class="bx bx-file"></i>
                            </div>
                            <h4><a href="{{route('pengumumanAdmin.show',$pengumumans->id)}}">{{$pengumumans->judul}}</a></h4>
                            <p>{{$pengumumans->isi}} <a href="{{route('pengumumanAdmin.show',$pengumumans->id)}}">Read more.</a></p>
                        </div>
                    </div>
                    @endforeach





                </div>

            </div>
        </section>

        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Contact</h2>
                    <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi
                        quidem hic quas.</p>
                </div>

                <div>
                    <iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15956.05644582652!2d116.8615344!3d-1.1504104!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x8489d5309f45c0db!2sInstitut%20Teknologi%20Kalimantan!5e0!3m2!1sid!2sid!4v1626523708229!5m2!1sid!2sid" frameborder="0" allowfullscreen></iframe>
                </div>

                <div class="row mt-5">

                    <div class="col-lg-4">
                        <div class="info">
                            <div class="address">
                                <i class="fas fa-map-marker-alt"></i>
                                <h4>Location:</h4>
                                <p>Jl. Soekarno Hatta No.KM 15, Karang Joang, Kec. Balikpapan Utara, Kota Balikpapan, Kalimantan Timur 76127</p>
                            </div>

                            <div class="email">
                                <i class="far fa-envelope"></i>
                                <h4>Email:</h4>
                                <p>humas@itk.ac.id</p>
                            </div>

                            <div class="phone">
                                <i class="fas fa-phone-alt"></i>
                                <h4>Call:</h4>
                                <p>0542-8530800</p>
                            </div>

                        </div>

                    </div>

                    <div class="col-lg-8 mt-5 mt-lg-0">

                        <form action="{{route('pesanAdmin.store')}}" method="post" role="form" class="php-email-form">
                            @csrf
                            <div class="form-row">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="nama" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                    <div class="validate"></div>
                                </div>
                                <div class="col-md-6 form-group">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                                    <div class="validate"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="judul" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                                <div class="validate"></div>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="pesan" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                                <div class="validate"></div>
                            </div>
                            <div class="mb-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>
                            </div>
                            <div class="text-center"><button type="submit">Send Message</button></div>
                        </form>

                    </div>

                </div>

            </div>
        </section>
    </main>


    <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>
    <div id="preloader"></div>
    <!-- Vendor JS Files -->
    <script src="{{asset('/js/jquery.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="{{asset('/js/jquery.easing.min.js')}}"></script>
    <!-- <script src="assets/vendor/php-email-form/validate.js"></script> -->

    <!-- OFFLINE -->
    <script src="{{asset('/js/counterup/counterup.min.js')}}"></script>
    <script src="{{asset('/css/venobox/venobox.min.js')}}"></script>
    <script src="{{asset('/css/owl.carousel/owl.carousel.min.js')}}"></script>
    <!-- ONLINE -->
    <script src="https://unpkg.com/boxicons@latest/dist/boxicons.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.0/jquery.waypoints.min.js"></script>
    <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <!-- Template Main JS File -->
    <script src="{{asset('/js/main.js')}}"></script>
</body>

</html>