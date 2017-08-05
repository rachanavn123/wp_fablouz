<!DOCTYPE html>
<html>
<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Access-Control-Allow-Origin" content="*">

<title><?php bloginfo( 'title' ); ?></title>

<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">

<link href="<?php bloginfo('template_url');?>/lib/bootstrap-3.3.7/css/bootstrap.min.css" rel="stylesheet" type="text/css"></link>
<link href="<?php bloginfo('template_url');?>/lib/bootstrap-select.min.css" rel="stylesheet" type="text/css"></link>
<link href="<?php bloginfo('template_url');?>/lib/OwlCarousel2-2.2.1/dist/assets/owl.carousel.min.css" rel="stylesheet" type="text/css"></link>
<link href="<?php bloginfo('template_url');?>/lib/OwlCarousel2-2.2.1/dist/assets/owl.theme.default.min.css" rel="stylesheet" type="text/css"></link>
<link href="<?php bloginfo('template_url');?>/lib/animate.css" rel="stylesheet" type="text/css"></link>

<link href="<?php bloginfo('template_url');?>/styles/hamburger.css" rel="stylesheet" type="text/css"></link>
<link href="<?php bloginfo('template_url');?>/styles/styles.css" rel="stylesheet" type="text/css"></link>
<link href="<?php bloginfo('template_url');?>/styles/partials.css" rel="stylesheet" type="text/css"></link>

<link href="<?php bloginfo("stylesheet_url") ?>" rel="stylesheet" type="text/css" media="screen" />

<?php wp_head(); ?>
</head>
<body>
    <?php  get_sidebar(); ?>
    
    <div id="wrapper">
        <div class="container-fluid" id="content">
            <main>
                <?php get_template_part( "carousel" ) ; ?>   
                <?php get_template_part( "collections" ) ; ?> 
                <?php get_template_part( "about" ) ; ?>
            </main>
                
            <!-- Partial files will be loaded dynamically dsfsdf s -->
            <div class="partials curtains">
                <?php get_template_part( "src/partials/curtains" ) ; ?>   
            </div>
            <div class="partials upholstery">
                <?php get_template_part( "src/partials/upholstery" ) ; ?>   
            </div>
            <div class="partials wallCoverings"></div>
            <div class="partials wtowCarpets"></div>
            <div class="partials rugs"></div>
            <div class="partials woodenFloor"></div>
            <div class="partials bedLeninBath"></div>
            <div class="partials accessaries"></div>
            <div class="partials productDetails">
                <?php get_template_part( "src/partials/product-details" ) ; ?>  
            </div>
            <div class="partials"></div>
        </div>  
    </div>

    <div class="mobile-landscape-section">
        This site is not optimized for mobile landscape mode
    </div>

    <!-- Foorter  -->
    <footer id="footer" class-"hidden-xs hidden-sm"></footer>
   


    <script src="<?php bloginfo('template_url');?>/lib/jquery-2.2.4.min.js" type="text/javascript"></script>
    <script src="<?php bloginfo('template_url');?>/lib/parallax.min.js" type="text/javascript"></script>
    <script src="<?php bloginfo('template_url');?>/lib/bootstrap-3.3.7/js/bootstrap.min.js" type="text/javascript" ></script>
    <script src="<?php bloginfo('template_url');?>/lib/bootstrap-select.min.js" type="text/javascript"></script>
    <script src="<?php bloginfo('template_url');?>/lib/OwlCarousel2-2.2.1/dist/owl.carousel.min.js" type="text/javascript"></script>
    <script src="<?php bloginfo('template_url');?>/src/jquery-sectionsnap.js" type="text/javascript"></script>


    <script src="<?php bloginfo('template_url');?>/src/utils.js" type="text/javascript"></script>
    <script src="<?php bloginfo('template_url');?>/src/scripts.js" type="text/javascript"></script>
    <script src="<?php bloginfo('template_url');?>/src/partials.js" type="text/javascript"></script>
    <script async defer 
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBMA1RE6xLpufkXJw2XvQpEt7Rw4rGeCXM&callback=initMap">
    </script>
</body>
</html>