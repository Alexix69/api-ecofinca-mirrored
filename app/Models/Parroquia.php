<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parroquia extends Model
{
    public function canton()
    {
        return $this->belongsTo('App\Models\Canton');
    }

    public function users()
    {
        return $this->hasMany('App\Models\User');
    }
}
