@extends('layouts.master')

@section('content')
<section id="hero" class="d-flex align-items-center">
    <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">

      <div class="row">

        <div class="col-lg-6 video-box align-self-baseline aos-init aos-animate" data-aos="fade-right" data-aos-delay="100">
          <img src="{{asset('/img/pengumuman/'.$pengumumans->foto)}}" class="img-fluid" alt="">
        </div>

        <div class="col-lg-6 pt-3 pt-lg-0 content aos-init aos-animate" data-aos="fade-left" data-aos-delay="100">
          <h3>{{$pengumumans->judul}}</h3>
          <p class="font-italic">
            {{$pengumumans->isi}}
          </p>

        </div>

      </div>

    </div>
  </section>
@endsection