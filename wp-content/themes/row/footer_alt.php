<?php
/**
 * The template for displaying the footer.
 *
**/
?>

		<section class="botsect"> 
			
			<div class="container">
				
				<div class="social">
					<p>Follow us & Stay Connected</p>
				
					<div class="sosocial">
						
						<a href="#"><i class="fa fa-envelope"></i></a>
						<a href="http://www.facebook.com/RowNYC" target="_blank"><i class="fa fa-facebook"></i></a>
						<a href="http://www.twitter.com/rownyc" target="_blank"><i class="fa fa-twitter"></i></a>
						<a href="http://www.pinterest.com/rownyc" target="_blank"><i class="fa fa-pinterest"></i></a>
						<a href="http://www.instagram.com/rownyc" target="_blank"><i class="fa fa-instagram"></i></a>
						<a href="http://www.youtube.com/RowNYC" target="_blank"><i class="fa fa-youtube"></i></a>
					
					</div>
					
				</div>
				
				
				<div class="underline">
				
					<ul>
						<li><a href="<?php bloginfo('url'); ?>/times-square-hotels/"><?php _e('About','row-theme-text'); ?></a></li>
						<li><a href="<?php bloginfo('url'); ?>/contact/"><?php _e('Contact','row-theme-text'); ?></a></li>
						<li><a href="<?php bloginfo('url'); ?>/times-square-hotels/press/"><?php _e('Press','row-theme-text'); ?></a></li>
						<li><a href="<?php bloginfo('url'); ?>/privacy-policy/"><?php _e('Terms & Policy','row-theme-text'); ?></a></li>
					</ul>	
					
				</div>
				<br>
				<br>
				<a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_url'); ?>/bloginfo/images/logo.png" alt="Row New York City" /></a>
				<br>
				<br>
				<p class="copyright"><?php _e('All Materials @ 2014 Row NYC Hotel','row-theme-text'); ?></p>
			
			</div>
	
		</section>		
		
	</div>
	
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
	
	 <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/bloginfo/js/instafeed.min.js"></script>
	 <script type="text/javascript">
	    var feed = new Instafeed({
	        get: 'tagged',
	        limit: 6,
	        tagName: 'MoreNYthanNY',
	        resolution: 'standard_resolution',
	        clientId: 'ff29ecc8eea64dc19555c89f8652a2b8'
	    });
	    feed.run();
	</script>
	
	<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.16/jquery-ui.min.js?ver=3.5.2'></script>
	<script type="text/javascript">
		$(document).ready(function(){
		    $("#arrival_date").datepicker({
		        numberOfMonths: 1,
		        minDate: 0,
		        altField  : '#arv',
    			altFormat : 'yy-mm-dd',
    			format    : 'mm-dd-yy',
    			//minDate: new Date(2014, 00, 15),
		        onSelect: function(selected) {
		          $("#departure_date").datepicker("option","minDate", selected)
		        }
		    });
		    $("#departure_date").datepicker({ 
		        numberOfMonths: 1,
		        minDate: 0,
		        altField  : '#dep',
    			altFormat : 'yy-mm-dd',
    			format    : 'mm-dd-yy',
    			//minDate: new Date(2014, 00, 15),
		        onSelect: function(selected) {
		           $("#arrival_date").datepicker("option","maxDate", selected)
		        }
		    });
		    
		    
		    $('input.date').datepicker({
    beforeShow: function(input, inst)
    {
        inst.dpDiv.css({marginTop: -input.offsetHeight + 'px', marginLeft: input.offsetWidth + 'px'});
    }
}); 


	
			jQuery('form a.button').click(function(e) {
				e.preventDefault();
				_gaq.push(['_link', createURL() ]);
				return false;
			});




		});
	</script>



	<script src="<?php bloginfo('template_url'); ?>/bloginfo/js/responsiveslides.min.js"></script>
	<script>
  $(function() {
    // Slideshow 4
      $("#slider4").responsiveSlides({
        auto: false,
        pager: false,
        nav: true,
        speed: 500,
        namespace: "callbacks",
       });
  });
</script>


<!-- Marketing Tag -->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 1044598228;
var google_custom_params = window.google_tag_params;
var google_remarketing_only = true;
/* ]]> */
</script>
<script type="text/javascript" src="htpp://www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="http://googleads.g.doubleclick.net/pagead/viewthroughconversion/1044598228/?value=0&amp;guid=ON&amp;script=0"/>
</div>
</noscript>


<script type="text/javascript">

/*

var _gaq = _gaq || [];

_gaq.push(['_setAccount', 'UA-10318674-1']);

_gaq.push(['_setAllowLinker', true]);

_gaq.push(['_setDomainName', 'rownyc.com']);

_gaq.push(['_trackPageview']);



_gaq.push(['secondTracker._setAccount', 'UA-10318674-10']);

_gaq.push(['secondTracker._setAllowLinker', true]);

_gaq.push(['secondTracker._setDomainName', 'rownyc.com']);

_gaq.push(['secondTracker._trackPageview']);





(function() {

var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;

ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';

var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);

})();

*/

