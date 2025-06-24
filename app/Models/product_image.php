<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product_image extends Model
{
    use HasFactory;


    protected $fillable = [
        'image_path',
        'alt_text',
        'is_primary',
        'sort_order',
        'product_id',    
    ];



    public function product()
    {
        return $this->belongsTo(product::class);
    }

}
