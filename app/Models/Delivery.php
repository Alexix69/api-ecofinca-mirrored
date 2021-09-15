<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Delivery extends Model
{
    protected $fillable = [
        'description',
        'quantity',
        'image',
        'provincia',
        'canton',
        'parroquia',
        'for_user_id',
        'state'
    ];

    public static function boot()
    {
        parent::boot();
        static::creating(function ($delivery) {
            $delivery->user_id = Auth::id();
        });
    }
//FUNCIONES AÑADIDAS PARA CREAR LA RELACION ENTRE ENTREGAS Y USUARIOS DE FINCA Y CENTRO DE ACOPIO POR SEPARADO
    public function userFarm()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function userCollectionCenter()
    {
        return $this->belongsTo('App\Models\User', 'id', 'for_user_id');
    }

}
