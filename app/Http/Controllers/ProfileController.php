<?php

namespace App\Http\Controllers;
use App\user;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        $profile = user::get();
        return view('admin.profile', compact('profile'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('admin.adduser');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'isi' => 'required',
        ]);
            $user = user::create([
                'judul' => $request->judul,
                'isi' => $request->isi,
            ]);
        return redirect()->route('profile.index')
            ->with('success', 'user Berhasil Ditambahkan');
    }
    public function show($id)
    {
        $users = user::where('id', $id)->first();
        return view('showPengumuman', compact('users'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }


    public function edit($id)
    {
        $profile = user::find($id);

        return view('admin.profile', compact('profile'));
    }

    public function update(Request $request, $id)
    {



        $user = user::find($id);
        $user->name = $request->get('name');
        // dd($user->foto);
        if (isset($request->foto)){
            $extention = $request->foto->extension();
            $image_name = time().'.'.$extention;
            if($user->foto != null){
            unlink(public_path('img/ava/'.$user->foto));
            }
            $request->foto->move(public_path('img/ava'),$image_name);
            $user->foto = $image_name;

        }else{
            $image_name = null;
        }
        $user->save();


        return redirect()->route('profile.index')
        ->with('edit', 'user Berhasil Diedit');
    }

    public function destroy($id)
    {
        user::where('id', $id)->delete();

        return redirect()->route('profile.index')
            ->with('delete', 'user Berhasil Dihapus');
    }
}
