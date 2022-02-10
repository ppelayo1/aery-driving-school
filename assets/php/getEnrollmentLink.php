<?php
function getEnrollmentLink(){
    $archive_page = get_pages(
        array(
            'meta_key' => '_wp_page_template',
            'meta_value' => 'page-enrollment.php'
        )
    );
    
    return get_permalink( $archive_page[0]->ID) . '#contactUs';
}