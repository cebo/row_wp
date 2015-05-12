<?php 

/* Template Name: Concierge

*/
 get_header(); ?>
 
 

 
 
	<div class="home-intro">
		
		<?php if(have_posts()) : while(have_posts()) : the_post(); $imgsrc = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full', false, ''); ?>
		<?php if(get_post_meta($post->ID, 'cebo_fullpic', true)) { ?>
		
		
		<div class="stretch"  style="background-image: url(<?php echo get_post_meta($post->ID, 'cebo_fullpic', true); ?>);"></div>
		
		<?php } elseif($imgsrc) { ?>
		
		
		<div class="stretch"  style="background-image: url(<?php echo $imgsrc[0]; ?>);"></div>
		
		<?php } else { ?>
							
		<div class="stretch"  style="background-image: url(<?php bloginfo ('template_url'); ?>/images/watermark.jpg);"></div>
		
		
		<?php } ?>	
		<?php endwhile; endif; wp_reset_query(); ?>	
		
	</div>	
	
	<section class="contentarea">
		
		
		
			
		
		
				
		<div class="page-content">
		
			<?php if(have_posts()) : while(have_posts()) : the_post(); ?>	
			
			<div class="concierge-top-wrapper">

				<h1><?php the_title(); ?></h1>

				<?php the_content(); ?>

			</div>
			
			
			<?php endwhile; endif; wp_reset_query(); ?>	
			
			
			
			<?php 
				$count = 1; 

				query_posts('post_type=concierge'); if(have_posts()) : while(have_posts()) : the_post(); $imgsrc = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full', false, ''); ?>
			
			
			<div class="concierge-box box-style-<?php echo $count; ?>">

				<div class="left">

					<div class="wideover overlay">
					
						<h1><?php the_title(); ?></h1>
						<a href="<?php echo get_post_meta($post->ID, 'bigtitle', true); ?>"></a>
					</div>
					
					<div class="concierge-box-photo"  style="background-image: url(<?php echo $imgsrc[0]; ?>);"></div>

				</div>

				<div class="right">
					
					<?php the_content(); ?>
					
					<a href="<?php echo get_post_meta($post->ID, 'bigtitle', true); ?>"><?php _e('MORE >','row-theme-text'); ?></a>

				</div>
				
			</div>
			
			<?php 

				if ($count == 4){
				  $count = 1;
				}

				else { 
					$count++;
				} 

				endwhile; endif; wp_reset_query(); 

			?>	
			
		

		</div>
		
		
		
		
		<div class="clear"></div>
		
		
		<!-- begin fifth level -->
		
		<?php get_footer(); ?>