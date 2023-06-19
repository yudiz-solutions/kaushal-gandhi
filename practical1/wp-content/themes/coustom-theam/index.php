<?php
get_header();

$welcome_image = get_field('welcome_image', get_the_ID());
// var_dump($welcome_image);




?>


<!-- end header -->
<!-- start slider section -->
<div id="top_section" class=" banner_main">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                        <li data-target="#myCarousel" data-slide-to="3"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="container-fluid">
                                <div class="carousel-caption relative">
                                    <div class="bluid">
                                        <?php

                                        $heading = get_field('heading');
                                        if (isset($heading)) {
                                        ?>
                                            <h1><?php echo $heading; ?></h1>
                                        <?php
                                        }
                                        ?>
                                        <p>
                                            <?php
                                            $paragraph = get_field('paragraph');
                                            if (isset($paragraph)) {
                                            ?>
                                                <?php echo $paragraph; ?>
                                            <?php
                                            }
                                            ?>
                                        </p>
                                        <?php
                                        $about_company = get_field('about_company');
                                        $contact = get_field('contact');

                                        if (!empty($about_company)) {
                                        ?>
                                            <a href="<?php echo $about_company["url"] ?>" class="read_more" target="<?php echo $about_company["target"] ?>">
                                                <span class="btn-text"><?php echo $about_company["title"]; ?></span>
                                            </a>

                                            <a href="<?php echo $contact["url"] ?>" class="read_more" target="<?php echo $contact["target"] ?>">
                                                <span class="btn-text"><?php echo $contact["title"]; ?></span>
                                            </a>
                                        <?php
                                        }
                                        ?>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="container-fluid">
                                <div class="carousel-caption relative">
                                    <div class="bluid">
                                        <h1>Creative <br>Work Idea </h1>
                                        <p>There are many variations of passages of Lorem Ipsum <br>available, but the majority have suffered alteration
                                        </p>
                                        <a class="read_more" href="<?php echo get_template_directory_uri(); ?>/about.html">About Company </a><a class="read_more" href="<?php echo get_template_directory_uri(); ?>/contact.html">Contact </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="container-fluid">
                                <div class="carousel-caption relative">
                                    <div class="bluid">
                                        <h1>Creative <br>Work Idea </h1>
                                        <p>There are many variations of passages of Lorem Ipsum <br>available, but the majority have suffered alteration
                                        </p>
                                        <a class="read_more" href="<?php echo get_template_directory_uri(); ?>/about.html">About Company </a><a class="read_more" href="<?php echo get_template_directory_uri(); ?>/contact.html">Contact </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="container-fluid">
                                <div class="carousel-caption relative">
                                    <div class="bluid">
                                        <h1>Creative <br>Work Idea </h1>
                                        <p>There are many variations of passages of Lorem Ipsum <br>available, but the majority have suffered alteration
                                        </p>
                                        <a class="read_more" href="<?php echo get_template_directory_uri(); ?>/about.html">About Company </a><a class="read_more" href="<?php echo get_template_directory_uri(); ?>/contact.html">Contact </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                        <i class="fa fa-angle-left" aria-hidden="true"></i>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end slider section -->
