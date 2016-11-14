<script type="text/javascript">

	$(document).ready(function() {
		dayTripper2();
	});



	function dayTripper2() {

		$('#departure_date').click(function () {
			setTimeout(function () {
				var datepicker_id = '.datepicker-departure',
					today = $('.datepicker-departure .ui-datepicker-today a')[0];

				if (!today) {
				today = $('.datepicker-departure .ui-state-active')[0] ||
						$('.datepicker-departure .ui-state-default')[0];
				}

			
				// Hide the entire page (except the date picker)
				// from screen readers to prevent document navigation
				// (by headings, etc.) while the popup is open
				// $("main").attr('id','dp-container');
				// $("#dp-container").attr('aria-hidden','true');
				// $("#skipnav").attr('aria-hidden','true');

				// Hide the "today" button because it doesn't do what 
				// you think it supposed to do
				$(".datepicker-departure .ui-datepicker-current").hide();

				today.focus();
				datePickHandler2();

				console.log(today);

			}, 0);
		});

	}



	function activate_dayTripper2() {

		setTimeout(function () {
			var datepicker_id = '.datepicker-departure',
				today = $('.datepicker-departure .ui-datepicker-today a')[0];

			if (!today) {
			today = $('.datepicker-departure .ui-state-active')[0] ||
					$('.datepicker-departure .ui-state-default')[0];
			}

		
			// Hide the entire page (except the date picker)
			// from screen readers to prevent document navigation
			// (by headings, etc.) while the popup is open
			// $("main").attr('id','dp-container');
			// $("#dp-container").attr('aria-hidden','true');
			// $("#skipnav").attr('aria-hidden','true');

			// Hide the "today" button because it doesn't do what 
			// you think it supposed to do
			$(".datepicker-departure .ui-datepicker-current").hide();

			today.focus();
			datePickHandler2();

		}, 0);

	}

	function datePickHandler2() {

		var activeDate;
		var container = $('.datepicker-departure .ui-datepicker')[0];
		var table = $('.datepicker-departure .ui-datepicker table')[0];
		var input = document.getElementById('departure_date');
		
		if (!container || !input) {
		return;
		}

		$(container).find('table').first().attr('role', 'grid');

		container.setAttribute('role', 'application');
		container.setAttribute('aria-label', 'Departure calendar view date-picker');
		table.setAttribute('summary', 'A calendar to select your departure. The week in this calendar starts on a Sunday. Your current position is today. Press right to highlight tomorrow.');

		// the top controls:
		var prev = $('.datepicker-departure .ui-datepicker-prev')[0],
			next = $('.datepicker-departure .ui-datepicker-next')[0];

	// This is the line that needs to be fixed for use on pages with base URL set in head
		next.href = 'javascript:void(0)';
		prev.href = 'javascript:void(0)';

		next.setAttribute('role', 'button');
		next.removeAttribute('title');
		prev.setAttribute('role', 'button');
		prev.removeAttribute('title');

		appendOffscreenMonthText2(next);
		appendOffscreenMonthText2(prev);

		// delegation won't work here for whatever reason, so we are
		// forced to attach individual click listeners to the prev /
		// next month buttons each time they are added to the DOM
		$(next).on('click', handleNext2Clicks2);
		$(prev).on('click', handlePrevClicks2);

		monthDayYearText2();

		$(container).on('keydown', function calendarKeyboardListener(keyVent) {
		var which = keyVent.which;
		var target = keyVent.target;
		var dateCurrent = getCurrentDate2(container);

		if (!dateCurrent) {
			dateCurrent = $('a.ui-state-default')[0];
			setHighlightState2(dateCurrent, container);
		}

		if (27 === which) {
			keyVent.stopPropagation();
			return closeCalendar2();
		} else if (which === 9 && keyVent.shiftKey) { // SHIFT + TAB
			keyVent.preventDefault();
			if ($(target).hasClass('ui-datepicker-close')) { // close button
			$('.datepicker-departure .ui-datepicker-prev')[0].focus();
			} else if ($(target).hasClass('ui-state-default')) { // a date link
			$('.datepicker-departure .ui-datepicker-close')[0].focus();
			} else if ($(target).hasClass('ui-datepicker-prev')) { // the prev link
			$('.datepicker-departure .ui-datepicker-next')[0].focus();
			} else if ($(target).hasClass('ui-datepicker-next')) { // the next link
			activeDate = $('.datepicker-departure .ui-state-highlight') ||
						$('.datepicker-departure .ui-state-active')[0];
			if (activeDate) {
				activeDate.focus();
			}
			}
		} else if (which === 9) { // TAB
			keyVent.preventDefault();
			if ($(target).hasClass('ui-datepicker-close')) { // close button
			activeDate = $('.datepicker-departure .ui-state-highlight') ||
						$('.datepicker-departure .ui-state-active')[0];
			if (activeDate) {
				activeDate.focus();
			}
			} else if ($(target).hasClass('ui-state-default')) {
			$('.datepicker-departure .ui-datepicker-next')[0].focus();
			} else if ($(target).hasClass('ui-datepicker-next')) {
			$('.datepicker-departure .ui-datepicker-prev')[0].focus();
			} else if ($(target).hasClass('ui-datepicker-prev')) {
			$('.datepicker-departure .ui-datepicker-close')[0].focus();
			} 
		} else if (which === 37) { // LEFT arrow key
			// if we're on a date link...
			if (!$(target).hasClass('ui-datepicker-close') && $(target).hasClass('ui-state-default')) {
			keyVent.preventDefault();
			previousDay2(target);
			}
		} else if (which === 39) { // RIGHT arrow key
			// if we're on a date link...
			if (!$(target).hasClass('ui-datepicker-close') && $(target).hasClass('ui-state-default')) {
			keyVent.preventDefault();
			nextDay2(target);
			}
		} else if (which === 38) { // UP arrow key
			if (!$(target).hasClass('ui-datepicker-close') && $(target).hasClass('ui-state-default')) {
			keyVent.preventDefault();
			upHandler2(target, container, prev);
			}
		} else if (which === 40) { // DOWN arrow key
			if (!$(target).hasClass('ui-datepicker-close') && $(target).hasClass('ui-state-default')) {
			keyVent.preventDefault();
			downHandler2(target, container, next);
			}
		} else if (which === 13) { // ENTER
			if ($(target).hasClass('ui-state-default')) {
			setTimeout(function () {
				closeCalendar2();
			}, 100);
			} else if ($(target).hasClass('ui-datepicker-prev')) {
			handlePrevClicks2();
			} else if ($(target).hasClass('ui-datepicker-next')) {
			handleNext2Clicks2();
			}
		} else if (32 === which) {
			if ($(target).hasClass('ui-datepicker-prev') || $(target).hasClass('ui-datepicker-next')) {
			target.click();
			}
		} else if (33 === which) { // PAGE UP
			moveOneMonth2(target, 'prev');
		} else if (34 === which) { // PAGE DOWN
			moveOneMonth2(target, 'next');
		} else if (36 === which) { // HOME
			var firstOfMonth = $(target).closest('tbody').find('.datepicker-departure .ui-state-default')[0];
			if (firstOfMonth) {
			firstOfMonth.focus();
			setHighlightState2(firstOfMonth, $('#ui-datepicker-div')[0]);
			}
		} else if (35 === which) { // END
			var $daysOfMonth = $(target).closest('tbody').find('.datepicker-departure .ui-state-default');
			var lastDay = $daysOfMonth[$daysOfMonth.length - 1];
			if (lastDay) {
			lastDay.focus();
			setHighlightState2(lastDay, $('#ui-datepicker-div')[0]);
			}
		}
		$(".datepicker-departure .ui-datepicker-current").hide();
		});

	}

	function closeCalendar2() {
		var container = $('#ui-datepicker-div');
		$(container).off('keydown');
		var input = $('#datepicker')[0];
		$(input).datepicker('hide');
		
		input.focus();
	}

	function removeAria2() {
		// make the rest of the page accessible again:
		$("#dp-container").removeAttr('aria-hidden');
		$("#skipnav").removeAttr('aria-hidden');
	}

	///////////////////////////////
	//////////////////////////// //
	///////////////////////// // //
	// UTILITY-LIKE THINGS // // //
	///////////////////////// // //
	//////////////////////////// //
	///////////////////////////////
	function isOdd2(num) {
		return num % 2;
	}

	function moveOneMonth2(currentDate, dir) {
		var button = (dir === 'next')
					? $('.datepicker-departure .ui-datepicker-next')[0]
					: $('.datepicker-departure .ui-datepicker-prev')[0];

		if (!button) {
		return;
		}

		var ENABLED_SELECTOR = '#ui-datepicker-div tbody td:not(.ui-state-disabled)';
		var $currentCells = $(ENABLED_SELECTOR);
		var currentIdx = $.inArray(currentDate.parentNode, $currentCells);

		button.click();
		setTimeout(function () {
		updateHeaderElements2();

		var $newCells = $(ENABLED_SELECTOR);
		var newTd = $newCells[currentIdx];
		var newAnchor = newTd && $(newTd).find('a')[0];

		while (!newAnchor) {
			currentIdx--;
			newTd = $newCells[currentIdx];
			newAnchor = newTd && $(newTd).find('a')[0];
		}

		setHighlightState2(newAnchor, $('#ui-datepicker-div')[0]);
		newAnchor.focus();

		}, 0);

	}

	function handleNext2Clicks2() {
		setTimeout(function () {
		updateHeaderElements2();
		prepHighlightState2();
		$('.datepicker-departure .ui-datepicker-next').focus();
		$(".datepicker-departure .ui-datepicker-current").hide();
		}, 0);
	}

	function handlePrevClicks2() {
		setTimeout(function () {
		updateHeaderElements2();
		prepHighlightState2();
		$('.datepicker-departure .ui-datepicker-prev').focus();
		$(".datepicker-departure .ui-datepicker-current").hide();
		}, 0);
	}

	function previousDay2(dateLink) {
		var container = $('.datepicker-departure .ui-datepicker')[0];
		if (!dateLink) {
		return;
		}
		var td = $(dateLink).closest('td');
		if (!td) {
		return;
		}

		var prevTd = $(td).prev(),
			prevDateLink = $('a.ui-state-default', prevTd)[0];

		if (prevTd && prevDateLink) {
		setHighlightState2(prevDateLink, container);
		prevDateLink.focus();
		} else {
		handlePrevious2(dateLink);
		}
	}


	function handlePrevious2(target) {
		var container = $('.datepicker-departure .ui-datepicker')[0];
		if (!target) {
		return;
		}
		var currentRow = $(target).closest('tr');
		if (!currentRow) {
		return;
		}
		var previousRow = $(currentRow).prev();

		if (!previousRow || previousRow.length === 0) {
		// there is not previous row, so we go to previous month...
		previousMonth2();
		} else {
		var prevRowDates = $('td a.ui-state-default', previousRow);
		var prevRowDate = prevRowDates[prevRowDates.length - 1];

		if (prevRowDate) {
			setTimeout(function () {
			setHighlightState2(prevRowDate, container);
			prevRowDate.focus();
			}, 0);
		}
		}
	}

	function previousMonth2() {
		var prevLink = $('.datepicker-departure .ui-datepicker-prev')[0];
		var container = $('.datepicker-departure .ui-datepicker')[0];
		prevLink.click();
		// focus last day of new month
		setTimeout(function () {
		var trs = $('tr', container),
			lastRowTdLinks = $('td a.ui-state-default', trs[trs.length - 1]),
			lastDate = lastRowTdLinks[lastRowTdLinks.length - 1];

		// updating the cached header elements
		updateHeaderElements2();

		setHighlightState2(lastDate, container);
		lastDate.focus();

		}, 0);
	}

	///////////////// NEXT /////////////////
	/**
	 * Handles right arrow key navigation
	 * @param	{HTMLElement} dateLink The target of the keyboard event
	 */
	function nextDay2(dateLink) {
		var container = $('.datepicker-departure .ui-datepicker')[0];
		if (!dateLink) {
		return;
		}
		var td = $(dateLink).closest('td');
		if (!td) {
		return;
		}
		var nextTd = $(td).next(),
			nextDateLink = $('a.ui-state-default', nextTd)[0];

		if (nextTd && nextDateLink) {
		setHighlightState2(nextDateLink, container);
		nextDateLink.focus(); // the next day (same row)
		} else {
		handleNext2(dateLink);
		}
	}

	function handleNext2(target) {
		var container = $('.datepicker-departure .ui-datepicker')[0];
		if (!target) {
		return;
		}
		var currentRow = $(target).closest('tr'),
			nextRow = $(currentRow).next();

		if (!nextRow || nextRow.length === 0) {
		nextMonth2();
		} else {
		var nextRowFirstDate = $('a.ui-state-default', nextRow)[0];
		if (nextRowFirstDate) {
			setHighlightState2(nextRowFirstDate, container);
			nextRowFirstDate.focus();
		}
		}
	}

	function nextMonth2() {
		nextMon = $('.datepicker-departure .ui-datepicker-next')[0];
		var container = $('.datepicker-departure .ui-datepicker')[0];
		nextMon.click();
		// focus the first day of the new month
		setTimeout(function () {
		// updating the cached header elements
		updateHeaderElements2();

		var firstDate = $('a.ui-state-default', container)[0];
		setHighlightState2(firstDate, container);
		firstDate.focus();
		}, 0);
	}

	/////////// UP ///////////
	/**
	 * Handle the up arrow navigation through dates
	 * @param	{HTMLElement} target	 The target of the keyboard event (day)
	 * @param	{HTMLElement} cont	 The calendar container
	 * @param	{HTMLElement} prevLink Link to navigate to previous month
	 */
	function upHandler2(target, cont, prevLink) {
		prevLink = $('.datepicker-departure .ui-datepicker-prev')[0];
		var rowContext = $(target).closest('tr');
		if (!rowContext) {
		return;
		}
		var rowTds = $('td', rowContext),
			rowLinks = $('a.ui-state-default', rowContext),
			targetIndex = $.inArray(target, rowLinks),
			prevRow = $(rowContext).prev(),
			prevRowTds = $('td', prevRow),
			parallel = prevRowTds[targetIndex],
			linkCheck = $('a.ui-state-default', parallel)[0];

		if (prevRow && parallel && linkCheck) {
		// there is a previous row, a td at the same index
		// of the target AND theres a link in that td
		setHighlightState2(linkCheck, cont);
		linkCheck.focus();
		} else {
		// we're either on the first row of a month, or we're on the
		// second and there is not a date link directly above the target
		prevLink.click();
		setTimeout(function () {
			// updating the cached header elements
			updateHeaderElements2();
			var newRows = $('tr', cont),
				lastRow = newRows[newRows.length - 1],
				lastRowTds = $('td', lastRow),
				tdParallelIndex = $.inArray(target.parentNode, rowTds),
				newParallel = lastRowTds[tdParallelIndex],
				newCheck = $('a.ui-state-default', newParallel)[0];

			if (lastRow && newParallel && newCheck) {
			setHighlightState2(newCheck, cont);
			newCheck.focus();
			} else {
			// theres no date link on the last week (row) of the new month
			// meaning its an empty cell, so we'll try the 2nd to last week
			var secondLastRow = newRows[newRows.length - 2],
				secondTds = $('td', secondLastRow),
				targetTd = secondTds[tdParallelIndex],
				linkCheck = $('a.ui-state-default', targetTd)[0];

			if (linkCheck) {
				setHighlightState2(linkCheck, cont);
				linkCheck.focus();
			}

			}
		}, 0);
		}
	}

	//////////////// DOWN ////////////////
	/**
	 * Handles down arrow navigation through dates in calendar
	 * @param	{HTMLElement} target	 The target of the keyboard event (day)
	 * @param	{HTMLElement} cont	 The calendar container
	 * @param	{HTMLElement} nextLink Link to navigate to next month
	 */
	function downHandler2(target, cont, nextLink) {
		nextLink = $('.datepicker-departure .ui-datepicker-next')[0];
		var targetRow = $(target).closest('tr');
		if (!targetRow) {
		return;
		}
		var targetCells = $('td', targetRow),
			cellIndex = $.inArray(target.parentNode, targetCells), // the td (parent of target) index
			nextRow = $(targetRow).next(),
			nextRowCells = $('td', nextRow),
			nextWeekTd = nextRowCells[cellIndex],
			nextWeekCheck = $('a.ui-state-default', nextWeekTd)[0];

		if (nextRow && nextWeekTd && nextWeekCheck) {
		// theres a next row, a TD at the same index of `target`,
		// and theres an anchor within that td
		setHighlightState2(nextWeekCheck, cont);
		nextWeekCheck.focus();
		} else {
		nextLink.click();

		setTimeout(function () {
			// updating the cached header elements
			updateHeaderElements2();

			var nextMonth2Trs = $('tbody tr', cont),
				firstTds = $('td', nextMonth2Trs[0]),
				firstParallel = firstTds[cellIndex],
				firstCheck = $('a.ui-state-default', firstParallel)[0];

			if (firstParallel && firstCheck) {
			setHighlightState2(firstCheck, cont);
			firstCheck.focus();
			} else {
			// lets try the second row b/c we didnt find a
			// date link in the first row at the target's index
			var secondRow = nextMonth2Trs[1],
				secondTds = $('td', secondRow),
				secondRowTd = secondTds[cellIndex],
				secondCheck = $('a.ui-state-default', secondRowTd)[0];

			if (secondRow && secondCheck) {
				setHighlightState2(secondCheck, cont);
				secondCheck.focus();
			}
			}
		}, 0);
		}
	}


	function onCalendarHide2() {
		closeCalendar2();
	}

	// add an aria-label to the date link indicating the currently focused date
	// (formatted identically to the required format: mm/dd/yyyy)
	function monthDayYearText2() {
		var cleanUps = $('.amaze-date');

		$(cleanUps).each(function (clean) {
		// each(cleanUps, function (clean) {
		clean.parentNode.removeChild(clean);
		});

		var datePickDiv = $('.datepicker-departure .ui-datepicker')[0];
		// in case we find no datepick div
		if (!datePickDiv) {
		return;
		}

		var dates = $('a.ui-state-default', datePickDiv);

		$(dates).each(function (index, date) {
		var currentRow = $(date).closest('tr'),
			currentTds = $('td', currentRow),
			currentIndex = $.inArray(date.parentNode, currentTds),
			headThs = $('thead tr th', datePickDiv),
			dayIndex = headThs[currentIndex],
			daySpan = $('span', dayIndex)[0],
			monthName = $('.datepicker-departure .ui-datepicker-month')[0].innerHTML,
			year = $('.datepicker-departure .ui-datepicker-year')[0].innerHTML,
			number = date.innerHTML;

		if (!daySpan || !monthName || !number || !year) {
			return;
		}

		// AT Reads: {month} {date} {year} {day}
		// "December 18 2014 Thursday"
		var dateText = monthName + ' ' + date.innerHTML + ' ' + year + ' ' + daySpan.title;
		// AT Reads: {date(number)} {name of day} {name of month} {year(number)}
		// var dateText = date.innerHTML + ' ' + daySpan.title + ' ' + monthName + ' ' + year;
		// add an aria-label to the date link reading out the currently focused date
		date.setAttribute('aria-label', dateText);
		});
	}



	// update the cached header elements because we're in a new month or year
	function updateHeaderElements2() {
		var context = $('.datepicker-departure .ui-datepicker');
		if (!context) {
		return;
		}

		context.find('table').first().attr('role', 'grid');

		prev = $('.datepicker-departure .ui-datepicker-prev')[0];
		next = $('.datepicker-departure .ui-datepicker-next')[0];

		//make them click/focus - able
		next.href = 'javascript:void(0)';
		prev.href = 'javascript:void(0)';

		next.setAttribute('role', 'button');
		prev.setAttribute('role', 'button');
		appendOffscreenMonthText2(next);
		appendOffscreenMonthText2(prev);

		$(next).on('click', handleNext2Clicks2);
		$(prev).on('click', handlePrevClicks2);

		// add month day year text
		monthDayYearText2();
	}


	function prepHighlightState2() {
		var highlight;
		var cage = $('.datepicker-departure .ui-datepicker')[0];
		highlight = $('.datepicker-departure .ui-state-highlight')[0] ||
					$('.datepicker-departure .ui-state-default')[0];
		if (highlight && cage) {
		setHighlightState2(highlight, cage);
		}
	}

	// Set the highlighted class to date elements, when focus is recieved
	function setHighlightState2(newHighlight, container) {
		var prevHighlight = getCurrentDate2(container);
		// remove the highlight state from previously
		// highlighted date and add it to our newly active date
		$(prevHighlight).removeClass('ui-state-highlight');
		$(newHighlight).addClass('ui-state-highlight');
	}


	// grabs the current date based on the hightlight class
	function getCurrentDate2(container) {
		var currentDate = $('.datepicker-departure .ui-state-highlight')[0];
		return currentDate;
	}

	/**
	 * Appends logical next/prev month text to the buttons
	 * - ex: Next Month, January 2015
	 *		 Previous Month, November 2014
	 */
	function appendOffscreenMonthText2(button) {
		var buttonText;
		var isNext = $(button).hasClass('ui-datepicker-next');
		var months = [
		'january', 'february',
		'march', 'april',
		'may', 'june', 'july',
		'august', 'september',
		'october',
		'november', 'december'
		];

		var currentMonth = $('.datepicker-departure .ui-datepicker-title .ui-datepicker-month').text().toLowerCase();
		var monthIndex = $.inArray(currentMonth.toLowerCase(), months);
		var currentYear = $('.datepicker-departure .ui-datepicker-title .ui-datepicker-year').text().toLowerCase();
		var adjacentIndex = (isNext) ? monthIndex + 1 : monthIndex - 1;

		if (isNext && currentMonth === 'december') {
		currentYear = parseInt(currentYear, 10) + 1;
		adjacentIndex = 0;
		} else if (!isNext && currentMonth === 'january') {
		currentYear = parseInt(currentYear, 10) - 1;
		adjacentIndex = months.length - 1;
		}

		buttonText = (isNext)
					? 'Next Month, ' + firstToCap2(months[adjacentIndex]) + ' ' + currentYear
					: 'Previous Month, ' + firstToCap2(months[adjacentIndex]) + ' ' + currentYear;

		$(button).find('.datepicker-departure .ui-icon').html(buttonText);

	}

	// Returns the string with the first letter capitalized
	function firstToCap2(s) {
		return s.charAt(0).toUpperCase() + s.slice(1);
	}

</script>