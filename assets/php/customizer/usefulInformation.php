<?php

function usefulInformation( $wp_customize ) {
    $wp_customize->add_setting( $GLOBALS['USEFUL_INFORMATION_IMAGE'] , array(
        'default'   => '10',
        'transport' => 'refresh',
        'default'   => get_template_directory_uri() . '/assets/images/lightbulb.jpg',
    ) );

    $wp_customize->add_section( 'how-to-succeed-page-section' , array(
        'title'      => 'How to Succeed Page',
        'priority'   => 30,
        'panel' => $GLOBALS['OTHER_IMAGES'],
    ) );

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, $GLOBALS['USEFUL_INFORMATION_IMAGE'],
            array(
                'label' => 'Useful Information',
                'description' => esc_html__( 'Image located in the how to succeed page at useful information' ),
                'section' => 'how-to-succeed-page-section',
            )
        )
    );

    // Add the selective part
    $wp_customize->selective_refresh->add_partial( $GLOBALS['USEFUL_INFORMATION_IMAGE'], array(
        'selector' => '#useful-information-image', // You can also select a css class
    ) );
 }
 add_action( 'customize_register', 'usefulInformation' );