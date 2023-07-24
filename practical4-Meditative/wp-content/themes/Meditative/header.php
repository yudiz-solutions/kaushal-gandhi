<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Meditative</title>
    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/favicons/apple-icon-57x57.png" />
    <link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/favicons/apple-icon-60x60.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/favicons/apple-icon-72x72.png" />
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/favicons/apple-icon-76x76.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/favicons/apple-icon-114x114.png" />
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/favicons/apple-icon-120x120.png" />
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/favicons/apple-icon-144x144.png" />
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/favicons/apple-icon-152x152.png" />
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/favicons/apple-icon-180x180.png" />
    <link rel="icon" type="image/png" sizes="192x192" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/favicons/android-icon-192x192.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/favicons/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="96x96" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/favicons/favicon-96x96.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/favicons/favicon-16x16.png" />
    <link rel="manifest" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/favicons/manifest.json" />
    <meta name="msapplication-TileColor" content="#ffffff" />
    <meta name="msapplication-TileImage" content="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/favicons//ms-icon-144x144.png" />
    <meta name="theme-color" content="#ffffff" />

    <?php wp_head() ?>
</head>

<body data-barba="wrapper">
    <button class="clickToTop" id="topBtn" onclick="topFunction()">
        <i class="fas fa-fighter-jet"></i>
    </button>

    <header>
        <div class="container-sm">
            <div class="header">
                <div class="logo">
                    <h1 class="animate__animated animate__fadeInDown">
                        <a href="">Meditative</a>
                    </h1>
                </div>
                <div class="nav-menu">
                    <i class="fas fa-bars"></i>
                </div>

                <div class="navbar animate__animated animate__fadeInUp">

                    <?php
                    wp_nav_menu(
                        array(
                            'container' => 'ul',
                            'menu' => 'navbar'
                        )
                    );
                    ?>

                </div>
            </div>
        </div>
    </header>