<!-- we_do -->
<div class="we_do">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="titlepage text_align_center">
                    <h2>
                        <h2><?php

                            $what_we_do = get_field('what_we_do');
                            if (isset($what_we_do)) {
                            ?>
                                <?php echo $what_we_do; ?>
                            <?php
                            }
                            ?></h2>
                    </h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div id="we1" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#we1" data-slide-to="0" class="active"></li>
                        <li data-target="#we1" data-slide-to="1"></li>
                        <li data-target="#we1" data-slide-to="2"></li>
                        <li data-target="#we1" data-slide-to="3"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="container-fluid">
                                <div class="carousel-caption we1_do">
                                    <div class="row">
                                        <?php if (have_rows('website_development')) : ?>
                                            <?php while (have_rows('website_development')) : the_row(); ?>
                                                <div class="col-md-4">
                                                    <div id="bo_ho" class="we_box text_align_left">
                                                        <i><img src="<?php echo get_sub_field('website_image_1')['url']; ?>" alt="<?php echo get_sub_field('website_image_1')['alt']; ?>" /></i>
                                                        <?php echo get_sub_field('website_heading'); ?>
                                                        <a class="read_more" href="we_do">Read More</a>
                                                    </div>
                                                </div>
                                            <?php endwhile; ?>
                                        <?php endif; ?>

                                        <!-- <div class="col-md-4">
                                            <div id="bo_ho" class="we_box text_align_left">
                                                <i><img src="<?php // echo get_template_directory_uri(); 
                                                                ?>/images/we1.png" alt="#" /></i>
                                                <h3>website <br>development</h3>
                                                <p>many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which
                                                </p>
                                                <a class="read_more" href="we_do">Read More</a>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div id="bo_ho" class="we_box text_align_left">
                                                <i><img src="<?php //echo get_template_directory_uri(); 
                                                                ?>/images/we1.png" alt="#" /></i>
                                                <h3>website <br>development</h3>
                                                <p>many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which
                                                </p>
                                                <a class="read_more" href="we_do">Read More</a>
                                            </div>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="container-fluid">
                                <div class="carousel-caption we1_do">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div id="bo_ho" class="we_box text_align_left">
                                                <i><img src="<?php echo get_template_directory_uri(); ?>/images/we1.png" alt="#" /></i>
                                                <h3>website <br>development</h3>
                                                <p>many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which
                                                </p>
                                                <a class="read_more" href="we_do">Read More</a>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div id="bo_ho" class="we_box text_align_left">
                                                <i><img src="<?php echo get_template_directory_uri(); ?>/images/we2.png" alt="#" /></i>
                                                <h3>App <br>development</h3>
                                                <p>many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which
                                                </p>
                                                <a class="read_more" href="we_do">Read More</a>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div id="bo_ho" class="we_box text_align_left">
                                                <i><img src="<?php echo get_template_directory_uri(); ?>/images/we3.png" alt="#" /></i>
                                                <h3>website <br>design</h3>
                                                <p>many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which
                                                </p>
                                                <a class="read_more" href="we_do">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="container-fluid">
                                <div class="carousel-caption we1_do">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div id="bo_ho" class="we_box text_align_left">
                                                <i><img src="<?php echo get_template_directory_uri(); ?>/images/we1.png" alt="#" /></i>
                                                <h3>website <br>development</h3>
                                                <p>many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which
                                                </p>
                                                <a class="read_more" href="we_do">Read More</a>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div id="bo_ho" class="we_box text_align_left">
                                                <i><img src="<?php echo get_template_directory_uri(); ?>/images/we1.png" alt="#" /></i>
                                                <h3>website <br>development</h3>
                                                <p>many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which
                                                </p>
                                                <a class="read_more" href="we_do">Read More</a>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div id="bo_ho" class="we_box text_align_left">
                                                <i><img src="<?php echo get_template_directory_uri(); ?>/images/we1.png" alt="#" /></i>
                                                <h3>website <br>development</h3>
                                                <p>many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which
                                                </p>
                                                <a class="read_more" href="we_do">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#we1" role="button" data-slide="prev">
                        <i class="fa fa-angle-left" aria-hidden="true"></i>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#we1" role="button" data-slide="next">
                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end we_do -->
