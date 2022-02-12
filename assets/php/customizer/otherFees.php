<?php

//OTHER_FEES

function refundReducedPerLesson($wp_customize){
    $wp_customize->add_setting( $GLOBALS['REFUND_REDUCED_PER_LESSON'] , array(
        'default'   => $GLOBALS['REFUND_REDUCED_PER_LESSON_DEFAULT'],
        'transport' => 'refresh',
    ) );

    $wp_customize->add_section( 'refund-section' , array(
        'title'      => 'Refund fees',
        'priority'   => 30,
        'panel' => $GLOBALS['OTHER_FEES'],
    ) );

    $wp_customize->add_control( $GLOBALS['REFUND_REDUCED_PER_LESSON'], array(
        'label' => 'Refund reduction for 6-hour package.',
        'description' => 'This is the $ amount reduced for each 2 hour lesson taken from the 6-hour package.',
        'type' => 'number',
        'section' => 'refund-section',
    ));
}

function refundEnrollmentProcessingFee($wp_customize){
    $wp_customize->add_setting( $GLOBALS['NON_REFUNDABLE_PROCESSING_FEE'] , array(
        'default'   => $GLOBALS['NON_REFUNDABLE_PROCESSING_FEE_DEFAULT'],
        'transport' => 'refresh',
    ) );

    $wp_customize->add_control( $GLOBALS['NON_REFUNDABLE_PROCESSING_FEE'], array(
        'label' => 'Non-Refundable portion of the enrollment Fee',
        'description' => 'This is the amount taken from the enrollment fee that is not refunded',
        'type' => 'number',
        'section' => 'refund-section',
    ));
}

function enrollmentFee($wp_customize){
    $wp_customize->add_setting( $GLOBALS['ENROLLMENT_PROCESSING_FEE'] , array(
        'default'   => $GLOBALS['ENROLLMENT_PROCESSING_FEE_DEFAULT'],
        'transport' => 'refresh',
    ) );

    $wp_customize->add_control( $GLOBALS['ENROLLMENT_PROCESSING_FEE'], array(
        'label' => 'Total Enrollment Fee',
        'description' => 'This is the total amount of the enrollment fee.',
        'type' => 'number',
        'section' => 'refund-section',
    ) );
}

function lostCertificateReplacement($wp_customize){
    $wp_customize->add_setting( $GLOBALS['CERTIFICATE_REPLACEMENT_FEE'] , array(
        'default'   => $GLOBALS['CERTIFICATE_REPLACEMENT_FEE_DEFAULT'],
        'transport' => 'refresh',
    ) );

    $wp_customize->add_section( 'replace-certificate-section' , array(
        'title'      => 'Certificate Replacement Fee',
        'priority'   => 30,
        'panel' => $GLOBALS['OTHER_FEES'],
    ) );

    $wp_customize->add_control( $GLOBALS['CERTIFICATE_REPLACEMENT_FEE'], array(
        'label' => 'Replacement DMV Certificate FEE',
        'description' => 'Fee to replace the State of California DMV Certificate of Completion',
        'type' => 'number',
        'section' => 'replace-certificate-section',
    ) );
}


function other_fees_customizer($wp_customize){
    $wp_customize->add_panel( $GLOBALS['OTHER_FEES'],
        array(
        'title' => __( 'Set Other Fees' ),
        'description' => esc_html__( 'Set all other fees/prices here.' ), 
        'priority' => 32,
        )
    );

    refundReducedPerLesson($wp_customize);
    refundEnrollmentProcessingFee($wp_customize);
    enrollmentFee($wp_customize);
    lostCertificateReplacement($wp_customize);
    
}

add_action( 'customize_register', 'other_fees_customizer' );