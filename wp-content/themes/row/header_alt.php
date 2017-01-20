<!DOCTYPE HTML>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">

	<title><?php wp_title(''); ?></title>
	<META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<?php if (get_option('cebo_custom_favicon') == '') { ?>
	
	<link rel="icon" href="<?php bloginfo ('template_url'); ?>/favicon.ico" type="image/x-ico"/>
	
	<?php } else { ?>
	
	<link rel="icon" href="<?php echo get_option('cebo_custom_favicon'); ?>" type="image/x-ico"/>
	
	<?php } ?>
	
	
	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php if ( get_option('cebo_feedburner_url') <> "" ) { echo get_option('cebo_feedburner_url'); } else { echo get_bloginfo_rss('rss2_url'); } ?>" />


<link rel="stylesheet" type="text/css" href="<?php bloginfo ('template_url'); ?>/bloginfo/style.css">


<!-- fonts -->

<link href='http://fonts.googleapis.com/css?family=Playfair+Display:400,700,900,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href="http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

<!-- responsive style -->

<link rel="stylesheet" type="text/css" href="<?php bloginfo ('template_url'); ?>/bloginfo/css/media.css">
<script type="text/javascript">
	
	
	function createURL() {
	var checkin = jQuery("#arrival_date").val();
	var checkout = jQuery("#departure_date").val();
	var adults = jQuery("#adults").val();
	var children = jQuery("#children").val();
	
	<?php if( $current_lang == 'en' ) { ?>

		var bookinglink = "<?php echo get_option('cebo_genbooklink'); ?>/search?" + 

	<?php } elseif( $current_lang == 'zh-hans') { ?>

		var bookinglink = "<?php echo get_option('cebo_genbooklink'); ?>/zh-CN/search?" + 

	<?php } elseif( $current_lang == 'pt-br') { ?>

		var bookinglink = "<?php echo get_option('cebo_genbooklink'); ?>/pt/search?" + 

	<?php } elseif( $current_lang == 'de' || 'es' || 'fr' || 'it' ) { ?>

		var bookinglink = "<?php echo get_option('cebo_genbooklink'); ?>/<?php echo $current_lang; ?>/search?" + 

	<?php } else { ?>

		var bookinglink = "<?php echo get_option('cebo_genbooklink'); ?>/search?" + 

	<?php }  ?>
	
										"&arrival_date=" + checkin + 
										"&departure_date=" + checkout + 
										"&adults[]=" + adults + 
										"&children[]=" + children;

	return bookinglink;
	



}

</script>

	<?php
		/****************** DO NOT REMOVE **********************
		/* We add some JavaScript to pages with the comment form
		 * to support sites with threaded comments (when in use).
		 */
		if ( is_singular() && get_option( 'thread_comments' ) )
			wp_enqueue_script( 'comment-reply' );
		wp_head();
	?>




<script type="text/javascript">

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

</script>

<!--GIL-->
</head>

<body <?php body_class(); ?>>
				