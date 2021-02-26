<?php

namespace App\Http\Controllers;

use App\Http\Requests\ImunisasiRequest;
use App\Models\Imunisasi;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class ImunisasiController extends Controller
{
    public function imunisasi()
    {
        return view('imunisasis.imunisasi', [
            'imunisasis' => Imunisasi::first()->paginate(20),
        ]);
    }
    public function create()
    {
        return view('imunisasis.create', ['imunisasi' => new Imunisasi()]);
    }
    public function tambah(ImunisasiRequest $request)
    {
        $attr = $request->all();

        $attr['slug'] = Str::slug(request('nama_imunisasi'));
        // Create new post
        Imunisasi::create($attr);

        session()->flash('success', 'Data berhasil ditambahkan');
        // session()->flash('error', 'Post tidak berhasil ditambahkan');
        return redirect('imunisasis');
       

        // $attr = request()->validate([
            // 'nama_bayi' => 'required',
            // 'tanggal_lahir' => 'required',
            // 'jenis_kelamin' => 'required',
            // 'alamat'    =>  'required',
            // 'nama_orang_tua' => 'required',
            // ]);
        
    }
    public function edit(Imunisasi $imunisasi)
    {
        return view('imunisasis.edit', compact('imunisasi'));
    }

    public function update(ImunisasiRequest $request, Imunisasi $imunisasi)
    {
        $attr = $request->all();
    //    $attr = $this->validateRequest();

        $imunisasi->update($attr);

        session()->flash('success', 'Post berhasil ubah');
        return redirect('imunisasis');
    }
    public function delete(Imunisasi $imunisasi)
    {
        $imunisasi->delete();
        session()->flash("success", "Post berhasil di hapus");
        return redirect('imunisasis');
    }
}
