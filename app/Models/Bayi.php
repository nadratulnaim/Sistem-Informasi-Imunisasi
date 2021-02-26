<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Wilayah;
use Illuminate\Notifications\Notifiable;

class Bayi extends Model
{
    use HasFactory, Notifiable;
    protected $fillable = ['nama_bayi','jenis_kelamin', 'slug', 'tanggal_lahir', 'alamat', 'nama_orangtua', 'keterangan', 'wilayah_id'];
    
    public function scopeLatestFirst()
    {        
        return $this->latest()->first();

    }
    public function scopeLatestPost()
    {        
        return $this->latest()->get();

    }

    public function imunisasis()
    {
        return $this->belongsToMany(Imunisasi::class);
    }

    public function rekaps()
    {
        return $this->belongsToMany(Rekap::class);
    }
    public function wilayah()
    {
        return $this->belongsTo(Wilayah::class);
    }
}
