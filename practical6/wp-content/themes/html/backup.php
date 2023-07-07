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