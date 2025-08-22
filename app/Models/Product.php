<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Product extends Model
{
    /** @use HasFactory<\Database\Factories\ProductFactory> */
    use HasFactory;

    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Category::class, table: 'product_category',  foreignPivotKey: 'product_id');
    }
}
