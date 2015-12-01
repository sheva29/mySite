//**** for wordpress use JQeury instead of ($) ****
jQuery(document).ready(function($){

	// console.log("hello world");
	// $('#footer-mauricio').click(function(){

	// 	alert("jQuery handle works");

	// });

	// alert("jQuery works!");


	addIDsToSidebarElements = function(){

		var $findProjectCategories = $("#project-sidebar").find("li");
		$findProjectCategories.addClass("project-sidebar-elements");
		var $test = $findProjectCategories.length;
		// console.log($test);
	}

	// we add a class to all the elements in the side bar.
	addIDsToSidebarElements();

	//*** Isotope ***//
	//we initiate our isotope grid
	var $grid = $(".row");
	$grid.isotope({
		itemSelector: '.projects',
		animationEngine: 'best-available',
		layoutMode: 'fitRows',
		animationOptions: {
			duration: 750,
			easing: 'linear',
			queue: false,
		}
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



	


});