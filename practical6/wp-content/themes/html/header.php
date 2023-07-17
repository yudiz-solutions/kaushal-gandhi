<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <title>EASI</title>
    <!--Favicon Included-->
    <link rel="manifest" href="/manifest.json">
    <?php wp_head(); ?>
</head>

<body>
    <!--******************* Header Section Start *********************-->
    <header>
        <nav class="navbar navbar-default">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <?php echo the_custom_logo(); ?>
                    <a class="navbar-brand sticky-logo" href="<?php echo site_url(); ?>"> <?php if (is_active_sidebar('sticky_logo')) : ?><?php dynamic_sidebar('sticky_logo'); ?><?php endif ?></a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <?php
                    wp_nav_menu(
                        array(
                            'menu_class' => 'nav navbar-nav navbar-right',
                            'container' => 'ul',
                            'menu' => 'navbar'
                        )
                    );
                    ?>
                </div>
            </div>
        </nav>
    </header>