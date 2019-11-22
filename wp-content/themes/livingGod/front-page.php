<?php get_header(); ?>

<!-- Hero Section -->
<aside id="colorlib-hero">
    <div class="flexslider">
        <ul class="slides">
            <?php
            $custom = new WP_Query(array(
                'post_type' => 'slider',
                'post_status' => 'publish',
                'posts_per_page' => '-1',
            ));
            while ($custom->have_posts()) {
                $custom->the_post();
                ?>
                <li style="background-image: url(<?php the_field('slider-back'); ?>);">
                    <div class="overlay"></div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-8 col-sm-12 col-md-offset-2 slider-text">
                                <div class="slider-text-inner text-center">
                                    <h2><?php the_field('slider-small'); ?></h2>
                                    <h1><?php the_field('slider-main'); ?></h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            <?php } wp_reset_postdata(); ?>
        </ul>
    </div>
</aside>
<!-- Hero Section -->

<!-- Intro Section -->    
<div id="colorlib-project">
    <div class="container">
        <div style="align-items: center;" class="row">
            <div style="margin-bottom: 0;" class="col-md-4 animate-box colorlib-heading animate-box">
                <?php
                while (have_posts()) {
                    the_post();
                    ?>
                    <span class="sm"><?php the_field('intro-small'); ?></span>
                    <h2><?php the_field('intro-main'); ?></h2>
                    <?php the_field('intro-text'); ?>
                <?php } ?>
                <p><a href="<?php echo site_url('a-propos'); ?>">En Savoir Plus <i class="icon-arrow-right3"></i></a></p>
            </div>
            <div class="col-md-7 col-md-push-1">
                <div class="row">
                    <div class="col-md-12 animate-box">
                        <div class="owl-carousel owl-carousel2 project-wrap">
                            <?php
                            $custom = new WP_Query(array(
                                'post_type' => 'gallery',
                                'post_status' => 'publish',
                                'posts_per_page' => '-1',
                            ));
                            $i = 1;
                            while ($custom->have_posts()) {
                                $custom->the_post();
                                ?>
                                <div class="item">
                                    <a href="<?php the_field('gallery-img'); ?>" class="project image-popup-link" style="background-image: url(<?php the_field('gallery-img'); ?>);">
                                        <div class="desc-t">
                                            <div class="desc-tc">
                                                <div class="desc">
                                                    <h3><span><small><?php echo $i; ?></small></span> <?php the_field('galerie-title'); ?></h3>
                                                    <p><?php the_field('gallery-small'); ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <?php
                                $i++;
                            } wp_reset_postdata();
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Intro Section -->    

<!-- Counter section -->            
<div id="colorlib-counter" class="colorlib-counters" style="background-image: url(<?php echo get_theme_file_uri('images/cover_img_1.jpg'); ?>);" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
        </div>
        <div class="row">
            <?php
            while (have_posts()) {
                the_post();
                ?>
                <div class="col-md-3 text-center animate-box">
                    <span class="icon"><i class="flaticon-skyline"></i></span>
                    <span class="colorlib-counter js-counter" data-from="0" data-to="<?php the_field('value-1'); ?>" data-speed="5000" data-refresh-interval="50"></span>
                    <span class="colorlib-counter-label"><?php the_field('counter-1'); ?></span>
                </div>
                <div class="col-md-3 text-center animate-box">
                    <span class="icon"><i class="flaticon-engineer"></i></span>
                    <span class="colorlib-counter js-counter" data-from="0" data-to="<?php the_field('value-2'); ?>" data-speed="5000" data-refresh-interval="50"></span>
                    <span class="colorlib-counter-label"><?php the_field('counter-2'); ?></span>
                </div>
                <div class="col-md-3 text-center animate-box">
                    <span class="icon"><i class="flaticon-architect-with-helmet"></i></span>
                    <span class="colorlib-counter js-counter" data-from="0" data-to="<?php the_field('value-3'); ?>" data-speed="5000" data-refresh-interval="50"></span>
                    <span class="colorlib-counter-label"><?php the_field('counter-3'); ?></span>
                </div>
                <div class="col-md-3 text-center animate-box">
                    <span class="icon"><i class="flaticon-worker"></i></span>
                    <span class="colorlib-counter js-counter" data-from="0" data-to="<?php the_field('value-4'); ?>" data-speed="5000" data-refresh-interval="50"></span>
                    <span class="colorlib-counter-label"><?php the_field('counter-4'); ?></span>
                </div>
            <?php } ?>
        </div>
    </div>
</div>
<!-- Counter section --> 


