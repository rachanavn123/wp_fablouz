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
        <div class="col-md-8">
            <div class="col-md-6 maps">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3887.5283695543085!2d77.56888241553199!3d13.001989417726993!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae1628db55f671%3A0x6084ac611423c158!2sCarpet+Udyog+Inc!5e0!3m2!1sen!2sin!4v1497083103842"
                    width="100%" frameborder="0" allowfullscreen>
                </iframe>
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