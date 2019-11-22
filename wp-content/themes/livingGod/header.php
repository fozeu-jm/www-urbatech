<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <?php wp_head(); ?>
        <meta name = "author" content = "KAIZER WEB DESIGN" />


        <link href = "https://fonts.googleapis.com/css?family=Montserrat:200,300,400,700" rel = "stylesheet">
    </head>
    <body>

        <div class="colorlib-loader"></div>

        <div id="page">
            <!-- header section -->
            <nav class="colorlib-nav" role="navigation">
                <div class="top-menu">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-6 col-md-2">
                                <div id="colorlib-logo">
                                    <a href="<?php echo site_url(''); ?>">
                                        <img src="<?php echo get_theme_file_uri('images/urbatech-logo.png'); ?>" alt="Logo-urbatech-agence d'architecture au Cameroun">
                                    </a
                                    ></div>
                            </div>
                            <div class="col-xs-6 col-md-10 text-right menu-1">
                                <a style="" href="#" class="js-colorlib-nav-toggle2 colorlib-nav-toggle2 colorlib-nav-white" id="beauty-toggle"><i></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- header section -->

            <!-- site menu -->
            <nav id="colorlib-main-nav" class="" role="navigation">
                <a href="#" class="js-colorlib-nav-toggle3 colorlib-nav-toggle3 active"><i></i></a>
                <div class="js-fullheight colorlib-table">
                    <?php
                    $custom = new WP_Query(array(
                        'post_type' => 'page',
                        'p' => 15,
                        'post_status' => 'publish',
                        'posts_per_page' => '-1',
                    ));
                    while ($custom->have_posts()) {
                        $custom->the_post();
                        ?>
                        <div class="img" style="background-image: url(<?php the_field('menu-img'); ?>);"></div>
                    <?php }wp_reset_postdata(); ?>
                    <div class="colorlib-table-cell js-fullheight">
                        <div class="row no-gutters">
                            <div class="shifter col-md-12 text-center">
                                <h1 style="margin-bottom: 3rem;"><a href="<?php echo site_url(''); ?>" class="logo">URBATECH</a></h1>
                                <ul>
                                    <li class="<?php
                                    if (is_front_page()) {
                                        echo 'active';
                                    }
                                    ?>"><a href="<?php echo site_url(''); ?>"><span><small>01</small>Accueil</span></a></li>
                                    <li class="<?php
                                    if (is_page('a-propos')) {
                                        echo 'active';
                                    }
                                    ?>"><a href="<?php echo site_url('a-propos'); ?>"><span><small>02</small>A propos</span></a></li>
                                    <li class="<?php
                                    if (is_page('service')) {
                                        echo 'active';
                                    }
                                    ?>"><a href="<?php echo site_url('service'); ?>"><span><small>03</small>Services</span></a></li>
                                    <li class="<?php
                                    if (is_page('projets')) {
                                        echo 'active';
                                    }
                                    ?>"><a href="<?php echo site_url('projets'); ?>"><span><small>05</small>Projets</span></a></li>
                                    <li class="<?php
                                    if (get_post_type() == 'post') {
                                        echo 'active';
                                    }
                                    ?>"><a href="<?php echo site_url('actualites'); ?>"><span><small>06</small>Actualités</span></a></li>
                                    <li class="<?php
                                    if (is_page('contact')) {
                                        echo 'active';
                                    }
                                    ?>"><a href="<?php echo site_url('contact'); ?>"><span><small>07</small>Contact</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- site menu -->