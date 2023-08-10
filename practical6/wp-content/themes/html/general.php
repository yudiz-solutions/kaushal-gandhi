<?php
/*
Template Name: general
*/
?>
<?php get_header();

$heading = get_field('heading');
$assessment_section = get_field('assessment_section');
?>
<!--******************* Banner Section Start *********************-->
<div class="home-banner">
    <div class="banner" style="background: #5C5C5C url('images/home-slide1.jpg') no-repeat center center / cover;">
        <div class="container">
            <?php if (isset($heading) && !empty($heading)) { ?>
                <h1><?php echo $heading; ?></h1>
            <?php } ?>
        </div>
    </div>
</div>
<!--******************* Banner Section End *********************-->
<!--******************* Header Section End *********************-->
<!--******************* Middle Section Start ******************-->
<main>
    <?php if (!empty($assessment_section)) { ?>
        <section class="assessment-section">
            <?php echo do_shortcode('[assessment_data]'); ?>
        </section>
    <?php } ?>
</main>
<!--******************* Middle Section End ******************-->
<!--******************* Footer Section Start ******************-->
<?php get_footer(); ?>