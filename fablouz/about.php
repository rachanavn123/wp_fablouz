<?php
$args = array( 'post_type' => 'page', 'pagename' => 'about', 'posts_per_page' => 999 );

$myposts = get_posts( $args );
foreach ( $myposts as $post ) : setup_postdata( $post );?>

<div class="row">
        <div class="col-md-4 offset-md-4"></div>
        <div class="col-md-8 about">
        <?php
			$image = get_field('about_us_image');?>
            <div class="about-image parallax-window" data-parallax="scroll" data-image-src="<?php echo $image['url']; ?>">
                <span><?php the_title()?></span>
            </div>
            <div class="about-details">
                 <?php the_field('about_us_image_description');?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 offset-md-4"></div>
        <div class="col-md-8" contact>
            <div class="col-md-6 maps">
            </div>
            <div class="col-md-6">
                <div class="contact-details">
                    <div class="heading">Contact</div>
                    
                    <div> <?php the_field('about_us_address');?></div>
                    <br/>
                    <div class="bold">Email</div>
                    <div><?php the_field('email');?></div>
                    <br/>
                    <div class="bold">Phone</div>
                    <div><?php the_field('phone');?></div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
endforeach;
wp_reset_query();
?>