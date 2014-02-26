<?php 

/* Basic Single Post Template 

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
						
		<div class="page-content">

			<div class="main-page-content left">

				<div class="text-content left">
					
					<h1><?php the_title(); ?></h1>

					<?php the_content(); ?>

				</div>

				<div class="extra-details right">
					
					<div class="extra-detail time-hours-list">
						
						<h4>Time & Hours</h4>

						<ul>
							<li>
								Tuesday - Friday<br/>
								2PM, 8PM
							</li>
							<li>
								Saturday<br/>
								2PM, 8PM
							</li>
							<li>
								Sunday<br/>
								2PM, 8PM
							</li>
							<li>
								Now show on Monday
							</li>
						</ul>

					</div>

					<div class="extra-detail address-details">

						<h4>Address</h4>

						<ul>
							<li>
								Minskoff Theatre<br/>
								200 W 45th St<br/>
								New York, NY
							</li>
						</ul>

					</div>

					<div class="extra-detail social-media-details">

						<ul>
							<li class="facebook"><a href="http://facebook.com" target="_blank"><i class="fa fa-facebook"></i></a></li>
							<li class="twitter"><a href="http://twitter.com" target="_blank"><i class="fa fa-twitter"></i></a></li>
						</ul>
						
					</div>

					<div class="extra-detail button-details">
						
						<a class="button" href="#">Find Tickets</a>

					</div>

				</div>

			</div>
			
			<div class="maparea right"></div>

		</div>
		
		
		
		
		<div class="clear"></div>
		
		
		<!-- begin fifth level -->
	
					
<?php get_footer(); ?>