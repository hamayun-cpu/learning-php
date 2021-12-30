<?php


// require 'core/bootstrap.php';

// require Router::load('routes.php')
//     ->direct(Request::uri());



class Post {
    public $title;
    public $published;

    public function __construct($title, $published) {
        $this->title = $title;
        $this->published = $published;
    }
} 


$posts = [
    new Post('My first Post', true),
    new Post('My second Post', true),
    new Post('My third Post', false),
    new Post('My fourth Post', true)
];


$unPublishedPosts = array_filter($posts, function($post) {
    return ! $post->published;
});

// die(var_dump($unPublishedPosts));

$publishedPosts = array_filter($posts, function($post) {
    return $post->published;
});

die(var_dump($publishedPosts));

