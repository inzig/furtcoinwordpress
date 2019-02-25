		
	</div>
		<script src="<?php echo get_template_directory_uri(); ?>/home/js/jquery.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/home/js/bootstrap.min.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/home/js/bootstrap-progressbar.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/home/js/jquery.flexslider.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/home/js/owl.carousel.min.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/home/js/jquery.bxslider.min.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/home/slick/slick.min.js"></script>
		<script src='<?php echo get_template_directory_uri(); ?>/home/js/moment.min.js'></script>
		<script src="<?php echo get_template_directory_uri(); ?>/home/js/jquery.accordion.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/home/js/jquery.prettyphoto.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/home/js/kode_pp.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/home/js/jquery.countdown.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/home/js/jquery.downCount.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/home/js/modernizr.custom.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/home/js/jquery.dlmenu.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/home/js/waypoints-min.js"></script>
		<script src='<?php echo get_template_directory_uri(); ?>/home/js/fullcalendar.min.js'></script>
		<script src="<?php echo get_template_directory_uri(); ?>/home/js/functions.js"></script>
		<script>
			window.onscroll = function() {myFunction()};
			var header = document.getElementById("myHeader");
			var sticky = header.offsetTop;
			function myFunction() {
			if (window.pageYOffset > sticky) {
				header.classList.add("sticky");
			} else {
				header.classList.remove("sticky");
			}
			}
		</script>	
		<?php wp_footer(); ?>
		<script>
		(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
		(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
		l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
		ga('send', 'pageview');
		</script>

	</body>
</html>
