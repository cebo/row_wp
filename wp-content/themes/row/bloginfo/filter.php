<section class="topsect"> 
			
			<div class="container">
			
				<div class="leftsort">
					<div class="sorter">
						<i class="fa fa-angle-down"></i>
						<span>Sort By:</span>
						<fieldset>
							<input type='radio' name='datee' id='dateed' value='Create multiple businesses ' /> 
							<label for='dateed'>Date</label>
						</fieldset>
						<fieldset>
							<input type='radio' name='loved' id='loved' value='Create multiple businesses ' /> 
							<label for='loved'>Most Loved</label>
						</fieldset>
						<fieldset>
							<select name="catdrop">
								<option value="Cat Name">Category</option>
							</select>
						</fieldset>
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
						
						<a href="#"><i class="fa fa-envelope"></i></a>
						<a href="#"><i class="fa fa-facebook"></i></a>
						<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-pinterest"></i></a>
						<a href="#"><i class="fa fa-instagram"></i></a>
						<a href="#"><i class="fa fa-youtube"></i></a>
					
					</div>
				</div>
				
				<div class="reservations">
					<div class="reservationform">
					<form action="https://secure3.hilton.com/en_US/HI/reservation/book.htm" target="_blank">
						<input type="hidden" name="ctyhocn" value="MIAMBHF">
						<span class="calsec">
						
						<p>From</p>
							<input type="text"  id="arrival_date" placeholder="" class="calendarsection" />
							<input type="hidden" name="arrival" id="arv">
						
							
						</span>
						
						<span class="calsec">
						<p>To</p>
							<input type="text" id="departure_date" placeholder="" class="calendarsection" />
							<input name="departure" type="hidden" id="dep">
							
							
							
						</span>
						
						
						<select id="adults" name="adults[]">
						 	<option value="1">1 Guest</option>
		                    <option value="2">2</option>
		                    <option value="3">3</option>
		                    <option value="4">4</option>                                
						</select>

						<div class="clear"></div>
						
						<button class="button" type="submit">See Availability</button>
						
					
					</form>
				</div>	
				
				
				
				</div>
				
				
			</div>
	
		</section>