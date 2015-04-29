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
		console.log($test);
	}

	// we add a class to all the elements in the side bar.
	addIDsToSidebarElements();

	


});