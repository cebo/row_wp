<?php 

	/* Single Locations */

	get_header();

?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post();

	$fullbannerpic = get_post_meta( $post->ID, 'cebo_fullbannerpic', true );
	$fullpic = get_post_meta($post->ID, 'cebo_fullpic', true );
	$imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id( $page->ID ), 'full' );
?>

	<section class="contentarea">

		<?php if ( get_post_meta($post->ID, 'cebo_pulled_photos', true ) ) { ?>

			<div id="bosco-box" class="home-intro bosco-box">

				<?php 
					$repeatable_fields = get_post_meta( $post->ID, 'repeatable_fields', true );
					foreach ( $repeatable_fields as $field ) { 
				?>

					<div class="bosco-photo" style="background-image: url(<?php if ($field['url'] != '') echo esc_attr( $field['url'] ); ?>);"></div>

				<?php } ?>

			</div>

		<?php } elseif ( $fullbannerpic ) { ?>

			<div class="toppage-intro">
				<div class="toppage-image" style="background-image: url(<?php echo $fullbannerpic; ?>);"></div>
			</div>

		<?php } elseif ( $fullpic ) { ?>

			<div class="toppage-intro">
				<div class="toppage-image" style="background-image: url(<?php echo $fullpic; ?>);"></div>
			</div>

		<?php } elseif ( $imgsrc ) { ?>

			<div class="toppage-intro">
				<div class="toppage-image" style="background-image: url(<?php echo $imgsrc[0]; ?>);"></div>
			</div>

		<?php } else { ?>

			<div class="toppage-intro">
				<div class="toppage-image" style="background-image: url(<?php bloginfo ('template_url'); ?>/images/watermark.jpg);"></div>
			</div>

		<?php } ?>

		<div class="page-content">

			<div class="amenity-featured-images right">

				<?php if ( get_post_meta( $post->ID, 'cebo_thumbone', true ) ) { ?>

				<div class="amenity-featured-image" style="background-image: url(<?php echo get_post_meta ($post->ID, 'cebo_thumbone', true); ?>);"></div>

				<?php } ?>

				<?php if ( get_post_meta($post->ID, 'cebo_amenity_yelp', true ) ) { ?>

					<a href="<?php echo get_post_meta( $post->ID, 'cebo_amenity_yelp', true ); ?>" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/yelp.png"></a>

				<?php } ?>

			</div>

			<div class="main-page-content left">

				<div class="text-content no-content-sidebar left">

					<?php if ( get_post_meta( $post->ID, 'cebo_titlogo', true ) ) { ?>

						<img class="amenity-logo" src="<?php echo get_post_meta( $post->ID, 'cebo_titlogo', true ); ?>">

					<?php } else { ?>

						<h1><?php the_title(); ?></h1>

					<?php } ?>


					<?php the_content(); ?>


					<?php if ( get_post_meta( $post->ID, 'cebo_details', true ) ) { ?>

						<div class="amenity-features">

							<ul>

								<?php
									$details = get_post_meta( $post->ID, 'cebo_workdetails', true );
									$detailer = explode( ',', $details );

									foreach ( $detailer as $d ) {
	 									echo "<li>" . $d . "</li>";
	 								}
	 							?>

							</ul>

							<ul>

								<?php
									$details = get_post_meta( $post->ID, 'cebo_workdetails', true );
									$detailer = explode( ',', $details );

									foreach ( $detailer as $d ) {
	 									echo "<li>" . $d . "</li>";
	 								}
	 							?>

							</ul>

							<ul>

								<?php
									$details = get_post_meta( $post->ID, 'cebo_workdetails', true );
									$detailer = explode( ',', $details );

									foreach ( $detailer as $d ) {
	 									echo "<li>" . $d . "</li>";
	 								}
	 							?>

	 						</ul>

						</div>

					<?php } ?>

					<div class="wonderline"></div>

					<div class="amenity-contact">

						<?php if ( get_post_meta( $post->ID, 'cebo_hours', true ) ) { ?>

							<div>
								<div class="somespace">
									<?php if ( get_post_meta( $post->ID, 'cebo_hourstitle', true ) ) { ?>
										<h2 class="h4"><?php echo get_post_meta( $post->ID, 'cebo_hourstitle', true ); ?></h2>
									<?php } else { ?>
										<h2 class="h4"><?php _e( 'Hours:', 'row-theme-text' ); ?></h2>
									<?php } ?>
									<p><?php echo get_post_meta ($post->ID, 'cebo_hours', true); ?></p>
								</div>
							</div>

						<?php } ?>

						<?php if ( get_post_meta( $post->ID, 'cebo_contact', true ) ) { ?>

							<div>
								<div class="somespace">
									<?php if( get_post_meta( $post->ID, 'cebo_contacttitle', true ) ) { ?>
										<h2 class="h4"><?php echo get_post_meta ($post->ID, 'cebo_contacttitle', true); ?></h2>
									<?php } else { ?>
										<h2 class="h4"><?php _e( 'Contact:', 'row-theme-text' ); ?></h2>
									<?php } ?>
									<p><?php echo get_post_meta( $post->ID, 'cebo_contact', true ); ?></p>
								</div>
							</div>

						<?php } ?>

						<?php if ( get_post_meta( $post->ID, 'cebo_reserv', true ) ) { ?>

							<div>
								<div class="somespace">
									<?php if ( get_post_meta( $post->ID, 'cebo_reservtitle', true ) ) { ?>
										<h2 class="h4"><?php echo get_post_meta( $post->ID, 'cebo_reservtitle', true ); ?></h2>
									<?php } else { ?>
										<h2 class="h4"><?php _e( 'Reservation:', 'row-theme-text' ); ?></h2>
									<?php } ?>
									<p><?php echo get_post_meta( $post->ID, 'cebo_reserv', true ); ?></p>
								</div>
							</div>

						<?php } ?>

					</div>

				</div>

			</div>

		</div>

		<div class="clear"></div>

<?php endwhile; endif; wp_reset_query(); ?>			

<?php get_footer(); ?>
