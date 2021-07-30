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
    <section id="penjelasanukt" class="about">
        <div class="container" data-aos="fade-up">



            <div class="row content">
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


    <section id="alur" class="faq section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>ALUR PENGAJUAN BANDING</h2>
                <p>Mahasiswa Institut Teknologi Kalimantan (ITK) Angkatan 2012-2020 yang akan mengajukan permohonan keringanan UKT harap mengumpulkan berkas yang telah diurutkan sebagai berikut:</p>
            </div>

            <div class="faq-list">
                @foreach ($alur as $alurs)
                    <ul>
                        <li data-aos="fade-up">
                            <i class="bx bx-help-circle icon-help"></i>
                            <a data-toggle="collapse" class="collapse text-dark" href="#faq-list-{{$alurs->id}}">
                                {{$alurs->urutan}}. {{$alurs->nama_alur}}
                                <i class="bx bx-chevron-down icon-show"></i>
                                <i class="bx bx-chevron-up icon-close"></i>
                            </a>
                            <div id="faq-list-{{$alurs->id}}" class="collapse text-dark" data-parent=".faq-list">
                                <p>
                                    <a href="{{$alurs->link}}" target="_blank" rel="noopener noreferrer"> {{$alurs->isi}} </a>
                                </p>
                                {{-- <p>
                                    <a href="https://drive.google.com/uc?export=download&amp;id=0B8FRUMozFob-RGo1VnBOUTE3QTQ" target="_blank" rel="noopener noreferrer">
                                        Unduh Form Kelengkapan dan Surat Pernyataan Keringanan UKT</a>
                                </p> --}}
                            </div>
                        </li>
                    </ul>
                @endforeach
            </div>
        </div>
    </section>
    <!-- End Frequently Asked Questions Section -->

    <!-- ======= Services Section ======= -->
    <section id="berkas" class="services section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>BERKAS YANG DIBUTUHKAN</h2>
                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi
                    quidem hic quas.</p>
            </div>

            <div class="row">

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch mt-4 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="200">
                    <div class="icon-box iconbox-red">
                        <div class="icon">
                            <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                            <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,532.3542879108572C369.38199826031484,532.3153073249985,429.10787420159085,491.63046689027357,474.5244479745417,439.17860296908856C522.8885846962883,383.3225815378663,569.1668002868075,314.3205725914397,550.7432151929288,242.7694973846089C532.6665558377875,172.5657663291529,456.2379748765914,142.6223662098291,390.3689995646985,112.34683881706744C326.66090330228417,83.06452184765237,258.84405631176094,53.51806209861945,193.32584062364296,78.48882559362697C121.61183558270385,105.82097193414197,62.805066853699245,167.19869350419734,48.57481801355237,242.6138429142374C34.843463184063346,315.3850353017275,76.69343916112496,383.4422959591041,125.22947124332185,439.3748458443577C170.7312796277747,491.8107796887764,230.57421082200815,532.3932930995766,300,532.3542879108572"></path>
                            </svg>
                            <i class="bx bx-slideshow"></i>
                        </div>
                        <h4><a href="">Kartu Keluarga</a></h4>
                        <p>Melampirkan Kartu Keluarga</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch mt-4 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="200">
                    <div class="icon-box iconbox-red">
                        <div class="icon">
                            <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                            <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,532.3542879108572C369.38199826031484,532.3153073249985,429.10787420159085,491.63046689027357,474.5244479745417,439.17860296908856C522.8885846962883,383.3225815378663,569.1668002868075,314.3205725914397,550.7432151929288,242.7694973846089C532.6665558377875,172.5657663291529,456.2379748765914,142.6223662098291,390.3689995646985,112.34683881706744C326.66090330228417,83.06452184765237,258.84405631176094,53.51806209861945,193.32584062364296,78.48882559362697C121.61183558270385,105.82097193414197,62.805066853699245,167.19869350419734,48.57481801355237,242.6138429142374C34.843463184063346,315.3850353017275,76.69343916112496,383.4422959591041,125.22947124332185,439.3748458443577C170.7312796277747,491.8107796887764,230.57421082200815,532.3932930995766,300,532.3542879108572"></path>
                            </svg>
                            <i class="bx bx-slideshow"></i>
                        </div>
                        <h4><a href="">Surat Keterangan Penghasilan Orang Tua</a></h4>
                        <p>Surat keteranan penghasilan orang tua dan/atau wali 3 bulan terakhir yang disahkan
                            oleh RT/kelurahan/desa (untuk non karyawan) atau oleh bendahara gaji (untuk karyawan institusi).
                        </p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch mt-4 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="200">
                    <div class="icon-box iconbox-red">
                        <div class="icon">
                            <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                            <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,532.3542879108572C369.38199826031484,532.3153073249985,429.10787420159085,491.63046689027357,474.5244479745417,439.17860296908856C522.8885846962883,383.3225815378663,569.1668002868075,314.3205725914397,550.7432151929288,242.7694973846089C532.6665558377875,172.5657663291529,456.2379748765914,142.6223662098291,390.3689995646985,112.34683881706744C326.66090330228417,83.06452184765237,258.84405631176094,53.51806209861945,193.32584062364296,78.48882559362697C121.61183558270385,105.82097193414197,62.805066853699245,167.19869350419734,48.57481801355237,242.6138429142374C34.843463184063346,315.3850353017275,76.69343916112496,383.4422959591041,125.22947124332185,439.3748458443577C170.7312796277747,491.8107796887764,230.57421082200815,532.3932930995766,300,532.3542879108572"></path>
                            </svg>
                            <i class="bx bx-slideshow"></i>
                        </div>
                        <h4><a href="">Surat Keterangan Penghasilan Lain</a></h4>
                        <p>Surat keterangan ada/tidak penghasilan lain di luar yang tercantum pada butir 3 (tiga)
                            dan disahkan oleh RT/kelurahan/desa.
                        </p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch mt-4 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="200">
                    <div class="icon-box iconbox-red">
                        <div class="icon">
                            <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                            <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,532.3542879108572C369.38199826031484,532.3153073249985,429.10787420159085,491.63046689027357,474.5244479745417,439.17860296908856C522.8885846962883,383.3225815378663,569.1668002868075,314.3205725914397,550.7432151929288,242.7694973846089C532.6665558377875,172.5657663291529,456.2379748765914,142.6223662098291,390.3689995646985,112.34683881706744C326.66090330228417,83.06452184765237,258.84405631176094,53.51806209861945,193.32584062364296,78.48882559362697C121.61183558270385,105.82097193414197,62.805066853699245,167.19869350419734,48.57481801355237,242.6138429142374C34.843463184063346,315.3850353017275,76.69343916112496,383.4422959591041,125.22947124332185,439.3748458443577C170.7312796277747,491.8107796887764,230.57421082200815,532.3932930995766,300,532.3542879108572"></path>
                            </svg>
                            <i class="bx bx-slideshow"></i>
                        </div>
                        <h4><a href="">Rekening Listrik</a></h4>
                        <p>Melampirkan rekening listrik selama 3 bulan terakhir.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch mt-4 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="200">
                    <div class="icon-box iconbox-red">
                        <div class="icon">
                            <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                            <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,532.3542879108572C369.38199826031484,532.3153073249985,429.10787420159085,491.63046689027357,474.5244479745417,439.17860296908856C522.8885846962883,383.3225815378663,569.1668002868075,314.3205725914397,550.7432151929288,242.7694973846089C532.6665558377875,172.5657663291529,456.2379748765914,142.6223662098291,390.3689995646985,112.34683881706744C326.66090330228417,83.06452184765237,258.84405631176094,53.51806209861945,193.32584062364296,78.48882559362697C121.61183558270385,105.82097193414197,62.805066853699245,167.19869350419734,48.57481801355237,242.6138429142374C34.843463184063346,315.3850353017275,76.69343916112496,383.4422959591041,125.22947124332185,439.3748458443577C170.7312796277747,491.8107796887764,230.57421082200815,532.3932930995766,300,532.3542879108572"></path>
                            </svg>
                            <i class="bx bx-slideshow"></i>
                        </div>
                        <h4><a href="">Rekening Air</a></h4>
                        <p>Melampirkan rekening air selama 3 bulan terakhir.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch mt-4 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="200">
                    <div class="icon-box iconbox-red">
                        <div class="icon">
                            <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                            <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,532.3542879108572C369.38199826031484,532.3153073249985,429.10787420159085,491.63046689027357,474.5244479745417,439.17860296908856C522.8885846962883,383.3225815378663,569.1668002868075,314.3205725914397,550.7432151929288,242.7694973846089C532.6665558377875,172.5657663291529,456.2379748765914,142.6223662098291,390.3689995646985,112.34683881706744C326.66090330228417,83.06452184765237,258.84405631176094,53.51806209861945,193.32584062364296,78.48882559362697C121.61183558270385,105.82097193414197,62.805066853699245,167.19869350419734,48.57481801355237,242.6138429142374C34.843463184063346,315.3850353017275,76.69343916112496,383.4422959591041,125.22947124332185,439.3748458443577C170.7312796277747,491.8107796887764,230.57421082200815,532.3932930995766,300,532.3542879108572"></path>
                            </svg>
                            <i class="bx bx-slideshow"></i>
                        </div>
                        <h4><a href="">Bukti Pembayaran Pajak Bumi dan Bangunan (PBB)</a></h4>
                        <p>Melampirkan bukti pembayaran Pajak Bumi dan Bangunan (PBB) tahun terakhir
                            seluruh tanah atau bangunan yang dimiliki.
                        </p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch mt-4 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="200">
                    <div class="icon-box iconbox-red">
                        <div class="icon">
                            <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                            <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,532.3542879108572C369.38199826031484,532.3153073249985,429.10787420159085,491.63046689027357,474.5244479745417,439.17860296908856C522.8885846962883,383.3225815378663,569.1668002868075,314.3205725914397,550.7432151929288,242.7694973846089C532.6665558377875,172.5657663291529,456.2379748765914,142.6223662098291,390.3689995646985,112.34683881706744C326.66090330228417,83.06452184765237,258.84405631176094,53.51806209861945,193.32584062364296,78.48882559362697C121.61183558270385,105.82097193414197,62.805066853699245,167.19869350419734,48.57481801355237,242.6138429142374C34.843463184063346,315.3850353017275,76.69343916112496,383.4422959591041,125.22947124332185,439.3748458443577C170.7312796277747,491.8107796887764,230.57421082200815,532.3932930995766,300,532.3542879108572"></path>
                            </svg>
                            <i class="bx bx-slideshow"></i>
                        </div>
                        <h4><a href="">Bukti Pembayaran Pajak Kendaraan </a></h4>
                        <p>Melampirkan bukti Pembayaran Pajak Kendaraan daru seluruh motor dan/atau mobil yang dimiliki</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch mt-4 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="200">
                    <div class="icon-box iconbox-red">
                        <div class="icon">
                            <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                            <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,532.3542879108572C369.38199826031484,532.3153073249985,429.10787420159085,491.63046689027357,474.5244479745417,439.17860296908856C522.8885846962883,383.3225815378663,569.1668002868075,314.3205725914397,550.7432151929288,242.7694973846089C532.6665558377875,172.5657663291529,456.2379748765914,142.6223662098291,390.3689995646985,112.34683881706744C326.66090330228417,83.06452184765237,258.84405631176094,53.51806209861945,193.32584062364296,78.48882559362697C121.61183558270385,105.82097193414197,62.805066853699245,167.19869350419734,48.57481801355237,242.6138429142374C34.843463184063346,315.3850353017275,76.69343916112496,383.4422959591041,125.22947124332185,439.3748458443577C170.7312796277747,491.8107796887764,230.57421082200815,532.3932930995766,300,532.3542879108572"></path>
                            </svg>
                            <i class="bx bx-slideshow"></i>
                        </div>
                        <h4><a href="">Surat Keterangan RT Atas Jumlah Kepemilikan Rumah, Motor, Mobil, dan Lahan Pertanian atau Perkebunan</a></h4>
                        <p>Melampirkan Surat Keterangan RT Atas Jumlah Kepemilikan Rumah, Motor, Mobil, dan Lahan Pertanian atau Perkebunan</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch mt-4 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="200">
                    <div class="icon-box iconbox-red">
                        <div class="icon">
                            <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                            <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,532.3542879108572C369.38199826031484,532.3153073249985,429.10787420159085,491.63046689027357,474.5244479745417,439.17860296908856C522.8885846962883,383.3225815378663,569.1668002868075,314.3205725914397,550.7432151929288,242.7694973846089C532.6665558377875,172.5657663291529,456.2379748765914,142.6223662098291,390.3689995646985,112.34683881706744C326.66090330228417,83.06452184765237,258.84405631176094,53.51806209861945,193.32584062364296,78.48882559362697C121.61183558270385,105.82097193414197,62.805066853699245,167.19869350419734,48.57481801355237,242.6138429142374C34.843463184063346,315.3850353017275,76.69343916112496,383.4422959591041,125.22947124332185,439.3748458443577C170.7312796277747,491.8107796887764,230.57421082200815,532.3932930995766,300,532.3542879108572"></path>
                            </svg>
                            <i class="bx bx-slideshow"></i>
                        </div>
                        <h4><a href="">Kartu Tanda Mahasiswa (KTM)</a></h4>
                        <p>Melampirkan Kartu Tanda Mahasiswa/Kartu Pelajar/Surat keterangan aktif studi apabila orang tua/wali
                            memiliki tanggung jawab lain yang sedang menempuh pendidikan
                        </p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch mt-4 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="200">
                    <div class="icon-box iconbox-red">
                        <div class="icon">
                            <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                            <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,532.3542879108572C369.38199826031484,532.3153073249985,429.10787420159085,491.63046689027357,474.5244479745417,439.17860296908856C522.8885846962883,383.3225815378663,569.1668002868075,314.3205725914397,550.7432151929288,242.7694973846089C532.6665558377875,172.5657663291529,456.2379748765914,142.6223662098291,390.3689995646985,112.34683881706744C326.66090330228417,83.06452184765237,258.84405631176094,53.51806209861945,193.32584062364296,78.48882559362697C121.61183558270385,105.82097193414197,62.805066853699245,167.19869350419734,48.57481801355237,242.6138429142374C34.843463184063346,315.3850353017275,76.69343916112496,383.4422959591041,125.22947124332185,439.3748458443577C170.7312796277747,491.8107796887764,230.57421082200815,532.3932930995766,300,532.3542879108572"></path>
                            </svg>
                            <i class="bx bx-slideshow"></i>
                        </div>
                        <h4><a href="">Surat Keterangan Kematian (jika orang tua telah meninggal)</a></h4>
                        <p>Melampirkan Surat Keterangan Kematian (jika orang tua telah meninggal)
                        </p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch mt-4 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="200">
                    <div class="icon-box iconbox-red">
                        <div class="icon">
                            <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                            <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,532.3542879108572C369.38199826031484,532.3153073249985,429.10787420159085,491.63046689027357,474.5244479745417,439.17860296908856C522.8885846962883,383.3225815378663,569.1668002868075,314.3205725914397,550.7432151929288,242.7694973846089C532.6665558377875,172.5657663291529,456.2379748765914,142.6223662098291,390.3689995646985,112.34683881706744C326.66090330228417,83.06452184765237,258.84405631176094,53.51806209861945,193.32584062364296,78.48882559362697C121.61183558270385,105.82097193414197,62.805066853699245,167.19869350419734,48.57481801355237,242.6138429142374C34.843463184063346,315.3850353017275,76.69343916112496,383.4422959591041,125.22947124332185,439.3748458443577C170.7312796277747,491.8107796887764,230.57421082200815,532.3932930995766,300,532.3542879108572"></path>
                            </svg>
                            <i class="bx bx-slideshow"></i>
                        </div>
                        <h4><a href="">Alasan Pengajuan Permohonan Keringanan UKT</a></h4>
                        <p>Melampirkan Alasan Pengajuan Permohonan Keringanan UKT
                        </p>
                    </div>
                </div>

            </div>


        </div>
    </section>
    <!-- End Sevices Section -->

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
