<?php

namespace App\Http\Controllers\Website;

use App\Post;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    /**
     * Return a list of all published posts.
     *
     * @return \View
     */
    public function blog()
    {
        $posts = Post::published()->get();

        return view('website.blog', compact('posts'));
    }

    /**
     * Returns a simple article.
     *
     * @param Post $post
     * @return \View
     */
    public function article(Post $post)
    {
        return view('website.article', compact('post'));
    }
}
