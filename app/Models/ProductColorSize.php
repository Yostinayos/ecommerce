<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductColorSize extends Model
{
    use HasFactory;
    protected $fillable = [ 'product_size_id', 'product_color_id', 'quantity', 'price_two', 'discount', 'status'];
    protected $table = 'product_color_size';

    public function product_size(){
        return $this->belongsTo(ProductSize::class);

    }
    public function product_color(){
        return $this->belongsTo(ProductColor::class);

    }
}
