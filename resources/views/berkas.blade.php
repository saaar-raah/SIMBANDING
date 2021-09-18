{{-- @php
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
@endphp --}}
@extends('layouts.master')
@section('content')
<section id="berkas" class="services pb-0">
  <div class="container mt-5 mb-5" data-aos="fade-up">
    <div class="section-title">
      <h3>Berkas Yang Dibutuhkan</h3>
      <p>Mahasiswa Institut Teknologi Kalimantan (ITK) Angkatan 2012-2020 yang akan mengajukan permohonan keringanan UKT
        harap menyiapkan berkas-berkas yang dibutuhkan berikut:</p>
    </div>

    <div class="row">

      {{-- @foreach ($judul as $key => $jd) --}}
      @foreach ($berkas as $item)
      <div    class="col-lg-4 col-md6 d-flex align-items-stretch mt-4 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="200">
        <div style="border-radius: 15px; box-shadow: 1px 2px 2px 2px #ccc" class="icon-box w-100 pt-4 ">
          <div class="icon">
            <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
              <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,582.0697525312426C382.5290701553225,586.8405444964366,449.9789794690241,525.3245884688669,502.5850820975895,461.55621195738473C556.606425686781,396.0723002908107,615.8543463187945,314.28637112970534,586.6730223649479,234.56875336149918C558.9533121215079,158.8439757836574,454.9685369536778,164.00468322053177,381.49747125262974,130.76875717737553C312.15926192815925,99.40240125094834,248.97055460311594,18.661163978235184,179.8680185752513,50.54337015887873C110.5421016452524,82.52863877960104,119.82277516462835,180.83849132639028,109.12597500060166,256.43424936330496C100.08760227029461,320.3096726198365,92.17705696193138,384.0621239912766,124.79988738764834,439.7174275375508C164.83382741302287,508.01625554203684,220.96474134820875,577.5009287672846,300,582.0697525312426"></path>
            </svg>
            {{-- <img src="{{URL::asset('img/icon/'.$item->icon)}}"> --}}
            <i class="far fa-file-alt"></i>
          </div>
          <h4>{!! $item->judul !!}</h4>
          <p>{!! $item->isi !!}</p>
        </div>
      </div>
      @endforeach



      {{-- @endforeach --}}
    </div>

  </div>
</section>

<section id="berkas" class="services">
<div class="container mb-5 pb-5" data-aos="fade-up">
  <div class="container mt-5" data-aos="fade-up">
    <div class="section-title">
      <h3>Unduh File Berkas</h3>
      <p>Mahasiswa Institut Teknologi Kalimantan (ITK) Angkatan 2012-2020 yang akan mengajukan permohonan keringanan UKT
        harap menyiapkan berkas-berkas yang dibutuhkan berikut:</p>
    </div>
    <div class="row">
      <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">No.</th>
            <th scope="col">Nama File</th>
            <th scope="col">Link File</th>
            <th scope="col">File</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($fileberkas as $item)
          <tr>
            <td style="text-align: center;" scope="row">{{$loop->iteration}}</td>
            <td style="text-align: center;">{{$item->nama}}</td>
            <td style="text-align: center;">
              <a href="{{URL($item->link_file)}}" target="_blank">Link</a>
            </td>
            <td style="text-align: center;">
              <a href={{URL::asset('file/fileberkas/'.$item->file)}}>Download File</a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
</section>
@endsection