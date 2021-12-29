<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class IngredientProduct extends Model
{
    use HasFactory;

    protected $table = 'ingredient_product';

    protected $fillable = [
        'ingredient_id',
        'product_id',
        'ounces',
    ];

    public function ingredient(){
        return $this->belongsTo(Ingredient::class);
    }
}
