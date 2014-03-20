$(document).ready(function(){



	// Mmenu
		   
   if ($(window).width() < 940) {
			   
	   var pos 	= 'mm-top mm-right mm-bottom',
			zpos	= 'mm-front mm-next';

		var $html 	= $('html'),
			$menu	= $('nav#menu.mobile'),
			$both	= $html.add( $menu );

		$menu.mmenu();

		//	Add the position-classnames onChange
		$('input[name="pos"]').change(function() {
			$both.removeClass( pos ).addClass( 'mm-' + this.value );
		});
		$('input[name="zpos"]').change(function() {
			$both.removeClass( zpos ).addClass( 'mm-' + this.value );
		});

	}

	// $('.supernav').hover(function() {
      
 //      			$('.supernav').mouseenter( function() {
 //      				$('.navigate').stop().addClass("slipnot");
 //      			});
  			
 //  			}, function() {
      	
 //      			$('.supernav').mouseleave( function() {
 //      				$('.navigate').stop().removeClass("slipnot");
 //      			});
 			
 // 		});
		
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
		  $(".textbox-1").toggleClass( "openbox-1" );
		});
		
		
		$(function() {
		var fixadent = $(".topnav"), pos = fixadent.offset();
		$(window).scroll(function() {
		if($(this).scrollTop() > (pos.top + 10) && fixadent.css('position') == 'absolute') { fixadent.addClass('fixed'); }
		else if($(this).scrollTop() <= pos.top && fixadent.hasClass('fixed')){ fixadent.removeClass('fixed'); }
		})
	});

 	$( window ).resize(function() {

		if ($(window).width() > 940) {

			var $menu	= $('nav#menu.mobile');
			$('body').prepend($menu);
			// $menu.removeClass()
			// $('nav#menu.mobile ul').removeClass()

		} else {

			var $menu	= $('nav#menu.mobile');
			$menu.addClass('fl mm-menu mm-horizontal mm-ismenu')
			$('nav#menu.mobile ul').addClass('mm-list mm-panel')
			$('body').prepend($menu);

		}

	});

	if ($(window).width() > 640) {

		// $('.supernav li.subinside').hover(function() {
  
  //  			$('.navigate').stop().addClass("slipnot");
			
		// 	}, function() {
  	
  // 			$('.navigate').stop().removeClass("slipnot");
			
		// });

			$('.supernav li.subinside ul, .supernav li.subinside').hover(function() {
      
  				$('.navigate').stop().addClass("slipnot");
  			
  			}, function() {
      	
  				$('.navigate').stop().removeClass("slipnot");
 			
	 		});
		
		$(function() {
			var fixadent = $(".topnav"), pos = fixadent.offset();
			$(window).scroll(function() {
			if($(this).scrollTop() > (pos.top + 10) && fixadent.css('position') == 'absolute') { fixadent.addClass('fixed'); }
			else if($(this).scrollTop() <= pos.top && fixadent.hasClass('fixed')){ fixadent.removeClass('fixed'); }
			})
		});
		 				
	}



	// Touch hover effect

	if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {

	    // $('.hover').click(function(e) {
	    //     e.preventDefault();
	    //     $(this).toggleClass('hover-effect');
	    // });

	    $('.topnav li:last-child, .topnav li:first-child').addClass('mobile');

	}






});



