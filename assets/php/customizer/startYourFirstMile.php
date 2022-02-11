<?php

function startYourFirstMile( $wp_customize ) {
    $wp_customize->add_setting( $GLOBALS['START_YOUR_FIRST_MILE_IMAGE'] , array(
        'default'   => '10',
        'transport' => 'refresh',
        'default'   => get_template_directory_uri() . '/assets/images/carDrivingAway.jpg',
    ) );

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, $GLOBALS['START_YOUR_FIRST_MILE_IMAGE'],
            array(
                'label' => 'Limited Time Image',
                'description' => esc_html__( 'This is the image at the top of the enrollment page' ),
                'section' => 'enrollment-page-section',
            )
        )
    );

    // Add the selective part
    $wp_customize->selective_refresh->add_partial( $GLOBALS['START_YOUR_FIRST_MILE_IMAGE'], array(
        'selector' => '#start-first-mile-image', // You can also select a css class
    ) );
 }
 add_action( 'customize_register', 'startYourFirstMile' );