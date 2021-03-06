<?php /* Template Name: What Teens Should Know */ ?>
<?php get_header();?>

<main>
   
    <h1 class='text-center margin-top-5rem'>What Teens Should Know</h1>
    <div class='container margin-top-5rem max-width-40rem'>
        <h2 class='text-center'>How To Get Licensed</h2>
        <div class='mt-5'>
            <h3>Get The Permit</h3>
            <p>When teenagers turn 15 years old, they are eligible to enroll and begin to take driving education. At 15  1/2 years old, they are eligible to take the written test. </p>
        </div>
        <div class='mt-4'>
            <h3>Practice Driving</h3>
            <p>Once they passed their test, the DMV will issue them a provisional permit. The permit is not valid until a driving instructor signs it on their first driving lesson.  After the permit is validated, the teen can practice driving with an adult 25 years of age or older who has a valid California Driving's License. </p>
        </div>
        <div class='mt-4'>
            <h3>Become Licensed</h3>
            <p>After 6 months of the permit issue date and the minor has completed a minimum of 6 hours of behind-the-wheel driving training with a licensed instructor and has fulfilled 50 hours of driving practice with a licensed parent/guardian, the teen is eligible to take the driving test to get his/her Driver's License.</p>
        </div>
    </div>

    <div class='container margin-top-5rem max-width-40rem'>
            <h2 class='text-center'>Our #1 Priority Is You</h2>
            <p>Our desire is to not only help you pass the tests, but to also make sure that you will be a safe driver. We are proud to have helped thousands of students in getting their licenses and in preparing them for the dangers on the road.</p>
            <p>Your lessons will be one-on-one in our vehicles and you will recieve instruction from a DMV approved instructor. As long as you are in our service area we will pick you up and drop you off.</p>
            <div class="container text-center mt-4">
            <a class="btn btn-primary enrollmentLink enrollmentButtonColor" href=<?php echo '"' . getEnrollmentLink() . '"'; ?>> Enroll Now </a>
        </div>
    </div>
</main>

<?php get_footer();?>