<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    //
    protected $table = "profile";
    protected $fillable = ['user_id', 'umur', 'alamat', 'bio'];
}
