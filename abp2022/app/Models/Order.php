<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table='order';

    public function customer() {
        return $this->belongsTo(Customer::class, 'customer_id', 'id');
    }

    public function order_detail() {
        return $this->hasMany(order_detail::class, 'order_id', 'id');
    }
}
