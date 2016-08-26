<?php
/**
 * The Sidebar 
 */
?>

		

<div class="rightcolumn">


   <!-- widgetized  -->

	<?php 

		if( !is_page_template( 'page_blog.php' ) ) { 

			if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Sidebar') ) :	endif; 

		}
	?>  
	
	<!-- widgetized  -->					
				
	<?php if(get_option('cebo_ad1code-removethistobringback')) { ?>
	
		<?php echo get_option('cebo_ad1code'); ?>
	
	<?php } elseif (get_option('cebo_ad1image-removethistobringback')) { ?>
	
		<a href="<?php echo get_option('cebo_ad1link'); ?>" target="_blank"><img style="border-bottom: 1px dashed #EEEEEE; padding-bottom: 7px;" src="<?php echo get_option('cebo_ad1image'); ?>" alt="" /></a>

	<?php } ?>
		
		
		<div class="populararticles">
			<h2 class="sidehead"><?php _e('Popular This Week','row-theme-text'); ?></h2>
			
			<ul>
			
			<?php query_posts('post_type=post&posts_per_page=5'); if(have_posts()) : while(have_posts()) : the_post(); $imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "Full"); ?>
				<li>
				
				
					
					<span class="popimg"  style="background-image:url(<?php echo $imgsrc[0]; ?>);">
						<a href="<?php the_permalink(); ?>"></a>
					</span>
					
					<a href="<?php the_permalink(); ?>" class="poptitle"><?php the_title(); ?></a>
					
													<?php
				$category = get_the_category(); 
				
				?>
				<a class="popcat" href="<?php echo get_category_link($category[0]->term_id ); ?>"><?php _e('<?php echo $category[0]->cat_name; ?>','row-theme-text'); ?></a>
					
				</li>
				
				
				<?php endwhile; endif; wp_reset_query(); ?>	
				
											
				
			</ul>
		</div><!-- end popular items -->
		
		
	<?php if(get_option('cebo_ad2code-removethistobringback')) { ?>
	
	<?php echo get_option('cebo_ad2code'); ?>
	
	<?php } elseif (get_option('cebo_ad2image-removethistobringback')) { ?>
	
		<a href="<?php echo get_option('cebo_ad2link'); ?>" target="_blank"><img src="<?php echo get_option('cebo_ad2image'); ?>" alt="" /></a>
	<?php } ?>
		
		
							
		<div class="instas">
			<h2 class="sidehead"><?php _e('Stay connected. Hashtag us!','row-theme-text'); ?><span><?php _e('#MoreNYthanNY','row-theme-text'); ?></span></h2>
			
			<div id="instafeed"></div>
			
		</div>


	
	</div>
			
				
<!-- end this sidebar -->		