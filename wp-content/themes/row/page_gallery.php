<?php 

/* Template Name: Gallery

*/
 get_header(); ?>





<?php if(get_post_meta($post->ID, 'cebo_fullpic', true)) { ?>

<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

<div class="fullpic">

	<div class="slide-header">
		<a class="button" href="<?php echo get_option('cebo_fullpic'); ?>"><?php _e('RESERVE NOW', 'cebolang'); ?></a>
	</div>
	<img src="<?php echo get_post_meta($post->ID, 'cebo_fullpic', true); ?>" />


</div>

<?php endwhile; endif; wp_reset_query(); ?>	

<?php } ?>


	<div id="page-content" class="section">
		
		<div class="container">

			<div class="post-title section-header">

				<div class="fl">
	
					<?php if(get_option('cebo_shorttitle')) { ?>
					
					<h2 class="section-pre-title fl"><?php echo get_option('cebo_shorttitle'); ?></h2>

					<div class="section-header-divider fl"></div>
					
					<?php } ?>

		
					<h2 class="section-title fr"><?php the_title(); ?></h2>
	
				</div>
	
				<div class="fr">
					
					<ul class="social-buttons">
					<?php if(get_option('cebo_facebook')) { ?>
					
						<li class="facebook"><a href="http://facebook.com/<?php echo get_option('cebo_facebook'); ?>" target="_blank"><i class="fa fa-facebook fa-2x"></i><span>facebook</span></a></li>
						
					<?php } ?>
					<?php if(get_option('cebo_twitter')) { ?>
					
						<li class="twitter"><a href="http://twitter.com/<?php echo get_option('cebo_twitter'); ?>" target="_blank"><i class="fa fa-twitter fa-2x"></i><span>twitter</span></a></li>
						
					<?php } ?>
					</ul>
	
				</div>
	
			</div>
			
			<div class="post-content" style="width: 100%;">
			
				<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
				
					<?php the_content(); ?>
					
					<div class="imagegal">
						
						<ul>
							
							 <?php
							              
								    $gallery = get_post_gallery_images( $post->ID );
								
								
								                        
								    foreach( $gallery as $image ) {// Loop through each image in each gallery
								        $image_list .= '<li><a rel="prettyPhoto[gal]" href=" ' . str_replace('-150x150','',$image) . ' "><img src=" ' . str_replace('-150x150','',$image) . ' "  /></li></a>';
								    }                  
								    echo $image_list;                       
								                     
								?>
								
								<div class="clear"></div>
						</ul>
						
					<div class="clear"></div>
					</div>
				
				
				<?php endwhile; endif; wp_reset_query(); ?>	
<div class="clear"></div>
			</div>
			
			<div class="clear"></div>

		</div>

	</div>


<div class="clear"></div>
	
					
<?php get_footer(); ?>