<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Canton extends Model
{
    public function provincia()
    {
        return $this->belongsTo('App\Models\Provincia');
    }

    public function parroquias()
    {
        return $this->hasMany('App\Models\Parroquia');
    }
}
