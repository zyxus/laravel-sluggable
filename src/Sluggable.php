<?php

namespace Zyxus\LaravelSluggable;

use Illuminate\Database\Eloquent\Relations\MorphMany;
use Zyxus\LaravelSluggable\Models\Slug;

trait Sluggable
{
    public static function getBySlug(string $slug)
    {
        $slug = Slug::where('slug', $slug)->first();
        return $slug->model;
    }

    public function setSlug(string $slug)
    {
        $sluggable = new Slug();
        $sluggable->__set('model_type', self::class);
        $sluggable->__set('model_id', $this->id);
        $sluggable->__set('slug', $slug);
        $sluggable->save();

        return $this;
    }

    public function getSlug()
    {
        return Slug::where('model_type', $this->getModel())->where('model_id', $this->id)->get();
    }
}
