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
            'publicly_queryable'  => false,
            'has_archive'   => false,
            'show_in_rest'  => false,
            'menu_position' => 20,
            'supports'      =>  array('title', 'editor', 'page-attributes', 'thumbnail'),
            'menu_icon'     => 'dashicons-format-quote',
            'rewrite' => array(
                'slug' => 'testimonials_type',
                'with_front' => false  
            )
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
                'with_front' => false  
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
            'publicly_queryable'  => false,
            'show_in_nav_menus' => true,
            'menu_position' => 20,
            'supports'      =>  array('title', 'editor', 'page-attributes', 'thumbnail'),
            'menu_icon'     => 'dashicons-store',
            'rewrite' => array(
                'slug' => 'services_type',
                'with_front' => false  
            )
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
                'with_front' => false  
            )
        )
    );
}
add_action( 'init', 'services_post' ); 



function smilegallery_posttype(){
    register_post_type('smilegallery',
        array(
            'labels' => array(
            'name' => __( 'Veneers Gallery' ),
            'singular_name' => __('smilegallery')
        ),
            'public' => true,
            'has_archive' => true,
            'exclude_from_search'=>true,
            'rewrite' => array('slug' => 'smilegallery'),
            'supports'	=>	array('title', 'editor','page-attributes','thumbnail', 'custom-fields')
        )
    );
} add_action( 'init', 'smilegallery_posttype' );


function cosmeticgallery_posttype(){
    register_post_type('cosmeticgallery',
        array(
            'labels' => array(
            'name' => __( 'Cosmetic Gallery' ),
            'singular_name' => __('cosmeticgallery')
        ),
            'public' => true,
            'has_archive' => true,
            'exclude_from_search'=>true,
            'rewrite' => array('slug' => 'cosmeticgallery'),
            'supports'	=>	array('title', 'editor','page-attributes','thumbnail', 'custom-fields')
        )
    );
} add_action( 'init', 'cosmeticgallery_posttype' );


function testiwritten_posttype(){
    register_post_type('testiwritten',
        array(
            'labels' => array(
            'name' => __( 'Testimonial Written' ),
            'singular_name' => __('testiwritten')
        ),
            'public' => true,
            'has_archive' => true,
            'exclude_from_search'=>true,
            'rewrite' => array('slug' => 'testiwritten'),
            'supports'	=>	array('title', 'editor','page-attributes','thumbnail', 'custom-fields')
        )
    );
} add_action( 'init', 'testiwritten_posttype' );
