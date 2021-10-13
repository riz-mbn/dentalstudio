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
                <div class="testimonial_item <?php echo $class; ?>">
                    <div class="item_wrap">
                        <div class="text_wrap client_review">
                            <p class="grey"><?php echo get_the_content(); ?></p>
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


function mbn_services_tab($atts) {

    $exclude = ($atts['exclude_ids']) ? $atts['exclude_ids'] : '';
    
    $exclude_ids = explode(',', $exclude);

    $args = array(  
        'post_type' => 'services_type',
        'posts_per_page' => -1, 
        'post_status' => 'publish',
        'orderby' => 'id',
        'order' => 'asc',
        'post__not_in' => $exclude_ids
    );
	$wp_query = new WP_Query( $args );   
    // Get the posts from the query
    $services = $wp_query->get_posts();
    ?>

    <div class="grid-container">
        <div class="grid-x">
            <div class="cell xlarge-4 large-4 medium-12 col-tabs">
                <div class="services-tabs tabs" data-tabs id="services-tabs" >
                    <?php
                    
                    $cnt = 0;
                    foreach( $services as $service ): 

                        $icon = get_field('service_icon', $service->ID);
                        $title = (get_field('service_title', $service->ID)) ?  get_field('service_title', $service->ID) : $service->post_title;

                        $cnt++; 
                        $active = ($cnt == 1) ? 'is-active' : '';
                    ?>
                        <div class="tabs-title <?php echo $active ?>" class=""><a href="#<?php echo $service->post_name; ?>" aria-selected="true">
                            <?php if($icon): ?><span class="icon"><figure><img src="<?php echo esc_url($icon); ?>" alt="" width="40" height="40"/></figure></span><?php endif; ?>
                            <span class="title"><?php echo $title; ?></span>
                        </a></div>
                    <?php
                    endforeach;
                    wp_reset_postdata(); ?>
                </div>
            </div>
            <div class="cell xlarge-8 large-8 medium-12 col-content">
                <div class="services-content tabs-content vertical" data-tabs-content="services-tabs">
                <?php 
                
                $cnt = 0;
                foreach( $services as $service ): 
                     $cnt++; 
                     $active = ($cnt == 1) ? 'is-active' : '';
                     $image = wp_get_attachment_image_src( get_post_thumbnail_id( $service->ID ), 'full' ); 
                     $title = (get_field('service_title', $service->ID)) ?  get_field('service_title', $service->ID) : $service->post_title;
                     $url = get_the_permalink( $service->ID );

                     $url =  str_replace( '/'.'services_type'.'/', '/', $url );
                ?>     
                    <div class="tabs-panel <?php echo $active ?> <?php echo $service->post_name; ?>" id="<?php echo $service->post_name; ?>">
                        <div class="content">
                            <div class="col-image">
                                <figure>
                                    <?php if($image[0]): ?>
                                        <img src="<?php echo esc_url($image[0]); ?>" alt="" width="347" height="423"/>
                                    <?php else : ?>
                                        <img src="https://via.placeholder.com/347x423" alt="" width="347" height="423"/>
                                    <?php endif; ?>
                            </figure>
                            </div>
                            
                            <div class="col-copy">
                                <h3><?php echo $title ?></h3>
                                <p><?php echo get_field('services_excerpt',  $service->ID) ?></p>
                                <a href="<?php echo $url ?>" class="button small"><span>Learn More</span></a>
                            </div>
                        </div>
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

function mbn_recent_posts(){
    $the_query = new WP_Query( 'posts_per_page=3' );
    while ($the_query -> have_posts()) : $the_query -> the_post();
    
    if ($the_query->current_post % 2 == 0):
        $class = 'even';
    else:
        $class = 'odd';

    endif;
?>
    <a href="<?php the_permalink(); ?>" class="cell xlarge-4 large-6 medium-6 post_wrap <?php echo $class; ?>">
        <div class="post_item">
            <figure class="featured_img"><?php echo the_post_thumbnail('full') ?></figure>
            <div class="text-wrap">
                <h4><?php the_title(); ?></h4>
                <p><?php echo excerpt(20); ?></p>
            </div>
        </div>
    </a>
<?php
    endwhile;
    wp_reset_postdata();
}
add_shortcode('mbn_recent_posts', 'mbn_recent_posts');

function before_after_photos($atts){
    

    $count = count(get_field('before_after_slider'));
    $style = '';

    if ( $count > 1 ){        
        $returnhtml .= '<div class="before_after_wrap" style="gap: 1em; display: flex; flex-direction: row; justify-content: center; margin-bottom: 20px; flex-wrap: wrap;">';
    
        $style = 'width: 49%;';
    }
    else {
        $returnhtml .= '<div class="before_after_wrap">';
        $style = 'width: 50%;float: left;margin-right: 50px;';
    }

    if( have_rows('before_after_slider') ):
        while( have_rows('before_after_slider') ) : the_row();

            $after = get_sub_field('after_photo');
            $before = get_sub_field('before_photo');

            if( !empty($before) || !empty($after)) :
                $returnhtml .= '<div class="ba-item" style="'.$style .'">';
                $returnhtml .= '<img alt="Image After" src="'. $after .'" />';
                $returnhtml .= '<div class="resize">';
                $returnhtml .= '<img alt="Image Before" src="'.$before .'" />';
                $returnhtml .= '</div>';
                $returnhtml .= '<span class="handle"></span>';
                $returnhtml .= '</div>';
            endif;

        endwhile;
        
    endif;

$returnhtml .= '</div>';

return $returnhtml;

}

add_shortcode('before_after_photos', 'before_after_photos');

function before_after_slider($atts){

    $before = $atts['before'];
    $after = $atts['after'];
    $align = $atts['align'];
    $columns = $atts['column'];

    if( $align == 'left' ) {
        $align = 'alignleft';
    }
    else if( $align == 'right' )  {
        $align = 'alignright';        
    }
    else {
        $align = '';
    }

    if($columns == 1) {
        $style .= 'width: 50%;float: left;margin-right: 50px;';
    }
    else {
        $style .= 'width: 45%;';
    }

    $returnhtml .= '<div class="ba-item '. $align .'" style="'.$style .'">';
    $returnhtml .= '<img alt="Image After" src="'. $after .'" />';
    $returnhtml .= '<div class="resize">';
    $returnhtml .= '<img alt="Image Before" src="'.$before .'" />';
    $returnhtml .= '</div>';
    $returnhtml .= '<span class="handle"></span>';
    $returnhtml .= '</div>';	

    return  $returnhtml;

  }
  add_shortcode('before_after_slider', 'before_after_slider');
