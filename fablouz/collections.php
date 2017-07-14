<?php
$args = array( 'post_type' => 'page', 'pagename' => 'collections', 'posts_per_page' => 999 );

$myposts = get_posts( $args );
foreach ( $myposts as $post ) : setup_postdata( $post );
?>


<div class="row section-snap">
    <div class="col-md-4 offset-md-4"></div>
    <div class="col-md-8 collections">
    <?php
			$image = get_field('main_image');?>
        <div class="collections-image parallax-window" data-parallax="scroll" data-image-src="<?php echo $image['url']; ?>">

            <span><?php the_title(); ?></span>
        </div>
        <div class="collections-details">
            <?php the_field('main_image_content');?>
        </div>

        <?php if(get_field('collection_details')): $count=0;while(has_sub_field( 'collection_details' )): ++$count;?>

        <?php 
        if($count % 2 != 0 )  { ?>
        <div class="row collections-tile">
            <div class="col-xs-6 col-sm-6 col-md-6">
                <?php 
                    if(get_sub_field('image')) {
                        $image = get_sub_field('image');?>
                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"/>
                <?php }?>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6">
                <?php the_sub_field('title'); ?>
            </div>
        </div>
        <?php } else { ?>
        <div class="row collections-tile">
            <div class="col-xs-6 col-sm-6 col-md-6">
                <?php the_sub_field('title'); ?>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6">
                <?php 
                    if(get_sub_field('image')) {
                        $image = get_sub_field('image');?>
                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"/>
                <?php }?>
            </div>
        </div>
        <?php } ?>
        <?php	
			endwhile; 
			endif;
			?>
    </div>


<?php
endforeach;
wp_reset_query();
?>