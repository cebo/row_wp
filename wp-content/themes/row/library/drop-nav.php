<!-- new sub layers -->		
		
<ul class="dropbox inhoteldrop">
		
	<li class="drop-intro">
		
		<?php query_posts('post_type=page&p=353'); if(have_posts()) : while(have_posts()) : the_post(); ?>
			<br>
			<h1>Hotel</h1>
			<br>
		<?php endwhile; endif; wp_reset_query(); ?>								
	</li>
	
	<?php $bloblor =  array(353,12,331,10,1387); query_posts(array(
						'post_type' => 'page',
						'post__in' => $bloblor,
						'orderby' => 'menu_order',
						)
						
						); if(have_posts()) : while(have_posts()) : the_post(); ?>
	
	
	<li>
	
	
		<?php if(get_post_meta($post->ID, 'cebo_fullpic', true)) { ?>
		
		<a href="<?php the_permalink(); ?>"><img src="<?php echo get_post_meta($post->ID, 'cebo_fullpic', true); ?>" alt="<?php the_title(); ?>"></a>
		
		<?php } elseif($imgsrc) { ?>
		
		
		<a href="<?php the_permalink(); ?>"><img src="<?php echo $imgsrc[0]; ?>" alt="<?php the_title(); ?>"></a>

		<?php } elseif( has_post_thumbnail() ) { ?>

				<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium'); ?></a>							
		
		<?php } else { ?>
							
		<a href="<?php the_permalink(); ?>"><img src="<?php bloginfo ('template_url'); ?>/images/watermark.jpg" alt="<?php the_title(); ?>"></a>
		
		
		<?php } ?>							

		<h3><?php the_title(); ?></h3>
	</li>
	
	<?php endwhile; endif; wp_reset_query(); ?>	
	
							
</ul>
	
	
	
<ul id="dropbox" class="dropbox inroomdrop">
	
	<li class="drop-intro">
		
		<?php query_posts('post_type=page&p=86'); if(have_posts()) : while(have_posts()) : the_post(); ?>
			
			<br>
		<h1><?php the_title(); ?></h1>
		<br>

		<?php endwhile; endif; wp_reset_query(); ?>	
		
	</li>
	
	<?php query_posts('post_type=rooms&posts_per_page=-1'); if(have_posts()) : while(have_posts()) : the_post(); ?>
	
	
	<li>
	
	
		<?php if(get_post_meta($post->ID, 'cebo_fullpic', true)) { ?>
		
		<a href="<?php the_permalink(); ?>"><img src="<?php echo get_post_meta($post->ID, 'cebo_fullpic', true); ?>" alt="<?php the_title(); ?>"></a>
		
		<?php } elseif($imgsrc) { ?>
		
		
		<a href="<?php the_permalink(); ?>"><img src="<?php echo $imgsrc[0]; ?>" alt="<?php the_title(); ?>"></a>
		
		<?php } else { ?>
							
		<a href="<?php the_permalink(); ?>"><img src="<?php bloginfo ('template_url'); ?>/images/watermark.jpg" alt="<?php the_title(); ?>"></a>
		
		
		<?php } ?>							

		<h3><?php the_title(); ?></h3>
	</li>
	
	<?php endwhile; endif; wp_reset_query(); ?>		
	
					
