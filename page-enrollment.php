<?php get_header(); ?>
<main>
    <div class="container enrollNowWrapper">
        <h1 class="text-center">Limited Time</h1>
        <div class="enrollImgTxtWrapper">
            <img class='enrollNowImage' src=<?php echo '"' . get_template_directory_uri() . '/assets/images/carPersonPointing.jpg' . '"';?> alt="people in car pointing right">
            <div class="enrollmentTxtWrapper d-flex justify-content-end flex-column">
                <p class="limitedTimePrice">$325*</p>
                <p class="limitedTimeLessons">Three 2-hour Behind-The-Wheel Lessons</p>
            </div>
        </div>
        <div class="container enrollmentWrapper enrollmentTopPage text-center mt-4">
            <a class="enrollmentLink" href=""> Enroll Now </a>
        </div>
    </div>

    <div class="content-box container d-flex flex-column justify-content-between align-items-center">
                <h2>Professional Training</h2>
                <p>
                    Our Professional Instructors will provide you the essential training to become a safe driver. Among the things you will learn are.
                </p>

                <div class="twoColumnListWrapper d-flex">
                    <ul class="bulletList">
                        <li>Vehicle Controls</li>
                        <li>Changing Lanes</li>
                        <li>Defensive Driving</li>
                        <li>Turns</li>
                    </ul>

                    <ul class="bulletList">
                        <li>Stops and Limit Lines</li>
                        <li>Yielding</li>
                        <li>Speeds</li>
                        <li>Traffic Signals</li>
                    </ul>
                    

                </div>
    </div>

    <div class="content-box shadeBackground content-box-padding-top pb-5">
        <h2 class='text-center'>Our Prices</h2>
        <ul class="disclaimer">
            <li>*We do not serve rural areas.</li>
            <li>*If applicable.</li>
            <li>**Single lesson and/or car rental</br> must be paid in cash(zillow,paypall).</li>
        </ul>
        <div class='priceContainer'>
            <div class='mt-3'>
                <h3>Behind The Wheel</h3>
                <div class='d-flex'>
                    <div class="d-flex">
                        <ul class="list-unstyled">
                            <li>Three 2-Hour Lessons:</li>
                            <li class='mt-5'>One 2-Hour Lesson:</li>
                        </ul>
                    </div>
                    <div class="d-flexs">
                        <ul class='prices'>
                            <li>$325* <span class='ageGroup'>&nbspteens</span></li>
                            <li>$335** <span class="ageGroup">adults</span></li>
                            <li class='mt-4'>$125*</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class='mt-3'>
                <h3>Teen Online Driver Education</h3>
                <div class='d-flex'>
                    <p class='w-50'>30-hour home study DMV Certificate of Completion(not included).  </p>
                    <p class='prices bottom-price align-self-center'>$49</p>
                </div>
            </div>
            <div class='mt-3'>
                <h3>Car Rental</h3>
                <div class='d-flex'>
                    <p class='w-50'>Pick up and Drop off for the DMV Test </p>
                    <p class='prices bottom-price align-self-center'>$150</p>
                </div>
            </div>
        </div>
    </div>

    <div class='container mt-5'>
        <div class='d-flex flex-column align-items-center'>
            <h2>Start Your First Mile Today</h2>
            <img class='mt-4 w-75' src=<?php echo '"' . get_template_directory_uri() . '/assets/images/carDrivingAway.jpg' . '"'; ?>>
        </div>

        <div class='d-flex flex-column align-items-center mt-5'>
            <h3>Our Behind-The-Wheel Process</h3>
            <ul class="disclaimer behind-the-wheel-disclaimer">
                <li>*If it's and eligible location.</li>
                <li>**Weekends are a courtesy schedule.</li>
                <li>***If he/she is eligible.</li>
            </ul>

            <div>
                <ol class='lineHeight2'>
                    <li>Have your permit.</li>
                    <li>Call to set up your first driving lesson.</li>
                    <li>Pay the same day you book your lesson.</li>
                    <li>We will pick you up and return you.</li>
                    <li>Lessons will focus on areas that you need improvement.</li>
                    <li>Next lesson can be scheduled as soon as the next day, and we offer 7 days a week 7am-7pm.*</li>
                    <li>If student is a minor the DMV 6 Hour Certificate of Completion will be issued after the completion of the 3rd driving lesson.****</li>
                </ol>
            </div>

            <div class='mt-5'>
                <h3 class='text-center'>Contact Us</h3>
                <div class='mt-3'>
                    <div>
                        <ul class='list-unstyled'>
                            <li>5750 Division St Unit 202A</li>
                            <li>Riverside, CA 92506</li>
                            <li class='font-weight-900'>(951)201-7780</li>
                        </ul>
                        <ul class='list-unstyled'>
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