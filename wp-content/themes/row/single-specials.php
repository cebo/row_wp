<?php 

/* Basic Single Post Template 

*/
 get_header(); ?>



	<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
	
	
	
	<div class="home-intro">
							
	
		<?php if(get_post_meta($post->ID, 'cebo_fullpic', true)) { ?>
		
		
		<div class="stretch"  style="background-image: url(<?php echo get_post_meta($post->ID, 'cebo_fullpic', true); ?>);"></div>
		
		<?php } elseif($imgsrc) { ?>
		
		
		<div class="stretch"  style="background-image: url(<?php echo $imgsrc[0]; ?>);"></div>
		
		<?php } else { ?>
							
		<div class="stretch"  style="background-image: url(<?php bloginfo ('template_url'); ?>/images/watermark.jpg);"></div>
		
		
		<?php } ?>	
	
	</div>	
	
	<section class="contentarea">
	
						
		<div class="page-content alt-page-content">

			<h1><?php the_title(); ?></h1>

			<?php the_content(); ?>
			
			
			<div class="clear"></div>

			<div class="button-wrapper" style="margin: 20px 0;"><a class="button" href="<?php if(get_post_meta($post->ID, 'cebo_booklink', true)) { echo get_post_meta($post->ID, 'cebo_booklink', true); } else { the_permalink(); } ?>" target="_blank">Book Now</a></div>

			<div class="clear"></div>

		</div>
		
		
		
		
		<div class="clear"></div>
		
		<?php endwhile; endif; wp_reset_query(); ?>	
					
<?php get_footer(); ?>