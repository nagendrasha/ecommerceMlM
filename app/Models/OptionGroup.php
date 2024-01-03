<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OptionGroup extends Model
{
    use HasFactory, SoftDeletes;

    public function getOption() {
        return $this->hasMany(Option::class, 'option_group_id', 'id')->orderBy('sort_order');
    }
}
