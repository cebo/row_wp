<?php 

/* Template Name: Deals List

*/
 get_header(); ?>
 
 
 <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
 
 
	<div class="home-intro">
		
		
		<?php if(get_post_meta($post->ID, 'cebo_fullpic', true)) { ?>
		
		
		<div class="stretch"  style="background-image: url(<?php echo get_post_meta($post->ID, 'cebo_fullpic', true); ?>);"></div>
		
		<?php } elseif($imgsrc) { ?>
		
		
		<div class="stretch"  style="background-image: url(<?php echo $imgsrc; ?>);"></div>
		
		<?php } else { ?>
							
		<div class="stretch"  style="background-image: url(<?php bloginfo ('template_url'); ?>/images/watermark.jpg);"></div>
		
		
		<?php } ?>	
		
		
	</div>	
	
	<?php endwhile; endif; wp_reset_query(); ?>	
	
	
	<section class="contentarea">
						
		<div class="page-content">

			<h1>BED & BREAKFAST PACKAGE</h1>

			<p>Book Now and Enjoy an All Inclusive Daily Continental Breakfast at our Newly opened European Express Café district M.  <a href="#" target="_blank">View district M Breakfast Menu ></a></p>

			<p>Start Your day in NYC with a fantastic Breakfast Deal at the new district M. Your package includes Daily Continental Breakfast per person Included in Your Room Rate!<br>
			Choose One from each of the following: <strong>Pastries</strong>,  <strong>La Colombe Coffee or Hot Tea or Milk or Juice</strong>  or <strong>A whole Fruit</strong></p>

			<h3>Hours of Operations: </h3>

			<p> 
				Monday - Friday: 6:30 a.m. – 11:30 a.m., Saturday-Sunday: 7:00 a.m. – 12:00 p.m.<br>
				**Must be used daily towards Breakfast and has no cash value. Not valid with any other offers or discounts. The daily continental breakfast is applicable per day based on the number of persons on the reservation including children.
			</p>

			<div class="button-wrapper" style="margin: 20px 0;"><a class="button">Book Now</a></div>

			<div class="clear"></div>

		</div>

		<ul class="deal-boxes">

				<li class="deal">

					<div class="deal-photo" style="background-image: url(images/deals/deals-photo-2.jpg);"></div>

					<div class="deal-wrapper">
					
						<h1>Stay 5 Nights & Save 20% Off Your Entire Stay!</h1>
	
						<p>Et eum invenim eos prae provid eos aut occullabore laborum et, adit vollese quisciam eiciis dolupitibusa deseque simoluptate coribus ea voloreh endignisquos quiam quia que eum qui dolorercit.</p>
	
						<div class="button-wrapper" style="margin: 10px 0 0;"><a class="button">Book Now</a></div>

						<div class="wonder-vertical"></div>

					</div>

				</li>

				<li class="deal">

					<div class="deal-photo" style="background-image: url(images/deals/deals-photo-3.jpg);"></div>

					<div class="deal-wrapper">
					
						<h1>Stay 5 Nights & Save 20% Off Your Entire Stay!</h1>
	
						<p>Et eum invenim eos prae provid eos aut occullabore laborum et, adit vollese quisciam eiciis dolupitibusa deseque simoluptate coribus ea voloreh endignisquos quiam quia que eum qui dolorercit.</p>
	
						<div class="button-wrapper" style="margin: 10px 0 0;"><a class="button">Book Now</a></div>

						<div class="wonder-vertical"></div>

					</div>

				</li>

				<li class="deal">

					<div class="deal-photo" style="background-image: url(images/deals/deals-photo-4.jpg);"></div>

					<div class="deal-wrapper">
					
						<h1>Stay 5 Nights & Save 20% Off Your Entire Stay!</h1>
	
						<p>Et eum invenim eos prae provid eos aut occullabore laborum et, adit vollese quisciam eiciis dolupitibusa deseque simoluptate coribus ea voloreh endignisquos quiam quia que eum qui dolorercit.</p>
	
						<div class="button-wrapper" style="margin: 10px 0 0;"><a class="button">Book Now</a></div>

						<div class="wonder-vertical"></div>

					</div>

				</li>

				<li class="deal">

					<div class="deal-photo" style="background-image: url(images/deals/deals-photo-5.jpg);"></div>

					<div class="deal-wrapper">
					
						<h1>Stay 5 Nights & Save 20% Off Your Entire Stay!</h1>
	
						<p>Et eum invenim eos prae provid eos aut occullabore laborum et, adit vollese quisciam eiciis dolupitibusa deseque simoluptate coribus ea voloreh endignisquos quiam quia que eum qui dolorercit.</p>
	
						<div class="button-wrapper" style="margin: 10px 0 0;"><a class="button">Book Now</a></div>

						<div class="wonder-vertical"></div>

					</div>

				</li>

				<li class="deal">

					<div class="deal-photo" style="background-image: url(images/deals/deals-photo-6.jpg);"></div>

					<div class="deal-wrapper">
					
						<h1>Stay 5 Nights & Save 20% Off Your Entire Stay!</h1>
	
						<p>Et eum invenim eos prae provid eos aut occullabore laborum et, adit vollese quisciam eiciis dolupitibusa deseque simoluptate coribus ea voloreh endignisquos quiam quia que eum qui dolorercit.</p>
	
						<div class="button-wrapper" style="margin: 10px 0 0;"><a class="button">Book Now</a></div>

						<div class="wonder-vertical"></div>

					</div>

				</li>

				<li class="deal">

					<div class="deal-photo" style="background-image: url(images/deals/deals-photo-7.jpg);"></div>

					<div class="deal-wrapper">
					
						<h1>Stay 5 Nights & Save 20% Off Your Entire Stay!</h1>
	
						<p>Et eum invenim eos prae provid eos aut occullabore laborum et, adit vollese quisciam eiciis dolupitibusa deseque simoluptate coribus ea voloreh endignisquos quiam quia que eum qui dolorercit.</p>
	
						<div class="button-wrapper" style="margin: 10px 0 0;"><a class="button">Book Now</a></div>

						<div class="wonder-vertical"></div>

					</div>

				</li>

			</ul>
		
		
		
		
		<div class="clear"></div>
		
	<?php get_footer(); ?>