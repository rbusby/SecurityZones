<?php

// Get list of all pages for CMB2 select
function getPages()
{
    $return = array();

    $products = new WP_Query(array( 'post_type' => array('page',), 'posts_per_page' => -1));
    if( $products->have_posts() ) :
        while( $products->have_posts() ) : $products->the_post();
            $return[get_the_ID()] = get_the_title();
        endwhile;
    endif;
    wp_reset_postdata();

    return $return;
}

// Simply remove anything that looks like an archive title prefix ("Archive:", "Foo:", "Bar:").
add_filter('get_the_archive_title', function ($title) {
    return preg_replace('/^\w+: /', '', $title);
});