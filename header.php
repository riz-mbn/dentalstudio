<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php echo bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- <link rel="icon" type="image/png" href="<?php echo MBN_ASSETS_URI ?>/img/favicon.png"> -->
    <!-- <title><?php bloginfo('title') ?></title> -->

    <?php wp_head() ?>

</head>
<body <?php body_class() ?>>

<div id="wrapper"> 
        
    <header id="header" data-sticky-container data-toggler=".show-menu">
        <div class="hsnav-s7 sticky" data-sticky data-options="marginTop:0">
            <div class="navbar">
                <a class="navlogo" href="#">
                    <img src="<?php echo MBN_ASSETS_URI ?>/img/logo-white-small.svg" alt="" width="196" height="53">
                </a>
                <span class="navicon hide-for-large" data-toggle="header">mobile menu</span>

                <div class="navutil">
                    <a href="#"><i class="icn-phone circle"></i>(000) 000-000</a>
                </div>

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
                <nav class="mobmenu hide-for-large">
                    <ul class="menu accordion-menu" data-multi-open="false" data-accordion-menu data-submenu-toggle="true">
                        <li class="current-menu-item"><a href="#">Home</a></li>
                        <li><a href="#">Services</a>
                            <ul>
                                <li><a href="#">Services 1</a></li>
                                <li><a href="#">Services 2</a></li>
                                <li><a href="#">Services 3</a></li>
                            </ul>
                        </li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">News & Events</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                </nav>
            </div>
        </div>            
    </header>
    <main id="content" class="content">