<?php

function enrollmentLimitedTime( $wp_customize ) {
    $wp_customize->add_panel( $GLOBALS['OTHER_IMAGES'],
        array(
        'title' =>'Other Images',
        'description' => esc_html__( 'Other Images can be changed here' ), 
        'priority' => 30,
        )
    );

    $wp_customize->add_setting( $GLOBALS['LIMITED_TIME_IMAGE'] , array(
        'transport' => 'refresh',
        'default'   => $GLOBALS['LIMITED_TIME_IMAGE_DEFAULT']
    ) );

    $wp_customize->add_section( 'enrollment-page-section' , array(
        'title'      => 'Enrollment Page',
        'priority'   => 30,
        'panel' => $GLOBALS['OTHER_IMAGES'],
    ) );

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, $GLOBALS['LIMITED_TIME_IMAGE'],
            array(
                'label' => 'Limited Time Image',
                'description' => esc_html__( 'This is the image at the top of the enrollment page' ),
                'section' => 'enrollment-page-section',
            )
        )
    );

    // Add the selective part
    $wp_customize->selective_refresh->add_partial( $GLOBALS['LIMITED_TIME_IMAGE'], array(
        'selector' => '#enrollment-image', // You can also select a css class
    ) );
 }
 add_action( 'customize_register', 'enrollmentLimitedTime' );