<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserAddress extends Model
{
    use HasFactory ,SoftDeletes ;
    protected $fillable = [
       'user_id', 'address', 'city', 'state', 'postal_code', 'country', 'phone', 'email', 'name'];
    protected $table = 'user_addresses';

    public function user(){
        return $this->belongsTo(User::class);
    }
    
}
