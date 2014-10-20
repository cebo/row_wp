<?php

	global $sitepress;
	$current_lang = $sitepress->get_current_language();
	$default_lang = $sitepress->get_default_language();

?>
<!DOCTYPE HTML>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">

	<title><?php wp_title(''); ?></title>
	
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<?php if (get_option('cebo_custom_favicon') == '') { ?>
	
	<link rel="icon" href="<?php bloginfo ('template_url'); ?>/favicon.ico" type="image/x-ico"/>
	
	<? } else { ?>
	
	<link rel="icon" href="<?php echo get_option('cebo_custom_favicon'); ?>" type="image/x-ico"/>
	
	<? } ?>
	
	
	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php if ( get_option('cebo_feedburner_url') <> "" ) { echo get_option('cebo_feedburner_url'); } else { echo get_bloginfo_rss('rss2_url'); } ?>" />
	
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

<!-- fonts style -->

<link rel="stylesheet" type="text/css" href="<?php bloginfo ('template_url'); ?>/css/fonts.css">
<link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>



<!-- Plugin CSS -->
<link rel="stylesheet" type="text/css" href="<?php bloginfo ('template_url'); ?>/css/jscrollpane.css">
<link rel="stylesheet" type="text/css" href="<?php bloginfo ('template_url'); ?>/css/jquery.mmenu.css">
<link rel="stylesheet" href="<?php bloginfo ('template_url'); ?>/js/flexslider/flexslider.css" type="text/css" media="screen" />
<!-- <link rel="stylesheet" type="text/css" href="<?php bloginfo ('template_url'); ?>/css/ui-lightness/jquery.ui.all.css"> -->
<link rel="stylesheet" type="text/css" href="<?php bloginfo ('template_url'); ?>/js/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="<?php bloginfo ('template_url'); ?>/js/owl.theme.css">


<!-- responsive style -->

<link rel="stylesheet" type="text/css" href="<?php bloginfo ('template_url'); ?>/css/media.css">

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="<?php bloginfo ('template_url'); ?>/js/owl.carousel.js"></script>
<script type="text/javascript">
$(document).ready(function() {
 
  $("#owl-example").owlCarousel({
 
    // Most important owl features
    items : 3
    });
 
});
</script>

<script type="text/javascript" src="<?php bloginfo ('template_url'); ?>/js/jquery.videoBG.js"></script>

<!-- Modernizr -->
<script type="text/javascript" src="<?php bloginfo ('template_url'); ?>/js/modernizr.js"></script>

<!-- the mousewheel plugin -->
<script type="text/javascript" src="<?php bloginfo ('template_url'); ?>/js/jquery.mousewheel.js"></script>

<!-- the jScrollPane script -->
<script type="text/javascript" src="<?php bloginfo ('template_url'); ?>/js/jquery.jscrollpane.min.js"></script>
<script type="text/javascript" src="<?php bloginfo ('template_url'); ?>/js/scroll-startstop.events.jquery.js"></script>

<!-- Jquery Spinner -->
<script src="<?php bloginfo ('template_url'); ?>/js/jquery.ui.core.min.js"></script>
<script src="<?php bloginfo ('template_url'); ?>/js/jquery.ui.widget.js"></script>
<script src="<?php bloginfo ('template_url'); ?>/js/jquery.ui.button.js"></script>
<script src="<?php bloginfo ('template_url'); ?>/js/jquery.ui.spinner.min.js"></script>

<!-- Jquery Mmenu -->
<script src="<?php bloginfo ('template_url'); ?>/js/jquery.mmenu.min.js"></script>


<!-- Scripts -->
<script type="text/javascript" src="<?php bloginfo ('template_url'); ?>/js/scripts.js"></script>


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




	$(document).ready(function() {
		
		
			
	$('#div_demo').videoBG({
		mp4:'<?php bloginfo ('template_url'); ?>/assets/row_webber.mp4',
		ogv:'<?php bloginfo ('template_url'); ?>/assets/row_webber.ogv',
		webm:'<?php bloginfo ('template_url'); ?>/assets/row_webber.webm',
		poster:'',
		scale:true,
		zIndex:0
	});

	if(Modernizr.touch) {
		$('#div_demo.mobile').show(),
		$('#div_demo.desktop').hide()
	}
	
	
		
	  $('#arrival_date').live('keyup',function() {
	        var pronameval = $(this).val();
	        $('#departure_date').val(pronameval.replace(/ /g, '-').toLowerCase());
	    });
 		
 		$('#selectUl li:not(":first")').addClass('unselected');
			$('#selectUl').hover(
			    function(){
			        $(this).find('li').click(
			            function(){
			                $('.unselected').removeClass('unselected');
			                $(this).addClass("bignumber");
			                $(this).siblings('li').addClass('unselected');
			                $(this).siblings('li').removeClass('bignumber');
			                var index = $(this).index();
			                $('select[name=size]')
			                    .find('option:eq(' + index + ')')
			                    .attr('selected',true);
			            });
			    },
			    function(){
			    });
	
 		$(function() {
			var fixadent = $(".topnav"), pos = fixadent.offset();
			$(window).scroll(function() {
			if($(this).scrollTop() > (pos.top + 10) && fixadent.css('position') == 'absolute') { fixadent.addClass('fixed'); }
			else if($(this).scrollTop() <= pos.top && fixadent.hasClass('fixed')){ fixadent.removeClass('fixed'); }
			})
			});
		 				
	});	
	
</script>

