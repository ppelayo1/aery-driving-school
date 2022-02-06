<!DOCTYPE html>
<html lang="en">

<head>
    <meta name='author' content='Patrick Pelayo, https://www.patrickp.tech/'>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <meta name='description' content=<?php echo "'" . get_bloginfo( 'description' ) . "'" ?>>
    
    <title><?php bloginfo('name')?></title>
    

                
    <?php do_action('wp_head'); ?>
</head>
    <header>
        <?php echo getLogo(); ?>
        <img class="hamburger-menu" alt="hamburger-menu" src=<?php echo '"' . get_template_directory_uri() . '/assets/images/hamburger-menu.svg"';?>>

    </header>
<body>
    