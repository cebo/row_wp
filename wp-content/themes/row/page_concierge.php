<?php 
	
	/* Template Name: Concierge */

	get_header();

?>

<section class="contentarea">

	<?php

		if ( have_posts() ) : while ( have_posts() ) : the_post();

			$fullpic = get_post_meta( $post->ID, 'cebo_fullpic', true );
			$imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "Full");

	?>

		<div class="toppage-intro toppage-internationalpress">

			<?php if( $fullpic ) { ?>

				<div class="toppage-image" style="background-image: url(<?php echo $fullpic; ?>);"></div>

			<?php } elseif( $imgsrc ) { ?>

				<div class="toppage-image" style="background-image: url(<?php echo $imgsrc[0]; ?>);"></div>

			<?php } else { ?>

				<div class="toppage-image" style="background-image: url(<?php bloginfo ('template_url'); ?>/images/watermark.jpg);"></div>

			<?php } ?>	

		</div>

		<div class="page-content">
			
			<div class="concierge-top-wrapper">
				<h1><?php the_title(); ?></h1>
				<?php the_content(); ?>
			</div>

			<?php

				$count = 1; 

				$concierge_args = array(
					'post_type' => 'concierge',
				);

				$concierge_query = new WP_Query( $concierge_args );

				if ( $concierge_query->have_posts() ) : while ( $concierge_query->have_posts() ) : $concierge_query->the_post();

					$imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "Full");
					$bigtitle = get_post_meta($post->ID, 'bigtitle', true);

			?>

				<div class="concierge-box box-style-<?php echo $count; ?>">

					<div class="left">

						<div class="wideover overlay">
							<h2 class="h1"><?php the_title(); ?></h2>
							<a href="<?php echo $bigtitle; ?>"></a>
						</div>

						<div class="concierge-box-photo"  style="background-image: url(<?php echo $imgsrc[0]; ?>);"></div>

					</div>

					<div class="right">
						<?php the_content(); ?>
						<a href="<?php echo $bigtitle; ?>"><?php _e('MORE >','row-theme-text'); ?></a>
					</div>

				</div>

			<?php 

				if ( $count == 4 ) { $count = 1; }
				else { $count++; }

				endwhile; endif; wp_reset_postdata();

			?>

		</div>

		<div class="clear"></div>
	
	<?php endwhile; endif; wp_reset_query(); ?>

<?php get_footer(); ?>