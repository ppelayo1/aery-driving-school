<?php do_action('wp_footer'); ?>
    <footer class="container-fluid">
        <div class="mt-5 d-flex align-items-center flex-column">
            <div>
                <h3>Schedule Your First Driving Lesson </h3>
                <div class='margin-top-1pt6rem margin-left-2rem'>
                    <div class="float-start">
                        <img class="width-3rem" src=<?php echo '"' . get_template_directory_uri() . '/assets/images/phone-call.svg' . '"'; ?> alt="phone">
                        <a href=<?php echo '"' . getImportantInfoLink() . '"'; ?> class="orange-red-color d-block mt-2">Learn More</a>
                    </div>
                    <ul class="ms-5 list-unstyled">
                        <li class='line-height-0pt5'> (951)201-7780</li>  
                        <li class='margin-top-1pt3rem'> (951)201-7780</li>      
                    <ul>
                </div>
            </div>
        </div>
        <div class='row'>
            <div class="col-md margin-top-3rem clear-blue-color white-md-color">
                <div class='d-flex align-items-center flex-column'>
                    <h3>Site Map </h3>
                    <?php wp_nav_menu( array( 'theme_location' => $GLOBALS['FOOTER_MENU'], 'menu_class' => 'line-height-2 list-unstyled width-17rem margin-left-7rem font-weight-300 clear-blue-child-anchor white-child-md-anchor child-anchor' ) );?>
                </div>
            </div>
        

        <?php if(has_nav_menu($GLOBALS['FOOTER_USEFUL_LINKS'])):?>
            
            <div class="col-md margin-top-3rem white-color">
                <div class='d-flex align-items-center flex-column'>
                    <h3>Useful Links </h3>
                    <?php wp_nav_menu( array( 'theme_location' => $GLOBALS['FOOTER_USEFUL_LINKS'], 'menu_class' => 'line-height-2 width-17rem margin-left-7rem list-unstyled font-weight-300 white-child-anchor child-anchor' ) );?>
                </div>
            </div>
        </div>
            
        <?php endif ?>

        <p class='white-color ms-3 pb-3 mb-0'>
            <small class='d-flex justify-content-center'>
                Copyright © <?php echo date("Y");?> Aery Driving School. All Rights Reserved
            </small>
        </p>
    </footer>
    <?php do_action('wp_footer');?>
</body>
    
</html>