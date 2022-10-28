<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $table='customer';

    public function order() {
        return $this->hasMany(Order_detail::class, 'customer_id', 'id');
    }
}
