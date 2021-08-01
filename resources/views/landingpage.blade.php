@extends('layouts.master')
@section('tambahanheader')
<section id="hero" class="d-flex align-items-center">
    <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
        <div class="row content-center">
            <div class="col-lg-5 text-left">
                <h1>Selamat Datang <br> di SiBanding</h1>
                <h2 class="text-justify">SiBanding (Sistem Informasi Banding UKT) adalah website yang melayani mahasiswa Institut Teknologi Kalimantan untuk melakukan pengajuan banding UKT (Uang Kuliah Tunggal).</h2>
            </div>
            <div class="col-lg-7 text-center">
                <img class="img-fluid max-width: 100%" src="{{asset("img/banding-ukt.jpg")}}" alt="">
            </div>
        </div>

    </div>
</section>
@endsection
@section('content')
    <section id="penjelasanukt" class="about ">
        <div class="container " data-aos="fade-up">
            <div class="row content ">
                <div class="col-lg-3 align-self-center">
                    <i style="color:#124265" class="fas fa-question-circle fa-9x"></i>
                </div>
                <div class="col-lg-8">
                    <h1 class="">PERPANJANGAN PENGAJUAN BANDING/PERHITUNGAN UKT UNTUK SEMESTER GASAL TA. 2020/2021</h1>
                    <p class="text-justify">
                        Berdasarkan Peraturan Menteri Pendidikan dan Kebudayaan Republik Indonesia No. 73 Tahun 2014 tentang Perubahan Atas Peraturan Menteri Pendidikan dan Kebudayaan Nomor 55 Tahun 2013 tentang Biaya Kuliah
                        Tunggal dan Uang Kuliah Tunggal Pada Perguruan Tinggi Negeri di Lingkungan Kementerian Pendidikan dan Kebudayaan, dan mengingat masih adanya mahasiswa yang mengajukan Banding UKT, maka Institut Teknologi
                        Kalimantan memberikan kesempatan kembali, dengan ketentuan  sebagai berikut:
                    </p>

                    <ul>
                        <li><i class="ri-check-double-line"></i> 1.      Memberikan kesempatan kepada mahasiswa untuk mengajukan banding UKT dan permohonan mengangsur UKT. Pengajuan banding UKT atau mengangsur pembayaran UKT  dapat dilakukan dengan mengajukan surat permohonan kepada Rektor Institut Teknologi Kalimantan dilengkapi dengan dokumen pendukung</li>

                    </ul>
                </div>

            </div>
            {{-- <div class="row justify-content-end pt-4">
                <div class="col-lg-7 text-right">
                    <h1>APA ITU UKT?</h1>
                    <p>
                        UKT (Uang Kuliah Tunggal) adalah iuran per semester yang wajib dibayar oleh mahasiswa selama menempuh perkualiahan.
                    </p>
                    <i class="fas fa-question-circle"></i>
                    <ul>
                        <p>Ullamco laboris nisi ut aliquip ex ea commodo consequat</p>
                        <p>Duis aute irure dolor in reprehenderit in voluptate velit</p>
                        <p>Ullamco laboris nisi ut aliquip ex ea commodo consequat</p>
                    </ul>
                </div>
                <div class="col-lg-2 align-self-center">
                    <i class="fas fa-question-circle fa-9x"></i>
                </div>
            </div> --}}

        </div>
    </section>
    <!-- End Frequently Asked Questions Section -->

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
        <div class="container" data-aos="zoom-in">
            <div class="text-center">
                <h3>Call To Action</h3>
                <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <a class="cta-btn" href="#">Call To Action</a>
            </div>
        </div>
    </section>
@endsection
