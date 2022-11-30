<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'category_id'
    ];

    public function categories(): HasMany
    {
        return $this->hasMany(Category::class);
    }

    public function children_categories(): HasMany
    {
        return $this->hasMany(Category::class)->with('categories');
    }
}
