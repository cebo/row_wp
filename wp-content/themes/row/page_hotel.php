<?php 

/* Template Name:Hotel Page

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

			<?php echo content(100); ?>
			
			
			<div class="button-wrapper" style="margin: 20px 0;"><a onclick="_gaq.push(['_link', this.href]);return false;" class="button" href="<?php if(get_post_meta($post->ID, 'cebo_booklink', true)) { echo get_post_meta($post->ID, 'cebo_booklink', true); } else { the_permalink(); } ?>"><?php _e('Read More','row-theme-text'); ?></a></div>

			<div class="clear"></div>

		</div>
		
		
		<?php endwhile; endif; wp_reset_query(); ?>	
		
		
		
		<ul class="deal-boxes">

			<!-- amenities -->

				<li class="deal">
				
					<div class="deal-photo" style="background-image: url(<?php echo site_url(); ?>/wp-content/uploads/2014/10/row-hotel-nyc-amenities.jpg);"></div> 	
	
					<div class="deal-wrapper">
					
						<h2 class="h1"><?php _e('Amenities','row-theme-text'); ?></h2>
	
						<p></p><p><?php _e('Inspired amenities abound at the Row NYC. Our restaurant, District M, is a European express café by day and a Neopolitan pizza bar and cocktail lounge by night, offering a curated selection of delicious food, coffee, cocktails and more…','row-theme-text'); ?></p><p></p>
	
						<div class="button-wrapper" style="margin: 10px 0 0;"><a onclick="_gaq.push(['_link', this.href]);return false;" class="button" href="<?php bloginfo('url'); ?>/times-square-hotels/amenities/">Read More</a></div>

						<div class="wonder-vertical"></div>

					</div>

				</li>

			<!-- end amenities -->
		
			<?php 

				$dealboxes_query = new wp_query(array(
				
				'post_type' => 'hotel',
				'offset' => 1,
				// 'suppress_filters' => 1,
				'meta_query' => array(
			        array(
			            'key' => 'cebo_available_on_header',
			            'compare' => 'NOT EXISTS'
			        )
			    )

				)); if($dealboxes_query->have_posts()) : while($dealboxes_query->have_posts()) : $dealboxes_query->the_post(); $imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "Full");
			        ?>

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
	
						<p><?php echo content(40); ?></p>
	
						<div class="button-wrapper" style="margin: 10px 0 0;"><a onclick="_gaq.push(['_link', this.href]);return false;" class="button" href="<?php if(get_post_meta($post->ID, 'cebo_booklink', true)) { echo get_post_meta($post->ID, 'cebo_booklink', true); } else { the_permalink(); } ?>"><?php _e('Read More','row-theme-text'); ?></a></div>

						<div class="wonder-vertical"></div>

					</div>

				</li>
				
				
				<?php endwhile; endif; wp_reset_query(); ?>	

				
			</ul>
		
		
		
		
		<div class="clear"></div>
		
	<?php get_footer(); ?>