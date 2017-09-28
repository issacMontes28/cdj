<?php

namespace App;

use TCG\Voyager\Models\Post as VoyagerPost;

class Post extends VoyagerPost
{
    /**
     * The post wildcard is a slug.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return "slug";
    }


    /**
     * Get the post URI.
     *
     * @return string
     */
    public function path()
    {
        return "/posts/{$this->slug}";
    }
}
