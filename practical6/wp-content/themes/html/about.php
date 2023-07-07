<?php
/*
Template Name: About
*/
?>
<?php get_header();
$heading_for_banner = get_field('heading_for_banner');
$assessment_section = get_field('assessment_section');
$about_section = get_field('about_section');
?>
<!--******************* Banner Section Start *********************-->
<div class="home-banner">
    <div class="banner" style="background: #5C5C5C url('images/AboutUs-banner.jpg') no-repeat center center / cover;">
        <div class="container">
            <?php if (isset($heading_for_banner) && !empty($heading_for_banner)) { ?>
                <h1><?php echo $heading_for_banner; ?></h1>
            <?php } ?>
        </div>
    </div>
</div>
<!--******************* Banner Section End *********************-->
<!--******************* Header Section End *********************-->
<!--******************* Middle Section Start ******************-->
<main>
    <?php if (!empty($about_section)) { ?>
        <section class="common-section about-section">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="bg-img-block">
                            <div class="heading-block">
                                <?php if (isset($about_section['heading']) && !empty($about_section['heading'])) { ?>
                                    <?php echo $about_section['heading']; ?>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="desc-block">
                            <?php if (isset($about_section['heading2']) && !empty($about_section['heading2'])) { ?>
                                <h3><?php echo $about_section['heading2']; ?></h3>
                            <?php } ?>
                            <?php if (isset($about_section['paragraph']) && !empty($about_section['paragraph'])) { ?>
                                <p><?php echo $about_section['paragraph']; ?> </p>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php } ?>
    <?php if (!empty($assessment_section)) { ?>
        <section class="assessment-section">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <?php if (isset($assessment_section['heading']) && !empty($assessment_section['heading'])) { ?>
                            <h2><?php echo $assessment_section['heading']; ?></h2>
                        <?php } ?>
                    </div>
                    <div class="col-sm-6 text-right">
                        <?php if (isset($assessment_section['heading']) && !empty($assessment_section['heading'])) { ?>
                            <a href="<?php echo $assessment_section['button']['url']; ?>" class="theme-btn white-btn"><?php echo $assessment_section['button']['title']; ?></a>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </section>
    <?php } ?>

</main>
<!--******************* Middle Section End ******************-->
<!--******************* Footer Section Start ******************-->
<?php get_footer(); ?>