<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.16/jquery-ui.min.js?ver=3.5.2'></script>
	<script type="text/javascript">
		$(document).ready(function(){
		   // Datepicker
		   
		$.datepicker._defaults.dateFormat = 'yy-mm-dd';
		
		var days = new Array('Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday');
		var months = [ "January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December" ];
		
			$('.datepicker').datepicker({
			    dateFormat: 'yy-mm-dd',
			    altField  : '#arve',
    			altFormat : 'dd',
    			minDate: new Date(),
			    onSelect: function(event, ui) {
			        var dayOfWeek = $(this).datepicker('getDate').getUTCDay();
			        var selectedMonthName = months[$(this).datepicker('getDate').getMonth()];
			        $('#arv').val(selectedMonthName);
			        $("#arrival_date").val(event);
			       
			    }
			     
			});
			
			var tester = $("#arrival_date").val();
			
			$('.departdatepicker').datepicker({
			    dateFormat: 'yy-mm-dd',
			    altField  : '#depee',
    			altFormat : 'dd',
    			minDate: 1,
			    onSelect: function(event, ui) {
			        var dayOfWeek = $(this).datepicker('getDate').getUTCDay();
			        var selectedMonthName = months[$(this).datepicker('getDate').getMonth()];
			        $('#dep').val(selectedMonthName);
			        $("#departure_date").val(event);
			        
			    }
			});

			$('.datepickerr').datepicker({
			    dateFormat: 'yy-mm-dd',
			    altField  : '#arve-1',
    			altFormat : 'dd',
    			minDate: new Date(),
			    onSelect: function(event, ui) {
			        var dayOfWeek = $(this).datepicker('getDate').getUTCDay();
			        var selectedMonthName = months[$(this).datepicker('getDate').getMonth()];
			        $('#arv-1').val(selectedMonthName);
			        $("#arrival_date-1").val(event);
			       
			    }
			     
			});
						
			$('.departdatepickerr').datepicker({
			    dateFormat: 'yy-mm-dd',
			    altField  : '#depee-1',
    			altFormat : 'dd',
    			minDate: 0,
			    onSelect: function(event, ui) {
			        var dayOfWeek = $(this).datepicker('getDate').getUTCDay();
			        var selectedMonthName = months[$(this).datepicker('getDate').getMonth()];
			        $('#dep-1').val(selectedMonthName);
			        $("#departure_date-1").val(event);
			    }
			});
			
			
			
			
			var d=new Date();
			var month=new Array();
			month[0]="January";
			month[1]="February";
			month[2]="March";
			month[3]="April";
			month[4]="May";
			month[5]="June";
			month[6]="July";
			month[7]="August";
			month[8]="September";
			month[9]="October";
			month[10]="November";
			month[11]="December";
			var n = month[d.getMonth()];
			
			$("#arv").attr("placeholder", n);
			$("#dep").attr("placeholder", n);
			$("#arv-1").attr("placeholder", n);
			$("#dep-1").attr("placeholder", n);
			
			
			
			jQuery('form a.button').click(function(e) {
				e.preventDefault();
				_gaq.push(['_link', createURL() ]);
				return false;
			});



			
		});
		


	</script>
	<script type="text/javascript">
		//$(function($) {
		//	$( "#arrival_date" ).datepicker({ dateFormat: 'yy-mm-dd' }).val();
		//	$( "#departure_date" ).datepicker({ dateFormat: 'yy-mm-dd' }).val();
		// });
		$(document).ready(function(){
		    $("input.check").click(function(){
		        if($(this).is(":checked")){
		            $(this).parent().addClass("question-box-active");
		        }
		    });
		});
		
		
	</script> 

<!-- Lightbox -->	
<link rel="stylesheet" href="<?php bloginfo ('template_url'); ?>/css/prettyPhoto.css" type="text/css" media="screen" title="prettyPhoto main stylesheet" charset="utf-8" />
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

<?php if(is_home()) { ?>

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



<?php } ?>

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




<script type="text/javascript">

var _gaq = _gaq || [];

_gaq.push(['_setAccount', 'UA-10318674-1']);

_gaq.push(['_setAllowLinker', true]);

_gaq.push(['_setDomainName', 'rownyc.com']);

_gaq.push(['_trackPageview']);

/*

_gaq.push(['secondTracker._setAccount', 'UA-10318674-10']);

_gaq.push(['secondTracker._setAllowLinker', true]);

_gaq.push(['secondTracker._setDomainName', 'rownyc.com']);

_gaq.push(['secondTracker._trackPageview']);

*/



(function() {

var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;

ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';

var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);

})();

</script>


</head> 
	
	
<body <?php if(is_page_template('page_rooms.php') || get_post_type() == 'rooms') { ?>class="rooms"<?php } elseif(is_home() || is_front_page() ) { ?>class="home"<?php } elseif(get_post_type() == 'imagegalleries') { ?>class="rooms gallery"<?php } elseif(is_page_template('page_amenities.php')) { ?>class="page amenities"<?php } elseif(is_page(92)) { ?>class="page deals"<?php } elseif(is_page_template('page_concierge.php')) { ?>class="page concierge"<?php } elseif(is_page_template('page_localinner.php')) { ?>class="page time-square"<?php } elseif(get_post_type() == 'amenities') { ?>class="page single amenity"<?php } elseif(is_page() || is_single()) { body_class('single'); ?><?php } elseif(is_home() || is_front_page()) { ?>class="home"<?php } ?>>


