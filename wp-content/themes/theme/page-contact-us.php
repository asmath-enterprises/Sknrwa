<?php get_header();?>
<div class="hero-image">

</div>
<section class="team-section-two">
    <div class="auto-container">
        <div class="sec-title ">
            <h4 class="tittle">Please try to contact members directly in person during 2nd week Sunday of every month in Association Building located inside the Park, First North Cross street. Only for urgent information , please reach on mobile during Sundays.</h4>
            <div class="text-decoration">
                <span class="left"></span>
                <span class="right"></span>
            </div>
        </div>
        <div class="row teaam">
            <?php if( have_rows('contact_details','options') ):?>

            <?php while( have_rows('contact_details','options') ) : the_row();
            $testimage = get_sub_field('image','options');
            $postions = get_sub_field('position','options');
            $names = get_sub_field('name','options');
            $num = get_sub_field('phone_number','options');?>

            <div class="team-block-one col-lg-3 col-md-6">
                <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="900ms">
                    <div class="image "><img src="<?php echo $testimage;?>"
                            alt=""></div>
                    <div class="lower-content">
                        <div class="designation"><?php echo $postions;?></div>
                        <h4><?php echo $names;?></h4>
                        <ul class="list">
                            <li><i class=" icos fas fa-phone-alt"></i><a
                                    href="tel:<?php echo $num;?>"><?php echo $num;?></a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <?php endwhile;?>

            <?php endif; ?>



        </div>
    </div>
</section>
<section class="map-section-two">

            <div>
                <div class="mapp">
                  <?php the_field('embed_google_map'); ?>
                </div>


</section>


<?php get_footer();?>