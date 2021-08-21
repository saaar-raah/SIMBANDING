@extends('layouts.master')

@section('content')
<section class="d-flex align-items-center">
    <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">

      {{-- <div class="row">

        <div class="col-lg-6 video-box align-self-baseline aos-init aos-animate" data-aos="fade-right" data-aos-delay="100">
          <img src="{{asset('/img/pengumuman/'.$pengumumans->foto)}}" class="img-fluid" alt="">
        </div>

        <div class="col-lg-6 pt-3 pt-lg-0 content aos-init aos-animate" data-aos="fade-left" data-aos-delay="100">
          <h3>{{$pengumumans->judul}}</h3>
          <p class="font-italic">
            {{$pengumumans->isi}}
          </p>

        </div>

      </div> --}}
        <div class="row align-items-start">
            <div class="col-lg-8 m-15px-tb">
                <article class="article">
                    <div class="article-img" >
                        <img id="uk" src="{{asset('/img/pengumuman/'.$pengumumans->foto)}}" title="" alt="">
                    </div>
                    <div class="article-title aos-init aos-animate" data-aos="fade-left" data-aos-delay="100">
                        {{-- <h6><a href="#">Lifestyle</a></h6> --}}
                        <h2>{!!$pengumumans->judul!!}</h2>
                        {{-- <span>By {{$pengumumans->penulis}}</span> |
                        <span>{{$pengumumans->created_at}}</span> --}}
                        <div class="media">
                            <div class="avatar">
                                <img src="https://bootdey.com/img/Content/avatar/avatar1.png" title="" alt="">
                            </div>
                            <div class="media-body">
                                <label>{{$pengumumans->penulis}}</label>
                                <span>{{$pengumumans->created_at}}</span>
                            </div>
                        </div>
                    </div>
                    <div class="article-content">
                        <p>{!!$pengumumans->isi!!}</p>

                    </div>
                    {{-- <div class="nav tag-cloud">
                        <a href="#">Design</a>
                        <a href="#">Development</a>
                        <a href="#">Travel</a>
                        <a href="#">Web Design</a>
                        <a href="#">Marketing</a>
                        <a href="#">Research</a>
                        <a href="#">Managment</a>
                    </div> --}}
                </article>
                {{-- <div class="contact-form article-comment">
                    <h4>Leave a Reply</h4>
                    <form id="contact-form" method="POST">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input name="Name" id="name" placeholder="Name *" class="form-control" type="text">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input name="Email" id="email" placeholder="Email *" class="form-control" type="email">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea name="message" id="message" placeholder="Your message *" rows="4" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="send">
                                    <button class="px-btn theme"><span>Submit</span> <i class="arrow"></i></button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div> --}}
            </div>
            <div class="col-lg-4 m-15px-tb blog-aside">
                <!-- Author -->

                <!-- End Trending Post -->
                <!-- Latest Post -->
                <div class="widget widget-latest-post">
                    <div class="widget-title">
                        <h3>Latest Post</h3>
                    </div>
                    <div class="widget-body">
                        @foreach ($newspengumuman as $item)
                        <div class="latest-post-aside media">
                            <div class="lpa-left media-body">
                                <div class="lpa-title">
                                    <h5><a href="{{$item->id}}">{!!$item->judul!!}</a></h5>
                                </div>
                                <div class="lpa-meta">
                                    <a class="name" href="#">
                                       {!!$item->penulis!!}
                                    </a>
                                    <a class="date" href="#">
                                        {{$item->created_at}}
                                    </a>
                                </div>
                            </div>
                            <div class="lpa-right">
                                <a href="#">
                                    <img src="{{asset('img/pengumuman/'.$item->foto)}}" title="" alt="">
                                </a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <!-- End Latest Post -->
                <!-- widget Tags -->

                <!-- End widget Tags -->
            </div>
        </div>
    </div>
  </section>
@endsection