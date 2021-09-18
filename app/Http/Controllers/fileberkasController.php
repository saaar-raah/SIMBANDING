<?php

namespace App\Http\Controllers;
use App\fileberkas;
use Illuminate\Http\Request;

class fileberkasController extends Controller
{
    public function index()
    {
        $fileberkas = fileberkas::get();
        return view('admin.fileberkas', compact('fileberkas'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('admin.addfileberkas');
    }

    public function store(Request $request)
    {

        if (isset($request->file)){
            $extention = $request->file->extension();
            $file_berkas = time().'.'.$extention;
            $request->file->move(public_path('file\fileberkas'),$file_berkas);

        }else{
            $file_berkas = null;
        }
            $fileberkas = fileberkas::create([
                'nama' => $request->nama,
                'link_file' => $request->link_file,
                'file' => $file_berkas,
            ]);
        return redirect()->route('fileberkasAdmin.index')
            ->with('success', 'fileberkas Berhasil Ditambahkan');
    }
    public function show($id)
    {
        $fileberkas = fileberkas::where('id', $id)->first();
        return view('showfileberkas', compact('fileberkas'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }


    public function edit($id)
    {
        $fileberkas = fileberkas::find($id);

        return view('admin.editfileberkas', compact('fileberkas'));
    }

    public function update(Request $request, $id)
    {


        $fileberkas = fileberkas::find($id);
        $fileberkas->nama = $request->get('nama');
        $fileberkas->link_file = $request->get('link_file');
        if (isset($request->file)){
            $extention = $request->file->extension();
            $file_berkas = time().'.'.$extention;
            unlink(public_path('file/fileberkas/'.$fileberkas->file));
            $request->file->move(public_path('file/fileberkas'),$file_berkas);
            $fileberkas->file = $file_berkas;

        }else{
            $file_berkas = null;
        }
        $fileberkas->save();


        return redirect()->route('fileberkasAdmin.index')
        ->with('edit', 'fileberkas Berhasil Diedit');
    }

    public function destroy($id)
    {
        fileberkas::where('id', $id)->delete();

        return redirect()->route('fileberkasAdmin.index')
            ->with('delete', 'fileberkas Berhasil Dihapus');
    }
}
