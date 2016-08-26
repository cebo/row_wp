<?php

	global $sitepress;
	if (function_exists('get_current_language') || function_exists('get_default_language')) { 
		$current_lang = $sitepress->get_current_language();
		$default_lang = $sitepress->get_default_language();ga('linker:autoLink', ['rownyc.reztrip.com','rownyc.reztripmobile.com']);
	} else {
		$current_lang = 'en';
		$default_lang = 'en';
	}

	if ( file_exists( TEMPLATEPATH . '/library/Mobile_Detect.php' ) ) {

		require_once TEMPLATEPATH . '/library/Mobile_Detect.php';
		$detect = new Mobile_Detect;

		function redirect() {
		    $url = 'Location: http://m.rownyc.com';
		    $statusCode = 303;
		    header($url, true, $statusCode);
		    die();
		}

		$check = $detect->isMobile(); 
		$parse = parse_url($_SERVER['REQUEST_URI']);
		//print_r($parse['path']);
		
		//print_r('http://m.rownyc.com' . $parse['path']);
		if( $check && !get_post_meta($post->ID,'cebo_redirect_url', true) ) {
			header("HTTP/1.1 301 Moved Permanently");
			header( 'Location: http://m.rownyc.com' . $parse['path'] );
			exit();
		} 

		if( $check && get_post_meta($post->ID,'cebo_redirect_url', true) ) {
			header("HTTP/1.1 301 Moved Permanently");
			header( 'Location: ' . get_post_meta($post->ID,'cebo_redirect_url', true) );
			exit();
		}

		elseif( $check ) { redirect(); }

	}

?>
<!DOCTYPE HTML>
<head>
<!-- wanderful widget - tracking pixel -->
<script src="https://scripts.staywanderful.com/scrapers/24.js"></script>

<meta charset="<?php bloginfo( 'charset' ); ?>">

<title><?php wp_title(''); ?></title>

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11" />

<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php if (get_option('cebo_custom_favicon') == '') { ?>

<link rel="icon" href="<?php bloginfo ('template_url'); ?>/favicon.ico" type="image/x-ico"/>

<?php } else { ?>

<link rel="icon" href="<?php echo get_option('cebo_custom_favicon'); ?>" type="image/x-ico"/>

<?php } ?>


<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php if ( get_option('cebo_feedburner_url') <> "" ) { echo get_option('cebo_feedburner_url'); } else { echo get_bloginfo_rss('rss2_url'); } ?>" />

<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

<!-- fonts style -->

<link rel="stylesheet" type="text/css" href="<?php bloginfo ('template_url'); ?>/css/fonts.css">
<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

<!-- Plugin CSS -->
<link rel="stylesheet" type="text/css" href="<?php bloginfo ('template_url'); ?>/css/jscrollpane.css">
<link rel="stylesheet" type="text/css" href="<?php bloginfo ('template_url'); ?>/css/jquery.mmenu.css">
<link rel="stylesheet" href="<?php bloginfo ('template_url'); ?>/js/flexslider/flexslider.css" type="text/css" media="screen" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo ('template_url'); ?>/js/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="<?php bloginfo ('template_url'); ?>/js/owl.theme.css">
<!-- Lightbox -->	
<link rel="stylesheet" href="<?php bloginfo ('template_url'); ?>/css/prettyPhoto.css" type="text/css" media="screen" title="prettyPhoto main stylesheet" charset="utf-8" />
<!-- Consolidated this css into one file. This styles the notification -->
<link rel='stylesheet' id='style-css' href='<?php bloginfo('template_url'); ?>/css/ns-style.css' type='text/css' media='all' />

<!--  style -->
<link rel="stylesheet" type="text/css" href="<?php bloginfo ('template_url'); ?>/css/crossbrowser.css">

<!-- responsive style -->
<link rel="stylesheet" type="text/css" href="<?php bloginfo ('template_url'); ?>/css/media.css">

