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

    // $("#collection-menu, #scocial-menu").on("click", function(e) {
    //     console.log("click");
    //     e.preventDefault();
    //     e.stopPropagation(); 
    // });

    function mediaSize() {
        var tablet = '(min-width: 768px) and (max-width: 979px) and (orientation: portrait)',
            mobilePlusTablet = '(min-width: 320px) and (max-width: 979px) and (orientation: portrait)';

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
	};

    /* Call the function */
    mediaSize();

    /* Attach the function to the resize event listener */
    window.addEventListener('resize', mediaSize, false);

    $('#nav-icon3').click(function() {
		$(this).toggleClass('open');
        $(".nav.nav-stacked").toggleClass("open");
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
