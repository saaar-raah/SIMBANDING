@extends('layouts.master')
@section('content')
<section id="alur" class="faq ">
  <div class="container mt-5" data-aos="fade-up">
    <div class="section-title">
      <h2>ALUR PENGAJUAN BANDING</h2>
      <p>Mahasiswa Institut Teknologi Kalimantan (ITK) Angkatan 2012-2020 yang akan mengajukan permohonan keringanan UKT
        harap mengumpulkan berkas yang telah diurutkan sebagai berikut:</p>
    </div>
    <div class="stepper d-flex flex-column mt-5 ml-2">
      @foreach ($alur as $index=>$a)
      <div class="d-flex mb-1">
        <div class="d-flex flex-column pr-4 align-items-center">
          <div class="rounded-circle py-2 px-3 bg-primary text-white mb-1">{{ $a->urutan }}</div>
          @if ($index < count($alur)-1)
          <div class="line h-100"></div>
          @endif
        </div>
        <div>
          <h5 class="text-dark">{!! $a->nama_alur !!}</h5>
          <p class="lead text-muted pb-3">{!! $a->isi !!}</p>
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
</section>
@endsection