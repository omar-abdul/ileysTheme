<?php 
/*

Ajax functions collection
*/
add_action('wp_ajax_nopriv_ileys_load_more','ileys_load_more');
add_action('wp_ajax_ileys_load_more','ileys_load_more');

function ileys_load_more(){
    $paged = $_POST['page']+1;

    $category = $_POST['category'];

    $category = get_term_by('slug',$category,'category');
    
    $query = new WP_Query(array(
        'post_type'=>'post',
        'paged'=>$paged,
        'category__in'=>$category
    ));
    if ( $query->have_posts() ) :
            
        /* Start the Loop */
        while ( $query->have_posts() ) : $query->the_post();

            /*
             * Include the Post-Format-specific template for the content.
             * If you want to override this in a child theme, then include a file
             * called content-___.php (where ___ is the Post Format name) and that will be used instead.
             */
            get_template_part( 'template-parts/content', get_post_format() );

        endwhile;

    endif;
    wp_reset_postdata();
    die();
}