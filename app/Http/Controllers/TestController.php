<?php

namespace App\Http\Controllers;
use App\test;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        $test = test::get();
        return view('admin.viewtest', compact('test'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('admin.addtest');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'isi' => 'required',
        ]);
            $test = test::create([
                'judul' => $request->judul,
                'isi' => $request->isi,
            ]);
        return redirect()->route('testAdmin.index')
            ->with('success', 'test Berhasil Ditambahkan');
    }
    public function show($id)
    {
        $tests = test::where('id', $id)->first();
        return view('showPengumuman', compact('tests'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }


    public function edit($id)
    {
        $test = test::find($id);

        return view('admin.edittest', compact('test'));
    }

    public function update(Request $request, $id)
    {


        $test = test::find($id);
        $test->judul = $request->get('judul');
        $test->isi = $request->get('isi');

        $test->save();


        return redirect()->route('testAdmin.index')
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function destroy($id)
    {
        test::where('id', $id)->delete();

        return redirect()->route('testAdmin.index')
            ->with('success', 'test Berhasil Dihapus');
    }
}
