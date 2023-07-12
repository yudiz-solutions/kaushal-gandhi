<?php
/*
Template Name: assessment
*/
?>
<?php get_header();
$image = get_field('image');
$heading = get_field('heading');
?>
<!--******************* Banner Section Start *********************-->
<div class="home-banner">
    <div class="banner" style="background: #5C5C5C url('<?php if (isset($image) && !empty($image)) { ?><?php echo $image['url']; ?><?php } ?>') no-repeat center center / cover;">
        <div class="container">]
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
    <section class="common-section">
        <div class="container">
            <form class="assessment-form">
                <?php echo do_shortcode('[contact-form-7 id="196" title="assessment"]'); ?>
            </form>
        </div>
    </section>
    <section class="assessment-section">
        <?php echo do_shortcode('[assessment_data]'); ?>
    </section>
</main>
<!--******************* Middle Section End ******************-->
<!--******************* Footer Section Start ******************-->

<?php get_footer(); ?>