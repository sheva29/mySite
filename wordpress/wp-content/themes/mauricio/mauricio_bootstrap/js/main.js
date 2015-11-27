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


	var $container = $("#content");
	$container.isotope({
		itemSelector: '.projects',
		// filter: '.all',
		animationEngine: 'best-available',
		animationOptions: {
			duration: 750,
			easing: 'linear',
			queue: false,
		}
	});

	$('.project-sidebar-elements a').click(function(){
		var selector = $(this).attr('data-filter');
		$container.isotope({
			filter: selector,
			// animationOptions: {
			// 	duration: 750,
			// 	easing: 'linear',
			// 	queue: false,
			// }
		});
		console.log("clicking the link");
		// return false;
	});

	


});