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

				<div class="boxlists-box left">

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

						$fullpic = get_post_meta( $post->ID, 'cebo_fullpic', true );
						$imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "Full");

						if ( $count % 3 == 0 ) { $last = 'last'; }
						else { $last = ''; }

						if ( $count % 2 == 0 ) { $last .= ' right'; }
						else { $last .= ' left'; }

				?>

					<div class="boxlists-box <?php echo $last; ?>">

						<?php if ( $fullpic ) { ?>

							<div class="boxlists-imagebox">
								<div class="boxlists-image" style="background-image: url(<?php echo $fullpic; ?>);"></div>
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

					<?php

						if ( $count % 3 == 0 ) { echo '<div class="clear clear3"></div>'; }
						if ( $count % 2 == 0 ) { echo '<div class="clear clear2"></div>'; }

					?>

				<?php $count++; endwhile; endif; wp_reset_postdata(); ?>

				<div class="clear"></div>

			</div>

		</div>

<?php get_footer(); ?>