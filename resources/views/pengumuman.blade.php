@extends('layouts.master')
@section('content')

    {{-- <section id="hero" class="d-flex align-items-center testimonials">
        <div style="width: 100%; margin-right: auto;margin-left: auto;"
        class=" position-relative" data-aos="fade-up" data-aos-delay="100">
            <div class="row content-center">
                <div class="col-lg-12 text-left">

                    <div class="owl-carousel testimonials-carousel">
                        @foreach ($carouselpengumuman as $pengumumans)
                        <div style="background: url({{asset('img/pengumuman/'.$pengumumans->foto)}}) no-repeat center center ; height:550px; opacity:0.8;">
                            <a href="{{route('pengumumanAdmin.show',$pengumumans->id)}}" class="testimonial-item ">
                                <div class="pengumuman col-lg-12">
                                    {!!$pengumumans->judul!!}
                                    <br>
                                    <h6>{!!substr("$pengumumans->isi",0,52)!!}</h6>
                                </div>
                            </a>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    {{-- <section id="pengumuman" class="services section-bg d-flex align-items-center pt-0 pb-0">  --}}
        <section id="berkas" class="services">
            <div class="container mt-5" data-aos="fade-up">

            <div class="row ">
                <div class="section-title">
                    <h3>Pengumuman</h3>
                    <h6>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.
                    </h6>
                </div>
            </div>
            <div class="row d-flex justify-content-center   ">
                {{-- <div class="card-deck "> --}}
                @foreach ($pengumuman as $pengumumans)
                {{-- <div class="col-lg-3 col-md-12 mt-auto d-flex align-items-stretch w-100 h-100 mt-4 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="200">
                    <div class="icon-box iconbox-orange" style="width: 200px; " >
                        <div class="icon">
                            <img class="img-fluid max-width: 100%" width="100" height="100" src="{{asset('/img/pengumuman/'.$pengumumans->foto)}}" alt="">
                        <i class="bx bx-file"></i>
                    </div>
                    <h4><a href="{{route('pengumumanAdmin.show',$pengumumans->id)}}">{{$pengumumans->judul}}</a></h4>
                    <p>{{$pengumumans->isi}} <a href="{{route('pengumumanAdmin.show',$pengumumans->id)}}">Read more.</a></p>
                </div>
                </div> --}}

                {{-- <div class="col-lg-3 col-md-12 mt-auto d-flex align-items-stretch w-100 h-100 mt-4 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="200"> --}}
                {{-- <div class="p-3 col-lg-3 col-md"> --}}
                    <div class="card-deck col-lg-3 col-md-12 m-3 " style="width: 18rem; border-radius: 15px; box-shadow: 1px 2px 2px 2px #ccc">
                        <div style="background-color: white; font-weight: bold;" class="card-header text-center">
                            {!!$pengumumans->judul!!}
                        </div>
                        <div class="card-body ">
                            <img class="card-img-top" style="border-radius: 10px" src="{{URL::asset('/img/pengumuman/'.$pengumumans->foto)}}" alt="Card image cap">
                            <p class="card-text mt-2">{!!substr("$pengumumans->isi",0,52)!!}...
                                <a href="{{URL::route('pengumumanAdmin.show',$pengumumans->id)}}"> Read More</a>
                            </p>

                        </div>
                    </div>
                @endforeach
            </div>
            <div class="d-flex justify-content-center p-3">
                {{$pengumuman->links()}}
            </div>
        </div>
    </section>

@endsection