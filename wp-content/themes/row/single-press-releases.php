<?php 

/* Basic Single Post Template 

*/
 get_header(); ?>



	<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
	
	
	
	<div class="home-intro">
							
	
		<?php if(get_post_meta($post->ID, 'cebo_fullpic', true)) { ?>
		
		
		<div class="stretch"  style="background-image: url(<?php echo get_post_meta($post->ID, 'cebo_fullpic', true); ?>);"></div>
		
		<?php } elseif($imgsrc) { ?>
		
		
		<div class="stretch"  style="background-image: url(<?php echo $imgsrc[0]; ?>);"></div>
		
		<?php } else { ?>
							
		<div class="stretch"  style="background-image: url(<?php bloginfo ('template_url'); ?>/images/watermark.jpg);"></div>
		
		
		<?php } ?>	
	
	</div>	
	
	<section class="contentarea">
	
						
		<div class="page-content alt-page-content">

			<h1><?php the_title(); ?></h1>

			<?php the_content(); ?>
			
			
			<div class="clear"></div>

			<?php if(get_post_meta($post->ID, 'cebo_presslink', true)) { ?>

				<div class="button-wrapper" style="margin: 20px 0;"><a onclick="_gaq.push(['_link', this.href]);return false;" class="button" href="<?php echo get_post_meta($post->ID, 'cebo_presslink', true); ?>" <?php if(get_post_meta($post->ID, 'cebo_external_link', true)) { ?>target="_blank"<?php } ?>>Link to Press</a></div>

			<?php } ?>

			<div class="clear"></div>

		</div>
		
		
		
		
		<div class="clear"></div>
		
		<?php endwhile; endif; wp_reset_query(); ?>	
					
<?php get_footer(); ?>