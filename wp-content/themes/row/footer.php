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
					<li><a href="#"><i class="fa fa-facebook"></i></a></li>
					<li><a href="#"><i class="fa fa-twitter"></i></a></li>
					<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
					<li><a href="#"><i class="fa fa-instagram"></i></a></li>
					<li><a href="#"><i class="fa fa-youtube"></i></a></li>
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
						<li>EMAIL<span><a href="mailto:info@rowhotel.com">info@rowhotel.com</a></span></li>
						<li class="widest">A Times Square Hotel<span>700 8th Avenue, New York, NY 10036</span></li>
					</ul>
				
				</div>
			
			
			</div>
			
			
			
			
	</section>

</div>

<?php wp_footer(); ?>

	



</body>
</html>