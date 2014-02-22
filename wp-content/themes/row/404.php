<?php 

/* 404 Page Template 

*/
 get_header(); ?>


<div id="undefined-sticky-wrapper" class="my-wrapper sticky" style="height: 70px; position: fixed; z-index: 99; width: 100%;">

<?php include (TEMPLATEPATH . '/library/navigation.php'); ?>

</div>
	
	<!-- Start Basic Page -->	
	<div id="basicpage">
	
		<div class="container">
		
			<div class="boxer">
			
				<h1><?php _e('Oh No&hellip;','cebolang'); ?></h1>
				
				<span class="fourohfour"><?php _e('404','cebolang'); ?></span>
				
				<p><?php _e('The page you are looking for is not available. Please try your search again', 'cebolang'); ?></p>
				<p><a class="button fuschia second" href="#modal"><?php _e('Contact Us','cebolang'); ?></a> <a class="button"href="http://twitter.com/<?php echo get_option('cebo_twitter'); ?>" target="_blank"><?php _e('Follow Us On Twitter','cebolang'); ?></a></p></p>
				
							
			</div>			
						
		</div>
		
		<div class="clear"></div>
		
	</div>
	<!-- End Basic Page -->
	

<?php if(get_option('cebo_twitter')) { ?>

	<!-- Start Twitter Section  -->
	
	
	<?php include (TEMPLATEPATH . '/library/twitter.php'); ?>
	
	
	<!-- End Twitter Section  -->
	
<? } ?>
<?php if(get_option('cebo_showoffice') == 'true') { ?>

	<!-- Parallax Footer Background -->
	
	
	<?php include (TEMPLATEPATH . '/library/parallax.php'); ?>
	
	
	<!-- End Parallax Section -->
	
<? } ?>

<?php if(get_option('cebo_showmap') == 'true') { ?>

	<!-- Map Footer Background -->
	
	
	<?php include (TEMPLATEPATH . '/library/maps.php'); ?>
	
		
	<!-- End Map Footer Background  -->
	
<? } ?>

	
					
<?php get_footer(); ?>