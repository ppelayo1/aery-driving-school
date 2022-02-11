<?php /* Template Name: Enrollment */ ?>

<?php get_header(); ?>
<main>
    <div class="container mt-4">
        <h1 class="text-center d-md-none">Limited Time</h1>
        <div class="d-flex mt-3 justify-content-center">
            <span id='enrollment-image'></span>
            <img class='w-50' src=<?php echo '"'. get_theme_mod($GLOBALS['LIMITED_TIME_IMAGE'])  . '"'; ?> alt="people in car pointing right">
            <div class="ms-3 display-grid">
                <h1 class="d-none d-md-block">Limited Time</h1>
                <p class="orange-red-color font-size-1pt4 mb-0 grid-row-start-2 align-self-center">$<?php echo get_theme_mod($TWO_HOUR_LESSONS_TEENS);?>*</p>
                <div class='grid-row-start-3 align-self-end'>
                <p class="my-0 max-width-md-75">Three 2-hour Behind-The-Wheel Lessons</p>
                    <div class="container p-0 mt-4 d-none d-md-block">
                        <a class="btn btn-primary enrollmentLink enrollmentButtonColor" href=<?php echo '"' . getEnrollmentLink() . '"'; ?>> Enroll Now </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container text-center mt-4 d-md-none">
            <a class="btn btn-primary enrollmentLink enrollmentButtonColor" href=<?php echo '"' . getEnrollmentLink() . '"'; ?>> Enroll Now </a>
        </div>
    </div>

    <div class="content-box container d-flex flex-column justify-content-between align-items-center mt-5">
                <h2>Professional Training</h2>
                <p class='width-19rem width-md-22rem'>
                    Our Professional Instructors will provide you the essential training to become a safe driver. Among the things you will learn are.
                </p>

                <div class="d-flex gap-md-5 width-md-26rem">
                    <ul class="w-75 width-md-100">
                        <li>Vehicle Controls</li>
                        <li>Changing Lanes</li>
                        <li>Defensive Driving</li>
                        <li>Turns</li>
                    </ul>

                    <ul class="w-75 width-md-100">
                        <li>Stops and Limit Lines</li>
                        <li>Yielding</li>
                        <li>Speeds</li>
                        <li>Traffic Signals</li>
                    </ul>
                    

                </div>
    </div>

    <div class="d-flex flex-column justify-content-between align-items-center shadeBackground mt-3 pt-4 pb-5">
        <div>
            <h2 class='text-center'>Our Prices</h2>
            <ul class="list-unstyled line-height-1 margin-left-17rem">
                <li><small>*We do not serve rural areas.</small></li>
                <li><small>*If applicable.</small></li>
                <li><small>**Single lesson and/or car rental</br> must be paid in cash(zillow,paypall).</small></li>
            </ul>
            <div class='d-md-flex justify-content-center gap-md-5'>
                <div class='mt-3'>
                    <h3>Behind The Wheel</h3>
                    <div class='d-flex flex-column'>
                        <div class="d-flex flex-md-column">
                            <ul class="list-unstyled width-10rem">
                                <li>Three 2-Hour Lessons:</li>
                            </ul>
                            <ul class='list-unstyled'>
                                <li class="font-weight-300 ms-3 ms-md-0">$<?php echo get_theme_mod($TWO_HOUR_LESSONS_TEENS);?>* <span class='font-weight-900'>&nbspteens</span></li>
                                <li class="font-weight-300 ms-3 ms-md-0">$<?php echo get_theme_mod($TWO_HOUR_LESSONS_ADULTS);?>**<span class="font-weight-900 ">adults</span></li>
                            </ul>
                        </div>
                        <div class="d-flex flex-md-column">
                            <ul class="list-unstyled width-10rem">
                                <li>One 2-Hour** Lesson:</li>
                            </ul>
                            <ul class='list-unstyled'>
                                <li class='font-weight-300 ms-3 ms-md-0'>$<?php echo get_theme_mod($TWO_HOUR_LESSON);?>*</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class='mt-3'>
                    <h3>Teen Online Driver Education</h3>
                    <ul class='d-flex list-unstyled flex-md-column'>
                        <li class='width-10rem width-md-17rem'>30-hour home study (Does not include DMV Certificate of Completion).  </li>
                        <li class='font-weight-300 ms-3 ms-md-0 mt-md-3 align-self-center md-align-self-baseline'>$<?php echo get_theme_mod($ONLINE_DRIVING_PRICE);?></li>
                    </ul>
                </div>
                <div class='mt-3'>
                    <h3>Car Rental</h3>
                    <ul class='d-flex flex-md-column list-unstyled'>
                        <li class='width-10rem'>Pick up and Drop off for the DMV Test </li>
                        <li class='font-weight-300 ms-3 ms-md-0 mt-md-3 align-self-center md-align-self-baseline'>$<?php echo get_theme_mod($CAR_RENTAL);?></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class='container mt-5'>
        <div class='d-flex flex-column align-items-center'>
            <h2>Start Your First Mile Today</h2>
            <span id='start-first-mile-image'></span>
            <img class='mt-4 width-16rem width-md-30rem' src=<?php echo '"'. get_theme_mod($GLOBALS['START_YOUR_FIRST_MILE_IMAGE'])  . '"'; ?>>
        </div>

        <div class='d-flex flex-column align-items-center mt-5'>
            <div class='margin-left-2rem m-md-0 d-md-flex align-items-center flex-column'>
                <h3>Our Behind-The-Wheel Process</h3>
                <ul class="list-unstyled">
                    <li>*If it's an eligible location.</li>
                    <li>**Weekends are a courtesy schedule.</li>
                    <li>***If he/she is eligible.</li>
                </ul>
            </div>

            <div>
                <ol class='line-height-2 d-md-none'>
                    <li>Have your permit.</li>
                    <li>Call to set up your first driving lesson.</li>
                    <li>Pay the same day you book your lesson.</li>
                    <li>We will pick you up and return you.</li>
                    <li>Lessons will focus on areas that you need improvement.</li>
                    <li>Next lesson can be scheduled as soon as the next day, and we offer 7 days a week 7am-7pm.*</li>
                    <li>If student is a minor the DMV 6 Hour Certificate of Completion will be issued after the completion of the 3rd driving lesson.****</li>
                </ol>

                <div class='d-flex ms-5'>
                    <ol class='line-height-2 d-none d-md-block w-100'>
                        <li>Have your permit.</li>
                        <li>Call to set up your first driving lesson.</li>
                        <li>Pay the same day you book your lesson.</li>
                        <li>We will pick you up and return you.</li>
                        <li>Lessons will focus on areas that you need improvement.</li>
                    </ol>

                    <ol start='6' class='line-height-2 d-none d-md-block w-100'>
                        <li>Next lesson can be scheduled as soon as the next day, and we offer 7 days a week 7am-7pm.*</li>
                        <li>If student is a minor the DMV 6 Hour Certificate of Completion will be issued after the completion of the 3rd driving lesson.****</li>
                    </ol>
                </div>
            </div>

            <div class='container max-width-md-75 mt-5'>
                <h2 id='important-information' class='text-center'>Important Information</h2>
                <div>
                    <p class='mt-5'>Dear Students,</p>
                    <p>
                        Thank you for enrolling with Aery Driving School driver training program.
                        In order to make your relationship with our school a successful one, we want you 
                        to have the information necessary to complete your program and meet all of the 
                        DMV requirments in order to attain your driver’s license.
                    </p>
                    <p class='mt-5 mt-md-0'><strong>To obtain a permit, you must bring these documents to the DMV</strong></p>
                    <ul class='ms-md-3'>
                        <li>Certificate of Completion of Driver's Ed</li>
                        <li>Birth Certificate</li>
                        <li>Social Security Card</li>
                        <li>DL44 application with yourparents or guardian signatures</li>
                        <li>2 Fomrs of proof of address</li>
                    </ul>
                    <p class='mt-5'>
                        Call as soon as you receive your permit so that we can schedule your first lesson with an instructor. 
                        The earlier you let us  know about receiving your permit, the sooner we can schedule your first 
                        behind-the-wheel appointment.
                    </p>
                    <h3 class='mt-4'>Behind-The-Wheel Instructions</h3>
                    <p>
                        All Behind-The-Wheel lessons are private one-on-one 2-hour sessions. Lessons may not be scheduled until 
                        the student has obtained the permit. The DMV requires teenagers to take three 2-hour lessons with a licensed
                         Driving School Instructor.
                    </p>
                    <p>
                        The cost of a single 2 hour Behind-The-Wheel lesson is $<?php echo get_theme_mod($TWO_HOUR_LESSON);?>. We have a discounted package of 6 hours Behind-The-Wheel lessons for 
                        $<?php echo get_theme_mod($TWO_HOUR_LESSONS_TEENS);?>. If you buy the discounted package, any refund after the first lesson will be minus $<?php echo get_theme_mod($REFUND_REDUCED_PER_LESSON);?> for each 2 hour Behind-The-Wheel lesson taken.
                    </p>
                    <p>
                        A $<?php echo get_theme_mod($ENROLLMENT_PROCESSING_FEE);?> enrollment processing fee is included in your payment. Any refunds would be $<?php echo get_theme_mod($NON_REFUNDABLE_PROCESSING_FEE);?> minus enrollment-processing fee from the total amount. 
                        Refunds must be requested within 30 days of purchase.
                    </p>
                    <h3 class='mt-4'>Lost Certificate Policy</h3>
                    <p>
                        There is one DMV certificate you will get when you complete all of your training with our school. There is a $<?php echo get_theme_mod($CERTIFICATE_REPLACEMENT_FEE);?> charge for a duplicate certificate of lost or stolen.
                    </p>
                    <ul class='ms-md-3'>
                        <li>The State of California DMV Certificate of Completion of Behind-The-Wheel training from your instructor. You must bring this certificate to the DMV to take the road test if you are under 18 years of age.</li>
                    </ul>
                </div>

            </div>

            <div class='mt-5'>
                <h2 id='contactUs' class='text-center'>Contact Us</h2>
                <div class='mt-3'>
                    <div class='d-flex flex-column flex-md-row justify-content-center align-items-center gap-md-16rem ms-md-5'>
                        <ul class='list-unstyled'>
                            <li class='d-none d-md-block'><h3>Riverside</h3></li>
                            <li>5750 Division St Unit 202A</li>
                            <li>Riverside, CA 92506</li>
                            <li class='font-weight-900'>(951)201-7780</li>
                        </ul>
                        <ul class='list-unstyled'>
                            <li class='d-none d-md-block'><h3>San Diego</h3></li>
                            <li>5750 Division St Unit 202A</li>
                            <li>Riverside, CA 92506</li>
                            <li class='font-weight-900'>(951)201-7780</li>
                        </ul>
                        
                    </div>
                </div>

            </div>

        </div>
        

    </div>

</main>
<?php get_footer(); ?>