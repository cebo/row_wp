<?php 

/* Template Name: Concierge

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
	
	<section class="contentarea">
						
		<div class="page-content">

			<h1>Concierge</h1>

			<h3>Your stay starts now. Our experienced concierge team is here to make your time at the Row unforgettable. Contact us day or night so we may be of service.</h3>

			<div>
				<p><span>Concierge: <span>555.555.555</span></span> <span>Email: <span>concierge@rowhotel.com</span></span></p>
			</div>

			<div class="concierge-box box-style-1">

				<div class="left">

					<div class="wideover overlay">
					
						<h1>Restaurant Reservations</h1>
					
					</div>
					
					<div class="concierge-box-photo"  style="background-image: url(images/concierge/concierge-photo-1.jpg);"></div>

				</div>

				<div class="right">
					
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut laboris nisi ut aliquip ex ea commodo consequatqsed.</p>
					<a href="#">MORE ></a>

				</div>
				
			</div>

			<div class="concierge-box box-style-2">

				<div class="left">

					<div class="wideover overlay">
					
						<h1>Salon Appointments</h1>
					
					</div>
					
					<div class="concierge-box-photo"  style="background-image: url(images/concierge/concierge-photo-1.jpg);"></div>

				</div>

				<div class="right">
					
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut laboris nisi ut aliquip ex ea commodo consequatqsed.</p>
					<a href="#">MORE ></a>

				</div>
				
			</div>

			<div class="concierge-box box-style-3">

				<div class="left">

					<div class="wideover overlay">
					
						<h1>Speorting Event Tickets</h1>
						
					</div>
					
					<div class="concierge-box-photo"  style="background-image: url(images/concierge/concierge-photo-1.jpg);"></div>

				</div>

				<div class="right">
					
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut laboris nisi ut aliquip ex ea commodo consequatqsed.</p>
					<a href="#">MORE ></a>

				</div>
				
			</div>

			<div class="concierge-box box-style-1">

				<div class="left">

					<div class="wideover overlay">
					
						<h1>Show Tickets</h1>
						
					</div>
					
					<div class="concierge-box-photo"  style="background-image: url(images/concierge/concierge-photo-1.jpg);"></div>

				</div>

				<div class="right">
					
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut laboris nisi ut aliquip ex ea commodo consequatqsed.</p>
					<a href="#">MORE ></a>

				</div>
				
			</div>

			<div class="concierge-box box-style-2">

				<div class="left">

					<div class="wideover overlay">
					
						<h1>Sight Seeing Tours</h1>
						
					</div>
					
					<div class="concierge-box-photo"  style="background-image: url(images/concierge/concierge-photo-1.jpg);"></div>

				</div>

				<div class="right">
					
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut laboris nisi ut aliquip ex ea commodo consequatqsed.</p>
					<a href="#">MORE ></a>

				</div>
				
			</div>

			<div class="concierge-box box-style-4">

				<div class="left">

					<div class="wideover overlay">
					
						<h1>Transportation</h1>
						
					</div>
					
					<div class="concierge-box-photo"  style="background-image: url(images/concierge/concierge-photo-1.jpg);"></div>

				</div>

				<div class="right">
					
					<p>Need some wheels? You can either use our complimentary shuttle service or rent your own.</p>

					<p><strong>Shuttle Service to The Trip</strong><br />
					Departs every half hour<br/>
					Runs from 11 am - 8 pm</p>

					<p><strong>Hertz Rental Car Counter</strong><br />
					Open 8 am - 3 pm<br/>
					Phone: 702.942.7777</p>
					<a href="#">MORE ></a>

				</div>
				
			</div>

		</div>
		
		
		
		
		<div class="clear"></div>
		
		
		<!-- begin fifth level -->
		
		<?php endwhile; endif; wp_reset_query(); ?>	
		
		
		<?php get_footer(); ?>