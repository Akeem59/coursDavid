<?php

namespace Valarep\controllers;

use Valarep\View;
use Valarep\objects\Post;

class PostController
{
    public static function ListAction()
    {
        $posts = [];

        $post = new Post();
        $post->title = "Post 1";
        $post->content = "contenu du post 1";
        $posts[] = $post;

        $post = new Post();
        $post->title = "Post 2";
        $post->content = "contenu du post 2";
        $posts[] = $post;

        View::setTemplate("post_list");
        View::bindVariable("posts", $posts);
        
        View::display();
    }
}