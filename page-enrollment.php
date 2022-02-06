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

    <div class="content-box shadeBackground content-box-padding-top">
        <h2 class='text-center'>Our Prices</h2>
        <ul class="disclaimer">
            <li>*We do not serve rural areas.</li>
            <li>*If applicable.</li>
            <li>**Single lesson and/or car rental</br> must be paid in cash(zillow,paypall).</li>
        </ul>
        <div class='ms-5'>
            <div>
                <h3>Behind The Wheel</h3>
                <div class='d-flex'>
                    <div class="d-flex gap-5">
                        <ul class="list-unstyled">
                            <li>Three 2-Hour Lessons:</li>
                            <li class='mt-5'>One 2-Hour Lesson:</li>
                        </ul>
                    </div>
                    <div class="d-flexs">
                        <ul class='prices'>
                            <li>$325* <span class='ageGroup'>teens</span></li>
                            <li>$335** <span class="ageGroup">adults</span></li>
                            <li class='mt-4'>$125*</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div>
                <h3>Teen Online Driver Education</h3>
                <div>
                    <p>30-hour home study DMV Certificate of Completion(not included).  </p>
                    <p class='prices'>$49</p>
                </div>
            </div>
        </div>
    </div>

</main>
<?php get_footer(); ?>