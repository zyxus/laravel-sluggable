<?php

namespace Zyxus\LaravelSluggable\Models;

use Illuminate\Database\Eloquent\Model;

class Slug extends Model
{
    public $fillable = [
        'model_type',
        'model_id',
        'slug'
    ];
}
