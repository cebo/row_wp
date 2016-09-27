<?php 

	/* Basic Page Template */

	get_header();

?>

<?php
	
	if ( have_posts() ) : while ( have_posts() ) : the_post();

		$fullpic = get_post_meta( $post->ID, 'cebo_fullpic', true );
		$imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "Full" );
		
		$booklink = get_post_meta( $post->ID, 'cebo_booklink', true );

?>
	
	<section class="contentarea">

		<div class="toppage-intro toptitle-pagedefault">

			<?php if( $fullpic ) { ?>

				<div class="toppage-image" style="background-image: url(<?php echo tt( $fullpic, 1200, 420 ); ?>);"></div>

			<?php } elseif( $imgsrc ) { ?>

				<div class="toppage-image" style="background-image: url(<?php echo tt( $imgsrc[0], 1200, 420 ); ?>);"></div>

			<?php } else { ?>

				<div class="toppage-image" style="background-image: url(<?php bloginfo ('template_url'); ?>/images/watermark.jpg);"></div>

			<?php } ?>	

		</div>
						
		<div class="page-content alt-page-content">

			<h1><?php the_title(); ?></h1>

			<?php the_content(); ?>

			<?php if ( $booklink ) { ?>

				<a onclick="_gaq.push(['_link', this.href]);return false;" class="button" href="<?php echo $booklink; ?>"><?php _e('Reserve Now','row-theme-text'); ?></a>
			
			<?php } ?>
			
			

			<!-- script placement on 1192 -->

			<?php if ( is_page( array(1192) ) ) { ?>

				<script type="text/javascript">
					(function(w,d) {
						function l(){
							var site = '5457', page = 'row_nyc_save25', s, er = d.createElement('script');
							er.type = 'text/javascript'; er.async = true;
							er.src = '//o2.eyereturn.com/?site=' + site + '&page=' + page;
							s = d.getElementsByTagName('script')[0];
							s.parentNode.insertBefore(er, s);
							}
							if (w.addEventListener) { w.addEventListener("load", l, false); }
							else if (w.attachEvent) { w.attachEvent("onload",l); 
						}
					})(window,document);
				</script>

			<?php } ?>

			<!-- script placement on 2998 -->

			<?php if ( is_page( array(2998) ) ) { ?>

				<script type="text/javascript">
					(function(w,d) {
						function l(){
							var site = '5457', page = 'row_nyc_landing', s, er = d.createElement('script');
							er.type = 'text/javascript'; er.async = true;
							er.src = '//o2.eyereturn.com/?site=' + site + '&page=' + page;
							s = d.getElementsByTagName('script')[0];
							s.parentNode.insertBefore(er, s);
							}
							if (w.addEventListener) { w.addEventListener("load", l, false); }
							else if (w.attachEvent) { w.attachEvent("onload",l); 
						}
					})(window,document);
				</script>

			<?php } ?>

			<!-- script placement on 3934 -->

			<?php if ( is_page( array(3934) ) ) { ?>

				<script type="text/javascript">

				(function l(d){
				                var site = '5457', page = 'br_breakfast', s, er = d.createElement('script');
				                er.type = 'text/javascript';
				                er.async = true;
				                er.src = '//o2.eyereturn.com/?site=' + site + '&page=' + page;
				                s = d.getElementsByTagName('script')[0];
				                s.parentNode.insertBefore(er, s);
				})(document);

				</script>

			<?php } ?>		

			<!-- script placement on 3862 -->	

			<?php if ( is_page( array(3862) ) ) { ?>

				<script type="text/javascript">

				(function l(d){
				                var site = '5457', page = 'br_save_nyc', s, er = d.createElement('script');
				                er.type = 'text/javascript';
				                er.async = true;
				                er.src = '//o2.eyereturn.com/?site=' + site + '&page=' + page;
				                s = d.getElementsByTagName('script')[0];
				                s.parentNode.insertBefore(er, s);
				})(document);

				</script>

			<?php } ?>

			
			<div class="clear"></div>

		</div>
		
		
		
		
		<div class="clear"></div>
		



<?php endwhile; endif; wp_reset_query(); ?>	


					
<?php get_footer(); ?>