<script src="//cdn.optimizely.com/js/3569390496.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>

	<?php if(get_post_type() == 'imagegalleries') { ?>

		<!-- Flex Slider -->
		<script src="<?php bloginfo ('template_url'); ?>/js/flexslider/jquery.flexslider.js"></script>
		<script type="text/javascript">
			$(document).ready(function() {

				$('.flexslider-gallery').flexslider({
					animation: "slide",
					animationSpeed: 1500,
					controlNav: true,
					startAt: 0,
				});

			  $('.flexslider').flexslider({
			    animation: "slide",
			    animationSpeed: 800,
			    pauseOnAction: false,
			    controlNav: true,
			    startAt: 0,
			  });

			});
		</script>

	<?php } ?>
	

<?php if( !is_home() || !is_front_page() ) { ?>

	<!-- <script type="text/javascript" src="<?php bloginfo ('template_url'); ?>/js/jquery.videoBG.js"></script> -->
	<script type="text/javascript" src="<?php bloginfo ('template_url'); ?>/js/modernizr.js"></script>
	<script type="text/javascript" src="<?php bloginfo ('template_url'); ?>/js/jquery.mousewheel.js"></script>

<?php } ?>

<?php if( is_home() || is_front_page() || is_page('times-square-hotel-deals') || is_single('5-cash-back') ) { ?>
	<script src="https://theguestbook.com/custom_widget.js?w=rownyc" type="text/javascript"></script>
<?php } ?>

<!-- Scripts -->
<script type="text/javascript" src="<?php bloginfo ('template_url'); ?>/js/scripts.js"></script>

<?php include(TEMPLATEPATH . '/library/scripts.php'); ?>
<?php include(TEMPLATEPATH . '/library/booking.php'); ?>

