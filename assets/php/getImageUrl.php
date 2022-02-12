<?php

function getImageUrl($defaultKey, $defaultUrl){
    $url = get_theme_mod($defaultKey) ? get_theme_mod($defaultKey) : $defaultUrl;
    
    return "'$url'";
}