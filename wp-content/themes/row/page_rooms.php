<?php 

	/* Template Name: Rooms List Page */

	get_header();

?>

<section class="contentarea">

	<div class="bookingnav-block"></div>

	<div class="roomslist-area">

		<?php

			$args = array (
				'post_type' => array( 'rooms' ),
				'suppress_filters' => false,
				'nopaging' => true,
			);

			$query = new WP_Query( $args );

			if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();

				$roomspage_content = get_field('roomspage_content', $post->ID );
				$enable_more_info = get_field( 'roomsdetail_enable_more_info', $post->ID );
				$enable_book_now = get_field( 'roomsdetail_enable_book_now', $post->ID );
				$book_now_text = get_field( 'roomsdetail_book_now_text', $post->ID );

				$fullpic = get_post_meta( $post->ID, 'cebo_fullpic', true);

				if ( $fullpic ) { $image = $fullpic; }
				elseif ( $imgsrc ) { $image = $imgsrc; }
				else { $image = get_bloginfo('template_url') . '/images/watermark.jpg);'; }

				if ( $enable_more_info == 'yes' && ( $enable_book_now == 'roomspage_only' || $enable_book_now == 'roomspage_and_roomsdetail' ) ) {

					$only = '';
					if ( $book_now_text == 'contact_reservations' ) { $only .= ' roomslist-box-contact-reserve-text'; }

				} elseif ( $enable_more_info == 'yes' ) {

					$only = 'roomslist-box-moreinfo-only';

				} elseif ( $enable_book_now == 'roomspage_only' || $enable_book_now == 'roomspage_and_roomsdetail' ) {

					$only = 'roomslist-box-booknow-only';
					if ( $book_now_text == 'contact_reservations' ) { $only .= ' roomslist-box-contact-reserve-text'; }

				} else {

					$only = 'roomslist-box-nolinks';

				}

		?>

			<div class="roomslist-box <?php echo $only; ?>">

				<div class="roomslist-view">

					<?php if ( $enable_more_info == 'yes' ) { ?>

						<a class="roomslist-image" href="<?php the_permalink(); ?>" style="background-image: url(<?php echo $image; ?>);"></a>

					<?php } else { ?>

						<a class="roomslist-image roomslist-image-nocursor" href="#" onClick='return false;' style="background-image: url(<?php echo $image; ?>);"></a>

					<?php } ?>

					<a class="roomslist-title roomslist-title-desktop" href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>

				</div>

				<div class="roomslist-panel">

					<h2 class="roomslist-title roomslist-title-mobile"><?php the_title(); ?></h2>

					<div class="roomslist-content">

						<?php
							if ( $roomspage_content && $roomspage_content != '' ) { echo $roomspage_content; }
							else { the_content(); }
						?>

					</div>

					<div class="clear"></div>

					<?php if ( $enable_more_info == 'yes' ) { ?>

						<a class="roomslist-link roomslist-link-moreinfo" href="<?php the_permalink(); ?>"><span><?php _e( 'More Info', 'row-theme-text' ); ?></span></a>

					<?php } ?>

					<?php

						if ( $enable_book_now == 'roomspage_only' || $enable_book_now == 'roomspage_and_roomsdetail' ) {

								$book_now_link = get_field( 'roomsdetail_book_now_link', $post->ID );

								$booknow_target = '';
								$book_now_open_in_new_tab = get_field( 'roomsdetail_book_now_open_in_new_tab', $post->ID );
								if ( $book_now_open_in_new_tab == 'yes' ) { $booknow_target = 'target="_blank"'; }

					?>

						<a <?php echo $booknow_target; ?> class="roomslist-link" target="_blank" onclick="_gaq.push(['_link', this.href]);return false;" href="<?php echo $book_now_link; ?>">
							<span>
								<?php
									if ( $book_now_text == 'contact_reservations' ) { _e( 'Contact Reservations', 'row-theme-text' ); } else { _e( 'Book Now', 'row-theme-text' ); }
								?>
							</span>
						</a>

					<?php } ?>

				</div>

			</div>

		<?php endwhile; endif; wp_reset_postdata(); ?>

	</div>
					
<?php get_footer(); ?>