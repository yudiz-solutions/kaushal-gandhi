<?php

$args = array(
    'post_type' => 'news'
);

$news_list = new WP_Query($args);

//$news_list = get_posts($args);


?>



<!-- section blog start -->
<section class="blog">
    <!-- container start -->
    <div class="container">
        <!-- main blog div start -->
        <div class="main-blog">
            <div class="blog-content">
                <h2><?php echo $top_heading; ?></h2>
                <p><?php echo $sub_heading; ?></p>
            </div>
            <ul>


                <?php
                if ($news_list->have_posts()) {
                    while ($news_list->have_posts()) {
                        $news_list->the_post();
                ?>

                        <li>
                            <div class="inner-blog-image">
                                <a href="<?php the_permalink() ?>">
                                    <?php the_post_thumbnail() ?>
                                    <?php //echo get_the_post_thumbnail($id); 
                                    ?>
                                </a>
                                <div class="blog-tag">
                                    <?php
                                    $news_cat =  get_the_terms(get_the_ID(), 'news-category');

                                    foreach ($news_cat as $key => $cat) {

                                        echo $cat->name;
                                        # code...
                                    }
                                    ?>
                                </div>
                            </div>
                            <a href="<?php the_permalink() ?>">
                                <h3><?php the_title() ?></h3>
                            </a>
                            <div class="blog-date">
                                <div class="date"><?php echo get_the_date() ?></div>
                                <a href="<?php the_permalink() ?>"><i class="fa fa-chevron-right"></i></a>
                            </div>
                        </li>
                <?php
                    }
                }

                ?>