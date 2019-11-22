<?php get_header(); ?>


<?php
$custom = new WP_Query(array(
    'post_type' => 'page',
    'p' => 17,
    'post_status' => 'publish',
    'posts_per_page' => '-1',
        ));
while ($custom->have_posts()) {
    $custom->the_post();
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
<?php } wp_reset_postdata(); ?>



<div id="colorlib-blog">
    <div class="container">
        <div class="row">
            <?php
            while (have_posts()) {
                the_post();
                ?>
                <article class="animate-box">
                    <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'single-post-thumbnail'); ?>
                    <div class="blog-img" style="background-image: url(<?php echo $image[0]; ?>);"></div>
                    <div class="entry">
                        <div class="meta text-center">
                            <p>
                                <span><?php the_time('F'); ?></span>
                                <span><?php the_time('d, Y'); ?></span>
                            </p>
                        </div>
                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <p class="meta-2"><span><i class="icon-user"></i> <?php the_author(); ?></span> <span><i class="icon-dropbox"></i> Articles</span></p>
                        <p><?php the_excerpt(); ?></p>
                    </div>
                </article>
            <?php } ?>
        </div>	
    </div>
</div>

<?php get_footer(); ?>