//**** for wordpress use jQuery instead of ($) ****
jQuery(document).ready(function($){

	//Some general functions
	//we use this function to move elements with
	Array.prototype.move = function (old_index, new_index) {
	    while (old_index < 0) {
	        old_index += this.length;
	    }
	    while (new_index < 0) {
	        new_index += this.length;
	    }
	    if (new_index >= this.length) {
	        var k = new_index - this.length;
	        while ((k--) + 1) {
	            this.push(undefined);
	        }
	    }
	    this.splice(new_index, 0, this.splice(old_index, 1)[0]);
	    return this; // for testing purposes
	};

	//
	// Side Bar
	//

	//*** We Chance The Order of Our FILTERS ***//

	// get elements from container and pass them to a temporary one
	var tempObject = [];
	var $menuContainer = $('#sidebar');

		if ($menuContainer.lenght){// we need to make sure the element exists within the page we are loading

		var length = $menuContainer[0].childElementCount;	
		// pass elements from container to an object
		for (var i= 0; i < length ; i++){
			tempObject.push($menuContainer[0].children[i]);
		}
		// change order to the one needed in new object
		tempObject.forEach( function (element, i) {

			if(element.innerHTML === 'systems') tempObject.move(i, 1);		

		});
		// erase children from old object
		$menuContainer.children().remove();
		// add new elements
		tempObject.forEach( function (element, i){
			$menuContainer.append(element);
		});

	}

	//*** We add class to our project button filters ***//
	addIDsToSidebarElements = function(){

		var $findProjectCategories = $("#project-sidebar").find("li");
		$findProjectCategories.addClass("project-sidebar-elements");
		var $test = $findProjectCategories.length;
		// console.log($test);
	}

	// we add a class to all the elements in the side bar.
	addIDsToSidebarElements();
	
	//we set all as default for the filter
	var all = $('.filter-container');
	all.each( function () {
		var that = $(this);
		var children = $(this).children('button');
		children.each(function ( ) {
			if( $(this).text() == "all"){
				that.toggleClass("is-checked");
			}
		})
	});


	//*** 
	//Isotope 
	//***

	// set the height of the container to its max before turning of resizeContainer to false
	// var $thumbsContainer = $('.grid');
	// var thumbsContainerHeight = $('.grid').height();
	// var footerHeight =  $('#footer-mauricio').height();
	// var margin = 50;
	// var containerHeight = thumbsContainerHeight + footerHeight + margin;
	// $thumbsContainer.css({
	// 	'height' : containerHeight
	// });

	//we initiate our isotope grid for the project thumbs
	var $grid = $(".grid");
	$grid.isotope({
		itemSelector:'.projects',
		layoutMode: 'masonry',
		animationOptions: {
			duration: 750,
			easing: 'linear',
			queue: false,
		},
		// resizeContainer: false // turn off so that it doesn't resize
	});

	//Isotope grid for blog posts
	var $blogContainer= $('.grid-blog');
	$blogContainer.isotope({
		itemSelector: '.blog-posts',
		layoutMode: 'masonry',
		animationOptions: {
			duration: 750,
			easing: 'linear',
			queue: false,
		}
	});

	//we assign the elements to pass to our filters
	$('.project-sidebar .filter-container').click(function(){

		var selector = $(this).children('button').attr('data-filter');
		// var selector = "." + $(this).attr('class').split(' ').pop();
		$grid.isotope({
			filter: selector,
			animationOptions: {
			duration: 750,
			easing: 'linear',
			queue: false,
		}
		});
	});

	//*** 
	// Project Thumbs 
	//***

	//adding a toggle class for the buttons in the project thumbs
	var $sidebarElements = $('.filter-container');
	$sidebarElements.on('click', function () {
		
		$sidebarElements.each( function (i) {// we check other elements with smae class to remove the class previously
			var that = $(this);// we pass this to a variable
			if (that.hasClass('is-checked')) that.removeClass('is-checked');// we check it if the element has already being selected
		});
		$(this).toggleClass("is-checked");// we toggle our class
	});


	//*** Let's animate the text in the Work header ***///
	var cnt = 0;
	var fieldsOfExpertise = [' Experiential ', ' Digital Fabrication ', ' Product Development ', ' User Experience ', ' Computation ', ' Creative Coding '];
	var fieldColor = ['#5ce2cd', '#a92f65', '#b5d746', '#f77fa3', '#f4b55e', '#7b55f3'];

	function slideExpertiseText () {

		if (cnt>= fieldsOfExpertise.length) cnt=0;// we reset our counter
		var $expertiseTextField = $("#expertise-areas");// we pass the id of the element we want to change
		$expertiseTextField.css({
			"color": fieldColor[cnt],
		});
		$expertiseTextField.html(fieldsOfExpertise[cnt++]);//we switch the text
		$expertiseTextField.fadeIn('slow').animate({opacity: 1.0}, 1000).fadeOut('slow', function () {
			return slideExpertiseText();// we call the function repeteadly
		});
		// console.log("cnt value: ", cnt);
		// console.log("textArray length: ", fieldsOfExpertise.length);
	}

	slideExpertiseText();// we evoke our function

	//*** 
	// Contact Form - Adding Classes 
	//***

	var $nameField = $("#contact-name").find('span').find('input');// we look for input fields
	$nameField.addClass("contact-name-input");// pass a class we are familiar with

	var $emailField = $("#contact-email").find('span').find('input');
	$emailField.addClass("contact-email-input");	

	var $subjectField = $("#contact-subject").find('span').find('input');
	$subjectField.addClass("contact-subject-input");	

	var $messageField = $("#contact-text-field").find('span').find('textarea');
	$messageField.addClass("contact-text-field-input");

	var $buttonField = $("#contact-submit").find('input');
	$buttonField.addClass("contact-submit-button");

	//*** Comment Form - Adding Classes ***//

	var $commentLabel = $(".comment-form-comment").find("label");
	var $commentTextField = $("#comment");
	$commentTextField.addClass("comment");
	$commentLabel.addClass("comment");

	var $commentAuthor = $(".comment-form-author").find("label");
	var $commentAuthorField = $("#author");
	$commentAuthorField.addClass("comment");
	$commentAuthor.addClass("comment");
	
	var $commentEmail = $(".comment-form-email").find("label");
	var $commentEmailField = $("input#email");// we specify an input
	$commentEmailField.addClass("comment");
	$commentEmail.addClass("comment");

	var $commentUrl = $(".comment-form-url").find("label");
	var $commentUrlField = $("#url");
	$commentUrlField.addClass("comment");
	$commentUrl.addClass("comment");

	var $formElements = $("form#commentform").find("p");
	$formElements.each(function () {
		var that = $(this);
		that.addClass("comment-form-class");// we add a general class to our <p> elements

	});

	///* 
	// Add class to <a> inside nav bar elements 
	//*/

	var $navBarMenuelement = $('.page_item').find('a').each( function (element, i){
		$(this).addClass('page-item-a');
	});

	/* Responsive Videos */
	$(".container").fitVids();

	// if (location.pathname == '/tire-gauge/'){
	// 	// console.log(" we are here");
	// }
	/* Hamburguer Menu - Left Menu*/
	var $leftSlide = $('[data-toggle=slide-left]');
	var slideLeftAtt = $leftSlide.attr('data-target');
	$leftSlide.on('click', function (event){
		// if ($(slideLeftAtt).hasClass('in') || $('.wrapper').hasClass('out')){
			$(slideLeftAtt).toggleClass('in');
			$(".wrapper").toggleClass('out');
		// }
		console.log("it was clicked");
	});

	//
	//Adding logos
	//

	var divForWorkLogo = [
							"<div class='work-logo'>",
							"</div>"
						 ].join('\n'),
		divForAboutLogo = [
							"<div class='about-logo'>",
							"</div>"
						 ].join('\n'),
		divForBlogLogo = [
							"<div class='blog-logo'>",
							"</div>"
						 ].join('\n');

	var logos = [divForWorkLogo, divForAboutLogo, divForBlogLogo];

	var $navBar = $('.left-slide-nav');
	// console.log($navBar);
	$navBar.find('li').each(function (key, value) {
		$(this).prepend(logos[key]);
		// console.log($(this), logos);
	});
	// console.log($navBar.find().children());






});