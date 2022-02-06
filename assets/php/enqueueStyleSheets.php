<?php

function enqueueStyleSheets(){
    wp_enqueue_style('bootstrap',"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css");
    wp_enqueue_style('style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style('latoFont',"https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,900;1,900&display=swap");
}

add_action( 'wp_enqueue_scripts', 'enqueueStyleSheets' );