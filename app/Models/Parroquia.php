<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parroquia extends Model
{
    protected $fillable = ['nombre'];

    public function canton()
    {
        return $this->belongsTo('App\Models\Canton');
    }
}
