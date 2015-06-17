<?php
/**
 * The template for displaying the footer.
 *
**/

 	global $sitepress;
	$current_lang = $sitepress->get_current_language();
	$default_lang = $sitepress->get_default_language();
	
?>

	
		<div class="footer">

			<section class="navigate mobile">
				
				<ul class="supernav">
					
					<li>
						<a href="<?php bloginfo ('url'); ?>/times-square-hotels"><span class="hotel"></span><p><?php _e('Hotel','row-theme-text'); ?></p></a>
					</li>
					
					<li>

						<?php if( $current_lang == 'en') { ?>

							<a href="<?php echo get_option('cebo_genbooklink'); ?>" target="_blank" onclick="_gaq.push(['_link', this.href]);return false;"><span class="reserve"></span><p><?php _e('Reservations','row-theme-text'); ?></p></a>

						<?php } elseif( $current_lang == 'zh-hans') { ?>

							<a href="<?php echo get_option('cebo_genbooklink'); ?>/zh-CN" onclick="_gaq.push(['_link', this.href]);return false;"><span class="reserve"></span><p><?php _e('Reservations','row-theme-text'); ?></p></a>

						<?php } elseif( $current_lang == 'pt-br') { ?>

							<a href="<?php echo get_option('cebo_genbooklink'); ?>/pt" onclick="_gaq.push(['_link', this.href]);return false;"><span class="reserve"></span><p><?php _e('Reservations','row-theme-text'); ?></p></a>

						<?php } elseif( $current_lang == 'de' || 'es' || 'fr' || 'it' ) { ?>

							<a href="<?php echo get_option('cebo_genbooklink'); ?>/<?php echo $current_lang; ?>" onclick="_gaq.push(['_link', this.href]);return false;"><span class="reserve"></span><p><?php _e('Reservations','row-theme-text'); ?></p></a>

						<?php } else { ?>

							<a href="<?php echo get_option('cebo_genbooklink'); ?>" onclick="_gaq.push(['_link', this.href]);return false;"><span class="reserve"></span><p><?php _e('Reservations','row-theme-text'); ?></p></a>

						<?php } ?>

					</li>

					<li>
						<a href="<?php bloginfo ('url'); ?>/?page_id=86"><span class="rooms"></span><p><?php _e('Rooms','row-theme-text'); ?></p></a>
					</li>
					
					<li>
						<a href="<?php bloginfo ('url'); ?>/gallery/inside-row-nyc"><span class="gallery"></span><p><?php _e('Gallery','row-theme-text'); ?></p></a>
					</li>
					
					<li>
						<a href="<?php bloginfo ('url'); ?>/?page_id=92"><span class="deals"></span><p><?php _e('Deals','row-theme-text'); ?></p></a>
					</li>
					
					<li>
						<a href="<?php bloginfo ('url'); ?>/?page_id=54"><span class="eats"></span><p><?php _e('Eat & Drink','row-theme-text'); ?></p></a>
					</li>
					
					<li>
						<a href="<?php bloginfo ('url'); ?>/?page_id=148"><span class="explore"></span><p><?php _e('Explore NYC','row-theme-text'); ?></p></a>				
					</li>
					
					<li>
						<a href="<?php bloginfo ('url'); ?>/contact"><span class="contact"></span><p><?php _e('Contact','row-theme-text'); ?></p></a>
					</li>

					<li class="socials">
						<ul>
							<li><a href="http://www.facebook.com/RowNYC" target="_blank"><i class="fa fa-facebook"></i></a></li>
							<li><a href="http://www.twitter.com/rownyc" target="_blank"><i class="fa fa-twitter"></i></a></li>
							<li><a href="www.pinterest.com/rownyc" target="_blank"><i class="fa fa-pinterest"></i></a></li>
							<li><a href="http://www.instagram.com/rownyc" target="_blank"><i class="fa fa-instagram"></i></a></li>
							<li><a href="http://www.youtube.com/RowNYC" target="_blank"><i class="fa fa-youtube"></i></a></li>
						</ul>
					</li>
				
				</ul>

			</section>
					
			<div class="tier-one">
			
				<ul>							
					<?php wp_nav_menu( array( icl_object_id(13, 'Footer Navigation'),  'theme_location' => 'footer', 'items_wrap' => '%3$s', 'container' => '') ); ?>					
				</ul>
			
			</div>
			
			<div class="tier-two">
			
				<ul>
					<li>Reservations<span>888.352.3650</span></li>
					<li>EMAIL<span><a href="mailto:info@rownyc.com">info@rownyc.com</a></span></li>
					<li class="widest">A Times Square Hotel<span>700 8th Avenue, New York, NY 10036</span></li>
				</ul>
			
			</div>
					
		</div>
				
	</section>

