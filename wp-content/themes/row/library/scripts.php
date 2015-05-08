<script type="text/javascript">

	$(document).ready(function() {

		if( $(window).width() <= 640 ) {

			var boscobox_width = $('body').width();
			var boscobox_height = $('#bosco-box').height();

			$('#bosco-box').width(boscobox_width);
			$('#bosco-box').height(boscobox_height);

		} else {

			var boscobox_width = $('body').width() - $('.navigate').width();
			var boscobox_height = $('#bosco-box').height();

			$('#bosco-box').width(boscobox_width);
			$('#bosco-box').height(boscobox_height);

		}

		$(window).resize(function() {

			if( $(window).width() <= 640 ) {

				var boscobox_width = $('body').width();
				var boscobox_height = $('#bosco-box').height();

				$('#bosco-box').width(boscobox_width);
				$('#bosco-box').height(boscobox_height);

			} else {

				var boscobox_width = $('body').width() - $('.navigate').width();
				var boscobox_height = $('#bosco-box').height();

				$('#bosco-box').width(boscobox_width);
				$('#bosco-box').height(boscobox_height);

			}
			
		});

	});
					
</script>

<script src="<?php bloginfo ('template_url'); ?>/js/jquery.mmenu.min.js"></script>
<script type="text/javascript">
	
	<?php query_posts('post_type=weather&posts_per_page=1'); if(have_posts()) : while(have_posts()) : the_post(); ?>

		<?php if( $post->post_content != "" && get_post_meta($post->ID,'cebo_weather_live', true) ) { ?>

			$(document).ready(function(){

				// alert($('.banner.desktop').height());
			 	// top nav positioning
				var nsbox_height = $('.ns-box').outerHeight(),
					banner_height = $('.banner.desktop').height();
				$('.topnav').css('top', nsbox_height + banner_height);

			 	$(window).resize(function(){
			 		var nsbox_height = $('.ns-box').outerHeight(),
			 			banner_height = $('.banner.desktop').height();
					$('.topnav').css('top', nsbox_height + banner_height);
			 	});
		 	
			});

 		<?php } ?>

 	<?php endwhile; endif; wp_reset_query(); ?>

</script>