<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $fillable = ['credential_number'];

    public function user()
    {
        return $this->morphOne('App\Models\User', 'userable');
    }
}
