<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jqueryui/1/jquery-ui.min.js'></script>

<script type="text/javascript">
	$(document).ready(function(){

	// DATEPICKER: CLOSE BUTTON

	$('.close-dp').click(function() {
		$(this).parent().removeClass('datepicker-show');
	});


	// DATEPICKER: WHEN ARRIVAL/DEPARTURE INPUT IS CLICKED

	$('#arrival_date').click(function() {

		$('.datepicker-arrival').addClass('datepicker-show');
		$('.datepicker-departure').removeClass('datepicker-show');

	});

	$('#departure_date').click(function() {

		$('.datepicker-departure').addClass('datepicker-show');
		$('.datepicker-arrival').removeClass('datepicker-show');

	});



	// DATEPICKER: FUNCTION
	
	$.datepicker._defaults.dateFormat = 'yy-mm-dd';


	// * set input dates

	var today = new Date(),
		tomorrow = new Date();

	tomorrow.setDate( tomorrow.getDate() + 1 );

	$('#arrival_date').val($.datepicker.formatDate('yy-mm-dd', today));
	$('#departure_date').val($.datepicker.formatDate('yy-mm-dd', tomorrow));

	$('#arrival_date_mobile').val($.datepicker.formatDate('yy-mm-dd', today));
	$('#departure_date_mobile').val($.datepicker.formatDate('yy-mm-dd', tomorrow));


	// * datepicker for the arrival input
		
	$('.datepicker-arrival').datepicker({
		minDate: new Date(),
		dayNamesShort: [ "Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday" ],
	    closeText: 'Close',
	    // onClose: removeAria

		onSelect: function( selectedDate ) {

			// * variables
			var $arrival = $('.datepicker-arrival'),
				$departure = $('.datepicker-departure'),
				arrivalDate = $arrival.datepicker('getDate'),
				departureDate = $departure.datepicker('getDate');

			// * remove arrival datepicker-show class first
			$arrival.removeClass('datepicker-show');

			if ( $arrival.hasClass('turnaround') ) {

				// * check if hasClass turnaround
				// * logic: to tell if a user went back to this input
				// * because his/her departure date is lower than or equal to his arrival date

				$arrival.removeClass('turnaround');
			} else if ( $arrival.hasClass('first-time') ) {

				// * check elseif hasClass first-time
				// * logic: to tell if a user adds an input for the first time

				$arrival.removeClass('first-time');
				$departure.addClass('datepicker-show');
				activate_dayTripper2(); //add accessible to departure calendar
			} else {
				// do nothing says Jerome
			}

			// * check if arrival date is higher than or equal to departure date
			if ( arrivalDate.getTime() >= departureDate.getTime() ) {

				// * open up datepicker-departure
				$departure.addClass('datepicker-show');
				activate_dayTripper2(); //add accessible to departure calendar

				// * format arrivalDate and use it to update #departure_date input
				// * add 1 to arrivalDate: prevents user to check out on the same day
				arrivalDate.setDate( arrivalDate.getDate() + 1 );
				var new_departureDate = $.datepicker.formatDate( 'yy-mm-dd', arrivalDate );

				// * set these new values into their respective inputs
				$('#arrival_date').val( selectedDate );
				$('#departure_date').val( new_departureDate );

				$arrival.addClass('turnaround');

			} else {

				// * just update this input...
				$('#arrival_date').val( selectedDate );

			}


			// * update all datepickers dp-highlight class
			$('.datepicker-arrival, .datepicker-departure, .datepicker-mobile').datepicker( "option", "beforeShowDay", function( date ) {
				var date1 = $.datepicker.parseDate($.datepicker._defaults.dateFormat, $("#arrival_date").val());
				var date2 = $.datepicker.parseDate($.datepicker._defaults.dateFormat, $("#departure_date").val());
				return [true, date1 && ((date.getTime() == date1.getTime()) || (date2 && date >= date1 && date <= date2)) ? "dp-highlight" : ""];
			});

			// * Set the earliest available departure date to be the day after the arrival date
			var theDate = new Date($(this).datepicker('getDate'));
			theDate.setDate(theDate.getDate() + 1);
			$(".datepicker-departure").datepicker("option", "minDate", theDate.getFullYear()+"-"+(theDate.getMonth()+1)+"-"+theDate.getDate());

		}
	});


	// * datepicker for the departure input

	$('.datepicker-departure').datepicker({
		minDate: 1,

		onSelect: function( selectedDate ) {

			// * variables
			var $arrival = $('.datepicker-arrival'),
				$departure = $('.datepicker-departure'),
				arrivalDate = $arrival.datepicker('getDate'),
				departureDate = $departure.datepicker('getDate');

			// * remove departure datepicker-show class first
			$departure.removeClass('datepicker-show');

			// * check if arrival date is higher than or equal to departure date
			// * if yes, user will have to input arrival date again
			if ( arrivalDate.getTime() >= departureDate.getTime() ) {

				// * open up datepicker-arrival
				$arrival.addClass('datepicker-show');
				activate_dayTripper(); // add accessible to arrival calendar

				// * format departureDate and use it to update #arrival_date input
				// * minus 1 to departureDate: prevents user to check in or check out on the same day
				departureDate.setDate( departureDate.getDate() - 1 );
				var new_arrivalDate = $.datepicker.formatDate( 'yy-mm-dd', departureDate );


				// * set these new values into their respective inputs
				$('#departure_date').val( selectedDate );
				$('#arrival_date').val( new_arrivalDate );

			} else {

				// * just update this input...
				$('#departure_date').val( selectedDate );

			}


			// * update all datepickers dp-highlight class
			$('.datepicker-arrival, .datepicker-departure, .datepicker-mobile').datepicker( "option", "beforeShowDay", function( date ) {
				var date1 = $.datepicker.parseDate($.datepicker._defaults.dateFormat, $("#arrival_date").val());
				var date2 = $.datepicker.parseDate($.datepicker._defaults.dateFormat, $("#departure_date").val());
				return [true, date1 && ((date.getTime() == date1.getTime()) || (date2 && date >= date1 && date <= date2)) ? "dp-highlight" : ""];
			});

		}
	});


	// * MOBILE

	// * mobile click menu and reserve functions

	$('.nav-button-menu').click(function() {
		$('body').addClass('mobilenav-active');
	});

	$('.mobilenav-button-close').click(function() {
		$('body').removeClass('mobilenav-active');
	});

	$('.nav-button-reserve, .bookingnav-reserve').click(function() {
		$('body').addClass('mobilenav-reserve-active');
	});

	$('.mobilenav-schedulebook-close').click(function() {
		$('body').removeClass('mobilenav-reserve-active');
	});


	// * mobile click arrive and depart functions
	// * used together with datepicker-mobile

	$('.mobilenav-sb-arrive').click(function() {
		var main = $('.mobilenav-schedulebook-selector');

		main.removeClass('depart-selector');
		main.addClass('arrive-selector');
	});

	$('.mobilenav-sb-depart').click(function() {
		var main = $('.mobilenav-schedulebook-selector');

		main.removeClass('arrive-selector');
		main.addClass('depart-selector');
	});


	// * datepicker for the mobile input
	
	$('.datepicker-mobile').datepicker({
		minDate: 0,

		onSelect: function( selectedDate ) {

			// * variables
			var $selector = $('.mobilenav-schedulebook-selector'),

				arrivalDate = $.datepicker.parseDate($.datepicker._defaults.dateFormat, $("#arrival_date_mobile").val()),
				departureDate = $.datepicker.parseDate($.datepicker._defaults.dateFormat, $("#departure_date_mobile").val()),
				selected = $.datepicker.parseDate($.datepicker._defaults.dateFormat, selectedDate);

			// check if what selector got highlighted and use that procedure
			if ( $selector.hasClass('arrive-selector') ) {

				$selector.removeClass('arrive-selector');
				$selector.addClass('depart-selector');

				// check if selected date is higher than or equal to departure time
				if ( selected.getTime() >= departureDate.getTime() ) {

					// * save selected to departureDate
					// * format departureDate and use it to update #departure_date_mobile input
					// * add 1: prevents user to check in or check out on the same day
					departureDate = selected;
					departureDate.setDate( departureDate.getDate() + 1 );
					var new_departureDate = $.datepicker.formatDate( 'yy-mm-dd', departureDate );
					

					// * set these new values into their respective inputs
					$("#arrival_date_mobile").val( selectedDate );
					$("#departure_date_mobile").val( new_departureDate );

				} else {

					// * just update this input...
					$("#arrival_date_mobile").val( selectedDate );

				}

			} else {

				$selector.removeClass('depart-selector');
				$selector.addClass('arrive-selector');

				if ( selected.getTime() <= arrivalDate.getTime() ) {

					// * save selected to arrivalDate
					// * format arrivalDate and use it to update #departure_date_mobile input
					// * minus 1: prevents user to check in or check out on the same day
					arrivalDate = selected;
					arrivalDate.setDate( arrivalDate.getDate() - 1 );
					var new_arrivalDate = $.datepicker.formatDate( 'yy-mm-dd', arrivalDate );
					

					// * set these new values into their respective inputs
					$("#arrival_date_mobile").val( new_arrivalDate );
					$("#departure_date_mobile").val( selectedDate );

				} else {

					// * just update this input...
					$("#departure_date_mobile").val( selectedDate );

				}

			}


			// * update all datepickers dp-highlight class
			$('.datepicker-arrival, .datepicker-departure, .datepicker-mobile').datepicker( "option", "beforeShowDay", function( date ) {
				var date1 = $.datepicker.parseDate($.datepicker._defaults.dateFormat, $("#arrival_date_mobile").val());
				var date2 = $.datepicker.parseDate($.datepicker._defaults.dateFormat, $("#departure_date_mobile").val());
				return [true, date1 && ((date.getTime() == date1.getTime()) || (date2 && date >= date1 && date <= date2)) ? "dp-highlight" : ""];
			});

		}
	});



	});
</script>



<script type="text/javascript">
	$(document).ready(function(){
	    $("input.check").click(function(){
	        if($(this).is(":checked")){
	            $(this).parent().addClass("question-box-active");
	        }
	    });
	});		
</script> 

<!-- Lightbox -->	
<link rel="stylesheet" href="<?php bloginfo ('template_url'); ?>/css/prettyPhoto.css" type="text/css" media="screen" title="prettyPhoto main stylesheet" charset="utf-8" />
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

<?php include(TEMPLATEPATH . '/library/accessible-datepicker-arrival.php'); ?>
<?php include(TEMPLATEPATH . '/library/accessible-datepicker-departure.php'); ?>