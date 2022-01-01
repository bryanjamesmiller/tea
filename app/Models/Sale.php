<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;

    protected $fillable = ["total", "user_id", "fulfilled",];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function products() {
        return $this->belongsToMany(Product::class);
    }

    public function productSales() {
        return $this->hasMany(ProductSale::class);
    }
}
