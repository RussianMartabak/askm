<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pertanyaan extends Model
{
    protected $table = 'pertanyaan';
    protected $fillable = ['judul', 'content', 'thumbnail', 'kategori_id'];
    public function user() {
        return $this->hasOne('App\User', 'user_id');
    }
}
