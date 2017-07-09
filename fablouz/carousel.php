
<main>
    <div class="row">
        <div class="col-md-4 offset-md-4"></div>
            <div class="col-md-8">
    
                      

<?php
$args = array( 'post_type' => 'page', 'pagename' => 'carousel', 'posts_per_page' => 999 );

$myposts = get_posts( $args );
foreach ( $myposts as $post ) : setup_postdata( $post );?>
	
		<?php the_content(); ?>
		
<?php
endforeach;
wp_reset_query();
?>

    </div>
  
</div>