<footer>
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a class="logo_footer" href="<?php echo get_template_directory_uri(); ?>/index.html"><img src="<?php echo get_template_directory_uri(); ?>/images/logo_footer.png" alt="#" /></a>
                </div>
                <div class="col-md-9">
                    <?php dynamic_sidebar('Sbscribe-Now');
                    ?>

                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="Informa helpful">
                        <h3>Useful Link</h3>
                        <?php dynamic_sidebar('Useful-Link');
                        ?>

                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="Informa">
                        <h3>News</h3>
                        <?php dynamic_sidebar('News'); ?>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="Informa">
                        <h3>company</h3>
                        <?php dynamic_sidebar('company'); ?>

                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="Informa conta">
                        <h3>contact Us</h3>
                        <?php dynamic_sidebar('contact-Us'); ?>

                    </div>
                </div>
            </div>
        </div>
        <div class="copyright text_align_left">
            <div class="container">
                <div class="row d_flex">
                    <div class="col-md-6">
                        <p>© 2020 All Rights Reserved. <a href="https://html.design/"> Free Html Template</a></p>
                    </div>
                    <div class="col-md-6">
                        <ul class="social_icon text_align_center">
                            <li> <a href="Javascript:void(0)"><i class="fa fa-facebook-f"></i></a></li>
                            <li> <a href="Javascript:void(0)"><i class="fa fa-twitter"></i></a></li>
                            <li> <a href="Javascript:void(0)"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
                            <li> <a href="Javascript:void(0)"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                            <li> <a href="Javascript:void(0)"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- end footer -->
<?php wp_footer() ?>
<!-- Javascript files-->

</body>

</html>