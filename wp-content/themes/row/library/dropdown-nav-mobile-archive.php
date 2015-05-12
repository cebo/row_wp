<!-- Gallery -->

<ul id="dropbox" class="dropbox">
						
	<?php query_posts('post_type=imagegalleries&posts_per_page=-1&suppress_filters=1'); if(have_posts()) : while(have_posts()) : the_post(); ?>
	
	
	<li>
	
	
		<?php if(get_post_meta($post->ID, 'cebo_fullpic', true)) { ?>
		
		<a href="<?php the_permalink(); ?>"><img src="<?php echo get_post_meta($post->ID, 'cebo_fullpic', true); ?>" alt="<?php the_title(); ?>"></a>

		<?php } elseif( has_post_thumbnail() ) { ?>

			<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium'); ?></a>
		
		<?php } elseif($imgsrc) { ?>
		
		
		<a href="<?php the_permalink(); ?>"><img src="<?php echo $imgsrc[0]; ?>" alt="<?php the_title(); ?>"></a>
		
		<?php } else { ?>
							
		<a href="<?php the_permalink(); ?>"><img src="<?php bloginfo ('template_url'); ?>/images/watermark.jpg" alt="<?php the_title(); ?>"></a>
		
		
		<?php } ?>							

		<h3><?php the_title(); ?></h3>
	</li>
	
	<?php endwhile; endif; wp_reset_query(); ?>		
	
					
</ul>



<!-- Deals -->

<ul class="dropdown">
						
	<?php query_posts(array('showposts' => 20, 'post_type' => 'specials', 'suppress_filters' => 1,)); if(have_posts()) : while(have_posts()) : the_post(); ?>


	<li>


		<?php if(get_post_meta($post->ID, 'cebo_fullpic', true)) { ?>
		
		<a href="<?php the_permalink(); ?>"><img src="<?php echo get_post_meta($post->ID, 'cebo_fullpic', true); ?>" alt="<?php the_title(); ?>"></a>

		<?php } elseif( has_post_thumbnail() ) { ?>

				<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium'); ?></a>							
		
		<?php } else { ?>
							
		<a href="<?php the_permalink(); ?>"><img src="<?php bloginfo ('template_url'); ?>/images/watermark.jpg" alt="<?php the_title(); ?>"></a>
		
		
		<?php } ?>							

		<h3><?php the_title(); ?></h3>
	</li>

	<?php endwhile; endif; wp_reset_query(); ?>	
	
</ul>



<!-- Eat and Drink -->

<ul class="dropdown">
						
	<?php query_posts(array('post_type' => 'amenities', 'posts_per_page' => 3, 'post__not_in' => array(32,33), 'suppress_filters' => 1,)); if(have_posts()) : while(have_posts()) : the_post(); 	$imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "Full"); ?>						

	<li>
		
		<?php if(get_post_meta($post->ID, 'cebo_thumbtwo', true)) { ?>
		
		<a href="<?php the_permalink(); ?>"><img src="<?php echo get_post_meta($post->ID, 'cebo_thumbtwo', true); ?>" alt="<?php the_title(); ?>"></a>
		
		<?php } elseif($imgsrc) { ?>

								
		<a href="<?php the_permalink(); ?>"><img src="<?php echo $imgsrc[0]; ?>" alt="<?php the_title(); ?>"></a>

		<?php } ?>			

		<h3><?php the_title(); ?></h3>
	</li>
	
	<?php endwhile; endif; wp_reset_query(); ?>
							
</ul>



<!-- Hotel -->

<ul class="dropdown">
						
	<?php $bloblor =  array(353,60,12,10,1387,331); query_posts(array(
						'post_type' => 'page',
						'post__in' => $bloblor,
						'orderby' => 'menu_order',
						'suppress_filters' => 1,
					)
						
						); if(have_posts()) : while(have_posts()) : the_post(); ?>
	
	
	<li>
	
	
		<?php if(get_post_meta($post->ID, 'cebo_fullpic', true)) { ?>
		
		<a href="<?php the_permalink(); ?>"><img src="<?php echo get_post_meta($post->ID, 'cebo_fullpic', true); ?>" alt="<?php the_title(); ?>"></a>

		<?php } elseif( has_post_thumbnail() ) { ?>

				<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium'); ?></a>							
		
		<?php } else { ?>
							
		<a href="<?php the_permalink(); ?>"><img src="<?php bloginfo ('template_url'); ?>/images/watermark.jpg" alt="<?php the_title(); ?>"></a>
		
		
		<?php } ?>							

		<h3><?php the_title(); ?></h3>
	</li>
	
	<?php endwhile; endif; wp_reset_query(); ?>	
	
</ul>



<!-- Rooms -->

<ul>
							
	<?php query_posts('post_type=rooms&posts_per_page=-1&suppress_filters=1'); if(have_posts()) : while(have_posts()) : the_post(); ?>
	
	
	<li>
	
	
		<?php if(get_post_meta($post->ID, 'cebo_fullpic', true)) { ?>
		
		<a href="<?php the_permalink(); ?>"><img src="<?php echo get_post_meta($post->ID, 'cebo_fullpic', true); ?>" alt="<?php the_title(); ?>"></a>
		
		<?php } elseif($imgsrc) { ?>
		
		
		<a href="<?php the_permalink(); ?>"><img src="<?php echo $imgsrc[0]; ?>" alt="<?php the_title(); ?>"></a>
		
		<?php } else { ?>
							
		<a href="<?php the_permalink(); ?>"><img src="<?php bloginfo ('template_url'); ?>/images/watermark.jpg" alt="<?php the_title(); ?>"></a>
		
		
		<?php } ?>							

		<h3><?php the_title(); ?></h3>
	</li>
	
	<?php endwhile; endif; wp_reset_query(); ?>		
	
					
</ul>



<!-- Explore NYC -->

<ul>
							
	<?php query_posts(array('showposts' => 20, 'post_parent' => 148, 'post_type' => 'page', 'suppress_filters' => 1,)); if(have_posts()) : while(have_posts()) : the_post(); ?>
	
	
	<li>
	
	
		<?php if(get_post_meta($post->ID, 'cebo_thumbtwo', true)) { ?>
	
		<a href="<?php the_permalink(); ?>"><img src="<?php echo get_post_meta($post->ID, 'cebo_thumbtwo', true); ?>" alt="<?php the_title(); ?>"></a>
		
		<?php } elseif($imgsrc) { ?>
		
		
		<a href="<?php the_permalink(); ?>"><img src="<?php echo $imgsrc[0]; ?>" alt="<?php the_title(); ?>"></a>

								
		
		<?php } else { ?>
							
		<a href="<?php the_permalink(); ?>"><img src="<?php bloginfo ('template_url'); ?>/images/watermark.jpg" alt="<?php the_title(); ?>"></a>
		
		
		<?php } ?>							

		<h3><?php the_title(); ?></h3>
	</li>
	
	<?php endwhile; endif; wp_reset_query(); ?>	
	
							
</ul>