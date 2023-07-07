<?php
/*
Template Name: investors
*/
?>
<?php get_header();
$investors = ['investors'];
?>
<!--******************* Banner Section Start *********************-->
<div class="home-banner">
    <div class="banner" style="background: #5C5C5C url('images/home-slide1.jpg') no-repeat center center / cover;">
        <div class="container">
            <h1><?php echo $investors['heading']; ?></h1>
        </div>
    </div>
</div>
<!--******************* Banner Section End *********************-->
<!--******************* Header Section End *********************-->
<!--******************* Middle Section Start ******************-->
<main>
    <section class="assessment-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h2><?php echo $investors['heading_fot_assessment_section']; ?></h2>
                </div>
                <div class="col-sm-6 text-right">
                    <a href="<?php echo $investors['button']['url']; ?>" class="theme-btn white-btn"><?php echo $investors['button']['title']; ?></a>
                </div>
            </div>
        </div>
    </section>
</main>
<!--******************* Middle Section End ******************-->
<!--******************* Footer Section Start ******************-->
<?php get_footer(); ?>