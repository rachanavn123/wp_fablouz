$(document).ready(function() {
    // Load all partials
    $(".curtains").load("src/partials/curtains.html", function() {});
    $(".upholstery").load("src/partials/upholstery.html", function() {});
    $(".wallCoverings").load("src/partials/wall-coverings.html", function() {});
    $(".wtowCarpets").load("src/partials/wtow-carpets.html", function() {});
    $(".rugs").load("src/partials/rugs.html", function() {});
    $(".woodenFloor").load("src/partials/wooden-floor.html", function() {});
    $(".bedLeninBath").load("src/partials/bed-lenin-bath.html", function() {});
    $(".accessaries").load("src/partials/accessaries.html", function() {});

    // Regoster a click handler
    $("#collectionLevel1 li").on("click", function(e) {          
        var element = $("." + e.currentTarget.id);

        // TODO: remove parallax-mirror after moving to alternate solution for parallax
        $("main, .parallax-mirror").hide();

        $(".partials").hide();
        element.show();

        $("#collectionLevel1 li.active").removeClass("active");
        $(e.currentTarget).addClass("active");        
        $("#collection-menu").addClass("active");

        $(".owl-carousel").owlCarousel({autoplay: false});
    });
});