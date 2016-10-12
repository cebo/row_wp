<?php 

/* Template Name: Deals List

*/
 get_header(); ?>
 
	<section class="contentarea">

		<div class="bookingnav-block"></div>

		<div class="contentarea-container">

			<div class="toptitle-area">
				
				<h1><?php _e('Special Offers','row-theme-text'); ?></h1>

				<div class="toptitle-description">
					
					<?php echo wpautop( content2( get_the_content(), null, '<p><br><span><a>' ) ); ?>

				</div>

			</div>

			<div class="boxlists-main boxlists-threecol boxlists-dealspage">

				<?php

					$count = 1;

					query_posts(array(
						'post_type' => 'specials',
						// 'offset' => 1,
						'meta_query' => array(
							array(
								'key' => 'cebo_available_on_header',
								'compare' => 'NOT EXISTS'
							)
						)
					));

					if ( have_posts() ) : while ( have_posts() ) : the_post();

						$title = get_the_title();
						$slug_comp = sanitize_title($title);

						$fullpic = get_post_meta( $post->ID, 'cebo_fullpic', true );
						$imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "Full" );

						$pricepoint = get_post_meta( $post->ID, 'cebo_pricepoint', true );

						if ( $fullpic ) {
							$image = $fullpic;
						} elseif ( $imgsrc ) {
							$image = $imgsrc[0];
						} else {
							$image = get_bloginfo('template_url') . '/images/watermark.jpg';
						}

						if ( $count % 3 == 0 ) { $last = 'last'; }
						else { $last = ''; }

						if ( $count % 2 == 0 ) { $last .= ' right'; }
						else { $last .= ' left'; }

				?>

				<div class="boxlists-box <?php echo $last; ?>">

					<div class="boxlists-imagebox">
						<?php if ( $pricepoint && $pricepoint != '' ) { ?>
							<div class="boxlists-offersign"><?php echo $pricepoint; ?></div>
						<?php } ?>
						<div class="boxlists-image" style="background-image: url(<?php echo $image; ?>);"></div>
					</div>

					<?php

						if ( $slug_comp == '5-cash-back' ) {

							$learnmore = get_post_meta( $post->ID, 'cebo_learnmore_url', true );
							$subtagline = get_post_meta( $post->ID, 'cebo_subtagline', true );

					?>

						<h2 class="boxlists-title"><?php echo $subtagline; ?></h2>
						<div class="boxlists-content">

							<?php echo wpautop ( content2( get_the_content(), 40, '<p><img><span>' ) ); ?>

							<div id="theguestbook_widget"></div>
							<div class="wonder-vertical"></div>

						</div>

						<div class="boxlists-links">
							<a href="<?php if ( $learnmore ) { echo $learnmore; } else { the_permalink(); } ?>"><?php _e('Read More','row-theme-text'); ?></a>

							<input type="button" class="boxlists-enroll theguestbook-email-submit-input" value="<?php _e('Enroll','row-theme-text'); ?>">
						</div>

					<?php } else {

						$shordesc = get_post_meta( $post->ID, 'cebo_specialshortdesc', true );
						$booklink = get_post_meta( $post->ID, 'cebo_booklink', true );
						$learnmore = get_post_meta( $post->ID, 'cebo_learnmore_url', true );

					?>

						<h2 class="boxlists-title"><?php the_title(); ?></h2>
						<div class="boxlists-content">

							<?php
								if ( $shordesc ) { 
									echo wpautop ( content2( $shordesc, null, '<p><img><span>' ) );
								} else {
									echo wpautop ( content2( get_the_content(), 40, '<p><img><span>' ) );
								}
							?>

						</div>

						<div class="boxlists-links">
							<a onclick="_gaq.push(['_link', this.href]);return false;" href="<?php if ( $booklink ) { echo $booklink; } else { the_permalink(); } ?>"><?php _e('Book Now','row-theme-text'); ?></a>
							<a class="boxlists-moreinfo" href="<?php if ( $learnmore ) { echo $learnmore; } else { the_permalink(); } ?>"><?php _e('More Info','row-theme-text'); ?></a>
						</div>

					<?php } ?>

				</div>

				<?php

					if ( $count % 3 == 0 ) { echo '<div class="clear clear3"></div>'; }
					if ( $count % 2 == 0 ) { echo '<div class="clear clear2"></div>'; }

				?>

				<?php $count++; endwhile; endif; wp_reset_query(); ?>

				<div class="clear"></div>

			</div>

		</div>







