@extends('layouts.master')
@section('content')
    <section id="hero" class="d-flex align-items-center">
        <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
            <div class="row content-center">
                <div class="col-lg-7 text-center">
                    <img class="img-fluid max-width: 100%" src="{{asset("img/FAQ.png")}}" alt="">
                </div>
                <div class="col-lg-5 text-left">
                    <h1>FREQUENTLY ASKED QUESTIONS</h1>
                    <h2 class="text-justify">Secara istilah, Frequently Asked Questions atau disingkat FAQ berarti pertanyaan yang sering diajukan. Pada awalnya, FAQ adalah sebuah tulisan yang dirancang untuk menjawab pertanyaan terkait website. Namun untuk saat ini, FAQ juga seringkali memuat pertanyaan mengenai segala hal yang berkaitan dengan produk, layanan, serta tentang kegunaan platform/aplikasi yang ditawarkan oleh perusahaan. </h2>
                </div>
            </div>

        </div>
    </section>


    <section id="alurukt" class="faq section-bg">
        <div class="container aos-init aos-animate" data-aos="fade-up">

            <div class="section-title">
                <h2>Frequently Asked Questions</h2>
                <h6>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi
                    quidem hic quas.</h6>
            </div>

            <div class="faq-list">
                <ul>

                    @foreach ($FAQ as $FAQS)
                    <li data-aos="fade-up" class="aos-init aos-animate">
                        <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" class="collapse" href="#faq-list-{{$FAQS->id}}">{{$FAQS->pertanyaan}}<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                        <div id="faq-list-{{$FAQS->id}}" class="collapse" data-parent=".faq-list">
                            <p>
                                {{$FAQS->jawaban}}
                            </p>
                        </div>
                    </li>
                    @endforeach





                </ul>
            </div>

        </div>
    </section>

@endsection