<!-- about -->
<div class="about">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="titlepage text_align_center">

                    <?php

                    $about_company_heading = get_field('about_company_heading');
                    if (isset($about_company_heading)) {
                    ?>
                        <?php echo $about_company_heading; ?>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end about -->
<!-- portfolio -->
<div class="portfolio">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="titlepage text_align_left">
                    <h2>

                        <?php

                        $we_have_done_portfolio_heading = get_field('we_have_done_portfolio_heading');
                        if (isset($we_have_done_portfolio_heading)) {
                        ?>
                            <?php echo $we_have_done_portfolio_heading; ?>
                        <?php
                        }
                        ?>
                    </h2>
                </div>
            </div>
        </div>
        <div class="row">
            <?php if (have_rows('figure_block')) : ?>
                <?php while (have_rows('figure_block')) : the_row(); ?>
                    <div class="col-md-6">
                        <div id="ho_nf" class="portfolio_main text_align_left">
                            <figure>
                                <img src="<?php echo get_sub_field('image_1')['url']; ?>" alt="#" />
                                <div class="portfolio_text">
                                    <div class="li_icon">
                                        <a href="Javascript:void(0)"><i class="fa fa-search" aria-hidden="true"></i></a>
                                        <a href="Javascript:void(0)"><i class="fa fa-link" aria-hidden="true"></i></a>
                                    </div>
                                    <?php echo get_sub_field('title'); ?>
                                </div>
                            </figure>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
            <div class="col-md-12">
                <?php
                $see_more = get_field('see_more');
                if (!empty($see_more)) {
                ?>
                    <a href="<?php echo $see_more["url"] ?>" class="read_more" target="<?php echo $see_more["target"] ?>">
                        <span class="btn-text"><?php echo $see_more["title"]; ?></span>
                    </a>
                <?php
                }
                ?>
            </div>

        </div>
    </div>
</div>
<!-- end portfolio -->
<!-- chose -->
<div class="chose">
    <div class="container">
        <div class="row d_flex">
            <div class="col-md-12">
                <div class="titlepage text_align_left">
                    <?php

                    $why_chose_us = get_field('why_chose_us');
                    if (isset($why_chose_us)) {
                    ?>
                        <?php echo $why_chose_us; ?>
                    <?php
                    }
                    ?>
                </div>

            </div>


            <?php
            $rows = get_field('details');
            if ($rows) {
            ?>
                <?php foreach ($rows as $key => $row) {

                    $image = $row['detail_image'];

                    $detail_description = $row['detail_description'];
                    if ($key == 2) {
                ?>
                        <div class="col-lg-2 col-md-4">
                            <div class="chose_box">

                                <i><img src="<?php echo $image['url']; ?>" alt="#" /></i>
                                <?php echo $detail_description; ?>

                                <?php
                                $read_more = get_field('read_more');
                                if (!empty($read_more)) {
                                ?>
                                    <a href="<?php echo $read_more["url"] ?>" class="read_more" target="<?php echo $read_more["target"] ?>">
                                        <span class="btn-text"><?php echo $read_more["title"]; ?></span>
                                    </a>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                    <?php
                    } else {
                    ?>
                        <div class="col-lg-5 col-md-4">
                            <div class="chose_box">

                                <i><img src="<?php echo $image['url']; ?>" alt="#" /></i>
                                <?php echo $detail_description; ?>

                                <?php
                                $read_more = get_field('read_more');
                                if (!empty($read_more)) {
                                ?>
                                    <a href="<?php echo $read_more["url"] ?>" class="read_more" target="<?php echo $read_more["target"] ?>">
                                        <span class="btn-text"><?php echo $read_more["title"]; ?></span>
                                    </a>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                    <?php
                    }
                    ?>


            <?php
                }
            }
            ?>

        </div>
    </div>
</div>
<?php

$args = array(
    'post_type' => array('news'),
    'posts_per_page' => '-1',
    'post_status' => array('publish', 'draft'),

    // 'meta_query' => array(
    //     'relation' => 'OR',
    //     array(
    //         'key' => 'price',
    //         'value' => 20,
    //         'compare' => '<='
    //     ),
    //     array(
    //         'key' => 'color',
    //         'value' => 'green',
    //         'compare' => '='
    //     ),

    // ),
    'tax_query' => array(
        array(
            'taxonomy' => 'news-category',
            'field'    => 'slug',
            'terms'    => array('category 1', 'category 2', 'category 3')
        ),

    )

);
$news_data =  get_posts($args);
echo '<pre>';
print_r($news_data);
echo '</pre>';
?>


<section class="blog">
    <!-- container start -->
    <div class="container">
        <!-- main blog div start -->
        <div class="main-blog">
            <div class="blog-content">
                <h2>Articles & News</h2>
                <p>It is a long established fact that a reader will be distracted by the of readable content of a page when lookings at its layouts the points of using.</p>
            </div>
            <ul>
                <?php foreach ($news_data as $ndata) {

                    $kaishal = $ndata->post_title;
                } ?>

                <li>
                    <div class="inner-blog-image">
                        <a href="<?php echo the_permalink(); ?>">
                            <?php the_post_thumbnail() ?>
                        </a>
                        <div class="blog-tag">
                            <?php
                            $news_cat =  get_the_terms(get_the_ID(), 'news-category');



                            ?>
                        </div>
                    </div>
                    <a href="<?php the_permalink(); ?>">
                        <h3><?php echo $kaishal ?></h3>
                    </a>
                    <div class="blog-date">
                        <div class="date"><?php the_date() ?></div>
                        <a href="<?php the_permalink(); ?>"><i class="fas fa-chevron-right"></i></a>
                    </div>
                </li>



            </ul>
        </div>
        <!-- main blog div close -->
    </div>
    <!-- container close -->
</section>




<!-- end chose -->
<!-- contact -->
<div class="contact">
    <div class="container">
        <div class="row ">
            <div class="col-md-6">
                <form id="request" class="main_form">
                    <div class="col-md-12">
                        <?php

                        $get_in_touch_form = get_field('get_in_touch_form');
                        if (isset($get_in_touch_form)) {
                        ?>
                            <?php echo  $get_in_touch_form;
                            ?>
                        <?php
                        }
                        ?>
                    </div>
                </form>
            </div>
            <div class="col-md-6">
                <div class="titlepage text_align_left">
                    <h2>What Says Clients</h2>
                </div>
                <div id="clientsl" class="carousel slide our_clientsl" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#clientsl" data-slide-to="0" class="active"></li>
                        <li data-target="#clientsl" data-slide-to="1"></li>
                        <li data-target="#clientsl" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="container">
                                <div class="carousel-caption posi_in">
                                    <div class="clientsl_text">
                                        <i><img src="<?php echo get_template_directory_uri(); ?>/images/clint.jpg" alt="#" /></i>
                                        <h3>Deno <img src="<?php echo get_template_directory_uri(); ?>/images/icon.png" alt="#" /></h3>
                                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem IpsumIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="container">
                                <div class="carousel-caption posi_in">
                                    <div class="clientsl_text">
                                        <i><img src="<?php echo get_template_directory_uri(); ?>/images/clint.jpg" alt="#" /></i>
                                        <h3>Deno <img src="<?php echo get_template_directory_uri(); ?>/images/icon.png" alt="#" /></h3>
                                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem IpsumIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="container">
                                <div class="carousel-caption posi_in">
                                    <div class="clientsl_text">
                                        <i><img src="<?php echo get_template_directory_uri(); ?>/images/clint.jpg" alt="#" /></i>
                                        <h3>Deno <img src="<?php echo get_template_directory_uri(); ?>/images/icon.png" alt="#" /></h3>
                                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem IpsumIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#clientsl" role="button" data-slide="prev">
                        <i class="fa fa-angle-left" aria-hidden="true"></i>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#clientsl" role="button" data-slide="next">
                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- contact -->
<?php get_footer();
?>