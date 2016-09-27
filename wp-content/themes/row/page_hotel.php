<?php 

	/* Template Name: Hotel Page */

	get_header();

?>

	<section class="contentarea">

		<div class="contentarea-container contentarea-container-hotelpage">

			<?php 

				$query = new WP_Query(array(
					'post_type' => 'hotel',
					'posts_per_page' => 1,
					'meta_query' => array(
						array(
							'key' => 'cebo_available_on_header',
							'value' => 'on',
						)
					)
				));

				if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();

					$fullpic = get_post_meta( $post->ID, 'cebo_fullpic', true );
					$imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "Full");

			?>

				<div class="toppage-intro">

					<?php if ( $fullpic ) { ?>

						<div class="toppage-image" style="background-image: url(<?php echo $fullpic; ?>);"></div>

					<?php } elseif ( $imgsrc ) { ?>

						<div class="toppage-image" style="background-image: url(<?php echo $imgsrc[0]; ?>);"></div>

					<?php } else { ?>

						<div class="toppage-image" style="background-image: url(<?php bloginfo ('template_url'); ?>/images/watermark.jpg);"></div>

					<?php } ?>

				</div>

				<div class="toptitle-area toptitle-hotelpage">
					
					<h1><?php the_title(); ?></h1>

					<div class="toptitle-description">

						<?php echo content2( get_the_content(), 100, '<p>' ); ?>

					</div>

					<div class="toptitle-links">

						<?php $booklink = get_post_meta($post->ID, 'cebo_booklink', true); ?>

						<a onclick="_gaq.push(['_link', this.href]);return false;" href="<?php if ( $booklink ) { echo $booklink; } else { the_permalink(); } ?>"><?php _e('Read More','row-theme-text'); ?></a>
					</div>

				</div>

			<?php endwhile; endif; wp_reset_postdata(); ?>

			<div class="boxlists-main boxlists-threecol boxlists-hotelpage">

				<div class="boxlists-box">

					<div class="boxlists-imagebox">
						<div class="boxlists-image" style="background-image: url(<?php echo site_url(); ?>/wp-content/uploads/2014/10/row-hotel-nyc-amenities.jpg);"></div>
					</div>

					<h2 class="boxlists-title"><?php _e('Amenities','row-theme-text'); ?></h2>

					<div class="boxlists-content">

						<p><?php _e('Inspired amenities abound at the Row NYC. Our restaurant, District M, is a European express café by day and a Neopolitan pizza bar and cocktail lounge by night, offering a curated selection of delicious food, coffee, cocktails and more…','row-theme-text'); ?></p>

					</div>

					<div class="boxlists-links">
						<a onclick="_gaq.push(['_link', this.href]);return false;" href="<?php bloginfo('url'); ?>/times-square-hotels/amenities/"><?php _e( 'Read More', 'row-theme-text' ); ?></a>
					</div>

				</div>

				<?php 

					$count = 2;

					$dealboxes_query = new WP_Query(array(
						'post_type' => 'hotel',
						'offset' => 1,
						// 'suppress_filters' => 1,
						'meta_query' => array(
							array(
								'key' => 'cebo_available_on_header',
								'compare' => 'NOT EXISTS'
							)
						)
					));

					if ( $dealboxes_query->have_posts() ) : while ( $dealboxes_query->have_posts() ) : $dealboxes_query->the_post();

						$imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "Full");

						if ( $count % 3 == 0 ) { $last = 'last'; }
						else { $last = ''; }

				?>

					<div class="boxlists-box <?php echo $last; ?>">

						<?php if ( get_post_meta( $post->ID, 'cebo_fullpic', true ) ) { ?>

							<div class="boxlists-imagebox">
								<div class="boxlists-image" style="background-image: url(<?php echo get_post_meta( $post->ID, 'cebo_fullpic', true ); ?>);"></div>
							</div>

						<?php } elseif ( $imgsrc ) { ?>

							<div class="boxlists-imagebox">
								<div class="boxlists-image" style="background-image: url(<?php echo $imgsrc[0]; ?>);"></div>
							</div>

						<?php } else { ?>

							<div class="boxlists-imagebox">
								<div class="boxlists-image" style="background-image: url(<?php bloginfo ('template_url'); ?>/images/watermark.jpg);"></div>
							</div>

						<?php } ?>

						<h2 class="boxlists-title"><?php the_title(); ?></h2>

						<div class="boxlists-content">

							<?php echo content2( get_the_content(), 40, '<p><a><br><i>' ); ?>

						</div>

						<div class="boxlists-links">

							<?php $booklink = get_post_meta( $post->ID, 'cebo_booklink', true ); ?>
							
							<a onclick="_gaq.push(['_link', this.href]);return false;" href="<?php if ( $booklink ) { echo $booklink; } else { the_permalink(); } ?>"><?php _e('Read More','row-theme-text'); ?></a>

						</div>

					</div>

					<?php if ( $count % 3 == 0 ) { echo '<div class="clear clear3"></div>'; } ?>

				<?php $count++; endwhile; endif; wp_reset_postdata(); ?>

			</div>

		</div>














<?php if ( false ) { ?>

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


<?php } ?>
		
<?php get_footer(); ?>