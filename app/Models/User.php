<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Laratrust\Traits\HasRolesAndPermissions;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory, Notifiable, HasRolesAndPermissions;

    protected $fillable = [
        'name', 'email', 'age', 'password', 'phone', 'photo', 'address', 'email_verified_at', 'role'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function doctor()
    {
        return $this->hasOne(Doctor::class);
    }

    public function work_time()
    {
        return $this->hasMany(WorkTime::class);
    }

    public function patient()
    {
        return $this->hasOne(Patient::class);
    }
}
