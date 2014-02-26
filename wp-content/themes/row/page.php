<?php 

/* Basic Page Template 

*/
 get_header(); ?>


<?php if(have_posts()) : while(have_posts()) : the_post(); $imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "Full"); ?>


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

		</div>
		
		
		
		
		<div class="clear"></div>
		



<?php endwhile; endif; wp_reset_query(); ?>	


					
<?php get_footer(); ?>