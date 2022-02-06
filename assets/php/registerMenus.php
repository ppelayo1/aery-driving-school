<?php

function register_my_menus() {
    $menus = array($GLOBALS['footerUsefulLinks'] => 'Useful External Links', $GLOBALS['footerMenu'] => 'Footer Menu');

    register_nav_menus($menus);
}
 add_action( 'init', 'register_my_menus' );