//**** for wordpress use JQeury instead of ($) ****
jQuery(document).ready(function($){


	addIDsToSidebarElements = function(){

		var $findProjectCategories = $("#project-sidebar").find("li");
		$findProjectCategories.addClass("project-sidebar-elements");
		var $test = $findProjectCategories.length;
		// console.log($test);
	}

	// var buttonArr = []
	// $('.project-sidebar-elements').each( function() {buttonArr.push($(this));});
	// console.log(buttonArr);

	// we add a class to all the elements in the side bar.
	addIDsToSidebarElements();
	// addClassToLogo();

	//*** Isotope ***//
	//we initiate our isotope grid
	var $grid = $(".row");
	$grid.isotope({
		itemSelector: '.projects',
		// animationEngine: 'best-available',
		layoutMode: 'fitRows',
		animationOptions: {
			duration: 750,
			easing: 'linear',
			queue: false,
		},
	});

	//we assign the elements to pass to our filters
	$('.project-sidebar button').click(function(){
		var selector = $(this).attr('data-filter');
		$grid.isotope({
			filter: selector,
			animationOptions: {
			duration: 750,
			easing: 'linear',
			queue: false,
		}
		});
		// return false;
		var iso = $grid.data('isotope');
		console.log('filtered ' + iso.filteredItems.length + ' items');

	});

	//adding a toggle class for the buttons in the project thumbs
	$(".project-sidebar-elements").on('click', function () {
		// $(this).removeClass("is-checked");
		$('.project-sidebar-elements').each( function (i) {
			var that = $(this);
			if (that.hasClass('is-checked')) that.removeClass('is-checked');
			// if (console.log($(this));
			// console.log(i);
		});
		$(this).toggleClass("is-checked");

	});

	//Let's switch the text in the work header
	var cnt = 0;
	var fieldsOfExpertise = [' Experiential ', ' Digital Fabrication ', ' Product Development ', ' User Experience ', ' Computation ', ' Creative Coding '];
	var fieldColor = ['aquamarine', 'brown', 'chartreuse', 'crimson', 'darkorange', 'darkslateblue'];

	function slideExpertiseText () {

		if (cnt>= fieldsOfExpertise.length) cnt=0;// we reset our counter
		var $expertiseTextField = $("#expertise-areas");// we pass the id of the element we want to change
		$expertiseTextField.css("color", fieldColor[cnt]);
		$expertiseTextField.html(fieldsOfExpertise[cnt++]);//we switch the text
		$expertiseTextField.fadeIn('slow').animate({opacity: 1.0}, 1000).fadeOut('slow', function () {
			return slideExpertiseText();// we call the function repeteadly
		});
		console.log("cnt value: ", cnt);
		console.log("textArray length: ", fieldsOfExpertise.length);
	}

	slideExpertiseText();// we evoke our function

	





	


});