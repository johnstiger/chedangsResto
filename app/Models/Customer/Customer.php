<?php

namespace App\Models\Customer;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Customer\Order;

class Customer extends Model
{
    use HasFactory;
    protected $fillable = [
      'firstname',
      'lastname',
      'address',
      'contact_number',
      'status'
    ];

    public function order()
    {
      return $this->hasMany(Order::class);
    }
}
