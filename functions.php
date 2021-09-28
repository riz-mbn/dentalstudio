<?php

define('MBN_DIR_URI', get_template_directory_uri());
define('MBN_DIR_PATH', get_template_directory());
define('MBN_ASSETS_URI', MBN_DIR_URI.'/resources');
define('MBN_MAP_API_KEY',"AIzaSyDGw796lT6PGFF97mZxv5LnemjwcDaJMJQ");

/**
 * Theme setup
**/
function mbn_theme_setup(){

    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));

    add_theme_support('align-wide');
    add_theme_support('editor-styles');
    add_editor_style('editor.css');
    
    // add_theme_support( 'woocommerce');
    // show_admin_bar(false);
    // set_post_thumbnail_size(1568, 9999);
    // add_image_size('small-thumbnail', '150', '100');

    // add_theme_support('custom-logo',array(
    //     'height'      => 190,
    //     'width'       => 190,
    //     'flex-width'  => false,
    //     'flex-height' => false
    // ));

    // add_theme_support('customize-selective-refresh-widgets');
    // add_theme_support('wp-block-styles');
    

    register_nav_menus(array(
        'main-menu'   => 'Main Menu',
        'footer-menu'   => 'Footer Menu',
    ));

}
add_action('after_setup_theme', 'mbn_theme_setup');


/**
 * Enqeueue stylesheets and scripts
**/
function mbn_enqueue_scripts(){
    global $wp_version;
    global $template;

    // Global CSS
    wp_enqueue_style('mbn-style', get_stylesheet_uri());

    // unneccessary scripts
    wp_deregister_script('wp-embed');
    wp_deregister_style('wp-block-library');


    // dummy handler - for using inline-css
    wp_register_style('inlinecss-handle', false);
    wp_enqueue_style('inlinecss-handle');

    wp_enqueue_style('font-poppins', 'https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap', [], $wp_version);

	//Global JS
	wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', MBN_ASSETS_URI.'/vendor/jquery-3.4.1.min.js', [], $wp_version);
    wp_enqueue_script( 'jquery' );

    wp_deregister_script( 'jquery-migrate' );
    wp_register_script( 'jquery-migrate', MBN_ASSETS_URI.'/vendor/jquery-migrate-3.min.js', [], $wp_version);
    wp_enqueue_script( 'jquery-migrate' );
    

    // Foundation JS
    wp_enqueue_script('foundation', MBN_ASSETS_URI.'/vendor/foundation/js/foundation.min.js', [], $wp_version);

    // slick
    wp_enqueue_style('slick', MBN_ASSETS_URI.'/vendor/slick/slick.css', [], $wp_version);
    wp_enqueue_script('slick', MBN_ASSETS_URI.'/vendor/slick/slick.min.js', [], $wp_version);
   
    // beforeAfter
    wp_enqueue_script('beforeAfter', MBN_ASSETS_URI.'/vendor/beforeAfter/beforeAfter.js', [], $wp_version);

    // Isotope
    //wp_enqueue_script('nicescroll', MBN_ASSETS_URI.'/vendor/isotope/isotope.min.js', [], $wp_version);

    // Nicescroll
    // wp_enqueue_script('nicescroll', MBN_ASSETS_URI.'/vendor/jquery.nicescroll.min.js', [], $wp_version);

    // Fancybox
    wp_enqueue_style('fancybox', MBN_ASSETS_URI.'/vendor/fancybox/jquery.fancybox.min.css', [], $wp_version);
    wp_enqueue_script('fancybox', MBN_ASSETS_URI.'/vendor/fancybox/jquery.fancybox.min.js', [], $wp_version);

    
    // App
    wp_enqueue_style('app', MBN_ASSETS_URI.'/css/app.css', [], '1.7.8');
    wp_enqueue_script('app', MBN_ASSETS_URI.'/js/app.js', [], $wp_version, true);

    // localize objects
    wp_localize_script('app', 'main_obj', array(
        'ajax_url'  => admin_url('admin-ajax.php'),
        'home_url'  => home_url(),
        'theme_url' => MBN_DIR_URI,
        'nonce'     => wp_create_nonce('mbn-nonce')
    ));
}
add_action('wp_enqueue_scripts', 'mbn_enqueue_scripts', 20);


// remove wp emoji
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('admin_print_styles', 'print_emoji_styles');


/**
 * Register sidebars
**/
function mbn_register_sidebars(){
    // footer menus
    for($i=1;$i<=5;$i++){
        register_sidebar(array(
            'name'          => __('Footer Column '.$i),
            'id'            => 'footer-col-'.$i,
            'before_widget' => false,
            'after_widget'  => false,
            'before_title'  => false,
            'after_title'   => false,
        ));
    }
}
//add_action('widgets_init', 'mbn_register_sidebars');


/**
 * Allow SVG
**/
function mbn_myme_types($mime_types){
    $mime_types['svg'] = 'image/svg+xml';
    return $mime_types;
}
add_filter('upload_mimes', 'mbn_myme_types');


require MBN_DIR_PATH."/mbn-login/setup.php";
require MBN_DIR_PATH.'/includes/post-types.php';
require MBN_DIR_PATH.'/includes/shortcodes.php';
require MBN_DIR_PATH.'/includes/public-hooks.php';
require MBN_DIR_PATH.'/includes/admin-hooks.php';


