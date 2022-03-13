<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class komentar extends Model
{
    //
    protected $table = 'komentar';
    protected $fillable = ['user_id', 'pertanyaan_id', 'komentar'];
}
