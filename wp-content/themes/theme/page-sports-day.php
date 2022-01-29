<?php get_header();?>
<div class="hero-image">

</div>
<div class="auto-container">

</div>
<section class="event">
    <div class="auto-container">
        <div class="row">
            <h4 class="topparagraph">Below are some of the Photos from the recent Sports day conducted on 02-Oct-2018 in
                our Association Park in North 1ST South Cross Street. Chief Guest Mr. Vijay Kannan and his Wife Dipthi
                Vijaykannan from Neelankarai graced the Occasion. It is a great honor for Association as the eminent
                National Sports Champion, himself distributed the price to the winners and participants.</h4>

        </div>
    </div>
    <div class="fullback">
        <div class="auto-container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- News Block -->

                    <div class="news-block-one style-two">
                        <div class="row spacee ">
                            <div class="col-md-4 p-0 spaace">
                                <div class="image wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="900ms"><img class="lazy-image owl-lazy"
                                            src="<?php bloginfo('template_directory');?>/assets/images/sportsday/vijay kanan.jpg"
                                            data-src="<?php bloginfo('template_directory');?>/assets/images/sportsday/vijay kanan.jpg"
                                            alt=""></div>
                            </div>
                            <div class="col-md-6 p-0">
                                <div class="inner-box  wow fadeInUp" data-wow-delay="0ms" data-wow-duration="900ms">
                                    <div class="row m-0 justify-content-between">
                                        <h2>National Champion in Tennis<h2>
                                                <h4 > Mr.Vijay Kannan is Singles National
                                                    Champion in Tennis 2001, and also winner of
                                                    3 Single Titles and 28 Doubles titles in ITF International Ranking
                                                    Tournaments.
                                                    Also he played with Leander Paes and Mahesh Bhupathi in Davis Cup
                                                </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row spacee  ">
                            <div class="col-md-4 p-0 spaace">
                                <div class="image wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="900ms"><img class="lazy-image owl-lazy"
                                            src="<?php bloginfo('template_directory');?>/assets/images/sportsday/chess.jpg"
                                            data-src="<?php bloginfo('template_directory');?>/assets/images/sportsday/chess.jpg"
                                            alt=""></div>
                            </div>
                            <div class="col-md-6 p-0">
                                <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="900ms">
                                    <div class="row m-0 justify-content-between">
                                        <h2>State Player in Chess<h2>
                                                <h4 >Ms.Sana, has been an insipiration for
                                                    all young chess players in our Nagar. She took not more than
                                                    approximately 5 minutes to win each of her oppononet in all 4 rounds
                                                    and came up as the Winner in the Chess tournament.</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="gallery">
    <div class="text-center">
        <h2 class="galleryspace">Gallery</h2>
        <div class="text-decoration text-center">
            <span class="left"></span>
            <span class="right"></span>
        </div>
    </div>
    <div class="activity">

        <div class="container-fluid">
            <div class="row mt-4">
                <?php if( have_rows('gallery') ):?>

                <?php while( have_rows('gallery') ) : the_row();

                $testimage = get_sub_field('image');?>

                <?php if( !empty( $testimage ) ): ?>
                <div class="item col-sm-6 col-md-4  padding-0 wow fadeInUp" data-wow-delay="0ms" data-wow-duration="900ms">
                    <a href="<?php echo esc_url($testimage['url']); ?>" class="fancybox" data-fancybox="gallery1">
                        <img src="<?php echo esc_url($testimage['url']); ?>" width="100%" height="100%">
                    </a>
                </div>

           

            <?php endif; ?>


            <?php endwhile;?>

            <?php endif; ?>

            </div>

        </div>
    </div>
    </div>
</section>
<?php get_footer();?>