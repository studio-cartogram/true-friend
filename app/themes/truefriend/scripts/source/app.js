/*
App controls all the JS functionality specifically for E1.com
*/
var App = {};

/**
 * Form Elements
 */



/**
 * Form Toggle
 */

var interchangeImages = (function() {

	function init() {
		$(document).foundation('interchange', {
			named_queries : {
				my_custom_query : 'only screen and (max-width: 200px)'
			}
		});
	}
	return { init : init };

})();

/**
 * Form Elements
 */

var formElements = (function() {

	function activateDropdowns() {
		$('select').easyDropDown();
	}

	function activatePlaceHolders() {
		/*
			From https://github.com/neojp/gravity-forms-placeholders/blob/master/gf.placeholders.js
			For added placeholders to gravity forms.

		*/

		$('.gform_wrapper')
			.find('input, textarea').filter(function(i){
				
				var $field = $(this);

				if (this.nodeName=== 'INPUT') {
					var type = this.type;
					return !(type === 'hidden' || type === 'file' || type === 'radio' || type === 'checkbox');
				}

				return true;
			})
			.each(function(){
				var $field = $(this);

				var id = this.id;
				// var $labels = $('label[for=' + id + ']').hide();
				var $labels = $('label[for=' + id + ']');
				var label = $labels.last().text();

				if (label.length > 0 && label[ label.length-1 ] === '*') {
					label = label.substring(0, label.length-1) + ' *';
				}

				$field[0].setAttribute('placeholder', label);
			});
		//end placholder iterations.
	}



	function init() {
		activateDropdowns();
		activatePlaceHolders();
	}

	return { init : init };

})();
    

/**
 * Form Toggle
 */

var formToggle = (function() {

	var config = {
		$toggle		:	$( '.js-form-toggle' ),
		$form		:	$( '.js-form' ),
		$formWrap	:	$( '.js-contact-warp' )


	};

	function init() {
		config.$toggle.on('click' , function() {
			config.$form.toggleClass('island--open');
		});
	}
	return { init : init };

})();

/**
 * Responsive Navigation Bar
 */

var responsiveBar = (function() {
	var config = {
		$navFixed	:	$( '.js-nav-fixed' ),
		$navTrigger	:	$( '.js-nav-trigger' ),
		$navFixedLinks	:	$( '.js-nav-fixed ul li a' )
	};

	function init() {
		config.$navTrigger.on('click' , function() {
			config.$navFixed.toggleClass('bar--open');
		});
		config.$navFixedLinks.on('click' , function() {
			config.$navFixed.toggleClass('bar--open');
		});
	}
	return { init : init };

})();

/**
 * Fit Text
 * https://github.com/davatron5000/FitText.js
 */

 var fitText = (function() {
	var config = {
		$fitTextHeadline	:	$(".section-title")
	};

	function init() {
		config.$fitTextHeadline.fitText();

	}
	return { init : init };

})();


/**
 * Adds Super slider
 * https://github.com/cmpolis/scrollIt.js/
 */

var slider = (function() {
	var config = {
		$slider		:	$( '.slides' )
	};

	function init() {
		config.$slider.superslides();
		config.$slider.waypoint( function( direction ) {
			config.$slider.find(".slides-navigation").addClass('slides-navigation--active');
		});
	}

	return { init : init };

})();



/**
 * Adds keyboard shortcuts for the different sections.
 * https://github.com/cmpolis/scrollIt.js/
 */

var scrollIt = (function() {

	function init() {
		$.scrollIt({
			easeing: 'easeInOutExpo',
			scrollTime: 500,
		});
	}

	return { init : init };

})();


/**
 * Build in some basic parallax for the top landing area.
 * http://codepen.io/eugene823/pen/vDqkC
 */