$(function() {

	// Jquery UI spinner

	$( ".spinner" ).spinner();
	$('.ui-spinner-up .ui-button-text').html('<span class="ui-icon ui-icon-triangle-1-n fa fa-angle-up"></span>');
	$('.ui-spinner-down .ui-button-text').html('<span class="ui-icon ui-icon-triangle-1-n fa fa-angle-down"></span>');
				


	// Jscrollpane ////////////////////////////////////////////////////////////
	// the element we want to apply the jScrollPane
	var $el					= $('.dropbox').jScrollPane({
		verticalGutter 	: -16
	}),
			
	// the extension functions and options 	
		extensionPlugin 	= {
			
			extPluginOpts	: {
				// speed for the fadeOut animation
				mouseLeaveFadeSpeed	: 500,
				// scrollbar fades out after hovertimeout_t milliseconds
				hovertimeout_t		: 1000,
				// if set to false, the scrollbar will be shown on mouseenter and hidden on mouseleave
				// if set to true, the same will happen, but the scrollbar will be also hidden on mouseenter after "hovertimeout_t" ms
				// also, it will be shown when we start to scroll and hidden when stopping
				useTimeout			: false,
				// the extension only applies for devices with width > deviceWidth
				deviceWidth			: 980
			},
			hovertimeout	: null, // timeout to hide the scrollbar
			isScrollbarHover: false,// true if the mouse is over the scrollbar
			elementtimeout	: null,	// avoids showing the scrollbar when moving from inside the element to outside, passing over the scrollbar
			isScrolling		: true,// true if scrolling
			addHoverFunc	: function() {
				
				// run only if the window has a width bigger than deviceWidth
				if( $(window).width() <= this.extPluginOpts.deviceWidth ) return false;
				
				var instance		= this;
				
				// functions to show / hide the scrollbar
				$.fn.jspmouseenter 	= $.fn.show;
				$.fn.jspmouseleave 	= $.fn.fadeOut;
				
				// hide the jScrollPane vertical bar
				var $vBar			= this.getContentPane().siblings('.jspVerticalBar').hide();
				
				/*
				 * mouseenter / mouseleave events on the main element
				 * also scrollstart / scrollstop - @James Padolsey : http://james.padolsey.com/javascript/special-scroll-events-for-jquery/
				 */
				$el.bind('mouseenter.jsp',function() {
					
					// show the scrollbar
					$vBar.stop( true, true ).jspmouseenter();
					
					if( !instance.extPluginOpts.useTimeout ) return false;
					
					// hide the scrollbar after hovertimeout_t ms
					clearTimeout( instance.hovertimeout );
					instance.hovertimeout 	= setTimeout(function() {
						// if scrolling at the moment don't hide it
						if( !instance.isScrolling )
							$vBar.stop( true, true ).jspmouseleave( instance.extPluginOpts.mouseLeaveFadeSpeed || 0 );
					}, instance.extPluginOpts.hovertimeout_t );
					
					
				}).bind('mouseleave.jsp',function() {
					
					// hide the scrollbar
					if( !instance.extPluginOpts.useTimeout )
						$vBar.stop( true, true ).jspmouseleave( instance.extPluginOpts.mouseLeaveFadeSpeed || 0 );
					else {
					clearTimeout( instance.elementtimeout );
					if( !instance.isScrolling )
							$vBar.stop( true, true ).jspmouseleave( instance.extPluginOpts.mouseLeaveFadeSpeed || 0 );
					}
					
				});
				
				if( this.extPluginOpts.useTimeout ) {
					
					$el.bind('scrollstart.jsp', function() {
					
						// when scrolling show the scrollbar
						clearTimeout( instance.hovertimeout );
						instance.isScrolling	= true;
						$vBar.stop( true, true ).jspmouseenter();
						
					}).bind('scrollstop.jsp', function() {
						
						// when stop scrolling hide the scrollbar (if not hovering it at the moment)
						clearTimeout( instance.hovertimeout );
						instance.isScrolling	= false;
						instance.hovertimeout 	= setTimeout(function() {
							if( !instance.isScrollbarHover )
								$vBar.stop( true, true ).jspmouseleave( instance.extPluginOpts.mouseLeaveFadeSpeed || 0 );
						}, instance.extPluginOpts.hovertimeout_t );
						
					});
					
					// wrap the scrollbar
					// we need this to be able to add the mouseenter / mouseleave events to the scrollbar
					var $vBarWrapper	= $('<div/>').css({
						position	: 'absolute',
						left		: $vBar.css('left'),
						top			: $vBar.css('top'),
						right		: $vBar.css('right'),
						bottom		: $vBar.css('bottom'),
						width		: $vBar.width(),
						height		: $vBar.height()
					}).bind('mouseenter.jsp',function() {
						
						clearTimeout( instance.hovertimeout );
						clearTimeout( instance.elementtimeout );
						
						instance.isScrollbarHover	= true;
						
						// show the scrollbar after 100 ms.
						// avoids showing the scrollbar when moving from inside the element to outside, passing over the scrollbar								
						instance.elementtimeout	= setTimeout(function() {
							$vBar.stop( true, true ).jspmouseenter();
						}, 100 );	
						
					}).bind('mouseleave.jsp',function() {
						
						// hide the scrollbar after hovertimeout_t
						clearTimeout( instance.hovertimeout );
						instance.isScrollbarHover	= false;
						instance.hovertimeout = setTimeout(function() {
							// if scrolling at the moment don't hide it
							if( !instance.isScrolling )
								$vBar.stop( true, true ).jspmouseleave( instance.extPluginOpts.mouseLeaveFadeSpeed || 0 );
						}, instance.extPluginOpts.hovertimeout_t );
						
					});
					
					$vBar.wrap( $vBarWrapper );
				
				}
			
			}
			
		},
		
		// the jScrollPane instance
		jspapi 			= $el.data('jsp');
		
	// extend the jScollPane by merging	
	$.extend( true, jspapi, extensionPlugin );
	jspapi.addHoverFunc();

	

});