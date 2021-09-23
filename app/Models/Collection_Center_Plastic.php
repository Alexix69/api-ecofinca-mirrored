<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Collection_Center_Plastic extends Model
{
    //use HasFactory;
    protected $fillable = [
        'manager_name',
        'manager_last_name',
        'manager_email',
        'manager_password',
        'manager_cellphone',
        'manager_neighborhood',
        'manager_address',
        'manager_picture',
        'manager_latitude',
        'manager_longitude'
    ];
}