var parallax = (function() {

	var config = {
		$logoPart1 : $( '.logo__part--1' ),
		$logoPart2 : $( '.logo__part--2' ),
		$logoPart3 : $( '.logo__part--3' ),
		$logoPart4 : $( '.logo__part--4' )
	};

	function init() {
		$(window).scroll(function() {
			var scrollPos = $(this).scrollTop();
			
			if (scrollPos < 800) {
				config.$logoPart1.css({
					'margin-left': -(scrollPos/4)+"px",
					'opacity': 1-(scrollPos/600)
				});

				config.$logoPart2.css({
					'margin-top': (scrollPos/4)+"px",
					'opacity': 1-(scrollPos/600)
				});

				config.$logoPart3.css({
					'margin-left': (scrollPos/4)+"px",
					'opacity': 1-(scrollPos/600)
				});

				config.$logoPart4.css({
					'margin-top': -(scrollPos/4)+"px",
					'opacity': 1-(scrollPos/600)
				});
			}
		
		});
	}

	return { init : init };

})();

/**
 * Fix the Naviagtion when it scrolls into focus at the bottom.
 */
var fixNavigationBar = (function() {

	var config = {
		$windowHeight : $(window).height(),
		$navFixed : $( '.js-nav-fixed' ),

		$navFixedHeight : $( '.js-nav-fixed' ).height(),
		
		$headerEnterProcess : $( '.js-waypoint-process' ),
		$headerEnterCaseStudies : $( '.js-waypoint-case-studies' ),
		$headerEnterContact : $( '.js-waypoint-contact' ),
		$caseStudyActive : $( '.js-waypoint-casestudies' )
	};


	var mapIsShowing = false;
	var	navIsFixed = false;

	function init() {
		
		$(window).resize( $.throttle( 0, scroller ));
		$(window).scroll( $.throttle( 0, scroller ));

		// config.$navFixed.waypoint(function(direction) {
		// 	if( direction === 'down' ) {
		// 			config.$navFixed.addClass('fixed');
		// 			navIsFixed = true;
		// 			//console.log('1');
		// 		} else if (direction === 'up') {
		// 			config.$navFixed.removeClass('fixed');
		// 			navIsFixed = false;
		// 			//console.log('2');
		// 		}
		// 	}, { offset: function() {
		// 		return $(window).height() - $(this).height();
		// 	}
		// });


		// config.$caseStudyActive.waypoint(function() {
		// 	if( direction === 'down' ) {
		// 		//console.log(direction);
		// 	} else if( direction === 'up' ) {
		// 		//console.log(direction);
		// 	}
		// }, { offset: function() {
		// 		return -$(this).height();
		// });

		config.$headerEnterProcess.waypoint(function(direction) {
			if( direction === 'down' ) {
				config.$navFixed.addClass('nav--process--enter');
			}
			else if( direction === 'up' ){
				config.$navFixed.removeClass('nav--process--enter');
			}

		}, { offset: 100 });

		config.$headerEnterCaseStudies.waypoint(function(direction) {
			if( direction === 'down' ) {
				config.$navFixed.removeClass('nav--process--enter');
				config.$navFixed.addClass('nav--casestudies--enter');
			}
			else if( direction === 'up' ){
				config.$navFixed.removeClass('nav--casestudies--enter');
				config.$navFixed.addClass('nav--process--enter');
			}
		}, { offset: 100 });

		config.$headerEnterContact.waypoint(function(direction) {
			if( direction === 'down' ) {
				config.$navFixed.removeClass('nav--casestudies--enter');
				if(mapIsShowing === false) { 
					initialize();
					mapIsShowing = true;
				}
			}
			else if( direction === 'up' ){
				config.$navFixed.addClass('nav--casestudies--enter');
			}
		});
	}

	// function checkFix() {
	// 	if(navIsFixed === true) {
	// 		config.$navFixed.addClass('fixed');
	// 	}
	// }
	// function hardFix() {
	// 	config.$navFixed.addClass('fixed');
	// 	navIsFixed = true;
	// }

	function scroller() {
		var scrollPos = $(window).scrollTop();

		if(scrollPos >= config.$navFixedHeight) {
			config.$navFixed.addClass('fixed');
		} else {
			config.$navFixed.removeClass('fixed');
		}
	}


	

	return { init : init };

})();




