<?php
	
	get_header();

?>

	<section class="contentarea">

		<div class="home-intro">

			<div id="owl-example" class="owl-carousel home-intro-theme">

				<?php

					if ( 
						have_rows('homepage_gallery_repeater', 'options') ) : 
						$i = 1;
						while ( have_rows('homepage_gallery_repeater', 'options') ) : the_row();

						$imgsrc = get_sub_field('image');
						$title = get_sub_field('title');
						$description = get_sub_field('description');
						$dark_overlay = get_sub_field('dark_overlay');
						$link_text = get_sub_field('link_text');
						$open_in_new_tab = get_sub_field('open_in_new_tab');

						$link_select = get_sub_field('link_select');

						$link = '';
						if ( $link_select == 'page_link' ) { $link = get_sub_field('link_page'); }
						elseif ( $link_select == 'custom_link' ) { $link = get_sub_field('link'); }

						$target = '';
						if ( $open_in_new_tab == 'yes' ) { $target = 'target="_blank"'; }

				?>

					<div class="owl-block" style="background-image: url(<?php echo $imgsrc['sizes']['customSize_soft_1024xany']; ?>);">
						
						<?php if ( $dark_overlay == 'yes' ) { ?><div class="owl-overlay"></div><?php } ?>

						<div class="table-parent">
						<div class="table-child">
							<?php if($i == 1) { ?>
								<?php echo ($title) ? '<h1>' . $title . '</h1>' : ''; ?>
							<?php } else { ?>
								<?php echo ($title) ? '<h2>' . $title . '</h2>' : ''; ?>
							<?php } ?>
							<?php echo ($description) ? $description : ''; ?>
							<?php if ( $link_select != 'disable_link' ) { ?>
								<a <?php echo $target; ?> class="owl-block-link" href="<?php echo $link; ?>"><?php echo $link_text; ?></a>
							<?php } ?>
						</div>
						</div>
					</div>

				<?php $i++; endwhile; endif; ?>

			</div>

		</div>

		<div class="below-intro">

			<div class="intro-box left">

				<?php

					if ( have_rows('homepage_page_section_repeater', 'options') ) : while ( have_rows('homepage_page_section_repeater', 'options') ) : the_row();

						$page = get_sub_field('page_select');
						$title = get_sub_field('title');
						$link_select = get_sub_field('link_select');
						$open_in_new_tab = get_sub_field('open_in_new_tab');
						$link = get_sub_field('link');
						$link_text = get_sub_field('link_text');

						if ( $title && $title != '' ) {}
						else { $title = $page->post_title; }

						if ( $link_select == 'page_link' ) { $link_use = get_permalink( $page->ID ); }
						else { $link_use = $link; }

						$target = '';
						if ( $open_in_new_tab == 'yes' ) { $target = 'target="_blank"'; }

				?>

				<div class="intro-pages">

					<h2><?php echo $title; ?></h2>

					<?php echo wpautop( content2( $page->post_content, 50 ) ); ?>

					<a <?php echo $target; ?> href="<?php echo $link_use; ?>">
						<?php
							if ( $link_text && $link_text != '' ) { echo $link_text; }
							else { _e( 'Read more', 'row-theme-text' ); }
						?>
					</a>

				</div>

				<?php endwhile; endif; ?>

			</div>

			<div class="intro-box right">

				<ul class="intro-iconamenities">

					<?php

						$title = get_field('homepage_amenities_list_title', 'options');

						if ( $title && $title != '' ) { ?>

						<h2><?php echo $title; ?></h2>

					<?php } ?>

					<?php

						if ( have_rows('homepage_amenities_list_item_repeater', 'options') ) : while ( have_rows('homepage_amenities_list_item_repeater', 'options') ) : the_row();

							$type = get_sub_field('type');
							$text = get_sub_field('text');
							$link_select = get_sub_field('link_select');

					?>

						<?php if ( $type == 'text' ) {

							$icon = get_sub_field('icon');
						?>
					
							<li class="intro-amen-ico-<?php echo $icon; ?>">
								<div class="table-parent"><div class="table-child"><span><?php echo $text; ?></span></div></div>
							</li>

						<?php } elseif ( $type == 'link' ) {

							$open_in_new_tab = get_sub_field('open_in_new_tab');

							$target = '';
							if ( $open_in_new_tab == 'yes' ) { $target = 'target="_blank"'; }

							if ( $link_select == 'page_link' ) { $link = get_sub_field('link_page'); }
							else { $link = get_sub_field('link'); }

						?>

							<li>
								<div class="table-parent"><div class="table-child"><a <?php echo $target; ?> href="<?php echo $link; ?>"><?php echo $text; ?></a></div></div>
							</li>

						<?php } ?>

					<?php endwhile; endif; ?>

				</ul>

				<div class="intro-showamenities boxlists-twocol boxlists-showamen">

					<?php

						$count = 1;

						if ( have_rows('homepage_specials_page_select_repeater', 'options') ) : while ( have_rows('homepage_specials_page_select_repeater', 'options') ) : the_row();

							$page = get_sub_field('page_select');

							$title = $page->post_title;
							$content = $page->post_content;

							$moreinfo = get_permalink( $page->ID );
							$booklink = get_post_meta( $page->ID, 'cebo_booklink', true );

							$pricepoint = get_post_meta( $page->ID, 'cebo_pricepoint', true );

							$fullpic = get_post_meta( $page->ID, 'cebo_fullpic', true );
							$imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id( $page->ID ), 'customSize_soft_600xany' )[0];

							if ( $fullpic ) {
								$image = $fullpic;
							} else {
								$image = $imgsrc[0];
							}

							if ( $count % 2 == 0 ) { $addclass = 'right'; }
							else { $addclass = 'left'; }

					?>

						<div class="boxlists-box <?php echo $addclass; ?>">
							<div class="boxlists-imagebox">
								<?php if ( $pricepoint && $pricepoint != '' ) { ?>
									<div class="boxlists-offersign"><?php echo $pricepoint; ?></div>
								<?php } ?>
								<div class="boxlists-image" style="background-image: url(<?php echo $image; ?>);"></div>
							</div>

							<h2 class="boxlists-title"><?php echo $title; ?></h2>

							<div class="boxlists-content">

								<?php echo wpautop( content2( $content, 50 ) ); ?>

							</div>

							<div class="boxlists-links">
								<?php if ( $booklink ) { ?>
									<a href="<?php echo $booklink; ?>"><?php _e( 'Book Now', 'row-theme-text' ); ?></a>
								<?php } ?>
								<div class="boxlists-separate"></div>
								<a class="boxlists-moreinfo" href="<?php echo $moreinfo; ?>"><?php _e( 'More Info', 'row-theme-text' ); ?></a>
							</div>
						</div>

					<?php $count++; endwhile; endif; ?>

				</div>

			</div>

		</div>

		<div class="home-features">

			<?php

				$count = 1;

				if ( have_rows('homepage_featured_pages_repeater', 'options') ) : while ( have_rows('homepage_featured_pages_repeater', 'options') ) : the_row();

					$box_size = get_sub_field('box_size');
					$box_type = get_sub_field('box_type');

					$page = get_sub_field('page_select');
					$imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id( $page->ID ), 'customSize_soft_1024xany' )[0];

					$title = get_sub_field('title');
					$content = get_sub_field('description');
					$image = get_sub_field('image');

					if(get_sub_field('page_or_external') == 'page') {
						$link = get_permalink( $page->ID );
					} else {
						if(get_sub_field( 'external_link' )) {
							$link = get_sub_field( 'external_link' );
						} else {
							$link = false;
						}						
					}					

					$enable_button = get_sub_field('enable_button');
					$button_select = get_sub_field('button_select');
					$button_page_select = get_sub_field('button_page_select');
					$button_link = get_sub_field('button_link');
					$button_link_text = get_sub_field('button_link_text');
					$open_button_in_new_tab = get_sub_field('open_button_in_new_tab');

					if ( $title && $title != '' ) {}
					else { $title = $page->post_title; }

					if ( $content && $content != '' ) {}
					else { $content = $page->post_content; }

					if ( $image && $image != '' ) { $image = $image['url']; }
					else { $image = $imgsrc; }

					if ( $box_size == 'half' ) { $addclass = 'feature-box-half'; }
					elseif ( $box_size == 'full' ) { $addclass = 'feature-box-full'; }

					if ( $button_select == 'page_link' ) {
						$button_save_link = $button_page_select;
					} elseif ( $button_select == 'custom_link' ) {
						$button_save_link = $button_link;
					}

					$target = '';
					if ( $open_button_in_new_tab == 'yes' ) { $target = 'target="_blank"'; }

					if ( $box_type == 'normal' ) {

						if ( $count % 2 == 0 ) { $addclass .= ' right'; }
						else { $addclass .= ' left'; }

						$addclass .= ' feature-box-normal';

			?>

				<div class="<?php echo $addclass; ?>">

					<?php if ( $enable_button == 'yes' ) { ?>
						<div class="feature-box-linkbox">
							<a <?php echo $target; ?> href="<?php echo $button_save_link; ?>">
								<?php
									if ( $button_link_text && $button_link_text != '' ) { echo $button_link_text; } 
									else { _e( 'Read more', 'row-theme-text' ); }
								?>
							</a>
						</div>
					<?php } ?>

					<a class="feature-box-link" href="<?php echo $link; ?>" <?php echo (get_sub_field( 'external_link' )) ? 'target="_blank"' : ''; ?>>

						<div class="feature-box-overlay"></div>

						<div class="feature-box-image" style="background-image: url(<?php echo $image; ?>);"></div>

						<div class="feature-content">
							<h2><?php echo $title; ?></h2>
							<?php echo wpautop( content2( $content ) ); ?>
						</div>

					</a>

				</div>

			<?php $count++; } elseif ( $box_type == 'getcontent' ) {

				$addclass .= ' feature-box-getcontent';

			?>

				<div class="<?php echo $addclass; ?>">

					<div class="feature-box-image" style="background-image: url(<?php echo $image; ?>);"></div>
					
					<h2><?php echo $title; ?></h2>

					<div class="feature-content">
						
						<?php echo wpautop( $content ); ?>

					</div>

				</div>

			<?php $count = 0; } endwhile; endif; ?>

		</div>

<?php get_footer(); ?>
