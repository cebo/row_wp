<?php 

	/* Template Name: Rooms List Page */

	get_header();

?>

<section class="contentarea">

	<div class="headernav-block-secondary"></div>

	<div class="roomslist-area">

		<?php

			$args = array (
				'post_type' => array( 'rooms' ),
				'suppress_filters' => false,
				'nopaging' => true,
			);

			$query = new WP_Query( $args );

			if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();

				if ( get_post_meta( $post->ID, 'cebo_fullpic', true) ) {
					$imgsrcuse = 'background-image: url(' . get_post_meta( $post->ID, 'cebo_fullpic', true ) . ');';
				} elseif ( $imgsrc ) {
					$imgsrcuse = $imgsrc;
				} else {
					$imgsrcuse = 'background-image: url(' . get_bloginfo('template_url') . '/images/watermark.jpg);';
				}

				$get_permalink = get_site_url() . '/' . ICL_LANGUAGE_CODE . '/hotel-rooms-times-square-new-york/' . $post->post_name;

				if ( get_the_title() == "Penthouse Suites" ) {
					$only = 'roomslist-box-onlybooknow';
				} else {
					$only = '';
				}

		?>

			<div class="roomslist-box <?php echo $only; ?>">

				<div class="roomslist-view">

					<a class="roomslist-image" href="<?php echo $get_permalink; ?>" style="background-image: url(<?php echo $imgsrcuse; ?>);"></a>

					<a class="roomslist-title" href="<?php echo $get_permalink; ?>"><h2><?php the_title(); ?></h2></a>

				</div>

				<div class="roomslist-panel <?php echo $pent; ?>">

					<div class="roomslist-content">

						<?php the_content(); ?>

					</div>

					<div class="clear"></div>

					<?php if ( get_the_title() == "Penthouse Suites" ) { ?>

						<a class="roomslist-link" href="mailto:reservations@rownyc.com"><span><?php _e('Book Now','row-theme-text'); ?></span></a>

					<?php } else {

						if ( get_post_meta($post->ID, 'cebo_booklink', true ) ) {

							$booklink = get_option('cebo_genbooklink') . '/search?selected_room_category=' . get_post_meta($post->ID, 'cebo_room_code', true);

						} else {

							$booklink = get_option('cebo_genbooklink');

						}

					?>

						<a class="roomslist-link roomslist-link-moreinfo" href="<?php echo $get_permalink; ?>"><span><?php _e('More Info','row-theme-text'); ?></span></a>

						<a class="roomslist-link" target="_blank" onclick="_gaq.push(['_link', this.href]);return false;" href="<?php echo $booklink; ?>"><span><?php _e('Book Now','row-theme-text'); ?></span></a>

					<?php } ?>

				</div>

			</div>

		<?php endwhile; endif; wp_reset_postdata(); ?>

	</div>


<?php if ( false ) { ?>

	<section class="contentarea">
			
			<div class="title-div">
				<h1><?php the_title(); ?></h1>
			</div>
						
			<!-- begin rooms -->
			
			
				<?php
					$args = array (
						'post_type'              => array( 'rooms' ),
						'suppress_filters' 		 => false,
						'nopaging' => true,
					);

					$query = new WP_Query( $args );

					if ( $query->have_posts() ) {
						while ( $query->have_posts() ) {
							$query->the_post(); ?>

			<div class="fourth-level">
			
			
				<div class="fullspan" style="">
					
					<div class="suboverlay narrow">
				
						<a href="<?php get_site_url(); ?>/<?php echo ICL_LANGUAGE_CODE; ?>/hotel-rooms-times-square-new-york/<?php the_slug();?>">
							<h2 class="h1"><?php the_title(); ?></h2>
							<!-- <h4><?php echo get_post_meta($post->ID, 'cebo_footage', true); ?> SQ.FT.</h4> -->
						</a>

					
					</div>
					
					
					
					<?php if(get_post_meta($post->ID, 'cebo_fullpic', true)) { ?>
	
					<div class="stretch"  style="background-image: url(<?php echo get_post_meta($post->ID, 'cebo_fullpic', true); ?>);"><a href="<?php the_permalink(); ?>" style="height: 100%; width: 100%;"></a></div>
					
					<?php } elseif($imgsrc) { ?>
					
					
					<div class="stretch"  style="background-image: url(<?php echo $imgsrc[0]; ?>);"><a href="<?php the_permalink(); ?>" style="height: 100%; width: 100%;"></a></div>
					
					<?php } else { ?>
										
					<div class="stretch"  style="background-image: url(<?php bloginfo ('template_url'); ?>/images/watermark.jpg);"><a href="<?php the_permalink(); ?>" style="height: 100%; width: 100%;"></a></div>
					
					
					<?php } ?>							
						
				</div>
					

				<div class="rooms-book-now">

					<div class="left">
						<!-- <h4><?php echo get_post_meta($post->ID, 'cebo_tagline', true); ?>  - <?php echo get_post_meta($post->ID, 'cebo_footage', true); ?>  sq.ft.</h4> -->
					</div>

					
					<div class="right">
					
					<?php if(get_the_title() == "Penthouse Suites") { ?>
					
						<a href="mailto:reservations@rownyc.com"><?php _e('Book Now','row-theme-text'); ?></a>
						
						<?php } else { ?>
						
						<a target="_blank" onclick="_gaq.push(['_link', this.href]);return false;" href="<?php if(get_post_meta($post->ID, 'cebo_booklink', true)) { echo get_option('cebo_genbooklink') . '/search?selected_room_category=' . get_post_meta($post->ID, 'cebo_room_code', true); } else { echo get_option('cebo_genbooklink'); } ?>"><?php _e('Book Now','row-theme-text'); ?></a>



					<?php } ?>
					
					
					</div>
						
				</div>

					<img src="<?php echo $imgsrc[0]; ?>" style="position: absolute; left: -2000px; display: none;" alt="#">

			</div>			
			

			<?php }
					} 

					wp_reset_postdata(); ?>


			<div class="clear"></div>


<?php } ?>
					
<?php get_footer(); ?>