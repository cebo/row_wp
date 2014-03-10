<?php 

/* Template Name: Deals List

*/
 get_header(); ?>
 
 
<?php query_posts(array(
				
				'post_type' => 'specials',
				'posts_per_page' => 1,

				)); if(have_posts()) : while(have_posts()) : the_post(); ?>
 
 
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
						
		<div class="page-content">

			<h1><?php the_title(); ?></h1>

			<?php the_content(); ?>
			
			
			<div class="button-wrapper" style="margin: 20px 0;"><a onclick="_gaq.push(['_link', this.href]);return false;" class="button" href="<?php if(get_post_meta($post->ID, 'cebo_booklink', true)) { echo get_post_meta($post->ID, 'cebo_booklink', true); } else { the_permalink(); } ?>">Book Now</a></div>

			<div class="clear"></div>

		</div>
		
		
		<?php endwhile; endif; wp_reset_query(); ?>	
		
		
		
		<ul class="deal-boxes">
		
			<?php query_posts(array(
				
				'post_type' => 'specials',
				'offset' => 1,

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
					
						<h1><?php the_title(); ?></h1>
	
						<p><?php echo excerpt(40); ?></p>
	
						<div class="button-wrapper" style="margin: 10px 0 0;"><a onclick="_gaq.push(['_link', this.href]);return false;" class="button" href="<?php the_permalink(); ?>">Book Now</a></div>

						<div class="wonder-vertical"></div>

					</div>

				</li>
				
				
				<?php endwhile; endif; wp_reset_query(); ?>	

				
			</ul>
		
		
		
		
		<div class="clear"></div>
		
	<?php get_footer(); ?>