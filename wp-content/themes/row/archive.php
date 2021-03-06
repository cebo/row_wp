<?php
/**
 * The template for displaying Archive pages.
 *
 */

include(TEMPLATEPATH . '/header_alt.php'); ?>
	
	<div class="wrapper">
		
		<?php include(TEMPLATEPATH . '/bloginfo/filter.php'); ?>
		

		<section class="midsect"> 
			
			<div class="container">
				
				<div class="leftcolumn">
					
					
							
				<?php  						if(have_posts()) :
					    $postcount=1;
					    while(have_posts()) : the_post();
		    		        
		      
				$imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "Full");
		        ?>
							

					
					
					<div class="postclip">
						
						<div class="datebox">
						
							<span class="day"><?php echo the_time("l"); ?></span>
							<span class="date"><?php echo the_time("n"); ?></span>
							<span class="moyear"><?php echo the_time("M"); ?>, <?php echo the_time("Y"); ?></span>
							
							<div class="authavi" style="background-image:url(<?php echo get_avatar_url ( get_the_author_meta('ID'), $size = '50' ); ?>);">
								<a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"></a>
							</div>
					
							
						</div>
						
						<div class="postbox">
							
							<div class="introimage" style="background-image:url(<?php echo $imgsrc[0]; ?>);">
								
								<a class="postlink" href="<?php the_permalink(); ?>"></a>
								<?php
							$category = get_the_category(); 
							
							?>
							<a class="catlink" href="<?php echo get_category_link($category[0]->term_id ); ?>"><?php echo $category[0]->cat_name; ?></a>
							
							</div>
							
							
							<a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
							
							<p><?php echo excerpt(45); ?> </p>
							
							<div class="sharebox"><span><?php _e('Share:',''); ?></span><a href="<?php bloginfo('url'); ?>/feed/"><i class="fa fa-rss"></i></a><a href="https://twitter.com/share?url=<?php the_permalink(); ?>&text=<?php the_title(); ?>&via=rownyc" target="_blank"><i class="fa fa-twitter"></i></a>
						<a href="http://www.facebook.com/sharer.php?s= 100&amp;p[title]=<?php the_title(); ?>&amp;p[url]=<?php the_permalink(); ?>&amp;p[images][0]=<?php echo $imgsrc[0]; ?>&amp;p[summary]=<?php echo excerpt(30); ?>" target="_blank"><i class="fa fa-facebook"></i></a>
							
						<?php $perm = get_permalink(); $img = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "Full"); $regex = '/(?<!href=["\'])http:\/\//'; $regio = '/(?<!href=["\'])http:\/\//'; $perm = preg_replace($regio, '', $perm); $img = preg_replace($regex, '', $img); ?><a class="pin" href="http://pinterest.com/pin/create/button/?url=http%3A%2F%2F<?php echo $perm; ?>&media=http%3A%2F%2F<?php echo $img; ?>&description=<?php echo excerpt(30); ?>" target="_blank"><i class="fa fa-pinterest"></i></a></div>
							
							<a href="<?php the_permalink(); ?>" class="readon"><?php _e('Read More','row-theme-text'); ?> ></a>
						
						</div>
						
						<div class="clear"></div>
					
					</div><!-- end postclip -->
					
					
					<?php $postcount++;  endwhile; ?>
					

                    <div class="slippernav">
                        <div class="alignleft"><?php next_posts_link('&laquo;' .   __(' Older Entries' , 'misfitlang')) ?></div>
                        <div class="alignright"><?php previous_posts_link( __('Newer Entries ', 'misfitlang') .  '&raquo;') ?></div>
                        <div class="clear"></div>
                    </div>
					<?php else : ?>
					
					<p><?php _e('Sorry, no posts left' , 'misfitlang'); ?></p>
					
					 <?php endif; ?>
					
					
				
				</div>
				
				
				<?php get_sidebar(); ?>
				
				<div class="clear"></div>
			
			</div>
	
		</section>


<?php include (TEMPLATEPATH . '/footer_alt.php'); ?>


</body>

</html>