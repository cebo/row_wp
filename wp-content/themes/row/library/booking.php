

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
		
		$(function() {
			var fixadent = $(".topnav"), pos = fixadent.offset();
			$(window).scroll(function() {
			if($(this).scrollTop() > (pos.top + 10) && fixadent.css('position') == 'absolute') { fixadent.addClass('fixed'); }
			else if($(this).scrollTop() <= pos.top && fixadent.hasClass('fixed')){ fixadent.removeClass('fixed'); }
			})
		});
		 				
	});	
	
</script>

<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jqueryui/1/jquery-ui.min.js'></script>
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