<?php get_header();?>
<div class="hero-image">

</div>
<div class="head">
    <div class="auto-container">
        <div class="titletime">
            <h4>Sri Kapaleeswarar Nagar Welfare Association is 35 years old Association, one of the oldest, well reputed
                Association among the ECR Communities, started in 1981, registered under the Tamilnadu Societies
                Registration Act, 1975</h4>
        </div>
    </div>
</div>
<div class="titletime2">
<h2>DETAILS OF SRI KAPALEESWARAR NAGAR WELFARE ASSOCIATION</h2>
</div>
<section class="timeline-section">


    <div class="auto-container">
        <div class="wrapper-box">
            <ul class="timeline-block">
                           <?php if( have_rows('about_us_content') ):?>

<?php while( have_rows('about_us_content') ) : the_row();

$contents = get_sub_field('content');
$titles = get_sub_field('title');?>
          <li>
                    <div class="shape"><img src="<?php bloginfo('template_directory'); ?>/assets/images/shape-21.png"
                            alt="">
                    </div>
                    <div class="titled"><?php echo $titles;?></div>
                    <div class="date"><?php echo $contents;?></div>

                </li>

<?php endwhile;?>

<?php endif; ?>
               
                <li>

                </li>
            </ul>
        </div>
    </div>
</section>
<section class="eve">
    <div class="move">
  <div class="auto-container">
           <div class="text-center">
                <h2 class="galleryspace">Layout Details</h2>
                <div class="text-decoration text-center">
                    <span class="left"></span>
                    <span class="right"></span>
                </div>
            </div>
            <div style="margin-top:60px">
                   <?php $var = do_shortcode( '[drawattention]' );?>
<?php echo $var;?>
            </div>

 
</div>
    </div>
</section>

<div class="auto-container">

    <div class="text-center">
        <h2 class="galleryspace">SOWBHAGYA LADIES ASSOCIATION</h2>
        <div class="text-decoration text-center">
            <span class="left"></span>
            <span class="right"></span>
        </div>
    </div>
    <div class="text-center">
        <img class="imaage" src="<?php bloginfo('template_directory');?>/assets/images/Sowbagya.jpg" alt="">
    </div>
</div>




<div class="auto-container">
    <div class="titletime">
        <h4>Sowbhagya Ladies Associations which is part of Sri Kapaleeswarar Nagar Welfare Assocation was very active
            for several years and was conducting various events and activities for both girls and boys, unfortunately it
            is not operational due to lack of participation from next generation Ladies of our Nagar.</h4>
    </div>
</div>


<?php get_footer();?>