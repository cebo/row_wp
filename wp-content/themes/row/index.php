<?php get_header(); ?>




	<section class="contentarea">
			
			

			<div class="home-intro">
			
				<div class="wideover overlay">
					
					<h1><?php echo get_option('cebo_hblineone'); ?></h1>
					<h2><?php echo get_option('cebo_hblinetwo '); ?></h2>
				
				</div>
				
				
				<?php if(get_option('cebo_homebanner')) { ?>
		
		
				<div class="stretch"  style="background-image: url(<?php echo get_option('cebo_homebanner'); ?>);"></div>
				
				<?php } else { ?>
									
				<div class="stretch"  style="background-image: url(<?php bloginfo ('template_url'); ?>/images/watermark.jpg);"></div>
				
				
				<?php } ?>

				
				
			
			</div>
			
			
			
			
			<!-- begin second level -->
			
			
			
			
			<div class="second-level">
			
				
				<div class="leftside">
				
					<div class="textbox">
						
						<div class="innerbox">
						
							<?php echo get_option('cebo_hometext'); ?>
							
							
							<a class="opensays" href="#"><i class="fa fa-chevron-down"></i></a>
							<a class="opensays" href="#"><i class="fa fa-chevron-up"></i></a>
						
						</div>
					</div>
					
					
					<?php query_posts('post_type=page&p=449'); if(have_posts()) : while(have_posts()) : the_post(); $imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "Full"); ?>

					<div class="guestrooms">
						
						<div class="wideover overlay narrow">
							
						
							<h1><?php the_title(); ?></h1>
							<?php the_content(); ?>
							
							
							<?php $projects = get_page_with_template('page_rooms');
						 	 $projecturl= get_permalink($projects);
						  	if($projects) { ?>
						  
						  
							<a class="gone" href="<?php echo $projecturl; ?>">Tour The Rooms ></a>
							
							<?php } ?>
						
						</div>
						
					

								<?php if(get_post_meta($post->ID, 'cebo_fullpic', true)) { ?>
								
								
								<div class="stretch"  style="background-image: url(<?php echo get_post_meta($post->ID, 'cebo_fullpic', true); ?>);"></div>
								
								<?php } elseif($imgsrc) { ?>
								
								
								<div class="stretch"  style="background-image: url(<?php echo $imgsrc; ?>);"></div>
								
								<?php } else { ?>
													
								<div class="stretch"  style="background-image: url(<?php bloginfo ('template_url'); ?>/images/watermark.jpg);"></div>
								
								
								<?php } ?>


					</div>
					
					
					<?php endwhile; endif; wp_reset_query(); ?>	
					
				</div>
				
				
				
				<div class="rightside">
					
					<?php query_posts('post_type=page&p=443'); if(have_posts()) : while(have_posts()) : the_post(); $imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "Full"); ?>
					
					
					<div class="picone">
					
						<div class="wideover overlay narrow">
					
							<h1><?php the_title(); ?></h1>
							<?php the_content(); ?>
							
							
							<?php $projects = get_page_with_template('page_dining');
						 	 $projecturl= get_permalink($projects);
						  	if($projects) { ?>
						  
						  
							<a class="gone" href="<?php echo $projecturl; ?>">Visit Our Restaurant Bar ></a>
							
							<?php } ?>
						
						</div>
						
						<?php if(get_post_meta($post->ID, 'cebo_fullpic', true)) { ?>
								
								
						<div class="stretch"  style="background-image: url(<?php echo get_post_meta($post->ID, 'cebo_fullpic', true); ?>);"></div>
						
						<?php } elseif($imgsrc) { ?>
						
						
						<div class="stretch"  style="background-image: url(<?php echo $imgsrc; ?>);"></div>
						
						<?php } else { ?>
											
						<div class="stretch"  style="background-image: url(<?php bloginfo ('template_url'); ?>/images/watermark.jpg);"></div>
						
						
						<?php } ?>
						
						
						
						
						
					
					</div>
					
					<?php endwhile; endif; wp_reset_query(); ?>	
					
					<?php query_posts('post_type=page&p=445'); if(have_posts()) : while(have_posts()) : the_post(); $imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "Full"); ?>
					
					
					<div class="picone">
					
						<div class="wideover overlay narrow">
					
							<h1><?php the_title(); ?></h1>
							<?php the_content(); ?>
							
							
							<?php $projects = get_page_with_template('page_dining');
						 	 $projecturl= get_permalink($projects);
						  	if($projects) { ?>
						  
						  
							<a class="gone" href="<?php echo $projecturl; ?>">View Row NYC Gallery ></a>
							
							<?php } ?>
						
						</div>
						
						<?php if(get_post_meta($post->ID, 'cebo_fullpic', true)) { ?>
								
								
						<div class="stretch"  style="background-image: url(<?php echo get_post_meta($post->ID, 'cebo_fullpic', true); ?>);"></div>
						
						<?php } elseif($imgsrc) { ?>
						
						
						<div class="stretch"  style="background-image: url(<?php echo $imgsrc; ?>);"></div>
						
						<?php } else { ?>
											
						<div class="stretch"  style="background-image: url(<?php bloginfo ('template_url'); ?>/images/watermark.jpg);"></div>
						
						
						<?php } ?>
						
						
					<?php endwhile; endif; wp_reset_query(); ?>	
				
				</div>
				
				<div class="clear"></div>

			</div>
			
			
			</div>
			
			<div class="clear"></div>
			
		
		
		
		
		
			<!-- begin third level -->
			
			
			
			
			
			<div class="third-level">
			
				
				<div class="leftside">
					
					
					<?php query_posts('post_type=page&p=453'); if(have_posts()) : while(have_posts()) : the_post(); $imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "Full"); ?>
					
					
					<div class="picone">
					
						<div class="wideover overlay narrow">
					
							<h1><?php the_title(); ?></h1>
							<?php the_content(); ?>
							
							
							<?php $projects = get_page_with_template('page_dining');
						 	 $projecturl= get_permalink($projects);
						  	if($projects) { ?>
						  
						  
							<a class="gone" href="<?php echo $projecturl; ?>">Explore Our Interiors ></a>
							
							<?php } ?>
						
						</div>
						
						<?php if(get_post_meta($post->ID, 'cebo_fullpic', true)) { ?>
								
								
						<div class="stretch"  style="background-image: url(<?php echo get_post_meta($post->ID, 'cebo_fullpic', true); ?>);"></div>
						
						<?php } elseif($imgsrc) { ?>
						
						
						<div class="stretch"  style="background-image: url(<?php echo $imgsrc; ?>);"></div>
						
						<?php } else { ?>
											
						<div class="stretch"  style="background-image: url(<?php bloginfo ('template_url'); ?>/images/watermark.jpg);"></div>
						
						
						<?php } ?>
						
						
					<?php endwhile; endif; wp_reset_query(); ?>	
				
				</div>
					
					
				</div>
				
				<div class="rightside">
				<?php query_posts('post_type=page&p=451'); if(have_posts()) : while(have_posts()) : the_post(); $imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "Full"); ?>
					
					
					<div class="picone">
					
						<div class="wideover overlay narrow">
					
							<h1><?php the_title(); ?></h1>
							<?php the_content(); ?>
							
							
							<?php $projects = get_page_with_template('page_dining');
						 	 $projecturl= get_permalink($projects);
						  	if($projects) { ?>
						  
						  
							<a class="gone" href="<?php echo $projecturl; ?>">View Row NYC Gallery ></a>
							
							<?php } ?>
						
						</div>
						
						<?php if(get_post_meta($post->ID, 'cebo_fullpic', true)) { ?>
								
								
						<div class="stretch"  style="background-image: url(<?php echo get_post_meta($post->ID, 'cebo_fullpic', true); ?>);"></div>
						
						<?php } elseif($imgsrc) { ?>
						
						
						<div class="stretch"  style="background-image: url(<?php echo $imgsrc; ?>);"></div>
						
						<?php } else { ?>
											
						<div class="stretch"  style="background-image: url(<?php bloginfo ('template_url'); ?>/images/watermark.jpg);"></div>
						
						
						<?php } ?>
						
						
					<?php endwhile; endif; wp_reset_query(); ?>	
					
				
				</div>
				
				<div class="clear"></div>

			</div>
			
			
			</div>
			
			
			
			
			
			<!-- begin fourth level -->
			
			
			
			
			
			<div class="fourth-level">
			
			
				<div class="fullspan" style="">
				
					
					
					<?php query_posts('post_type=specials&posts_per_page=-1'); if(have_posts()) : while(have_posts()) : the_post(); $imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "Full"); ?>
					
					
					<div class="suboverlay narrow">
					
							<h1><?php the_title(); ?></h1>
							<h4><?php echo get_post_meta($post->ID, 'cebo_tagline', true); ?></h4>
							
							<a class="gone" href="<?php the_permalink(); ?>">Book Now ></a>
						
						</div>
					
						<?php if(get_post_meta($post->ID, 'cebo_fullpic', true)) { ?>
								
								
						<div class="stretch"  style="background-image: url(<?php echo get_post_meta($post->ID, 'cebo_fullpic', true); ?>);"></div>
						
						<?php } elseif($imgsrc) { ?>
						
						
						<div class="stretch"  style="background-image: url(<?php echo $imgsrc; ?>);"></div>
						
						<?php } else { ?>
											
						<div class="stretch"  style="background-image: url(<?php bloginfo ('template_url'); ?>/images/watermark.jpg);"></div>
						
						
						<?php } ?>
						
						
						
					<img src="<?php bloginfo ('template_url'); ?>/images/hall.jpg" style="" alt="#">
					
					
					<?php endwhile; endif; wp_reset_query(); ?>	
					
					
				</div>
				
				
				<div class="fullspan shorter">
				
					
					<?php query_posts('post_type=page&p=457'); if(have_posts()) : while(have_posts()) : the_post(); $imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "Full"); ?>
						
					<img src="<?php bloginfo ('template_url'); ?>/images/street.jpg" alt="#">
					
					<div class="bigover">
					
						<h1 class="lumber"><?php the_title(); ?></h1>
						
						<?php the_content(); ?>
						
						
					</div>	
					
					<?php if(get_post_meta($post->ID, 'cebo_fullpic', true)) { ?>
								
								
						<div class="stretch"  style="background-image: url(<?php echo get_post_meta($post->ID, 'cebo_fullpic', true); ?>);"></div>
						
						<?php } elseif($imgsrc) { ?>
						
						
						<div class="stretch"  style="background-image: url(<?php echo $imgsrc; ?>);"></div>
						
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
					
					
					<?php $query = new WP_Query( array( 'post_type' => 'tribe_events','eventDisplay' => 'upcoming', 'posts_per_page' => 1
					) ); if($query->have_posts()) : while($query->have_posts()) : $query->the_post(); $imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "Full"); ?>
					
										
					<li>
					
						<?php if(get_post_meta($post->ID, 'cebo_fullpic', true)) { ?>
								
						<img src="<?php echo get_post_meta($post->ID, 'cebo_fullpic', true); ?>" style="width: 350px; height: 325px" alt="<?php the_title(); ?>">		
						
						
						<?php } elseif($imgsrc) { ?>
						
						<img src="<?php echo $imgsrc; ?>" style="width: 350px; height: 325px" alt="<?php the_title(); ?>">	
						
						
						<?php } else { ?>
											
						<img src="<?php bloginfo ('template_url'); ?>/images/watermark.jpg" style="width: 350px; height: 325px" alt="<?php the_title(); ?>">
						
						<?php } ?>
						
						
						
						
						<div class="littleover">
							<h1>Upcoming Events</h1>
							
							<p>Et eum invenim eos prae provid eos aut occullabore laborum.</p>
							
							<a class="gone" href="<?php bloginfo('url'); ?>/events/">Learn More ></a>
						</div>
						
					</li>
					
					<?php endwhile; endif; wp_reset_query(); ?>	
					
					<?php query_posts('post_type=page&p=285'); if(have_posts()) : while(have_posts()) : the_post(); $imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "Full"); ?>
					
					<li>
						<?php if(get_post_meta($post->ID, 'cebo_fullpic', true)) { ?>
								
						<img src="<?php echo get_post_meta($post->ID, 'cebo_fullpic', true); ?>" style="width: 350px; height: 325px" alt="<?php the_title(); ?>">		
						
						
						<?php } elseif($imgsrc) { ?>
						
						<img src="<?php echo $imgsrc; ?>" style="width: 350px; height: 325px" alt="<?php the_title(); ?>">	
						
						
						<?php } else { ?>
											
						<img src="<?php bloginfo ('template_url'); ?>/images/watermark.jpg" style="width: 350px; height: 325px" alt="<?php the_title(); ?>">
						
						<?php } ?>
						
						<div class="littleover">
							<h1><?php the_title(); ?></h1>
							
							<p><?php echo excerpt(20); ?></p>
							
							<a class="gone" href="<?php the_permalink(); ?>">Learn More ></a>
						</div>
						
					</li>
					
					<?php endwhile; endif; wp_reset_query(); ?>	
					
					<?php query_posts('post_type=page&p=260'); if(have_posts()) : while(have_posts()) : the_post(); $imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "Full"); ?>
					
					<li>
						<?php if(get_post_meta($post->ID, 'cebo_fullpic', true)) { ?>
								
						<img src="<?php echo get_post_meta($post->ID, 'cebo_fullpic', true); ?>" style="width: 350px; height: 325px" alt="<?php the_title(); ?>">		
						
						
						<?php } elseif($imgsrc) { ?>
						
						<img src="<?php echo $imgsrc; ?>" style="width: 350px; height: 325px" alt="<?php the_title(); ?>">	
						
						
						<?php } else { ?>
											
						<img src="<?php bloginfo ('template_url'); ?>/images/watermark.jpg" style="width: 350px; height: 325px" alt="<?php the_title(); ?>">
						
						<?php } ?>
						
						<div class="littleover">
							<h1><?php the_title(); ?></h1>
							
							<p><?php echo excerpt(20); ?></p>
							
							<a class="gone" href="<?php the_permalink(); ?>">Learn More ></a>
						</div>
						
					</li>
					
					<?php endwhile; endif; wp_reset_query(); ?>	
					
					
					
					
					
					<?php query_posts('post_type=page&p=271'); if(have_posts()) : while(have_posts()) : the_post(); $imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "Full"); ?>
					
					<li>
						<?php if(get_post_meta($post->ID, 'cebo_fullpic', true)) { ?>
								
						<img src="<?php echo get_post_meta($post->ID, 'cebo_fullpic', true); ?>" style="width: 350px; height: 325px" alt="<?php the_title(); ?>">		
						
						
						<?php } elseif($imgsrc) { ?>
						
						<img src="<?php echo $imgsrc; ?>" style="width: 350px; height: 325px" alt="<?php the_title(); ?>">	
						
						
						<?php } else { ?>
											
						<img src="<?php bloginfo ('template_url'); ?>/images/watermark.jpg" style="width: 350px; height: 325px" alt="<?php the_title(); ?>">
						
						<?php } ?>
						
						<div class="littleover">
							<h1><?php the_title(); ?></h1>
							
							<p><?php echo excerpt(20); ?></p>
							
							<a class="gone" href="<?php the_permalink(); ?>">Learn More ></a>
						</div>
						
					</li>
					
					<?php endwhile; endif; wp_reset_query(); ?>	
					
					<?php query_posts('post_type=page&p=128'); if(have_posts()) : while(have_posts()) : the_post(); $imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "Full"); ?>
					
					<li>
						<?php if(get_post_meta($post->ID, 'cebo_fullpic', true)) { ?>
								
						<img src="<?php echo get_post_meta($post->ID, 'cebo_fullpic', true); ?>" style="width: 350px; height: 325px" alt="<?php the_title(); ?>">		
						
						
						<?php } elseif($imgsrc) { ?>
						
						<img src="<?php echo $imgsrc; ?>" style="width: 350px; height: 325px" alt="<?php the_title(); ?>">	
						
						
						<?php } else { ?>
											
						<img src="<?php bloginfo ('template_url'); ?>/images/watermark.jpg" style="width: 350px; height: 325px" alt="<?php the_title(); ?>">
						
						<?php } ?>
						
						<div class="littleover">
							<h1><?php the_title(); ?></h1>
							
							<p><?php echo excerpt(20); ?></p>
							
							<a class="gone" href="<?php the_permalink(); ?>">Learn More ></a>
						</div>
						
					</li>
					
					<?php endwhile; endif; wp_reset_query(); ?>	
					
					<?php query_posts('post_type=page&p=242'); if(have_posts()) : while(have_posts()) : the_post(); $imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "Full"); ?>
					
					<li>
						<?php if(get_post_meta($post->ID, 'cebo_fullpic', true)) { ?>
								
						<img src="<?php echo get_post_meta($post->ID, 'cebo_fullpic', true); ?>" style="width: 350px; height: 325px" alt="<?php the_title(); ?>">		
						
						
						<?php } elseif($imgsrc) { ?>
						
						<img src="<?php echo $imgsrc; ?>" style="width: 350px; height: 325px" alt="<?php the_title(); ?>">	
						
						
						<?php } else { ?>
											
						<img src="<?php bloginfo ('template_url'); ?>/images/watermark.jpg" style="width: 350px; height: 325px" alt="<?php the_title(); ?>">
						
						<?php } ?>
						
						<div class="littleover">
							<h1><?php the_title(); ?></h1>
							
							<p><?php echo excerpt(20); ?></p>
							
							<a class="gone" href="<?php the_permalink(); ?>">Learn More ></a>
						</div>
						
					</li>
					
					<?php endwhile; endif; wp_reset_query(); ?>	
					
					
					
					
					<?php query_posts('post_type=page&p=377'); if(have_posts()) : while(have_posts()) : the_post(); $imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "Full"); ?>
					
					<li>
						<?php if(get_post_meta($post->ID, 'cebo_fullpic', true)) { ?>
								
						<img src="<?php echo get_post_meta($post->ID, 'cebo_fullpic', true); ?>" style="width: 350px; height: 325px" alt="<?php the_title(); ?>">		
						
						
						<?php } elseif($imgsrc) { ?>
						
						<img src="<?php echo $imgsrc; ?>" style="width: 350px; height: 325px" alt="<?php the_title(); ?>">	
						
						
						<?php } else { ?>
											
						<img src="<?php bloginfo ('template_url'); ?>/images/watermark.jpg" style="width: 350px; height: 325px" alt="<?php the_title(); ?>">
						
						<?php } ?>
						
						<div class="littleover">
							<h1><?php the_title(); ?></h1>
							
							<p><?php echo excerpt(20); ?></p>
							
							<a class="gone" href="<?php the_permalink(); ?>">Learn More ></a>
						</div>
						
					</li>
					
					<?php endwhile; endif; wp_reset_query(); ?>	
					
					
					
					<?php query_posts('post_type=page&p=220'); if(have_posts()) : while(have_posts()) : the_post(); $imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "Full"); ?>
					
					<li>
						<?php if(get_post_meta($post->ID, 'cebo_fullpic', true)) { ?>
								
						<img src="<?php echo get_post_meta($post->ID, 'cebo_fullpic', true); ?>" style="width: 350px; height: 325px" alt="<?php the_title(); ?>">		
						
						
						<?php } elseif($imgsrc) { ?>
						
						<img src="<?php echo $imgsrc; ?>" style="width: 350px; height: 325px" alt="<?php the_title(); ?>">	
						
						
						<?php } else { ?>
											
						<img src="<?php bloginfo ('template_url'); ?>/images/watermark.jpg" style="width: 350px; height: 325px" alt="<?php the_title(); ?>">
						
						<?php } ?>
						
						<div class="littleover">
							<h1><?php the_title(); ?></h1>
							
							<p><?php echo excerpt(20); ?></p>
							
							<a class="gone" href="<?php the_permalink(); ?>">Learn More ></a>
						</div>
						
					</li>
					
					<?php endwhile; endif; wp_reset_query(); ?>	
					
					<?php query_posts('post_type=page&p=96'); if(have_posts()) : while(have_posts()) : the_post(); $imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "Full"); ?>
					
					<li>
						<?php if(get_post_meta($post->ID, 'cebo_fullpic', true)) { ?>
								
						<img src="<?php echo get_post_meta($post->ID, 'cebo_fullpic', true); ?>" style="width: 350px; height: 325px" alt="<?php the_title(); ?>">		
						
						
						<?php } elseif($imgsrc) { ?>
						
						<img src="<?php echo $imgsrc; ?>" style="width: 350px; height: 325px" alt="<?php the_title(); ?>">	
						
						
						<?php } else { ?>
											
						<img src="<?php bloginfo ('template_url'); ?>/images/watermark.jpg" style="width: 350px; height: 325px" alt="<?php the_title(); ?>">
						
						<?php } ?>
						
						<div class="littleover">
							<h1><?php the_title(); ?></h1>
							
							<p><?php echo excerpt(20); ?></p>
							
							<a class="gone" href="<?php the_permalink(); ?>">Learn More ></a>
						</div>
						
					</li>
					
					<?php endwhile; endif; wp_reset_query(); ?>		
					
					
					
					<?php query_posts('post_type=page&p=371'); if(have_posts()) : while(have_posts()) : the_post(); $imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "Full"); ?>
					
					<li>
						<?php if(get_post_meta($post->ID, 'cebo_fullpic', true)) { ?>
								
						<img src="<?php echo get_post_meta($post->ID, 'cebo_fullpic', true); ?>" style="width: 350px; height: 325px" alt="<?php the_title(); ?>">		
						
						
						<?php } elseif($imgsrc) { ?>
						
						<img src="<?php echo $imgsrc; ?>" style="width: 350px; height: 325px" alt="<?php the_title(); ?>">	
						
						
						<?php } else { ?>
											
						<img src="<?php bloginfo ('template_url'); ?>/images/watermark.jpg" style="width: 350px; height: 325px" alt="<?php the_title(); ?>">
						
						<?php } ?>
						
						<div class="littleover">
							<h1><?php the_title(); ?></h1>
							
							<p><?php echo excerpt(20); ?></p>
							
							<a class="gone" href="<?php the_permalink(); ?>">Learn More ></a>
						</div>
						
					</li>
					
					<?php endwhile; endif; wp_reset_query(); ?>	
					
					<?php query_posts('post_type=page&p=373'); if(have_posts()) : while(have_posts()) : the_post(); $imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "Full"); ?>
					
					<li>
						<?php if(get_post_meta($post->ID, 'cebo_fullpic', true)) { ?>
								
						<img src="<?php echo get_post_meta($post->ID, 'cebo_fullpic', true); ?>" style="width: 350px; height: 325px" alt="<?php the_title(); ?>">		
						
						
						<?php } elseif($imgsrc) { ?>
						
						<img src="<?php echo $imgsrc; ?>" style="width: 350px; height: 325px" alt="<?php the_title(); ?>">	
						
						
						<?php } else { ?>
											
						<img src="<?php bloginfo ('template_url'); ?>/images/watermark.jpg" style="width: 350px; height: 325px" alt="<?php the_title(); ?>">
						
						<?php } ?>
						
						<div class="littleover">
							<h1><?php the_title(); ?></h1>
							
							<p><?php echo excerpt(20); ?></p>
							
							<a class="gone" href="<?php the_permalink(); ?>">Learn More ></a>
						</div>
						
					</li>
					
					<?php endwhile; endif; wp_reset_query(); ?>	
					
					
					
					<?php query_posts('post_type=page&p=375'); if(have_posts()) : while(have_posts()) : the_post(); $imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "Full"); ?>
					
					<li>
						<?php if(get_post_meta($post->ID, 'cebo_fullpic', true)) { ?>
								
						<img src="<?php echo get_post_meta($post->ID, 'cebo_fullpic', true); ?>" style="width: 350px; height: 325px" alt="<?php the_title(); ?>">		
						
						
						<?php } elseif($imgsrc) { ?>
						
						<img src="<?php echo $imgsrc; ?>" style="width: 350px; height: 325px" alt="<?php the_title(); ?>">	
						
						
						<?php } else { ?>
											
						<img src="<?php bloginfo ('template_url'); ?>/images/watermark.jpg" style="width: 350px; height: 325px" alt="<?php the_title(); ?>">
						
						<?php } ?>
						
						<div class="littleover">
							<h1><?php the_title(); ?></h1>
							
							<p><?php echo excerpt(20); ?></p>
							
							<a class="gone" href="<?php the_permalink(); ?>">Learn More ></a>
						</div>
						
					</li>
					
					<?php endwhile; endif; wp_reset_query(); ?>	
					
					
					
					
					
								
				</ul>
			
			
			
			</div>
			
			




<?php get_footer(); ?>