<?php

namespace App\Http\Controllers;
use App\Models\pengumuman;
use Illuminate\Http\Request;

class PengumumanController extends Controller
{
    public function index()
    {
        $pengumuman = pengumuman::get();
        return view('admin.pengumuman', compact('pengumuman'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('admin.addpengumuman');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'isi' => 'required',
            'penulis' => 'required',
        ]);


        if (isset($request->foto)){
            $extention = $request->foto->extension();
            $image_name = time().'.'.$extention;
            $request->foto->move(public_path('img\pengumuman'),$image_name);

        }else{
            $image_name = null;
        }
            $pengumuman = pengumuman::create([
                'judul' => $request->judul,
                'isi' => $request->isi,
                'penulis' => $request->penulis,
                'foto' => $image_name,
            ]);
        return redirect()->route('pengumumanAdmin.index')
            ->with('success', 'pengumuman Berhasil Ditambahkan');
    }
    public function show($id)
    {
        $pengumumans = pengumuman::where('id', $id)->first();
        return view('showPengumuman', compact('pengumumans'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }


    public function edit($id)
    {
        $pengumuman = pengumuman::find($id);

        return view('admin.editpengumuman', compact('pengumuman'));
    }

    public function update(Request $request, $id)
    {


        $pengumuman = pengumuman::find($id);
        $pengumuman->judul = $request->get('judul');
        $pengumuman->isi = $request->get('isi');
        if (isset($request->foto)){
            $extention = $request->foto->extension();
            $image_name = time().'.'.$extention;
            unlink(public_path('img/pengumuman/'.$pengumuman->foto));
            $request->foto->move(public_path('img/pengumuman'),$image_name);
            $pengumuman->foto = $image_name;

        }else{
            $image_name = null;
        }
        $pengumuman->save();


        return redirect()->route('pengumumanAdmin.index')
        ->with('edit', 'pengumuman Berhasil Diedit');
    }

    public function destroy($id)
    {
        pengumuman::where('id', $id)->delete();

        return redirect()->route('pengumumanAdmin.index')
            ->with('delete', 'pengumuman Berhasil Dihapus');
    }
}
