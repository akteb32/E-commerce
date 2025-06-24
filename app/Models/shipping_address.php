<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class shipping_address extends Model
{
    use HasFactory;

    protected $fillable = [

        'first_name',
        'last_name',
        'company',
        'address_line_1',
        'address_line_2',
        'city',
        'state',
        'postal_code',
        'country',
        'phone',
        'order_id',
    ];


    public function order()
    {
        return $this->belongsTo(order::class);
    }





}
