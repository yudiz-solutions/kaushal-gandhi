<?php
get_header();
?>
<?php
$after_nav_section = get_field('after_nav_section');
$brainstorm_section = get_field('brainstorm_section');
$find_similar_section_starts = get_field('find_similar_section_starts');
$get_your_business_section = get_field('get_your_business_section');
$last_section = get_field('last_section');
// echo '<pre>';
// print_r($brainstorm_section);
// echo '</pre>';
?>
<?php
if (!empty($after_nav_section)) {
?>
    <!-- After nav section -->
    <section class="afternav-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <?php if (!empty($after_nav_section['heading'])) { ?>
                        <h1><?php echo $after_nav_section['heading']; ?></h1>
                    <?php } ?>
                    <?php if (!empty($after_nav_section['paragraph'])) { ?>
                        <p><?php echo $after_nav_section['paragraph']; ?></p>
                    <?php } ?>
                    <?php if (!empty($after_nav_section['start_for_free'])) { ?>
                        <a href="<?php echo $after_nav_section['start_for_free']['url']; ?>" target="<?php echo $after_nav_section['start_for_free']['target']; ?>" class="btn"><?php echo $after_nav_section['start_for_free']['title']; ?></a>
                    <?php } ?>
                </div>
            </div>
            <div class="watch-demo text-center">
                <figure>
                    <?php if (!empty($after_nav_section['image1'])) { ?>
                        <img src="<?php echo $after_nav_section['image1']['url']; ?>" alt="<?php echo $after_nav_section['image1']['alt']; ?>">
                    <?php } ?>
                </figure>
                <?php if (!empty($after_nav_section['data-src'])) { ?>
                    <a href="#" data-src="<?php $after_nav_section['data-src']['url'] ?>" data-fancybox>
                    <?php } ?>
                    <?php if (!empty($after_nav_section['image2'])) { ?>
                        <img src="<?php echo $after_nav_section['image2']['url']; ?>" alt="<?php echo $after_nav_section['image2']['alt']; ?>">
                    <?php } ?>
                    <?php echo $after_nav_section['watch_video']; ?>
                    </a>
            </div>
        </div>
    </section>
