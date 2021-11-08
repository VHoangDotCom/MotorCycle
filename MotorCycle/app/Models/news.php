<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class news extends Model
{
    use HasFactory;
    public $fillable=([
        'newsCode',
        'title',
        'description',
        'content',
        'createdBy',
        'adminID',
    ]);
}
