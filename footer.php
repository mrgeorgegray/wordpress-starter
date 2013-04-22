	<footer role="contentinfo">
		<div class="wrapper">
			<ul class="footer_nav">
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'container' => false, 'items_wrap' => '%3$s' ) ); ?>
			</ul>
		</div><?php //.wrapper ?>
	</footer>

	<!-- Scripts -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="/wp-content/themes/trin/_/js/libs/jquery-1.8.2.min.js"><\/script>')</script>
	
	<?php			
	if ( is_page_template('page-home.php') ) {
	    ?>
		   <!-- Insert special home page only script content here -->	
	    <?php
	}
	?>
	
	<script src="<?php echo get_template_directory_uri(); ?>/_/js/script.js"></script>
	
	<!--
	<script>
		var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
		(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
		g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
		s.parentNode.insertBefore(g,s)}(document,'script'));
	</script>
	-->
</body>
</html>