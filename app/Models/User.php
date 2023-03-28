<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $primaryKey = 'id_users';

    public function address()
    {
        return $this->belongsTo(Address::class, 'address_id', 'id_address');
    }

    protected $fillable = [
        'title',
        'phone_number',
        'first_name',
        'last_name',
        'username',
        'email',
        'password',
        'birth_date',
        'function_id',
    ];

    public function function()
    {
        return $this->belongsTo(Functions::class);
    }

    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = bcrypt($password);
    }

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

}
