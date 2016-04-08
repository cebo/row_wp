<?php 

/* Template Name: Deals List

*/
 get_header(); ?>
 

<?php query_posts(array(
				
				'post_type' => 'specials',
				'posts_per_page' => 1,
				'meta_query' => array(
					array(
						'key' => 'cebo_available_on_header',
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
			
			
			<div class="button-wrapper" style="margin: 20px 0;"><a onclick="_gaq.push(['_link', this.href]);return false;" class="button" href="<?php if(get_post_meta($post->ID, 'cebo_booklink', true)) { echo get_post_meta($post->ID, 'cebo_booklink', true); } else { the_permalink(); } ?>"><?php _e('Reserve Now','row-theme-text'); ?></a></div>

			<div class="clear"></div>

		</div>
		
		
		<?php endwhile; else : ?>

			<section class="contentarea">
						
		<?php endif; wp_reset_query(); ?>	
		
		
		
		<ul class="deal-boxes">
		
			<?php query_posts(array(
				
				'post_type' => 'specials',
				// 'offset' => 1,
				'meta_query' => array(
			        array(
			            'key' => 'cebo_available_on_header',
			            'compare' => 'NOT EXISTS'
			        )
			    )

				)); if(have_posts()) : while(have_posts()) : the_post(); ?>

				<?php 

					$title = get_the_title();
					$slug_comp = sanitize_title($title); 

				?>

				<li class="deal">
				
					
					<?php if(get_post_meta($post->ID, 'cebo_fullpic', true)) { ?>
		
		
					<div class="deal-photo" style="background-image: url(<?php echo get_post_meta($post->ID, 'cebo_fullpic', true); ?>);"></div>
					
					<?php } elseif($imgsrc) { ?>
					
					
					<div class="deal-photo" style="background-image: url(<?php echo $imgsrc[0]; ?>);"></div>
					
					<?php } else { ?>
					
					<div class="deal-photo" style="background-image: url(<?php bloginfo ('template_url'); ?>/images/watermark.jpg);"></div>
					
					
					<?php } ?>
					
					<?php if( $slug_comp == '5-cash-back' ) { ?>

						<div class="deal-wrapper">
					
							<h1><?php echo get_post_meta($post->ID, 'cebo_subtagline', true); ?></h1>
		
							<p><?php echo content(30); ?></p>

							<div id="theguestbook_widget"></div>

							<div class="wonder-vertical"></div>

						</div>

					<div class="button-wrapper" style="margin: 10px 0 0;">
						<a style="margin-bottom: 10px;" class="button" href="<?php if(get_post_meta($post->ID, 'cebo_learnmore_url', true)) { echo get_post_meta($post->ID, 'cebo_learnmore_url', true); } else { the_permalink(); } ?>"><?php _e('Read More','row-theme-text'); ?></a><br />
						<input class="theguestbook-email-submit-input button" type="button" value="Enroll">
					</div>	
						
					<?php } else { ?> 
	
					<div class="deal-wrapper">
					
						<h1><?php the_title(); ?></h1>
	
						<p><?php echo content(30); ?></p>

						<div class="wonder-vertical"></div>


					</div>

					<div class="button-wrapper" style="margin: 10px 0 0;">
						<a style="margin-bottom: 10px;" class="button" href="<?php if(get_post_meta($post->ID, 'cebo_learnmore_url', true)) { echo get_post_meta($post->ID, 'cebo_learnmore_url', true); } else { the_permalink(); } ?>"><?php _e('Read More','row-theme-text'); ?></a><br />
						<a onclick="_gaq.push(['_link', this.href]);return false;" class="button" href="<?php if(get_post_meta($post->ID, 'cebo_booklink', true)) { echo get_post_meta($post->ID, 'cebo_booklink', true); } else { the_permalink(); } ?>"><?php _e('Reserve Now','row-theme-text'); ?></a></div>

					<?php } ?>

				</li>
				
				
				<?php endwhile; endif; wp_reset_query(); ?>	

				
			</ul>
		
		
		
		
		<div class="clear"></div>
		
	<?php get_footer(); ?>