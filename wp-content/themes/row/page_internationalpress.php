<?php 

	/* Template Name: International Press */

	get_header();

?>


<section class="contentarea">

	<?php

		if ( have_posts() ) : while ( have_posts() ) : the_post();

			$fullpic = get_post_meta( $post->ID, 'cebo_fullpic', true );
			$imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "Full");

			$press_link = get_post_meta( $post->ID, 'cebo_presslink', true );
			$external_link = get_post_meta($post->ID, 'cebo_external_link', true);

	?>

		<div class="toppage-intro toptitle-internationalpress">

			<?php if( $fullpic ) { ?>

				<div class="toppage-image" style="background-image: url(<?php echo $fullpic; ?>);"></div>

			<?php } elseif( $imgsrc ) { ?>

				<div class="toppage-image" style="background-image: url(<?php echo $imgsrc[0]; ?>);"></div>

			<?php } else { ?>

				<div class="toppage-image" style="background-image: url(<?php bloginfo ('template_url'); ?>/images/watermark.jpg);"></div>

			<?php } ?>	

		</div>
						
		<div class="page-content">

			<h1><?php the_title(); ?></h1>

			<?php the_content(); ?>
			
			<?php if ( $press_link ) { ?>

				<div class="button-wrapper" style="margin: 20px 0;">
					<a <?php if ( $external_link ) { echo 'target="_blank"'; } ?> onclick="_gaq.push(['_link', this.href]);return false;" class="button" href="<?php echo $press_link; ?>"><?php _e('Read More','row-theme-text'); ?></a>
				</div>

			<?php } ?>

			<div class="clear"></div>

		</div>
	
	<?php endwhile; endif; wp_reset_query(); ?>
		
	<div class="boxlists-main boxlists-threecol">

		<?php

			$count = 1;

			$international_args = array(
				'post_type' => 'press-releases',
				'posts_per_page' => -1,
				'presstype' => 'international',
				'meta_query' => array(array(
					'key' => 'cebo_featuredpress',
					'compare' => 'NOT EXISTS'
				)),
			);

			$international_query = new WP_Query( $international_args );

			if ( $international_query->have_posts() ) : while ( $international_query->have_posts() ) : $international_query->the_post();

				$fullpic = get_post_meta( $post->ID, 'cebo_fullpic', true );
				$imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "Full");

				if ( $count % 3 == 0 ) { $last = 'last'; }
				else { $last = ''; }

				$press_link = get_post_meta( $post->ID, 'cebo_presslink', true );
				$external_link = get_post_meta($post->ID, 'cebo_external_link', true);

		?>

			<div class="boxlists-box <?php echo $last; ?>">

				<?php if ( $fullpic ) { ?>

					<div class="boxlists-imagebox">
						<div class="boxlists-image" style="background-image: url(<?php echo $fullpic; ?>);"></div>
					</div>

				<?php } elseif ( $imgsrc ) { ?>

					<div class="boxlists-imagebox">
						<div class="boxlists-image" style="background-image: url(<?php echo $fullpic; ?>);"></div>
					</div>

				<?php } else { ?>

					<div class="boxlists-imagebox">
						<div class="boxlists-image" style="background-image: url(<?php bloginfo ('template_url'); ?>/images/watermark.jpg);"></div>
					</div>

				<?php } ?>

				<h2 class="boxlists-title"><?php the_title(); ?></h2>

				<div class="boxlists-content">

					<?php echo wpautop( content2( get_the_content(), 40 ) ); ?>

				</div>

				<?php if ( $press_link ) { ?>

					<div class="boxlists-links">
						<a <?php if ( $external_link ) { echo 'target="_blank"'; } ?> onclick="_gaq.push(['_link', this.href]);return false;" href="<?php echo $press_link; ?>"><?php _e( 'Read More', 'row-theme-text' ); ?></a>
					</div>

				<?php } ?>

			</div>

			<?php if ( $count % 3 == 0 ) { echo '<div class="clear clear3"></div>'; } ?>
			<?php if ( $count % 2 == 0 ) { echo '<div class="clear clear2"></div>'; } ?>

		<?php $count++; endwhile; endif; wp_reset_postdata(); ?>

		<div class="clear"></div>

	</div>


<?php get_footer(); ?>