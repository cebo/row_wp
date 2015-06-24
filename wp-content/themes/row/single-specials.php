<?php 

/* Basic Single Post Template 

*/
 get_header(); ?>


	<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
	
	<section class="contentarea">

		<div class="home-intro">			
	
			<?php if(get_post_meta($post->ID, 'cebo_fullpic', true)) { ?>
			
			
			<div class="stretch"  style="background-image: url(<?php echo get_post_meta($post->ID, 'cebo_fullpic', true); ?>);"></div>
			
			<?php } elseif($imgsrc) { ?>
			
			
			<div class="stretch"  style="background-image: url(<?php echo $imgsrc[0]; ?>);"></div>
			
			<?php } else { ?>
								
			<div class="stretch"  style="background-image: url(<?php bloginfo ('template_url'); ?>/images/watermark.jpg);"></div>
			
			
			<?php } ?>	
		
		</div>		

		<?php 

			$title = get_the_title();
			$slug_comp = sanitize_title($title); 

		?>		
						
		<div class="page-content alt-page-content">

			<?php if( $slug_comp == '5-cash-back' ) { ?>
				
				<h1><?php echo get_post_meta($post->ID, 'cebo_subtagline', true); ?></h1>
					<?php the_content(); ?>

				<div id="theguestbook_widget"></div>

			<?php } else { ?>

				<h1><?php the_title(); ?></h1>
					<?php the_content(); ?>
				
				<div class="clear"></div>

				<div class="button-wrapper" style="margin: 20px 0;"><a onclick="_gaq.push(['_link', this.href]);return false;" class="button" href="<?php if(get_post_meta($post->ID, 'cebo_booklink', true)) { echo get_post_meta($post->ID, 'cebo_booklink', true); } else { the_permalink(); } ?>"><?php _e('Book Now','row-theme-text'); ?></a></div>

				<div class="clear"></div>

			<?php } ?>

		</div>
		
		
		
		
		<div class="clear"></div>
		
		<?php endwhile; endif; wp_reset_query(); ?>	
					
<?php get_footer(); ?>