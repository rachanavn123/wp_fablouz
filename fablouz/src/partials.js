$(document).ready(function() {
    // Load all partials
   // $(".curtains").load("src/partials/curtains.php", function() {});
    // $(".upholstery").load("src/partials/upholstery.html", function() {});
    // $(".wallCoverings").load("src/partials/wall-coverings.html", function() {});
    // $(".wtowCarpets").load("src/partials/wtow-carpets.html", function() {});
    // $(".rugs").load("src/partials/rugs.html", function() {});
    // $(".woodenFloor").load("src/partials/wooden-floor.html", function() {});
    // $(".bedLeninBath").load("src/partials/bed-lenin-bath.html", function() {});

    console.log(" inside partials")
   // $(".accessaries").load("src/partials/accessaries.html", function() {
        // TODO: We may have to run the loop here to handle other select boxes on other sections
        $('.selectpicker').on('changed.bs.select', function (event, clickedIndex) {
            // Show all
            if (event.target.value === "all") {
                var list = $('.partials-details').filter(function() {
                    return $(this).data("filter");
                });

                list.show();
            } else {
                // Show selected 
                var showlist = $('.partials-details').filter(function() {
                    return $(this).data("filter") === event.target.value;
                });

                showlist.show();
                
                // Hide not selected
                var hideList = $('.partials-details').filter(function() {
                    return $(this).data("filter") !== event.target.value;
                });

                hideList.hide();
            }
        });
   // });

   // $(".productDetails").load("src/partials/product-details.html", function() {
        
    //});

    // Register a click handler
    $("#collectionLevel1 li").on("click", function(e) {          
        var element = $("." + e.currentTarget.id),
            menu = $("#nav");

        // TODO: remove parallax-mirror after moving to alternate solution for parallax
        $("main, .parallax-mirror").hide();

        $(".partials").hide();
        element.show();

        $("#collectionLevel1 li.active").removeClass("active");
        $(e.currentTarget).addClass("active");        
        $("#collection-menu").addClass("active");

        $(".owl-carousel").owlCarousel({autoplay: false});

        if (menu.hasClass("touch-device")) {
            $('#nav-icon3').trigger("click");
        }
    });

    window.onProductClick = function(productId, pageName) {
        
        $(".partials").hide();
        $(".productDetails").show();
         $.ajax({
        url:  my_ajax_object.ajax_url,
        data: {
            'action':'get_images',
            'productId' : productId,
            'pageName': pageName
        },
        async: false,
        datatype: 'json',
        success:function(value) {
            // This outputs the result of the ajax request
            console.log(" alsdjflkasdfl;j 123 --> ", value);
            $("#owl-product-container").append('<div id="owl-product-details" class="owl-carousel owl-theme product-details-carousel">' + value.options + '</div>');
            $("#section-header").append( value.section_header);
            $("#product-detail-description").append( value.long_description);
            $("#product-id").append( value.productId);
            $("#product-size").append( value.productSize);
            $("#product-price").append( "Rs. " + value.price);

            
            $("#owl-product-details").owlCarousel({
                nav : true, // Show next and prev buttons
                loop: true,
                items: 1,
                margin: 10,
                autoplay: true
            });
            
        },
        error: function(errorThrown){
            console.log(errorThrown);
        }
    });
    };

    window.closeDetails = function() {
        $("#owl-product-details").remove();
        $("#section-header").html( '');
        $("#product-detail-description").html('');
        $("#product-id").html('');
        $("#product-size").html('');
        $("#product-price").html('');
        
        $(".productDetails").hide();
        $("." + $("#collectionLevel1 li.active").attr("id")).show();
    }; 
}); 