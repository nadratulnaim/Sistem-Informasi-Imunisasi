<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Post extends Model
{
    use HasFactory, Notifiable;
    protected $fillable = ['judul_post', 'slug', 'isi_post'];
    // protected $guarded = [];
    
    public function category()
    {
        return $this->hasMany(Category::class);
    }
    public function scopeLatestFirst()
    {        
        return $this->latest()->first();

    }
    public function scopeLatestPost()
    {        
        return $this->latest()->get();

    }
   
}
