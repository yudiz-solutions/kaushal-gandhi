<?php get_header(); ?>
<!--******************* Banner Section Start *********************-->
<div class="home-banner">
    <?php echo do_shortcode('[news_data]'); ?>
</div>
<!--******************* Banner Section End *********************-->
<!--******************* Header Section End *********************-->
<!--******************* Middle Section Start ******************-->
<main>
    <section class="common-section article-detail">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 right-border">
                    <div class="article-detail-inner">
                        <ol class="breadcrumb">
                            <li><a href="<?php echo site_url(); ?>">Home</a></li>
                            <li><a href="news.php">News</a></li>
                            <li class="active"><?php echo get_the_title(); ?></li>
                        </ol>
                        <h5 class="article-title"><?php echo get_the_title(); ?></h5>
                        <div class="featured-articles feature1" style="background: url('<?php echo get_the_post_thumbnail_url(); ?>') no-repeat center center / cover;">

                        </div>
                        <div class="articles-meta">
                            <p class="item-meta"><span class="category"><?php echo (get_the_terms(get_the_ID(), 'news-category'))['0']->name;  ?></span> <?php echo get_the_date('F j, Y') ?></p>
                            <div class="social-share-block">
                                <p class="share-label">share</p>
                                <ul class="social-share-menu">
                                    <li><a href="#" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="articles-content">
                            <?php echo get_the_content(); ?>
                        </div>
                        <div class="articles-footer-meta">
                            <div class="row">
                                <div class="col-md-6">
                                    <ul class="articles-tags">
                                        <li><a href="#">Cannabis</a></li>
                                        <li class="active"><a href="#">Technology</a></li>
                                        <li><a href="#">Energy</a></li>
                                        <li><a href="#">Italy</a></li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <div class="social-share-block">
                                        <p class="share-label">share</p>
                                        <?php if (is_active_sidebar('icon')) : ?>
                                            <?php dynamic_sidebar('icon'); ?>
                                        <?php endif ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="sticky_item" class="col-sm-4">
                    <div class="sidebar">
                        <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#popular">Popular</a></li>
                            <li><a data-toggle="tab" href="#recommended">Recommended</a></li>
                        </ul>
                        <div class="tab-content">
                            <div id="popular" class="tab-pane fade in active">
                                <?php
                                $popular_posts_args = array(
                                    'post_type' => 'news',
                                    'posts_per_page' => 3,
                                    'meta_key' => 'my_post_viewed',
                                    'orderby' => 'meta_value_num',
                                    'order' => 'DESC'
                                );
                                $popular_posts_loop = new WP_Query($popular_posts_args);
                                if ($popular_posts_loop->have_posts()) :
                                    while ($popular_posts_loop->have_posts()) :
                                        $popular_posts_loop->the_post();
                                ?>
                                        <div class="article-tab-item">
                                            <div class="article-img">
                                                <img class="full-img" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="article-img">
                                            </div>
                                            <div class="article-desc">
                                                <h4><a href="article-detail.html"><?php echo the_excerpt(); ?></a></h4>
                                                <p class="item-meta"><span class="category"><?php echo (get_the_terms(get_the_ID(), 'news-category'))['0']->name;  ?></span> <?php echo get_the_date('F j, Y') ?></p>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                <?php
                                    endwhile;
                                    wp_reset_query();
                                endif;
                                ?>
                            </div>
                            <div id="recommended" class="tab-pane fade">
                                <?php
                                $recommended_posts_args = array(
                                    'post_type' => 'news',
                                    'post_status' => 'publish',
                                    'posts_per_page' => 4,
                                    'orderby' => 'meta_value_num',
                                    'order' => 'DESC'
                                );
                                $recommended_posts_loop = new WP_Query($recommended_posts_args);
                                if ($recommended_posts_loop->have_posts()) :
                                    while ($recommended_posts_loop->have_posts()) :
                                        $recommended_posts_loop->the_post();
                                ?>
                                        <div class="article-tab-item">
                                            <div class="article-img">
                                                <img class="full-img" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="article-img">
                                            </div>
                                            <div class="article-desc">
                                                <h4><a href="article-detail.html"><?php echo the_excerpt(); ?></a></h4>
                                                <p class="item-meta"><span class="category"><?php echo (get_the_terms(get_the_ID(), 'news-category'))['0']->name;  ?></span> <?php echo get_the_date('F j, Y') ?> </p>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                <?php
                                    endwhile;
                                    wp_reset_query();
                                endif;
                                ?>
                            </div>
                        </div>
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