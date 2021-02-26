<?php

namespace App\Http\Controllers;

use App\Http\Requests\BayiRequest;
use App\Models\Rekap;
use App\Http\Requests\RekapRequest;
use App\Models\Bayi;
use App\Models\Imunisasi;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class RekapController extends Controller
{
    public function rekap()
    {
        
        return view('rekaps.rekap', [
            'bayis' => Bayi::with('imunisasis')->latest()->paginate(9),
            'imunisasis' => Imunisasi::get(),
            
        ]);
    }
    public function create()
    {
        return view('rekaps.create', [
            'bayi' => new Bayi(),
            'imunisasis' => Imunisasi::get(),
            ]);
    }
    public function tambah(BayiRequest $request)
    {
        $attr = $request->all();
        $request->validate([
            'nama_bayi' => "unique:bayis,nama_bayi|required|min:3",
        ]);

        $attr['slug'] = Str::slug(request('nama_bayi'));
        // Create new post
        
        $tambah = Bayi::create($attr);

        $tambah->imunisasis()->attach(request('imunisasi'));

        session()->flash('success', 'Data berhasil ditambahkan');
        // session()->flash('error', 'Post tidak berhasil ditambahkan');
        return redirect('rekaps');
        
    }
    // public function edit(Bayi $bayi)
    // {  
        // return view('rekaps.edit', [
        //     'bayis' => Bayi::get(),
        //     'bayi' => $bayi,
        //     'imunisasis' => Imunisasi::get(),
        //     ]);
    public function edit($id)
    {
        $bayi = Bayi::find($id);
        $imunisasi = Imunisasi::find($id);
        return view ('rekaps.edit', compact('jenis', 'imunisasi'));
    }

    public function update(BayiRequest $request, Bayi $bayi)
    {
        $attr = $request->all();
        $request->validate([

            'nama_bayi' => 'required|min:3',
            
        ]);
    //    $attr = $this->validateRequest();

        $bayi->update($attr);

        $bayi->imunisasis()->sync(request('imunisasi'));

        session()->flash('success', 'Post berhasil ubah');
        return redirect('rekaps');
    }
    public function delete(Bayi $bayi)
    {
        $bayi->delete();
        $bayi->imunisasis()->detach(request('imunisasi'));
        session()->flash("success", "Post berhasil di hapus");
        return redirect('rekaps');
    }
}
