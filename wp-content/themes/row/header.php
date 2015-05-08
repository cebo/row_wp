<?php

	global $sitepress;
	$current_lang = $sitepress->get_current_language();
	$default_lang = $sitepress->get_default_language();

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

		if( $check && get_post_meta($post->ID,'cebo_redirect_url', true) ) {
			header("HTTP/1.1 301 Moved Permanently");
			header( 'Location: ' .  get_post_meta($post->ID,'cebo_redirect_url', true) );
			exit();
		} 

		elseif( $check ) { redirect(); }

	}

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
<!-- <link rel="stylesheet" type="text/css" href="<?php bloginfo ('template_url'); ?>/css/ui-lightness/jquery.ui.all.css"> -->
<link rel="stylesheet" type="text/css" href="<?php bloginfo ('template_url'); ?>/js/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="<?php bloginfo ('template_url'); ?>/js/owl.theme.css">
<!-- Consolidated this css into one file. This styles the notification -->
<link rel='stylesheet' id='style-css' href='<?php bloginfo('template_url'); ?>/css/ns-style.css' type='text/css' media='all' />


<!-- responsive style -->

<link rel="stylesheet" type="text/css" href="<?php bloginfo ('template_url'); ?>/css/media.css">

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>

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

<?php include(TEMPLATEPATH . '/library/scripts.php'); ?>

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
			    // altField  : '#arve',
    			altFormat : 'dd',
    			minDate: new Date(),
    			gotoCurrent: true,
			    onSelect: function(event, ui) {
			        var dayOfWeek = $(this).datepicker('getDate').getUTCDay();
			        var selectedMonthName = months[$(this).datepicker('getDate').getMonth()];
			        var selectednextMonthName = months[$(this).datepicker('getDate').getMonth()+1];
			        // $('#arv').val(selectedMonthName);
			        $("#arrival_date").val(event);

			        var d = $(this).datepicker("getDate");
					var d2 =  (d.getDate() + 1);

					var getthedate = d.getDate();
					var getthemonth = d.getMonth()+1;
					var today = new Date();
					var LastDayOfMonth = new Date(d.getFullYear(),d.getMonth()+1, 0);
					var LastMonthOfYear = new Date(d.getFullYear(),0,0);
					var getdateLastDayOfMonth = LastDayOfMonth.getDate();
					var getdateLastMonthOfYear = LastMonthOfYear.getMonth()+1;
					var firstOfMonth = new Date(today.getFullYear(),today.getMonth(), 1);

					var d3 = firstOfMonth.getDate();

					// alert(testget);

					$(".departdatepicker").datepicker("option", "minDate", d);

					if( (getthedate == getdateLastDayOfMonth) && (getthemonth != getdateLastMonthOfYear) ) {

						var d1 =  d.getFullYear() + '-' + (d.getMonth() + 2) + '-' + d3;

						$('.departdatepicker').datepicker('setDate',d1);

						if(d3 > 10) {
							$("#depee").val('0'+d3);
						} else {
							$("#depee").val(d3);
						}

						$("#departure_date").val(d1);
			        	$('#dep').val(selectednextMonthName);
			        	
			        	$(".datepicker").addClass("super-ghost");   
				  		$('.departdatepicker').css({"opacity" : 1, "visibility" : "visible"});
						$(".departdatepicker").removeClass("super-ghost");  

			        } else if( (getthedate == getdateLastDayOfMonth) && (getthemonth == getdateLastMonthOfYear) ) {

			        	var d1 =  (d.getFullYear()+1) + '-' + '1' + '-' + d3;

						$('.departdatepicker').datepicker('setDate',d1);

						if(d3 > 10) {
							$("#depee").val('0'+d3);
						} else {
							$("#depee").val(d3);
						}

						$("#departure_date").val(d1);
			        	$('#dep').val('January');
			        	
			        	$(".datepicker").addClass("super-ghost");   
				  		$('.departdatepicker').css({"opacity" : 1, "visibility" : "visible"});
						$(".departdatepicker").removeClass("super-ghost");  

					} else {

						var d1 =  d.getFullYear() + '-' + (d.getMonth() + 1) + '-' + (d.getDate() + 1);

						$('.departdatepicker').datepicker('setDate',d1);

						if(d2 < 10) {
							$("#depee").val('0'+d2);
						} else {
							$("#depee").val(d2);
						}
						
						$("#departure_date").val(d1);
			        	$('#dep').val(selectedMonthName);

			        	$(".datepicker").addClass("super-ghost");   
				  		$('.departdatepicker').css({"opacity" : 1, "visibility" : "visible"});
						$(".departdatepicker").removeClass("super-ghost");   
					}
			        
			    }
			     
			});
			
			// var tester = $("#arrival_date").val();
			
			$('.departdatepicker').datepicker({
			    dateFormat: 'yy-mm-dd',
			    altField  : '#depee',
    			altFormat : 'dd',
    			minDate: 1,
    			gotoCurrent: true,
    			beforeShowDay: function(date) {
					var date1 = $.datepicker.parseDate($.datepicker._defaults.dateFormat, $("#arrival_date").val());
					var date2 = $.datepicker.parseDate($.datepicker._defaults.dateFormat, $("#departure_date").val());
					return [true, date1 && ((date.getTime() == date1.getTime()) || (date2 && date >= date1 && date <= date2)) ? "dp-highlight" : ""];
				},
			    onSelect: function(event, ui) {
			        var dayOfWeek = $(this).datepicker('getDate').getUTCDay();
			        var selectedMonthName = months[$(this).datepicker('getDate').getMonth()];
			        $('#dep').val(selectedMonthName);
			        $("#departure_date").val(event);
			        $('.departdatepicker').addClass("super-ghost");
			        
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
			        var selectednextMonthName = months[$(this).datepicker('getDate').getMonth()+1];
			        $('#arv-1').val(selectedMonthName);
			        $("#arrival_date-1").val(event);

			        var d = $(this).datepicker("getDate");
					var d2 =  (d.getDate() + 1);

					var getthedate = d.getDate();
					var getthemonth = d.getMonth()+1;
					var today = new Date();
					var LastDayOfMonth = new Date(d.getFullYear(),d.getMonth()+1, 0);
					var LastMonthOfYear = new Date(d.getFullYear(),0,0);
					var getdateLastDayOfMonth = LastDayOfMonth.getDate();
					var getdateLastMonthOfYear = LastMonthOfYear.getMonth()+1;
					var firstOfMonth = new Date(today.getFullYear(),today.getMonth(), 1);				
					
					// alert(getthemonth);

					var d3 = firstOfMonth.getDate();

					$(".departdatepickerr").datepicker("option", "minDate", d);

					if( (getthedate == getdateLastDayOfMonth) && (getthemonth != getdateLastMonthOfYear) ) {

						var d1 =  d.getFullYear() + '-' + (d.getMonth() + 2) + '-' + d3;

						$('.departdatepickerr').datepicker('setDate',d1);

						$("#depee-1").val(d3);
						$("#departure_date-1").val(d1);
			        	$('#dep-1').val(selectednextMonthName);

			        } else if( (getthedate == getdateLastDayOfMonth) && (getthemonth == getdateLastMonthOfYear) ) {

			        	var d1 =  (d.getFullYear()+1) + '-' + '1' + '-' + d3;

			        	$('.departdatepickerr').datepicker('setDate',d1);

						$("#depee-1").val(d3);
						$("#departure_date-1").val(d1);
			        	$('#dep-1').val('January');

					} else {

						var d1 =  d.getFullYear() + '-' + (d.getMonth() + 1) + '-' + (d.getDate() + 1);

						$('.departdatepickerr').datepicker('setDate',d1);

						$("#depee-1").val(d2);
						$("#departure_date-1").val(d1);
			        	$('#dep-1').val(selectedMonthName);
					}
			       
			    }
			     
			});
						
			$('.departdatepickerr').datepicker({
			    dateFormat: 'yy-mm-dd',
			    altField  : '#depee-1',
    			altFormat : 'dd',
    			minDate: 1,
    			beforeShowDay: function(date) {
					var date1 = $.datepicker.parseDate($.datepicker._defaults.dateFormat, $("#arrival_date-1").val());
					var date2 = $.datepicker.parseDate($.datepicker._defaults.dateFormat, $("#departure_date-1").val());
					return [true, date1 && ((date.getTime() == date1.getTime()) || (date2 && date >= date1 && date <= date2)) ? "dp-highlight" : ""];
				},
			    onSelect: function(event, ui) {
			        var dayOfWeek = $(this).datepicker('getDate').getUTCDay();
			        var selectedMonthName = months[$(this).datepicker('getDate').getMonth()];
			        $('#dep-1').val(selectedMonthName);
			        $("#departure_date-1").val(event);
			    }
			});

			$(".datepicker-ressys").datepicker({
				minDate: 0,
				numberOfMonths: [2,1],
				beforeShowDay: function(date) {
					var date1 = $.datepicker.parseDate($.datepicker._defaults.dateFormat, $("#arrival_date-nav").val());
					var date2 = $.datepicker.parseDate($.datepicker._defaults.dateFormat, $("#departure_date-nav").val());
					return [true, date1 && ((date.getTime() == date1.getTime()) || (date2 && date >= date1 && date <= date2)) ? "dp-highlight" : ""];
				},
				onSelect: function(dateText, inst) {
					var date1 = $.datepicker.parseDate($.datepicker._defaults.dateFormat, $("#arrival_date-nav").val());
					var date2 = $.datepicker.parseDate($.datepicker._defaults.dateFormat, $("#departure_date-nav").val());
	                var selectedDate = $.datepicker.parseDate($.datepicker._defaults.dateFormat, dateText);

	                
	                if (!date1 || date2) {
						$("#arrival_date-nav").val(dateText);
						$("#departure_date-nav").val("");
	                    $(this).datepicker();
	                } else if( selectedDate < date1 ) {
	                    $("#departure_date-nav").val( $("#arrival_date-nav").val() );
	                    $("#arrival_date-nav").val( dateText );
	                    $(this).datepicker();
	                } else {
						$("#departure_date-nav").val(dateText);
	                    $(this).datepicker();
					}
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
			
			// $("#arv").attr("placeholder", n);
			// $("#dep").attr("placeholder", n);
			$("#arv-1").attr("placeholder", n);
			$("#dep-1").attr("placeholder", n);



			var todaytwo = new Date();
		    var monthtwo = todaytwo.getMonth(),
		        yeartwo = todaytwo.getFullYear();
		    if (monthtwo < 0) {
		        monthtwo = 11;
		        yeartwo -= 1;
		    }
		    var tomorrow = new Date(yeartwo, monthtwo, todaytwo.getDate()+1);

			$('#arrival_date').val($.datepicker.formatDate('yy-mm-dd', todaytwo));
		    $('#departure_date').val($.datepicker.formatDate('yy-mm-dd', tomorrow));

			

		    // var alert = $.datepicker.formatDate('yy-mm-dd', today);
		    // alert(oneMonthAgo);

			// var d2=new Date();
			// var month2=new Array();
			// month[0]='01';
			// month[1]='02';
			// month[2]='03';
			// month[3]='04';
			// month[4]='05';
			// month[5]='06';
			// month[6]='07';
			// month[7]='08';
			// month[8]='09';
			// month[9]='10';
			// month[10]='11';
			// month[11]='12';
			// var n2 = d2.getMonth();

			// $("#arv").val(n2);
			// ("#dep").val(n2);
			// $("#arv-1").val(n2);
			// ("#dep-1").val(n2);
			
			
			// jQuery('form a.button').click(function(e) {
			// 	e.preventDefault();
			// 	_gaq.push(['_link', createURL() ]);
			// 	return false;
			// });
			
			
			jQuery('form a.button').click(function(e) {
				e.preventDefault();
				_gaq.push(['_link', createURL() ]);
				return false;
			});
		
			
			
		});
		

	$(document).ready(function() {
			
		$(".calspacer span.arrv input").click(function() {
				
			 $(".datepicker").removeClass("super-ghost").css({"opacity" : 1, "visibility" : "visible"});
			 $(".shutdown").addClass("alldown");
			
		});
		
		
		$(".departdatepicker").click(function() {
				 $(".datepicker").removeClass("super-ghost").css({"opacity" : 0, "visibility" : "hidden"}); 
			     $(".departdatepicker").addlass("super-ghost").css({"opacity" : 0, "visibility" : "hidden"}); 
			});
		
		$(".calspacer span.dept").click(function() {
			
			 $(".departdatepicker").css({"opacity" : 1, "visibility" : "visible"});
			 
		});
		
		$(".shutdown").click(function() {
			$(".datepicker").addClass("super-ghost");
			$(".departdatepicker").addClass("super-ghost");
			$(this).removeClass("alldown");
		});
		
		$(".cls").click(function() {
			$(".datepicker").addClass("super-ghost");
			$(".departdatepicker").addClass("super-ghost");
			$(".shutdown").removeClass("alldown");
		});
		
		$( "#departure_date" ).focus(function() {
  			$(".departdatepicker").removeClass("super-ghost");
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
	
	// $(".darkover a").click(function(){
	// 	$(".darkover").removeClass('blackout');
	// 	$(".booker").removeClass("opendrop");
	// });

	// $(".closethisthing").click(function(){
	// 	$(".darkover").removeClass('blackout');
	// 	$(".booker").removeClass("opendrop");
	// 	$(".datepicker").css('opacity', '').css('visibility', '');
	// 	$(".departdatepicker").css('opacity', '').css('visibility', '');
	// });

	
	// $(".openboxlink").hover(function(e){
	// e.preventDefault();
	//     var bion = $(".darkover");
	//     var ion =  $(".booker");
	//     if(bion.hasClass('blackout')) {
	        
	//     } else {
	//         bion.addClass('blackout')
	//         ion.addClass("opendrop");
	//       }
	// });


			 	 
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

</head> 

<body <?php if(is_page_template('page_rooms.php') || get_post_type() == 'rooms') { ?>class="rooms"<?php } elseif(is_home() || is_front_page() ) { ?>class="home"<?php } elseif(get_post_type() == 'imagegalleries') { ?>class="rooms gallery"<?php } elseif(is_page_template('page_amenities.php')) { ?>class="page amenities"<?php } elseif(is_page(92)) { ?>class="page deals"<?php } elseif(is_page_template('page_concierge.php')) { ?>class="page concierge"<?php } elseif(is_page_template('page_localinner.php')) { ?>class="page time-square"<?php } elseif(get_post_type() == 'amenities') { ?>class="page single amenity"<?php } elseif(is_page() || is_single()) { body_class('single'); ?><?php } elseif(is_home() || is_front_page()) { ?>class="home"<?php } ?>>

<a class="shutdown" href="#"></a>
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
				
				<div class="languages"><?php language_selector_flags(); ?></div>
			
			</div>
			
			
		<ul class="supernav">
			
			
			<li class="subinside inhotel">
				<a href="<?php bloginfo ('url'); ?>/the-hotel/"><span class="hotel"></span><p><?php _e('Hotel','row-theme-text'); ?></p></a>
			</li>
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

			<li class="subinside inrooms">
				<a href="<?php bloginfo ('url'); ?>/?page_id=86"><span class="rooms"></span><p><?php _e('Rooms','row-theme-text'); ?></p></a>		
			</li>
			
			<li class="subinside ingallery">
				<a href="<?php bloginfo ('url'); ?>/gallery/inside-row-nyc/"><span class="gallery"></span><p><?php _e('Gallery','row-theme-text'); ?></p></a>
			</li>
			
			<li class="subinside indeals">
				<a href="<?php bloginfo ('url'); ?>/?page_id=92"><span class="deals"></span><p><?php _e('Deals','row-theme-text'); ?></p></a>	
			</li>
			
			<li class="subinside ineats">
				<a href="<?php bloginfo ('url'); ?>/?page_id=54"><span class="eats"></span><p><?php _e('Eat & Drink','row-theme-text'); ?></p></a>
				
				
			</li>
			
			<li class="subinside inexplore">
				<a href="<?php bloginfo ('url'); ?>/?page_id=148"><span class="explore"></span><p><?php _e('Explore NYC','row-theme-text'); ?></p></a>
					
			</li>
			
			<li>
				<a href="<?php bloginfo ('url'); ?>/blog"><span class="blogxs"></span><p><?php _e('Blog','row-theme-text'); ?></p></a>
			</li>

			<li>
				<a href="<?php bloginfo ('url'); ?>/contact"><span class="contact"></span><p><?php _e('Contact','row-theme-text'); ?></p></a>
			</li>
			
			<!--<li>
				<a href="#"><span class="blog"></span><p>Apple Blog</p></a>
			</li>-->
		
		</ul>
		
		
		
		
		<!-- new sub layers -->
		
		
		
			<ul class="dropbox inhoteldrop">
					
					<li class="drop-intro">
						
						<?php query_posts('post_type=page&p=353&suppress_filters=1'); if(have_posts()) : while(have_posts()) : the_post(); ?>
							<br>
							<h1>Hotel</h1>
							<br>
						<?php endwhile; endif; wp_reset_query(); ?>								
					</li>
					
					<?php $bloblor =  array(353,12,331,10,1387); query_posts(array(
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
				
				
				
				<ul id="dropbox" class="dropbox inroomdrop">
					
						<li class="drop-intro">
							
							<?php query_posts('post_type=page&p=86&suppress_filters=1'); if(have_posts()) : while(have_posts()) : the_post(); ?>
								
								<br>
							<h1><?php the_title(); ?></h1>
							<br>

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
					
					
					<ul id="dropbox" class="dropbox ingallerydrop">

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
								
								<br>
								<h1><?php the_title($t_post_id_two); ?></h1>
							
								<br>

							<?php } else {  //no translation? display default language ?>							

								<?php //query_posts('post_type=page&p=54&suppress_filters=0'); if(have_posts()) : while(have_posts()) : the_post(); ?>
								
								<br>								
								<h1><?php the_title(); ?></h1>
							
								<br>
																							
							<?php } endwhile; wp_reset_query(); $sitepress->switch_lang($current_lang); ?>	

						</li>

					<!-- <li class="drop-intro">
							
						<?php query_posts('post_type=page&p=89&suppress_filters=1'); if(have_posts()) : while(have_posts()) : the_post(); ?>
							
							<h1><?php the_title(); ?></h1>
						
							<p><?php echo excerpt(13); ?></p>
							
						<?php endwhile; endif; wp_reset_query(); ?>	
						
					</li> -->
						
					<?php query_posts('post_type=imagegalleries&posts_per_page=-1&suppress_filters=1'); if(have_posts()) : while(have_posts()) : the_post(); $imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "Full"); ?>
					
					
					<li>
						
						<?php if($imgsrc) { ?>
						
						
						<a href="<?php the_permalink(); ?>"><img src="<?php echo $imgsrc[0]; ?>" alt="<?php the_title(); ?>"></a>
						
						<?php } else { ?>
											
						<a href="<?php the_permalink(); ?>"><img src="<?php bloginfo ('template_url'); ?>/images/watermark.jpg" alt="<?php the_title(); ?>"></a>
						
						
						<?php } ?>							

						<h3><?php the_title(); ?></h3>
					</li>
					
					<?php endwhile; endif; wp_reset_query(); ?>

					<?php query_posts('post_type=amenities&posts_per_page=1&suppress_filters=1&p=3097'); if(have_posts()) : while(have_posts()) : the_post(); $imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "Full"); ?>
					
					
					<li>
						
						<?php if($imgsrc) { ?>
						
						
						<a href="<?php the_permalink(); ?>"><img src="<?php echo $imgsrc[0]; ?>" alt="<?php the_title(); ?>"></a>
						
						<?php } else { ?>
											
						<a href="<?php the_permalink(); ?>"><img src="<?php bloginfo ('template_url'); ?>/images/watermark.jpg" alt="<?php the_title(); ?>"></a>
						
						
						<?php } ?>							

						<h3><?php the_title(); ?></h3>
					</li>
					
					<?php endwhile; endif; wp_reset_query(); ?>		
					
									
				</ul>	
				
				
				
				<ul class="dropbox indealsdrop">
					
						<li class="drop-intro">
							
							<?php query_posts('post_type=page&p=92&suppress_filters=1'); if(have_posts()) : while(have_posts()) : the_post(); ?>
								
								<br>
							<h1><?php the_title(); ?></h1>
							<br>
							
							<?php endwhile; endif; wp_reset_query(); ?>								
						</li>
						
						<?php query_posts(array('showposts' => 20, 'post_type' => 'specials', 'suppress_filters' => 1,)); if(have_posts()) : while(have_posts()) : the_post();  $imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "Full"); ?>
						
						
						<li>
						
							
							<?php if($imgsrc) { ?>
							
							
							<a href="<?php the_permalink(); ?>"><img src="<?php echo $imgsrc[0]; ?>" alt="<?php the_title(); ?>"></a>
							
							<?php } else { ?>
												
							<a href="<?php the_permalink(); ?>"><img src="<?php bloginfo ('template_url'); ?>/images/watermark.jpg" alt="<?php the_title(); ?>"></a>
							
							
							<?php } ?>							

							<h3><?php the_title(); ?></h3>
						</li>
						
						<?php endwhile; endif; wp_reset_query(); ?>	
						
												
					</ul>
					
						
					
						<ul class="dropbox ineatsdrop">
						
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

								<br><h1><?php the_title($t_post_id_two); ?></h1>
							
								<br>

							<?php } else {  //no translation? display default language ?>							

								<?php //query_posts('post_type=page&p=54&suppress_filters=0'); if(have_posts()) : while(have_posts()) : the_post(); ?>
																
								<br><h1><?php the_title(); ?></h1>
							
								<br>
																							
							<?php } endwhile; wp_reset_query(); ?>	

						</li>

						<?php 

							//query args
							$custom_query_args = array(
							    'post_type' => 'amenities', 
							    'posts_per_page' => 4, 
							    'post__not_in' => array(32,33,3097,5819), 
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
					
					<ul class="dropbox inexploredrop">
					
						<li class="drop-intro">
							
							<?php query_posts('post_type=page&p=148&suppress_filters=1'); if(have_posts()) : while(have_posts()) : the_post();  $imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "Full"); ?>
								
								<br>
							<h1><?php the_title(); ?></h1>
							<br>
							
								
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

			<div class="exclusive-offer">

				<form>
					<input type="text" placeholder="<?php _e('Exclusive Offer Signup', 'row-theme-text'); ?>">
					<button type="submit" value=""><i class="fa fa-caret-right"></i></button>
				</form>

			</div>

			<p><?php _e('High Speed Wifi Access Available','row-theme-text'); ?></p>
		
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

				<!-- <div class="topnav">
			
					<ul>

						<li>

							<a class="booking-link" href="https://rownyc.reztrip.com" onclick="_gaq.push(['_link', this.href]);return false;"><span class="book"><?php _e('Book','row-theme-text'); ?></span></a>

						</li>
						
						<li><a class="booking-link" href="<?php bloginfo('url'); ?>/row-nyc-address/"><span class="locale"><?php _e('Location','row-theme-text'); ?></span></a></li>
						
						<li><a class="booking-link" href="http://eepurl.com/PteA1" target="_blank"><span class="offer"><?php _e('Stay','row-theme-text'); ?><br><?php _e('Connected','row-theme-text'); ?></span></a></li>

					</ul>
					
				</div> -->

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

	<div class="banner desktop"> 
		
		<div class="header-contact">
			
			<p class="contacto"><?php _e('Reservations:','row-theme-text'); ?> <span style="font-family: 'GothamBold';">888.352.3650</span></p>
			<p class="contacto"><i class="fa fa-map-marker"></i> <span>700 8th Avenue, New York, NY 10036</span></p>			
			<p class="contacto"><a class="group-booking" target="_blank" href="https://rownyc.groupize.com/properties/25047/groups">Group Booking (10+)</a></p>
			<!-- <a href="mailto:info@rownyc.com" target="_blank">info@rownyc.com</a> -->

		</div>
		
		<a class="logo" href="<?php bloginfo('url'); ?>">
			<img src="<?php bloginfo ('template_url'); ?>/images/logo.png" alt="Row NYC" />
			<p>A Times Square Hotel</p>
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
							<!-- <input type="text" id="arv"> -->
							<!-- <input type="text" id="arve"> -->
							
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
						<a href="#" class="button"><?php _e('Reserve Now','row-theme-text'); ?></a>
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
						<input class="calendarsection" id="offercode" name="offercode" placeholder="<?php _e('Offer Code','row-theme-text'); ?>">
						</div>
					</span>

					<div class="butonconton">
					
							<?php if( $current_lang == 'en' ) { ?>

								<a target="_blank" href="https://rownyc.reztrip.com/search?&arrival_date=<?php echo date('Y-m-d'); ?>&departure_date=<?php $tomorrow = date("Y-m-d", time() + 86400); echo $tomorrow; ?>&adults[]=1&children[]=0" class="check-rates"><?php _e('Check Rates','row-theme-text'); ?></a>
					
							<?php } elseif( $current_lang == 'zh-hans') { ?>
					
								<a target="_blank" href="<?php echo get_option('cebo_genbooklink'); ?>/zh-CN/search?&arrival_date=<?php echo date('Y-m-d'); ?>&departure_date=<?php $tomorrow = date("Y-m-d", time() + 86400); echo $tomorrow; ?>&adults[]=1&children[]=0" class="check-rates"><?php _e('Check Rates','row-theme-text'); ?></a>
					
							<?php } elseif( $current_lang == 'pt-br') { ?>
					
								<a target="_blank" href="<?php echo get_option('cebo_genbooklink'); ?>/pt/search?&arrival_date=<?php echo date('Y-m-d'); ?>&departure_date=<?php $tomorrow = date("Y-m-d", time() + 86400); echo $tomorrow; ?>&adults[]=1&children[]=0" class="check-rates"><?php _e('Check Rates','row-theme-text'); ?></a>
					
							<?php } elseif( $current_lang == 'de' || 'es' || 'fr' || 'it' ) { ?>
					
								<a target="_blank" href="<?php echo get_option('cebo_genbooklink'); ?>/<?php echo $current_lang; ?>/search?&arrival_date=<?php echo date('Y-m-d'); ?>&departure_date=<?php $tomorrow = date("Y-m-d", time() + 86400); echo $tomorrow; ?>&adults[]=1&children[]=0" class="check-rates"><?php _e('Check Rates','row-theme-text'); ?></a>
					
							<?php } else { ?>
					
								<a target="_blank" href="<?php echo get_option('cebo_genbooklink'); ?>/search?&arrival_date=<?php echo date('Y-m-d'); ?>&departure_date=<?php $tomorrow = date("Y-m-d", time() + 86400); echo $tomorrow; ?>&adults[]=1&children[]=0" class="check-rates"><?php _e('Check Rates','row-theme-text'); ?></a>
					
							<?php }  ?>

						
					</div>
					
					<div class="clear"></div>
				</div>						
						
			</form>

		</div>
	</div>	
