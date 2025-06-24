<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class shopping_cart extends Model
{
    use HasFactory;

     protected $fillable = [
        'quantity',
        'price',
        'total',
        'user_id',
        'product_id',    
    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function product()
    {
        return $this->belongsTo(product::class);
    }
    


}
