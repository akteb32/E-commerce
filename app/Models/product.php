<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;


    protected $fillable = [
        'name',
        'slug',
        'description',
        'short_description',
        'sku',
        'price',
        'sale_price',
        'cost_price',
        'stock_quantity',
        'min_quantity',
        'weight',
        'dimensions',
        'is_active',
        'is_featured',
        'manage_stock',
        'stock_status',
        'image',
        'gallery',
        'meta_title',
        'meta_description',
        'category_id',
        'subcategory_id',
    ];



    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function subcategory()
    {
        return $this->belongsTo(subcategory::class);
    }

}
