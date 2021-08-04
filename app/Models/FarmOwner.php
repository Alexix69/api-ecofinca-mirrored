<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FarmOwner extends Model
{
    protected $fillable = ['farm_name', 'farm_description'];

    public function user()
    {
        return $this->morphOne('App\Models\User', 'userable');
    }
}
