<?php do_action('wp_footer'); ?>
    <footer class="container-fluid">
        <div class="content-box d-flex align-items-center flex-column">
            <div class='phoneWrapper'>
                <h3>Schedule Your First Driving Lesson </h3>
                <div class='phoneContent'>
                    <div class="phoneImgWrapper">
                        <img class="phoneImg" src=<?php echo '"' . get_template_directory_uri() . '/assets/images/phone-call.svg' . '"'; ?> alt="phone">
                        <a href='' class="phoneLearnMore d-block">Learn More</a>
                    </div>
                    <ul class="phoneNumber">
                        <li> (951)201-7780</li>  
                        <li> (951)201-7780</li>      
                <ul>
                </div>
            </div>
        </div>
        <div class="content-box">
            <div class='footerLinksWrapper d-flex align-items-center flex-column'>
                <h3>Site Map </h3>
                <?php wp_nav_menu( array( 'theme_location' => $GLOBALS['footerMenu'], 'container_class' => 'mapList' ) );?>
            </div>
        </div>

        <?php if(has_nav_menu($GLOBALS['footerUsefulLinks'])):?>
            <div class="content-box">
                <div class='footerLinksWrapper useful-links d-flex align-items-center flex-column'>
                    <h3>Useful Links </h3>
                    <?php wp_nav_menu( array( 'theme_location' => $GLOBALS['footerUsefulLinks'], 'container_class' => 'externalList' ) );?>
                </div>
            </div>
        <?php endif ?>

        <p class='copyright'>
            Copyright © <?php echo date("Y");?> Aery Driving School. All Rights Reserved
        </p>
    </footer>
</body>
    
</html>