<div id="colorlib-services" class="colorlib-light-grey">
    <div class="container">
        <div class="row">
            <div class="col-md-4 animate-box colorlib-heading animate-box">
                <span class="sm">CE QUE NOUS FAISONS?</span>
                <h2><span class="thin">Nos different</span> <span class="thick">Services</span></h2>
                <p>Urbatech conseils met a votre disposition une large palettes de services 
                    allant de l'études jusqu'au suivie et la réalisation de votre projet de construction. 
                </p>
            </div>
            <div class="col-md-8">
                <div class="row">
                    <div class="wrap">
                        <?php
                        $custom = new WP_Query(array(
                            'post_type' => 'service',
                            'post_status' => 'publish',
                            'posts_per_page' => '-1',
                        ));
                        while ($custom->have_posts()) {
                            $custom->the_post();
                            ?>
                            <div class="col-md-6 animate-box">

                                <div class="services">
                                    <span class="icon">
                                        <i class="<?php the_field('service-icon'); ?>"></i>
                                    </span>
                                    <div class="desc">
                                        <h3><?php the_field('service-title'); ?></h3>
                                        <p><?php the_field('service-description'); ?></p>
                                    </div>
                                </div>
                            </div>
                        <?php } wp_reset_postdata(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Why choose us ? -->
<div style="padding-bottom: 0; margin-bottom: 5em;" class="site-section colorlib-light-grey">
    <div class="block-2">
        <div class="container">
            <div class="row">
                <?php
                while (have_posts()) {
                    the_post();
                    ?>
                    <div class="col-lg-6 mb-4 mb-lg-0">
                        <img src="<?php the_field('choose-img'); ?>" alt="Urbatech Cabinet d'architecture a Yaounde au Cameroun" class="img-fluid img-overlap">
                    </div>
                    <div style="" class="col-lg-5 ml-auto retry">
                        <h3 class="section-subtitle"><?php the_field('choose-small'); ?></h3>
                        <h2 class="section-title mb-4"><?php the_field('choose-main'); ?></h2>
                        <p> <?php the_field('choose-text'); ?></p>

                        <div class="row my-5">
                            <div class="col-lg-12 d-flex align-items-center mb-4">
                                <span class="why line-height-0 flaticon-oil-platform display-4 mr-4 text-primary"></span>
                                <div>
                                    <h4 class="m-0 h5 text-white"><?php the_field('reason-1'); ?></h4>
                                    <p class="text-white"><?php the_field('description-1'); ?></p>
                                </div>
                            </div>
                            <div class="col-lg-12 d-flex align-items-center mb-4">
                                <span class="why line-height-0 flaticon-blueprint display-4 mr-4 text-primary"></span>
                                <div>
                                    <h4 class="m-0 h5 text-white"><?php the_field('reason-2'); ?></h4>
                                    <p class="text-white"><?php the_field('description-2'); ?></p>
                                </div>
                            </div>
                            <div class="col-lg-12 d-flex align-items-center">
                                <span class="why line-height-0 flaticon-planning display-4 mr-4 text-primary"></span>
                                <div>
                                    <h4 class="m-0 h5 text-white"><?php the_field('reason-3'); ?></h4>
                                    <p class="text-white"><?php the_field('description-3'); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
<!-- Why choose us ? -->

<!-- Quote section ? -->
<div class="quote-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 align-self-end">
                <img src="<?php echo get_theme_file_uri('images/img_transparent.png'); ?>" alt="Image" class="img-fluid">
            </div>
            <div class="col-lg-7 align-self-center mb-5">

                <div class="bg-black  quote-form-wrap wrap text-white">
                    <div class="mb-5">
                        <h3 class="section-subtitle">Devis</h3>
                        <h2 class="section-title mb-4">Demander Un <strong>Devis</strong></h2>
                    </div>
                    <?php
                    while (have_posts()) {
                        the_post();
                        the_field('quote-form');
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Quote section ? -->


<!-- Project section -->
<div class="site-section block-3">
    <div class="container">

        <div class="mb-5">
            <h3 class="section-subtitle">Nos Projets</h3>
            <h2 class="section-title mb-4">Explorer Nos <strong>Projets Récents</strong></h2>
        </div>

        <div class="projects-carousel-wrap">
            <div class="owl-carousel owl-slide-3">
                <?php
                $custom = new WP_Query(array(
                    'post_type' => 'project',
                    'post_status' => 'publish',
                    'posts_per_page' => '7',
                ));
                while ($custom->have_posts()) {
                    $custom->the_post();
                    $images = acf_photo_gallery('project-gallery', get_the_ID());
                    $img_count = count($images);
                    $counter = 0;
                    ?>
                    <div class="project-item zoom-gallery">
                        <div class="project-item-contents">
                            <a href="#">
                                <span class="project-item-category">Urbatech Conseils</span>
                                <h2 class="project-item-title">
                                    <?php the_title(); ?>
                                </h2>
                            </a>
                        </div>
                        <?php
                        while (true) {
                            if ($counter < $img_count) {
                                if ($counter == 0) {
                                    ?>
                                    <a href="<?php echo $images[$counter]['full_image_url'] ?>" title="<?php the_title(); ?>" class="gallery">
                                        <img src="<?php the_field('project-homecover'); ?>" alt="Projet Urbatech cabinet d'architecture au Cameroun">
                                    </a>
                                    <?php $counter++; ?>
                                <?php } else { ?>
                                    <a class="gallery" style="display: none;" href="<?php echo $images[$counter]['full_image_url'] ?>" title="<?php the_title(); ?>">
                                        <img src="<?php the_field('project-homecover'); ?>" alt="Projet Urbatech cabinet d'architecture au Cameroun">
                                    </a>
                                    <?php $counter++; ?>
                                    <?php
                                }
                            } else {
                                break;
                            }
                        }
                        ?>
                    </div>
                    <?php
                } wp_reset_postdata();
                ?>
            </div>
        </div>

    </div>
</div>
<!-- Project section -->

<!-- Blog section -->
<div style="padding-top: 10em;" id="colorlib-blog">
    <div class="container">
        <div class="row">
            <div class="col-md-4 animate-box colorlib-heading animate-box">
                <span class="sm">Actualités Récentes</span>
                <h2><span class="thin">Lisez</span> <span class="thick">Notre Actualité</span></h2>
                <p>A travers notre page dedié, rester a jour tant sur notre actualité que sur nos projets les plus innovants </p>
                <p><a href="<?php echo site_url('actualites'); ?>">Toutes les actualités <i class="icon-arrow-right3"></i></a></p>
            </div>
            <div class="col-md-8">
                <div class="row">
                    <div class="wrap">
                        <?php
                        $custom = new WP_Query(array(
                            'post_type' => 'post',
                            'post_status' => 'publish',
                            'posts_per_page' => '3',
                        ));
                        while ($custom->have_posts()) {
                            $custom->the_post();
                            ?>
                            <div class="blog-entry animate-box">
                                <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'single-post-thumbnail'); ?>
                                <a href="<?php the_permalink(); ?>" class="blog-img" style="background-image: url(<?php echo $image[0]; ?>);"></a>
                                <div class="desc">
                                    <span>&mdash; <?php the_time('d M, Y'); ?> </span>
                                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                </div>
                            </div>
                        <?php } wp_reset_postdata(); ?>
                    </div>
                </div>
            </div>
        </div>	
    </div>
</div>
<!-- Blog section -->


<!-- Team section -->
<div id="colorlib-about">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-push-8 animate-box colorlib-heading animate-box">
                <span class="sm">Expertise</span>
                <h2><span class="thin">Nos</span> <span class="thick">Experts</span></h2>
                <p>
                    Urbatech conseils rassemble une équipe de professionnels primés aux 
                    compétences complémentaires, dévouée à obtenir les meilleurs résultats 
                    pour la réalisation des projets de ses clients
                </p>
                <p>
                    <a href='<?php echo site_url('a-propos'); ?>'>Voire toute l'équipe <i class="icon-arrow-right3"></i></a>
                </p>
            </div>
            <div class="col-md-8 col-md-pull-4">
                <div class="row">
                    <div class="wrap-2">
                        <?php
                        $custom = new WP_Query(array(
                            'post_type' => 'team',
                            'post_status' => 'publish',
                            'orderby' => 'publish_date',
                            'order' => 'DESC',
                            'posts_per_page' => '-1',
                        ));
                        while ($custom->have_posts()) {
                            $custom->the_post();
                            if (get_field('team-level') == 'one') {
                                ?>
                                <div class="col-md-6 text-center animate-box">
                                    <div class="staff" class="staff-img" style="background-image: url(<?php the_field('team-img'); ?>);">
                                        <a href="#" class="desc">
                                            <h3><?php the_title(); ?></h3>
                                            <span><?php the_field('team-post'); ?></span>
                                            <div class="parag">
                                                <p><?php the_field('team-description'); ?></p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <?php
                            }
                        }wp_reset_postdata();
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Team section -->


<!-- Testimonial Section -->
<div style="padding-bottom: 40px;" id="colorlib-testimony" class="colorlib-light-grey">
    <div class="container">
        <div class="row">
            <div class="col-md-4 animate-box colorlib-heading animate-box">
                <span class="sm">Temoignage</span>
                <h2><span class="thin">Ce que disent</span> <span class="thick">Nos Clients</span></h2>
            </div>
            <div class="col-md-7 col-md-push-1">
                <div class="row animate-box">
                    <span class="icon"><i class="icon-quotes-left"></i></span>
                    <div class="owl-carousel1">
                        <?php
                        $custom = new WP_Query(array(
                            'post_type' => 'testimonial',
                            'post_status' => 'publish',
                            'posts_per_page' => '-1',
                        ));
                        while ($custom->have_posts()) {
                            $custom->the_post();
                            ?>
                            <div class="item">
                                <div class="testimony-slide active">
                                    <div class="testimony-wrap">
                                        <figure>
                                            <img src="<?php the_field('testi-img'); ?>" alt="Témoignage urbatech conseils la meilleures agence d'architecture au cameroun Yaounde et Douala">
                                        </figure>
                                        <blockquote>
                                            <span><?php the_title(); ?></span>
                                            <p><?php the_content(); ?></p>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>
                        <?php } wp_reset_postdata(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial Section -->

<?php get_footer(); ?>

