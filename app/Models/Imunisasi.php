<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Imunisasi extends Model
{
    use HasFactory;
    protected $fillable = ['nama_imunisasi', 'slug'];

    public function scopeFirstLatest()
    {        
        return $this->first()->latest();

    }
    public function scopeFirstPost()
    {        
        return $this->first()->get();

    }

    public function rekaps()
    {
        return $this->belongsToMany(Rekap::class);
    }
    public function bayis()
    {
        return $this->belongsToMany(Bayi::class);
    }
}
