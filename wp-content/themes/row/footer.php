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
			
			<!--<li>
				<a href="#"><span class="blog"></span><p>Apple Blog</p></a>
			</li>-->

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
			
				<!-- save the children start 
				<div class="tier-two"><a target="_blank" href="https://secure.savethechildren.org/site/c.8rKLIXMGIpI4E/b.6239401/k.C01C/Global_Action_Fund/apps/ka/sd/donor.asp?msource=cpkhhgaf1214&amp;utm_source=Highgate2014&amp;utm_medium=link&amp;utm_campaign=highgatehotels1214"><img class="left" width="190px;" src="http://rownyc.com/wp-content/uploads/2014/12/row-save.jpg"></a>
				  <p style="color: #fff; background-color: #444; padding-top: 10px; font-size: 12px;" class="save">Please join the Row NYC in supporting Save the Children charity during the holiday season. 
				  <br>Any donation would be great appreciated.  Please click <a target="_blank" style="color: #e51a9b;" href="https://secure.savethechildren.org/site/c.8rKLIXMGIpI4E/b.6239401/k.C01C/Global_Action_Fund/apps/ka/sd/donor.asp?msource=cpkhhgaf1214&amp;utm_source=Highgate2014&amp;utm_medium=link&amp;utm_campaign=highgatehotels1214">here</a> to be directly linked to the charity’s website for your generous offer.</p>
				</div>
				end save the children -->
			
			</div>
			
			
			
			
	</section>

</div>

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
<script type="text/javascript">
	 $(window).load(function(){	
	
	$('#cformr').submit(function(){

		var action = $(this).attr('action');

		$("#messager").slideUp(750,function() {
		$('#messager').hide();

 		$('#submitr')
			.after('<img src="images/nivo-preloader.gif" class="contact-loader" />')
			.attr('disabled','disabled');

		$.post(action, {
			namer: $('#namer').val(),
			namers: $('#namers').val(),
			emailr: $('#emailr').val(),
			subjectr: $('#subjectr').val(),
			emailerr: $('#myemailr').val(),
			commentr: $('#commentr').val()
		},
			function(data){
				document.getElementById('messager').innerHTML = data;
				$('#messager').slideDown('slow');
				$('#cformr img.contact-loader').fadeOut('slow',function(){$(this).remove()});
				$('#submitr').removeAttr('disabled');
				if(data.match('success') != null) $('#cformr').slideUp('slow');
			}
		);

		});

		return false;

	});
	
	});
	</script>


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


$(function() {

    var $window = $(window);
    var lastScrollTop = $window.scrollTop();
    var wasScrollingDown = true;

    var $sidebar = $("#navigate");
    if ($sidebar.length > 0) {

        var initialSidebarTop = $sidebar.position().top;

        $window.scroll(function(event) {

            var windowHeight = $window.height();
            var sidebarHeight = $sidebar.outerHeight();

            var scrollTop = $window.scrollTop();
            var scrollBottom = scrollTop + windowHeight;

            var sidebarTop = $sidebar.position().top;
            var sidebarBottom = sidebarTop + sidebarHeight;

            var heightDelta = Math.abs(windowHeight - sidebarHeight);
            var scrollDelta = lastScrollTop - scrollTop;

            var isScrollingDown = (scrollTop > lastScrollTop);
            var isWindowLarger = (windowHeight > sidebarHeight);

            if ((isWindowLarger && scrollTop > initialSidebarTop) || (!isWindowLarger && scrollTop > initialSidebarTop + heightDelta)) {
                $sidebar.addClass('fixed');
            } else if (!isScrollingDown && scrollTop <= initialSidebarTop) {
                $sidebar.removeClass('fixed');
            }

            var dragBottomDown = (sidebarBottom <= scrollBottom && isScrollingDown);
            var dragTopUp = (sidebarTop >= scrollTop && !isScrollingDown);

            if (dragBottomDown) {
                if (isWindowLarger) {
                    $sidebar.css('top', 0);
                } else {
                    $sidebar.css('top', -heightDelta);
                }
            } else if (dragTopUp) {
                $sidebar.css('top', 0);
            } else if ($sidebar.hasClass('fixed')) {
                var currentTop = parseInt($sidebar.css('top'), 10);
                
                var minTop = -heightDelta;
                var scrolledTop = currentTop + scrollDelta;
                
                var isPageAtBottom = (scrollTop + windowHeight >= $(document).height());
                var newTop = (isPageAtBottom) ? minTop : scrolledTop;
                
                $sidebar.css('top', newTop);
            }

            lastScrollTop = scrollTop;
            wasScrollingDown = isScrollingDown;
        });
    }
});


</script> 
</body>
</html>