<?php if(is_home() || is_front_page()): ?>
	<!-- Sojern -->
	<script>
	(function () {
	    var pl = document.createElement('script');
	    pl.type = 'text/javascript';
	    pl.async = true;
	    pl.src = 'https://beacon.sojern.com/pixel/p/2067';
	    (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(pl);
	})();
	</script>
	<!-- End Sojern -->
<?php else: ?>
<?php endif;  ?>

	<!-- Plugin CSS -->
	<link rel="stylesheet" href="<?php bloginfo ('template_url'); ?>/css/plugin.css" type="text/css" media="screen" title="prettyPhoto main stylesheet"/>

<?php
	/****************** DO NOT REMOVE **********************
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );
	wp_head();
?>

 

<script> (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new

Date();a=s.createElement(o),m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-10318674-1', 'auto',{'allowLinker': true });
ga('linker:autoLink', ['rownyc.reztrip.com','rownyc.reztripmobile.com']);
ga('linker:autoLink', ['rownyc.reztrip.com','rownyc.reztripmobile.com'], false, true);
ga('send', 'pageview');

</script>


<script type="text/javascript">
	adroll_adv_id = "NQP2TEBPSVGKHDHDXCYZE7";
	adroll_pix_id = "VTF4TELHUNH7XEJGXJRNQS";
	(function () {
	var oldonload = window.onload;
	window.onload = function(){
	   __adroll_loaded=true;
	   var scr = document.createElement("script");
	   var host = (("https:" == document.location.protocol) ? "https://s.adroll.com" : "http://a.adroll.com");
	   scr.setAttribute('async', 'true');
	   scr.type = "text/javascript";
	   scr.src = host + "/j/roundtrip.js";
	   ((document.getElementsByTagName('head') || [null])[0] ||
	    document.getElementsByTagName('script')[0].parentNode).appendChild(scr);
	   if(oldonload){oldonload()}};
	}());
</script>

	<script type="application/ld+json">
		{
		"@context": "http://schema.org",
		"@type": "NewsArticle",
		"headline": "Article headline",
		"alternativeHeadline": "The headline of the Article",
		"image": [
		"thumbnail1.jpg",
		"thumbnail2.jpg"
		],
		"datePublished": "2015-02-05T08:00:00+08:00",
		"description": "A most wonderful article",
		"articleBody": "The full body of the article"
		}
	</script> 

	<script> (function(){ var v = document.createElement('script'); var s = document.getElementsByTagName('script')[0]; v.src = '//io.voyat.com/v.js'; v.async = true; s.parentNode.insertBefore(v, s); })(); </script>

</head> 

<body <?php if(is_page_template('page_rooms.php') || get_post_type() == 'rooms') { ?>class="rooms"<?php } elseif(is_home() || is_front_page() ) { ?>class="home"<?php } elseif(get_post_type() == 'imagegalleries') { ?>class="rooms gallery"<?php } elseif(is_page_template('page_amenities.php')) { ?>class="page amenities"<?php } elseif(is_page(92)) { ?>class="page deals"<?php } elseif(is_page_template('page_concierge.php')) { ?>class="page concierge"<?php } elseif(is_page_template('page_localinner.php')) { ?>class="page time-square"<?php } elseif(get_post_type() == 'amenities') { ?>class="page single amenity"<?php } elseif(is_page() || is_single()) { body_class('single'); ?><?php } elseif(is_home() || is_front_page()) { ?>class="home"<?php } ?>>

<a class="shutdown" href="#" id="jom"></a>
<div class="darkover"><a href="#"></a></div>
<div class="slightover"><a href="#"></a></div>


<div>

	<?php query_posts('post_type=weather&posts_per_page=1'); if(have_posts()) : while(have_posts()) : the_post(); ?>

		<?php if( $post->post_content != "" && get_post_meta($post->ID,'cebo_weather_live', true) ) { ?>

			<div class="ns-box ns-bar ns-effect-slidetop ns-type-notice" style="visibility: hidden; opacity: 0;">

				<i class="fa fa-exclamation-triangle"></i>

				<div class="ns-box-inner">

					<?php the_content(); ?>

				</div>

				<span class="ns-close" onClick="sessionStorage.setItem('nsclose_id', '1')"></span>

			</div>

		<?php } ?>

	<?php endwhile; endif; wp_reset_query(); ?>

	
	<section class="navigate">
			
			<div class="logobox">
				
				<div class="languages langdrop">

					<?php if (function_exists('language_selector_flags')) { ?>

						<div class="current-lang">
							<i class="fa fa-globe"></i> <?php echo ICL_LANGUAGE_CODE ?> <i class="fa fa-caret-down"></i>
						</div>

						<ul style="opacity: 0; visibility: hidden;"><?php language_selector_flags(); ?></ul>

					<?php } ?>

				</div>
			
			</div>
			
			
		<ul class="supernav">
			
			
			<li class="subinside inhotel">
				<a href="<?php bloginfo ('url'); ?>/the-hotel/"><span class="hotel"></span><p><?php _e('Hotel','row-theme-text'); ?></p></a>
			</li>

			<li class="subinside indeals">
				<a href="<?php bloginfo ('url'); ?>/times-square-hotel-deals/"><span class="deals"></span><p><?php _e('Special Offers','row-theme-text'); ?></p></a>	
			</li>

			<li class="subinside inrooms">
				<a href="<?php bloginfo ('url'); ?>/hotel-rooms-times-square-new-york/"><span class="rooms"></span><p><?php _e('Rooms','row-theme-text'); ?></p></a>		
			</li>

			<li class="subinside ineats">
				<a href="<?php bloginfo ('url'); ?>/eat-drink/"><span class="eats"></span><p><?php _e('Eat & Drink','row-theme-text'); ?></p></a>	
			</li>

			<li>
				<a href="<?php bloginfo ('url'); ?>/times-square-hotels/amenities/"><span class="fitness"></span><p><?php _e('Amenities','row-theme-text'); ?></p></a>
			</li>	

			<li class="subinside ingallery">
				<a href="<?php bloginfo ('url'); ?>/gallery/inside-row-nyc/"><span class="gallery"></span><p><?php _e('Gallery','row-theme-text'); ?></p></a>
			</li>

			<li>
				<a href="<?php bloginfo ('url'); ?>/blog" target="_blank"><span class="hotel"></span><p><?php _e('Blog','row-theme-text'); ?></p></a>
			</li>

			<li>
				<a href="<?php bloginfo ('url'); ?>/contact"><span class="contact"></span><p><?php _e('Contact','row-theme-text'); ?></p></a>
			</li>
		
		</ul>
		
		<div class="finished">
						
			<div class="socials">
				<a href="<?php echo get_option('cebo_facebook'); ?>" target="_blank"><i class="fa fa-facebook"></i></a>
				<a href="<?php echo get_option('cebo_twitter'); ?>" target="_blank"><i class="fa fa-twitter"></i></a>
				<a href="<?php echo get_option('cebo_pinterest'); ?>" target="_blank"><i class="fa fa-pinterest"></i></a>
				<a href="<?php echo get_option('cebo_instagram'); ?>" target="_blank"><i class="fa fa-instagram"></i></a>
				<a href="<?php echo get_option('cebo_youtube'); ?>" target="_blank"><i class="fa fa-youtube"></i></a>

					<a href="https://plus.google.com/103755241093806177642" target="_blank" rel="publisher"><i class="fa fa-google-plus-square"></i></a>

			</div>

			<div class="exclusive-offer">
				
				<form method="post" id="eclubCheck" action="http://www.data2gold.com/cc3/safeandsecure.wow?6O521I55494X2X2G6G1O0L216R693Q5H3Z5E" class="eClub">
				
					<div class="da-block">
						<input required type="text" size="40" name="FIRSTNAME" maxlength="40" value="" id="firstname" placeholder="<?php _e('first name','row-theme-text'); ?>">
					</div>
					<div class="da-block">
						<input required type="text" size="40" name="LASTNAME" maxlength="40" value="" id="lastname" placeholder="<?php _e('last name','row-theme-text'); ?>">
					</div>
					<div class="da-block">
						<input type="email" required size="40" name="email" maxlength="150" id="email_address" placeholder="<?php _e('email address','row-theme-text'); ?>">
					</div>
					
					<i class="fa fa-caret-right"></i>
					<input id="form_submit" type="submit" value="" />
					
					<input type="HIDDEN" name="PEA"					value="jayme@digital-alchemy.com" />
					
					  <input type="HIDDEN" name="PEACC" 				value="" />
					  <input type="HIDDEN" name="PEABC"					value="" />
					  <input type="HIDDEN" name="PEASUBJECT" 			value="LOOKUP" />
					  <INPUT TYPE="HIDDEN" NAME="NewUser" 				VALUE="1">
					  <INPUT TYPE="HIDDEN" NAME="PrThanksPage" 			VALUE="1">
					  <INPUT TYPE="HIDDEN" NAME="ftpbox" 				VALUE="01603">
					  <INPUT TYPE="HIDDEN" NAME="PRThanksTemplate"		VALUE="ETHANKS">
					  <input type="hidden" name="sys_formtype" 			value="eClub">
					  <input type="hidden" name="hv_preftype" 			value="eClub" />
					  <input type="hidden" name="ECWT" 			        value="EWELCOME" />

				</form>

			</div>

			<p><?php _e('High Speed Wifi Access Available','row-theme-text'); ?></p>
			<p style="padding:30px 0;text-align:center;"><a href="http://www.highgate.com" target="_blank"><img style="height:50px;" src="<?php bloginfo('template_url'); ?>/images/highgate-logo-white.png" alt="Highgate" /></a></p>
		
		</div>
		
		<div class="bottom"></div>
	
	</section>

	<section class="navigate mobile">
			
		<div class="logobox">
		
			<a class="logo" href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo ('template_url'); ?>/images/logo.png" alt="Row NYC" /></a>
						
		</div>

		<div class="mobile-menu right">

			<div class="mobile-menu-section">

				<a class="mmenu-icon" href="#menu"><i class="fa fa-bars"></i> <?php _e('MENU','row-theme-text'); ?></a>

			</div>

		</div>

		<nav id="menu" class="mobile">
		
			<ul>
				
				<li>

					<?php if( $current_lang == 'en') { ?>

						<a href="<?php echo get_option('cebo_genbooklink'); ?>" onclick="_gaq.push(['_link', this.href]);return false;"><span class="reserve"></span><p><?php _e('Reservations','row-theme-text'); ?></p></a>

					<?php } elseif( $current_lang == 'zh-hans') { ?>

						<a href="<?php echo get_option('cebo_genbooklink'); ?>/zh-CN/search" onclick="_gaq.push(['_link', this.href]);return false;"><span class="reserve"></span><p><?php _e('Reservations','row-theme-text'); ?></p></a>

					<?php } elseif( $current_lang == 'pt-br') { ?>

						<a href="<?php echo get_option('cebo_genbooklink'); ?>/pt/search" onclick="_gaq.push(['_link', this.href]);return false;"><span class="reserve"></span><p><?php _e('Reservations','row-theme-text'); ?></p></a>

					<?php } elseif( $current_lang == 'de' || 'es' || 'fr' || 'it' ) { ?>

						<a href="<?php echo get_option('cebo_genbooklink'); ?>/<?php echo $current_lang; ?>/search" onclick="_gaq.push(['_link', this.href]);return false;"><span class="reserve"></span><p><?php _e('Reservations','row-theme-text'); ?></p></a>

					<?php } else { ?>

						<a href="<?php echo get_option('cebo_genbooklink'); ?>" onclick="_gaq.push(['_link', this.href]);return false;"><span class="reserve"></span><p><?php _e('Reservations','row-theme-text'); ?></p></a>

					<?php } ?>

				</li>

				<li>
					<a href="<?php bloginfo ('url'); ?>/times-square-hotels/"><span class="hotel"></span><p><?php _e('Hotel','row-theme-text'); ?></p></a>
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
				
				<li>
					<a href="<?php bloginfo ('url'); ?>/hotel-amenities/glamgo/"><span class="glamgo"></span><p><?php _e('GLAM&GO','row-theme-text'); ?></p></a>
				</li>

				<li>
					<a href="<?php bloginfo ('url'); ?>/hotel-amenities/cyc-fitness/"><span class="fitness"></span><p><?php _e('CYC FITNESS','row-theme-text'); ?></p></a>
				</li>
			
			</ul>

		</nav>
	
	</section>
	
	<div class="behindnavigate"></div>

	<div class="banner desktop"> 
		
		<div class="header-contact">
			
			<p class="contacto"><?php _e('Reservations:','row-theme-text'); ?> <span style="font-family: 'GothamBold';"><?php _e('888.352.3650','row-theme-text'); ?></span></p>
			<p class="contacto"><i class="fa fa-map-marker"></i> <a href="https://www.google.com/maps/place/Row+NYC/@40.758695,-73.988284,17z/data=!3m1!4b1!4m2!3m1!1s0x89c25854799df1f7:0x8890505e02666256" target="_blank"><span><?php _e('700 8th Avenue, New York, NY 10036','row-theme-text'); ?></span></a></p>			
			<p class="contacto"><a class="group-booking" target="_blank" href="https://rownyc.groupize.com/properties/25047/groups"><?php _e('Group Booking (10+)','row-theme-text'); ?></a></p>
			<!-- <a href="mailto:info@rownyc.com" target="_blank">info@rownyc.com</a> -->

		</div>
		
		<a class="logo" href="<?php bloginfo('url'); ?>">
			<img src="<?php bloginfo ('template_url'); ?>/images/logo.png" alt="Row NYC" />
			<p><?php _e('A Times Square Hotel','row-theme-text'); ?></p>
		</a>

		<div class="booking">

			<form

				<?php if( $current_lang == 'en') { ?>

					action="<?php echo get_option('cebo_genbooklink'); ?>/search?" 

				<?php } elseif( $current_lang == 'zh-hans') { ?>

					action="<?php echo get_option('cebo_genbooklink'); ?>/zh-CN/search?" 

				<?php } elseif( $current_lang == 'pt-br') { ?>

					action="<?php echo get_option('cebo_genbooklink'); ?>/pt/search?" 

				<?php } elseif( $current_lang == 'de' || 'es' || 'fr' || 'it' ) { ?>

					action="<?php echo get_option('cebo_genbooklink'); ?>/<?php echo $current_lang; ?>/search?" 

				<?php } else { ?>

					action="<?php echo get_option('cebo_genbooklink'); ?>/search?" 

				<?php } ?>

				onsubmit="_gaq.push(['_linkByPost', this]);">

					
				<div class="calspacer">
				
					<span class="arrv">
						<div class="squaredance">
							<input name="arrival_date" id="arrival_date" placeholder="<?php _e('ARRIVAL','row-theme-text'); ?>" class="calendarsection" />							
							<i class="fa fa-calendar"></i>
						</div>
						
						<div class="datepicker">
							<a href="#" class="cls">X</a>
						</div>
					</span>		 	
							 	
					<span class="lowselect">
						<div class="squaredance select">
							<select id="adults" name="adults[]">
							 	<option value="1">1 <?php _e('Adult', 'row-theme-text'); ?></option>
			                    <option value="2">2 <?php _e('Adults', 'row-theme-text'); ?></option>
			                    <option value="3">3 <?php _e('Adults', 'row-theme-text'); ?></option>
			                    <option value="4">4 <?php _e('Adults', 'row-theme-text'); ?></option>                                
							</select>
							<i class="fa fa-caret-down"></i>
						</div>
					</span>
					
					<span class="lowselect">						
						<div class="squaredance select">
							 <select id="children" name="children[]">
							 	<option value="0">0 <?php _e('Children', 'row-theme-text'); ?></option>
								<option value="1">1 <?php _e('Child', 'row-theme-text'); ?></option>
			                    <option value="2">2 <?php _e('Children', 'row-theme-text'); ?></option>
			                    <option value="3">3 <?php _e('Children', 'row-theme-text'); ?></option>
							</select>
							<i class="fa fa-caret-down"></i>
						</div>
					</span>

					<div class="butonconton">
						<button type="submit" class="button"><?php _e('Reserve Now','row-theme-text'); ?></button>
					</div>

					
					<div class="clear"></div>
					<span class="dept">
						<div class="squaredance">
							<input name="departure_date" id="departure_date" placeholder="<?php _e('DEPARTURE','row-theme-text'); ?>" class="calendarsection" />
							<!-- <input type="text" id="dep"> -->
							<!-- <input type="text" id="depee"> -->
							
							<i class="fa fa-calendar"></i>
						</div>
						
						<div class="departdatepicker">
							<a href="#" class="cls">X</a>
						</div>
					</span>

					<span class="lowselect">
						<div class="squaredance select">
						<select  id="children" name="rooms" class="halfsies">
							<option value="1">1 <?php _e('Room','row-theme-text'); ?></option>
							<option value="2">2 <?php _e('Rooms','row-theme-text'); ?></option>
							<option value="3">3 <?php _e('Rooms','row-theme-text'); ?></option>
						</select>
						<i class="fa fa-caret-down"></i>
						</div>
					</span>

					<span>
						<div class="squaredance">
						<input class="calendarsection" id="offercode" name="offer_code" placeholder="<?php _e('Offer Code','row-theme-text'); ?>">
						</div>
					</span>
					<div class="butonconton">
						<a href="" target="_blank"><button type="submit" class="checkrates button"><?php _e('Check Rates','row-theme-text'); ?></button></a>
					</div>
					
					<div class="clear"></div>
				</div>						
						
			</form>

		</div>
	</div>	
	<!-- wonderful widget -->
	<div class="wonderful">
		<a class="stay-wanderful-button" href="https://staywanderful.com/widgets/#/24"></a> 
		<script src="https://scripts.staywanderful.com/widgets/24.js"></script>
	</div>
	<!-- / wonderful widget -->