/**
 * http://www.codrops.com
 *
 * Licensed under the MIT license.
 * http://www.opensource.org/licenses/mit-license.php
 * 
 * Copyright 2013, Codrops
 * http://www.codrops.com
 */
var scroller = (function() {

	// cache and initialize some values
	var config = {
		// the scroller's sections
		$sectionsAnchors : $( '#scroller > section.anchor' ),

		$sections : $( '#scroller > section' ),

		// the navigation links
		$navlinks : $( '.js-trigger-scroll li' ),
		// index of current link / section
		currentLink : 0,
		// the body element
		$body : $( 'html, body' ),
		// the body animation speed
		animspeed : 650,

		gotonextLink : $( '.js-gotonext' ),
		// the body animation easing (jquery easing)
		animeasing : 'easeInOutExpo'
	};

	function init() {

		// click on a navigation link: the body is scrolled to the position of the respective section
		config.$navlinks.on( 'click', function() {
			scrollAnim( config.$sectionsAnchors.eq( $( this ).index() ).offset().top );
			return false;
		});

		config.gotonextLink.on( 'click', function() {
			goToNextSection()
		});

		$(document).keydown(function(e) {
			switch (e.keyCode) {
			case 37:
			    goToNextSection()
			    break;
			case 39:
			    goToPrevSection()
				break;
			}
		});


		// 2 waypoints defined:
		// First one when we scroll down: the current navigation link gets updated. A "new section" is reached when it occupies more than 70% of the viewport
		// Second one when we scroll up: the current navigation link gets updated. A "new section" is reached when it occupies more than 70% of the viewport
		config.$sectionsAnchors.waypoint( function( direction ) {
			if( direction === 'down' ) {
				changeNav( $( this ) );
			}
		}, { offset: '30%' } ).waypoint( function( direction ) {
			if( direction === 'up' ) {
				changeNav( $( this ) );
			}
		}, { offset: '-30%' } );

		// config.$sections.waypoint( function( direction ) {
		// 	if( direction === 'down' ) {
		// 		$('.current-section').removeClass('current-section');
		// 		$( this ).addClass('current-section');
		// 	}
		// }, { offset: '30%' } ).waypoint( function( direction ) {
		// 	if( direction === 'up' ) {
		// 		$('.current-section').removeClass('current-section');
		// 		$( this ).addClass('current-section');
		// 	}
		// }, { offset: '-30%' } );

		// on window resize: the body is scrolled to the position of the current section
		
		// $(window).resize( $.throttle( 100, function() {
		// 	scrollAnim( config.$sectionsAnchors.eq( config.currentLink ).offset().top );
		// }));
	}

	// update the current navigation link
	function changeNav( $section ) {
		config.$navlinks.eq( config.currentLink ).find('a').removeClass( 'current' );
		config.currentLink = $section.index( 'section.anchor' );
		config.$navlinks.eq( config.currentLink ).find('a').addClass( 'current' );
	}

	// function to scroll / animate the body
	function scrollAnim( top ) {
		config.$body.stop().animate( { scrollTop : top }, config.animspeed, config.animeasing );
	}

	function goToNextSection() {
		scrollAnim( config.$sections.eq( config.currentLink ).next(config.$sections).offset().top );
	// 	scrollAnim( config.$sectionsAnchors.eq( config.currentLink ).offset().top );
	// 	return false;
	};
	function goToPrevSection() {
		scrollAnim( config.$sections.eq( config.currentLink).prev().offset().top );
	// 	return false;
	};

	return { init : init };

})();

/*
Initialize all functionality for the page after document is ready.
*/
App.init = function () {
	
	slider.init();
	//scrollIt.init();
	scroller.init();
	parallax.init();
	fixNavigationBar.init();
	responsiveBar.init();
	formToggle.init();
	formElements.init();
	fitText.init();
};

/*
Entry point into the file.
*/
jQuery(document).ready(function() {
	App.init();
});



