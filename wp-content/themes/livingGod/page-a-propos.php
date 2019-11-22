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
                                    <h2>L'Agence</h2>
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
<div id="colorlib-about">
    <div class="container">
        <?php
        while (have_posts()) {
            the_post();
            ?>
            <div class="row row-pb-lg">
                <div class="col-md-6">
                    <div class="about animate-box">
                        <h3 class="text-center"><?php the_field('about-title'); ?></h3>
                        <p><?php the_field('about-txt'); ?></p>
                    </div>
                </div>
                <div class="col-md-6">
                    <img class="img-responsive" src="<?php the_field('about-img'); ?>" alt="Free HTML5 Bootstrap Template by colorlib.com">
                </div>
            </div>
        <?php } ?>
        <div class="row">

            <div class="col-md-8 col-md-offset-2 text-center animate-box colorlib-heading animate-box">
                <span class="sm">Equipe</span>
                <h2><span class="thin spin">Notre</span> <span class="thick spin">Equipe</span></h2>
                <p class="text-center">
                    Urbatech conseils rassemble une équipe de professionnels primés aux 
                    compétences complémentaires, dévouée à obtenir les meilleurs résultats 
                    pour la réalisation des projets de ses clients.
                </p>
            </div>
        </div>

        <!-- team one -->
        <div style="margin-bottom: 50px;" class="boss-container">
            <div class="row centered">
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
                        <div class="col-md-5 center-block one text-center animate-box">
                            <div class="staff" class="staff-img" style="background-image: url( <?php the_field('team-img'); ?>);">
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
                } wp_reset_postdata();
                ?>
            </div>
        </div>
        <!-- team two -->
        <div class="row">
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
                if (get_field('team-level') == 'two') {
                    ?>
                    <div class="col-md-4 text-center animate-box">
                        <div class="staff" class="staff-img" style="background-image: url( <?php the_field('team-img'); ?>);">
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
            } wp_reset_postdata();
            ?>
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
<?php }wp_reset_postdata(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial Section -->


<?php get_footer(); ?>