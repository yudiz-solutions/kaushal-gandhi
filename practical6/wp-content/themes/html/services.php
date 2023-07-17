<?php
/*
Template Name: services
*/
?>
<?php get_header();
$services_post_object = get_field('services_post_object');
$services = get_field('services');
?>
<!--******************* Banner Section Start *********************-->
<div class="home-banner">
    <div class="banner" style="background: #5C5C5C url('<?php if (isset($services['image']) && !empty($services['image'])) { ?><?php echo $services['image']['url']; ?><?php } ?>') no-repeat center center / cover;">
        <div class="container">
            <?php if (isset($services['heading']) && !empty($services['heading'])) { ?>
                <h1><?php echo $services['heading']; ?></h1>
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
            <div class="row">
                <div class="col-sm-4 col-md-3 service-sidebar">
                    <div class="panel-group" id="accordion">


                        <?php
                        $arg = array(
                            'taxonomy' => 'services-category'
                        );
                        $count = "1";
                        $cat_posts_loop = get_terms($arg);
                        foreach ($cat_posts_loop as  $cat) {
                            $class_for_cat2 = "collapsed";
                            // $curr_class = "";
                            $collapsed_in_class = "";
                        ?>
                            <div class="panel">
                                <div>
                                    <?php
                                    if ($count == "1") {
                                        $class_for_cat2 = "";
                                        $collapsed_in_class = "in";
                                        // $curr_class = "current";
                                        $count = "0";
                                    }
                                    ?>
                                    <a class="<?= $class_for_cat2; ?>" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $cat->term_id; ?>"><?php echo $cat->name ?></a>
                                </div>
                                <div id="collapse<?php echo $cat->term_id; ?>" class="panel-collapse collapse <?php echo $collapsed_in_class; ?>">
                                    <ul class="nav nav-tabs">
                                        <?php
                                        $cat_posts_args = array(
                                            'post_type' => 'services',
                                            'tax_query' => array(
                                                array(
                                                    'taxonomy' => 'services-category',
                                                    'field' => 'term_id',
                                                    'terms' => $cat->term_id
                                                )
                                            )
                                        );
                                        $cat_posts_loop = new WP_Query($cat_posts_args);
                                        $count2 = "1";
                                        if ($cat_posts_loop->have_posts()) {
                                            while ($cat_posts_loop->have_posts()) {
                                                $cat_posts_loop->the_post();
                                                $curr_class = "";
                                        ?>
                                                <?php
                                                if ($count2 == "1") {
                                                    // $class_for_cat2 = "";
                                                    // $collapsed_in_class = "in";
                                                    $curr_class = "current";
                                                    $count2 = "0";
                                                }
                                                ?>
                                                <li><a data-toggle="tab" href="#service<?php echo get_the_ID(); ?>" data-target="#service<?php echo get_the_ID(); ?>" class="<?php echo $curr_class ?>"><?php echo get_the_title(); ?></a></li>
                                        <?php
                                            }
                                        }
                                        ?>
                                    </ul>
                                </div>
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>
                <div class="col-sm-8 col-md-9 service-content">
                    <div class="tab-content">
                        <?php
                        $args = array(
                            'post_type' => 'services',
                            'posts_per_page' => -1,
                        );
                        $posts = new WP_Query($args);
                        if ($posts->have_posts()) {
                            while ($posts->have_posts()) {
                                $posts->the_post();
                                if (get_the_ID() == $services_post_object) {
                        ?>
                                    <div id="service<?php echo get_the_ID(); ?>" class="tab-pane fade in active">
                                    <?php } else { ?>
                                        <div id="service<?php echo get_the_ID(); ?>" class="tab-pane fade ">
                                        <?php } ?>
                                        <figure>
                                            <img src="<?php echo get_the_post_thumbnail_url(); ?>" class="img-responsive" alt="EASI Service" />
                                        </figure>
                                        <h3><?php the_title(); ?></h3>
                                        <?php the_content(); ?>
                                        </div>
                                <?php
                            }
                        }
                                ?>
                                    </div>
                    </div>
                </div>
            </div>
    </section>
    <section class="assessment-section">
        <?php echo do_shortcode('[assessment_data]'); ?>
    </section>
</main>
<!--******************* Middle Section End ******************-->
<!--******************* Footer Section Start ******************-->
<?php get_footer(); ?>