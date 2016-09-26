<?php 

	/* Single Gallery */

	get_header();

?>

	<section class="contentarea">

		<div class="headernav-block-secondary"></div>

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

					<li data-thumb="<?php echo $imgsrc; ?>" style="background-image: url(<?php echo $imgsrc; ?>);">
						<div class="slide-description"><?php _e( $attachment_meta_title, 'row-theme-text' ); ?></div>
					</li>

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


<?php if ( false ) { ?>

	<section class="contentarea">			
		
	<div class="title-div">
		<h1><?php the_title(); ?></h1>
	</div>

		<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
			
							
		<div class="fourth-level room-slider">
		
			<?php if(get_post_meta($post->ID, 'cebo_imagegal_video_repeat', true)) { ?>
				
				<div class="video-container">
					
					<div class="flexslider-gallery flexslider">
						<ul class="slides">
						<?php
							$videohs = get_post_meta($post->ID, 'cebo_imagegal_video_repeat', true);
							foreach ($videohs as $videoh) {
						?>
							<li><iframe style="width: 100%; height: 100%;" src="<?php echo $videoh['video_embed']; ?>" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe></li>
						<?php } ?>
						
						</ul>
					</div>
					
				</div>
			
			<?php } else { ?> 
			
				<div class="flexslider-gallery flexslider">
					<ul class="slides">
						
						<?php $galleryImages = get_post_gallery_imagess(); 
						  $imagesCount = count($galleryImages);
						  
	       			 ?>
	        		<?php if ($imagesCount > 0) : ?>
              		<?php for ($i = 0; $i < $imagesCount; $i++): ?>
                  	<?php if (!empty($galleryImages[$i])) :?>
                  	<?php // $attachment_meta = wp_get_attachment($galleryImages[$i]['id']); ?>
                  	<?php $attachment_meta_title = get_post($galleryImages[$i]['id'])->post_excerpt; ?>

							<li>
								<div class="slide-image" style="background-image:url(<?php echo $galleryImages[$i]['full'][0];?>);"></div>
								<div class="slide-description"><?php _e( $attachment_meta_title, 'row-theme-text' ); ?></div>
							</li>								

						<?php endif; ?>
  					<?php endfor; ?>
					<?php endif; ?>

					</ul>
				</div>
				
			<?php } ?>
				
			<?php endwhile; endif; wp_reset_query(); ?>	

			<div class="gallery-categories">
				<ul>
					
					<?php $currentid = $post->ID; query_posts('post_type=imagegalleries&posts_per_page=-1'); if(have_posts()) : while(have_posts()) : the_post(); ?>
					
					<?php $thersd = $id = get_the_ID(); ?>
					
					
			
					<li><a style="<?php if($currentid == $thersd) { echo 'color: #e51a9b;'; } ?>" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
											
					<?php endwhile; endif; wp_reset_query(); ?>	
				</ul>
			</div>
		
		</div>
		
		
		
		
		
		
		
		<div class="clear"></div>

<?php } ?>		
			
			 
<?php get_footer(); ?>