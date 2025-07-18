<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    use HasFactory;


    protected $fillable = [
        'order_number',
        'status',
        'total_amount',
        'tax_amount',
        'shipping_amount',
        'discount_amount',
        'currency',
        'payment_status',
        'payment_method',
        'notes',
        'shipped_at',
        'delivered_at',
        'user_id',
    ];



    public function user()
    {
        return $this->belongsTo(User::class);
    }


    public function order_items()
    {
        return $this->hasMany(order_item::class);
    }
    public function shipping_addresses()
    {
        return $this->hasMany(shipping_address::class);
    }


}
    
