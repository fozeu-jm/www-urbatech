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
                                    <h2>Entrez en contact</h2>
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

<div id="colorlib-contact">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1 animate-box">
                <h2>Contact Information</h2>
                <div class="row contact-info-wrap">
                    <div class="col-md-4">
                        <p><span><i class="icon-location-2"></i></span> Immeuble beaulieu,<br> Rue de Narvick BP 16363 Yaoundé</p>
                    </div>
                    <div class="col-md-4">
                        <p><span><i class="icon-phone3"></i></span> <a href="tel://1234567920">+237 242 22 06 09</a></p>
                    </div>
                    <div class="col-md-4">
                        <p><span><i class="icon-paperplane"></i></span> <a href="mailto:info@yoursite.com"> contact@urbatech.com</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-10 col-md-offset-1 animate-box">
                <h2>Entrer en contact</h2>
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

<div id="map2" class="colorlib-map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15922.90671677846!2d11.517041!3d3.868697!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x5ec7cf6c8f000fb7!2sUrbatech+Conseils!5e0!3m2!1sen!2scm!4v1565401976039!5m2!1sen!2scm" width="800" height="600" frameborder="0" style="border:0;width:100%;" allowfullscreen></iframe>
</div>

<?php get_footer(); ?>