<?php

function adultsThreeTwoHours($wp_customize){
    //All our sections, settings, and controls will be added here
    $wp_customize->add_setting( $GLOBALS['TWO_HOUR_LESSONS_ADULTS'] , array(
        'default'   => '335',
        'transport' => 'refresh',
    ) );

    $wp_customize->add_section( 'three-two-hour-lessons-section' , array(
        'title'      => '3 two-hour lessons',
        'priority'   => 30,
        'panel' => 'price_panel',
    ) );

    $wp_customize->add_control( $GLOBALS['TWO_HOUR_LESSONS_ADULTS'], array(
        'label' => 'Adult Price',
        'description' => 'This is the price for adults to get 3 two-hour lessons',
        'type' => 'number',
        'section' => 'three-two-hour-lessons-section',
    ));
}

function teensThreeTwoHours($wp_customize){
    $wp_customize->add_setting( $GLOBALS['TWO_HOUR_LESSONS_TEENS'] , array(
        'default'   => '325',
        'transport' => 'refresh',
    ) );

    $wp_customize->add_control( $GLOBALS['TWO_HOUR_LESSONS_TEENS'], array(
        'label' => 'Teen Price',
        'description' => 'This is the price for teens to get 3 two-hour lessons',
        'type' => 'number',
        'section' => 'three-two-hour-lessons-section',
    ));
}

function onlineDrivingLessons($wp_customize){
    $wp_customize->add_setting( $GLOBALS['ONLINE_DRIVING_PRICE'] , array(
        'default'   => '49',
        'transport' => 'refresh',
    ) );

    $wp_customize->add_section( 'online-driving-section' , array(
        'title'      => 'Online Driving Lessons',
        'priority'   => 30,
        'panel' => 'price_panel',
    ) );

    $wp_customize->add_control( $GLOBALS['ONLINE_DRIVING_PRICE'], array(
        'label' => 'Online Price',
        'description' => 'This is the Online Driving Price',
        'type' => 'number',
        'section' => 'online-driving-section',
    ));
}

function prices_customizer($wp_customize){
    $wp_customize->add_panel( 'price_panel',
        array(
        'title' => __( 'Set Prices' ),
        'description' => esc_html__( 'Adjust all site wide prices from here' ), 
        'priority' => 31,
        )
    );

    adultsThreeTwoHours($wp_customize);
    teensThreeTwoHours($wp_customize);
    onlineDrivingLessons($wp_customize);
}

add_action( 'customize_register', 'prices_customizer' );