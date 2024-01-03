<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, SoftDeletes;

    public function getCategory() {
        return $this->hasOne(Category::class, 'id', 'category_id');
    }

    public function getImage() {
        return $this->hasMany(ProductImage::class, 'product_id', 'id')->orderBy('sort_order');
    }

    public function getTag() {
        return $this->hasMany(ProductTag::class, 'product_id', 'id')->orderBy('sort_order');
    }

    public function getOption() {
        return $this->hasMany(ProductOption::class, 'product_id', 'id');
    }
    
    public function getReview() {
        return $this->hasMany(ProductReview::class, 'product_id', 'id')->where('status', 1);
    }
}
