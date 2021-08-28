<?php


// Register Testimonials Post Type
function testimonials_post() {
    register_post_type( 'testimonials_type',
        array(
            'labels'    => array(
                'name' => __( 'Testimonials' ),
                'singular_name' => __('Testimonial')
            ),
            'public'        => true,
            'has_archive'   => false,
            'show_in_rest'  => false,
            'menu_position' => 20,
            'with_front' => true,
            'supports'      =>  array('title', 'editor', 'page-attributes', 'thumbnail'),
            'menu_icon'     => 'dashicons-format-quote',
        )
    );

    register_taxonomy(  
        'testimonial_cats',
        'testimonials_type',
        array(
            'hierarchical' => true,         
            'has_archive' => true,
            'label' => 'Categories',            
            'query_var' => true,
            'show_admin_column' => true,
            'show_in_rest' => true,
            'rewrite' => array(
                'slug' => 'testimonial_cats',
                'with_front' => true  
            )
        )
    );
}
add_action( 'init', 'testimonials_post' ); 


// Register Services Post Type
function services_post() {
    register_post_type( 'services_type',
        array(
            'labels'    => array(
                'name' => __( 'Services' ),
                'singular_name' => __('Service')
            ),
            'public'        => true,
            'has_archive'   => false,
            'show_in_rest'  => false,
            'menu_position' => 20,
            'with_front' => true,
            'supports'      =>  array('title', 'editor', 'page-attributes', 'thumbnail'),
            'menu_icon'     => 'dashicons-store',
        )
    );

    register_taxonomy(  
        'service_cats',
        'services_type',
        array(
            'hierarchical' => true,         
            'has_archive' => true,
            'label' => 'Categories',            
            'query_var' => true,
            'show_admin_column' => true,
            'show_in_rest' => true,
            'rewrite' => array(
                'slug' => 'service_cats',
                'with_front' => true  
            )
        )
    );
}
add_action( 'init', 'services_post' ); 