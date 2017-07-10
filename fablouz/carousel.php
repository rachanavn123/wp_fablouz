<?php
$args = array( 'post_type' => 'page', 'pagename' => 'carousel', 'posts_per_page' => 999 );

$myposts = get_posts( $args );
?>
<main>
    <div class="row">
        <div class="col-md-4 offset-md-4"></div>
            <div class="col-md-8">
                <div id="owl-demo" class="owl-carousel owl-theme">
                    <?php foreach ( $myposts as $post ) : setup_postdata( $post );
                    
                    if(get_field('slider_section')): $count=0;while(has_sub_field( 'slider_section' )): ++$count;
                    $image = get_sub_field('carousel_slider_image');?>

                    <div class="item"><img src="<?php echo $image['url']; ?>" alt="The Last of us"></div>
                <?php	
                    endwhile; 
                    endif;
                ?>
                </div>
		
                <?php
                endforeach;
                wp_reset_query();
                ?>

            </div>
  
        </div>