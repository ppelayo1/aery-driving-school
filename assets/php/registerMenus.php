<?php

function register_my_menus() {
    $menus = array();

    $FOOTER_USEFUL_LINKS = 'Useful External Links';
    $FOOTER_MENU = 'Footer Menu';
    $headerNavMenu = 'Header Nav Menu';

    $menus[$GLOBALS['FOOTER_USEFUL_LINKS']] = $FOOTER_USEFUL_LINKS;
    $menus[$GLOBALS['FOOTER_MENU']] = $FOOTER_MENU;  
    $menus[$GLOBALS['HEADER_MENU']] = $headerNavMenu;  
    
    register_nav_menus($menus);
}
 add_action( 'init', 'register_my_menus' );