<?php get_header(); ?>



	<section class="contentarea">
			
			

			<div class="home-intro">				

					<?php
						// Saving it for future use
						$index_tlnobg = false;
						if($index_tlnobg) {
					?>
				
					<div class="wideover overlay">
                        
						<div class="closena" style="float:left;position:absolute">X</div>
                                               
					     <div style="float:left; width:15%; margin-left:30px;">
					     		<a href="http://tlworldsbest.wylei.com/" target="_blank"><img src="<?php echo site_url(); ?>/wp-content/uploads/2015/12/tl_nobg.png" style="width:130%;"></a>
					     </div>
					      <div style="float:right; width:79%;">
						<h2 class="h1"><?php echo get_option('cebo_hblineone'); ?></h2>
						<h2><?php echo get_option('cebo_hblinetwo '); ?></h2>
						
						<div class="paperbox">
					
							<?php echo get_option('cebo_hometext'); ?>
							
							
							<a class="wideopensays" href="#"><i class="fa fa-chevron-down"></i></a>
							<a class="wideopensays" href="#"><i class="fa fa-chevron-up"></i></a>
						</div>
				
					</div>		
					</div>		
					
					<?php } ?>
					
					<div id="owl-example" class="owl-carousel">
			



					<?php 

						query_posts(array(
				
							'post_type' => 'page',
							'p' => 6308,

						)); 

						if(have_posts()) : while(have_posts()) : the_post();

						$imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "Full");

					?>
					
					
					
					<?php $galleryImages = get_post_gallery_imagess(); 
						  $imagesCount = count($galleryImages);
						  
	       			 ?>
	        		<?php if ($imagesCount > 0) : ?>
              		<?php for ($i = 0; $i < $imagesCount; $i++): ?>
                  	<?php if (!empty($galleryImages[$i])) :?>
					<div class="fullspan" style="padding-bottom: 15px;">
					
					
						
                  
						
						<div class="stretch"  style="background-image: url(<?php echo tt($galleryImages[$i]['full'][0],1123,536); ?>);"></div>
						
						
				
						
						
						
					<img src="<?php bloginfo ('template_url'); ?>/images/hall.jpg" style="" alt="#">
					</div>
					<?php endif; ?>
  						<?php endfor; ?>
						<?php endif; ?>
					<?php endwhile; endif; wp_reset_query(); ?>	
					
				
				</div>
			
			</div>
			
			
			
			<div id="fliptoContent"></div>
			<!-- begin second level -->
			
			
			
			
			<div class="second-level">
			
				
				<div class="leftside">
				
					<div class="textbox">
						
						<div class="innerbox">

						
							<?php $imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "Full"); ?>
									<h2><?php _e("This Week's NYC Deal",'row-theme-text'); ?></h2>
								
								<?php query_posts('post_type=specials&posts_per_page=6'); if(have_posts()) : while(have_posts()) : the_post(); ?>

								<?php 

									$title = get_the_title();
									$slug_comp = sanitize_title($title); 

								?>	

								<div class="copie">
									
									
								
									<h3><?php the_title(); ?>
										<?php if(get_post_meta($post->ID, 'cebo_callout', true)) { ?>
										&nbsp;-&nbsp;<span>
										<?php echo get_post_meta($post->ID, 'cebo_callout', true); ?>
										</span>
										<?php } ?>
									</h3>
								
									<?php if(get_post_meta($post->ID, 'cebo_booklink', true)) { ?>

									<a href="<?php echo get_post_meta($post->ID, 'cebo_booklink', true); ?>" class="button"><?php _e('Reserve Now','row-theme-text'); ?></a>

									<?php } ?>
									
									<?php if( $slug_comp == '5-cash-back' ) { ?>

									<div id="theguestbook_widget"></div>

									<?php } ?> 

									<div class="clear"></div>
									
									
		
								</div>
								
								<?php endwhile; endif; wp_reset_query(); ?>	
								
								<a class="opensays" href="#"><i class="fa fa-chevron-down"><span class="mo">See More</span></i></a>
								<a class="opensays" href="#"><i class="fa fa-chevron-up"><span class="mo">Close</span></i></a>
								
								<div class="backslide" style="background-image: url(<?php bloginfo('template_url'); ?>/images/cash.jpg);"></div>
								
							
						
						</div>
					</div>
					
					
					

					<div class="guestrooms">
					
					
						<?php query_posts('post_type=page&p=453&suppress_filters=1'); if(have_posts()) : while(have_posts()) : the_post(); $imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "Full"); ?>
					
					
					<div class="picone" style="height: 100%;">
					
						<div class="wideover overlay narrow">
					
							<h2 class="h1"><?php the_title(); ?></h2>
							<?php the_content(); ?>	
						  
							<a class="gone" href="<?php bloginfo('url'); ?>/gallery/row-nyc-photos/"><?php _e('Browse Our Look >','row-theme-text'); ?></a>

						</div>
						
						<?php if(get_post_meta($post->ID, 'cebo_fullpic', true)) { ?>
								
								
						<div class="stretch"  style="background-image: url(<?php echo tt(get_post_meta($post->ID, 'cebo_fullpic', true),657,518); ?>);"></div>
						
						<?php } elseif($imgsrc) { ?>
						
						
						<div class="stretch"  style="background-image: url(<?php echo tt($imgsrc[0],1055,1000); ?>);"></div>
						
						<?php } else { ?>
											
						<div class="stretch"  style="background-image: url(<?php bloginfo ('template_url'); ?>/images/watermark.jpg);"></div>
						
						
						<?php } ?>
						
			
					
				
				</div>
					
					<div class="clear"></div>

				</div>


					
					
					<?php endwhile; endif; wp_reset_query(); ?>	
					
				</div>
				
				
				
				<div class="rightside">
				
				
				
					<?php query_posts('post_type=page&p=449&suppress_filters=1'); if(have_posts()) : while(have_posts()) : the_post(); $imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "Full"); ?>
					<div class="picone">
						<div class="wideover overlay narrow">
							
						
							<h2 class="h1"><?php the_title(); ?></h2>
							<?php the_content(); ?>
							
							
							<?php $projects = get_page_with_template('page_rooms');
						 	 $projecturl= get_permalink($projects);
						  	//if($projects) { ?>
						  
						  
							<a class="gone" href="<?php echo $projecturl; ?>"><?php _e('Tour our Rooms >','row-theme-text'); ?></a>
													
						</div>
						
					

								<?php if(get_post_meta($post->ID, 'cebo_fullpic', true)) { ?>
								
								
								<div class="stretch"  style="background-image: url(<?php echo tt(get_post_meta($post->ID, 'cebo_fullpic', true),910,714); ?>);"></div>
								
								<?php } elseif($imgsrc) { ?>
								
								
								<div class="stretch"  style="background-image: url(<?php echo tt($imgsrc[0],910,714); ?>);"></div>
								
								<?php } else { ?>
													
								<div class="stretch"  style="background-image: url(<?php bloginfo ('template_url'); ?>/images/watermark.jpg);"></div>
								
								
								<?php } ?>

				</div>

				
					
					<?php endwhile; endif; wp_reset_query(); ?>	
					
					
					<?php query_posts('post_type=page&p=56&suppress_filters=1'); if(have_posts()) : while(have_posts()) : the_post(); $imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "Full"); ?>
								
					<div class="picone">
					
						<div class="wideover overlay narrow">
					
							<h2 class="h1"><?php the_title(); ?></h2>
							<p><?php the_content(); ?></p>
							
							
							<p><a class="gone" href="http://citykitchen.rownyc.com/"><?php _e('Visit City Kitchen &gt;','row-theme-text'); ?></a></p>
							
							<!-- <a class="gone" href="<?php bloginfo('url'); ?>/times-square-hotels/"><?php _e('View Row NYC >','row-theme-text'); ?></a> -->
													
						</div>
						
						<?php if(get_post_meta($post->ID, 'cebo_fullpic', true)) { ?>
								
								
						<div class="stretch"  style="background-image: url(<?php echo tt(get_post_meta($post->ID, 'cebo_fullpic', true),455,357); ?>);"></div>
						
						<?php } elseif($imgsrc) { ?>
						
						
						<div class="stretch"  style="background-image: url(<?php echo tt($imgsrc[0],455,357); ?>);"></div>
						
						<?php } else { ?>
											
						<div class="stretch"  style="background-image: url(<?php echo site_url(); ?>/wp-content/uploads/2014/10/city-kitchen-tile.jpg);"></div>
						
						
						<?php } ?>

					</div>						
						
					<?php endwhile; endif; wp_reset_query(); ?>					
					<div class="clear"></div>

				</div>
			
			
			</div>
			
			<div class="clear"></div>
		
			<!-- begin third level -->
			
			<!-- blog post and district M -->
			
			<div class="third-level">
			
				
				<div class="leftside">
					
					
					<?php query_posts('post_type=page&p=443&suppress_filters=1'); if(have_posts()) : while(have_posts()) : the_post(); $imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "Full"); ?>
					
					
					<div class="picone">
					
						<div class="wideover overlay narrow">
					
							<h2 class="h1"><?php the_title(); ?></h2>
							<?php the_content(); ?>
							
							
							<?php $projects = get_page_with_template('page-eat-drink');
						 	 $projecturl= get_permalink($projects);
						  	//if($projects) { ?>
						  
						  
							<a class="gone" href="<?php echo $projecturl; ?>"><?php _e('Visit Our Restaurant Bar >','row-theme-text'); ?></a>
													
						</div>
						
						<?php if(get_post_meta($post->ID, 'cebo_fullpic', true)) { ?>
								
								
						<div class="stretch"  style="background-image: url(<?php echo tt(get_post_meta($post->ID, 'cebo_fullpic', true),910,578); ?>);"></div>
						
						<?php } elseif($imgsrc) { ?>
						
						
						<div class="stretch"  style="background-image: url(<?php echo tt($imgsrc[0],910,578); ?>);"></div>
						
						<?php } else { ?>
											
						<div class="stretch"  style="background-image: url(<?php bloginfo ('template_url'); ?>/images/watermark.jpg);"></div>
						
						
						<?php } ?>
						
					</div>
					
					<?php endwhile; endif; wp_reset_query(); ?>	

				</div>
				
				<!-- blog post -->

				<div class="rightside">


				<?php query_posts('post_type=post&posts_per_page=1'); if(have_posts()) : while(have_posts()) : the_post(); $imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "Full"); ?>
					
					<div class="picone">
					
						<div class="wideover overlay" style="width: 55%; padding: 20px 40px; margin-left: -34%;">
					
							<h2 class="h1"><?php the_title(); ?></h2>
							
							<p style="padding: 10px 0;"><?php echo excerpt(15); ?></p>
						  
							<a class="gone" href="<?php the_permalink(); ?>"><?php _e('View Our Latest Post >','row-theme-text'); ?></a>

						</div>
						
						<?php if(get_post_meta($post->ID, 'cebo_fullpic', true)) { ?>
								
								
						<div class="stretch"  style="background-image: url(<?php echo tt(get_post_meta($post->ID, 'cebo_fullpic', true),455,400); ?>);"></div>
						
						<?php } elseif($imgsrc) { ?>
						
						
						<div class="stretch"  style="background-image: url(<?php echo tt($imgsrc[0],455,400); ?>);"></div>
						
						<?php } else { ?>
											
						<div class="stretch"  style="background-image: url(<?php bloginfo ('template_url'); ?>/images/watermark.jpg);"></div>
						
						
						<?php } ?>
						
			
					<?php endwhile; endif; wp_reset_query(); ?>	
				
				</div>
					
					<div class="clear"></div>

				</div>
			
			
			</div>
			
	




			<!-- START cyc fitness and glam go -->


			<div class="third-level">

				<?php $the_query = new WP_Query('post_type=amenities&p=6485'); if( $the_query->have_posts()) : while( $the_query->have_posts()) : $the_query->the_post(); $imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "Full"); ?>

					<div class="leftsider">
						<div class="picone">
							<div class="suboverlay narrow">
								<h2 class="h1"><?php the_title(); ?></h2>
								<p><?php echo get_post_meta($post->ID, 'cebo_amenitiesblurb', true); ?> <br> 
									<a href="<?php the_permalink(); ?>"><?php _e('More >','row-theme-text'); ?></a>
								</p>
							</div>

							<?php if(get_post_meta($post->ID, 'cebo_fullpic', true)) { ?>
												
												
							<div class="stretch"  style="background-image: url(<?php echo tt(get_post_meta($post->ID, 'cebo_fullpic', true),455,400); ?>);"></div>
							
							<?php } elseif($imgsrc) { ?>
							
							
							<div class="stretch"  style="background-image: url(<?php echo tt($imgsrc[0],455,400); ?>);"></div>
							
							<?php } else { ?>
												
							<div class="stretch"  style="background-image: url(<?php bloginfo ('template_url'); ?>/images/watermark.jpg);"></div>
							
							<?php } ?>
						</div>
					</div>

				<?php endwhile; endif; wp_reset_postdata(); ?>

				<?php $the_query = new WP_Query('post_type=amenities&p=6488'); if( $the_query->have_posts()) : while( $the_query->have_posts()) : $the_query->the_post(); $imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "Full"); ?>

					<div class="rightsider">
						<div class="picone">
							<div class="suboverlay narrow">
								<h2 class="h1"><?php the_title(); ?></h2>
								<p><?php echo get_post_meta($post->ID, 'cebo_amenitiesblurb', true); ?> <br> 
									<a href="<?php the_permalink(); ?>"><?php _e('More >','row-theme-text'); ?></a>
								</p>
							</div>

							<?php if(get_post_meta($post->ID, 'cebo_fullpic', true)) { ?>
												
												
							<div class="stretch"  style="background-image: url(<?php echo tt(get_post_meta($post->ID, 'cebo_fullpic', true),455,400); ?>);"></div>
							
							<?php } elseif($imgsrc) { ?>
							
							
							<div class="stretch"  style="background-image: url(<?php echo tt($imgsrc[0],455,400); ?>);"></div>
							
							<?php } else { ?>
												
							<div class="stretch"  style="background-image: url(<?php bloginfo ('template_url'); ?>/images/watermark.jpg);"></div>
							
							<?php } ?>
						</div>
					</div>
					<div class="clear"></div>

				<?php endwhile; endif; wp_reset_postdata(); ?>

			</div>



			<!-- END cyc fitness and glam go -->












			<!-- full width call out -->
			<div class="fourth-level">
			
	
				
				<div class="fullspan shorter" style="padding-bottom: 0 !important;">
				
					
					<?php query_posts('post_type=page&p=457&suppress_filters=1'); if(have_posts()) : while(have_posts()) : the_post(); $imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "Full"); ?>
						
					<img src="<?php bloginfo ('template_url'); ?>/images/street.jpg" alt="#">
					
					<div class="bigover">
					
						<h1 class="lumber h2"><?php the_title(); ?></h1>
						
						<?php the_content(); ?>
						
						
					</div>	
					
					<?php if(get_post_meta($post->ID, 'cebo_fullpic', true)) { ?>
								
								
						<div class="stretch"  style="background-image: url(<?php echo tt(get_post_meta($post->ID, 'cebo_fullpic', true),1200,400); ?>);"></div>
						
						<?php } elseif($imgsrc) { ?>
						
						
						<div class="stretch"  style="background-image: url(<?php echo tt($imgsrc[0],1200,240); ?>);"></div>
						
						<?php } else { ?>
											
						<div class="stretch"  style="background-image: url(<?php bloginfo ('template_url'); ?>/images/watermark.jpg);"></div>
						
						
					
					<?php } ?>	
					
					
					
										
					<?php endwhile; endif; wp_reset_query(); ?>				
					
					
				</div>

			
			</div>
			

			<div class="clear"></div>
			
			
			<!-- begin fifth level -->

			
			<div class="fifth-level">
				
				<ul class="blogposts">					
					
					<?php query_posts('post_type=page&p=285&suppress_filters=1'); if(have_posts()) : while(have_posts()) : the_post(); $imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "Full"); ?>
					
					<li>
						<?php if(get_post_meta($post->ID, 'cebo_fullpic', true)) { ?>
								
						<img src="<?php echo tt(get_post_meta($post->ID, 'cebo_fullpic', true),325,350); ?>" style="width: 350px; height: 325px" alt="<?php the_title(); ?>">		
						
						
						<?php } elseif($imgsrc) { ?>
						
						<img src="<?php echo tt($imgsrc[0],325,350); ?>" style="width: 350px; height: 325px" alt="<?php the_title(); ?>">	
						
						
						<?php } else { ?>
											
						<img src="<?php bloginfo ('template_url'); ?>/images/watermark.jpg" style="width: 350px; height: 325px" alt="<?php the_title(); ?>">
						
						<?php } ?>
						
						<div class="littleover">
							<h2 class="h1"><?php the_title(); ?></h2>
							
							<p><?php echo excerpt(20); ?></p>
							
							<a class="gone" href="<?php the_permalink(); ?>"><?php _e('Learn More >','row-theme-text'); ?></a>
						</div>
						
					</li>
					
					<?php endwhile; endif; wp_reset_query(); ?>	
					
					<?php query_posts('post_type=page&p=260&suppress_filters=1'); if(have_posts()) : while(have_posts()) : the_post(); $imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "Full"); ?>
					
					<li>
						<?php if(get_post_meta($post->ID, 'cebo_fullpic', true)) { ?>
								
						<img src="<?php echo tt(get_post_meta($post->ID, 'cebo_fullpic', true),325,350); ?>" style="width: 350px; height: 325px" alt="<?php the_title(); ?>">		
						
						
						<?php } elseif($imgsrc) { ?>
						
						<img src="<?php echo tt($imgsrc[0],325,350); ?>" style="width: 350px; height: 325px" alt="<?php the_title(); ?>">	
						
						
						<?php } else { ?>
											
						<img src="<?php bloginfo ('template_url'); ?>/images/watermark.jpg" style="width: 350px; height: 325px" alt="<?php the_title(); ?>">
						
						<?php } ?>
						
						<div class="littleover">
							<h2 class="h1"><?php the_title(); ?></h2>
							
							<p><?php echo excerpt(20); ?></p>
							
							<a class="gone" href="<?php the_permalink(); ?>"><?php _e('Learn More >','row-theme-text'); ?></a>
						</div>
						
					</li>
					
					<?php endwhile; endif; wp_reset_query(); ?>	
					
					
					
					
					
					<?php query_posts('post_type=page&p=271&suppress_filters=1'); if(have_posts()) : while(have_posts()) : the_post(); $imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "Full"); ?>
					
					<li>
						<?php if(get_post_meta($post->ID, 'cebo_fullpic', true)) { ?>
								
						<img src="<?php echo tt(get_post_meta($post->ID, 'cebo_fullpic', true),325,350); ?>" style="width: 350px; height: 325px" alt="<?php the_title(); ?>">		
						
						
						<?php } elseif($imgsrc) { ?>
						
						<img src="<?php echo tt($imgsrc[0],325,350); ?>" style="width: 350px; height: 325px" alt="<?php the_title(); ?>">	
						
						
						<?php } else { ?>
											
						<img src="<?php bloginfo ('template_url'); ?>/images/watermark.jpg" style="width: 350px; height: 325px" alt="<?php the_title(); ?>">
						
						<?php } ?>
						
						<div class="littleover">
							<h2 class="h1"><?php the_title(); ?></h2>
							
							<p><?php echo excerpt(20); ?></p>
							
							<a class="gone" href="<?php the_permalink(); ?>"><?php _e('Learn More >','row-theme-text'); ?></a>
						</div>
						
					</li>
					
					<?php endwhile; endif; wp_reset_query(); ?>	
					
					<?php query_posts('post_type=page&p=128&suppress_filters=1'); if(have_posts()) : while(have_posts()) : the_post(); $imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "Full"); ?>
					
					<li>
						<?php if(get_post_meta($post->ID, 'cebo_fullpic', true)) { ?>
								
						<img src="<?php echo tt(get_post_meta($post->ID, 'cebo_fullpic', true),325,350); ?>" style="width: 350px; height: 325px" alt="<?php the_title(); ?>">		
						
						
						<?php } elseif($imgsrc) { ?>
						
						<img src="<?php echo tt($imgsrc[0],325,350); ?>" style="width: 350px; height: 325px" alt="<?php the_title(); ?>">	
						
						
						<?php } else { ?>
											
						<img src="<?php bloginfo ('template_url'); ?>/images/watermark.jpg" style="width: 350px; height: 325px" alt="<?php the_title(); ?>">
						
						<?php } ?>
						
						<div class="littleover">
							<h2 class="h1"><?php the_title(); ?></h2>
							
							<p><?php echo excerpt(20); ?></p>
							
							<a class="gone" href="<?php the_permalink(); ?>"><?php _e('Learn More >','row-theme-text'); ?></a>
						</div>
						
					</li>
					
					<?php endwhile; endif; wp_reset_query(); ?>	
					
					<?php query_posts('post_type=page&p=242&suppress_filters=1'); if(have_posts()) : while(have_posts()) : the_post(); $imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "Full"); ?>
					
					<li>
						<?php if(get_post_meta($post->ID, 'cebo_fullpic', true)) { ?>
								
						<img src="<?php echo tt(get_post_meta($post->ID, 'cebo_fullpic', true),325,350); ?>" style="width: 350px; height: 325px" alt="<?php the_title(); ?>">		
						
						
						<?php } elseif($imgsrc) { ?>
						
						<img src="<?php echo tt($imgsrc[0],325,350); ?>" style="width: 350px; height: 325px" alt="<?php the_title(); ?>">	
						
						
						<?php } else { ?>
											
						<img src="<?php bloginfo ('template_url'); ?>/images/watermark.jpg" style="width: 350px; height: 325px" alt="<?php the_title(); ?>">
						
						<?php } ?>
						
						<div class="littleover">
							<h2 class="h1"><?php the_title(); ?></h2>
							
							<p><?php echo excerpt(20); ?></p>
							
							<a class="gone" href="<?php the_permalink(); ?>"><?php _e('Learn More >','row-theme-text'); ?></a>
						</div>
						
					</li>
					
					<?php endwhile; endif; wp_reset_query(); ?>	

					<?php query_posts('post_type=page&p=377&suppress_filters=1'); if(have_posts()) : while(have_posts()) : the_post(); $imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "Full"); ?>
					
					<li>
						<?php if(get_post_meta($post->ID, 'cebo_fullpic', true)) { ?>
								
						<img src="<?php echo tt(get_post_meta($post->ID, 'cebo_fullpic', true),325,350); ?>" style="width: 350px; height: 325px" alt="<?php the_title(); ?>">		
						
						
						<?php } elseif($imgsrc) { ?>
						
						<img src="<?php echo tt($imgsrc[0],325,350); ?>" style="width: 350px; height: 325px" alt="<?php the_title(); ?>">	
						
						
						<?php } else { ?>
											
						<img src="<?php bloginfo ('template_url'); ?>/images/watermark.jpg" style="width: 350px; height: 325px" alt="<?php the_title(); ?>">
						
						<?php } ?>
						
						<div class="littleover">
							<h2 class="h1"><?php the_title(); ?></h2>
							
							<p><?php echo excerpt(20); ?></p>
							
							<a class="gone" href="<?php the_permalink(); ?>"><?php _e('Learn More >','row-theme-text'); ?></a>
						</div>
						
					</li>
					
					<?php endwhile; endif; wp_reset_query(); ?>						
					
					
									
								
				</ul>
			
			
			
			</div>
			
			




<?php get_footer(); ?>
