<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kategori extends Model
{
    protected $table = 'kategori';
    protected $fillable = ['nama_kategori','keterangan'];
    
    public function pertanyaan(){
        return $this->hasMany('App\pertanyaan', 'kategori_id');
    }
}
