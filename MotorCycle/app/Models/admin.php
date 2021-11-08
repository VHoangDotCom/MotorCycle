<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class admin extends Model
{
    use HasFactory;
    public $fillable=([
        'username',
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
    ]);
}
