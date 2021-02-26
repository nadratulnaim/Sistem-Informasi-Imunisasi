<?php

namespace App\Http\Controllers;
use App\Models\Wilayah;
use App\Models\Bayi;
use Illuminate\Http\Request;

class WilayahController extends Controller
{
    public function wilayah(Wilayah $wilayah)
    {
        $bayis = $wilayah->bayis()->paginate(9);
        return view('bayis.bayi', compact('bayis'));
    



        // $bayis = $wilayah->bayis();
        // return view('bayis.bayi', [
        //     'bayis' => Wilayah::with('bayi')->latest()->paginate(9),
        //     // 'wilayah' => Wilayah::get()
        // ]);
    }
    public function search()
        
}
