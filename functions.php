<?php
include_once(get_template_directory() . '/assets/php/constants.php');
include_once(get_template_directory() . '/assets/php/usefulFunctions.php');
include_once(get_template_directory() . '/assets/php/enqueueStyleSheets.php');
include_once(get_template_directory() . '/assets/php/enqueueScripts.php');
include_once(get_template_directory() . '/assets/php/registerMenus.php');

function mytheme_customize_register( $wp_customize ) {
    //All our sections, settings, and controls will be added here
    $wp_customize->add_setting( 'hero_background' , array(
        'default'   => get_template_directory_uri() . '/assets/images/heroHeader.jpg',
        'transport' => 'refresh',
    ) );

    $wp_customize->add_section( 'hero_background_section' , array(
        'title'      => __( 'Hero Header Background', 'mytheme' ),
        'priority'   => 30,
    ) );

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'link_color', array(
        'label'      => __( 'Hero Header Background', 'hero_background' ),
        'section'    => 'hero_background_section',
        'settings'   => 'hero_background',
    ) ) );

    // Add the selective part
    $wp_customize->selective_refresh->add_partial( 'hero_background', array(
        'selector' => '#hero_anchor', // You can also select a css class
    ) );
 }
 add_action( 'customize_register', 'mytheme_customize_register' );
	
 function mytheme_customize_css()
{
    ?>
         <style type="text/css">
             .heroHeader{
                background-image: url(<?php echo '"'. get_theme_mod('hero_background','test')  . '"'; ?>);
             }
         </style>
    <?php
}
add_action( 'wp_head', 'mytheme_customize_css');

add_theme_support( 'customize-selective-refresh-widgets' );
add_theme_support( 'custom-logo' );