</div>


<?php
	if ( is_front_page() && is_home() ) {} 
	elseif ('rooms' == get_post_type() || 'specials' == get_post_type()){ 
?>
	<!-- Sojern Tag v3 -->
	<script>
		(function () {
			// Please fill the following values.
			var params = {
				hc1: "New York", // Destination City
				hpr: "Row NYC Hotel", // Hotel Property
				hc: "<?php the_title(); ?>", // Room type
				hpid: "71", // Property ID
				pn: "<?php the_title(); ?>", // Product Name
				domain: "http://rownyc.com" // Site Domain
			};

			// Please do not modify the below code.
			var cid = [];
			var version = '3';
			var paramsArr = ['v=' + version];
			var cidParams = ["hconfno","hp","hd1","hd2","hpid","hb","hpr","hdc"];
			var pl = document.createElement('script');
			var defaultParams = {"vid":"hot","et":"hpr"};
			for(key in defaultParams) { params[key] = defaultParams[key]; };
			for(key in cidParams) { cid.push(params[cidParams[key]]); };
			params.cid = cid.join('|');
			for(key in params) { paramsArr.push(key + '=' + encodeURIComponent(params[key])) };
			pl.type = 'text/javascript';
			pl.async = true;
			pl.src = 'https://beacon.sojern.com/pixel/p/5925?' + paramsArr.join('&');
			(document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(pl);
		})();
	</script>
	<!-- End Sojern Tag -->
<?php }	else { ?>
     	<!-- Sojern Tag v3 -->
	<script>
		(function () {
		    // Please fill the following values.
		    var params = {
		       pname: "<?php the_title(); ?>", // Page Name
		       domain: "http://rownyc.com", // Site Domain
		       pc: "<?php
						if (has_category()) {
						    $category = get_the_category();
						    echo $category[0]->cat_name;
						} else { echo 'uncategorized'; }
					?>" // Page Category
		    };

			// Please do not modify the below code.
			var cid = [];
			var version = '3';
			var paramsArr = ['v=' + version];
			var cidParams = ["hconfno","hp","hd1","hd2","hpid","hb","hpr","hdc"];
			var pl = document.createElement('script');
			var defaultParams = {"vid":"hot"};
			for(key in defaultParams) { params[key] = defaultParams[key]; };
			for(key in cidParams) { cid.push(params[cidParams[key]]); };
			params.cid = cid.join('|');
			for(key in params) { paramsArr.push(key + '=' + encodeURIComponent(params[key])) };
			pl.type = 'text/javascript';
			pl.async = true;
			pl.src = 'https://beacon.sojern.com/pixel/p/5923?' + paramsArr.join('&');
			(document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(pl);
		})();
	</script>
	<!-- End Sojern Tag -->
<?php } ?>


<!-- the jScrollPane script -->
<script type="text/javascript" src="<?php bloginfo ('template_url'); ?>/js/jquery.jscrollpane.min.js"></script>
<script type="text/javascript" src="<?php bloginfo ('template_url'); ?>/js/scroll-startstop.events.jquery.js"></script>

<!-- Jquery Spinner -->
<script src="<?php bloginfo ('template_url'); ?>/js/jquery.ui.core.min.js"></script>
<script src="<?php bloginfo ('template_url'); ?>/js/jquery.ui.widget.js"></script>
<script src="<?php bloginfo ('template_url'); ?>/js/jquery.ui.button.js"></script>
<script src="<?php bloginfo ('template_url'); ?>/js/jquery.ui.spinner.min.js"></script>

<script type="text/javascript">

	$(document).ready(function(){
	    $("input.check").click(function(){
	        if($(this).is(":checked")){
	            $(this).parent().addClass("question-box-active");
	        }
	    });
	});		
	
</script> 

<script src="<?php bloginfo ('template_url'); ?>/js/jquery.prettyPhoto.js"></script>
<script type="text/javascript">
  $(document).ready(function(){

    $("a[rel^='prettyPhoto']").prettyPhoto({
    	default_width: 800,
    	social_tools: false,
    	theme: 'dark_square',
    	opacity: 0.8,
    });
			 	 
  });
</script>

<?php wp_reset_query(); ?>
<?php if(is_home() || is_front_page()): ?>
     <!-- Do the things here... -->
<?php elseif ('rooms' == get_post_type() || 'specials' == get_post_type()) :?>
	<!-- Sojern Tag v3 -->
	<script>
		(function () {
			// Please fill the following values.
			var params = {
				hc1: "New York", // Destination City
				hpr: "Row NYC Hotel", // Hotel Property
				hc: "Room / Deal Title", // Room type
				hpid: "71", // Property ID
				domain: "http://rownyc.com" // Site Domain
				pn: "<?php the_title(); ?>", // Product Name
			};

			// Please do not modify the below code.
			var cid = [];
			var version = '3';
			var paramsArr = ['v=' + version];
			var cidParams = ["hconfno","hp","hd1","hd2","hpid","hb","hpr","hdc"];
			var pl = document.createElement('script');
			var defaultParams = {"vid":"hot","et":"hpr"};
			for(key in defaultParams) { params[key] = defaultParams[key]; };
			for(key in cidParams) { cid.push(params[cidParams[key]]); };
			params.cid = cid.join('|');
			for(key in params) { paramsArr.push(key + '=' + encodeURIComponent(params[key])) };
			pl.type = 'text/javascript';
			pl.async = true;
			pl.src = 'https://beacon.sojern.com/pixel/p/5925?' + paramsArr.join('&');
			(document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(pl);
		})();
	</script>
	<!-- End Sojern Tag -->
<?php else: ?>
     	<!-- Sojern Tag v3 -->
	<script>
		(function () {
		    // Please fill the following values.
		    var params = {
		       pname: "<?php the_title(); ?>", // Page Name
		       domain: "http://rownyc.com" // Site Domain
		       pc: "<?php
						if (has_category()) {
						    $category = get_the_category();
						    echo $category[0]->cat_name;
						} else { echo 'uncategorized'; }
					?>" // Page Category
		    };

			// Please do not modify the below code.
			var cid = [];
			var version = '3';
			var paramsArr = ['v=' + version];
			var cidParams = ["hconfno","hp","hd1","hd2","hpid","hb","hpr","hdc"];
			var pl = document.createElement('script');
			var defaultParams = {"vid":"hot"};
			for(key in defaultParams) { params[key] = defaultParams[key]; };
			for(key in cidParams) { cid.push(params[cidParams[key]]); };
			params.cid = cid.join('|');
			for(key in params) { paramsArr.push(key + '=' + encodeURIComponent(params[key])) };
			pl.type = 'text/javascript';
			pl.async = true;
			pl.src = 'https://beacon.sojern.com/pixel/p/5923?' + paramsArr.join('&');
			(document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(pl);
		})();
	</script>
	<!-- End Sojern Tag -->
<?php endif;  ?>



<?php wp_footer(); ?>

<script type="text/javascript">
	 var fliptoSettings = {
		 code: '1S-NYCMILANN',
		 reviewCode: 'NYCMIL',
		 language: 'en',
		 pageType: 2, 
		 parent: 'fliptoContent',
		 isSignupAllowed: true
	 };

	 (function () {
		 var fn = function (k) {
			 var r = (k == 'trk') ? (new RegExp('(?:^|;)\\s?flipto' + fliptoSettings.code + '=(.*?)(?:;|$)', 'i')).exec(document.cookie) : (new RegExp('[\\?&]' + k + '=([^&#]*)')).exec(window.location.href);
			 return (null === r) ? '' : '&' + k + '=' + encodeURIComponent(r[1]);
		 };
		 if (fliptoSettings.code !== '' || (fn('flipto') !== '' && fliptoSettings.isSignupAllowed)) {
			 var ft = document.createElement('script'); ft.type = 'text/javascript';
			 ft.src = 'https://flip.to/external/signup.js?&c=' + fliptoSettings.code + '&revcode=' + fliptoSettings.reviewCode + '&lang=' + fliptoSettings.language + '&loc=' + fliptoSettings.parent + '&pt=' + fliptoSettings.pageType + fn('debug') + fn('trk') + (fliptoSettings.isSignupAllowed ? fn('flipto') : '');
			 var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ft, s);
		 }
	 })();
</script>

<!-- Google Code for Remarketing Tag -->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 1044598228;
var google_custom_params = window.google_tag_params;
var google_remarketing_only = true;
/* ]]> */
</script>
<script type="text/javascript" src="http://www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="http://googleads.g.doubleclick.net/pagead/viewthroughconversion/1044598228/?value=0&amp;guid=ON&amp;script=0"/>
</div>
</noscript>

<!-- There are the scripts need for the pushdown. -->
<script type='text/javascript' src='<?php bloginfo('template_url'); ?>/js/classie.js'></script>
<script type='text/javascript' src='<?php bloginfo('template_url'); ?>/js/modernizr.custom.js'></script>
<script type='text/javascript' src='<?php bloginfo('template_url'); ?>/js/notificationFx.js'></script>
<script type='text/javascript' src='<?php bloginfo('template_url'); ?>/js/snap.svg-min.js'></script>
<script type='text/javascript' src='<?php bloginfo('template_url'); ?>/js/cbpAnimatedHeader.js'></script>

	<script>
		(function() {

			<?php if( is_home() || is_front_page() ) { ?>

				$(document).ready(function() {

					if (!sessionStorage.getItem('nsclose_id')) {
					    
					    setTimeout( function() {
						
							$('.ns-box').addClass('ns-show'),
							$('.navigate').css('margin-top', $('.ns-box').outerHeight()*-1);
							$('.ns-box').css('margin-top', '0');

						}, 1300 );

					} else {

						$('.ns-box').css('margin-top', $('.ns-box').outerHeight()*-1),
						$('.topnav').css('top', '32px');

					}
					
				});	

			<?php } else { ?>

				$(document).ready(function() {

					if (!sessionStorage.getItem('nsclose_id')) {
					    
					    $('.ns-box').addClass('ns-show-page'),
					    $('.navigate').css('margin-top', $('.ns-box').outerHeight()*-1);
						$('.ns-box').css('margin-top', '0');

					} else {

						$('.ns-box').css('margin-top', $('.ns-box').outerHeight()*-1),
						$('.topnav').css('top', '32px');

					}
					
				});		

			<?php } ?>	

			$('.ns-close').click(function(){
				$('.ns-box').addClass('ns-hide');
				$('.ns-box').removeClass('ns-show'),
				$('.navigate').css('margin-top', '0'),
				$('.ns-box').removeClass('ns-show-page'),
				$('.menu-wrapper').addClass('ns-closed'),
				$('#notification-trigger').removeAttr('disabled','disabled');
				$('.ns-box').css('margin-top', $('.ns-box').outerHeight()*-1);
			});

		})();
	</script>
	
	<?php $postid = get_the_ID(); 
		if ($postid == 1238){ ?>
			<img	src="http://www.clkmg.com/api/e/pixel/?uid=16863&att=1&ref=rownycemail"	height="1" width="1"/>
		<?php } 

		else{ ?>
			<img src="http://www.clkmg.com/api/e/pixel/?uid=16863&att=1&ref=rownycvisit" height="1" width="1"/>
		<?php }
	?> 

	<script src="<?php bloginfo ('template_url'); ?>/js/jquery.prettyPhoto.js"></script>
	<script type="text/javascript">
	  $(document).ready(function(){

	    $("a[rel^='prettyPhoto']").prettyPhoto({
	    	default_width: 800,
	    	social_tools: false,
	    	theme: 'dark_square',
	    	opacity: 0.8,
	    });

	    $("a[rel^='prettyPhoto-video']").prettyPhoto({
		   	social_tools: false,
		   	default_height: 344,
		   	theme: 'dark_square',
		   	opacity: 0.8,
		   	allow_resize: true,
		});
					 	 
	  });
	</script>

	<script src="<?php bloginfo ('template_url'); ?>/js/view.js" type="text/javascript" charset="utf-8"></script>
	<script type="text/javascript">
		$(document).ready(function() {
		
			$('.picone').bind('inview', function (event, visible) {
			  if (visible == true) {
			    	$(this).addClass("appearman")
			  	} else {
			  		$(this).removeClass("appearman")
			  }
			});
			
			$('.contentcontainer  img').bind('inview', function (event, visible) {
			  if (visible == true) {
			    	$(this).addClass("appearmann")
			  	} else {
			  		$(this).removeClass("appearmann")
			  }
			});
			
			
		});
	</script>



	<?php if( is_home() || is_front_page() ) { ?>

		<script type="text/javascript" src="<?php bloginfo ('template_url'); ?>/js/owl.carousel.js"></script>
		<script type="text/javascript">
			$(document).ready(function() {
			 
				$("#owl-example").owlCarousel({
					// Most important owl features
					items : 1,
					navigation: true,
					navigationText : false,
					itemsDesktop : false,
					itemsDesktopSmall : [979,1],
					itemsTabletSmall : [768,1],
					itemsTablet : [768,1],
					itemsMobile : [479,1]
				});

			});
		</script>

	<?php } ?>


</body>
</html>