$(document).ready(function() {
	
	// Add class to ALL imgages
	$("img").addClass("img-fluid");
	
	
	// function checkOffset() {
	//   var a=$(document).scrollTop()+window.innerHeight;
	//   var b=$('#footer').offset().top;
	//   if (a<b) {
	//     $('#floating-swirl').css('bottom', '0');
	//   } else {
	//     $('#floating-swirl').css('bottom', (0+(a-b))+'px');
	//   }
	// }
	// $(document).ready(checkOffset);
	// $(document).scroll(checkOffset);
	
	
	var width = $(window).width();
	
	// if ((width > 769)) {
	// 	$('#mega-menu-primary ul').prepend('<li class="pointer"><i class="fa fa-caret-up" aria-hidden="true"></i></li>');
		
	// 	$( '#mega-menu-primary ul li ul li.pointer' ).remove();
	// }




	// $(function() {
	
	// 	var navDisplay 	= $(".awards");
	// 	var iScrollPos = 0;
	// 	$(window).scroll(function () {
			
	// 		//if ((width > 1025)) {
		
	// 		    var iCurScrollPos = $(this).scrollTop();
			
	// 		    if (iCurScrollPos > iScrollPos) {
			
	// 		        if (iCurScrollPos >= 300) {
	// 					navDisplay.fadeOut(500);
	// 				}
	// 				//console.log('Scroll down', 'current pos ',iCurScrollPos, 'past pos',iScrollPos);
	// 		    }
			    
	// 		    if (iScrollPos > iCurScrollPos) {

	// 				if (iCurScrollPos <= 100) {
	// 					navDisplay.fadeIn(200);
	// 				}
			
			       
	// 			   console.log('Scroll up', 'current pos ',iCurScrollPos, 'past pos',iScrollPos);
	// 		    }
			
	// 		    iScrollPos = iCurScrollPos;
	// 	   //}
	// 	});
	// });



	
	
	
	// $('.learn-more').click(function () {
    //      $('.extended-txt').slideToggle(1200, 'easeOutQuint');
    //      return false; 
    // });
	
	

	
// 	$('.p-learn-more').click(function() {
//        $(this).closest('div').find('.p-extended-txt').slideToggle(1200, 'easeOutQuint');
// 	   return false;
//    });
	
	

//    $('.entry-content hr').last().addClass('last');
	



	// Add Carousel mobile swipe action
//	$("#gallery-carousel").swiperight(function() {  
//		$(this).carousel('prev');  
//	});  
//	$("#gallery-carousel").swipeleft(function() {  
//		$(this).carousel('next');  
//	});
//
//
//
//	$("#fundation-carousel_1").swiperight(function() {  
//		$(this).carousel('prev');  
//	});  
//	$("#fundation-carousel_1").swipeleft(function() {  
//		$(this).carousel('next');  
//	});
//	
//	
//




//	$('#homeCarousel').on('slide.bs.carousel',function(){
//		$('.txt-block .small-txt').fadeOut(20);
//		$('.txt-block .big-txt').fadeOut(20);
//	});
//	$('#homeCarousel').on('slide.bs.carousel',function(){
//		$('.txt-block .small-txt').fadeIn(2000);
//		$('.txt-block .big-txt').fadeIn(3000);
//	});
	
	
	// $('#testimonial-carousel').on('slide.bs.carousel',function(){
	// 	$('.quote-mark').fadeOut(20);
	// });
	// $('#testimonial-carousel').on('slide.bs.carousel',function(){
	// 	$('.quote-mark').fadeIn(2000);
	// });
	
	

	// $("#testimonial-carousel").swiperight(function() {  
	// 	$(this).carousel('prev');  
	// });  
	// $("#testimonial-carousel").swipeleft(function() {  
	// 	$(this).carousel('next');  
	// });
	
	
	
	// (function(){
	  
	//   $('#carousel-home').carousel({ interval: 200000 });
	//   //$('#carouselABC').carousel({ interval: 3600 });
	// }());
	



	// $(function(){
	// 	$('.carousel-showmanymoveone .item').each(function(){
	// 		var itemToClone = $(this);

	// 		for (var i=1;i<3;i++) {
	// 			itemToClone = itemToClone.next();

	// 			// wrap around if at end of item collection
	// 			if (!itemToClone.length) {
	// 				itemToClone = $(this).siblings(':first');
	// 			}

	// 			// grab item, clone, add marker class, add to collection
	// 			itemToClone.children(':first-child').clone()
	// 			.addClass("cloneditem-"+(i))
	// 			.appendTo($(this));
	// 		}
	// 	});
	// });



	// $(function() {
	// 	$('.jcarousel').on('jcarousel:create jcarousel:reload', function() {
	// 		var element = $(this),
	// 			width = element.innerWidth();
	
	// 		if (width > 900) {
	// 			width = width / 3;
	// 		} else if (width > 600) {
	// 			width = width / 2;
	// 		}
	
	// 		element.jcarousel('items').css('width', width + 'px');
	// 	})
	// 	.jcarousel({
	// 		// Your configurations options
	// 		wrap: 'circular'
	// 	});

	// 	$('.jcarousel').jcarousel({
	// 		animation: {
	// 			duration: 1500,
	// 			easing:   'easeInOutCubic',
	// 			complete: function() {
	// 			}
	// 		}
	// 	});


	// 	$('.jcarousel').jcarouselSwipe({
	// 		draggable: false // by default true
	// 	});

	// 	$('.jcarousel-prev').jcarouselControl({
	// 		target: '-=1'
	// 	});
	
	// 	$('.jcarousel-next').jcarouselControl({
	// 		target: '+=1'
	// 	});
	// });

	

	
	
	
//	$(function() {
//	    function reposition() {
//	        var modal = $(this),
//	            dialog = modal.find('.modal-dialog');
//	        modal.css('display', 'block');
//	        
//	        // Dividing by two centers the modal exactly, but dividing by three 
//	        // or four works better for larger screens.
//	        dialog.css("margin-top", Math.max(0, ($(window).height() - dialog.height()) / 2));
//	    }
//	    // Reposition when a modal is shown
//	    $('.modal').on('show.bs.modal', reposition);
//	    // Reposition when the window is resized
//	    $(window).on('resize', function() {
//	        $('.modal:visible').each(reposition);
//	    });
//	});
	
	
	
	
//	$('.post-block').hover(
//
//		function () {
//			$(this).find('.fa').animate({
//			 	right: '45px'
//			}, 500, 'easeInOutQuad');
//		},
//		
//		function () {
//		 	$(this).find('.fa').animate({
//		     	right: '30px'
//		 	}, 500 );
//		}
//	);


	// $(document).on('click', 'a[href^="#"]', function (event) {
	// 	event.preventDefault();

	// 	$('html, body').animate({
	// 		scrollTop: $($.attr(this, 'href')).offset().top
	// 	}, 500);
	// });


	// $('a[href*="#"]')
	// // Remove links that don't actually link to anything
	// .not('[href="#"]')
	// .not('[href="#0"]')
	// //.not([data-toggle])
	// .click(function(event) {

	// $('#menu-main-menu a[href*=#]:not([href=#])').click(function(event) {
	//   // On-page links
	//   if (
	// 	location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
	// 	&& 
	// 	location.hostname == this.hostname
	//   ) {
	// 	// Figure out element to scroll to
	// 	var target = $(this.hash);
	// 	target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
	// 	// Does a scroll target exist?
	// 	if (target.length) {
	// 	  // Only prevent default if animation is actually gonna happen
	// 	  event.preventDefault();
	// 	  $('html, body').animate({
	// 		scrollTop: target.offset().top
	// 	  }, 2000, 'easeInOutQuad', function() {
	// 		// Callback after animation
	// 		// Must change focus!
	// 		var $target = $(target);
	// 		$target.focus();
	// 		if ($target.is(":focus")) { // Checking if the target was focused
	// 		  return false;
	// 		} else {
	// 		  $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
	// 		  $target.focus(); // Set focus again
	// 		};
	// 	  });
	// 	}
	//   }
	// });

	

	
	// $("#share").jsSocials({
	// 	showLabel: false,
	// 	showCount: false,
	// 	shareIn: "popup",
	// 	shares: ["twitter", "googleplus", "linkedin", "email" ]
	// });
    
	
	

});