</script> 

<!-- Email signup popup -->
<?php wp_reset_query(); ?>
<?php if ( is_single() || is_page( 'blog' ) ) { ?>

	<?php query_posts('post_type=email-signup-form&posts_per_page=1'); if(have_posts()) : while(have_posts()) : the_post(); ?>

	<?php if( get_post_meta($post->ID,'misfit_signup_box', true) && $post->post_content != "" ) { ?>

		<div class="lb-overlay">

			<div class="the-popup">
			
				<span class="ns-close" onClick="sessionStorage.setItem('id', '1')"></span>

				<div class="popup-logo-area">
					
					<img class="popup-logo" src="<?php bloginfo('template_url'); ?>/bloginfo/images/logo.png" alt="NU Hotel logo">

				</div>

				<div class="popup-contents">

					<?php $contentstring = the_content(); ?>

					<?php _e($contentstring,'row-theme-text'); ?>

				</div>
				
				<div class="signup-form">

				<?php

					$signupholder = get_post_meta($post->ID,'misfit_signup_placeholder', true);
					$signupbuttontext = get_post_meta($post->ID,'misfit_signup_buttontext', true);


				?>
				
					<form method="post" action="http://rownyc.us4.list-manage1.com/subscribe?u=ae5d0eb33650e5a9963ca5a3e&id=cf8da27740">
						<input class="signup-field" type="email" required="" placeholder="<?php _e($signupholder,'row-theme-text'); ?>" id="mce-EMAIL" name="MERGE0" value="">
						<input class="signup-button" id="mc-embedded-subscribe" type="submit" value="<?php _e($signupbuttontext,'row-theme-text'); ?>">
					</form>
					
					<!--
						<style type="text/css">
							.hidden-from-view { left: -5000px; position: absolute; }
						</style>

						<form name="surveys" method="get" action="http://zmaildirect.com/app/new/MTIzNTQzMjYx" target="_blank">

							<input type="hidden" name="formId" value="MTIzNTQzMjYx">
							<input type="text" name="email" value="" size="25" placeholder="<?php echo get_post_meta($post->ID,'misfit_signup_placeholder', true); ?>">
							<input type="submit" value="<?php echo get_post_meta($post->ID,'misfit_signup_buttontext', true); ?>" class="button">
						</form>
					-->
					
				</div>

			</div>
				
		</div>
		
		<script>

			(function() {

				<?php if( get_post_meta($post->ID,'misfit_signup_box_pageview', true) ) { ?>

					<?php if( get_post_meta($post->ID,'misfit_signup_box_pageview', true) ) { ?>
						var rand_time = Math.floor(Math.random()*(10000-5000+1)+5000);						
					<?php } else { ?>
						var rand_time = 1300;
					<?php } ?>

					// alert(rand_time);

					$(window).on( 'load', function() {

						if (!sessionStorage.getItem('id')) {
						    
						    setTimeout( function() {
							
								$('.lb-overlay').addClass('ns-show');
								// $('#notification-trigger').attr('disabled','disabled');

							}, rand_time );

						}
						
					});	

				<?php } ?>

				$('.ns-close').click(function(){
					$('.lb-overlay').addClass('ns-hide'),
					$('.lb-overlay').removeClass('ns-show'),
					// vvv This is so it won't transition differently than expected
					setTimeout( function() {
						$('.lb-overlay').removeClass('ns-hide');
					}, 1300 );	
					// $('#notification-trigger').removeAttr('disabled','disabled');
				});



				<?php if( get_post_meta($post->ID,'misfit_signup_box_scroll', true) ) { ?>

					// When user scrolls past 1/3 of page

					var doc_height = $(document).height();
					// alert(doc_height);

					$(window).scroll(function() {
						scroll_height = $(document).scrollTop(),
						scroll_percent = scroll_height / doc_height;

							if (scroll_percent > 0.3 && !sessionStorage.getItem('id')) {
								$('.lb-overlay').addClass('ns-show');
							}
					});

				<?php } ?>

			})();

			<?php if( get_post_meta($post->ID,'misfit_signup_box_visit', true) ) { ?>

				if( !$.cookie('visit') ) {
						$.cookie('visit', '1');
					} else {
						$.cookie('visit', $.cookie('visit', Number) + 1);
					}

				// alert($.cookie('visit', Number));

				if ( $.cookie('visit', Number) >= 2 && !sessionStorage.getItem('id') ) {

						setTimeout( function() {
							$('.lb-overlay').addClass('ns-show');
						}, 1300);
				}

			<?php } ?>

		</script>

	<?php } ?>

	<?php endwhile; endif; wp_reset_query(); ?>
	
<?php } ?>
	
<!-- End Email signup popup -->

</body>
</html>