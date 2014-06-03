<?php 

/* Basic Single Post Template 

*/
 

include(TEMPLATEPATH . '/header_alt.php'); ?>
	
	<div class="wrapper">
		
		<?php include(TEMPLATEPATH . '/bloginfo/filter.php'); ?>
		

		<section class="midsect"> 
			
			<div class="container">
				
				<div class="leftcolumn">
					
					<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
						<?php $attachments = get_children(
					    array(
					        'post_type' => 'attachment',
					        'post_mime_type' => 'image',
					        'post_parent' => $post->ID
					    ));
					
					$imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "Full");
					
					
					?>

					
						<div class="postfull">
						
						<div class="authorsection">
							<div class="authavi" style="background-image:url(<?php echo get_avatar_url ( get_the_author_meta('ID'), $size = '50' ); ?>);">
								<a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"></a>
							</div>
							
							<p class="firstp">By<span><?php the_author_meta('display_name'); ?></span></p>
							
							<p>Photo By<span><?php if(get_post_meta($post->ID, 'imagelink', $single = true)) { ?>
			       				<a href="<?php echo get_post_meta($post->ID, 'imagelink', $single = true); ?>" target="_blank">
			       				<?php } ?>
			       				
			       				<?php echo get_post_meta($post->ID, 'imagecred', $single = true); ?>
			       				
			       				<?php if(get_post_meta($post->ID, 'imagelink', $single = true)) { ?>
			       				</a>
			       				<? } ?></span></p>
							
							<div class="clear"></div>
						</div>
						
						<h1><?php the_title(); ?></h1>
						
						<p class="postmeta"><?php echo the_time("n j,y"); ?>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;Categories: <?php $project_terms = wp_get_object_terms($post->ID, 'category'); if(!empty($project_terms)) { if(!is_wp_error( $project_terms )) { echo ''; $count = 0; foreach($project_terms as $term){ if($count > 0) { echo ', '; } echo '<a href="'.get_term_link($term->slug, 'category'). '">'.$term->name. '</a>';  $count++; }  } } ?></p>	
						
						<?php $galleryImages = get_post_gallery_imagess(); 
							   $imagesCount = count($galleryImages);
		       			 ?>
		        	
							
							 <!-- Slideshow 4 -->
							    <div class="callbacks_container">
							      <ul class="rslides" id="slider4">	
								<?php if ($imagesCount > 0) : ?>
              					<?php for ($i = 0; $i < $imagesCount; $i++): ?>
                  					<?php if (!empty($galleryImages[$i])) :?>							        
                  					
                  				<li>
							          <img src="<?php echo $galleryImages[$i]['full'][0];?>" alt="">
							        </li>
							        
									<?php endif; ?>
			  					<?php endfor; ?>
								<?php endif; ?>
					
					
							      </ul>
							    </div>

							<?php
					        $gallery = get_post_gallery();
					
					        $content = strip_shortcode_gallery( get_the_content() );                                        
					        $content = str_replace( ']]>', ']]&gt;', apply_filters( 'the_content', $content ) ); 
					        echo $content;
					
					        ?>								
					
					</div><!-- end postclip -->

					
					<?php endwhile; endif; wp_reset_query(); ?>	
				
				</div>
				
				
				<?php get_sidebar(); ?>
				
				<div class="clear"></div>
			
			</div>
	
		</section>


<?php include (TEMPLATEPATH . '/footer_alt.php'); ?>


</body>

</html>
