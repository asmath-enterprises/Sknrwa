<?php get_header();?>


<div class="hero-image">

</div>


<div class="auto-container ">
  <h4 class="facilities">Following facilities are available for the paid residents of Kapaleeswarar Nagar Welfare
    Association at Discounted
    Rates. For More Information reach out the Coach information available along with the photographs.</h4>
</div>
<section class="categ">
    <div id="myBtnContainer" class="categor">
      <button class="btn" id="mytestbtn" onclick="filterSelection('cat1')"> Tennins Court</button>
      <button class="btn" onclick="filterSelection('cat2')"> Badmiton Court</button>
      <button class="btn" onclick="filterSelection('cat3')"> Childres Play Area</button>
      <button class="btn" onclick="filterSelection('cat4')"> Garden</button>

    </div>
</section>
<div class="auto-container">
  <div class="row" style="display: block">
    <div class="filt cat1">
      <img class="singleimage" src="<?php bloginfo('template_directory');?>/assets/images/gallery-3.jpg" alt="">
      <h2 class="filte">Well Developed Tennis Court, Coach Mr. Daya is conducting regular classes both in the morning
        and in the evening.</h2>
      <div class="categ">Contact : Coach Mr.Daya, Mobile :<a href="tel:9841004900"> 9841004900 <a></div>
   <h2> For Adults :</h2>
  <h4>3 classes a week, Rs.1300 (Non Subscription payers Rs.1500)<br>
For Adults no coaching fees but balls free and supporting players if required will be provided.<br>
For Adults 6 classes a week, Rs. 2500 for all.</h4> 

<h2>For Guest one day play :</h2> 
<h4>For paid Residents Rs.150 per class,
(Non Subscription payers Rs.200 per class.)</h4>

For Full Court Hiring 1 hour , purely based on free Slot availability : Rs.600 /hr. Needs to be booked well advance.

<h2 style="font-size:22px">Adults needs to book slot with Daya Mobile/whatsapp: <a href="tel:">81222 16666</a> </h2>

Subscription paying Residents will save Rs. 3600 per year for one kid by paying Association subscription of Rs.1200 per year.

Siva
Sports Committee Co-ordinator
978 92 2 8035
Please call Sports committee co-ordinator for any feedback and Suggestions.</h4>  

      <h2>Coaching and other Maintenance Fees:</h2>
      <div class="categh"> For Association paid members below is the fees:</div>
      For kids with coaching 3 classes a week, per month Rs.1200 /kid
      (Non Subscription payers Rs.1500)
    </div>
    <div class="filt cat2 ">
      <img class="singleimage" src="<?php bloginfo('template_directory');?>/assets/images/gallery-1.jpg" alt="">
      <h2 class="filte">Well Developed Badminton Court, Currently free to use.</h2>
    </div>
    <div class="filt cat3 ">
      <img class="singleimage" src="<?php bloginfo('template_directory');?>/assets/images/gallery-2.jpg" alt="">
      <h2 class="filte">Kids Play area with all amneties like Slide, Swing etc., Currently free to use</h2>
    </div>
    <div class="filt cat4 ">
      <img class="singleimage" src="<?php bloginfo('template_directory');?>/assets/images/gallery-4.jpg" alt="">
      <h2 class="filte">With a green garden and few herbal plants.</h2>
    </div>
  </div>
</div>
<script>
  var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[0].classList.add("active");
  btns[i].addEventListener("click", function(){
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
</script>
<?php get_footer();?>