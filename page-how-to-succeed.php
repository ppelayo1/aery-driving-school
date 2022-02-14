<?php /* Template Name: How to succeed */ ?>
<?php get_header();?>

<main>

    <h1 class='text-center margin-top-5rem'>How To Succeed</h1>
    <div class='container margin-top-5rem max-width-40rem'>
        <h2 class='text-center'>Three Tips for Success</h2>
        <div class='mt-5'>
            <h3>Be Rested</h3>
            <p>Get plenty of rest so that you will be alert, and responsive for both the lessons and the test.</p>
        </div>
        <div class='mt-4'>
            <h3>Eat Before</h3>
            <p>Eating a small meal, or a snack prior to the lesson will help you get the most out of your lessons.</p>
        </div>
        <div class='mt-4'>
            <h3>Keep Learning</h3>
            <p>Becoming a safe driver requires practice. Passing the DMV test will allow you to drive on your own but don't neglect the lessons you learn from us as they may save you from catastrophe in the future.</p>
        </div>
    </div>

    <div class='container mt-5'>
        <h2 class='text-center'>Useful Information</h2>
        <div class='d-flex flex-column gap-md-5 flex-md-row align-items-center md-align-items-inherit justify-content-center mt-3'>
            <span id='useful-information-image'></span>
            <div>
                <img class='width-16rem width-md-21rem height-md-15rem' src=<?php echo getImageUrl($GLOBALS['USEFUL_INFORMATION_IMAGE'], $USEFUL_INFORMATION_DEFAULT); ?> alt='lightBulb'>
            </div>
                <div class='width-17rem width-md-19rem d-flex flex-column align-items-center'>
                    <h3 class='mt-4 mt-md-0'>DMV Educational Materials</h3>
                    <p>Take advantage of the links below from the DMV</p>
                    <div class='ms-md-5'>
                    <?php wp_nav_menu( array( 'theme_location' => $GLOBALS['HOW_TO_SUCCEED_LINKS_MENU'], 'menu_class' => 'line-height-2 list-unstyled width-md-17rem width-8rem' ) );?>
                    </div>
                </div>
        </div>
        <div class="container text-center mt-4">
            <a class="btn btn-primary enrollmentLink enrollmentButtonColor" href=<?php echo '"' . getEnrollmentLink() . '"'; ?>> Enroll Now </a>
        </div>
    </div>
</main>

<?php get_footer();?>