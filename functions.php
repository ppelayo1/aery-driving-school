<?php
include_once(get_template_directory() . '/assets/php/constants.php');
include_once(get_template_directory() . '/assets/php/usefulFunctions.php');
include_once(get_template_directory() . '/assets/php/enqueueStyleSheets.php');
include_once(get_template_directory() . '/assets/php/enqueueScripts.php');
include_once(get_template_directory() . '/assets/php/registerMenus.php');
include_once(get_template_directory() . '/assets/php/getEnrollmentLink.php');
include_once(get_template_directory() . '/assets/php/customizer/backgroundCustomizer.php');
include_once(get_template_directory() . '/assets/php/customizer/pricesCustomizer.php');
include_once(get_template_directory() . '/assets/php/customizer/otherFees.php');
include_once(get_template_directory() . '/assets/php/customizer/enrollmentLimitedTime.php');
include_once(get_template_directory() . '/assets/php/customizer/startYourFirstMile.php');

add_theme_support( 'customize-selective-refresh-widgets' );
add_theme_support( 'custom-logo' );