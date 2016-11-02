<?php 

	/* Single Rooms */
	
	get_header();

	$acf_fields = get_fields( $post->ID );

	$gallery_repeater = $acf_fields['roomsdetail_gallery_repeater'];

?>

<?php
	
	if ( have_posts() ) : while ( have_posts() ) : the_post();

		$imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "Full" );

		$enable_book_now = get_field( 'roomsdetail_enable_book_now', $post->ID );
		$book_now_text = get_field( 'roomsdetail_book_now_text', $post->ID );

?>

	<section class="contentarea">

		<div class="bookingnav-block"></div>

		<div class="toppage-intro toppage-flexslider-backgroundimage toppage-singlerooms">

			<?php if ( $gallery_repeater ) { ?>
			
				<div class="flexslider-js flexslider">

					<ul class="slides">

						<?php foreach ( $gallery_repeater as $gallery ) : ?>

							<li class="toppage-image" style="background-image: url(<?php echo $gallery['image']['url']; ?>)"></li>

						<?php endforeach; ?>

					</ul>

				</div>

			<?php } else { ?>

				<div class="toppage-image" style="background-image: url(<?php echo $imgsrc[0]; ?>)"></div>

			<?php } ?>

			<h1 class="roomssingle-title roomssingle-title-desktop"><?php the_title(); ?></h1>

			<?php

				$only = '';
				if ( ! ( $enable_book_now == 'roomsdetail_only' || $enable_book_now == 'roomspage_and_roomsdetail' ) ) {
					$only = 'roomssingle-panel-nolink';
				}

			?>

			<div class="roomssingle-panel <?php echo $only; ?>">

				<h1 class="roomssingle-title roomssingle-title-mobile"><?php the_title(); ?></h1>

				<div class="roomssingle-content">

					<?php the_content(); ?>

				</div>

				<div class="clear"></div>

				<?php

					if ( $enable_book_now == 'roomsdetail_only' || $enable_book_now == 'roomspage_and_roomsdetail' ) {

						$book_now_link = get_field( 'roomsdetail_book_now_link', $post->ID );

						$booknow_target = '';
						$book_now_open_in_new_tab = get_field( 'roomsdetail_book_now_open_in_new_tab', $post->ID );
						if ( $book_now_open_in_new_tab == 'yes' ) { $booknow_target = 'target="_blank"'; }

				?>

					<a <?php echo $booknow_target; ?> class="roomssingle-link" target="_blank" onclick="_gaq.push(['_link', this.href]);return false;" href="<?php echo $book_now_link; ?>">
						<span>
							<?php
								if ( $book_now_text == 'contact_reservations' ) { _e('Contact Reservations','row-theme-text'); }
								else { _e('Book Now','row-theme-text'); }
							?>
						</span>
					</a>

				<?php } ?>

			</div>

		</div>

		<div class="browselist-box browselist-singlerooms">

			<?php 

				$room_page = get_pages(array(
					'meta_key' => '_wp_page_template',
					'meta_value' => 'page_rooms.php'
				));

				$backlink = get_permalink( $room_page[0]->ID );

			?>
				
			<div class="browselist-back"><a href="<?php echo $backlink; ?>"><i class="fa fa-chevron-left"></i>Back</a></div>

			<ul class="browselist-links">

				<li class="browselist-title">Room Types:</li>

				<?php

					$current_id = get_the_ID();

					$rooms_args = array(
						'post_type' => 'rooms',
						'posts_per_page' => -1,
						'nopaging' => true,
					);

					$rooms_query = new WP_Query( $rooms_args );

					if ( $rooms_query->have_posts() ) : while ( $rooms_query->have_posts() ) : $rooms_query->the_post();

						$loop_id = get_the_ID();

						if ( $current_id == $loop_id ) { $addclass = 'active'; }
						else { $addclass= ''; }

				?>

					<li><a class="<?php echo $addclass; ?>" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>

				<?php endwhile; endif; wp_reset_postdata(); ?>

			</ul>

		</div>

		<?php

			$list_column_flexible = $acf_fields['roomsdetail_list_column_flexible'];

			// Push array according by column

			$first_col = array();
			$second_col = array();
			$third_col = array();

			if ( $list_column_flexible ) {

				foreach ( $list_column_flexible as $flex ) {

					if ( $flex['placement'] == 'first_col' ) {

						array_push( $first_col, $flex );

					} elseif ( $flex['placement'] == 'second_col' ) {

						array_push( $second_col, $flex );

					} elseif ( $flex['placement'] == 'third_col' ) {

						array_push( $third_col, $flex );

					}

				}

			}

			// Check how many columns are used

			$check = 0;
			$addclass = '';

			if ( count( $first_col ) > 0 ) { $check++; }
			if ( count( $second_col ) > 0 ) { $check++; }
			if ( count( $third_col ) > 0 ) { $check++; }

			if ( $check == 2 ) { $addclass = 'roomsdetail-box-twoway'; }
			elseif ( $check == 3 ) { $addclass = 'roomsdetail-box-threeway'; }

		?>

		<div class="roomsdetail-box <?php echo $addclass; ?>">

			<?php

				// START function roomsdetail()

				function roomsdetail( $col_array ) {

					foreach ( $col_array as $col ) :

						if ( $col['acf_fc_layout'] == 'roomsdetail_list_content' ) :

			?>

				<div class="roomsdetail-list-content">
				
					<h2><?php echo $col['title']; ?></h2>

					<ul>
						<?php foreach ( $col['list_item_repeater'] as $list_item ) : ?>
							<li><?php echo $list_item['text'] ?></li>
						<?php endforeach; ?>
					</ul>

				</div>

			<?php elseif ( $col['acf_fc_layout'] == 'roomsdetail_feature_list_content' ) : ?>

				<div class="roomsdetail-feature-list-content">

					<h2><?php echo $col['title']; ?></h2>

					<ul>
						<?php foreach ( $col['list_item_repeater'] as $list_item ) : ?>
							<li class="roomsdetail-icon-<?php echo $list_item['icon']; ?>"><?php echo $list_item['text'] ?></li>
						<?php endforeach; ?>
					</ul>

				</div>

			<?php
				
				endif; endforeach; }

				// END function roomsdetail()

			?>

			<?php if ( count( $first_col ) > 0 ) { ?>

				<div class="roomsdetail-col">

					<?php roomsdetail( $first_col ); ?>

				</div>

			<?php } ?>

			<?php if ( count( $second_col ) > 0 ) { ?>

				<div class="roomsdetail-col">

					<?php roomsdetail( $second_col ); ?>

				</div>

			<?php } ?>

			<?php

				if ( count( $third_col ) > 0 ) {

					if ( $check == 3 ) {

						echo '<div class="clear clear2"></div>';
						$last = 'last';

					} else {

						$last = '';

					}

			?>

				<div class="roomsdetail-col <?php echo $last; ?>">

					<?php roomsdetail( $third_col ); ?>

				</div>

			<?php } ?>

		</div>

<?php endwhile; endif; wp_reset_query(); ?>
			 
<?php get_footer(); ?>