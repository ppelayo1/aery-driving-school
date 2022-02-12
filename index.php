<?php get_header(); ?>
    <main>
        <div class="heroHeader">
            <span id="hero_anchor"></span>
                <div class='position-absolute'>
                    <div class="header-text-box d-flex flex-column justify-content-center text-center gap-4">
                        <h1 class="heroPrimaryText">We Service <br class="d-none d-md-inline"> Inland Empire <br class="d-md-none"> and San Diego Areas</h1>
                        <p class="heroSecondaryText mb-0">63,000+ lessons </br> 16 years+ in service. </p>
                    </div>
                    <div class="container d-none d-md-block margin-bottom-5rem text-center mt-md-2 mt-lg-3">
                        <a class="enrollmentLink orange-red-md-color" href=<?php echo '"' . getEnrollmentLink() . '"'; ?>> Enroll Now </a>
                    </div>
                </div>
            
        </div>

        <div class="container d-md-none margin-bottom-5rem text-center mt-4">
            <a class="btn btn-primary enrollmentLink enrollmentButtonColor" href=<?php echo '"' . getEnrollmentLink() . '"'; ?>> Enroll Now </a>
        </div>
        <div class='container mt-md-5'>
            <div class='row'>
                <div class="col-md d-flex flex-column align-items-center">
                    <h2>CA DMV Approved</h2>
                    <ul class="width-15rem">
                        <li>Behind-The-Wheel Driving Lessons</li>
                        <li>Online Driving Ed.</li>
                        <li>Traffic School</li>    
                    <ul>
                </div>

                <div class="col-md d-flex flex-column align-items-center content-box-margin-top mt-4 mt-md-0">
                    <h2>Affordable Learning</h2>
                    <ul class="width-15rem">
                        <li><span class="orange-red-color font-weight-900">LIMITED TIME</span></br>6 Hour Behind-The-Wheel starting $<?php echo get_theme_mod($TWO_HOUR_LESSONS_TEENS, $GLOBALS['THREE_TWO_HOUR_LESSONS_TEENS_DEFAULT']);?> for teens</li>
                        <li>Online Driving Lessons $<?php echo get_theme_mod($ONLINE_DRIVING_PRICE, $GLOBALS['ONLINE_DRIVING_LESSONS_DEFAULT']);?></li>
                        <li>Rent a Qualified Car for the DMV Driving Test starting $<?php echo get_theme_mod($CAR_RENTAL, $GLOBALS['CAR_RENTAL_DEFAULT']);?></li>    
                    <ul>
                </div>
            </div>
        </div>
    </main>

<?php get_footer(); ?>