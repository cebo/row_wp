<?php 

/* 404 Page Template 

*/
 get_header(); ?>

<section class="contentarea">

	<div class="home-intro">
									
		<div class="stretch"  style="background-image: url(<?php bloginfo('url'); ?>/wp-content/uploads/2014/02/space4_1060x800.jpg);"></div>
			
	</div>	
	
	<!-- Start Basic Page -->	
	<div class="page-content alt-page-content" style="padding: 30px;">
			
		<h1>Sorry.</h1>
		
		<p>The page you are looking for is not available and/or the link you clicked is temporarily broken. 
		<br />Please give us a call 888.352.3650 and we'll help you find what you're looking for.</p>

		<strong>Other Options:</strong>
		
		<div style="margin-top: 10px;">

			<a class="button four-o-four first" href="<?php bloginfo('url'); ?>"><?php _e('Visit our homepage','cebolang'); ?></a>
			<a class="button four-o-four second" href="/contact"><?php _e('Visit contact page','cebolang'); ?></a> 
			<a class="button four-o-four third"href="https://rownyc.reztrip.com"><?php _e('Book a hotel room','cebolang'); ?></a>

		</div>

		<div class="clear"></div>
						
	</div>
	<!-- End Basic Page -->
	
	
					
<?php get_footer(); ?>