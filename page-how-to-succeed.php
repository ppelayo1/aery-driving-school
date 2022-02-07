<?php get_header();?>

<main>

    <h1 class='text-center margin-top-5rem'>How To Succeed</h1>
    <div class='container margin-top-5rem'>
        <h2 class='text-center'>Three Tips for Success</h2>
        <div class='mt-5'>
            <h3>Be Rested</h3>
            <p>Get plenty of rest so that you will be alert, and responsive for both the lessons and the test.</p>
        </div>
        <div class='mt-4'>
            <h3>Eat Before</h3>
            <p>Easting a small meal, or a snack prior to the lesson will help you get the most out of your lessons.</p>
        </div>
        <div class='mt-4'>
            <h3>Keep Learning</h3>
            <p>Becoming a safe driver requires practice. Passing the DMV test will allow you to drive on your own but don't neglect the lessons you learn from us as they may save you from catastrophe in the future.</p>
        </div>
    </div>

    <div class='container mt-5'>
        <h2 class='text-center'>Useful Information</h2>
        <div class='text-center mt-3'>
            <img src=<?php echo '"' . get_template_directory_uri() . '/assets/images/lightbulb.jpg"';?> alt='lightBulb'>
        </div>
        <div class='d-flex flex-column align-items-center'>
            <div class='width15pt4'>
                <h3 class='mt-4'>DMV Education Materials</h3>
                <p>Take advantage of the links below from the DMV</p>
            </div>
            <div class=''>
                <ul class='list-unstyled lineHeight2'>
                    <li><a href=''>DMV HandBooks</a></li>
                    <li><a href=''>Practice Tests(Written)</a></li>
                    <li><a href=''>Videos</a></li>
                    <li><a href=''>And More</a></li>
                </ul>
            </div>
        </div>
        <div class="container enrollmentWrapper enrollmentTopPage text-center mt-4">
            <a class="enrollmentLink" href=""> Enroll Now </a>
        </div>
    </div>
</main>

<?php get_footer();?>