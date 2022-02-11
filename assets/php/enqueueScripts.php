<?php

function enqueueScripts(){

    if(is_home()){
        wp_enqueue_script( 'align-background-image', get_template_directory_uri() . '/assets/js/align-background-image-text.js');
    }
    wp_enqueue_script( 'nav_menu_handler', get_template_directory_uri() . '/assets/js/slide-out-nav-bar.js', array(), false, true);
}

add_action( 'wp_enqueue_scripts', 'enqueueScripts' );