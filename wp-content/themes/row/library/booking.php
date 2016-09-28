
<?php if ( false ) { ?>

<script type="text/javascript">

	$(document).ready(function() {
					
		  $('#arrival_date').live('keyup',function() {
		        var pronameval = $(this).val();
		        $('#departure_date').val(pronameval.replace(/ /g, '-').toLowerCase());
		    });
	 		
	 		$('#selectUl li:not(":first")').addClass('unselected');
				$('#selectUl').hover(
				    function(){
				        $(this).find('li').click(
				            function(){
				                $('.unselected').removeClass('unselected');
				                $(this).addClass("bignumber");
				                $(this).siblings('li').addClass('unselected');
				                $(this).siblings('li').removeClass('bignumber');
				                var index = $(this).index();
				                $('select[name=size]')
				                    .find('option:eq(' + index + ')')
				                    .attr('selected',true);
				            });
				    },
				    function(){
				    });
		/*
		$(function() {
			var fixadent = $(".topnav"), pos = fixadent.offset();
			$(window).scroll(function() {
			if($(this).scrollTop() > (pos.top + 10) && fixadent.css('position') == 'absolute') { fixadent.addClass('fixed'); }
			else if($(this).scrollTop() <= pos.top && fixadent.hasClass('fixed')){ fixadent.removeClass('fixed'); }
			})
		});
*/
		 				
	});	
	
</script>

<?php } ?>

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

		onSelect: function( selectedDate ) {

			// * variables
			var $arrival = $('.datepicker-arrival'),
				$departure = $('.datepicker-departure');

			// * remove arrival datepicker-show class first
			$arrival.removeClass('datepicker-show');

			// * variables
			var arrivalDate = $arrival.datepicker('getDate'),
				departureDate = $departure.datepicker('getDate');


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
			}

			// * check if arrival date is higher than or equal to departure date
			if ( arrivalDate.getTime() >= departureDate.getTime() ) {

				// * open up datepicker-departure
				$departure.addClass('datepicker-show');

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

		}
	});


	// * datepicker for the departure input

	$('.datepicker-departure').datepicker({
		minDate: 1,

		onSelect: function( selectedDate ) {

			// * variables
			var $arrival = $('.datepicker-arrival'),
				$departure = $('.datepicker-departure');

			// * remove departure datepicker-show class first
			$departure.removeClass('datepicker-show');

			// * variables
			var arrivalDate = $arrival.datepicker('getDate'),
				departureDate = $departure.datepicker('getDate');


			// * check if arrival date is higher than or equal to departure date
			// * if yes, user will have to input arrival date again
			if ( arrivalDate.getTime() >= departureDate.getTime() ) {

				// * open up datepicker-arrival
				$arrival.addClass('datepicker-show');

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


	// * datepicker for mobile input

	$('.nav-button-menu').click(function() {
		$('body').addClass('mobilenav-active');
	});

	$('.mobilenav-button-close').click(function() {
		$('body').removeClass('mobilenav-active');
	});

	$('.mobilenav-button-reserve').click(function() {
		$('body').addClass('mobilenav-reserve-active');
	});

	$('.mobilenav-schedulebook-close').click(function() {
		$('body').removeClass('mobilenav-reserve-active');
	});

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




<?php if ( false ) { ?>

<script type="text/javascript">
	$(document).ready(function(){
		   
		$.datepicker._defaults.dateFormat = 'yy-mm-dd';
		
		var days = new Array('Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday');
		var months = [ "January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December" ];
		
		$('.datepicker').datepicker({
		    dateFormat: 'yy-mm-dd',
		    // altField  : '#arve',
			altFormat : 'dd',
			minDate: new Date(),
			gotoCurrent: true,
		    onSelect: function(event, ui) {
		        var dayOfWeek = $(this).datepicker('getDate').getUTCDay();
		        var selectedMonthName = months[$(this).datepicker('getDate').getMonth()];
		        var selectednextMonthName = months[$(this).datepicker('getDate').getMonth()+1];
		        // $('#arv').val(selectedMonthName);
		        $("#arrival_date").val(event);

		        var d = $(this).datepicker("getDate");
				var d2 =  (d.getDate() + 1);

				var getthedate = d.getDate();
				var getthemonth = d.getMonth()+1;
				var today = new Date();
				var LastDayOfMonth = new Date(d.getFullYear(),d.getMonth()+1, 0);
				var LastMonthOfYear = new Date(d.getFullYear(),0,0);
				var getdateLastDayOfMonth = LastDayOfMonth.getDate();
				var getdateLastMonthOfYear = LastMonthOfYear.getMonth()+1;
				var firstOfMonth = new Date(today.getFullYear(),today.getMonth(), 1);

				var d3 = firstOfMonth.getDate();

				// alert(testget);

				$(".departdatepicker").datepicker("option", "minDate", d);

				if( (getthedate == getdateLastDayOfMonth) && (getthemonth != getdateLastMonthOfYear) ) {

					var d1 =  d.getFullYear() + '-' + (d.getMonth() + 2) + '-' + d3;

					$('.departdatepicker').datepicker('setDate',d1);

					if(d3 > 10) {
						$("#depee").val('0'+d3);
					} else {
						$("#depee").val(d3);
					}

					$("#departure_date").val(d1);
		        	$('#dep').val(selectednextMonthName);
		        	
		        	$(".datepicker").addClass("super-ghost");   
			  		$('.departdatepicker').css({"opacity" : 1, "visibility" : "visible"});
					$(".departdatepicker").removeClass("super-ghost");  

		        } else if( (getthedate == getdateLastDayOfMonth) && (getthemonth == getdateLastMonthOfYear) ) {

		        	var d1 =  (d.getFullYear()+1) + '-' + '1' + '-' + d3;

					$('.departdatepicker').datepicker('setDate',d1);

					if(d3 > 10) {
						$("#depee").val('0'+d3);
					} else {
						$("#depee").val(d3);
					}

					$("#departure_date").val(d1);
		        	$('#dep').val('January');
		        	
		        	$(".datepicker").addClass("super-ghost");   
			  		$('.departdatepicker').css({"opacity" : 1, "visibility" : "visible"});
					$(".departdatepicker").removeClass("super-ghost");  

				} else {

					var d1 =  d.getFullYear() + '-' + (d.getMonth() + 1) + '-' + (d.getDate() + 1);

					$('.departdatepicker').datepicker('setDate',d1);

					if(d2 < 10) {
						$("#depee").val('0'+d2);
					} else {
						$("#depee").val(d2);
					}
					
					$("#departure_date").val(d1);
		        	$('#dep').val(selectedMonthName);

		        	$(".datepicker").addClass("super-ghost");   
			  		$('.departdatepicker').css({"opacity" : 1, "visibility" : "visible"});
					$(".departdatepicker").removeClass("super-ghost");   
				}
		        
		    }
		     
		});
					
		$('.departdatepicker').datepicker({
		    dateFormat: 'yy-mm-dd',
		    altField  : '#depee',
			altFormat : 'dd',
			minDate: 1,
			gotoCurrent: true,
			beforeShowDay: function(date) {
				var date1 = $.datepicker.parseDate($.datepicker._defaults.dateFormat, $("#arrival_date").val());
				var date2 = $.datepicker.parseDate($.datepicker._defaults.dateFormat, $("#departure_date").val());
				return [true, date1 && ((date.getTime() == date1.getTime()) || (date2 && date >= date1 && date <= date2)) ? "dp-highlight" : ""];
			},
		    onSelect: function(event, ui) {
		        var dayOfWeek = $(this).datepicker('getDate').getUTCDay();
		        var selectedMonthName = months[$(this).datepicker('getDate').getMonth()];
		        $('#dep').val(selectedMonthName);
		        $("#departure_date").val(event);
		        $('.departdatepicker').addClass("super-ghost");
		        
		    }
		});

		$('.datepickerr').datepicker({
		    dateFormat: 'yy-mm-dd',
		    altField  : '#arve-1',
			altFormat : 'dd',
			minDate: new Date(),
		    onSelect: function(event, ui) {

		        var dayOfWeek = $(this).datepicker('getDate').getUTCDay();
		        var selectedMonthName = months[$(this).datepicker('getDate').getMonth()];
		        var selectednextMonthName = months[$(this).datepicker('getDate').getMonth()+1];
		        $('#arv-1').val(selectedMonthName);
		        $("#arrival_date-1").val(event);

		        var d = $(this).datepicker("getDate");
				var d2 =  (d.getDate() + 1);

				var getthedate = d.getDate();
				var getthemonth = d.getMonth()+1;
				var today = new Date();
				var LastDayOfMonth = new Date(d.getFullYear(),d.getMonth()+1, 0);
				var LastMonthOfYear = new Date(d.getFullYear(),0,0);
				var getdateLastDayOfMonth = LastDayOfMonth.getDate();
				var getdateLastMonthOfYear = LastMonthOfYear.getMonth()+1;
				var firstOfMonth = new Date(today.getFullYear(),today.getMonth(), 1);				
				
				// alert(getthemonth);

				var d3 = firstOfMonth.getDate();

				$(".departdatepickerr").datepicker("option", "minDate", d);

				if( (getthedate == getdateLastDayOfMonth) && (getthemonth != getdateLastMonthOfYear) ) {

					var d1 =  d.getFullYear() + '-' + (d.getMonth() + 2) + '-' + d3;

					$('.departdatepickerr').datepicker('setDate',d1);

					$("#depee-1").val(d3);
					$("#departure_date-1").val(d1);
		        	$('#dep-1').val(selectednextMonthName);

		        } else if( (getthedate == getdateLastDayOfMonth) && (getthemonth == getdateLastMonthOfYear) ) {

		        	var d1 =  (d.getFullYear()+1) + '-' + '1' + '-' + d3;

		        	$('.departdatepickerr').datepicker('setDate',d1);

					$("#depee-1").val(d3);
					$("#departure_date-1").val(d1);
		        	$('#dep-1').val('January');

				} else {

					var d1 =  d.getFullYear() + '-' + (d.getMonth() + 1) + '-' + (d.getDate() + 1);

					$('.departdatepickerr').datepicker('setDate',d1);

					$("#depee-1").val(d2);
					$("#departure_date-1").val(d1);
		        	$('#dep-1').val(selectedMonthName);
				}
		       
		    }
		     
		});
					
		$('.departdatepickerr').datepicker({
		    dateFormat: 'yy-mm-dd',
		    altField  : '#depee-1',
			altFormat : 'dd',
			minDate: 1,
			beforeShowDay: function(date) {
				var date1 = $.datepicker.parseDate($.datepicker._defaults.dateFormat, $("#arrival_date-1").val());
				var date2 = $.datepicker.parseDate($.datepicker._defaults.dateFormat, $("#departure_date-1").val());
				return [true, date1 && ((date.getTime() == date1.getTime()) || (date2 && date >= date1 && date <= date2)) ? "dp-highlight" : ""];
			},
		    onSelect: function(event, ui) {
		        var dayOfWeek = $(this).datepicker('getDate').getUTCDay();
		        var selectedMonthName = months[$(this).datepicker('getDate').getMonth()];
		        $('#dep-1').val(selectedMonthName);
		        $("#departure_date-1").val(event);
		    }
		});

		$(".datepicker-ressys").datepicker({
			minDate: 0,
			numberOfMonths: [2,1],
			beforeShowDay: function(date) {
				var date1 = $.datepicker.parseDate($.datepicker._defaults.dateFormat, $("#arrival_date-nav").val());
				var date2 = $.datepicker.parseDate($.datepicker._defaults.dateFormat, $("#departure_date-nav").val());
				return [true, date1 && ((date.getTime() == date1.getTime()) || (date2 && date >= date1 && date <= date2)) ? "dp-highlight" : ""];
			},
			onSelect: function(dateText, inst) {
				var date1 = $.datepicker.parseDate($.datepicker._defaults.dateFormat, $("#arrival_date-nav").val());
				var date2 = $.datepicker.parseDate($.datepicker._defaults.dateFormat, $("#departure_date-nav").val());
                var selectedDate = $.datepicker.parseDate($.datepicker._defaults.dateFormat, dateText);

                
                if (!date1 || date2) {
					$("#arrival_date-nav").val(dateText);
					$("#departure_date-nav").val("");
                    $(this).datepicker();
                } else if( selectedDate < date1 ) {
                    $("#departure_date-nav").val( $("#arrival_date-nav").val() );
                    $("#arrival_date-nav").val( dateText );
                    $(this).datepicker();
                } else {
					$("#departure_date-nav").val(dateText);
                    $(this).datepicker();
				}
			}
		});
		
		
		
		
		var d=new Date();
		var month=new Array();
		month[0]="January";
		month[1]="February";
		month[2]="March";
		month[3]="April";
		month[4]="May";
		month[5]="June";
		month[6]="July";
		month[7]="August";
		month[8]="September";
		month[9]="October";
		month[10]="November";
		month[11]="December";
		var n = month[d.getMonth()];
		
		$("#arv-1").attr("placeholder", n);
		$("#dep-1").attr("placeholder", n);



		var todaytwo = new Date();
	    var monthtwo = todaytwo.getMonth(),
	        yeartwo = todaytwo.getFullYear();
	    if (monthtwo < 0) {
	        monthtwo = 11;
	        yeartwo -= 1;
	    }
	    var tomorrow = new Date(yeartwo, monthtwo, todaytwo.getDate()+1);

		$('#arrival_date').val($.datepicker.formatDate('yy-mm-dd', todaytwo));
	    $('#departure_date').val($.datepicker.formatDate('yy-mm-dd', tomorrow));			
			
	});
		

$(document).ready(function() {
			
		$(".calspacer span.arrv input").click(function() {
				
			 $(".datepicker").removeClass("super-ghost").css({"opacity" : 1, "visibility" : "visible"});
			 $(".shutdown").addClass("alldown");
			
		});
		
		
		$(".departdatepicker").click(function() {
				 $(".datepicker").removeClass("super-ghost").css({"opacity" : 0, "visibility" : "hidden"}); 
			     $(".departdatepicker").addlass("super-ghost").css({"opacity" : 0, "visibility" : "hidden"}); 
			});
		
		$(".calspacer span.dept").click(function() {
			
			 $(".departdatepicker").css({"opacity" : 1, "visibility" : "visible"});
			 
		});
		
		$(".shutdown").click(function() {
			$(".datepicker").addClass("super-ghost");
			$(".departdatepicker").addClass("super-ghost");
			$(this).removeClass("alldown");
		});
		
		$(".cls").click(function() {
			$(".datepicker").addClass("super-ghost");
			$(".departdatepicker").addClass("super-ghost");
			$(".shutdown").removeClass("alldown");
		});
		
		$( "#departure_date" ).focus(function() {
  			$(".departdatepicker").removeClass("super-ghost");
  			$(".shutdown").addClass("alldown");
		});
		
		
		$( "#arrival_date" ).focus(function() {
  			$(".departdatepicker").addClass("super-ghost");
  			
		});


	});
	</script>

<?php } ?>

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