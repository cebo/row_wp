<?php 

/* Template Name: Domestic Press

*/
 get_header(); ?>
 
 
<?php query_posts(array(
				
				'post_type' => 'press-releases',
				'posts_per_page' => 1,
				'presstype' => 'domestic',
				'meta_query' => array(
					array(
						'key' => 'cebo_featuredpress',
						'value' => 'on',
						)
				)

				)); if(have_posts()) : while(have_posts()) : the_post(); ?>	

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
						
		<div class="page-content">

			<h1><?php the_title(); ?></h1>

			<?php the_content(); ?>
			
			
			<div class="button-wrapper" style="margin: 20px 0;"><a target="_blank" onclick="_gaq.push(['_link', this.href]);return false;" class="button" href="<?php if(get_post_meta($post->ID, 'cebo_booklink', true)) { echo get_post_meta($post->ID, 'cebo_booklink', true); } else { the_permalink(); } ?>"><?php _e('Reserve Now','row-theme-text'); ?></a></div>

			<div class="clear"></div>

		</div>
		
		
		<?php endwhile; else : ?>

			<section class="contentarea">
						
		<?php endif; wp_reset_query(); ?>	
		
		<ul class="deal-boxes">
		
			<?php query_posts(array(
				
				'post_type' => 'press-releases',
				'posts_per_page' => -1,
				'presstype' => 'domestic',
				'meta_query' => array(
			        array(
			            'key' => 'cebo_featuredpress',
			            'compare' => 'NOT EXISTS'
			        )
			    )

				)); if(have_posts()) : while(have_posts()) : the_post(); ?>

				<li class="deal">
				
					
					<?php if(get_post_meta($post->ID, 'cebo_fullpic', true)) { ?>
		
		
					<div class="deal-photo" style="background-image: url(<?php echo get_post_meta($post->ID, 'cebo_fullpic', true); ?>);"></div>
					
					<?php } elseif($imgsrc) { ?>
					
					
					<div class="deal-photo" style="background-image: url(<?php echo $imgsrc[0]; ?>);"></div>
					
					<?php } else { ?>
					
					<div class="deal-photo" style="background-image: url(<?php bloginfo ('template_url'); ?>/images/watermark.jpg);"></div>
					
					
					<?php } ?>
		
	
					<div class="deal-wrapper">
					
						<h2 class="h1"><?php the_title(); ?></h2>
	
						<p><?php echo excerpt(40); ?></p>
	
						<?php if(get_post_meta($post->ID, 'cebo_presslink', true)) { ?>

							<div class="button-wrapper" style="margin: 20px 0;"><a target="_blank" onclick="_gaq.push(['_link', this.href]);return false;" class="button" href="<?php echo get_post_meta($post->ID, 'cebo_presslink', true); ?>" <?php if(get_post_meta($post->ID, 'cebo_external_link', true)) { ?>target="_blank"<?php } ?>><?php _e('Read More','row-theme-text'); ?></a></div>

						<?php } ?>

						<div class="wonder-vertical"></div>

					</div>

				</li>
				
				
				<?php endwhile; endif; wp_reset_query(); ?>	

				
			</ul>
		
		
		
		
		<div class="clear"></div>
		
	<?php get_footer(); ?>