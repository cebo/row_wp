<?php 

/* Template Name: Neighborhood Guide

*/
 get_header(); ?>




  <ul style="top: 660px;" class="right-links right" id="toggles">
										
		<li class="dine"><a class="linkerd active" href="http://milo.lurnglier.com/?page_id=48" title="Dining">Dine</a></li>
		<li class="shop"><a class="linkerd active" href="http://milo.lurnglier.com/?page_id=68" title="Dining">Shop</a></li>
		<li class="arts"><a class="linkerd active" href="http://milo.lurnglier.com/?page_id=66" title="Dining">Arts</a></li>
		<li class="sights"><a class="linkerd active" href="http://milo.lurnglier.com/?page_id=160" title="Dining">Sights</a></li>
		<li class="events"><a class="linkerd active" href="http://milo.lurnglier.com/?page_id=157" title="Dining">Events</a></li>	
		
	</ul>

						
						
						<a href="#features-1" id="link" class="navigateTo page-down"></a>
						
						
    <!-- begins map area -->
	<div id="maparea" style="width: 100%; height: 600px;">
	
	
	
	</div>
    <!-- begins map area -->


<div id="neighborhood-guide" class="section">
		
		<div class="container">

			<div class="section-header">
					
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
		
		</div>
			
		<div class="tabs-wrapper">
		
			<ul class="tabs">
				<li><a href="#tab1">Dining</a></li>
				<li><a href="#tab2">Shopping</a></li>
				<li><a href="#tab3">Sight Seeing</a></li>
				<li><a href="#tab4">Arts & Culture</a></li>
			</ul>	
			<div class="tabs-container">
				
				
				<div id="tab1" class="tab-content">
					
					<div class="container">
						
						
						<?php query_posts('post_type=page&p=48&suppress_filters=1'); if(have_posts()) : while(have_posts()) : the_post(); ?>
						
						<?php the_content(); ?>
						
						<?php endwhile; endif; wp_reset_query(); ?>	
						
						
						
						<div class="tab-featured">
							
							<?php query_posts(
							array(
								'loctype' => 'dining',
								'post_type' => 'locations',
					  			'posts_per_page' => 1,
					  			'order' => 'ASC',
					  			'suppress_filters' => 1,
								)
							);
							
							
							
							if(have_posts()) : while(have_posts()) : the_post(); 
							$imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "Full"); ?>
						
							<div class="featured-tab-photo" style="background-image: url(<?php if(get_post_meta($post->ID, 'cebo_homethumb', true)) { echo get_post_meta($post->ID, 'cebo_homethumb', true); } else { echo $imgsrc[0]; }  ?>);">
							
							<a href="<?php the_permalink(); ?>"></a>		
								
							</div>
							<div class="binder">
								<h3 class="fl"><?php the_title(); ?></h3>
								<h3 class="fr"><?php echo get_post_meta($post->ID, 'cebo_category', true); ?></h3>
								<div class="clear"></div>
							</div>	
							<div class="clear"></div>
							<?php endwhile; endif; wp_reset_query(); ?>	
						</div>
						
						

						<div class="tab-featured" style="margin-right: 0; float-right;">
							
							<?php query_posts(
							array(
								'loctype' => 'dining',
								'post_type' => 'locations',
					  			'posts_per_page' => 1,
					  			'order' => 'ASC',
					  			'offset' => 1,
					  			'suppress_filters' => 1,
								)
							);
							
							
							
							if(have_posts()) : while(have_posts()) : the_post(); 
							$imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "Full"); ?>
							
								
							
							<div class="featured-tab-photo" style="background-image: url(<?php if(get_post_meta($post->ID, 'cebo_homethumb', true)) { echo get_post_meta($post->ID, 'cebo_homethumb', true); } else { echo $imgsrc[0]; }  ?>);">
							
							<a href="<?php the_permalink(); ?>"></a>	
								
							</div>
							<div class="binder">
								<h3 class="fl"><?php the_title(); ?></h3>
								<h3 class="fr"><?php echo get_post_meta($post->ID, 'cebo_category', true); ?></h3>
								<div class="clear"></div>
							</div>	
							<div class="clear"></div>
							<?php endwhile; endif; wp_reset_query(); ?>	
							
						</div>
						
						<div class="clear"></div>
						
						
						<div class="widebox">
						
							<h2>Dining Around Town</h2>
							
							<div class="townbox">
							
								<?php query_posts('post_type=page&p=48&suppress_filters=1'); if(have_posts()) : while(have_posts()) : the_post(); ?>
								
								
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
								
								<?php endwhile; endif; wp_reset_query(); ?>	
								
								</div>
							
							</div>
						
						</div>

					</div>
				</div>
				
				
				
				
				
				
				
				
				<!-- begin shopping tab -->
				
				
				
				
			
				<div id="tab2" class="tab-content">
					
					<div class="container">
						
							
						<?php query_posts('post_type=page&p=68&suppress_filters=1'); if(have_posts()) : while(have_posts()) : the_post(); ?>
						
						<?php the_content(); ?>
						
						<?php endwhile; endif; wp_reset_query(); ?>	
						
						
						
						<div class="tab-featured">
							
							<?php query_posts(
							array(
								'loctype' => 'shopping',
								'post_type' => 'locations',
					  			'posts_per_page' => 1,
					  			'order' => 'ASC',
					  			'suppress_filters' => 1,
								)
							);
							
							
							
							if(have_posts()) : while(have_posts()) : the_post(); 
							$imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "Full"); ?>
						
							<div class="featured-tab-photo" style="background-image: url(<?php if(get_post_meta($post->ID, 'cebo_homethumb', true)) { echo get_post_meta($post->ID, 'cebo_homethumb', true); } else { echo $imgsrc[0]; }  ?>);">
							
							<a href="<?php the_permalink(); ?>"></a>		
								
							</div>
							<div class="binder">
								<h3 class="fl"><?php the_title(); ?></h3>
								<h3 class="fr"><?php echo get_post_meta($post->ID, 'cebo_category', true); ?></h3>
								<div class="clear"></div>
							</div>	
							<div class="clear"></div>
							<?php endwhile; endif; wp_reset_query(); ?>	
						</div>
						
						

						<div class="tab-featured" style="margin-right: 0; float-right;">
							
							<?php query_posts(
							array(
								'loctype' => 'shopping',
								'post_type' => 'locations',
					  			'posts_per_page' => 1,
					  			'order' => 'ASC',
					  			'suppress_filters' => 1,
					  			
								)
							);
							
							
							
							if(have_posts()) : while(have_posts()) : the_post(); 
							$imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "Full"); ?>
							
								
							
							<div class="featured-tab-photo" style="background-image: url(<?php if(get_post_meta($post->ID, 'cebo_homethumb', true)) { echo get_post_meta($post->ID, 'cebo_homethumb', true); } else { echo $imgsrc[0]; }  ?>);">
							
							<a href="<?php the_permalink(); ?>"></a>	
								
							</div>
							<div class="binder">
								<h3 class="fl"><?php the_title(); ?></h3>
								<h3 class="fr"><?php echo get_post_meta($post->ID, 'cebo_category', true); ?></h3>
								<div class="clear"></div>
							</div>	
							<div class="clear"></div>
							<?php endwhile; endif; wp_reset_query(); ?>	
							
						</div>
						
						<div class="clear"></div>
						
						
						<div class="widebox">
						
							<h2>Shopping Around Town</h2>
							
							<div class="townbox">
							
								<?php query_posts('post_type=page&p=68&suppress_filters=1'); if(have_posts()) : while(have_posts()) : the_post(); ?>
								
								
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
								
								<?php endwhile; endif; wp_reset_query(); ?>	
								
								</div>
							
							</div>
						
						</div>

				</div>
				
				
				
				
				
				
				<!-- begin sight seeing tab -->
				
				
				
				
			
				<div id="tab3" class="tab-content">
					
					<div class="container">
						
							
						<?php query_posts('post_type=page&p=160&suppress_filters=1'); if(have_posts()) : while(have_posts()) : the_post(); ?>
						
						<?php the_content(); ?>
						
						<?php endwhile; endif; wp_reset_query(); ?>	
						
						
						
						<div class="tab-featured">
							
							<?php query_posts(
							array(
								'loctype' => 'sights',
								'post_type' => 'locations',
					  			'posts_per_page' => 1,
					  			'order' => 'ASC',
					  			'suppress_filters' => 1,
								)
							);
							
							
							
							if(have_posts()) : while(have_posts()) : the_post(); 
							$imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "Full"); ?>
						
							<div class="featured-tab-photo" style="background-image: url(<?php if(get_post_meta($post->ID, 'cebo_homethumb', true)) { echo get_post_meta($post->ID, 'cebo_homethumb', true); } else { echo $imgsrc[0]; }  ?>);">
							
							<a href="<?php the_permalink(); ?>"></a>		
								
							</div>
							<div class="binder">
								<h3 class="fl"><?php the_title(); ?></h3>
								<h3 class="fr"><?php echo get_post_meta($post->ID, 'cebo_category', true); ?></h3>
								<div class="clear"></div>
							</div>	
							<div class="clear"></div>
							<?php endwhile; endif; wp_reset_query(); ?>	
						</div>
						
						

						<div class="tab-featured" style="margin-right: 0; float-right;">
							
							<?php query_posts(
							array(
								'loctype' => 'sights',
								'post_type' => 'locations',
					  			'posts_per_page' => 1,
					  			'order' => 'ASC',
					  			'suppress_filters' => 1,
					  			
								)
							);
							
							
							
							if(have_posts()) : while(have_posts()) : the_post(); 
							$imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "Full"); ?>
							
								
							
							<div class="featured-tab-photo" style="background-image: url(<?php if(get_post_meta($post->ID, 'cebo_homethumb', true)) { echo get_post_meta($post->ID, 'cebo_homethumb', true); } else { echo $imgsrc[0]; }  ?>);">
							
							<a href="<?php the_permalink(); ?>"></a>	
								
							</div>
							<div class="binder">
								<h3 class="fl"><?php the_title(); ?></h3>
								<h3 class="fr"><?php echo get_post_meta($post->ID, 'cebo_category', true); ?></h3>
								<div class="clear"></div>
							</div>	
							<div class="clear"></div>
							<?php endwhile; endif; wp_reset_query(); ?>	
							
						</div>
						
						<div class="clear"></div>
						
						
						<div class="widebox">
						
							<h2>Things to See Around town</h2>
							
							<div class="townbox">
							
								<?php query_posts('post_type=page&p=160&suppress_filters=1'); if(have_posts()) : while(have_posts()) : the_post(); ?>
								
								
								<ul>
							
									 <?php
									              
										    $gallery = get_post_gallery_images( 160 );
										
										
										                        
										    foreach( $gallery as $image ) {// Loop through each image in each gallery
										        $image_list .= '<li><a rel="prettyPhoto[gal]" href=" ' . str_replace('-150x150','',$image) . ' "><img src=" ' . str_replace('-150x150','',$image) . ' "  /></li></a>';
										    }                  
										    echo $image_list;                       
										                     
										?>
										
										<div class="clear"></div>
								</ul>
								
								<?php endwhile; endif; wp_reset_query(); ?>	
								
								</div>
							
							</div>
						
						</div>

				</div>
				
				
				
				
				
				<!-- begin arts tab -->
				
				
				
				
			
				<div id="tab4" class="tab-content">
					
					<div class="container">
						
							
						<?php query_posts('post_type=page&p=66&suppress_filters=1'); if(have_posts()) : while(have_posts()) : the_post(); ?>
						
						<?php the_content(); ?>
						
						<?php endwhile; endif; wp_reset_query(); ?>	
						
						
						
						<div class="tab-featured">
							
							<?php query_posts(
							array(
								'loctype' => 'arts',
								'post_type' => 'locations',
					  			'posts_per_page' => 1,
					  			'order' => 'ASC',
					  			'suppress_filters' => 1,
								)
							);
							
							
							
							if(have_posts()) : while(have_posts()) : the_post(); 
							$imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "Full"); ?>
						
							<div class="featured-tab-photo" style="background-image: url(<?php if(get_post_meta($post->ID, 'cebo_homethumb', true)) { echo get_post_meta($post->ID, 'cebo_homethumb', true); } else { echo $imgsrc[0]; }  ?>);">
							
							<a href="<?php the_permalink(); ?>"></a>		
								
							</div>
							<div class="binder">
								<h3 class="fl"><?php the_title(); ?></h3>
								<h3 class="fr"><?php echo get_post_meta($post->ID, 'cebo_category', true); ?></h3>
								<div class="clear"></div>
							</div>	
							<div class="clear"></div>
							<?php endwhile; endif; wp_reset_query(); ?>	
						</div>
						
						

						<div class="tab-featured" style="margin-right: 0; float-right;">
							
							<?php query_posts(
							array(
								'loctype' => 'arts',
								'post_type' => 'locations',
					  			'posts_per_page' => 1,
					  			'order' => 'ASC',
					  			'offset' => 1,
					  			'suppress_filters' => 1,
								)
							);
							
							
							
							if(have_posts()) : while(have_posts()) : the_post(); 
							$imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "Full"); ?>
							
								
							
							<div class="featured-tab-photo" style="background-image: url(<?php if(get_post_meta($post->ID, 'cebo_homethumb', true)) { echo get_post_meta($post->ID, 'cebo_homethumb', true); } else { echo $imgsrc[0]; }  ?>);">
							
							<a href="<?php the_permalink(); ?>"></a>	
								
							</div>
							<div class="binder">
								<h3 class="fl"><?php the_title(); ?></h3>
								<h3 class="fr"><?php echo get_post_meta($post->ID, 'cebo_category', true); ?></h3>
								<div class="clear"></div>
							</div>	
							<div class="clear"></div>
							<?php endwhile; endif; wp_reset_query(); ?>	
							
						</div>
						
						<div class="clear"></div>
						
						
						<div class="widebox">
						
							<h2>Arts & Culture Around Town</h2>
							
							<div class="townbox">
							
								<?php query_posts('post_type=page&p=66&suppress_filters=1'); if(have_posts()) : while(have_posts()) : the_post(); ?>
								
								
								<ul>
							
									 <?php
									              
										    $gallery = get_post_gallery_images(66);
										
										
										                        
										    foreach( $gallery as $image ) {// Loop through each image in each gallery
										        $image_list .= '<li><a rel="prettyPhoto[gal]" href=" ' . str_replace('-150x150','',$image) . ' "><img src=" ' . str_replace('-150x150','',$image) . ' "  /></li></a>';
										    }                  
										    echo $image_list;                       
										                     
										?>
										
										<div class="clear"></div>
								</ul>
								
								<?php endwhile; endif; wp_reset_query(); ?>	
								
								</div>
							
							</div>
						
						</div>

				</div>




				
				
				
				
			</div>
			<div class="clear"></div>
			
			
		<div class="container">
		
		
			<div class="upcoming-events">

				<h2>Upcoming Events</h2>

				<div class="upcoming-calendar fl"></div>

				<div class="fr">
					<ul>
						<li>
							<img src="<?php bloginfo ('template_url'); ?>/images/test/test-1.jpg"  alt=""/>
							<div class="event-date">JAN <span>9</span></div>
							<div class="event-description">
								<p>Donec hendrerit laoreet risus eget adipiscing.</p>
							</div>
						</li>
						<li class="even">
							<img src="<?php bloginfo ('template_url'); ?>/images/test/test-1.jpg" alt="" />
							<div class="event-date">JAN <span>9</span></div>
							<div class="event-description">
								<p>Donec hendrerit laoreet risus eget adipiscing.</p>
							</div>
						</li>
						<li>
							<img src="<?php bloginfo ('template_url'); ?>/images/test/test-1.jpg" alt="" />
							<div class="event-date">JAN <span>9</span></div>
							<div class="event-description">
								<p>Donec hendrerit laoreet risus eget adipiscing.</p>
							</div>
						</li>
						<li class="even">
							<img src="<?php bloginfo ('template_url'); ?>/images/test/test-1.jpg" alt="" />
							<div class="event-date">JAN <span>9</span></div>
							<div class="event-description">
								<p>Donec hendrerit laoreet risus eget adipiscing.</p>
							</div>
						</li>
					</ul>
				</div>

			</div>
			
			<div class="clear"></div>
		
		</div>
		
		<div class="heater">
					
			<div class="container">

				<div class="whats-hot">
	
					<h2>What's Hot</h2>
	
					<div>
						<ul>
							<li>
								<img src='<?php bloginfo ('template_url'); ?>/images/oceana/stearnssantabarbara.jpg' alt='' />
								<p>Proin suscipit luctus orci placerat fringilla. Donec hendrerit laoreet risus eget adipiscing.</p>
							</li>
							<li>
								<img src='<?php bloginfo ('template_url'); ?>/images/oceana/Hotel-Oceana--Santa-Barbara-photos-Exterior.jpg' alt='' />
								<p>Proin suscipit luctus orci placerat fringilla. Donec hendrerit laoreet risus eget adipiscing.</p>
							</li>
						</ul>
						<ul class="hot-featured">
							<li>
								<img src='<?php bloginfo ('template_url'); ?>/images/oceana/OceansideSurf.jpg' alt='' />
								<p>Proin suscipit luctus orci placerat fringilla. Donec hendrerit laoreet risus eget adipiscing.</p>
							</li>
						</ul>
						<ul>
							<li>
								<img src='<?php bloginfo ('template_url'); ?>/images/oceana/Hotel-Oceana-Santa-Barbara-Hotel-Exterior-8-DEF.jpg' alt='' />
								<p>Proin suscipit luctus orci placerat fringilla. Donec hendrerit laoreet risus eget adipiscing.</p>
							</li>
							<li>
								<img src='<?php bloginfo ('template_url'); ?>/images/oceana/header_hoteloverview.jpg' alt='' />
								<p>Proin suscipit luctus orci placerat fringilla. Donec hendrerit laoreet risus eget adipiscing.</p>
							</li>
						</ul>
					</div>
	
				</div>
			</div>

		</div>

	</div>
	
	<div class="clear"></div>

	</div>


<?php include (TEMPLATEPATH . '/library/super-map.php'); ?>
<?php get_footer(); ?>