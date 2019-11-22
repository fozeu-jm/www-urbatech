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



<div id="colorlib-project">
    <div class="container">
        <div class="row">
            <?php
            $custom = new WP_Query(array(
                'post_type' => 'project',
                'post_status' => 'publish',
                'posts_per_page' => '-1',
            ));
            $i=1;
            while ($custom->have_posts()) {
                $custom->the_post();
                $images = acf_photo_gallery('project-gallery', get_the_ID());
                $img_count = count($images);
                $counter = 0;
                
                ?>
                <div class="col-md-6 animate-box">
                    <div class="item zoom-gallery item-2">
                        <?php
                        while (true) {
                            if ($counter < $img_count) {
                                if ($counter == 0) {
                                    ?>
                                    <a href="<?php echo $images[$counter]['full_image_url'] ?>" class="project gallery" title="<?php the_title(); ?>" style="background-image: url(<?php the_field('project-cover'); ?>);">
                                        <div class="desc-t">
                                            <div class="desc-tc">
                                                <div class="desc">
                                                    <h3><span><small><?php echo $i; ?></small></span> <?php the_title(); ?></h3>
                                                    <p><?php the_content(); ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <?php $counter++; ?>
                                <?php } else { ?>
                                    <a class="gallery" style="display: none;" href="<?php echo $images[$counter]['full_image_url'] ?>" title="<?php the_title(); ?>">
                                        <img src="<?php the_field('project-homecover'); ?>" alt="Projet du meilleure cabinet d'architecture au Cameroun Urbatech ">
                                    </a>
                                    <?php $counter++; ?>
                                    <?php
                                }
                            } else {
                                break;
                            }
                        } wp_reset_postdata();
                        ?>

                    </div>
                </div>
            <?php $i++; } wp_reset_postdata(); ?>
        </div>
    </div>
</div>


<?php get_footer(); ?>