<div>


	<section class="navigate">
		
			
			
			<div class="logobox">
			
				<a class="logo" href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo ('template_url'); ?>/images/logo.png" alt="Row NYC" /></a>
				
				
				<div class="languages"><?php language_selector_flags(); ?></div>
			
			</div>
			
			
			<ul class="supernav">
			
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
				<a href="<?php bloginfo ('url'); ?>/the-hotel/"><span class="hotel"></span><p><?php _e('Hotel','row-theme-text'); ?></p></a>
				
				<ul class="dropbox">
					
					<li class="drop-intro">
						
						<?php query_posts('post_type=page&p=353&suppress_filters=1'); if(have_posts()) : while(have_posts()) : the_post(); ?>
							
							<h1><?php the_title(); ?></h1>
						
							<p><?php echo excerpt(13); ?></p>
							
						<?php endwhile; endif; wp_reset_query(); ?>								
					</li>
					
					<?php $bloblor =  array(353,60,12,10,1387,331); query_posts(array(
										'post_type' => 'page',
										'post__in' => $bloblor,
										'orderby' => 'menu_order',
										'suppress_filters' => 1)
										
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

			</li>

			<li>
				<a href="<?php bloginfo ('url'); ?>/?page_id=86"><span class="rooms"></span><p><?php _e('Rooms','row-theme-text'); ?></p></a>
				
					<ul id="dropbox" class="dropbox">
					
						<li class="drop-intro">
							
							<?php query_posts('post_type=page&p=86&suppress_filters=1'); if(have_posts()) : while(have_posts()) : the_post(); ?>
								
								<h1><?php the_title(); ?></h1>
							
								<p><?php echo excerpt(13); ?></p>
								
							<?php endwhile; endif; wp_reset_query(); ?>	
							
						</li>
						
						<?php query_posts('post_type=rooms&posts_per_page=-1&suppress_filters=1'); if(have_posts()) : while(have_posts()) : the_post(); ?>
						
						
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
			</li>
			
			
			<li>
				<a href="<?php bloginfo ('url'); ?>/gallery/inside-row-nyc/"><span class="gallery"></span><p><?php _e('Gallery','row-theme-text'); ?></p></a>

				<ul id="dropbox" class="dropbox">

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

								<h1><?php the_title($t_post_id_two); ?></h1>
							
								<p><?php echo excerpt(13); ?></p>

							<?php } else {  //no translation? display default language ?>							

								<?php //query_posts('post_type=page&p=54&suppress_filters=0'); if(have_posts()) : while(have_posts()) : the_post(); ?>
																
								<h1><?php the_title(); ?></h1>
							
								<p><?php echo excerpt(13); ?></p>
																							
							<?php } endwhile; wp_reset_query(); $sitepress->switch_lang($current_lang); ?>	

						</li>

					<!-- <li class="drop-intro">
							
						<?php query_posts('post_type=page&p=89&suppress_filters=1'); if(have_posts()) : while(have_posts()) : the_post(); ?>
							
							<h1><?php the_title(); ?></h1>
						
							<p><?php echo excerpt(13); ?></p>
							
						<?php endwhile; endif; wp_reset_query(); ?>	
						
					</li> -->
						
					<?php query_posts('post_type=imagegalleries&posts_per_page=-1&suppress_filters=1'); if(have_posts()) : while(have_posts()) : the_post(); ?>
					
					
					<li>
					
					
						<?php if(get_post_meta($post->ID, 'cebo_fullpic', true)) { ?>
						
						<a href="<?php the_permalink(); ?>"><img src="<?php echo get_post_meta($post->ID, 'cebo_fullpic', true); ?>" alt="<?php the_title(); ?>"></a>

						<?php } elseif( has_post_thumbnail() ) { ?>

								<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium'); ?></a>	
						
						<?php } elseif($imgsrc) { ?>
						
						
						<a href="<?php the_permalink(); ?>"><img src="<?php echo $imgsrc[0]; ?>" alt="<?php the_title(); ?>"></a>
						
						<?php } else { ?>
											
						<a href="<?php the_permalink(); ?>"><img src="<?php bloginfo ('template_url'); ?>/images/watermark.jpg" alt="<?php the_title(); ?>"></a>
						
						
						<?php } ?>							

						<h3><?php the_title(); ?></h3>
					</li>
					
					<?php endwhile; endif; wp_reset_query(); ?>		
					
									
				</ul>
			</li>
			
			<li>
				<a href="<?php bloginfo ('url'); ?>/?page_id=92"><span class="deals"></span><p><?php _e('Deals','row-theme-text'); ?></p></a>
				
					<ul class="dropbox">
					
						<li class="drop-intro">
							
							<?php query_posts('post_type=page&p=92&suppress_filters=1'); if(have_posts()) : while(have_posts()) : the_post(); ?>
								
								<h1><?php the_title(); ?></h1>
							
								<p><?php echo excerpt(13); ?></p>
								
							<?php endwhile; endif; wp_reset_query(); ?>								
						</li>
						
						<?php query_posts(array('showposts' => 20, 'post_type' => 'specials', 'suppress_filters' => 1,)); if(have_posts()) : while(have_posts()) : the_post(); ?>
						
						
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
			</li>
			
			<li>
				<a href="<?php bloginfo ('url'); ?>/?page_id=54"><span class="eats"></span><p><?php _e('Eat & Drink','row-theme-text'); ?></p></a>
					
					
						<ul class="dropbox">
						
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

								<h1><?php the_title($t_post_id_two); ?></h1>
							
								<p><?php echo excerpt(13); ?></p>

							<?php } else {  //no translation? display default language ?>							

								<?php //query_posts('post_type=page&p=54&suppress_filters=0'); if(have_posts()) : while(have_posts()) : the_post(); ?>
																
								<h1><?php the_title(); ?></h1>
							
								<p><?php echo excerpt(13); ?></p>
																							
							<?php } endwhile; wp_reset_query(); ?>	

						</li>

						<?php 

							//query args
							$custom_query_args = array(
							    'post_type' => 'amenities', 
							    'posts_per_page' => 4, 
							    'post__not_in' => array(32,33), 
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
					
					
				
			</li>
			
			<li>
				<a href="<?php bloginfo ('url'); ?>/?page_id=148"><span class="explore"></span><p><?php _e('Explore NYC','row-theme-text'); ?></p></a>
				
					<ul class="dropbox">
					
						<li class="drop-intro">
							
							<?php query_posts('post_type=page&p=148&suppress_filters=1'); if(have_posts()) : while(have_posts()) : the_post(); ?>
								
								<h1><?php the_title(); ?></h1>
							
								<p><?php echo excerpt(13); ?></p>
								
							<?php endwhile; endif; wp_reset_query(); ?>								
						</li>
						
						<?php query_posts(array('showposts' => 20, 'post_parent' => 148, 'post_type' => 'page', 'suppress_filters' => 1,)); if(have_posts()) : while(have_posts()) : the_post(); ?>
						
						
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
					
			</li>
			
			<li>
				<a href="<?php bloginfo ('url'); ?>/contact"><span class="contact"></span><p><?php _e('Contact','row-theme-text'); ?></p></a>
			</li>
			
			<!--<li>
				<a href="#"><span class="blog"></span><p>Apple Blog</p></a>
			</li>-->
		
		</ul>
		
		<div class="finished">
			
			<!--<div class="weatherbox">
			
			
			</div>
			
			
			<div class="events">
			
				<h1>Upcoming Event</h1>
				
			</div>-->
			
			
			<div class="socials">
				<a href="<?php echo get_option('cebo_facebook'); ?>" target="_blank"><i class="fa fa-facebook"></i></a>
				<a href="<?php echo get_option('cebo_twitter'); ?>" target="_blank"><i class="fa fa-twitter"></i></a>
				<a href="<?php echo get_option('cebo_pinterest'); ?>" target="_blank"><i class="fa fa-pinterest"></i></a>
				<a href="<?php echo get_option('cebo_instagram'); ?>" target="_blank"><i class="fa fa-instagram"></i></a>
				<a href="<?php echo get_option('cebo_youtube'); ?>" target="_blank"><i class="fa fa-youtube"></i></a>

					<a href="https://plus.google.com/103755241093806177642" target="_blank" rel="publisher"><i class="fa fa-google-plus-square"></i></a>

			</div>

			<p>Complimentary WiFi</p>
		
		</div>
		
		<div class="bottom"></div>
	
	</section>

	<section class="navigate mobile">
		
			
			
			<div class="logobox">
			
				<a class="logo" href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo ('template_url'); ?>/images/logo.png" alt="Row NYC" /></a>
				
				
				<!-- <div class="languages"></div> -->
			
			</div>

			<div class="mobile-menu right">

				<div class="mobile-menu-section">

					<a class="mmenu-icon" href="#menu"><i class="fa fa-bars"></i> <?php _e('MENU','row-theme-text'); ?></a>

					<!-- <div class="languages"><a href="https://goo.gl/maps/5OpGS" style="color:#fff;">700 8TH AVENUE, NYC</a></div> -->

					<div class="languages"><?php //language_selector_flags(); ?></div>

				</div>

				<div class="banner"> 
							
					<p class="contacto"><?php _e('Reservations','row-theme-text'); ?> <span>888.352.3650</span></p>
					
					<div class="clear"></div>
					
				</div>

				<div class="topnav">
			
					<ul>

						<li>

							<a class="booking-link" href="https://rownyc.reztrip.com" onclick="_gaq.push(['_link', this.href]);return false;"><span class="book"><?php _e('Book','row-theme-text'); ?></span></a>

						</li>
						
						<li><a class="booking-link" href="<?php bloginfo('url'); ?>/row-nyc-address/"><span class="locale"><?php _e('Location','row-theme-text'); ?></span></a></li>
						
						<li><a class="booking-link" href="http://eepurl.com/PteA1" target="_blank"><span class="offer"><?php _e('Stay','row-theme-text'); ?><br><?php _e('Connected','row-theme-text'); ?></span></a></li>

					</ul>
					
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
					
						<ul class="dropdown">
						
							<?php $bloblor =  array(353,60,12,10,1387,331); query_posts(array(
												'post_type' => 'page',
												'post__in' => $bloblor,
												'orderby' => 'menu_order',
												'suppress_filters' => 1,
											)
												
												); if(have_posts()) : while(have_posts()) : the_post(); ?>
							
							
							<li>
							
							
								<?php if(get_post_meta($post->ID, 'cebo_fullpic', true)) { ?>
								
								<a href="<?php the_permalink(); ?>"><img src="<?php echo get_post_meta($post->ID, 'cebo_fullpic', true); ?>" alt="<?php the_title(); ?>"></a>

								<?php } elseif( has_post_thumbnail() ) { ?>

										<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium'); ?></a>							
								
								<?php } else { ?>
													
								<a href="<?php the_permalink(); ?>"><img src="<?php bloginfo ('template_url'); ?>/images/watermark.jpg" alt="<?php the_title(); ?>"></a>
								
								
								<?php } ?>							

								<h3><?php the_title(); ?></h3>
							</li>
							
							<?php endwhile; endif; wp_reset_query(); ?>	
							
						</ul>
				</li>

				<li>
					<a href="<?php bloginfo ('url'); ?>/?page_id=86"><span class="rooms"></span><p><?php _e('Rooms','row-theme-text'); ?></p></a>
					
						<ul>
							
							<?php query_posts('post_type=rooms&posts_per_page=-1&suppress_filters=1'); if(have_posts()) : while(have_posts()) : the_post(); ?>
							
							
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
				</li>
		
				<li>
					<a href="<?php bloginfo ('url'); ?>/gallery/inside-row-nyc"><span class="gallery"></span><p><?php _e('Gallery','row-theme-text'); ?></p></a>

					<ul id="dropbox" class="dropbox">
						
						<?php query_posts('post_type=imagegalleries&posts_per_page=-1&suppress_filters=1'); if(have_posts()) : while(have_posts()) : the_post(); ?>
						
						
						<li>
						
						
							<?php if(get_post_meta($post->ID, 'cebo_fullpic', true)) { ?>
							
							<a href="<?php the_permalink(); ?>"><img src="<?php echo get_post_meta($post->ID, 'cebo_fullpic', true); ?>" alt="<?php the_title(); ?>"></a>

							<?php } elseif( has_post_thumbnail() ) { ?>

								<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium'); ?></a>
							
							<?php } elseif($imgsrc) { ?>
							
							
							<a href="<?php the_permalink(); ?>"><img src="<?php echo $imgsrc[0]; ?>" alt="<?php the_title(); ?>"></a>
							
							<?php } else { ?>
												
							<a href="<?php the_permalink(); ?>"><img src="<?php bloginfo ('template_url'); ?>/images/watermark.jpg" alt="<?php the_title(); ?>"></a>
							
							
							<?php } ?>							

							<h3><?php the_title(); ?></h3>
						</li>
						
						<?php endwhile; endif; wp_reset_query(); ?>		
						
										
					</ul>

				</li>
				
				<li>
					<a href="<?php bloginfo ('url'); ?>/?page_id=92"><span class="deals"></span><p><?php _e('Deals','row-theme-text'); ?></p></a>
					
					<ul class="dropdown">
						
						<?php query_posts(array('showposts' => 20, 'post_type' => 'specials', 'suppress_filters' => 1,)); if(have_posts()) : while(have_posts()) : the_post(); ?>


						<li>


							<?php if(get_post_meta($post->ID, 'cebo_fullpic', true)) { ?>
							
							<a href="<?php the_permalink(); ?>"><img src="<?php echo get_post_meta($post->ID, 'cebo_fullpic', true); ?>" alt="<?php the_title(); ?>"></a>

							<?php } elseif( has_post_thumbnail() ) { ?>

									<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium'); ?></a>							
							
							<?php } else { ?>
												
							<a href="<?php the_permalink(); ?>"><img src="<?php bloginfo ('template_url'); ?>/images/watermark.jpg" alt="<?php the_title(); ?>"></a>
							
							
							<?php } ?>							

							<h3><?php the_title(); ?></h3>
						</li>

						<?php endwhile; endif; wp_reset_query(); ?>	
						
					</ul>

				</li>
				
				<li>
					<a href="<?php bloginfo ('url'); ?>/?page_id=54"><span class="eats"></span><p><?php _e('Eat & Drink','row-theme-text'); ?></p></a>
					
						<ul class="dropdown">
						
							<?php query_posts(array('post_type' => 'amenities', 'posts_per_page' => 3, 'post__not_in' => array(32,33), 'suppress_filters' => 1,)); if(have_posts()) : while(have_posts()) : the_post(); 	$imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "Full"); ?>						
						
							<li>
								
								<?php if(get_post_meta($post->ID, 'cebo_thumbtwo', true)) { ?>
								
								<a href="<?php the_permalink(); ?>"><img src="<?php echo get_post_meta($post->ID, 'cebo_thumbtwo', true); ?>" alt="<?php the_title(); ?>"></a>
								
								<?php } elseif($imgsrc) { ?>

														
								<a href="<?php the_permalink(); ?>"><img src="<?php echo $imgsrc[0]; ?>" alt="<?php the_title(); ?>"></a>

								<?php } ?>			

								<h3><?php the_title(); ?></h3>
							</li>
							
							<?php endwhile; endif; wp_reset_query(); ?>
													
						</ul>
				</li>
				
				<li>
					<a href="<?php bloginfo ('url'); ?>/?page_id=148"><span class="explore"></span><p><?php _e('Explore NYC','row-theme-text'); ?></p></a>
					
						<ul>
							
							<?php query_posts(array('showposts' => 20, 'post_parent' => 148, 'post_type' => 'page', 'suppress_filters' => 1,)); if(have_posts()) : while(have_posts()) : the_post(); ?>
							
							
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
						
				</li>
				
				<li>
					<a href="<?php bloginfo ('url'); ?>/contact"><span class="contact"></span><p><?php _e('Contact','row-theme-text'); ?></p></a>
				</li>
				
				<!--<li>
					<a href="#"><span class="blog"></span><p>Apple Blog</p></a>
				</li>-->
			
			</ul>

		</nav>
	
	</section>
	
	
	<div class="behindnavigate"></div>





	<!-- BEGIN CONTENT AREA -->
	
	<div class="topnav">
			
		<ul>

			<li>

				<?php if( $current_lang == 'en') { ?>

					<a class="booking-link" href="<?php echo get_option('cebo_genbooklink'); ?>" onclick="_gaq.push(['_link', this.href]);return false;"><i class="fa fa-calendar"></i><span class="book"><?php _e('Book','row-theme-text'); ?></span></a>

				<?php } elseif( $current_lang == 'zh-hans') { ?>

					<a class="booking-link" href="<?php echo get_option('cebo_genbooklink'); ?>/zh-CN/search" onclick="_gaq.push(['_link', this.href]);return false;"><i class="fa fa-calendar"></i><span class="book"><?php _e('Book','row-theme-text'); ?></span></a>

				<?php } elseif( $current_lang == 'pt-br') { ?>

					<a class="booking-link" href="<?php echo get_option('cebo_genbooklink'); ?>/pt/search" onclick="_gaq.push(['_link', this.href]);return false;"><i class="fa fa-calendar"></i><span class="book"><?php _e('Book','row-theme-text'); ?></span></a>

				<?php } elseif( $current_lang == 'de' || 'es' || 'fr' || 'it' ) { ?>

					<a class="booking-link" href="<?php echo get_option('cebo_genbooklink'); ?>/<?php echo $current_lang; ?>/search" onclick="_gaq.push(['_link', this.href]);return false;"><i class="fa fa-calendar"></i><span class="book"><?php _e('Book','row-theme-text'); ?></span></a>

				<?php } else { ?>

					<a class="booking-link" href="<?php echo get_option('cebo_genbooklink'); ?>" onclick="_gaq.push(['_link', this.href]);return false;"><i class="fa fa-calendar"></i><span class="book"><?php _e('Book','row-theme-text'); ?></span></a>

				<?php } ?>
				
				<!-- Commented out the booking widget dropdown here
				<div class="dropout">

					<div class="inner">
						
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
											<span>
												
												<label for="arrival"><?php _e('Arriving Date','row-theme-text'); ?></label>
												
												<div class="squaredance">
													<input type="hidden" name="arrival_date" id="arrival_date" placeholder="" class="calendarsection" />
													<input type="text" id="arv">
													<input type="text" id="arve">
													
													<i class="fa fa-chevron-down"></i>
												</div>
												
												<div class="datepicker"></div>
											</span>
											
											<span>
												<label for="arrival"><?php _e('Departing Date','row-theme-text'); ?></label>
												
												<div class="squaredance">
													<input name="departure_date" type="hidden" id="departure_date" placeholder="" class="calendarsection" />
													<input type="text" id="dep">
													<input type="text" id="depee">
													
													<i class="fa fa-chevron-down"></i>
												</div>
												
												<div class="departdatepicker"></div>
											</span>
											
											<span class="lowselect">
												<label for="arrival"><?php _e('Adults','row-theme-text'); ?></label>
												
												<div class="squaredance">
													<p class="topping">How Many?</p>
													
													<select id="adults" name="adults[]">
													 	<option value="1">1</option>
									                    <option value="2">2</option>
									                    <option value="3">3</option>
									                    <option value="4">4</option>                                
													</select>
													
													<!--<ul id="selectUl">
													    <li>2</li>
													    <li>1</li>
													    <li>2</li>
													    <li>3</li>
													    <li>4</li>
													    <li>5</li>
													    <li>6</li>
													    <li>7</li>
													    <li>8</li>
													    <li>9</li>
													</ul>
													<select name="Adults">
													 		<option value="2">2</option>
														 	<option value="1">1</option>
										                    <option value="2">2</option>
										                    <option value="3">3</option>
										                    <option value="4">4</option>                                
										                    <option value="5">5</option>
										                    <option value="6">6</option>
										                    <option value="7">7</option>
										                    <option value="8">8</option>                                
										                    <option value="9">9</option>
										                    <option value="10">10</option> 
													</select>-->
												<!--
												</div>
												<i class="fa fa-chevron-down"></i>
											</span>
											
											<span class="lowselect">
												<label for="arrival"><?php _e('Children','row-theme-text'); ?></label>
												
												<div class="squaredance">
													<p class="topping"><?php _e('How Many?','row-theme-text'); ?></p>
													 <select id="children" name="children[]" >
													 	<option value="0">0</option>
														 <option value="1">1</option>
										                    <option value="2">2</option>
										                    <option value="3">3</option>
													</select>
												</div>
												<i class="fa fa-chevron-down"></i>
											</span>
											
											<div class="clear"></div>
											
											<a href="#" class="button"><?php _e('See Availability','row-theme-text'); ?></a>
										
											
										</div>
									
									</form>
							
					</div>			
				
				</div>
			-->
			</li>
			
			<li><a class="booking-link" href="<?php bloginfo('url'); ?>/row-nyc-address/"><i class="fa fa-map-marker"></i><span class="locale"><?php _e('Location','row-theme-text'); ?></span></a>
			
				<div class="dropout" style="width: 600px;">

					<a style="background: transparent !important; color: #fff !important;" href="<?php bloginfo('url'); ?>/row-nyc-address/"><img style="max-width: 90%; padding: 20px 0; margin: auto; text-align: center;" src="<?php bloginfo('template_url'); ?>/images/shot.jpg" /><br><?php _e('Explore NYC','row-theme-text'); ?></a>
				</div>

			
			</li>
			
			<li><a class="booking-link" href="http://eepurl.com/PteA1" target="_blank"><i class="fa  fa-envelope"></i><span class="offer"><?php _e('Stay','row-theme-text'); ?><br><?php _e('Connected','row-theme-text'); ?></span></a>
				<div class="dropout oranger">

					<div class="inner" style="padding: 40px;">
						
						<div id="contactform">
							<!--<div id="messager" class="messager"></div>
							<form method="post" action="<?php bloginfo('template_url'); ?>/library/contact_three.php" name="cformr" id="cformr" class="sleek cformr">
								
								<input class="lilly" id="namer" type="text" placeholder="First Name*" name="namer" value="" />
								
								<input class="lilly" id="emailr" type="text" placeholder="Last Name*" name="namers" value="" />
								
								<input class="lilly" id="namer" type="text" placeholder="Your Zip*" name="zipper" value="" />
								
								<input class="lilly" id="emailr" type="text" placeholder="Your Email*" name="emailr" value="" />
			
								<input class="lilly" type="hidden" name="subjectr" id="subjectr" value="<?php get_option('cebo_email'); ?>" />
								<input class="lilly" type="hidden" name="honeypot" id="honeypot" />
								
								<input class="lilly" type="text" style="display: none;" name="myemailr" id="myemailr" value="<?php get_option('cebo_email'); ?>" />
								
							
								
						        <input type="submit" name="sends" value="Sign Up" id="submitr" class="nudge"/>
						        
						        
							</form>	-->
							
							<!-- Begin MailChimp Signup Form -->
