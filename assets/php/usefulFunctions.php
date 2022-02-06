<?php

if(!function_exists('getLogo')){
    function getLogo(){
        $logoURL = get_stylesheet_directory_uri() . "/assets/images/logo.webp";
        $html = '<a href="' . get_home_url() .'" class="custom-logo-link" rel="home" aria-current="page"><img src="' . $logoURL . '" alt="logo"/></a>';
        
        return get_custom_logo() ? get_custom_logo() : $html;
    }
}