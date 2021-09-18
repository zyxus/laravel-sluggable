<?php

namespace Zyxus\LaravelSluggable\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Slug extends Model
{
    protected $table = "slugs";

    public $fillable = [
        'model_type',
        'model_id',
        'slug'
    ];

    public function model()
    {
        return $this->morphTo('model');
    }
}
