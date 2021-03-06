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

			<?php if(function_exists('icl_object_id') && ICL_LANGUAGE_CODE !='en') {} else { ?>
					
				<div class="tier-one">
				
					<ul>							
						<?php wp_nav_menu( array( icl_object_id(13, 'Footer Navigation'),  'theme_location' => 'footer', 'items_wrap' => '%3$s', 'container' => '') ); ?>					
					</ul>
				
				</div>

			<?php } ?>
			
			<div class="tier-two">

				<ul>
					<li><?php _e('Reservations','row-theme-text'); ?><span><?php _e('888.352.3650','row-theme-text'); ?></span></li>
					<!--<li>EMAIL<span><a href="mailto:info@rownyc.com">info@rownyc.com</a></span></li>-->
					<li class="widest"><?php _e('A Times Square Hotel','row-theme-text'); ?><span><?php _e('700 8th Avenue, New York, NY 10036','row-theme-text'); ?></span></li>
				</ul>
			
			</div>

			<!-- CONDE NAST TRAVELER READER'S CHOICE AWARDS 2015  -->
			
			<div class="tier-two conde conde1">
				<div class="conde-block">
					<a href="http://www.cntraveler.com/galleries/2014-11-19/top-25-hotels-in-new-york-city-readers-choice-awards-2014/3" target="_blank"><img src="<?php echo site_url(); ?>/wp-content/uploads/2015/11/NYC_FINALIST1.png"></a>
					
					<div>
						<h2 class="h1"><?php _e('ROW NYC','row-footer-text'); ?></h2>
						<h2 class="h2"> <?php _e("CONDE NAST TRAVELER READER'S <br> CHOICE AWARDS 2015",'row-footer-text'); ?></h2>
						<p><?php _e('Conde Nast Traveler readers have selected Row NYC as one of the top 35 hotels in New York City. On behalf of the entire Row NYC team, we thank you for your support!','row-footer-text'); ?></p>
					</div>
				</div>
			</div>
			<!-- CONDE NAST TRAVELER READER'S CHOICE AWARDS 2015  -->

			<!-- CONDE NAST TRAVELER READER'S CHOICE AWARDS 2016  -->
			
			<div class="tier-two conde conde2">
				<div class="conde-block">
					<a href="http://www.cntraveler.com/rca/2016" target="_blank"><img src="<?php echo site_url(); ?>/wp-content/uploads/2016/05/Conde-Nast-Traveler22.png"></a>
					
					<div>
						<h2 class="h1"><?php _e('ROW NYC','row-footer-text'); ?></h2>
						<h2 class="h2"><?php _e("NOMINATED FOR THE <br> 2016 READER'S CHOICE AWARDS",'row-footer-text'); ?></h2>
					</div>
				</div>
			</div>
			<!-- CONDE NAST TRAVELER READER'S CHOICE AWARDS 2016  -->


			<!-- ZAGAT  -->
			
			<div class="tier-two conde conde3">
				<div class="conde-block">
					<a target="_blank" href="https://www.zagat.com/b/new-york-city/city-kitchen-times-square-gets-much-needed-gourmet-food-court" alt="">
						<img src="<?php echo site_url(); ?>/wp-content/uploads/2016/05/54f942eaf30bf_-_zagat-logo.gif">
					</a>
					
					<div>
						<h2 class="h1"><?php _e('CITY KITCHEN','row-footer-text'); ?></h2>
						<h2 class="h2"><?php _e('RATED AS THE BEST FOOD HALL IN NYC BY ZAGAT','row-footer-text'); ?></h2>
					</div>
				</div>
			</div>
			<!-- ZAGAT  -->

			<div class="tier-three">
				<div class="save-the-children">
					
						<a href="https://goo.gl/OJexpZ" target="_blank"><img class="left" width="270px" src="http://www.southernmostbeachresort.com/wp-content/themes/southernmost/images/save-the-children-logo-white.png"></a>
						
						<p class="save">ROW NYC is a proud supporter of Save the Children, internationally recognized for giving children a healthy start, the opportunity to learn and protection from harm. To donate and make a difference in a child’s life, please click on the link below. 100% of your donation benefits Save the Children. Thank you for your support.  </p>

						<a class="button" target="_blank" href="https://goo.gl/OJexpZ">donate today</a>

				</div>
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
		    pl.src = 'https://beacon.sojern.com/pixel/p/6042?' + paramsArr.join('&');
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
		    pl.src = 'https://beacon.sojern.com/pixel/p/6043?' + paramsArr.join('&');
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

<?php wp_footer(); ?>

<!-- DA email subscription -->
	<script type="text/javascript" src="http://cdn.jsdelivr.net/jquery.validation/1.14.0/jquery.validate.min.js"></script>
	<script type="text/javascript" src="http://cdn.jsdelivr.net/jquery.validation/1.14.0/additional-methods.min.js"></script>
	<script type="text/javascript">

		$(document).ready(function () {
			$('#eclubCheck').validate(
			{
				rules: {
					// The e-mail address field (aptly ID'd as "email_address")
					// is required to have content and must also be a valid e-mail.
					FIRSTNAME: "required",
					LASTNAME: "required",
					email: {
						required: true,
						email: true
					}
				},
				messages: {

					FIRSTNAME: "Please specify your first name",
					LASTNAME: "Please specify your last name",
					email: {
						required: "We need your email address to contact you",
						email: "Your email address must be in the format of name@domain.com"
					}

				},
				submitHandler: function(form) { // <- pass 'form' argument in
					$("#form_submit").attr("disabled", true);
					$("#form_submit").attr("value", "Submitting");
					return true;
				}
			})
		});
	</script>

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

			    $(".closena").click(function(){
 				
				$(this).parent().fadeOut(100);
                         });


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

<script>
$(document).ready(function () {
  setTimeout( function(){ $('.flex-control-nav, .flex-direction-nav').css("visibility", "visible"); }, 4000 );
});
</script>
</body>
</html>