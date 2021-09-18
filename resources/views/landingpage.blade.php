@extends('layouts.master')
@section('tambahanheader')
<section id="hero" class="d-flex align-items-center pt-3">
  <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
    <div class="row content-center">
      <div class="col-lg-5 text-left">
        <h1>Selamat Datang <br> di SimBanding</h1>
        <h2 class="text-justify">SimBanding (Sistem Informasi Banding UKT) adalah website yang melayani mahasiswa
          Institut Teknologi Kalimantan untuk melakukan pengajuan banding UKT (Uang Kuliah Tunggal).</h2>
      </div>
      <div class="col-lg-7 text-center">
        <img class="img-fluid max-width: 100%" src="{{URL::asset("img/banding-ukt.jpg")}}" alt="">
      </div>
    </div>

  </div>
</section>
@endsection
@section('content')
{{-- <section id="penjelasanukt" class="about "> --}}
<div class="container " data-aos="fade-up">
  <div class="row content ">
    <div class="col-lg-3 align-self-center">
      <i style="color:#124265" class="fas fa-question-circle fa-9x  d-none d-md-block"></i>
    </div>
    <div class="col-lg-8 col-sm-1">
      <h3 class="text-wrap font-weight-bold">PERPANJANGAN PENGAJUAN BANDING/PERHITUNGAN UKT UNTUK SEMESTER GASAL TA. 2020/2021</h3>
      <p class="text-justify">
        Berdasarkan Peraturan Menteri Pendidikan dan Kebudayaan Republik Indonesia No. 73 Tahun 2014 tentang Perubahan
        Atas Peraturan Menteri Pendidikan dan Kebudayaan Nomor 55 Tahun 2013 tentang Biaya Kuliah
        Tunggal dan Uang Kuliah Tunggal Pada Perguruan Tinggi Negeri di Lingkungan Kementerian Pendidikan dan
        Kebudayaan, dan mengingat masih adanya mahasiswa yang mengajukan Banding UKT, maka Institut Teknologi
        Kalimantan memberikan kesempatan kembali, dengan ketentuan sebagai berikut:
      </p>

      <ul>
        <li><i class="ri-check-double-line"></i> 1. Memberikan kesempatan kepada mahasiswa untuk mengajukan banding UKT
          dan permohonan mengangsur UKT. Pengajuan banding UKT atau mengangsur pembayaran UKT dapat dilakukan dengan
          mengajukan surat permohonan kepada Rektor Institut Teknologi Kalimantan dilengkapi dengan dokumen pendukung
        </li>

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
{{-- </section> --}}
{{-- <section id="alur" class="faq "> --}}
<div class="container mt-5 " data-aos="fade-up">
  <div class="section-title">
    <h3>Alur Pengajuan Banding</h3>
    <p>Mahasiswa Institut Teknologi Kalimantan (ITK) Angkatan 2012-2020 yang akan mengajukan permohonan keringanan UKT
      harap mengumpulkan berkas yang telah diurutkan sebagai berikut:</p>
  </div>
  <div class="stepper stepper-horizontal d-flex flex-column mt-5 ml-2">
    @foreach ($alur as $index=>$a)
    <div class="d-flex mb-1">
      <div class="d-flex flex-column pr-4 align-items-center">
        <div class="rounded-circle py-2 px-3 bg-primary text-white mb-1">{{ $loop->iteration }}</div>
        @if ($index < count($alur)-1) <div class="line h-100">
      </div>
      @endif
    </div>
    <div>
      <h5 class="text-dark">{!! $a->nama_alur !!}</h5>
      <div class="lead text-muted mb-4">
        {!! $a->isi !!}
      </div>
    </div>
  </div>
  @endforeach
  {{-- <div class="d-flex mb-1">
              <div class="d-flex flex-column pr-4 align-items-center">
                <div class="rounded-circle py-2 px-3 bg-primary text-white mb-1">2</div>
                <div class="line h-100"></div>
              </div>
              <div>
                <h5 class="text-dark">Clone application respository</h5>
                <p class="lead text-muted pb-3">Go to your dashboard and clone Git respository from the url in the dashboard
                  of your application</p>
              </div>
            </div> --}}
  {{-- <div class="d-flex mb-1">
              <div class="d-flex flex-column pr-4 align-items-center">
                <div class="rounded-circle py-2 px-3 bg-primary text-white mb-1">3</div>
                <div class="line h-100 d-none"></div>
              </div>
              <div>
                <h5 class="text-dark">Make changes and push!</h5>
                <p class="lead text-muted pb-3">Now make changes to your application source code, test it then commit &amp;
                  push</p>
              </div>
            </div> --}}
</div>
</div>
{{-- </section> --}}

{{-- <section id="penjelasanukt" class="about "> --}}
<div class="container " data-aos="fade-up">
  <div class="row my-5">
    <div class="col-md">
      {{-- <div class="card card-body my-2"> --}}
      <div class="row">
        <div class="col-md-1">
          <i class="fa fa-bullhorn text-white p-3 rounded-circle pulse pulse-orange" style="background-color: #2487ce;"
            aria-hidden="true"></i>
        </div>
        <div class="col-md">
          <h2 class="font-weight-bold">Periode Pengajuan/Banding UKT</h4>
        </div>
      </div>

      <dl class="row my-4">
        @foreach ($periode as $item)
        <div class="card card-body d-flex flex-row justify-content-between">
          <i class="text-primary fa fa-calendar-check fa-2x" aria-hidden="true"></i>
          <dt class="text-primary ml-2 mr-2">{!!$item->judul!!}</dt>
          <dd class="font-weight-bold">{!! date('d F Y', strtotime($item->tanggal_awal)) !!} - {!! date('d F
            Y', strtotime($item->tanggal_akhir)) !!}</dd>
          </dd>
        </div>
        @endforeach
      </dl>

      {{-- <label class="small">Lihat informasi lengkap SNMPTN <a class="font-weight-bold" href="#">di sini</a> --}}
      </label>
      {{-- </div> --}}
    </div>

  </div>
</div>
{{-- </section> --}}

@endsection