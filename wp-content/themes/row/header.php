<?php

	if ( file_exists( TEMPLATEPATH . '/library/Mobile_Detect.php' ) ) {

		require_once TEMPLATEPATH . '/library/Mobile_Detect.php';
		$detect = new Mobile_Detect;

		function redirect() {
			$url = 'Location: http://m.rownyc.com';
			$statusCode = 303;
			header( $url, true, $statusCode );
			die();
		}

		$check = $detect->isMobile(); 
		$parse = parse_url($_SERVER['REQUEST_URI']);
		//print_r($parse['path']);

		//print_r('http://m.rownyc.com' . $parse['path']);
		if ( $check && !get_post_meta( $post->ID, 'cebo_redirect_url', true ) ) {
			header("HTTP/1.1 301 Moved Permanently");
			header( 'Location: http://m.rownyc.com' . $parse['path'] );
			exit();
		}

		if ( $check && !get_post_meta( $post->ID, 'cebo_redirect_url', true ) ) {
			header("HTTP/1.1 301 Moved Permanently");
			header( 'Location: ' . get_post_meta( $post->ID, 'cebo_redirect_url', true ) );
			exit();
		}

		elseif ( $check ) { redirect(); }

	}

	$current_lang = ICL_LANGUAGE_CODE;

	if( $current_lang == 'en') { $locale = 'en'; } 
	elseif( $current_lang == 'zh-hans') { $locale = 'zh-CN'; } 
	elseif( $current_lang == 'pt-br') { $locale = 'pt'; } 
	else { $locale = $current_lang; } 

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

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>

