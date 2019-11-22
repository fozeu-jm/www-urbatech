<?php

function theme_resources() {

    wp_enqueue_style('main-css', get_stylesheet_uri());

    wp_enqueue_style('animate', get_theme_file_uri('css/animate.css'));

    wp_enqueue_style('icomoon', get_theme_file_uri('css/icomoon.css'));

    wp_enqueue_style('bootstrap', get_theme_file_uri('css/bootstrap.css'));

    wp_enqueue_style('popup', get_theme_file_uri('css/magnific-popup.css'));

    wp_enqueue_style('flex', get_theme_file_uri('css/flexslider.css'));

    wp_enqueue_style('owl', get_theme_file_uri('css/owl.carousel.min.css'));

    wp_enqueue_style('owltheme', get_theme_file_uri('css/owl.theme.default.min.css'));

    wp_enqueue_style('flaticon', get_theme_file_uri('fonts/flaticon/font/flaticon.css'));

    wp_enqueue_style('core', get_theme_file_uri('css/core.css'));

    wp_enqueue_style('main-css', get_stylesheet_uri());

    wp_enqueue_script('modernizr', get_theme_file_uri('js/modernizr-2.6.2.min.js'), array('jquery'), '1.0', false);

    wp_deregister_script('jquery');
    wp_enqueue_script('jquery1', get_theme_file_uri('js/jquery.min.js'), NULL, '.2.2.4', true);
    wp_enqueue_script('popper', get_theme_file_uri('js/jquery.easing.1.3.js'), array('jquery1'), '1.0', true);
    wp_enqueue_script('strap-js', get_theme_file_uri('js/bootstrap.min.js'), array('jquery1'), '1.0', true);
    wp_enqueue_script('plugins', get_theme_file_uri('js/jquery.waypoints.min.js'), array('jquery1'), '1.0', true);
    wp_enqueue_script('stellar', get_theme_file_uri('js/jquery.stellar.min.js'), array('jquery1'), '1.0', true);
    wp_enqueue_script('slider', get_theme_file_uri('js/jquery.flexslider-min.js'), array('jquery1'), '1.0', true);
    wp_enqueue_script('caroussel', get_theme_file_uri('js/owl.carousel.min.js'), array('jquery1'), '1.0', true);
    wp_enqueue_script('popup', get_theme_file_uri('js/jquery.magnific-popup.min.js'), array('jquery1'), '1.0', true);
    wp_enqueue_script('options', get_theme_file_uri('js/magnific-popup-options.js'), array('jquery1'), '1.0', true);
    wp_enqueue_script('countTo', get_theme_file_uri('js/jquery.countTo.js'), array('jquery1'), '1.0', true);
    wp_enqueue_script('main', get_theme_file_uri('js/main.js'), array('jquery1'), '1.0', true);
}

add_action('wp_enqueue_scripts', 'theme_resources');

add_filter('show_admin_bar', '__return_false');

function theme_features() {
    add_theme_support('title-tag');
    add_theme_support('html5', array('comment-list', 'comment-form', 'search-form', 'gallery', 'caption'));
}

add_theme_support( 'post-thumbnails' );

add_action('after_setup_theme', 'theme_features');