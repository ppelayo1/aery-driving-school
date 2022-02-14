<!DOCTYPE html>
<html lang="en">

<head>
	<!--REMOVE FOR DEPLOYMENT -->
	<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
	<meta http-equiv="Pragma" content="no-cache" />
	<meta http-equiv="Expires" content="0" />
    <meta name='author' content='Patrick Pelayo, https://www.patrickp.tech/'>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <meta name='description' content=<?php echo "'" . get_bloginfo( 'description' ) . "'" ?>>
    
    <title><?php echo is_home() ? bloginfo('name') :  get_the_title();?></title>
    

                
    <?php do_action('wp_head'); ?>
</head>
    <header class="container-fluid d-flex justify-content-between p-2 p-md-0">
        <div class='p-md-2 me-5'>
            <?php echo getLogo(); ?>
        </div>
        <img class="hamburger-icon width-2rem d-md-none" alt="hamburger-menu" src=<?php echo '"' . get_template_directory_uri() . '/assets/images/hamburger-menu.svg"';?>>
        <div class='header-nav-bar w-100 d-none d-md-flex justify-content-end align-items-center pe-2'>
            <?php wp_nav_menu( array( 'theme_location' => $GLOBALS['HEADER_MENU'],  'menu_class' => 'mb-0 me-0 me-lg-5 fst-italic font-size-1rem font-size-lg-1pt5 font-weight-300 list-unstyled d-flex gap-4 child-anchor white-child-anchor' ) );?>
        </div>
    </header>
    <?php include_once(get_template_directory() . '/assets/templates/slide-out-nav-bar.php'); ?>
<body>
    