<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\category;
use App\Models\Review;
use App\Models\Wishlist;
use App\Models\Checkout;
use App\Models\Thumbnail;

class product extends Model
{
    protected $primaryKey = 'pro_id';
    public $fillable=([
        'productName',
        'title',
        'description',
        'quantity',
       'pro_old_price',
        'pro_new_price',
        'pro_sale',
        'cate_id',
        'productType',
        'status',
        'image'
    ]);

    public function category(){
        return $this->belongsTo(category::class,'cate_id');
    }
    public function reviews(){
        return $this->hasMany(Review::class,'pro_id');
    }
    public function wishlists(){
        return $this->hasMany(Wishlist::class,'pro_id');
    }
    public function checkouts(){
        return $this->hasMany(Checkout::class);
    }
    public function thumbnails(){
        return $this->hasMany(Thumbnail::class.'pro_id');
    }
    public function scopeNewest($query){
        return $query->orderBy('updated_at','desc');
    }
    public function scopeViewest($query){
        return $query->orderBy('view','desc');
    }
    public function scopeSaling($query){
        return $query->where('pro_sale',1);
    }
    public function scopeAscending($query){
        return $query->orderBy('pro_new_price','asc');
    }
    public function scopeDecrease($query)
    {
        return $query->orderBy('pro_new_price', 'desc');
    }
    public function scopeNameproduct($query, $filter)
    {
        return $query->where('productName', 'LIKE', '%' . $filter . '%');
    }
    public function scopePricebetween($query, $min, $max)
    {
        return $query->whereBetween('pro_new_price', [$min, $max]);
    }
    public function scopeSearch($query, $search)
    {
        return $query->where('productName', 'LIKE', '%' . $search . '%');
    }

}
