<?php
/**
 * The template for displaying the footer.
 *
**/
?>

		<section class="botsect"> 
			
			<div class="container">
				
				<div class="social">
					<p><?php _e('Follow us & Stay Connected','row-blog-theme-text'); ?></p>
				
					<div class="sosocial">
						
						<a href="#"><i class="fa fa-envelope"></i></a>
						<a href="http://www.facebook.com/RowNYC" target="_blank"><i class="fa fa-facebook"></i></a>
						<a href="http://www.twitter.com/rownyc" target="_blank"><i class="fa fa-twitter"></i></a>
						<a href="www.pinterest.com/rownyc" target="_blank"><i class="fa fa-pinterest"></i></a>
						<a href="http://www.instagram.com/rownyc" target="_blank"><i class="fa fa-instagram"></i></a>
						<a href="http://www.youtube.com/RowNYC" target="_blank"><i class="fa fa-youtube"></i></a>
					
					</div>
					
				</div>
				
				
				<div class="underline">
				
					<ul>

						<?php wp_nav_menu( array( icl_object_id(31, 'Blog Footer Navigation'),  'theme_location' => 'blog-footer', 'items_wrap' => '%3$s', 'container' => '') ); ?>

					</ul>
					
				</div>
				<br>
				<br>
				<a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_url'); ?>/bloginfo/images/logo.png" alt="Row New York City" /></a>
				<br>
				<br>
				<p class="copyright"><?php _e('All Materials @ 2014 Row NYC Hotel','row-blog-theme-text'); ?></p>
			
			</div>
	
		</section>		
		
	</div>
	
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
	
	 <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/bloginfo/js/instafeed.min.js"></script>
	 <script type="text/javascript">
	    var feed = new Instafeed({
	        get: 'tagged',
	        limit: 6,
	        tagName: 'MoreNYthanNY',
	        resolution: 'standard_resolution',
	        clientId: 'ff29ecc8eea64dc19555c89f8652a2b8'
	    });
	    feed.run();
	</script>
	
	<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.16/jquery-ui.min.js?ver=3.5.2'></script>
	<script type="text/javascript">
		$(document).ready(function(){
		    $("#arrival_date").datepicker({
		        numberOfMonths: 1,
		        minDate: 0,
		        altField  : '#arv',
    			altFormat : 'yy-mm-dd',
    			format    : 'mm-dd-yy',
    			//minDate: new Date(2014, 00, 15),
		        onSelect: function(selected) {
		          $("#departure_date").datepicker("option","minDate", selected)
		        }
		    });
		    $("#departure_date").datepicker({ 
		        numberOfMonths: 1,
		        minDate: 0,
		        altField  : '#dep',
    			altFormat : 'yy-mm-dd',
    			format    : 'mm-dd-yy',
    			//minDate: new Date(2014, 00, 15),
		        onSelect: function(selected) {
		           $("#arrival_date").datepicker("option","maxDate", selected)
		        }
		    });
		    
		    
		    $('input.date').datepicker({
    beforeShow: function(input, inst)
    {
        inst.dpDiv.css({marginTop: -input.offsetHeight + 'px', marginLeft: input.offsetWidth + 'px'});
    }
}); 


	
			jQuery('form a.button').click(function(e) {
				e.preventDefault();
				_gaq.push(['_link', createURL() ]);
				return false;
			});




		});
	</script>



	<script src="<?php bloginfo('template_url'); ?>/bloginfo/js/responsiveslides.min.js"></script>
	<script>
  $(function() {
    // Slideshow 4
      $("#slider4").responsiveSlides({
        auto: false,
        pager: false,
        nav: true,
        speed: 500,
        namespace: "callbacks",
       });
  });
</script>


arketing Tag -->
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
</body>
</html>