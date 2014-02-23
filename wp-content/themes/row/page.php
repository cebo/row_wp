<?php 

/* Basic Page Template 

*/
 get_header(); ?>


<?php if(have_posts()) : while(have_posts()) : the_post(); $imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "Full"); ?>


	<div class="home-intro">
	
		<?php if(get_post_meta($post->ID, 'cebo_fullpic', true)) { ?>
		
		
		<div class="stretch"  style="background-image: url(<?php echo get_post_meta($post->ID, 'cebo_fullpic', true); ?>);"></div>
		
		<?php } elseif($imgsrc) { ?>
		
		
		<div class="stretch"  style="background-image: url(<?php echo $imgsrc; ?>);"></div>
		
		<?php } else { ?>
							
		<div class="stretch"  style="background-image: url(<?php bloginfo ('template_url'); ?>/images/watermark.jpg);"></div>
		
		
		<?php } ?>
	
	</div>	
	
	<section class="contentarea">
						
		<div class="page-content alt-page-content">

			<h1><?php the_title(); ?></h1>

			<?php the_content(); ?>

			<div class="deal-more-detail">

				<ul>

					<li>

						<a href="#" target="_blank"><h3>View district M Breakfast Menu ></h3></a>

						<p>Start Your day in NYC with a fantastic Breakfast Deal at the new district M. Your package includes Daily Continental Breakfast per person Included in Your Room Rate!</p>

						<p>Choose One from each of the following:</p>

						<ul>
							<li>Pastries</li>
							<li>La Colombe Coffee or Hot Tea or Milk or Juice</li>
							<li>A whole Fruit</li>
						</ul>

					</li>

					<li>

						<h3>Hours of Operation</h3>

						<p>Monday - Friday: 6:30 a.m. – 11:30 a.m., Saturday-Sunday: 7:00 a.m. – 12:00 p.m.</p>

						<p>**Must be used daily towards Breakfast and has no cash value. Not valid with any other offers or discounts. The daily continental breakfast is applicable per day based on the number of persons on the reservation including children.</p>

					</li>

				</ul>

			</div>

			<div class="clear"></div>

			<div class="button-wrapper" style="margin: 20px 0;"><a class="button">Book Now</a></div>

			<div class="clear"></div>

		</div>
		
		
		
		
		<div class="clear"></div>
		



<?php endwhile; endif; wp_reset_query(); ?>	


					
<?php get_footer(); ?>