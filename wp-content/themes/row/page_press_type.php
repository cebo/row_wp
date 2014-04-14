<?php 

/* Template Name: Press Type

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
						
		<div class="page-content">

			<h1><?php the_title(); ?></h1>

			<?php the_content(); ?>
			
			<?php if(get_post_meta($post->ID, 'cebo_presslink', true)) { ?>

				<div class="button-wrapper" style="margin: 20px 0;"><a onclick="_gaq.push(['_link', this.href]);return false;" class="button" href="<?php echo get_post_meta($post->ID, 'cebo_presslink', true); ?>">Read More</a></div>

			<?php } ?>

			<div class="clear"></div>

		</div>
		
		
		<?php endwhile; endif; wp_reset_query(); ?>	
		
		
		
		<ul class="deal-boxes">
		
			<?php 
				
				$pages = array(1387,1389);
				query_posts(array(
				
				'post_type' => 'page',
				'post__in' => $pages

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
	
					

							<div class="button-wrapper" style="margin: 20px 0;"><a onclick="_gaq.push(['_link', this.href]);return false;" class="button" href="<?php the_permalink(); ?>">See All</a></div>

						

						<div class="wonder-vertical"></div>

					</div>

				</li>
				
				
				<?php endwhile; endif; wp_reset_query(); ?>	

				
			</ul>
		
		
		
		
		<div class="clear"></div>
		
	<?php get_footer(); ?>