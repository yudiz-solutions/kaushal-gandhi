<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>hightech</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">


    <!-- awesome fontfamily -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
    <?php wp_head() ?>
</head>
<!-- body -->

<body class="main-layout">

    <!-- end loader -->
    <!-- header -->
    <header>
        <div class="header">
            <div class="container-fluid">
                <div class="row d_flex">
                    <div class=" col-md-2 col-sm-3 col logo_section">
                        <div class="full">
                            <div class="center-desk">
                                <div class="logo">
                                    <a href="<?php echo get_template_directory_uri(); ?>/index.html"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="#" /></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-9">
                        <nav class="navigation navbar navbar-expand-md navbar-dark ">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarsExample04">
                                <?php wp_nav_menu(array(
                                    'theam_location' => 'primary-menu', 'menu_class' => 'nav'
                                )) ?>
                            </div>
                        </nav>
                    </div>
                    <div class="col-md-2 d_none">

                    </div>
                </div>
            </div>
        </div>
    </header>