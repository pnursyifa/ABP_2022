<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table='product';

    public function brand() {
        return $this->belongsTo(Brand::class, 'brand_id', 'id');
    }

    public function gudang() {
        return $this->belongsTo(Gudang::class, 'gudang_id', 'id');
    }

    public function order_detail() {
        return $this->hasMany(order_detail::class, 'produk_id', 'id');
    }
}
