<?php

function mbn_shortcode_home_url($atts = null, $content = null){
    return home_url();
}
add_shortcode('home_url', 'mbn_shortcode_home_url');


function mbn_testimonials() {

    $args = array(  
        'post_type' => 'testimonials_type',
        'posts_per_page' => -1, 
        'post_status' => 'publish',
        'orderby' => 'id',
        'order' => 'asc'
    );
	$testimonials = new WP_Query( $args );   
    if ( $testimonials->have_posts() ) : 
    ?>

        <div class="testimonials_wrap">
            <div class="grid-x testimonials">

            <?php
                while ( $testimonials->have_posts() ) : $testimonials->the_post();

                    $client_name    = get_field('client_name');
                    $client_yr      = get_field('client_year');
                    $client_rating  = get_field('client_star_rating');

                    if ($testimonials->current_post % 2 == 0):
                        $class = 'even';
                    else:
                        $class = 'odd';

                    endif;
                    if( !empty(get_the_content())):
                    ?>
                <div class="cell large-4 testimonial_item <?php echo $class; ?>">
                    <div class="item_wrap">
                        <div class="text_wrap client_review">
                            <p class=""><?php echo get_the_content(); ?></p>
                        </div>
                        <?php if($client_rating):?><div class="client_rating"><?php echo $client_rating ?></div><?php endif; ?>
                        <?php if($client_name):?><div class="client_name"><?php echo esc_html($client_name); ?></div><?php endif; ?>
                        <?php if($client_yr):?><div class="client_yr">Customer since <?php echo esc_html($client_yr); ?></div><?php endif; ?>
                    </div>
                </div>
            <?php
                    endif; 
            endwhile;
            wp_reset_postdata(); ?>

            </div>
        </div>
        <?php
    endif;

}
add_shortcode('mbn_testimonials', 'mbn_testimonials');


function mbn_services_tab() {
    $args = array(  
        'post_type' => 'services_type',
        'posts_per_page' => -1, 
        'post_status' => 'publish',
        'orderby' => 'id',
        'order' => 'asc'
    );
	$wp_query = new WP_Query( $args );   
    // Get the posts from the query
    $services = $wp_query->get_posts();
    ?>

    <div class="grid-container">
        <div class="grid-x">
            <div class="cell medium-3">
                <ul class="vertical tabs" data-tabs id="services-tabs" >
                    <?php
                    
                    $cnt = 0;
                    foreach( $services as $service ): 
                        $cnt++; 
                        $active = ($cnt == 1) ? 'is-active' : '';
                    ?>
                        <li class="tabs-title <?php echo $active ?>"><a href="#<?php echo $service->post_name; ?>" aria-selected="true"><?php echo $service->post_title; ?></a></li>
                    <?php
                    endforeach;
                    wp_reset_postdata(); ?>
                </ul>
            </div>
            <div class="cell medium-9">
                <div class="tabs-content vertical" data-tabs-content="services-tabs">
                <?php 
                
                $cnt = 0;
                foreach( $services as $service ): 
                     $cnt++; 
                     $active = ($cnt == 1) ? 'is-active' : '';
                ?>     
                    <div class="tabs-panel <?php echo $active ?>" id="<?php echo $service->post_name; ?>">
                        <h3><?php echo $service->post_title; ?></h3>
                        <?php echo $service->post_content; ?>
                    </div>
                <?php
                 endforeach;
                 wp_reset_postdata(); ?>
                </div>
            </div>
        </div>
    </div>
<?php
}
add_shortcode('mbn_services_tab', 'mbn_services_tab');