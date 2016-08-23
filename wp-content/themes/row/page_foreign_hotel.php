<?php 

/* Template Name:Foreign Hotel Page

*/
 get_header(); ?>
 

<?php 

	$query = new wp_query(array(
				
				'post_type' => 'hotel',
				'posts_per_page' => 1,
				'meta_query' => array(
					array(
						'key' => 'cebo_available_on_header',
						'value' => 'on',
						)
				)

				)); if($query->have_posts()) : while($query->have_posts()) : $query->the_post(); $imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "Full");
			        ?>
 	
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

		</div>

		<ul class="deal-boxes">

			<!-- main content -->

				<li class="deal foreign-box">
				
					<div class="deal-wrapper">
					
						<?php echo content(150); ?>

					</div>

				</li>
						
		<?php endwhile; endif; wp_reset_query(); ?>	

		<!-- rooms -->	
		
			<?php 

				$dealboxes_query = new wp_query(array(
				
				'post_type' => 'page',
  				'post__in' => array(86,92)

				)); if($dealboxes_query->have_posts()) : while($dealboxes_query->have_posts()) : $dealboxes_query->the_post(); $imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "Full");
			        ?>

				<a href="<?php the_permalink(); ?>">
				<li class="deal foreign-box">
				
					
					<?php if(get_post_meta($post->ID, 'cebo_fullpic', true)) { ?>
		
		
					<div class="deal-photo" style="background-image: url(<?php echo get_post_meta($post->ID, 'cebo_fullpic', true); ?>);"></div>
					
					<?php } elseif($imgsrc) { ?>
					
					
					<div class="deal-photo" style="background-image: url(<?php echo $imgsrc[0]; ?>);"></div>
					
					<?php } else { ?>
					
					<div class="deal-photo" style="background-image: url(<?php bloginfo ('template_url'); ?>/images/watermark.jpg);"></div>
					
					
					<?php } ?>
		
	
					<div class="deal-wrapper">
					
						<h2><?php the_title(); ?></h2>
	
					</div>

				</li>
				</a>
				
				<?php endwhile; endif; wp_reset_query(); ?>	

				
			</ul>
		
		
		
		
		<div class="clear"></div>
		
	<?php get_footer(); ?>