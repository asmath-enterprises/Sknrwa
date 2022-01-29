     	<!-- footer section -->
	<footer class="foot">
		<div class="auto-container">
			<div class="footerspace">
			<div id="footer-1">
                                    <?php
                                            if(is_active_sidebar('footer-1')){
                                            dynamic_sidebar('footer-1');
                                            }
                                            ?>
                                </div>
			
			</div>
		</div>
		<div class="auto-container">
		<nav class="footer_menu">
		<div id="footer-1">
                                    <?php
                                            if(is_active_sidebar('footer-2')){
                                            dynamic_sidebar('footer-2');
                                            }
                                            ?>
                                </div>
			
		</nav>
		</div>

		<hr class="solid">
		<div class="copyright">© 2021 <a href=http://baboolsoft.com/> baboolsoft</a>, All Rights Reserved.</div>



	</footer>
	</div>
	<!-- footer section end -->
</body>
</html>
    <script type='text/javascript' src='<?php echo get_template_directory_uri();?>/assets/js/bootstrap-select.min.js'></script>
	<script type='text/javascript' src='<?php echo get_template_directory_uri();?>/assets/js/bootstrap.min.js'></script>
	<script type='text/javascript' src='<?php echo get_template_directory_uri();?>/assets/js/__scripts.js'></script>
	<script type='text/javascript' src='<?php echo get_template_directory_uri();?>/assets/js/fancybox.min.js'></script>
	<script type='text/javascript' src='<?php echo get_template_directory_uri();?>/assets/js/wow.js'></script>
	<script src="https://kit.fontawesome.com/d364941372.js" crossorigin="anonymous"></script>


        <?php wp_footer();?>

        </body>

        </html>