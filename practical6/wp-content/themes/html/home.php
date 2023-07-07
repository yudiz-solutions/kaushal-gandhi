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
// echo '<pre>';
// print_r($home_news_section['group1']['image']['url']);
// echo '</pre>';
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
    <?php if (!empty($services_section)) { ?>
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
    <?php }  ?>
    <?php if (!empty($assessment_section)) { ?>
        <section class="assessment-section">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <h2><?php echo $assessment_section['heading']; ?></h2>
                    </div>
                    <div class="col-sm-6 text-right">
                        <a href="<?php echo $assessment_section['button']['url']; ?>" class="theme-btn white-btn"><?php echo $assessment_section['button']['title']; ?></a>
                    </div>
                </div>
            </div>
        </section>
    <?php } ?>

    <?php if (!empty($home_news_section)) { ?>
        <section class="common-section home-news-section">
            <div class="container">
                <div class="home-news-list">
                    <div class="col-sm-3">
                        <div class="news-box news-list-title">
                            <div class="news-desc">
                                <h2><?php echo $home_news_section['heading']; ?></h2>
                            </div>
                        </div>
                    </div>

                    <?php if (!empty($home_news_section['group1'])) { ?>
                        <div class="col-sm-6">
                            <div class="news-box" style="background: url('<?php echo $home_news_section['group1']['image']['url']; ?>') no-repeat center center / cover;">
                                <div class="news-desc">
                                    <?php echo $home_news_section['group1']['paragraph']; ?>
                                    <h5><a href="<?php echo $home_news_section['group1']['link']['url']; ?>"><?php echo $home_news_section['group1']['link']['title']; ?></a></h5>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                    <?php if (!empty($home_news_section['group2'])) { ?>
                        <div class="col-sm-3">
                            <div class="news-box" style="background: url('<?php echo $home_news_section['group2']['image']['url']; ?>') no-repeat center center / cover;">
                                <div class="news-desc">
                                    <?php echo $home_news_section['group2']['paragraph']; ?>

                                    <h5><a href="<?php echo $home_news_section['group2']['link']['title']; ?>"><?php echo $home_news_section['group1']['link']['title']; ?></a></h5>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                    <?php if (!empty($home_news_section['group3'])) { ?>
                        <div class="col-sm-5">
                            <div class="news-box" style="background: url('<?php echo $home_news_section['group3']['image']['url']; ?>') no-repeat center center / cover;">
                                <div class="news-desc">
                                    <?php echo $home_news_section['group3']['paragraph']; ?>

                                    <h5><a href="<?php echo $home_news_section['group3']['link']['title']; ?>"><?php echo $home_news_section['group1']['link']['title']; ?></a></h5>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                    <?php if (!empty($home_news_section['group4'])) { ?>
                        <div class="col-sm-7">
                            <div class="news-box" style="background: url('<?php echo $home_news_section['group4']['image']['url']; ?>') no-repeat center center / cover;">
                                <div class="news-desc">
                                    <?php echo $home_news_section['group4']['paragraph']; ?>

                                    <h5><a href="<?php echo $home_news_section['group4']['link']['title']; ?>"><?php echo $home_news_section['group1']['link']['title']; ?></a></h5>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
                <div class="text-center">
                    <a href="<?php echo $home_news_section['button']['url']; ?>" class="theme-btn"><?php echo $home_news_section['button']['title']; ?></a>
                </div>
            </div>
        </section>
    <?php } ?>
    <?php if (!empty($team_section)) { ?>
        <section class="common-section home-team-section">
            <div class="container">
                <div class="text-center">
                    <h2><?php echo $team_section['heading']; ?></h2>
                </div>
                <div class="row">
                    <?php foreach ($team_section['repeater_for_team_box'] as $key) { ?>
                        <div class="col-sm-4">
                            <div class="team-box" style="background: #015e7d url('<?php echo $key['image']['url'];  ?>') no-repeat center center / cover;">
                                <div class="team-desc">
                                    <h3><?php echo $key['heading'];  ?></h3>
                                    <p><?php echo $key['paragraph'];  ?></p>
                                </div>
                            </div>
                        </div>]
                    <?php } ?>
                </div>
                <div class="text-center">
                    <a href="<?php echo $team_section['button']['url']; ?>" class="theme-btn white-btn"><?php echo $team_section['button']['title']; ?></a>
                </div>
            </div>
        </section>
    <?php } ?>
</main>
<!--******************* Middle Section End ******************-->
<!--******************* Footer Section Start ******************-->

<?php
get_footer();
?>