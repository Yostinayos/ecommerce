<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory ,SoftDeletes;
    protected $fillable = [
        'name', 'description', 'image', 'price', 'discount_price', 'category_id'];
    protected $table = 'products';
    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function product_colors(){
        return $this->hasMany(ProductColor::class);
    }
    public function product_sizes(){
        return $this->hasMany(ProductSize::class);
    }
    public function product_color_sizes(){
        return $this->hasMany(ProductColorSize::class);
    }
}
