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
        'picture',
        'latitude',
        'longitude'
    ];

    public static function boot()
    {
        parent::boot();
        static::creating(function ($delivery) {
            $delivery->user_id = Auth::id();
        });
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
