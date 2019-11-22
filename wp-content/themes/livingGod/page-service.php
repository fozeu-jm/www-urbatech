<?php get_header(); ?>

<?php
while (have_posts()) {
    the_post();
    ?>
    <aside id="colorlib-hero">
        <div class="flexslider">
            <ul class="slides">
                <li style="background-image: url(<?php the_field('about-titre2'); ?>);">
                    <div class="overlay"></div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-8 col-sm-12 col-md-offset-2 slider-text">
                                <div class="slider-text-inner text-center">
                                    <h1><?php the_title(); ?></h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </aside>
<?php } ?>


<div id="colorlib-services">
    <div class="container">
        <div class="row">
            <?php
            $custom = new WP_Query(array(
                'post_type' => 'service',
                'post_status' => 'publish',
                'posts_per_page' => '-1',
            ));
            while ($custom->have_posts()) {
                $custom->the_post();
                ?>
                <div class="col-md-4 animate-box">
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
            <?php } ?>
        </div>
    </div>
</div>


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