</ul>
		
		
<ul id="dropbox" class="dropbox ingallerydrop">

	<?php 

			global $sitepress;
			// save current language
			$current_lang = $sitepress->get_current_language();
			//get the default language
			$default_lang = $sitepress->get_default_language();
			//fetch posts in default language
			$sitepress->switch_lang($default_lang);
			//query args
			$custom_query_args_two = array(
			    'post_type' => 'page', 
			    'page_id' => 89, 
			);

		?>


		<li class="drop-intro">

			<?php
				//build query
				$custom_query_two = new wp_query($custom_query_args_two);
				//loop
				while ( $custom_query_two->have_posts() ) : $custom_query_two->the_post();
				    //check if a translation exist
				    $t_post_id_two = icl_object_id($post->ID, 'post', false, $current_lang);
				    if(!is_null($t_post_id_two)){
				        $t_post = get_post( $t_post_id_two);
		    ?>
				
				<br>
				<h1><?php the_title($t_post_id_two); ?></h1>
			
				<br>

			<?php } else {  //no translation? display default language ?>							

				<?php //query_posts('post_type=page&p=54&suppress_filters=0'); if(have_posts()) : while(have_posts()) : the_post(); ?>
				
				<br>								
				<h1><?php the_title(); ?></h1>
			
				<br>
																			
			<?php } endwhile; wp_reset_query(); $sitepress->switch_lang($current_lang); ?>	

		</li>
		
	<?php query_posts('post_type=imagegalleries&posts_per_page=-1'); if(have_posts()) : while(have_posts()) : the_post(); $imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "Full"); ?>
	
	
	<li>
		
		<?php if($imgsrc) { ?>
		
		
		<a href="<?php the_permalink(); ?>"><img src="<?php echo $imgsrc[0]; ?>" alt="<?php the_title(); ?>"></a>
		
		<?php } else { ?>
							
		<a href="<?php the_permalink(); ?>"><img src="<?php bloginfo ('template_url'); ?>/images/watermark.jpg" alt="<?php the_title(); ?>"></a>
		
		
		<?php } ?>							

		<h3><?php the_title(); ?></h3>
	</li>
	
	<?php endwhile; endif; wp_reset_query(); ?>

	<?php query_posts('post_type=amenities&posts_per_page=1&p=3097'); if(have_posts()) : while(have_posts()) : the_post(); $imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "Full"); ?>
	
	
	<li>
		
		<?php if($imgsrc) { ?>
		
		
		<a href="<?php the_permalink(); ?>"><img src="<?php echo $imgsrc[0]; ?>" alt="<?php the_title(); ?>"></a>
		
		<?php } else { ?>
							
		<a href="<?php the_permalink(); ?>"><img src="<?php bloginfo ('template_url'); ?>/images/watermark.jpg" alt="<?php the_title(); ?>"></a>
		
		
		<?php } ?>							

		<h3><?php the_title(); ?></h3>
	</li>
	
	<?php endwhile; endif; wp_reset_query(); ?>		
	
					
</ul>	
	
	
	
<ul class="dropbox indealsdrop">
	
	<li class="drop-intro">
		
		<?php query_posts('post_type=page&p=92'); if(have_posts()) : while(have_posts()) : the_post(); ?>
			
			<br>
		<h1><?php the_title(); ?></h1>
		<br>
		
		<?php endwhile; endif; wp_reset_query(); ?>								
	</li>
	
	<?php query_posts(array('showposts' => 20, 'post_type' => 'specials', ,)); if(have_posts()) : while(have_posts()) : the_post();  $imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "Full"); ?>
		
		
	<li>
	
		
		<?php if($imgsrc) { ?>
		
		
		<a href="<?php the_permalink(); ?>"><img src="<?php echo $imgsrc[0]; ?>" alt="<?php the_title(); ?>"></a>
		
		<?php } else { ?>
							
		<a href="<?php the_permalink(); ?>"><img src="<?php bloginfo ('template_url'); ?>/images/watermark.jpg" alt="<?php the_title(); ?>"></a>
		
		
		<?php } ?>							

		<h3><?php the_title(); ?></h3>
	</li>
	
	<?php endwhile; endif; wp_reset_query(); ?>	
			
									
</ul>



