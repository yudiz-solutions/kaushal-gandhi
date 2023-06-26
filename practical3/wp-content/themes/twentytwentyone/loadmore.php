<?php
/*
Template Name: Loadmore
*/
get_header();
?>
<div class="ajax_loadmore">
    <?php


    $args = array(
        'post_type' => 'Loadmore',
        'post_status' => 'publish',
        'posts_per_page' => 1,
        'paged' => 1
    );

    $wp_query = new WP_Query($args);
    if ($wp_query->have_posts()) {
        while ($wp_query->have_posts()) {
            $wp_query->the_post();
    ?>
            <center>
                <h1>
                    <?php
                    the_title();
                    echo "<br>";
                    ?>
                </h1>
                <div>
                    <?php
                    the_post_thumbnail(array(200, 200));
                    echo "<br>";
                    ?>
                </div>
                <div>
                    <?php
                    the_excerpt();
                    echo "<br>";
                    ?>
                </div>
                <a href="<?php the_permalink() ?>">Read Full Story</a>

        <?php
        }
        wp_reset_postdata();
    }
    echo "<br>";
    echo "<br>";
        ?>

            </center>

</div>

<center>
    <button class="loadmore">More posts</button>
</center>

<?php
get_footer();
?>