<?php if ( false ) { ?>

<?php
	
	query_posts(
		array(
			'post_type' => 'specials',
			'posts_per_page' => 1,
			'meta_query' => array(
				array(
					'key' => 'cebo_available_on_header',
					'value' => 'on',
				)
			)
		)
	);

	if(have_posts()) : while(have_posts()) : the_post();
?>


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

		<div class="page-content">

			<h1><?php the_title(); ?></h1>

			<?php the_content(); ?>


			<div class="button-wrapper" style="margin: 20px 0;"><a onclick="_gaq.push(['_link', this.href]);return false;" class="button" href="<?php if(get_post_meta($post->ID, 'cebo_booklink', true)) { echo get_post_meta($post->ID, 'cebo_booklink', true); } else { the_permalink(); } ?>"><?php _e('Reserve Now','row-theme-text'); ?></a></div>

			<div class="clear"></div>

		</div>


<?php endwhile; else : ?>


	<section class="contentarea">

		<div class="title-div">
			<h1><?php _e('Special Offers','row-theme-text'); ?></h1>
		</div>


<?php endif; wp_reset_query(); ?>


		<ul class="deal-boxes">

			<?php

				$count = 1;

				query_posts(
					array(
						'post_type' => 'specials',
						// 'offset' => 1,
						'meta_query' => array(
							array(
								'key' => 'cebo_available_on_header',
								'compare' => 'NOT EXISTS'
							)
						)
					)
				);

				if(have_posts()) : while(have_posts()) : the_post();

					$title = get_the_title();
					$slug_comp = sanitize_title($title); 

			?>

				<li class="deal deal-no-min-max-height">


					<?php if(get_post_meta($post->ID, 'cebo_fullpic', true)) { ?>


					<div class="deal-photo" style="background-image: url(<?php echo get_post_meta($post->ID, 'cebo_fullpic', true); ?>);"></div>

					<?php } elseif($imgsrc) { ?>


					<div class="deal-photo" style="background-image: url(<?php echo $imgsrc[0]; ?>);"></div>

					<?php } else { ?>

					<div class="deal-photo" style="background-image: url(<?php bloginfo ('template_url'); ?>/images/watermark.jpg);"></div>


					<?php } ?>

					<?php if( $slug_comp == '5-cash-back' ) { ?>

						<div class="deal-wrapper">

							<h2 class="h1"><?php echo get_post_meta($post->ID, 'cebo_subtagline', true); ?></h2>

							<p><?php echo content(25); ?></p>

							<div id="theguestbook_widget"></div>

							<div class="wonder-vertical"></div>

						</div>

					<div class="button-wrapper">
						<a class="button" href="<?php if(get_post_meta($post->ID, 'cebo_learnmore_url', true)) { echo get_post_meta($post->ID, 'cebo_learnmore_url', true); } else { the_permalink(); } ?>"><?php _e('Read More','row-theme-text'); ?></a>
						<input style="margin-top: -1px; padding: 10px 37px; background: #fff; color: #000; border: 1px solid #000;" class="theguestbook-email-submit-input button" type="button" value="<?php _e('Enroll','row-theme-text'); ?>">
					</div>

					<?php } else { ?> 

					<div class="deal-wrapper deal-wrapper-no-height">

						<h2 class="h1"><?php the_title(); ?></h2>

						<?php if(get_post_meta($post->ID, 'cebo_specialshortdesc', true)) { ?>
							<?php echo get_post_meta($post->ID, 'cebo_specialshortdesc', true); ?>
						<?php } else { ?>
							<p><?php echo content(40); ?></p>
						<?php } ?>

						<div class="wonder-vertical"></div>

					</div>

					<div class="button-wrapper">
						<a onclick="_gaq.push(['_link', this.href]);return false;" class="button" href="<?php if(get_post_meta($post->ID, 'cebo_booklink', true)) { echo get_post_meta($post->ID, 'cebo_booklink', true); } else { the_permalink(); } ?>"><?php _e('Book Now','row-theme-text'); ?></a>
						<a class="button moreinfo" href="<?php if(get_post_meta($post->ID, 'cebo_learnmore_url', true)) { echo get_post_meta($post->ID, 'cebo_learnmore_url', true); } else { the_permalink(); } ?>"><?php _e('More Info','row-theme-text'); ?></a>
					</div>

					<?php } ?>

				</li>

				<?php if ( $count % 3 == 0 ) { echo '<div class="clear clear3"></div>'; } ?>

				<?php $count++; endwhile; endif; wp_reset_query(); ?>	

			</ul>

		<div class="clear"></div>

<?php } ?>

<?php get_footer(); ?>