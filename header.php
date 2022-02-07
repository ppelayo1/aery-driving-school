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
    <header class="container-fluid d-flex justify-content-between p-2 p-md-0">
        <div class='p-md-2 me-5'>
            <?php echo getLogo(); ?>
        </div>
        <img class="width-2rem d-md-none" alt="hamburger-menu" src=<?php echo '"' . get_template_directory_uri() . '/assets/images/hamburger-menu.svg"';?>>
        <div class='header-background w-100 d-none d-md-flex justify-content-end align-items-center pe-2'>
            <?php wp_nav_menu( array( 'theme_location' => $GLOBALS['HEADER_MENU'],  'menu_class' => 'mb-0 me-5 fst-italic font-size-1pt5 font-weight-300 list-unstyled d-flex gap-4 child-anchor white-child-anchor' ) );?>
        </div>
    </header>
<body>
    