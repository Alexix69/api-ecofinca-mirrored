<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Tymon\JWTAuth\Contracts\JWTSubject;

class User extends Authenticatable implements JWTSubject
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'lastname',
        'email',
        'password',
        'address',
        'image',
        'organization_type',
        'description',
        'parroquia_id',
        'role'
    ];

//    const ROLE_SUPERADMIN = 'ROLE_SUPERADMIN';
//    const ROLE_ADMIN = 'ROLE_ADMIN';
//    const ROLE_USER = 'ROLE_USER';
//
//    private const ROLES_HIERARCHY = [
//        self::ROLE_SUPERADMIN => [self::ROLE_ADMIN],
//        self::ROLE_ADMIN => [self::ROLE_USER],
//        self::ROLE_USER => []
//    ];

    const ROLE_FARM = 'ROLE_FARM';
    const ROLE_COLLECTION_CENTER = 'ROLE_COLLECTION_CENTER';

    private const ROLES_HIERARCHY = [
        self::ROLE_FARM => [],
        self::ROLE_COLLECTION_CENTER => []
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    public function getJWTCustomClaims()
    {
        return [];
    }

    public function deliveries()
    {
        return $this->hasMany('App\Models\Delivery');
    }


    //funcion para asignar la entrega a un centro de acopio
    public function assignedDeliveries()
    {
        return $this->hasMany('App\Models\Delivery', 'for_user_id', 'id');
    }

    public function parroquia()
    {
        return $this->belongsTo('App\Models\Parroquia');
    }

    public function isGranted($role)
    {
        if ($role === $this->role) {
            return true;
        }
        return self::isRoleInHierarchy($role, self::ROLES_HIERARCHY[$this->role]);
    }

    private static function isRoleInHierarchy($role, $role_hierarchy)
    {
        if (in_array($role, $role_hierarchy)) {
            return true;
        }
        foreach ($role_hierarchy as $role_included) {
            if (self::isRoleInHierarchy($role, self::ROLES_HIERARCHY[$role_included])) {
                return true;
            }
        }
        return false;
    }
}
