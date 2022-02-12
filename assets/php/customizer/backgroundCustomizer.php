<?php

function background_customizer( $wp_customize ) {
    //All our sections, settings, and controls will be added here
    $wp_customize->add_setting( 'hero_background' , array(
        'default'   => $GLOBALS['HEADER_BACKGROUND_IMAGE_DEFAULT'],
        'transport' => 'refresh',
    ) );

    $wp_customize->add_section( 'hero_background_section' , array(
        'title'      => __( 'Hero Header Background', 'mytheme' ),
        'priority'   => 29,
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
 add_action( 'customize_register', 'background_customizer' );
	
 function mytheme_customize_css()
{   
    ?>
         <style type="text/css">
             .heroHeader{
                 background: url(<?php echo getImageUrl('hero_background',$GLOBALS['HEADER_BACKGROUND_IMAGE_DEFAULT']);?>);

             }
         </style>
    <?php
}
add_action( 'wp_head', 'mytheme_customize_css');