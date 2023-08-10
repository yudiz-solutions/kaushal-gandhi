<?php
$footer_acf = get_field('footer_acf', 'option');
?>
<footer>
    <div class="footer-inner">
        <div class="container">
            <a href="<?php echo site_url(); ?>" class="footer-logo">
                <?php if (is_active_sidebar('footer_logo')) : ?>
                    <?php dynamic_sidebar('footer_logo'); ?>
                <?php endif ?>
            </a>
            <?php if (is_active_sidebar('footer_menu')) : ?>
                <?php dynamic_sidebar('footer_menu'); ?>
            <?php endif ?>

            <?php if (isset($footer_acf['button']) && !empty($footer_acf['button'])) { ?>
                <a href="<?php echo $footer_acf['button']['url']; ?>" class="theme-btn white-btn"><?php echo $footer_acf['button']['title']; ?></a>
            <?php  }
            ?>
            <div class="clearfix"></div>
        </div>
    </div>
    <div class="container">
        <div class="copyright">
            <div class="row">
                <div class="col-sm-7">
                    <?php if (isset($footer_acf['paragraph']) && !empty($footer_acf['paragraph'])) { ?>

                        <p><?php echo $footer_acf['paragraph']; ?></p>
                    <?php } ?>
                </div>
                <div class="col-sm-5 footer-links">
                    <ul>
                        <?php if (isset($footer_acf['link_1']) && !empty($footer_acf['link_1'])) { ?>
                            <li><a href="<?php echo $footer_acf['link_1']['url']; ?>"><?php echo $footer_acf['link_1']['title']; ?></a></li>
                        <?php } ?>
                        <?php if (isset($footer_acf['link_2']) && !empty($footer_acf['link_2'])) { ?>
                            <li><a href="<?php echo $footer_acf['link_2']['url']; ?>"><?php echo $footer_acf['link_2']['title']; ?></a></li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--******************* Footer Section End ******************-->
<?php wp_footer(); ?>
</body>

</html>