<?php
	/****************** DO NOT REMOVE **********************
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );
	wp_head();
?>

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

<?php
	if (
		get_post_type() == 'imagegalleries' ||
		get_post_type() == 'rooms'
	) {
?>

	<!-- Flex Slider -->
	<script src="<?php bloginfo ('template_url'); ?>/js/flexslider/jquery.flexslider.js"></script>
	<script type="text/javascript">

		$(document).ready(function() {

			$('.flexslider-gallery-js').flexslider({
				animation: 'slide',
				controlNav: false,
				animationLoop: false,
				slideshow: false,
				sync: '.flexslider-gallery-nav-js',
			});

			$('.flexslider-gallery-nav-js').flexslider({
				animation: 'slide',
				controlNav: false,
				animationLoop: false,
				slideshow: false,
				itemWidth: 210,
				maxItems: 5,
				asNavFor: '.flexslider-gallery-js'
			});

			$('.flexslider-js').flexslider({
				animation: "slide",
				animationSpeed: 1500,
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

 

<script> (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new

Date();a=s.createElement(o),m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-10318674-1', 'auto',{'allowLinker': true });
ga('require','linker');ga('linker:autoLink',['rownyc.reztrip.com','rownyc.reztripmobile.com']);
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

	<!-- Wanderful Widget -->
	<script id="gtsgig-boot" data-hotel-id="rownyc" src="https://widgets.gtsgig.com/boot.js"></script>
	<!-- Wanderful Widget End -->

</head> 

<body <?php if(is_page_template('page_rooms.php') || get_post_type() == 'rooms') { ?>class="rooms"<?php } elseif(is_home() || is_front_page() ) { ?>class="home"<?php } elseif(get_post_type() == 'imagegalleries') { ?>class="rooms gallery"<?php } elseif(is_page_template('page_amenities.php')) { ?>class="page amenities"<?php } elseif(is_page(92)) { ?>class="page deals"<?php } elseif(is_page_template('page_concierge.php')) { ?>class="page concierge"<?php } elseif(is_page_template('page_localinner.php')) { ?>class="page time-square"<?php } elseif(get_post_type() == 'amenities') { ?>class="page single amenity"<?php } elseif(is_page() || is_single()) { body_class('single'); ?><?php } elseif(is_home() || is_front_page()) { ?>class="home"<?php } ?>>

<div class="wrapper">

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

	<div class="headernav">

		<div class="topnav-area">
			
			<div class="nav-logo">
				<a href="<?php bloginfo('url'); ?>">
					<img title="Row NYC" alt="Row NYC" src="<?php bloginfo('template_url'); ?>/images/logo.png" />
				</a>
			</div>

			<div class="nav-language-address">

				<div class="nav-language">

					<?php if (function_exists('language_selector_flags')) { ?>

						<span><?php echo ICL_LANGUAGE_CODE ?></span><i class="fa fa-caret-down"></i>

						<ul><?php language_selector_flags(); ?></ul>

					<?php } ?>

				</div>

				<div class="nav-address">A Times Square Hotel<br><span class="punct">·</span>700 8th Ave, NYC<br><span class="punct">·</span><a class="smooth-transition-4s" href="<?php echo get_option('cebo_genbooklink'); ?>/?locale=<?php echo $locale; ?>" target="_blank"><span class="pink">Reservations:</span></a> 888.352.3650</div>

			</div>

			<ul class="nav-list">
				<li><a href="<?php bloginfo ('url'); ?>/the-hotel/"><?php _e('Hotel','row-theme-text'); ?></a></li>
				<li><a href="<?php bloginfo ('url'); ?>/times-square-hotel-deals/"><?php _e('Specials','row-theme-text'); ?></a></li>
				<li><a href="<?php bloginfo ('url'); ?>/hotel-rooms-times-square-new-york/"><?php _e('Rooms','row-theme-text'); ?></a></li>
				<li><a href="<?php bloginfo ('url'); ?>/gallery/inside-row-nyc/"><?php _e('Gallery','row-theme-text'); ?></a></li>
				<li><a target="_blank" href="<?php bloginfo ('url'); ?>/blog"><?php _e('Blog','row-theme-text'); ?></a></li>
			</ul>

			<div class="nav-button-mobile">
				<div class="nav-button-reserve"><div><?php _e('Reserve','row-theme-text'); ?></div></div>
				<div class="nav-button-menu"><div><?php _e('Menu','row-theme-text'); ?></div></div>
			</div>

		</div>

	</div>

	<div class="bookingnav">
		
		<div class="schedulebook">

			<form action="<?php echo get_option('cebo_genbooklink'); ?>" onsubmit="_gaq.push(['_linkByPost', this]);">

				<input name="locale" type="hidden" value="<?php echo $locale; ?>">

				<div class="datepicker datepicker-arrival first-time">
					<div class="close-dp" aria-label="Close">X</div>
					<div class="letter-dp">ARRIVE</div>
				</div>

				<div class="datepicker datepicker-departure">
					<div class="close-dp" aria-label="Close">X</div>
					<div class="letter-dp">DEPART</div>
				</div>

				<div class="schedule-box">
					<label class="visuallyhidden" for="arrival_date">Arrival</label>
					<input name="arrival_date" id="arrival_date" placeholder="<?php _e('ARRIVAL','row-theme-text'); ?>" />
					<i class="fa fa-calendar"></i>
				</div>

				<div class="schedule-box">
					<label class="visuallyhidden" for="departure_date">Departure</label>
					<input name="departure_date" id="departure_date" placeholder="<?php _e('DEPARTURE','row-theme-text'); ?>" />
					<i class="fa fa-calendar"></i>
				</div>

				<div class="schedule-box">
					<label class="visuallyhidden" for="rooms">Number of Rooms</label>
					<select id="rooms" name="rooms">
						<option value="1">1 <?php _e('Room','row-theme-text'); ?></option>
						<option value="2">2 <?php _e('Rooms','row-theme-text'); ?></option>
						<option value="3">3 <?php _e('Rooms','row-theme-text'); ?></option>
					</select>
					<i class="fa fa-caret-down"></i>
				</div>

				<div class="schedule-box">
					<label class="visuallyhidden" for="adults">Number of Adults</label>
					<select name="adults[]" id="adults">
						<option value="1">1 <?php _e('Adult', 'row-theme-text'); ?></option>
						<option value="2">2 <?php _e('Adults', 'row-theme-text'); ?></option>
						<option value="3">3 <?php _e('Adults', 'row-theme-text'); ?></option>
						<option value="4">4 <?php _e('Adults', 'row-theme-text'); ?></option>
					</select>
					<i class="fa fa-caret-down"></i>
				</div>

				<div class="schedule-box">
					<label class="visuallyhidden" for="children">Number of Children</label>
					<select name="children[]">
						<option value="0">0 <?php _e('Children', 'row-theme-text'); ?></option>
						<option value="1">1 <?php _e('Child', 'row-theme-text'); ?></option>
						<option value="2">2 <?php _e('Children', 'row-theme-text'); ?></option>
						<option value="3">3 <?php _e('Children', 'row-theme-text'); ?></option>
					</select>
					<i class="fa fa-caret-down"></i>
				</div>

				<button type="submit" aria-label="Submit"><?php _e('Reserve Now','row-theme-text'); ?></button>
						
			</form>

		</div>

		<div class="bookingnav-reserve">
			<div aria-label="Reserve"><?php _e('Reserve','row-theme-text'); ?></div>
		</div>

		<div class="ham-menu">
			<div class="ham-lines"><div></div></div>
			<ul class="ham-list">
				<li><a href="<?php bloginfo ('url'); ?>/the-hotel/"><?php _e('Hotel','row-theme-text'); ?></a></li>
				<li><a href="<?php bloginfo ('url'); ?>/times-square-hotel-deals/"><?php _e('Specials','row-theme-text'); ?></a></li>
				<li><a href="<?php bloginfo ('url'); ?>/hotel-rooms-times-square-new-york/"><?php _e('Rooms','row-theme-text'); ?></a></li>
				<li><a href="<?php bloginfo ('url'); ?>/gallery/inside-row-nyc/"><?php _e('Gallery','row-theme-text'); ?></a></li>
				<li><a href="<?php bloginfo ('url'); ?>/eat-drink/"><?php _e('Eat & Drink','row-theme-text'); ?></a></li>
				<li><a href="<?php bloginfo ('url'); ?>/amenities/"><?php _e('Amenities','row-theme-text'); ?></a></li>
				<li><a target="_blank" href="<?php bloginfo ('url'); ?>/blog"><?php _e('Blog','row-theme-text'); ?></a></li>
			</ul>
		</div>

	</div>

	<div class="mobilenav">
		
		<div class="mobilenav-top">
			
			<div class="mobilenav-logo">
				<a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_url'); ?>/images/logo.png" /></a>
			</div>
			<div class="mobilenav-button-close"><div></div></div>

		</div>

		<ul class="mobilenav-menu">

			<div class="mobilenav-block"></div>

			<li><a href="<?php bloginfo ('url'); ?>/the-hotel/"><?php _e('Hotel','row-theme-text'); ?></a></li>
			<li><a href="<?php bloginfo ('url'); ?>/times-square-hotel-deals/"><?php _e('Special','row-theme-text'); ?></a></li>
			<li><a href="<?php bloginfo ('url'); ?>/hotel-rooms-times-square-new-york/"><?php _e('Rooms','row-theme-text'); ?></a></li>
			<li><a href="<?php bloginfo ('url'); ?>/gallery/inside-row-nyc/"><?php _e('Gallery','row-theme-text'); ?></a></li>
			<li><a target="_blank" href="<?php bloginfo ('url'); ?>/blog"><?php _e('Blog','row-theme-text'); ?></a></li>
		</ul>

	</div>

	<div class="mobilenav-reserve">

		<div class="mobilenav-schedulebook-close"><div></div></div>

		<div class="mobilenav-schedulebook-selector arrive-selector">
			
			<div class="mobilenav-sb-select mobilenav-sb-arrive"><?php _e('Arrive','row-theme-text'); ?></div>
			<div class="mobilenav-sb-select mobilenav-sb-depart"><?php _e('Depart','row-theme-text'); ?></div>

		</div>

		<div class="schedulebook">
			<form action="<?php echo get_option('cebo_genbooklink'); ?>" onsubmit="_gaq.push(['_linkByPost', this]);">

					<input name="locale" type="hidden" value="<?php echo $locale; ?>">

					<div class="datepicker datepicker-mobile"></div>

					<div class="schedule-box left">
						<input name="arrival_date" id="arrival_date_mobile" placeholder="<?php _e('ARRIVAL','row-theme-text'); ?>" />
						<i class="fa fa-calendar"></i>
					</div>

					<div class="schedule-box right">
						<input name="departure_date" id="departure_date_mobile" placeholder="<?php _e('DEPARTURE','row-theme-text'); ?>" />
						<i class="fa fa-calendar"></i>
					</div>

					<div class="schedule-box left">
						<select name="rooms">
							<option value="1">1 <?php _e('Room','row-theme-text'); ?></option>
							<option value="2">2 <?php _e('Rooms','row-theme-text'); ?></option>
							<option value="3">3 <?php _e('Rooms','row-theme-text'); ?></option>
						</select>
						<i class="fa fa-caret-down"></i>
					</div>

					<div class="schedule-box right">
						<select name="adults[]">
							<option value="1">1 <?php _e('Adult', 'row-theme-text'); ?></option>
							<option value="2">2 <?php _e('Adults', 'row-theme-text'); ?></option>
							<option value="3">3 <?php _e('Adults', 'row-theme-text'); ?></option>
							<option value="4">4 <?php _e('Adults', 'row-theme-text'); ?></option>
						</select>
						<i class="fa fa-caret-down"></i>
					</div>

					<div class="schedule-box full">
						<select name="children[]">
							<option value="0">0 <?php _e('Children', 'row-theme-text'); ?></option>
							<option value="1">1 <?php _e('Child', 'row-theme-text'); ?></option>
							<option value="2">2 <?php _e('Children', 'row-theme-text'); ?></option>
							<option value="3">3 <?php _e('Children', 'row-theme-text'); ?></option>
						</select>
						<i class="fa fa-caret-down"></i>
					</div>

					<div class="schedule-box full">
						<button type="submit"><?php _e('Reserve Now','row-theme-text'); ?></button>
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
