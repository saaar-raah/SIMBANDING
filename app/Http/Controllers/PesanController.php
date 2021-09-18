<?php

namespace App\Http\Controllers;
use App\pesan;
use Illuminate\Http\Request;

class PesanController extends Controller
{
    public function index()
    {
        $pesan = pesan::get();
        return view('admin.pesan', compact('pesan'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('admin.addpesan');
    }

    public function store(Request $request)
    {
        // $request->validate([
        //     'pertanyaan' => 'required',
        //     'jawaban' => 'required',
        // ]);
            $pesan = pesan::create([
                'nama' => $request->nama,
                'email' => $request->email,
                'judul' => $request->judul,
                'pesan' => $request->pesan,
            ]);
        return view('landingpage')
            ->with('success', 'pesan Berhasil Ditambahkan');
    }
    public function show($id)
    {
        $pesans = pesan::where('id', $id)->first();
        return view('pesanAdmin.show', compact('pesan'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }


    public function edit($id)
    {
        $pesan = pesan::find($id);

        return view('admin.editpesan', compact('pesan'));
    }

    public function update(Request $request, $id)
    {


        $pesan = pesan::find($id);
        $pesan->pertanyaan = $request->get('pertanyaan');
        $pesan->jawaban = $request->get('jawaban');

        $pesan->save();


        return redirect()->route('pesanAdmin.index')
        ->with('edit', 'pengumuman Berhasil Diedit');
    }

    public function destroy($id)
    {
        pesan::where('id', $id)->delete();

        return redirect()->route('pesanAdmin.index')
            ->with('delete', 'pesan Berhasil Dihapus');
    }
}
