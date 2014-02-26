<!DOCTYPE HTML>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<title>
		<?php global $page, $paged; wp_title( '|', true, 'right' ); bloginfo( 'name' );
	
		// Add the blog description for the home/front page.
		$site_description = get_bloginfo( 'description', 'display' );
		if ( $site_description && ( is_home() || is_front_page() ) )
			echo " | $site_description";
	
		// Add a page number if necessary:
		if ( $paged >= 2 || $page >= 2 )
			echo ' | ' . sprintf( __( 'Page %s', 'cebolang' ), max( $paged, $page ) );
		?>
	</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<?php if (get_option('cebo_custom_favicon') == '') { ?>
	
	<link rel="icon" href="<?php bloginfo ('template_url'); ?>/cebo_options/<?php bloginfo ('template_url'); ?>/images/favicon.ico" type="image/x-ico"/>
	
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
<!-- <link rel="stylesheet" type="text/css" href="<?php bloginfo ('template_url'); ?>/css/ui-lightness/jquery.ui.all.css"> -->



<!-- responsive style -->

<link rel="stylesheet" type="text/css" href="<?php bloginfo ('template_url'); ?>/css/media.css">

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>

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
    			minDate: 3,
			    onSelect: function(event, ui) {
			        var dayOfWeek = $(this).datepicker('getDate').getUTCDay();
			        var selectedMonthName = months[$(this).datepicker('getDate').getMonth()];
			        $('#dep').val(selectedMonthName);
			        $("#departure_date").val(event);
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

<!-- Scripts -->
<script type="text/javascript" src="<?php bloginfo ('template_url'); ?>/js/scripts.js"></script>

<script type="text/javascript">
	
	$(document).ready(function() {
	
		
	  $('#arrival_date').live('keyup',function() {
        var pronameval = $(this).val();
        $('#departure_date').val(pronameval.replace(/ /g, '-').toLowerCase());
    });

		
		$('.supernav li.subinside').hover(function() {
      
       			$('.navigate').stop().addClass("slipnot");
  			
  			}, function() {
      	
      			$('.navigate').stop().removeClass("slipnot");
 			
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
 		
 		$(".opensays").click(function(e) {
 			  
 			  e.preventDefault();
			  $(".textbox").toggleClass( "openbox" );
			});
 		
 		$(".opensays-up").click(function(e) {
 			  
 			  e.preventDefault();
			  $(".textbox").toggleClass( "openbox-up" );
			});
		
		$(".opensays-1").click(function(e) {
 			  
 			  e.preventDefault();
			  $(".textbox-1").toggleClass( "openbox-up" );
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


<!-- Lightbox -->	
<link rel="stylesheet" href="css/prettyPhoto.css" type="text/css" media="screen" title="prettyPhoto main stylesheet" charset="utf-8" />
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
	</head> 
	
	
<body<?php if(is_page_template('page_rooms.php') || get_post_type() == 'rooms') { ?> class="rooms"<?php } elseif(is_page_template('page_amenities.php')) { ?>class="page amenities"<?php } elseif(is_page(92)) { ?> class="page deals"<?php } elseif(is_page() || is_single()) { ?> class="single page"<?php } ?>>


	<section class="navigate">
		
			
			
			<div class="logobox">
			
				<a class="logo" href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo ('template_url'); ?>/images/logo.png" alt="Row NYC" /></a>
				
				
				<div class="languages"></div>
			
			</div>
			
			
			<ul class="supernav">
			
			
			<li class="dropsub">
				<a href="<?php bloginfo ('url'); ?>/?page_id=6"><span class="hotel"></span><p>Hotel</p></a>
				
					<ul class="dropdown">
						
						<?php wp_nav_menu( array( 'menu' => 'hotel' ,  'items_wrap' => '%3$s', 'container' => '') ); ?>
						
					</ul>
			</li>
			
			<li>
				<a href="<?php echo get_option('cebo_genbooklink'); ?>"><span class="reserve"></span><p>Reservations</p></a>
</li>

			<li class="subinside">
				<a href="<?php bloginfo ('url'); ?>/?page_id=86"><span class="rooms"></span><p>Rooms</p></a>
				
					<ul id="dropbox" class="dropbox">
					
						<li class="drop-intro">
							
							<?php query_posts('post_type=page&p=86'); if(have_posts()) : while(have_posts()) : the_post(); ?>
								
								<h1><?php the_title(); ?></h1>
							
								<p><?php echo excerpt(13); ?></p>
								
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
			</li>
			
			
			<li>
				<a href="<?php bloginfo ('url'); ?>/?page_id=89"><span class="gallery"></span><p>Gallery</p></a>
			</li>
			
			<li class="dropsub">
				<a href="<?php bloginfo ('url'); ?>/?page_id=92"><span class="deals"></span><p>Deals</p></a>
				
					<ul class="dropdown">
						
						<?php query_posts('post_type=specials&posts_per_page=-1'); if(have_posts()) : while(have_posts()) : the_post(); ?>
						
						<li>
							
							<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
							
							
						</li>
						<?php endwhile; endif; wp_reset_query(); ?>	
						
					</ul>
			</li>
			
			<li class="dropsub">
				<a href="<?php bloginfo ('url'); ?>/?page_id=54"><span class="eats"></span><p>Eat & Drink</p></a>
				
					<ul class="dropdown">
					
						<?php query_posts('post_type=amenities&posts_per_page=-1'); if(have_posts()) : while(have_posts()) : the_post(); ?>
						
						<li>
							
							<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
							
							
						</li>
						<?php endwhile; endif; wp_reset_query(); ?>							
					</ul>
			</li>
			
			<li class="subinside">
				<a href="<?php bloginfo ('url'); ?>/?page_id=148"><span class="explore"></span><p>Explore NYC</p></a>
				
					<ul class="dropbox">
					
						<li class="drop-intro">
							
							<?php query_posts('post_type=page&p=148'); if(have_posts()) : while(have_posts()) : the_post(); ?>
								
								<h1><?php the_title(); ?></h1>
							
								<p><?php echo excerpt(13); ?></p>
								
							<?php endwhile; endif; wp_reset_query(); ?>								
						</li>
						
						<?php query_posts(array('showposts' => 20, 'post_parent' => 148, 'post_type' => 'page')); if(have_posts()) : while(have_posts()) : the_post(); ?>
						
						
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
				<a href="<?php bloginfo ('url'); ?>/?page_id=68"><span class="contact"></span><p>Contact</p></a>
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
				<a href="#"><i class="fa fa-facebook"></i></a>
				<a href="#"><i class="fa fa-twitter"></i></a>
				<a href="#"><i class="fa fa-pinterest"></i></a>
				<a href="#"><i class="fa fa-instagram"></i></a>
				<a href="#"><i class="fa fa-youtube"></i></a>
			</div>
		
		</div>
		
		<div class="bottom"></div>
	
	</section>
	
	
	<div class="behindnavigate"></div>





	<!-- BEGIN CONTENT AREA -->
	
	<div class="topnav">
			
		<ul>

			<li>

				<a class="booking-link" href="#"><i class="fa fa-calendar"></i><span class="book">Book</span></a>
						
				<div class="dropout">

					<div class="inner">
						
						<form action="<?php echo get_option('cebo_genbooklink'); ?>/search?" target="_blank">

							
							<div class="calspacer">
								<span>
									
									<label for="arrival">Arriving Date</label>
									
									<div class="squaredance">
										<input type="hidden" name="arrival_date" id="arrival_date" placeholder="" class="calendarsection" />
										<input type="text" id="arv">
										<input type="text"id="arve">
										
										<i class="fa fa-chevron-down"></i>
									</div>
									
									<div class="datepicker"></div>
								</span>
								
								<span>
									<label for="arrival">Departing Date</label>
									
									<div class="squaredance">
										<input name="departure_date" type="hidden" id="departure_date" placeholder="" class="calendarsection" />
										<input type="text" id="dep">
										<input type="text" id="depee">
										
										<i class="fa fa-chevron-down"></i>
									</div>
									
									<div class="departdatepicker"></div>
								</span>
								
								<span class="lowselect">
									<label for="arrival">Adults</label>
									
									<div class="squaredance">
										<p class="topping">How Many?</p>
										
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
			
									</div>
									<i class="fa fa-chevron-down"></i>
								</span>
								
								<span class="lowselect">
									<label for="arrival">Children</label>
									
									<div class="squaredance">
										<p class="topping">How Many?</p>
										 <select name="children[]" >
										 	<option value="0">0</option>
											 <option value="1">1</option>
							                    <option value="2">2</option>
							                    <option value="3">3</option>
							                    <option value="4">4</option>                                
							                    <option value="5">5</option>
							                    <option value="6">6</option>
							                    <option value="7">7</option>
							                    <option value="8">8</option>                                
							                    <option value="9">9</option>
										</select>
									</div>
									<i class="fa fa-chevron-down"></i>
								</span>
								
								<div class="clear"></div>
								
								
								<button class="button">See Availability</button>
								
							</div>
						
						</form>
							
					</div>			
				
				</div>

			</li>
			
			<li><a class="booking-link" href="#"><i class="fa fa-map-marker"></i><span class="locale">Location</span></a></li>
			
			<li><a class="booking-link" href="#"><i class="fa  fa-envelope"></i><span class="offer">Exclusive<br>Offers</span></a></li>

		</ul>
		
	</div>
	
	<div class="banner"> 
		
		<p>700 8th Avenue, New York, NY 10036 <a href="#">info@rowhotel.com</a></p>
		
		<p class="contacto">Reservations <span>888.353.3650</span></p>
		
		
		<div class="clear"></div>
	</div>	