<link href="//cdn-images.mailchimp.com/embedcode/classic-081711.css" rel="stylesheet" type="text/css">
<style type="text/css">
	#mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; }
	/* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
	   We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
</style>
<div id="mc_embed_signup">
<form action="http://sphericalcommunications.us4.list-manage.com/subscribe/post?u=ae5d0eb33650e5a9963ca5a3e&amp;id=1054dd91b3" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
	<h2><?php _e('Subscribe Today','row-theme-text'); ?></h2>
<div class="indicates-required"><span class="asterisk">*</span> <?php _e('indicates required','row-theme-text'); ?></div>
<div class="mc-field-group">
	<label for="mce-MMERGE1"><?php _e('First Name','row-theme-text'); ?>  <span class="asterisk">*</span>
</label>
	<input type="text" value="" name="MMERGE1" class="required" id="mce-MMERGE1">
</div>
<div class="mc-field-group">
	<label for="mce-MMERGE2"><?php _e('Last Name','row-theme-text'); ?>  <span class="asterisk">*</span>
</label>
	<input type="text" value="" name="MMERGE2" class="required" id="mce-MMERGE2">
</div>
<div class="mc-field-group">
	<label for="mce-MMERGE3"><?php _e('Your Zip','row-theme-text'); ?>  <span class="asterisk">*</span>
</label>
	<input type="text" value="" name="MMERGE3" class="required" id="mce-MMERGE3">
</div>
<div class="mc-field-group">
	<label for="mce-EMAIL"><?php _e('Email Address','row-theme-text'); ?>  <span class="asterisk">*</span>
</label>
	<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
</div>
	<div id="mce-responses" class="clear">
		<div class="response" id="mce-error-response" style="display:none"></div>
		<div class="response" id="mce-success-response" style="display:none"></div>
	</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
    <div style="position: absolute; left: -5000px;"><input type="text" name="b_ae5d0eb33650e5a9963ca5a3e_1054dd91b3" value=""></div>
	<div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
</form>
</div>
<script type="text/javascript">
var fnames = new Array();var ftypes = new Array();fnames[1]='MMERGE1';ftypes[1]='text';fnames[2]='MMERGE2';ftypes[2]='text';fnames[3]='MMERGE3';ftypes[3]='text';fnames[0]='EMAIL';ftypes[0]='email';
try {
    var jqueryLoaded=jQuery;
    jqueryLoaded=true;
} catch(err) {
    var jqueryLoaded=false;
}
var head= document.getElementsByTagName('head')[0];
if (!jqueryLoaded) {
    var script = document.createElement('script');
    script.type = 'text/javascript';
    script.src = '//ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js';
    head.appendChild(script);
    if (script.readyState && script.onload!==null){
        script.onreadystatechange= function () {
              if (this.readyState == 'complete') mce_preload_check();
        }    
    }
}

var err_style = '';
try{
    err_style = mc_custom_error_style;
} catch(e){
    err_style = '#mc_embed_signup input.mce_inline_error{border-color:#6B0505;} #mc_embed_signup div.mce_inline_error{margin: 0 0 1em 0; padding: 5px 10px; background-color:#6B0505; font-weight: bold; z-index: 1; color:#fff;}';
}
var head= document.getElementsByTagName('head')[0];
var style= document.createElement('style');
style.type= 'text/css';
if (style.styleSheet) {
  style.styleSheet.cssText = err_style;
} else {
  style.appendChild(document.createTextNode(err_style));
}
head.appendChild(style);
setTimeout('mce_preload_check();', 250);

var mce_preload_checks = 0;
function mce_preload_check(){
    if (mce_preload_checks>40) return;
    mce_preload_checks++;
    try {
        var jqueryLoaded=jQuery;
    } catch(err) {
        setTimeout('mce_preload_check();', 250);
        return;
    }
    var script = document.createElement('script');
    script.type = 'text/javascript';
    script.src = 'http://downloads.mailchimp.com/js/jquery.form-n-validate.js';
    head.appendChild(script);
    try {
        var validatorLoaded=jQuery("#fake-form").validate({});
    } catch(err) {
        setTimeout('mce_preload_check();', 250);
        return;
    }
    mce_init_form();
}
function mce_init_form(){
    jQuery(document).ready( function($) {
      var options = { errorClass: 'mce_inline_error', errorElement: 'div', onkeyup: function(){}, onfocusout:function(){}, onblur:function(){}  };
      var mce_validator = $("#mc-embedded-subscribe-form").validate(options);
      $("#mc-embedded-subscribe-form").unbind('submit');//remove the validator so we can get into beforeSubmit on the ajaxform, which then calls the validator
      options = { url: 'http://sphericalcommunications.us4.list-manage.com/subscribe/post-json?u=ae5d0eb33650e5a9963ca5a3e&id=1054dd91b3&c=?', type: 'GET', dataType: 'json', contentType: "application/json; charset=utf-8",
                    beforeSubmit: function(){
                        $('#mce_tmp_error_msg').remove();
                        $('.datefield','#mc_embed_signup').each(
                            function(){
                                var txt = 'filled';
                                var fields = new Array();
                                var i = 0;
                                $(':text', this).each(
                                    function(){
                                        fields[i] = this;
                                        i++;
                                    });
                                $(':hidden', this).each(
                                    function(){
                                        var bday = false;
                                        if (fields.length == 2){
                                            bday = true;
                                            fields[2] = {'value':1970};//trick birthdays into having years
                                        }
                                    	if ( fields[0].value=='MM' && fields[1].value=='DD' && (fields[2].value=='YYYY' || (bday && fields[2].value==1970) ) ){
                                    		this.value = '';
									    } else if ( fields[0].value=='' && fields[1].value=='' && (fields[2].value=='' || (bday && fields[2].value==1970) ) ){
                                    		this.value = '';
									    } else {
									        if (/\[day\]/.test(fields[0].name)){
    	                                        this.value = fields[1].value+'/'+fields[0].value+'/'+fields[2].value;									        
									        } else {
    	                                        this.value = fields[0].value+'/'+fields[1].value+'/'+fields[2].value;
	                                        }
	                                    }
                                    });
                            });
                        $('.phonefield-us','#mc_embed_signup').each(
                            function(){
                                var fields = new Array();
                                var i = 0;
                                $(':text', this).each(
                                    function(){
                                        fields[i] = this;
                                        i++;
                                    });
                                $(':hidden', this).each(
                                    function(){
                                        if ( fields[0].value.length != 3 || fields[1].value.length!=3 || fields[2].value.length!=4 ){
                                    		this.value = '';
									    } else {
									        this.value = 'filled';
	                                    }
                                    });
                            });
                        return mce_validator.form();
                    }, 
                    success: mce_success_cb
                };
      $('#mc-embedded-subscribe-form').ajaxForm(options);
      
      
    });
}
function mce_success_cb(resp){
    $('#mce-success-response').hide();
    $('#mce-error-response').hide();
    if (resp.result=="success"){
        $('#mce-'+resp.result+'-response').show();
        $('#mce-'+resp.result+'-response').html(resp.msg);
        $('#mc-embedded-subscribe-form').each(function(){
            this.reset();
    	});
    } else {
        var index = -1;
        var msg;
        try {
            var parts = resp.msg.split(' - ',2);
            if (parts[1]==undefined){
                msg = resp.msg;
            } else {
                i = parseInt(parts[0]);
                if (i.toString() == parts[0]){
                    index = parts[0];
                    msg = parts[1];
                } else {
                    index = -1;
                    msg = resp.msg;
                }
            }
        } catch(e){
            index = -1;
            msg = resp.msg;
        }
        try{
            if (index== -1){
                $('#mce-'+resp.result+'-response').show();
                $('#mce-'+resp.result+'-response').html(msg);            
            } else {
                err_id = 'mce_tmp_error_msg';
                html = '<div id="'+err_id+'" style="'+err_style+'"> '+msg+'</div>';
                
                var input_id = '#mc_embed_signup';
                var f = $(input_id);
                if (ftypes[index]=='address'){
                    input_id = '#mce-'+fnames[index]+'-addr1';
                    f = $(input_id).parent().parent().get(0);
                } else if (ftypes[index]=='date'){
                    input_id = '#mce-'+fnames[index]+'-month';
                    f = $(input_id).parent().parent().get(0);
                } else {
                    input_id = '#mce-'+fnames[index];
                    f = $().parent(input_id).get(0);
                }
                if (f){
                    $(f).append(html);
                    $(input_id).focus();
                } else {
                    $('#mce-'+resp.result+'-response').show();
                    $('#mce-'+resp.result+'-response').html(msg);
                }
            }
        } catch(e){
            $('#mce-'+resp.result+'-response').show();
            $('#mce-'+resp.result+'-response').html(msg);
        }
    }
}

</script>
<!--End mc_embed_signup-->	



						</div><!--end contactform-->
						
					</div>

					
				</div>			
				
			</li>

		</ul>
		
	</div>
	
	<div class="banner"> 
		
		<p>700 8th Avenue, New York, NY 10036 <a href="mailto:info@rownyc.com" target="_blank">info@rownyc.com</a></p>
		
		<p class="contacto"><?php _e('Reservations','row-theme-text'); ?> <span>888.352.3650</span></p>
		
		
		<div class="clear"></div>
	</div>	
