<?php
/*
Template Name: investor
*/
?>
<?php get_header();
$heading = get_field('$heading');
$heading_for_common_section =  get_field('$heading_for_common_section ');
$heading_for_assessment_section = get_field('$heading_for_assessment_section');
$buttton = get_field('$buttton');

?>
<!--******************* Banner Section Start *********************-->
<div class="home-banner">
    <div class="banner" style="background: #5C5C5C url('images/home-slide1.jpg') no-repeat center center / cover;">
        <div class="container">
            <h1><?php echo $heading; ?></h1>
        </div>
    </div>
</div>
<!--******************* Banner Section End *********************-->
<!--******************* Header Section End *********************-->
<!--******************* Middle Section Start ******************-->
<main>
    <section class="common-section">
        <div class="container text-center">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <?php if (isset($heading_for_common_section) && !empty($heading_for_common_section)) { ?>
                        <h3><?php echo $heading_for_common_section; ?></h3>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>
    <section class="assessment-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <?php if (isset($heading_for_assessment_section) && !empty($heading_for_assessment_section)) { ?>
                        <h2><?php echo $heading_for_assessment_section; ?></h2>
                    <?php } ?>
                </div>
                <div class="col-sm-6 text-right">
                    <?php if (isset($buttton) && !empty($buttton)) { ?>
                        <a href="<?php echo $buttton['url']; ?>" class="theme-btn white-btn"><?php echo $buttton['title']; ?></a>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>
</main>
<!--******************* Middle Section End ******************-->
<!--******************* Footer Section Start ******************-->
<?php get_footer(); ?>