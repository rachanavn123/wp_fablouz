$(document).ready(function() {
    $(".owl-carousel").owlCarousel({
        nav : true, // Show next and prev buttons
        loop: true,
        items: 1,
        margin: 10,
        autoplay: true
        // "singleItem:true" is a shortcut for:
        // items : 1,
        // itemsDesktop : false,
        // itemsDesktopSmall : false,
        // itemsTablet: false,
        // itemsMobile : false
    });

    // Scroll to About or Contact
    $(".scroll-to").on("click", function(e) {
        e.preventDefault();
        e.stopPropagation(); 
        
        // Check if view is scrolled to the bottom
        if(!($(window).scrollTop() + window.innerHeight === $(document).height())) {
            var scrollTo = $("." + $(e.target).data("scrollto")),
                container = $("body");

            container.animate({
                scrollTop: scrollTo.offset().top - container.offset().top + container.scrollTop()
            });
        }
    });

    function mediaSize() {
        var tablet = '(min-width: 768px) and (max-width: 979px) and (orientation: portrait)',
            mobile = '(min-width: 320px) and (max-width: 767px)',
            mobilePlusTablet = '(min-width: 320px) and (max-width: 979px) and (orientation: portrait)',
            adjustedTop = window.matchMedia(tablet).matches 
                ? 592 : window.matchMedia(mobile).matches 
                ? 320 : 400;

		if (window.matchMedia(tablet).matches) {
	    	$("#collectionLevel1, #collectionLevel2").addClass("in");
		} else {
            $("#collectionLevel1, #collectionLevel2").removeClass("in");
        }

        if (window.matchMedia(mobilePlusTablet).matches) {
            $("#nav").addClass("touch-device");
        } else {
            $("#nav").removeClass("touch-device");
        }

        // TODO: Remove timeout for production
        setTimeout(function() {
            // Afix prodcut selection section
            $(".partials-details-selection").affix({
                offset: {
                    top: adjustedTop
                }
            });
        }, 500);
	};

    /* Call the function */
    mediaSize();

    /* Attach the function to the resize event listener */
    window.addEventListener('resize', mediaSize, false);

    $('#nav-icon3').click(function() {
        var nav = $(".nav.nav-stacked");

        $(this).toggleClass('open');
        
        if (nav.hasClass("open")) {
            nav.slideUp(500, function(e) {            
                nav.removeClass("open");
            });
        } else {
            nav.slideDown(500, function(e) {            
                nav.addClass("open");
            });
        }      
	});

    // Reveal or hide menu on scroll up or down respectively
    var previousScroll = 0,
        menu = $("#nav");

    $(window).scroll(function() {
        if (menu.hasClass("touch-device")) {
            var currentScroll = $(this).scrollTop();
            if (currentScroll > previousScroll) {
                menu.removeClass("slideInDown")
                    .addClass("slideOutUp")
                    .addClass("animated");
            } else {
                menu.removeClass("slideOutUp")
                    .addClass("slideInDown")
                    .addClass("animated");
            }
            previousScroll = currentScroll;
        }
    });

    // Parallax
    // TODO: For iOS devices parallax is not that smooth. May be use different one.
    $(".parallax-window").parallax({
        // iosFix: false,
        // androidFix: false
    });

    // Menu actions 
    $("#collection-menu").on("click", function() {
        $("main, .parallax-mirror").show();            
        $(".partials").hide();

        $("#collection-menu").removeClass("active");
        $("#collectionLevel1 li").removeClass("active");
        $(".owl-carousel").owlCarousel({autoplay: true});
    });

    // Scroll to top on scroll
    $("#content").sectionsnap({
        delay : 20, 
        selector : '.section-snap', 
        reference : 1, 
        animationTime : 200,
        offsetTop: 100
    });   
});

// Show the map
function initMap() {
    var carpetUdyog = {lat: 13.0019842, lng: 77.5688824};
    var map = new google.maps.Map(document.querySelector('.maps'), {
        scrollwheel: false,
        zoom: 17,
        center: carpetUdyog
    });

    var marker = new google.maps.Marker({
        position: carpetUdyog,
        map: map,
        title: "Carpet Udyog"
    });
}