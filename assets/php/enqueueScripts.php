<?php

function enqueueScripts(){
    wp_enqueue_script( 'align-background-image', get_template_directory_uri() . '/assets/js/align-background-image-text.js');
}

add_action( 'wp_enqueue_scripts', 'enqueueScripts' );