<?php get_header();?>


<div class="hero-image">

</div>

<!-- main header end -->
<section class="flipbox">
    <div class="auto-container">
        <div class="row text-center mobflip">
            <div class="col">
                <a href="https://sknrwa.baboolsoft.com/community/">
                <ul class="flipper">
                    <li>
                        <div class="flip-card">
                            <div class="flip-card-inner">
                                <div class="flip-card-front">
                                    <div class="icoons">
                                        <i class="fa fa-comments-o" aria-hidden="true"></i>
                                    </div>
                                    <h1>Discussion</h1>
                                </div>
                                <div class="flip-card-back">
                                    <p>Start a discussion with your neighbors. Join now to start a
                                        discussion.</p>

                                </div>
                            </div>

                        </div>
                    </li>
                </ul>
                </a>
            </div>
            <div class="col">
<a href="https://sknrwa.baboolsoft.com/notice/">
     <ul class="flipper2">
                    <li>
                        <div class="flip-card">
                            <div class="flip-card-inner">
                                <div class="flip-card-front">
                                    <div class="icoons2">
                                        <i class="fa fa-newspaper-o" aria-hidden="true"></i>
                                    </div>
                                    <h1>Notices</h1>
                                </div>
                                <div class="flip-card-back">
                                    <p >
                                        Post notices and update your community. Join now and post your first
                                        notice. </p>

                                </div>
                            </div>

                        </div>
                    </li>
                </ul>
</a>
               
            </div>
        </div>
    </div>








</section>


<!--Project Status: Under Construction-->


<!-- event section -->
<section class="events">
    <div class="auto-container">
        <div class="row">
            <h4 class="toppara">Below are some of the recent
                activities, were we have taken photos and sharing those events alone here. Please click
                on the below Events list to know more about the events and Photographs.</h4>
        </div>
    </div>
    <div class="auto-container">
        <div class="row">
            <div class="col-lg-12">
                <div class="vc_column-inner ">
                    <div class="wpb_wrapper">
                        <div class="sc_content_container">
                            <div class="sc_events sc_events_detailed" data-slides-min-width="150">
                                <h2 class="sc_item_title sc_events_title">Activities and Events</h2>
                                <div class="sc_events_content sc_item_content">



                                    <?php if( have_rows('add_events_and_activities', 'option') ): ?>


                                    <?php while( have_rows('add_events_and_activities', 'option') ): the_row(); ?>
                        
                                    <a href="<?php the_sub_field('link'); ?>#<?php the_sub_field('scroll_to'); ?>" class="sc_events_item">
                                        <span class="sc_events_item_date_wrap">
                                            <span class="sc_events_item_date"><?php the_sub_field('date'); ?> </span>
                                        </span>
                                        <span class="sc_events_item_title_wrap">
                                            <span class="sc_events_item_title"><?php the_sub_field('title'); ?></span>
                                        </span>
                                        <span class="sc_events_item_time_wrap">
                                            <span class="sc_events_item_time"><?php the_sub_field('text'); ?></span>
                                        </span>
                                        <span class="sc_events_item_button_wrap">
                                            <span class="sc_events_item_button">Details</span>
                                        </span>
                                    </a>

                                    <?php endwhile; ?>



                                    <?php endif; ?>


                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="wpb_column vc_column_container column-6_12">
            <div class="vc_column-inner ">
                <div class="wpb_wrapper">
                    <a id="sc_anchor_events" class="sc_anchor" title="Events" data-icon="" data-url=""></a>
                </div>
            </div>
        </div>
    </div>

</section>
<!-- event section end -->
<!-- facilities section -->
<section class="cases-section sec-bg pb-0">
    <div class="auto-container">
        <div class="text-center">
            <h2 class="casesspace">Facilities</h2>
            <div class="text-decoration text-center">
                <span class="left"></span>
                <span class="right"></span>
            </div>
        </div>
        <div class="row rowspace">
              <?php if( have_rows('facilities', 'option') ): ?>


                                    <?php while( have_rows('facilities', 'option') ): the_row(); 
                                    $facilities= get_sub_field('image');?>
                     <div class="col-lg-4 case-block-one">
                <div class="inner-box">
                    <?php if( !empty( $facilities ) ): ?>
                    <div class="image">
                        <img class="lazy-image owl-lazy" src="<?php echo esc_url($facilities['url']); ?>">
                    </div>
                    <?php endif; ?>

                    <div class="overlay">
                        <div class="content">
                            <h4><?php the_sub_field('title'); ?></h4>
                        </div>
                    </div>
                </div>
            </div>

                                    <?php endwhile; ?>



                                    <?php endif; ?>




            <div class="col-lg-4 case-block-one">
                <div class="inner-box">
                    <div class="read-more-btn">
                        <a href="https://sknrwa.baboolsoft.com/facilities/">Check More About <br> Our Facilities</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- facilities section end -->


<?php get_footer();?>