<?php
/**
 * The template for displaying the footer.
 *
**/
?>

	
<div class="footer">

	<section class="navigate mobile">
		
		<ul class="supernav">
			
			<li>
				<a href="<?php bloginfo ('url'); ?>/?page_id=6"><span class="hotel"></span><p>Hotel</p></a>
			</li>
			
			<li>
				<a href="<?php echo get_option('cebo_genbooklink'); ?>" target="_blank"><span class="reserve"></span><p>Reservations</p></a>
			</li>

			<li>
				<a href="<?php bloginfo ('url'); ?>/?page_id=86"><span class="rooms"></span><p>Rooms</p></a>
			</li>
			
			<li>
				<a href="<?php bloginfo ('url'); ?>/?page_id=89"><span class="gallery"></span><p>Gallery</p></a>
			</li>
			
			<li>
				<a href="<?php bloginfo ('url'); ?>/?page_id=92"><span class="deals"></span><p>Deals</p></a>
			</li>
			
			<li>
				<a href="<?php bloginfo ('url'); ?>/?page_id=54"><span class="eats"></span><p>Eat & Drink</p></a>
			</li>
			
			<li>
				<a href="<?php bloginfo ('url'); ?>/?page_id=148"><span class="explore"></span><p>Explore NYC</p></a>				
			</li>
			
			<li>
				<a href="<?php bloginfo ('url'); ?>/contact"><span class="contact"></span><p>Contact</p></a>
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
					
					
					
					
					<?php wp_nav_menu( array( 'menu' => 'Footer Navigation' ,  'items_wrap' => '%3$s', 'container' => '') ); ?>
					
										</ul>
				
				</div>
				
				<div class="tier-two">
				
					<ul>
						<li>Reservations<span>888.352.3650</span></li>
						<li>EMAIL<span><a href="mailto:info@rownyc.com">info@rownyc.com</a></span></li>
						<li class="widest">A Times Square Hotel<span>700 8th Avenue, New York, NY 10036</span></li>
					</ul>
				
				</div>
			
			
			</div>
			
			
			
			
	</section>

</div>


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