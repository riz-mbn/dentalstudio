<?php

/**
 * Add custom body class
**/
function mbn_body_class($classes){
    // code here ...

    return $classes;
}
add_filter('body_class', 'mbn_body_class');



/*
** Submenu Classes
*/
function mbn_submenu_classes($classes, $args){
    // code here ...
    
    return $classes;
}
//add_filter('wp_nav_menu_items', 'mbn_submenu_classes', 10, 2);

add_filter( 'gform_submit_button', 'form_submit_button', 10, 2 );
function form_submit_button( $button, $form ) {

    if ($form['id'] == 6 ):
        return "<button class='button secondary' id='gform_submit_button_{$form['id']}'>{$form['button']['text']}</button>";
    else:
        return "<button class='button primary large' id='gform_submit_button_{$form['id']}'>{$form['button']['text']}</button>";
    endif;
}



function mbn_fa(){
    ?>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">


    <?php
}

add_action("wp_head","mbn_fa",1);