<ul class="dropbox ineatsdrop">

	<?php 

		global $sitepress;
		// save current language
		$current_lang = $sitepress->get_current_language();
		//get the default language
		$default_lang = $sitepress->get_default_language();
		//fetch posts in default language
		$sitepress->switch_lang($default_lang);
		//query args
		$custom_query_args_two = array(
		    'post_type' => 'page', 
		    'page_id' => 54, 
		);

	?>


	<li class="drop-intro">

		<?php
			//build query
			$custom_query_two = new wp_query($custom_query_args_two);
			//loop
			while ( $custom_query_two->have_posts() ) : $custom_query_two->the_post();
			    //check if a translation exist
			    $t_post_id_two = icl_object_id($post->ID, 'post', false, $current_lang);
			    if(!is_null($t_post_id_two)){
			        $t_post = get_post( $t_post_id_two);
	    ?>

			<br><h1><?php the_title($t_post_id_two); ?></h1>
		
			<br>

		<?php } else {  //no translation? display default language ?>							

			<?php //query_posts('post_type=page&p=54&suppress_filters=0'); if(have_posts()) : while(have_posts()) : the_post(); ?>
											
			<br><h1><?php the_title(); ?></h1>
		
			<br>
																		
		<?php } endwhile; wp_reset_query(); ?>	

	</li>

	<?php 

		//query args
		$custom_query_args = array(
		    'post_type' => 'amenities', 
		    'posts_per_page' => 4, 
		    'post__not_in' => array(32,33,3097,5819), 
		);

		//build query
		$custom_query = new wp_query($custom_query_args);
		//loop
		while ( $custom_query->have_posts() ) : $custom_query->the_post();
		    //check if a translation exist
		    $t_post_id = icl_object_id($post->ID, 'post', false, $current_lang);
		    if(!is_null($t_post_id)){
		        $t_post = get_post( $t_post_id);
	?>


	    <li>

			<?php if(get_post_meta($t_post_id, 'cebo_thumbtwo', true)) { ?>
		
			<a href="<?php the_permalink($t_post_id); ?>"><img src="<?php echo get_post_meta($t_post_id, 'cebo_thumbtwo', true); ?>" alt="<?php the_title($t_post_id); ?>"></a>
			
			<?php } elseif($imgsrc) { ?>

									
			<a href="<?php the_permalink($t_post_id); ?>"><img src="<?php echo $imgsrc[0]; ?>" alt="<?php the_title($t_post_id); ?>"></a>

			<?php } ?>			

			<h3><?php the_title($t_post_id); ?></h3>
			
		</li>		

	<?php } else {  //no translation? display default language ?>

	    <li>
		
			<?php if(get_post_meta($post->ID, 'cebo_thumbtwo', true)) { ?>
		
			<a href="<?php the_permalink(); ?>"><img src="<?php echo get_post_meta($post->ID, 'cebo_thumbtwo', true); ?>" alt="<?php the_title(); ?>"></a>
			
			<?php } elseif($imgsrc) { ?>

									
			<a href="<?php the_permalink(); ?>"><img src="<?php echo $imgsrc[0]; ?>" alt="<?php the_title(); ?>"></a>

			<?php } ?>			

			<h3><?php the_title(); ?></h3>

		</li>							        

	<?php
		
		} endwhile; wp_reset_query(); $sitepress->switch_lang($current_lang);

		//query_posts(array('post_type' => 'amenities', 'posts_per_page' => 3, 'post__not_in' => icl_object_id(array(32,33), true), 'suppress_filters' => 0,)); if(have_posts()) : while(have_posts()) : the_post(); 	$imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "Full"); 

	?>

							
	</ul>
			
	<ul class="dropbox inexploredrop">

	<li class="drop-intro">
		
		<?php query_posts('post_type=page&p=148'); if(have_posts()) : while(have_posts()) : the_post();  $imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "Full"); ?>
			
			<br>
		<h1><?php the_title(); ?></h1>
		<br>
		
			
		<?php endwhile; endif; wp_reset_query(); ?>								
	</li>

	<?php query_posts(array('showposts' => 20, 'post_parent' => 148, 'post_type' => 'page', ,)); if(have_posts()) : while(have_posts()) : the_post(); ?>


	<li>


		<?php if(get_post_meta($post->ID, 'cebo_thumbtwo', true)) { ?>
		
		<a href="<?php the_permalink(); ?>"><img src="<?php echo get_post_meta($post->ID, 'cebo_thumbtwo', true); ?>" alt="<?php the_title(); ?>"></a>
		
		<?php } elseif($imgsrc) { ?>
		
		
		<a href="<?php the_permalink(); ?>"><img src="<?php echo $imgsrc[0]; ?>" alt="<?php the_title(); ?>"></a>

								
		
		<?php } else { ?>
							
		<a href="<?php the_permalink(); ?>"><img src="<?php bloginfo ('template_url'); ?>/images/watermark.jpg" alt="<?php the_title(); ?>"></a>
		
		
		<?php } ?>							

		<h3><?php the_title(); ?></h3>
	</li>

	<?php endwhile; endif; wp_reset_query(); ?>	

						
</ul>