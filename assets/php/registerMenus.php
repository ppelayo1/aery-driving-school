<?php

function register_my_menus() {
    $menus = array();

    $FOOTER_USEFUL_LINKS = 'Useful External Links';
    $FOOTER_MENU = 'Footer Menu';
    $HEADER_NAV_MENU = 'Header Nav Menu';
    $HOW_TO_SUCCEED_LINKS = 'How To Succeed Important Links';

    $menus[$GLOBALS['FOOTER_USEFUL_LINKS']] = $FOOTER_USEFUL_LINKS;
    $menus[$GLOBALS['FOOTER_MENU']] = $FOOTER_MENU;  
    $menus[$GLOBALS['HEADER_MENU']] = $HEADER_NAV_MENU;
    $menus[$GLOBALS['HOW_TO_SUCCEED_LINKS_MENU']] = $HOW_TO_SUCCEED_LINKS;   
    
    register_nav_menus($menus);
}
 add_action( 'init', 'register_my_menus' );