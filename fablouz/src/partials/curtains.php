
<?php
$args = array( 'post_type' => 'page', 'pagename' => 'curtains', 'posts_per_page' => 999 );

$myposts = get_posts( $args );
foreach ( $myposts as $post ) : setup_postdata( $post );?>
?>

<!-- Curtains Partials -->
<div class="row">
    <div class="col-md-4 offset-md-4"></div>
    <div class="col-md-8 partials-content partials-details-container">
        <div class="partials-details-image">
            <?php 
                if(get_field('main_image')) {
                    $image = get_field('main_image');?>
                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"/>
            <?php }?>
            <span class="image-title"><?php the_title()?></span>
        </div>
        <br>
        <br>
        <div class="row partials-details-selection">
            <div class="col-md-6 col-sm-6">
                <select class="selectpicker form-control">
                    <option value="all">All</option>
                    <option value="pattern-florals">Patterns & Florals</option>
                    <option value="plain-texture">Plain / Texture</option>
                    <option value="stipes-geo">Stripes & Geomentricals</option>
                    <option value="cotton">Cotton</option>
                </select>
            </div>
            <div class="col-md-6 col-sm-6 hidden-xs">
                <span class="partials-info-icon"></span>
            </div>
        </div>
        <br>
        <div class="row partials-details" data-filter="pattern-florals">
            <div class="col-md-6 col-sm-6">
                <img src="./styles/images/carousel/3.jpg" alt="" onClick="onProductClick('curtains1')">
            </div>
            <div class="col-md-6 col-sm-6">
                <h4>Curtain name 01</h4>
                <div class="image-type-details">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry
                </div>
                <div>
                    <span class="font-bold">Product ID: </span> <span>#973RD</span>
                </div>
                 <div>
                    <span class="font-bold">Size:</span> <span>10 X 4 in (2 pieces)</span>
                </div>                  
                <span class="font-bold">Rs. 900</span>
            </div>
        </div>
        <div class="row partials-details" data-filter="pattern-florals">
            <div class="col-md-6 col-sm-6">
                <img src="./styles/images/carousel/1.jpg" alt="">
            </div>
            <div class="col-md-6 col-sm-6">
                <h4>Curtain name 02</h4>
                <div class="image-type-details">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry
                </div>
                <div>
                    <span class="font-bold">Product ID: </span> <span>#966RD</span>
                </div>
                 <div>
                    <span class="font-bold">Size:</span> <span>10 X 4 in (4 pieces)</span>
                </div>                  
                <span class="font-bold">Rs. 2500</span>
            </div>
        </div>
        <div class="row partials-details" data-filter="plain-texture">
            <div class="col-md-6 col-sm-6">
                <img src="./styles/images/carousel/4.jpg" alt="">
            </div>
            <div class="col-md-6 col-sm-6">
                <h4>Curtain name 03 - Plain / Texture</h4>
                <div class="image-type-details">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry
                </div>
                <div>
                    <span class="font-bold">Product ID: </span> <span>#966RD</span>
                </div>
                 <div>
                    <span class="font-bold">Size:</span> <span>10 X 4 in (4 pieces)</span>
                </div>                  
                <span class="font-bold">Rs. 2500</span>
            </div>
        </div>
        <div class="row partials-details" data-filter="plain-texture">
            <div class="col-md-6 col-sm-6">
                <img src="./styles/images/carousel/4.jpg" alt="">
            </div>
            <div class="col-md-6 col-sm-6">
                <h4>Curtain name 03 - Plain / Texture</h4>
                <div class="image-type-details">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry
                </div>
                <div>
                    <span class="font-bold">Product ID: </span> <span>#966RD</span>
                </div>
                 <div>
                    <span class="font-bold">Size:</span> <span>10 X 4 in (4 pieces)</span>
                </div>                  
                <span class="font-bold">Rs. 2500</span>
            </div>
        </div>
        <div class="row partials-details" data-filter="stipes-geo">
            <div class="col-md-6 col-sm-6">
                <img src="./styles/images/carousel/4.jpg" alt="">
            </div>
            <div class="col-md-6 col-sm-6">
                <h4>Curtain name 03 - Stipes Geo</h4>
                <div class="image-type-details">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry
                </div>
                <div>
                    <span class="font-bold">Product ID: </span> <span>#966RD</span>
                </div>
                 <div>
                    <span class="font-bold">Size:</span> <span>10 X 4 in (4 pieces)</span>
                </div>                  
                <span class="font-bold">Rs. 2500</span>
            </div>
        </div>
        <div class="row partials-details" data-filter="cotton">
            <div class="col-md-6 col-sm-6">
                <img src="./styles/images/carousel/4.jpg" alt="">
            </div>
            <div class="col-md-6 col-sm-6">
                <h4>Curtain name 03 - Cotton</h4>
                <div class="image-type-details">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry
                </div>
                <div>
                    <span class="font-bold">Product ID: </span> <span>#966RD</span>
                </div>
                 <div>
                    <span class="font-bold">Size:</span> <span>10 X 4 in (4 pieces)</span>
                </div>                  
                <span class="font-bold">Rs. 2500</span>
            </div>
        </div>
    </div>
</div>

<?php
endforeach;
wp_reset_query();
?>