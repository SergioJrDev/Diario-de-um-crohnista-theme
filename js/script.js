$(document).ready(function(){
 	$('.hamburger').click(function() {
 		$(this).toggleClass('is-active');
 		if($(".nav-content").hasClass('showMenu')) {
 			$(".nav-content").removeClass('showMenu').slideUp('slow');
 		} else {
 			$(".nav-content").addClass('showMenu').slideDown('slow');
 		}
 	});


    $(".owl-carousel").owlCarousel({
        items: 1
    });

});
