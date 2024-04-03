<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id', 'status', 'payment_status', 'payment_method', 'payment_id', 'total_price', 'address', 'city', 'postal_code'
        , 'country', 'phone', 'name', 'sur-name'
    ];
    protected $table = 'orders';

    public function user(){
        return $this->belongsTo(User::class);
    }
    
}
