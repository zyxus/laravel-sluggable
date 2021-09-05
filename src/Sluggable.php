<?php

namespace Zyxus\LaravelSluggable;

trait Sluggable
{
    public function setSlug(string $slug)
    {
        dd('setSlug called');
    }

    public function getSlug()
    {
        dd('getSlug called');
    }

    public function listSlugs()
    {
        dd('listSlugs called');
    }
}
