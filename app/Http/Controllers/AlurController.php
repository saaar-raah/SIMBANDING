<?php

namespace App\Http\Controllers;
use App\Models\alur;
use Illuminate\Http\Request;

class AlurController extends Controller
{
    public function index()
    {
        $alur = alur::get();
        return view('admin.alur', compact('alur'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('admin.addAlur');
    }

    public function store(Request $request)
    {
        // $request->validate([
        //     'pertanyaan' => 'required',
        //     'jawaban' => 'required',
        // ]);
            $alur = alur::create([
                'nama_alur' => $request->nama_alur,
                'isi' => $request->isi,
                'link' => $request->link,
                'urutan' => $request->urutan,
            ]);
        return redirect()->route('alurAdmin.index')
            ->with('success', 'alur Berhasil Ditambahkan');
    }
    public function show($id)
    {
        $alurs = alur::where('id', $id)->first();
        return view('alurAdmin.show', compact('alur'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }


    public function edit($id)
    {
        $alur = alur::find($id);

        return view('admin.editalur', compact('alur'));
    }

    public function update(Request $request, $id)
    {


        $alur = alur::find($id);
        $alur->nama_alur = $request->get('nama_alur');
        $alur->isi = $request->get('isi');
        $alur->link = $request->get('link');
        $alur->urutan = $request->get('urutan');

        $alur->save();


        return redirect()->route('alurAdmin.index')
        ->with('edit', 'pengumuman Berhasil Diedit');
    }

    public function destroy($id)
    {
        alur::where('id', $id)->delete();

        return redirect()->route('alurAdmin.index')
            ->with('delete', 'alur Berhasil Dihapus');
    }
}
