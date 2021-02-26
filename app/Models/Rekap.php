<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rekap extends Model
{
    use HasFactory;
    protected $guarded = [];

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

    public function bayis()
    {
        return $this->belongsToMany(Bayi::class);
    }
}
