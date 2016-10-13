<?php 

	/* Basic Single Post Template */

	get_header();

?>


<?php

	if ( have_posts() ) : while( have_posts() ) : the_post();

		$fullpic = get_post_meta( $post->ID, 'cebo_fullpic', true );
		$imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "Full");

		$title = get_the_title();
		$slug_comp = sanitize_title($title); 
		$booklink = get_post_meta( $post->ID, 'cebo_booklink', true );
		$inner_content = get_field( 'specialsdetail_inner_content', $post->ID );

		$nobooklink = '';
		if ( ! $booklink ) { $nobooklink = 'single-specials-box-nobooklink'; }

?>

	<section class="contentarea">

		<div class="bookingnav-block"></div>

		<div class="toppage-intro">

			<?php if ( $fullpic ) { ?>

				<div class="toppage-image"  style="background-image: url(<?php echo $fullpic; ?>);"></div>

			<?php } elseif ( $imgsrc ) { ?>

				<div class="toppage-image"  style="background-image: url(<?php echo $imgsrc[0]; ?>);"></div>

			<?php } else { ?>

				<div class="toppage-image"  style="background-image: url(<?php bloginfo ('template_url'); ?>/images/watermark.jpg);"></div>

			<?php } ?>

		</div>

		<div class="contentarea-container contentarea-container-singlespecials">

			<div class="toptitle-area toptitle-singlespecials">

				<h1><?php the_title(); ?></h1>

			</div>

			<div class="single-specials-box <?php echo $nobooklink; ?>">

				<?php

					if ( $slug_comp == '5-cash-back' ) {

						$subtagline = get_post_meta( $post->ID, 'cebo_subtagline', true );

				?>

					<div class="single-specials-content">

						<?php the_content(); ?>

						<div id="theguestbook_widget"></div>

					</div>

				<?php } else { ?>

					<?php if ( $booklink ) { ?>
						<div class="single-specials-links">
							<a onclick="_gaq.push(['_link', this.href]);return false;" href="<?php echo $booklink; ?>"><?php _e('Book Now','row-theme-text'); ?></a>
						</div>
					<?php } ?>

					<div class="single-specials-content">

						<?php the_content(); ?>

					</div>

					<?php if ( $inner_content ) { ?>

						<div class="single-specials-content">

							<?php echo $inner_content; ?>

						</div>

					<?php } ?>

				<?php } ?>

			</div>

		</div>

<?php endwhile; endif; wp_reset_query(); ?>	





<?php if ( false ) { ?>

	<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
	
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

		<?php 

			$title = get_the_title();
			$slug_comp = sanitize_title($title); 

		?>		
						
		<div class="page-content alt-page-content">

			<?php if( $slug_comp == '5-cash-back' ) { ?>
				
				<h1><?php echo get_post_meta($post->ID, 'cebo_subtagline', true); ?></h1>
					<?php the_content(); ?>

				<div id="theguestbook_widget"></div>

			<?php } else { ?>

				<h2 class="h1"><?php the_title(); ?></h2>
					<?php the_content(); ?>
				
				<div class="clear"></div>

				<div class="button-wrapper" style="margin: 20px 0;"><a onclick="_gaq.push(['_link', this.href]);return false;" class="button" href="<?php if(get_post_meta($post->ID, 'cebo_booklink', true)) { echo get_post_meta($post->ID, 'cebo_booklink', true); } else { the_permalink(); } ?>"><?php _e('Book Now','row-theme-text'); ?></a></div>

				<div class="clear"></div>

			<?php } ?>

		</div>
		
		
		
		
		<div class="clear"></div>
		
		<?php endwhile; endif; wp_reset_query(); ?>	

<?php } ?>
					
<?php get_footer(); ?>