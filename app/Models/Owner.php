<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    protected $fillable = [
        'owner_name',
        'owner_last_name',
        'owner_email',
        'owner_password',
        'owner_cellphone',
        'owner_neighborhood',
        'owner_address',
        'owner_picture',
        'owner_latitude',
        'owner_longitude'
    ];
}
