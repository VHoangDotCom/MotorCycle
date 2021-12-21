<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    public $fillable=([
        'blogCode',
        'title',
        'image',
        'description',
        'content',
        'createdBy',

    ]);
}