/** Get page type, eg. for customizer option */
function mbn_page_type() {
	global $template;

	if ( strpos( $template, 'team.php' ) ) {
		return 'team';
	}

	if ( is_single() ) {
		return 'single';
	}
	if ( is_404() ) {
		return '404';
	}
	if ( is_page() ) {
		return 'single_page';
	}
	if ( is_search() ) {
		return 'blog';
	}
}

/** Check if it's blog */
function is_blog_page() {
	return ( is_home() || is_archive() || is_author() || is_category() || is_tag() ) && 'post' == get_post_type();
}

function excerpt($limit){
    $excerpt = explode(' ', get_the_excerpt(), $limit);
    if(count($excerpt)>=$limit){
        array_pop($excerpt);
        $excerpt = implode(" ",$excerpt).'...';
    }else{
        $excerpt = implode(" ",$excerpt);
    }
    $excerpt = preg_replace('`[[^]]*]`','',$excerpt);
    return $excerpt;
}

function new_excerpt_more($more) {
    return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');

// function _remove_script_version( $src ){
//     $parts = explode( '?ver', $src );
//     return $parts[0];
// }
// add_filter( 'script_loader_src', '_remove_script_version', 15, 1 );
// add_filter( 'style_loader_src', '_remove_script_version', 15, 1 );


/*pagination*/
function custom_pagination($numpages, $pagerange, $paged) {

    if(empty($pagerange)){
        $pagerange = 2;
    }

    global $paged;
    if(empty($paged)){
        $paged = 1;
    }
    
    if($numpages == ''){
        global $wp_query;
        $numpages = $wp_query->max_num_pages;

        if(!$numpages){
            $numpages = 1;
        }
    }

    $pagination_args = array(
        'base'			=> get_pagenum_link(1) . '%_%',
        'format'		=> 'page/%#%',
        'total'			=> $numpages,
        'current'		=> $paged,
        'show_all'		=> False,
        'end_size'		=> 1,
        'mid_size'		=> $pagerange,
        'prev_next'		=> True,
        'prev_text'		=> __('Prev'),
        'next_text'		=> __('Next'),
        'type'			=> 'plain',
        'add_args'		=> false,
        'add_fragment'	=> ''
    );

    $paginate_links = paginate_links($pagination_args);

    if($paginate_links) {
        echo "<nav class='custom-pagination'>";
        echo $paginate_links;
        echo "</nav>";
    }
}


add_filter( 'category_rewrite_rules', 'vipx_filter_category_rewrite_rules' );
function vipx_filter_category_rewrite_rules( $rules ) {
    $categories = get_categories( array( 'hide_empty' => false ) );

    if ( is_array( $categories ) && ! empty( $categories ) ) {
        $slugs = array();
        foreach ( $categories as $category ) {
            if ( is_object( $category ) && ! is_wp_error( $category ) ) {
                if ( 0 == $category->category_parent ) {
                    $slugs[] = $category->slug;
                } else {
                    $slugs[] = trim( get_category_parents( $category->term_id, false, '/', true ), '/' );
                }
            }
        }

        if ( ! empty( $slugs ) ) {
            $rules = array();

            foreach ( $slugs as $slug ) {
                $rules[ '(' . $slug . ')/feed/(feed|rdf|rss|rss2|atom)?/?$' ] = 'index.php?category_name=$matches[1]&feed=$matches[2]';
                $rules[ '(' . $slug . ')/(feed|rdf|rss|rss2|atom)/?$' ] = 'index.php?category_name=$matches[1]&feed=$matches[2]';
                $rules[ '(' . $slug . ')(/page/(\d)+/?)?$' ] = 'index.php?category_name=$matches[1]&paged=$matches[3]';
            }
        }
    }
    return $rules;
}
?>

<?php 
function js_mapscript(){
    
/*
<script>
    var map;
    function initMap() {
        var ds = {
            info: '<strong>Dental Studio 101</strong><br>\
            <a href="https://goo.gl/maps/aHmvhao9kBC2" style="text-decoration:underline;color:blue" target="_blank">33739 North Scottsdale Road, 101, Scottsdale, AZ 85266</a>',
            lat: 33.79096,
            long: -111.92524
        };
        
        
        var locations = [
            [ds.info, ds.lat, ds.long, 0],
        ];
    
        map = new google.maps.Map(document.getElementById('map'), {
            zoom: 7,
            center: new google.maps.LatLng(33.6173123, -112.4059619),
            mapTypeId: google.maps.MapTypeId.ROADMAP
        });
    
        var infowindow = new google.maps.InfoWindow({});
        var marker, i;
    
        for (i = 0; i < locations.length; i++) {
            marker = new google.maps.Marker({
                position: new google.maps.LatLng(locations[i][1], locations[i][2], locations[i][3]),
                map: map
            });
            google.maps.event.addListener(marker, 'click', (function (marker, i) {
                return function () {
                    infowindow.setContent(locations[i][0]);
                    infowindow.open(map, marker);
                }
            })(marker, i));
        }
    }
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDGw796lT6PGFF97mZxv5LnemjwcDaJMJQ&callback=initMap" defer></script>
<?php 
*/
}add_action('wp_footer', 'js_mapscript'); 

function register_new_menu() {
    register_nav_menu('landing-page-menu',__( 'Landing Page Menu' ));
}
add_action( 'init', 'register_new_menu' );

if (is_page(5690)) {
add_filter('wpcf7_autop_or_not', '__return_false');
}

