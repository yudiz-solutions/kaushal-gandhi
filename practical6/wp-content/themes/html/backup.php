<?php
/*
Template Name: Home
*/
?>
<?php
get_header();
$Banner_Section = get_field('banner_section');
$about_section = get_field('about_section');
$services_section = get_field('services_section');
$assessment_section = get_field('assessment_section');
$home_news_section = get_field('home_news_section');
$team_section = get_field('team_section');
?>
<?php
echo '<pre>';
print_r($services_section['link1']);
echo '</pre>';
?>
<!--******************* Banner Section Start *********************-->
<?php if (!empty($Banner_Section)) { ?>
    <div class="home-banner">
        <div class="home-slider">
            <?php if (!empty($Banner_Section['repeater_for_banner_section'])) { ?>
                <?php
                foreach ($Banner_Section['repeater_for_banner_section'] as $key) {
                ?>
                    <div>
                        <div class="slide" style="background: #5C5C5C url('<?php echo $key['image']['url']; ?>') no-repeat center center / cover;">
                            <div class="container">
                                <div class="slide-inner">
                                    <div class="slide-content">
                                        <?php echo $key['heading']; ?>
                                        <p class="tagline"><?php echo $key['paragraph']; ?></p>
                                        <ul class="btn-list">
                                            <li><a href="<?php echo $key['button1']['url']; ?>" class="theme-btn"><?php echo $key['button1']['title']; ?></a></li>
                                            <li><a href="<?php echo $key['button2']['url']; ?>" class="theme-btn fill-btn"><?php echo $key['button2']['title']; ?></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            <?php } ?>
        </div>
    </div>
<?php } ?>
<!--******************* Banner Section End *********************-->
<!--******************* Header Section End *********************-->

<!--******************* Middle Section Start ******************-->
<main>
    <?php if (!empty($about_section)) { ?>
        <section class="common-section about-section">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="bg-img-block">
                            <?php
                            if (isset($about_section['heading']) && !empty($about_section['heading'])) {
                            ?>
                                <div class="heading-block">
                                    <?php echo $about_section['heading']; ?>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="desc-block">
                            <?php if (isset($about_section['paragraph']) && !empty($about_section['paragraph'])) { ?>
                                <p> <?php echo $about_section['paragraph']; ?></p>
                            <?php } ?>
                            <?php
                            if (isset($about_section['button']) && !empty($about_section['button'])) {
                            ?>
                                <a href=" <?php echo $about_section['button']['url']; ?>" class="theme-btn"> <?php echo $about_section['button']['title']; ?></a><?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php } ?>

    <?php //if (!empty($services_section)) { 
    ?>
    <section class="common-section services-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-sm-push-8">
                    <div class="services-title">
                        <?php echo $services_section['heading_1']; ?>
                        <ul class="nav common-nav">
                            <li class="active">
                                <h3><a data-toggle="pill" href="<?php echo $services_section['link1']['url']; ?>"><?php echo $services_section['link1']['title']; ?></a></h3>
                            </li>
                            <li>
                                <h3><a data-toggle="pill" href="<?php echo $services_section['link2']['url']; ?>"><?php echo $services_section['link2']['title']; ?></a></h3>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-8 col-sm-pull-4">
                    <div class="tab-content">
                        <div id="pre-arrival" class="tab-pane fade in active">
                            <div class="row">
                                <?php
                                foreach ($services_section['pre_arrival'] as $key) {
                                ?>
                                    <div class="col-sm-6 col-md-3">
                                        <div class="service-item">
                                            <img src="<?php echo $key['image']['url']; ?>" alt="<?php echo $key['image']['url']; ?>">
                                            <div class="bottom-block">
                                                <p><?php echo $key['paragraph']; ?></p>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                        <div id="post-arrival" class="tab-pane fade">
                            <div class="row">
                                <?php
                                foreach ($services_section['post_arrival'] as $post) {
                                ?>
                                    <div class="col-sm-6 col-md-3">
                                        <div class="service-item">
                                            <img src="<?php echo $post['image1']['url']; ?>" alt="<?php echo $post['image1']['alt']; ?>">
                                            <div class="bottom-block">
                                                <p><?php echo $post['paragraph1']; ?></p>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php //} 
    ?>
    <section class="assessment-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h2>Get your free assessment done right now !</h2>
                </div>
                <div class="col-sm-6 text-right">
                    <a href="assessment.html" class="theme-btn white-btn">apply now</a>
                </div>
            </div>
        </div>
    </section>
    <section class="common-section home-news-section">
        <div class="container">
            <div class="home-news-list">
                <div class="col-sm-3">
                    <div class="news-box news-list-title">
                        <div class="news-desc">
                            <h2>recent news</h2>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="news-box" style="background: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/images/about-img.jpg') no-repeat center center / cover;">
                        <div class="news-desc">
                            <p><span>Press Release </span>31 Jul, 2018</p>
                            <h5><a href="#">New Changes to Canada’s Application Intake System for Parents and Grandparents</a></h5>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="news-box" style="background: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/images/about-img.jpg') no-repeat center center / cover;">
                        <div class="news-desc">
                            <p><span>Press Release </span>31 Jul, 2018</p>
                            <h5><a href="#">New Changes to Canada’s Application Intake…</a></h5>
                        </div>
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="news-box" style="background: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/images/about-img.jpg') no-repeat center center / cover;">
                        <div class="news-desc">
                            <p><span>Press Release </span>31 Jul, 2018</p>
                            <h5><a href="#">New Changes to Canada’s Application Intake System for Parents…</a></h5>
                        </div>
                    </div>
                </div>
                <div class="col-sm-7">
                    <div class="news-box" style="background: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/images/about-img.jpg') no-repeat center center / cover;">
                        <div class="news-desc">
                            <p><span>Press Release </span>31 Jul, 2018</p>
                            <h5><a href="#">New Changes to Canada’s Application Intake System for Parents and Grandparents</a></h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <a href="news.html" class="theme-btn">More News</a>
            </div>
        </div>
    </section>
    <section class="common-section home-team-section">
        <div class="container">
            <div class="text-center">
                <h2>our team</h2>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="team-box" style="background: #015e7d url('<?php echo get_stylesheet_directory_uri(); ?>/assets/images/avtar_nilam.jpg') no-repeat center center / cover;">
                        <div class="team-desc">
                            <h3>Nilam Doctor</h3>
                            <p>Director and Chief Technology Officer</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="team-box" style="background: #015e7d url('<?php echo get_stylesheet_directory_uri(); ?>/assets/images/avtar_danny.jpg') no-repeat center center / cover;">
                        <div class="team-desc">
                            <h3>Daniel Wettreich</h3>
                            <p>Chairman of the Board and Secretary</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="team-box" style="background: #015e7d url('<?php echo get_stylesheet_directory_uri(); ?>/assets/images/avtar_placeholder.jpg') no-repeat center center / cover;">
                        <div class="team-desc">
                            <h3>Sumedha Mahajan</h3>
                            <p>Vice President</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <a href="team.html" class="theme-btn white-btn">full team</a>
            </div>
        </div>
    </section>
</main>
<!--******************* Middle Section End ******************-->
<!--******************* Footer Section Start ******************-->

<?php
get_footer();
?>




jQuery (document ).ready(function() {
var cuurrpage = 1;
jQuery('#loadbutton').click(function(){

data = {
'action': 'post_loadmore_ajax',
'page': cuurrpage+1
};

jQuery.ajax({
url : kaushal.ajaxurl,
data : data,
type : 'POST',
success : function( data ){
if(data){

jQuery(".ajax_loadmore").append(data);
cuurrpage++;
}

}
});
});
});

<?php
/* Template Name: Services */
get_header();

$service_post_grp = get_field('service_post_grp', 'option');
?>

<!--========= BANNER SECTION STARTS =========-->
<?php if (!empty($service_post_grp)) { ?>
    <div class="home-banner">
        <?php if (!empty($service_post_grp['img'])) { ?>
            <div class="banner" style="background: #5C5C5C url('<?= $service_post_grp['img']['url']; ?>') no-repeat center center / cover;">
            <?php } ?>

            <?php if (!empty($service_post_grp['heading'])) { ?>
                <div class="container">
                    <h1>
                        <?= $service_post_grp['heading']; ?>
                    </h1>
                </div>
            <?php } ?>
            </div>
    </div>
<?php } ?>
<!--========= BANNER SECTION ENDS =========-->

<main>
    <section class="common-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-md-3 service-sidebar">
                    <?php
                    $terms = get_terms(
                        array(
                            'taxonomy' => 'services-category',
                        )
                    );

                    $first = "1";
                    ?>

                    <?php foreach ($terms as $term) {
                        $cat_class = "collapsed";
                        $post_class = "";
                        $post_div_class = "";


                    ?>
                        <div class="panel-group" id="accordion">
                            <div class="panel">
                                <div>
                                    <?php
                                    if ($first == "1") {
                                        $cat_class = "";
                                        $post_div_class = "in";
                                        $post_class = "current";
                                        $first = "0";
                                    }
                                    // echo "<h1>";
                                    // echo $class;
                                    // echo $first;
                                    // echo "</h1>"

                                    ?>
                                    <a class="<?= $cat_class; ?>" data-toggle="collapse" data-parent="#accordion" href="#collapse<?= $term->term_id; ?>">
                                        <?= $term->name; ?>
                                    </a>
                                </div>

                                <div id="collapse<?= $term->term_id; ?>" class="panel-collapse collapse <?= $post_div_class; ?>">
                                    <ul class="nav nav-tabs">
                                        <?php
                                        $acc_args = array(
                                            'post_type' => 'services',
                                            'tax_query' => array(
                                                array(
                                                    'taxonomy' => 'services-category',
                                                    'field' => 'term_id',
                                                    'terms' => $term->term_id
                                                )
                                            )
                                        );

                                        $acc_posts = new WP_Query($acc_args);
                                        if ($acc_posts->have_posts()) {
                                            while ($acc_posts->have_posts()) {
                                                $acc_posts->the_post();
                                        ?>
                                                <li>
                                                    <a class="" data-toggle="tab" href="#service<?= get_the_ID(); ?>" data-target="#service<?= get_the_ID(); ?>">
                                                        <?= get_the_title(); ?>
                                                    </a>
                                                </li>
                                        <?php
                                            }
                                        }
                                        ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    <?php
                    } ?>
                </div>

                <!-- //== DETAIL PAGE CODE STARTS ==// -->

                <div class="col-sm-8 col-md-9 service-content">
                    <div class="tab-content">

                        <?php
                        $detail_args = array(
                            'post_type' => 'services',
                        );

                        $detail_posts = new WP_Query($detail_args);

                        if ($detail_posts->have_posts()) {
                            while ($detail_posts->have_posts()) {
                                $detail_posts->the_post();
                        ?>
                                <div id="service<?= get_the_ID(); ?>" class="tab-pane fade">
                                    <figure>
                                        <img src="<?= get_the_post_thumbnail_url(); ?>" class="img-responsive" alt="EASI Service" />
                                    </figure>

                                    <h3>
                                        <?= get_the_title(); ?>
                                    </h3>

                                    <!-- CONTENT STARTS -->
                                    <?= get_the_content(); ?>
                                    <!-- CONTENT ENDS -->
                                </div>
                        <?php }
                        } ?>
                    </div>
                </div>
                <!-- //== DETAIL PAGE CODE ENDS ==// -->

            </div>
        </div>
    </section>

    <!--========= ASSESMENT SECTION STARTS =========-->
    <?php
    do_action('insert_assessment_section');
    ?>
    <!--========= ASSESMENT SECTION ENDS =========-->
</main>

<!--========= FOOTER SECTION STARTS =========-->
<?php get_footer(); ?>
<!--========= FOOTER SECTION ENDS =========-->