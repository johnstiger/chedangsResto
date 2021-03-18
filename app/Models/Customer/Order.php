<?php

namespace App\Models\Customer;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Customer\Customer;
use App\Models\Product\Product;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
      'customer_id',
      'product_id',
      'product_quantity',
      'total',
      'status',
      'oder_date'
    ];

    public function customer()
    {
      return $this->belongsTo(Customer::class);
    }

    public function product()
    {
      return $this->belongsTo(Product::class);
    }
}
