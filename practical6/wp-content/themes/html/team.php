<?php
/*
Template Name: team
*/
?>
<?php get_header();
$team_image = get_field('team_image');
$team_heading = get_field('team_heading');
$reapeater_for_member_section = get_field('reapeater_for_member_section');
$heading_for_assessment = get_field('heading_for_assessment');
$button = get_field('button');
?>
<!--******************* Banner Section Start *********************-->
<div class="home-banner">
    <div class="banner" style="background: #5C5C5C url('<?php if (isset($team_heading) && !empty($team_heading)) { ?><?php echo $team_image['url']; ?><?php } ?>') no-repeat center center / cover;">
        <div class="container">
            <?php if (isset($team_heading) && !empty($team_heading)) { ?>
                <h1><?php echo $team_heading; ?></h1>
            <?php } ?>
        </div>
    </div>
</div>
<!--******************* Banner Section End *********************-->
<!--******************* Header Section End *********************-->
<!--******************* Middle Section Start ******************-->
<main>
    <?php foreach ($reapeater_for_member_section as $key) { ?>
        <section class="common-section member-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <div class="row">
                            <div class="col-sm-5">
                                <div class="team-box" style="background: #015e7d url('<?php if (isset($key['image']) && !empty($key['image'])) { ?><?php echo $key['image']['url']; ?><?php } ?>') no-repeat center center / cover;"></div>
                            </div>
                            <div class="col-sm-7">
                                <div class="member-title">
                                    <?php if (isset($key['heading']) && !empty($key['heading'])) { ?>
                                        <h3><?php echo $key['heading']; ?></h3>

                                    <?php } ?>
                                    <?php if (isset($key['paragraph']) && !empty($key['paragraph'])) { ?>
                                        <p><?php echo $key['paragraph']; ?></p>
                                    <?php } ?>
                                </div>
                                <?php if (isset($key['paragraph2']) && !empty($key['paragraph2'])) { ?>
                                    <p><?php echo $key['paragraph2']; ?></p>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php } ?>

    <!-- <section class="common-section member-section">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="row">
                        <div class="col-sm-5">
                            <div class="team-box" style="background: #015e7d url('images/avtar_danny.jpg') no-repeat center center / cover;"></div>
                        </div>
                        <div class="col-sm-7">
                            <div class="member-title">
                                <h3>Daniel Wettreich</h3>
                                <p>Chairman of the Board and Secretary</p>
                            </div>
                            <p>Danny Wettreich has more than 40 years of experience in venture capital, private equity, and management of publicly traded companies. He is a director and CEO of GreenBank Capital Inc. (CSE:GBC | OTCMKTS:GRNBF | FRA:2TL), a merchant bank focused on small cap investments. He is also currently Chairman of Zara Resources Inc, (CSE:ZRI), XGC Software Inc, Blockchain Evolution Inc, KYC Technology Inc, Slabdeck Technology Inc, and Reliable Stock Transfer Inc. . He is a graduate of the University of Westminster with a BA in Business.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="common-section member-section">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="row">
                        <div class="col-sm-5">
                            <div class="team-box" style="background: #015e7d url('images/avtar_placeholder.jpg') no-repeat center center / cover;"></div>
                        </div>
                        <div class="col-sm-7">
                            <div class="member-title">
                                <h3>Sumedha Mahajan</h3>
                                <p>Vice President</p>
                            </div>
                            <p>Sumedha Mahajan has more than 10 years of experience across business operations, client servicing, marketing communication and public relations. Expertise in managing global clients (across North America, Europe, and Asia), vendor and media relationships, and process implementation.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section class="common-section member-section">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="row">
                        <div class="col-sm-5">
                            <div class="team-box" style="background: #015e7d url('images/avtar_gaurav.jpg') no-repeat center center / cover;"></div>
                        </div>
                        <div class="col-sm-7">
                            <div class="member-title">
                                <h3>Gaurav Singh</h3>
                                <p>Director & Chief Financial Officer</p>
                            </div>
                            <p>Gaurav is a director and CFO of GreenBank Capital Inc. Previously he was Policy Advisor and Director, Research at National Association of Software and Services Companies (NASSCOM) in New Delhi, India. NASSCOM is a global software services trade organization with over 2000 members. He was General Manager BC-GSVLabs, a venture capital incubator based in India, and was Senior Principal, Corporate Development for CA Technologies, , one of the largest software companies in the world. He was Senior Manager with the Corporate Finance practice at Deloitte, , one of the “Big Four” accounting firms. He has an MSc. in Finance from London Business School at the University of London, and a Bachelor of Commerce from University of Delhi.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <section class="assessment-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h2><?php echo $heading_for_assessment; ?></h2>
                </div>
                <div class="col-sm-6 text-right">
                    <a href="<?php echo $button['url']; ?>" class="theme-btn white-btn"><?php echo $button['title']; ?></a>
                </div>
            </div>
        </div>
    </section>
</main>
<!--******************* Middle Section End ******************-->
<!--******************* Footer Section Start ******************-->
<?php get_footer(); ?>