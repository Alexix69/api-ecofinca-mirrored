<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Canton extends Model
{
    protected $fillable = ['nombre'];

    public function provincia()
    {
        return $this->belongsTo('App\Models\Provincia');
    }

    public function parroquia()
    {
        return $this->hasMany('App\Models\Parroquia');
    }
}
