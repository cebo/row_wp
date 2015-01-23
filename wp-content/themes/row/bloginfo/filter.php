<section class="topsect"> 

	<a class="logo" href="<?php bloginfo('url'); ?>">
		<img src="<?php bloginfo ('template_url'); ?>/bloginfo/images/logo.png" alt="Row NYC" />
		<div>A Times Square Hotel</div>
	</a>

	<div class="back-to-hotel"><a href="<?php bloginfo('url'); ?>"><i class="fa fa-angle-left"></i> Back to Hotel</a></div>
			
		<div class="container">

			<div class="leftsort">
				<div class="sorter">
				
				
					<span>Sort By:</span>
					
					
						
				<form action="/blog/" method="post">
				<fieldset>
				<input type="radio" name="sales" value="sales" <?php if (isset($_POST['sales']) && $_POST['sales'] == 'saleers') { ?><?php } else { ?>checked='checked'<?php } ?> onclick="this.form.submit();" />
				<label for='dateed'>Date</label>
				</fieldset>
				<fieldset>
				<input type="radio" name="sales" value="saleers" <?php if (isset($_POST['sales']) && $_POST['sales'] == 'saleers'): ?>checked='checked'<?php endif; ?> onclick="this.form.submit();" />
				<label for='loved'>Most Loved</label>
					</fieldset>
				
				</form>

					
					<script type="text/javascript">
					var dropdown = document.getElementById("filterthis");
					function onCatChange() {
						if ( dropdown.options[dropdown.selectedIndex].value > '' ) {
							location.href = "<?php echo get_option('home'); ?>/blog";
						}
					}
				dropdown.onchange = onCatChange;
				</script>
				

				
				
					<!--<fieldset>
						<?php //click_taxonomy_dropdown( 'category' ); ?>
						 <script type="text/javascript">
							var dropdown = document.getElementById("cat");
							function onCatChange() {
								if ( dropdown.options[dropdown.selectedIndex].value > '' ) {
									location.href = "<?php echo get_option('home'); ?>/category/"+dropdown.options[dropdown.selectedIndex].value;
								}
							}
						dropdown.onchange = onCatChange;
						</script> 
					<i class="fa fa-angle-down"></i>
					</fieldset> -->	

					<div class="category-dropdown">

						<a id="cat-trigger" class="close">Category<i class="fa fa-angle-down"></i></a>	
							
					</div>

					<div class="clear"></div>
				</div>
			</div>
			
			<div class="rightsort">
				<form action="<?php bloginfo('url'); ?>/" method="get" style="position: relative;">
				    <fieldset>
				        <input type="text" name="s" id="search" placeholder="I am searching now" value="<?php the_search_query(); ?>"/>
						<i class="fa fa-search"></i>
				    </fieldset>
				</form>
				
				<div class="sosocial">
					
					<a href="mailto:info@rownyc.com"><i class="fa fa-envelope"></i></a>
					<a href="<?php echo get_option('cebo_facebook'); ?>" target="_blank"><i class="fa fa-facebook"></i></a>
			<a href="<?php echo get_option('cebo_twitter'); ?>" target="_blank"><i class="fa fa-twitter"></i></a>
			<a href="<?php echo get_option('cebo_pinterest'); ?>" target="_blank"><i class="fa fa-pinterest"></i></a>
			<a href="<?php echo get_option('cebo_instagram'); ?>" target="_blank"><i class="fa fa-instagram"></i></a>
			<a href="<?php echo get_option('cebo_youtube'); ?>" target="_blank"><i class="fa fa-youtube"></i></a>
				
				</div>
			</div>
			

			<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
			
			<script type="text/javascript">
				$( document ).ready(function() {
    				$( "#cat-trigger" ).click(function() {
						$( ".category-container" ).slideToggle("slow");
						$( ".topsect .logo" ).toggleClass('open-logo', "slow", "swing");
						$( ".topsect" ).toggleClass('open-body', "slow", "swing");
					});
				});
			</script>


			<div class="category-container">
					
					<div class="category-title">
						<p>filter by categories</p>
					</div>

			        <?php

						echo '<div class="category-list">';
							echo '<ul>';

								$cats = get_categories();
					            $custom = 0;

				            foreach ($cats as $cat) {

				            	$category_link = get_category_link($cat->cat_ID);
				            	$cat_url = esc_url( $category_link );

				                if ($custom % 3 == 0 && $custom != 0) {
				                		echo '</ul>';
				                	echo '</div>';
				                	echo '<div class="category-list">';
				                		echo '<ul>';
					                   		echo "<li><a href=".$cat_url.">".$cat->name." (".$cat->count.")"."</a></li>";
					                   	
				                } else {

				                    echo "<li><a href=".$cat_url.">".$cat->name." (".$cat->count.")"."</a></li>";

				                } $custom++; 

				            } 
			                	
			            echo '</div>'; 
			        ?>

			</div>

			<!-- <div class="reservations">
				<div class="reservationform">
				<form action="<?php echo get_option('cebo_genbooklink'); ?>/search?"  method="get" target="_blank">

					<span class="calsec">
					
					<p>From</p>
						<input type="text"  id="arrival_date" placeholder="" class="calendarsection" />
						<input type="hidden" name="arrival_date" id="arv">
					
						
					</span>
					
					<span class="calsec">
					<p>To</p>
						<input type="text" id="departure_date" placeholder="" class="calendarsection" />
						<input name="departure_date" type="hidden" id="dep">
						
						
						
					</span>
					
					<span class="calsec shortercal">
					<p>Guests</p>
					<select id="adults" name="adults[]">
					 	<option value="1">1</option>
	                    <option value="2">2</option>
	                    <option value="3">3</option>
	                    <option value="4">4</option>                                
					</select>
					</span>

					<div class="clear"></div>
					
						<a href="#" class="button"><?php _e('Book A Room','row-theme-text'); ?></a>
					
				
				</form>
			</div>	
			
			
			
			</div>-->
			
			
		</div>

	</section>