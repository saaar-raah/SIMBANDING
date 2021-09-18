<?php

namespace App\Http\Controllers;
use App\periode;
use Illuminate\Http\Request;

class PeriodeController extends Controller
{
    public function index()
    {
        $periode = periode::get();
        return view('admin.periode', compact('periode'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('admin.addperiode');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'tanggal_awal' => 'required',
            'tanggal_akhir' => 'required',
        ]);

            $periode = periode::create([
                'judul' => $request->judul,
                'tanggal_awal' => $request->tanggal_awal,
                'tanggal_akhir' => $request->tanggal_akhir,
            ]);
        return redirect()->route('periodeAdmin.index')
            ->with('success', 'periode Berhasil Ditambahkan');
    }
    public function show($id)
    {
        $periodes = periode::where('id', $id)->first();
        $newsperiode =  periode::latest()->paginate(5);
        return view('showperiode', compact('periodes','newsperiode'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }


    public function edit($id)
    {
        $periode = periode::find($id);

        return view('admin.editperiode', compact('periode'));
    }

    public function update(Request $request, $id)
    {


        $periode = periode::find($id);
        $periode->judul = $request->get('judul');
        $periode->tanggal_awal = $request->get('tanggal_awal');
        $periode->tanggal_akhir = $request->get('tanggal_akhir');
        $periode->save();


        return redirect()->route('periodeAdmin.index')
        ->with('edit', 'periode Berhasil Diedit');
    }

    public function destroy($id)
    {
        periode::where('id', $id)->delete();

        return redirect()->route('periodeAdmin.index')
            ->with('delete', 'periode Berhasil Dihapus');
    }
}
