<?php



/*=============================================================
			Custom size thumbnail for photos
===============================================================*/

// wp_localize_script( 'ajax-script', 'ajax_object', array( 'ajax_url' => admin_url( 'admin-ajax.php' ) ) );
add_action( 'wp_ajax_nopriv_get_images', 'get_images');

function my_enqueue() {

    wp_enqueue_script( 'ajax-script', get_template_directory_uri() . '/src/partials.js', array('jquery') );

    wp_localize_script( 'ajax-script', 'my_ajax_object',
            array( 'ajax_url' => admin_url( 'admin-ajax.php' ) ) );
}
add_action( 'wp_enqueue_scripts', 'my_enqueue' );



function get_images() {
 
    // The $_REQUEST contains all the data sent via ajax
    if ( isset($_REQUEST) ) {
     
        $page_id = $_REQUEST['pageName'];
        $productId = $_REQUEST['productId'];
        global $post;
        
        $args = array( 'post_type' => 'page', 'pagename' => $page_id, 'posts_per_page' => 999 );
        $options = "";
        $myposts =  get_posts( $args );
        $section_head = "";
        // $options = "Vaikunt ";
        foreach ( $myposts as $post ){ 
            
            setup_postdata( $post );
            if(get_field('section_details')): $count=0;
                while(has_sub_field( 'section_details' )): ++$count;
                    if(get_sub_field('product_id') == $productId){ 
                        while(has_sub_field( 'product_images' )): ++$count;
                            $imageURL = get_sub_field('product_image')['url'];
                            $options .= "<div class='item'><img src='".$imageURL."'></div>";
                        endwhile; 
                    }
			    endwhile; 
            endif;
        }
        // // // Let's take the data that was sent and do something with it
        // // if ( $fruit == 'Banana' ) {
        // //     $fruit = 'Tes

        echo  $options ;
         
        // If you're debugging, it might be useful to see what was sent in the $_REQUEST
         //print_r($_REQUEST);
     
    }
     
    // Always die in functions echoing ajax content
   die();
}
 


?>