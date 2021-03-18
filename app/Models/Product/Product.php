<?php

namespace App\Models\Product;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Customer\Order;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
      'name',
      'price',
      'status'
    ];

    public function order()
    {
      return $this->hasMany(Order::class);
    }

}
