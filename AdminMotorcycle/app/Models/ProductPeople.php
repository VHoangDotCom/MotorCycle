<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductPeople extends Model
{
    use HasFactory;
    protected $fillable=[
        'productCode',
        'productName',
        'title',
        'description',
        'price',
        'discount',
        'quantity',
        'warranty',
        'createdBy',
        'categoryID',
        'productType',
        'status',
        'image'
    ];
    public function category(){
        return $this->hasOne(category::class,'id','categoryID')
            ->withDefault(['name'=>'']);
    }
}
