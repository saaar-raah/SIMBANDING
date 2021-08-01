@php
$judul = ['Kartu Keluarga',
'Surat Keterangan Penghasilan Orang Tua',
'Surat Keterangan Penghasilan Lain',
'Rekening Listrik',
'Rekening Air',
'Bukti Pembayaran Pajak Bumi dan Bangunan (PBB)',
'Bukti Pembayaran Pajak Kendaraan',
'Surat Keterangan RT Atas Jumlah Kepemilikan Rumah, Motor, Mobil, dan Lahan Pertanian atau Perkebunan',
'Kartu Tanda Mahasiswa (KTM)',
'Surat Keterangan Kematian (jika orang tua telah meninggal)',
'Dokumen Alasan Pengajuan Permohonan Keringanan UKT'
];
$isi = ['Melampirkan Kartu Keluarga',
'Surat keterangan penghasilan orang tua dan/atau wali 3 bulan terakhir yang disahkan oleh RT/kelurahan/desa (untuk non
karyawan) atau oleh bendahara gaji (untuk karyawan institusi).',
'Surat keterangan ada/tidak penghasilan lain di luar yang tercantum pada butir 3 (tiga) dan disahkan oleh
RT/kelurahan/desa.',
'Melampirkan rekening listrik selama 3 bulan terakhir.',
'Melampirkan rekening air selama 3 bulan terakhir.',
'Melampirkan bukti pembayaran Pajak Bumi dan Bangunan (PBB) tahun terakhir seluruh tanah atau bangunan yang dimiliki.',
'Melampirkan bukti Pembayaran Pajak Kendaraan daru seluruh motor dan/atau mobil yang dimiliki',
'Melampirkan Surat Keterangan RT Atas Jumlah Kepemilikan Rumah, Motor, Mobil, dan Lahan Pertanian atau Perkebunan',
'Melampirkan Kartu Tanda Mahasiswa/Kartu Pelajar/Surat keterangan aktif studi apabila orang tua/wali memiliki tanggung
jawab lain yang sedang menempuh pendidikan',
'Melampirkan Surat Keterangan Kematian (jika orang tua telah meninggal',
'Melampirkan Dokumen Alasan Pengajuan Permohonan Keringanan UKT'
];
@endphp
@extends('layouts.master')
@section('content')
<section id="berkas" class="services">
  <div class="container mt-5" data-aos="fade-up">
    <div class="section-title">
      <h2>BERKAS YANG DIBUTUHKAN</h2>
      <p>Mahasiswa Institut Teknologi Kalimantan (ITK) Angkatan 2012-2020 yang akan mengajukan permohonan keringanan UKT
        harap menyiapkan berkas-berkas yang dibutuhkan berikut:</p>
    </div>

    <div class="row">

      @foreach ($judul as $key => $jd)
      <div class="col-lg-4 col-md6 d-flex align-items-stretch mt-4 aos-init aos-animate" data-aos="zoom-in"
        data-aos-delay="200">
        <div class="icon-box w-100 pt-4">
          <h4><a href=""> {{ $jd }} </a></h4>
          <p>{{ $isi[$key] }}</p>
        </div>
      </div>
      @endforeach
    </div>

  </div>
</section>
@endsection