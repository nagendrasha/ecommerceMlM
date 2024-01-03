<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory, SoftDeletes;

    public function parents() {
        return $this->hasOne(Category::class, 'id', 'parent_id');
    }

    public function subcategory()
    {
        return $this->hasMany(Category::class, 'parent_id');
    }
}
