<?php


require 'core/bootstrap.php';

require Router::load('routes.php')
    ->direct(Request::uri(), Request::method());



// class Post {
//     public $title;
//     public $published;

//     public function __construct($title, $published) {
//         $this->title = $title;
//         $this->published = $published;
//     }
// } 


// $posts = [
//     new Post('My first Post', true),
//     new Post('My second Post', true),
//     new Post('My third Post', false),
//     new Post('My fourth Post', true)
// ];


// $unPublishedPosts = array_filter($posts, function($post) {
//     return ! $post->published;
// });

// // die(var_dump($unPublishedPosts));

// $publishedPosts = array_filter($posts, function($post) {
//     return $post->published;
    
// });

// $modified = array_map(function($post) {
//     $copy = new Post($post->title, $post->published);
//     $copy->published = true;
//     return $copy;
// },($posts));

// $modified = array_map(function($post) {
    
//         return (array) $post;
// },($posts));

// $titles = array_column($posts, 'title');

// die(var_dump($titles));

