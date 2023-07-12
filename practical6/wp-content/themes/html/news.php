<?php
/*
Template Name: news
*/
?>
<?php
get_header();

?>

<!--******************* Banner Section Start *********************-->
<div class="home-banner">
    <?php echo do_shortcode('[news_data]'); ?>
</div>
<!--******************* Banner Section End *********************-->
<!--******************* Header Section End *********************-->
<!--******************* Middle Section Start ******************-->
<main>
    <?php
    $featured_posts_id = get_field('featured_posts');
    ?>

    <section class="common-section">
        <div class="container">
            <div class="news-blocks">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="image-news" style="background: #ccc url('<?php echo get_the_post_thumbnail_url($featured_posts_id); ?>') no-repeat center center / cover;">
                            <div class="news-inner">
                                <h6><a href="<?php the_permalink($featured_posts_id); ?>"><?php echo get_the_title($featured_posts_id); ?></a></h6>
                                <p><span class="category"><?php echo (get_the_terms($featured_posts_id, 'news-category'))['0']->name; ?></span> <?php echo get_the_date('F j, Y', $featured_posts_id) ?> </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ajax_loadmore">
                    <?php

                    $args = array(
                        'post_type' => 'news',
                        'post_status' => 'publish',
                        'posts_per_page' => 4,
                        'paged' => 1,
                        'post__not_in' => array($featured_posts_id)
                    );

                    $news_list = new WP_Query($args);

                    //$news_list = get_posts($args);


                    ?>
                    <?php
                    // echo '<pre>';
                    // print_r($news_list);
                    // echo '<pre>';

                    ?>
                    <div class="row">
                        <?php
                        // echo "<pre>";
                        // print_r($Loadmore_list);
                        // echo "</pre>";
                        $count = 0;
                        if ($news_list->have_posts()) {
                            while ($news_list->have_posts()) {
                                $count++;
                                $news_list->the_post();
                                $max_num_pages = $news_list->max_num_pages;
                        ?>
                                <?php
                                // echo '<pre>';
                                // print_r($news_list);
                                // echo '</pre>';
                                ?>
                                <div class="col-md-6 col-sm-12 news-side">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <a href="<?php the_permalink() ?>" class="news-image"><?php the_post_thumbnail() ?>
                                        </div>
                                        <div class="col-sm-8 paddingl-none">
                                            <h6><a href="<?php the_permalink() ?>"><?php echo get_the_title(); ?></a></h6>
                                            <p class="meta"><span class="category"><?php echo (get_the_terms(get_the_ID(), 'news-category'))['0']->name;  ?></span> <?php echo get_the_date('F j, Y') ?></p>
                                            <p><?php the_excerpt(); ?><a href="<?php the_permalink() ?>" class="read-more">Read More</a></p>
                                        </div>
                                    </div>
                                </div>
                        <?php
                            }
                            wp_reset_postdata();
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <input type="hidden" class="max" value="<?php echo $max_num_pages ?>">
                <?php if ($news_list->max_num_pages > 1) { ?>
                    <button class="theme-btn" id="loadbutton">Load More</button>
                <?php } ?>

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