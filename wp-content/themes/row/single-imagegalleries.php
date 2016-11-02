<?php 

	/* Single Gallery */

	get_header();

?>

	<section class="contentarea">

		<div class="bookingnav-block"></div>

		<div class="flexslider-gallery-js flexslider-gallery-theme flexslider">
			
			<ul class="slides">

				<?php

					$galleryImages = get_post_gallery_imagess(); 
					$imagesCount = count($galleryImages);

					if ( $imagesCount > 0 ) :
					for ( $i = 0; $i < $imagesCount; $i++ ) :
					if ( ! empty( $galleryImages[ $i ] ) ) :

						$attachment_meta_title = get_post( $galleryImages[ $i ]['id'] )->post_excerpt;
						$imgsrc = $galleryImages[ $i ]['full'][0];

				?>

					<li style="background-image: url(<?php echo $imgsrc; ?>);">
						<div class="slide-description"><?php _e( $attachment_meta_title, 'row-theme-text' ); ?></div>
					</li>

				<?php
					endif;
					endfor;
					endif;
				?>

			</ul>

		</div>

		<div class="flexslider-gallery-nav-js flexslider-gallery-nav-theme flexslider">
			
			<ul class="slides">

				<?php

					if ( $imagesCount > 0 ) :
					for ( $i = 0; $i < $imagesCount; $i++ ) :
					if ( ! empty( $galleryImages[ $i ] ) ) :

						$attachment_meta_title = get_post( $galleryImages[ $i ]['id'] )->post_excerpt;
						$imgsrc = $galleryImages[ $i ]['full'][0];

				?>

					<li style="background-image: url(<?php echo $imgsrc; ?>);"><img src="<?php echo $imgsrc; ?>" /></li>

				<?php
					endif;
					endfor;
					endif;
				?>

			</ul>

		</div>

		<div class="gallery-categories">

			<ul>
				<?php

					$currentid = $post->ID;

					query_posts('post_type=imagegalleries&posts_per_page=-1');

					if ( have_posts() ) : while ( have_posts() ) : the_post();

						$thersd = get_the_ID();

				?>

					<li>
						<a style="<?php if( $currentid == $thersd ) { echo 'color: #e51a9b;'; } ?>" href="<?php the_permalink(); ?>"><?php the_title(); ?>
						</a>
					</li>

				<?php endwhile; endif; wp_reset_query(); ?>	

			</ul>

		</div>
 
<?php get_footer(); ?>