<?php

namespace App\Http\Controllers;

use App\Http\Requests\BayiRequest;
use Illuminate\Support\Str;
use App\Models\{Bayi, Wilayah};
use Illuminate\Http\Request;

class BayiController extends Controller
{
    public function bayi()
    {
        return view('bayis.bayi', [
            'bayis' => Bayi::with('wilayah')->latest()->paginate(9),
            'wilayah' => Wilayah::get()
        ]);
    }

    // public function show(Bayi $post)
    // {
    //     return view('bayis.show', compact('bayi'));
    // }
    public function create()
    {
        return view('bayis.create', [
            'bayi' => new Bayi(),
            'wilayahs' => Wilayah::get(),
        ]);
    }
    public function tambah(BayiRequest $request)
    {
        $attr = $request->all();
        

        $attr['wilayah_id'] = request('wilayah');
        $attr['slug'] = Str::slug(request('nama_bayi'));
        // Create new post
        Bayi::create($attr);

        session()->flash('success', 'Post berhasil ditambahkan');
        // session()->flash('error', 'Post tidak berhasil ditambahkan');
        return redirect('bayis');
        // return back();
    }
    public function edit(Bayi $bayi)
    {
        return view('bayis.edit',
        [
           'bayi' => $bayi,
           'wilayahs' => Wilayah::get(),
        ]);
    }

    public function update(BayiRequest $request, Bayi $bayi)
    {
        $attr = $request->all();

        $attr['wilayah_id'] = request('wilayah');
        $bayi->update($attr);
        

        session()->flash('success', 'Data berhasil diubah');
        return redirect('bayis');
    }

    public function delete(Bayi $bayi )
    {
        // $bayi = Bayi::destroy($id);
        $bayi->delete();
        session()->flash("success", "Post berhasil di hapus");
        return redirect('bayis');
    }

}


