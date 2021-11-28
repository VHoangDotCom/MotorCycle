<?php

namespace App\Models;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;



class admin extends Authenticatable
{
    use HasFactory, Notifiable,HasApiTokens;
    protected  $table = 'admins';
    protected $fillable=[
        'email',
        'password',
        'fullName',
        'company',
        'job',
        'country',
        'address',
        'phone',
        'email',
        'about',
        'image',
        'twitter',
        'facebook',
        'instagram',
        'linkedin',
    ];

    protected $hidden=[
        'password',
        'remember_token',
    ];

    protected $casts=[
      'email_verified_at' => 'datetime',
    ];

}
