<?php

namespace App\Http\Controllers;
use App\FAQ;
use Illuminate\Http\Request;

class FAQController extends Controller
{
    public function index()
    {
        $FAQ = FAQ::get();
        return view('admin.faq', compact('FAQ'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('admin.addFAQ');
    }

    public function store(Request $request)
    {
        $request->validate([
            'pertanyaan' => 'required',
            'jawaban' => 'required',
        ]);
            $FAQ = FAQ::create([
                'pertanyaan' => $request->pertanyaan,
                'jawaban' => $request->jawaban,
            ]);
        return redirect()->route('FAQAdmin.index')
            ->with('success', 'FAQ Berhasil Ditambahkan');
    }
    public function show($id)
    {
        $FAQs = FAQ::where('id', $id)->first();
        return view('FAQAdmin.show', compact('FAQ'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }


    public function edit($id)
    {
        $FAQ = FAQ::find($id);

        return view('admin.editFAQ', compact('FAQ'));
    }

    public function update(Request $request, $id)
    {


        $FAQ = FAQ::find($id);
        $FAQ->pertanyaan = $request->get('pertanyaan');
        $FAQ->jawaban = $request->get('jawaban');

        $FAQ->save();


        return redirect()->route('FAQAdmin.index')
        ->with('edit', 'pengumuman Berhasil Diedit');
    }

    public function destroy($id)
    {
        FAQ::where('id', $id)->delete();

        return redirect()->route('FAQAdmin.index')
            ->with('delete', 'FAQ Berhasil Dihapus');
    }
}
