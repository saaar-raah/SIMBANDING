<?php

namespace App\Http\Controllers;
use App\pengumuman;
use App\alur;
use App\berkas;
use App\periode;
use App\faq;
use App\fileberkas;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function pengumuman()
    {
        $pengumuman = pengumuman::latest()->paginate(6);
        $carouselpengumuman = pengumuman::latest()->paginate(3);
        return view('pengumuman', ['carouselpengumuman' => $carouselpengumuman])->with ('pengumuman', $pengumuman);
    }
    public function alur()
    {
        $alur = alur::all();
        return view('alur')->with ('alur', $alur);
    }
    public function berkas()
    {
        $berkas = berkas::all();
        $fileberkas = fileberkas::all();
        return view('berkas', compact( 'berkas','fileberkas'));
    }
    public function faq()
    {
        $faq = faq::all();
        return view('FAQ')->with ('FAQ', $faq);
    }
    public function admin()
    {
        $pengumuman = pengumuman::all();
        $alur = alur::all();
        $berkas = berkas::all();
        $FAQ = faq::all();
        $fileberkas = fileberkas::all();
        $periode = periode::all();
        return view("admin/dashboard", compact("pengumuman", "alur", "berkas", "FAQ", "fileberkas", "periode"));
    }
    public function home()
    {
        $alur = alur::orderBy('urutan','ASC')->get();
        $periode = periode::all();
        return view("landingpage", compact( "alur","periode"));
    }
}
