(function($) {

	$.fn.single = function(options) {

		var opts = $.extend({}, $.fn.single.defaults, options);

		return this.each(function(){

			// Get the instance
			var element = $(this);

			// Resize the "data-target" divs
			changeCSS(element);
			// Resize all the "data-img='true'" images
			changeIMG(opts);

			// Bind the methods changeCSS and changeIMG to the resize window event
			$(window).bind("resize", function(){  
				changeCSS(element);  
				changeIMG(opts);
			});

			// Bind the method click to the data-link
			$("[data-link]").bind("click", function(event){  
				event.preventDefault();
				goToSection(this, opts);  
			});

		});

	};

	// function to resize all the "data-target" divs
	function changeCSS(element) {

		// Grab the screen resolution
		var windowWidth 	= "100%";
		var windowHeight	= $(window).height();
		// Count how many targets the div has
		var targetsSize		= $("[data-target]").size();

		// Resize the parent div
		$(element).css({
			"width" : windowWidth,
			"height": windowHeight * targetsSize
		});

		// Resize all the targets div
		$(element).children("div[data-target]").each(function(){
			$(this).css({
				"width" : windowWidth,
				"height": windowHeight
			});
		});

	}

	// function to resize the images
	function changeIMG(opts) {

		// Grab the screen resolution
		windowWidth 	= $(window).width();
		
		$("img[data-img='true']").each(function(index, element){

			src			= $(element).attr('src');
			imgName		= "";
			imgFinal	= "";
			imgSplit	= {};
			imagePrefix	= checkResolution(windowWidth, opts);

			if ( src.match("/") ) { // Match if there's a full URL at the IMG src and cut it
				re 	= new RegExp(".*\/(.*)$");
				m 	= re.exec(src);    
				imgName = m[1];
			} else {
				// Just the img without an URL
				imgName = src;
			}

			if( imgName.match(/\-\w+/) ) {

				src = src.replace(/\-\w+/, imagePrefix);

			} else {

				// Split the name of the extension
				imgSplit 	= imgName.split('.'); 

				// Replace the name with the image prefix
				imgFinal	= imgSplit[0] + imagePrefix + '.' + imgSplit[1];
				src 		= src.replace(imgName, imgFinal);

			}

			// Replace the image
			$(element).attr('src', src);

		});

	}

	// function to scroll the page to a section
	function goToSection(link, opts) {

		var goingTo 		= $(link).attr('data-link'); // get the data-link value
		var targetPosition 	= $('[data-target="'+goingTo+'"]').position().top; // get the position of the target

		// jQuery Easing animation
		$("html, body").animate({
			scrollTop: targetPosition
		}, {
			duration: opts.speed,
			easing: opts.animation
		});

	}

	// function to check the resolution and return the prefix for the image
	function checkResolution(windowWidth, opts) {

		if (windowWidth <= 480) {
			return opts.sufixes.smallest;
		} 

		if(windowWidth > 480 && windowWidth <= 767) {
			return opts.sufixes.small;
		} 

		if(windowWidth > 767 && windowWidth <= 979) {
			return opts.sufixes.medium;
		} 

		if(windowWidth > 979) {
			return opts.sufixes.normal;
		}

	}

	// Plugin defaults
	$.fn.single.defaults = {
		speed: 2000,
		animation: "easeOutExpo",
		sufixes: {
			smallest: "-smallest",
			small   : "-small",
			medium  : "-medium",
			normal  : "" // Leave blank for no prefix
		}
	};

})(jQuery);