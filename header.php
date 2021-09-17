<!DOCTYPE html>
<html class="htmlclass no-js" <?php language_attributes(); ?>>
<head>
    <meta charset="<?php echo bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" href="<?php echo MBN_ASSETS_URI ?>/img/favicon.ico">
    <!-- <title><?php bloginfo('title') ?></title> -->

    <?php wp_head() ?>

</head>
<body <?php body_class() ?>>

<button data-scroll="up" class="btn_scroll_up"><span>UP</span></button>
<div id="wrapper"> 
    <?php 
    if( !is_front_page() ): ?>
        <header id="header" class="page_header" data-sticky-container data-toggler=".show-menu">
            <div class="hsnav-s7 sticky" data-sticky data-options="marginTop:0">
                <div class="navbar">
                    <div class="navwrap">
                        <a class="navlogo" href="<?php echo home_url(); ?>">
                            <figure>
                                <img src="<?php echo MBN_ASSETS_URI ?>/img/logo-white-small.svg" alt="" width="196" height="53">
                            </figure>
                        </a>
                        <nav class="navmenu show-for-large">
                            <?php
                                wp_nav_menu( array( 
                                    'theme_location' => 'main-menu',
                                    'menu'         => '',
                                    'container'    => 'ul',
                                    'items_wrap' => '<ul class="menu align-center dropdown" data-dropdown-menu>%3$s</ul>' ,
                                    'menu_class'   => 'menu align-center dropdown',
                                ));
                            ?> 
                        </nav>
                        <div class="navutil">
                            <a href="tel:4804884852">
                                <div class="icon_blurb">						
                                    <div class="icon_img icn_phone"></div>
                                    <div class="icon_txt">(480) 488-4852</div>
                                </div>
                                <div class="subtext">"Dedication to Quality and Consistency.."</div>
                            </a>
                        </div>
                        <span class="navicon hide-for-large" data-toggle="header">mobile menu</span>
                        <nav class="mobmenu hide-for-large">
                            <?php
                                wp_nav_menu( array( 
                                    'theme_location' => 'main-menu',
                                    'menu'         => '',
                                    'container'    => 'ul',
                                    'items_wrap' => '<ul class="menu accordion-menu" data-multi-open="false" data-accordion-menu data-submenu-toggle="true">%3$s</ul>' ,
                                    'menu_class'   => 'menu align-center dropdown',
                                ));
                            ?> 
                        </nav>
                    </div>
                </div>
            </div>            
        </header>
    
    <?php elseif( is_front_page() ): ?>
        <header id="header" class="home_header" data-sticky-container data-toggler=".show-menu">
            <div class="hsnav-s7 sticky" data-sticky data-options="marginTop:0">
                <div class="navbar">
                    <div class="grid-container">
                        <div class="navwrap">
                            <a class="navlogo" href="<?php echo home_url(); ?>">
                                <figure>
                                    <img src="<?php echo MBN_ASSETS_URI ?>/img/logo-white-small.svg" alt="" width="196" height="53">
                                </figure>
                            </a>
                            <nav class="navmenu show-for-large">
                                <?php
                                    wp_nav_menu( array( 
                                        'theme_location' => 'main-menu',
                                        'menu'         => '',
                                        'container'    => 'ul',
                                        'items_wrap' => '<ul class="menu align-center dropdown" data-dropdown-menu>%3$s</ul>' ,
                                        'menu_class'   => 'menu align-center dropdown',
                                    ));
                                ?> 
                            </nav>
                            <div class="navutil">
                                <a href="tel:4804884852">
                                    <div class="icon_blurb">				
                                        <div class="icon_img icn_phone black"></div>		
                                        <div class="icon_txt">(480) 488-4852</div>
                                    </div>
                                    <div class="subtext">"Dedication to Quality and Consistency.."</div>
                                </a>
                            </div>
                            <span class="navicon hide-for-large" data-toggle="header">mobile menu</span>
                            <nav class="mobmenu hide-for-large">
                                <?php
                                    wp_nav_menu( array( 
                                        'theme_location' => 'main-menu',
                                        'menu'         => '',
                                        'container'    => 'ul',
                                        'items_wrap' => '<ul class="menu accordion-menu" data-multi-open="false" data-accordion-menu data-submenu-toggle="true">%3$s</ul>' ,
                                        'menu_class'   => 'menu align-center dropdown',
                                    ));
                                ?> 
                            </nav>
                        </div>
                    </div>
                </div>
            </div>            
        </header>

    <?php endif; ?>
    <main id="content" class="content">