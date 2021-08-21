<?php

namespace App\Http\Controllers;
use App\Models\berkas;
use Illuminate\Http\Request;

class BerkasController extends Controller
{
    public function index()
    {
        $berkas = berkas::get();
        return view('admin.berkas', compact('berkas'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('admin.addBerkas');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'isi' => 'required',
        ]);
            $berkas = berkas::create([
                'judul' => $request->judul,
                'isi' => $request->isi,
                'icon' => $request->icon,
            ]);
        return redirect()->route('berkasAdmin.index')
            ->with('success', 'berkas Berhasil Ditambahkan');
    }
    public function show($id)
    {
        $berkass = berkas::where('id', $id)->first();
        return view('berkasAdmin.show', compact('berkas'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }


    public function edit($id)
    {
        $berkas = berkas::find($id);

        return view('admin.editBerkas', compact('berkas'));
    }

    public function update(Request $request, $id)
    {


        $berkas = berkas::find($id);
        $berkas->judul = $request->get('judul');
        $berkas->isi = $request->get('isi');
        $berkas->icon = $request->get('icon');

        $berkas->save();


        return redirect()->route('berkasAdmin.index')
        ->with('edit', 'pengumuman Berhasil Diedit');
    }

    public function destroy($id)
    {
        berkas::where('id', $id)->delete();

        return redirect()->route('berkasAdmin.index')
            ->with('delete', 'berkas Berhasil Dihapus');
    }
}
