<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Checkout;
class Order extends Model
{
    protected $primaryKey = 'order_id';

    protected $fillable = [
        'user_id',
        'first_name',
        'last_name',
        'address',
        'city',
        'district',
        'ward',//xa, phuong
        'phone',
        'email',
        'new_email',
        'password',
        'message',
        'pay_method',
        'order_total',
        'order_qty',
        'order_status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function checkouts()
    {
        return $this->hasMany(Checkout::class, 'order_id');
    }
}
