<?php

namespace Zyxus\LaravelSluggable;

use Zyxus\LaravelSluggable\Models\Slug;

trait Sluggable
{
    private function getModel()
    {
        $model = (new \ReflectionClass($this))->getName();
        $model = str_replace('App\Models', '', $model);
        return $model;
    }

    public function setSlug(string $slug)
    {
        $sluggable = new Slug();
        $sluggable->__set('model_type', $this->getModel());
        $sluggable->__set('model_id', $this->id);
        $sluggable->__set('slug', $slug);
        $sluggable->save();
    }

    public function getSlugById()
    {
        $slug = Slug::find($this->id);
        return $slug->slug;
    }

    public function getSlug()
    {
        $slug = Slug::find($this->id);
        return $slug->slug;
    }

   public function getSlug()
    {
        $slug = Slug::find($this->id);
        return $slug->slug;
    }
}
