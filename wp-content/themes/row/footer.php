<?php
/**
 * The template for displaying the footer.
 *
**/
?>

	
<div class="footer">
			
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



<?php wp_footer(); ?>
	
		
</body>
</html>