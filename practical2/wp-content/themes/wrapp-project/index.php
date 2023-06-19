<?php
get_header();
?>
<?php
$get_your_business_section = get_field('get_your_business_section');
$after_nav_section = get_field('after_nav_section');
$find_similar_section_starts = get_field('find_similar_section_starts');
$brainstorm_section = get_field('brainstorm_section');
// echo '<pre>';
// print_r($brainstorm_section);
// echo '</pre>';
$last_section = get_field('last_section');
?>
<!-- After nav section -->
<section class="afternav-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1><?php echo $after_nav_section['heading']; ?></h1>
                <p><?php echo $after_nav_section['paragraph']; ?></p>
                <a href="#" class="btn"><?php echo $after_nav_section['start_for_free']['title']; ?></a>
            </div>
        </div>
        <div class="watch-demo text-center">
            <figure>
                <img src="<?php echo $after_nav_section['image1']['url']; ?>" alt="watch demo">
            </figure>
            <a href="https://www.vecteezy.com/free-videos/nature" data-src="https://www.youtube.com/watch?v=BHACKCNDMW8" data-fancybox>
                <img src="<?php echo $after_nav_section['image2']['url']; ?>" alt="icon">
                <?php echo $after_nav_section['watch_video']; ?>
            </a>
        </div>
    </div>
</section>
<!-- After nav section ends-->
<!-- content-box section -->
<section class="content-box">
    <div class="container">
        <div class="innercontainer">
            <div class="row">
                <?php if (have_rows('content-box_section')) : ?>
                    <?php while (have_rows('content-box_section')) : the_row(); ?>
                        <div class="col-md-6 col-sm-12 col-lg-3">
                            <div class="content-1">
                                <figure>
                                    <img src="<?php echo get_sub_field('image')['url']; ?>" alt="image">
                                </figure>
                                <h3><?php echo get_sub_field('heading'); ?></h3>
                                <p><?php echo get_sub_field('paragraph'); ?></p>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<!-- content-box section ends-->
<!-- brainstorm section-->

<section class="brainstorm">
    <div class="brainstorm-wrapper">
        <div class="row">
            <div class="col-md-12 col-lg-12 col-xl-6 col-xxl-6 brain-img">
                <figure>
                    <img src="<?php echo $brainstorm_section['image']['url']; ?>" alt="brainstorm-img">
                </figure>
            </div>
            <div class="col-md-12 col-lg-12 col-xl-6 col-xxl-6 brain-text">
                <div class="brainright">
                    <h4><?php echo $brainstorm_section['heading1']; ?></h4>
                    <h2><?php echo $brainstorm_section['heading2']; ?></h2>
                    <p><?php echo $brainstorm_section['paragraph']; ?></p>
                    <a href="#" class="btn"><?php echo $brainstorm_section['start_for_free']['title']; ?></a>
                </div>
            </div>
        </div>
    </div>
    <div class="row bottompart">
        <div class="col-md-12">
            <div class="row">
                <?php
                $count = 0;
                foreach ($brainstorm_section['gallery'] as $key => $image) {
                    $images = $image['url'];
                    if ($count % 2 == 0) {
                ?>
                        <div class="col-md-4 col-sm-12 col-12">
                            <img src="<?php echo $image['url']; ?>" alt="brainstorm-img">
                        </div>

                    <?php
                    } else {
                    ?>
                        <div class="col-md-2 col-sm-12 col-12">
                            <img src="<?php echo $image['url']; ?>" alt="brainstorm-img">
                        </div>
                <?php
                    }
                    $count++;
                }
                ?>
            </div>
        </div>
    </div>
</section>
<!-- brainstorm section ends-->
<!-- find similar section starts-->
<section class="find-similar">
    <div class="container">
        <div class="find-top text-center common-padding">
            <h2><?php echo $find_similar_section_starts['heading']; ?></h2>
            <p><?php echo $find_similar_section_starts['paragraph']; ?></p>
        </div>

        <?php

        $args = array(
            'post_type' => 'stories'
        );

        $stories_list = new WP_Query($args);

        //$news_list = get_posts($args);


        ?>
        <div class="find-similar-parent single-item">
            <?php
            // echo "<pre>";
            // print_r($stories_list);
            // echo "</pre>";
            if ($stories_list->have_posts()) {
                while ($stories_list->have_posts()) {
                    $stories_list->the_post();
            ?>
                    <div class="inner-find-similar ">
                        <div class="row">
                            <div class="col-12 col-md-12 col-lg-12 col-xl-6">
                                <figure>
                                    <?php the_post_thumbnail()
                                    ?>
                                    <!-- <img src="./images/slider-1.svg" alt="slider-image"> -->
                                </figure>
                            </div>
                            <div class="col-12 col-md-12 col-lg-12 col-xl-6 d-flex">
                                <div class="text-content">

                                    <h4>
                                        <?php
                                        $stories_cat =  get_the_terms(get_the_ID(), 'stories-category');

                                        foreach ($stories_cat as $key => $cat) {

                                            echo $cat->name;
                                            # code...
                                        }
                                        ?>
                                    </h4>
                                    <p>
                                        <?php the_content() ?>
                                        <!-- Enim sagittis, sit porttitor morbi lobortis amet, libero adipiscing auctor. Malesuada tristique libero, id netus tincidunt. Egestas ac arcu amet nisl quis est ... -->
                                    </p>
                                    <a href="<?php the_permalink() ?>">Read Full Story</a>
                                </div>
                            </div>
                        </div>
                    </div>
            <?php
                }
            }
            ?>
        </div>
    </div>
</section>
<!-- find similar section ends-->
<!-- get your business section -->
<section class="growfast">
    <div class="container">
        <div class="grow-wrapper">
            <div class="grow-top text-center common-padding">
                <h2><?php echo $get_your_business_section['heading1']; ?></h2>
                <p><?php echo $get_your_business_section['paragraph']; ?></p>
                <a href="#" class="btn"><?php echo $get_your_business_section['view_product_tour']['title']; ?></a>
            </div>
            <div class="row right-grow-side">
                <div class="col-md-12 col-lg-12 col-12 col-xl-6 only-for-position">
                    <img src="<?php echo $get_your_business_section['image1']['url']; ?>" alt="desktop">
                    <img src="<?php echo $get_your_business_section['image2']['url']; ?>" alt="image">
                    <img src="<?php echo $get_your_business_section['image3']['url']; ?>" class="onlyfor-smallscreen">
                    <img src="<?php echo $get_your_business_section['image4']['url']; ?>" alt="image">
                </div>
                <div class="col-md-12 col-lg-12 col-12 col-xl-6 align-self-center">
                    <h4><?php echo $get_your_business_section['heading2']; ?></h4>
                    <h2><?php echo $get_your_business_section['heading3']; ?></h2>
                    <p><?php echo $get_your_business_section['paragraph2']; ?></p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- get your business section ends-->
<!-- Get your business ends -->
<section class="brainstorm-now common-padding">
    <div class="container">
        <div class="row">
            <div class="co-md-12 text-center">

                <h4><?php echo $last_section['heading1']; ?></h4>
                <h2><?php echo $last_section['heading2']; ?></h2>
                <p><?php echo $last_section['paragraph']; ?></p>
                <a href="#" class="btn"><?php echo $last_section['start_of_free']['title']; ?></a>

            </div>
        </div>

    </div>
</section>
<?php
get_footer();
?>