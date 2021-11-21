<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    use HasFactory;
    protected $fillable=[

        'categoryCode',
        'title',
        'content',
        'status',
    ];
    public function product_people(){
        return $this->hasMany(ProductPeople::class,'category_id','id');
    }
}
