<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RecyclerOwner extends Model
{
    protected $fillable = ['collection_center_name', 'collection_center_information'];

    public function user()
    {
        return $this->morphOne('App\Models\User', 'userable');
    }
}
