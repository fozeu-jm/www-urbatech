<?php get_header(); ?>

<aside id="colorlib-hero">
    <div class="flexslider">
        <ul class="slides">
            <li style="background-image: url(<?php echo get_theme_file_uri('images/img_bg_3.jpg'); ?>);">
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


<div id="colorlib-blog">
    <div class="container">
        <div class="row">
            <article class="animate-box">
                <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'single-post-thumbnail'); ?>
                <div class="blog-img" style="background-image: url(<?php echo $image[0]; ?>);"></div>
                <div style="padding-bottom: 0;" class="entry">
                    <div class="meta text-center">
                        <p>
                            <span><?php the_time('F'); ?></span>
                            <span><?php the_time('d, Y'); ?></span>
                        </p>
                    </div>
                    <?php
                    while (have_posts()) {
                        the_post();
                        ?>
                        <h2><a href="#"><?php the_title(); ?></a></h2>
                        <p class="meta-2"><span><i class="icon-user"></i> <?php the_author(); ?></span> <span><i class="icon-dropbox"></i> Articles</span></p>
                    <?php } ?>
                </div>
            </article>
            <div class="container  ">
                <div class="">
                    <?php
                    while (have_posts()) {
                        the_post();
                        the_content();
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>


<?php get_footer(); ?>

