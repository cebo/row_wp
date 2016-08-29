<?php 

/* Template Name: Foreign Hotel Page v2

*/
 get_header(); ?>
 

<?php

	$query_args = array(
		'post_type' => 'hotel',
		'posts_per_page' => 1,
		'meta_query' => array(
			array(
				'key' => 'cebo_available_on_header',
				'value' => 'on',
			)
		)
	);

	$query = new wp_query($query_args);

	if($query->have_posts()) : while($query->have_posts()) : $query->the_post();

		$imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "Full");
?>

	<section class="contentarea">

		<div class="home-intro">

			<?php if (get_post_meta($post->ID, 'cebo_fullpic', true)) { ?>

			<div class="stretch" style="background-image: url(<?php echo get_post_meta($post->ID, 'cebo_fullpic', true); ?>);"></div>

			<?php } elseif ($imgsrc) { ?>

			<div class="stretch" style="background-image: url(<?php echo $imgsrc[0]; ?>);"></div>

			<?php } else { ?>

			<div class="stretch" style="background-image: url(<?php bloginfo ('template_url'); ?>/images/watermark.jpg);"></div>

			<?php } ?>

		</div>

		<div class="page-content">

			<h1><?php the_title(); ?></h1>

		</div>

		<ul class="deal-boxes">

				<li class="deal foreign-box">

					<div style="padding-top:0px;" class="deal-wrapper">

						<?php echo the_content(); ?>

					</div>

				</li>

		</ul>

		<div class="clear"></div>

	</section>

<?php endwhile; endif; wp_reset_query(); ?>	

<?php get_footer(); ?>