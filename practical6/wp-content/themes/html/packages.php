<?php
/*
Template Name: packages
*/
?>
<?php get_header();
$packages = get_field('packages');
?>
<!--******************* Banner Section Start *********************-->
<div class="home-banner">
    <div class="banner" style="background: #5C5C5C url('images/home-slide1.jpg') no-repeat center center / cover;">
        <div class="container">
            <h1><?php echo $packages['heading']; ?></h1>
        </div>
    </div>
</div>
<!--******************* Banner Section End *********************-->
<!--******************* Header Section End *********************-->
<!--******************* Middle Section Start ******************-->
<main>
    <section class="common-section">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="row">
                        <?php foreach ($packages['repeater_for_common_section'] as $key) { ?>
                            <div class="col-sm-6">
                                <div class="package-box">
                                    <h5><?php echo $key['heading']; ?></h5>
                                    <div class="package-price"><span><?php echo $key['price']; ?></span></div>
                                </div>
                            </div>
                        <?php } ?>
                        <div class="clearfix"></div>
                        <div class="col-sm-6 col-sm-offset-3">
                            <div class="package-box">
                                <?php echo $packages['heading2']; ?>
                                <div class="package-price"><span><?php $packages['amount']; ?></span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="assessment-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h2><?php echo $packages['heading3']; ?></h2>
                </div>
                <div class="col-sm-6 text-right">
                    <a href="<?php echo $packages['button']['url']; ?>" class="theme-btn white-btn"><?php echo $packages['button']['title']; ?></a>
                </div>
            </div>
        </div>
    </section>
</main>
<!--******************* Middle Section End ******************-->
<!--******************* Footer Section Start ******************-->
<?php get_footer(); ?>