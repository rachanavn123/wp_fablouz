
<?php
$args = array( 'post_type' => 'page', 'pagename' => 'curtains', 'posts_per_page' => 999 );

$myposts = get_posts( $args );
foreach ( $myposts as $post ) : setup_postdata( $post );?>

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
                    <?php
            
                         if(get_field('options')): $count=0;
                            while(has_sub_field( 'options' )): ++$count;
                    ?>
                                <option value="<?php the_sub_field('filter_id'); ?>"><?php the_sub_field('filter_value'); ?></option>
                    <?php	
			                endwhile; 
			            endif;
			        ?>
                </select>
            </div>
            <div class="col-md-6 col-sm-6 hidden-xs">
                <span class="partials-info-icon"></span>
            </div>
        </div>
        <br>
        <?php
            
            if(get_field('section_details')): $count=0;
                while(has_sub_field( 'section_details' )): ++$count;
        ?>
        <div class="row partials-details" data-filter="<?php the_sub_field('section_id'); ?>">
            <div class="col-md-6 col-sm-6">
                <div class="padding-da"></div>
                <?php 
                    $image = get_sub_field('subsection_image'); 
                ?>
                <img src="<?php echo $image['url']; ?>" alt="" onClick="onProductClick('<?php the_sub_field('product_id'); ?>', 'curtains')">
            </div>
            <div class="col-md-6 col-sm-6">
                <h4><?php the_sub_field('section_header'); ?> </h4>
                <div class="image-type-details">
                    <?php the_sub_field('description'); ?>
                </div>
                <div>
                    <span class="font-bold">Product ID: </span> <span><?php the_sub_field('product_id'); ?></span>
                </div>
                 <div>
                    <span class="font-bold">Size:</span> <span><?php the_sub_field('enter_product_size'); ?></span>
                </div>                  
                <span class="font-bold">Rs. <?php the_sub_field('price'); ?></span>
            </div>
        </div>
        <?php	
			endwhile; 
			endif;
			?>
    </div>
</div>

<?php
endforeach;
wp_reset_query();
?>