<?php } ?>
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
<?php
if (!empty($brainstorm_section)) {
?>
    <section class="brainstorm">
        <div class="brainstorm-wrapper">
            <div class="row">
                <div class="col-md-12 col-lg-12 col-xl-6 col-xxl-6 brain-img">
                    <figure>
                        <?php if (!empty($brainstorm_section['image'])) { ?>
                            <img src="<?php echo $brainstorm_section['image']['url']; ?>" alt="<?php echo $brainstorm_section['image']['alt']; ?>">
                        <?php } ?>
                    </figure>
                </div>
                <div class="col-md-12 col-lg-12 col-xl-6 col-xxl-6 brain-text">
                    <div class="brainright">
                        <?php if (!empty($brainstorm_section['heading1'])) { ?>
                            <h4><?php echo $brainstorm_section['heading1']; ?></h4>
                        <?php } ?>
                        <?php if (!empty($brainstorm_section['heading2'])) { ?>
                            <h2><?php echo $brainstorm_section['heading2']; ?></h2>
                        <?php } ?>
                        <?php if (!empty($brainstorm_section['paragraph'])) { ?>
                            <p><?php echo $brainstorm_section['paragraph']; ?></p>
                        <?php } ?>
                        <?php if (!empty($brainstorm_section['start_for_free'])) { ?>
                            <a href="<?php echo $brainstorm_section['start_for_free']['url']; ?>" target="<?php echo $brainstorm_section['start_for_free']['target']; ?>" class="btn"><?php echo $brainstorm_section['start_for_free']['title']; ?></a>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="row bottompart">
            <div class="col-md-12">
                <?php if (!empty($brainstorm_section['gallery'])) { ?>
                    <div class="row">
                        <?php
                        $count = 0;
                        foreach ($brainstorm_section['gallery'] as $key => $image) {
                            $images = $image['url'];
                            if ($count % 2 == 0) {
                        ?>
                                <div class="col-md-4 col-sm-12 col-12">
                                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                                </div>

                            <?php
                            } else {
                            ?>
                                <div class="col-md-2 col-sm-12 col-12">
                                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                                </div>
                        <?php
                            }
                            $count++;
                        }
                        ?>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
<?php } ?>
<!-- brainstorm section ends-->
<!-- find similar section starts-->
<?php
if (!empty($find_similar_section_starts)) {
?>
    <section class="find-similar">
        <div class="container">
            <div class="find-top text-center common-padding">
                <?php if (!empty($find_similar_section_starts['heading'])) { ?>
                    <h2><?php echo $find_similar_section_starts['heading']; ?></h2>
                <?php } ?>
                <?php if (!empty($find_similar_section_starts['paragraph'])) { ?>
                    <p><?php echo $find_similar_section_starts['paragraph']; ?></p>
                <?php } ?>
            </div>

            <?php

            $args = array(
                'post_type' => 'Loadmore',
                'post_status' => 'publish'
            );

            $Loadmore_list = new WP_Query($args);

            //$news_list = get_posts($args);


            ?>
            <div class="find-similar-parent single-item">
                <?php
                // echo "<pre>";
                // print_r($Loadmore_list);
                // echo "</pre>";
                if ($Loadmore_list->have_posts()) {
                    while ($Loadmore_list->have_posts()) {
                        $Loadmore_list->the_post();
                ?>
                        <div class="inner-find-similar ">
                            <div class="row">
                                <div class="col-12 col-md-12 col-lg-12 col-xl-6">
                                    <figure>
                                        <?php
                                        the_post_thumbnail()
                                        ?>
                                        <!-- <img src="./images/slider-1.svg" alt="slider-image"> -->
                                    </figure>
                                </div>
                                <div class="col-12 col-md-12 col-lg-12 col-xl-6 d-flex">
                                    <div class="text-content">

                                        <h4>
                                            <?php
                                            $Loadmore_cat =  get_the_terms(get_the_ID(), 'Loadmore-category');

                                            foreach ($Loadmore_cat as $key => $cat) {

                                                echo $cat->name;
                                                # code...
                                            }
                                            ?>
                                        </h4>
                                        <p>
                                            <?php the_excerpt() ?>
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
<?php } ?>
<!-- find similar section ends-->
<!-- get your business section -->
<?php
if (!empty($get_your_business_section)) {
?>
    <section class="growfast">
        <div class="container">
            <div class="grow-wrapper">
                <div class="grow-top text-center common-padding">
                    <?php if (!empty($get_your_business_section['heading1'])) { ?>
                        <h2><?php echo $get_your_business_section['heading1']; ?></h2>
                    <?php } ?>
                    <?php if (!empty($get_your_business_section['paragraph'])) { ?>
                        <p><?php echo $get_your_business_section['paragraph']; ?></p>
                    <?php } ?>
                    <?php if (!empty($get_your_business_section['view_product_tour'])) { ?>
                        <a href="<?php $get_your_business_section['view_product_tour']['url']; ?>" target="<?php $get_your_business_section['view_product_tour']['target']; ?>" class="btn"><?php echo $get_your_business_section['view_product_tour']['title']; ?></a>
                    <?php } ?>
                </div>
                <div class="row right-grow-side">
                    <div class="col-md-12 col-lg-12 col-12 col-xl-6 only-for-position">
                        <?php if (!empty($get_your_business_section['image1'])) { ?>
                            <img src="<?php echo $get_your_business_section['image1']['url']; ?>" alt="<?php echo $get_your_business_section['image1']['alt']; ?>">
                        <?php } ?>
                        <?php if (!empty($get_your_business_section['image2'])) { ?>
                            <img src="<?php echo $get_your_business_section['image2']['url']; ?>" alt="<?php echo $get_your_business_section['image1']['alt']; ?>">
                        <?php } ?>
                        <?php if (!empty($get_your_business_section['image3'])) { ?>
                            <img src="<?php echo $get_your_business_section['image3']['url']; ?>" class="onlyfor-smallscreen">
                        <?php } ?>
                        <?php if (!empty($get_your_business_section['image4'])) { ?>
                            <img src="<?php echo $get_your_business_section['image4']['url']; ?>" alt="<?php echo $get_your_business_section['image1']['alt']; ?>">
                        <?php } ?>
                    </div>
                    <div class="col-md-12 col-lg-12 col-12 col-xl-6 align-self-center">
                        <?php if (!empty($get_your_business_section['heading2'])) { ?>
                            <h4><?php echo $get_your_business_section['heading2']; ?></h4>
                        <?php } ?>
                        <?php if (!empty($get_your_business_section['heading3'])) { ?>
                            <h2><?php echo $get_your_business_section['heading3']; ?></h2>
                        <?php } ?>
                        <?php if (!empty($get_your_business_section['paragraph2'])) { ?>
                            <p><?php echo $get_your_business_section['paragraph2']; ?></p>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php } ?>
<!-- get your business section ends-->
<!-- Get your business ends -->
<?php
if (!empty($last_section)) {
?>
    <section class="brainstorm-now common-padding">
        <div class="container">
            <div class="row">
                <div class="co-md-12 text-center">
                    <?php if (!empty($last_section['heading1'])) { ?>
                        <h4><?php echo $last_section['heading1']; ?></h4>
                    <?php } ?>
                    <?php if (!empty($last_section['heading2'])) { ?>
                        <h2><?php echo $last_section['heading2']; ?></h2>
                    <?php } ?>
                    <?php if (!empty($last_section['paragraph'])) { ?>
                        <p><?php echo $last_section['paragraph']; ?></p>
                    <?php } ?>
                    <?php if (!empty($last_section['start_of_free'])) { ?>
                        <a href="<?php echo $last_section['start_of_free']['url']; ?>" target="<?php echo $last_section['start_of_free']['target']; ?>" class="btn"><?php echo $last_section['start_of_free']['title']; ?></a>
                    <?php } ?>

                </div>
            </div>

        </div>
    </section>
<?php } ?>
<?php
get_footer();
?>