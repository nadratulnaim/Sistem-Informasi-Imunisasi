<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use App\Models\Bayi;

class Wilayah extends Model
{
    use HasFactory, Notifiable;
    protected $fillable = ['nama_wilayah', 'slug'];

    public function bayis()
    {
        return $this->hasMany(Bayi::class);
    }
}
