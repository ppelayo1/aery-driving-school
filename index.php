<?php get_header(); ?>
    <main>

        <div class="heroHeader">
            <span id="hero_anchor"></span>
            <div class='header-text-position-relative position-relative'>
                <div class='position-absolute'>
                    <div class="header-text-box d-flex flex-column justify-content-center h-100 text-center gap-4 mx-2">
                        <h1 class="heroPrimaryText">We Service Inland Empire and San Diego Areas</h1>
                        <p class="heroSecondaryText">63,000+ lessons </br> 16 years+ in service. </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container margin-bottom-5rem text-center mt-4">
            <a class="enrollmentLink" href=<?php echo '"' . site_url('/enrollment') . '"'; ?>> Enroll Now </a>
        </div>
        <div class='container'>
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
                        <li><span class="orange-red-color font-weight-900">LIMITED TIME</span></br>6 Hour Behind-The-Wheel starting $325 for teens</li>
                        <li>Online Driving Lessons $49</li>
                        <li>Rent a Qualified Car for the DMV Driving Test starting $110</li>    
                    <ul>
                </div>
            </div>
        </div>
    </main>

<?php get_footer(); ?>