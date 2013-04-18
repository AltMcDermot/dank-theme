<!DOCTYPE html>

<html>
<head>
    <title><?php bloginfo('name'); ?></title>
    <meta name="viewport" content="width=device-width" />
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
    <!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<!--[if lt IE 9]>
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_directory' ); ?>/style-ie.css"/>
<![endif]-->
<?php wp_head(); ?>
</head>
<body>
    <header class="head">
            <h1><a class="home" href="<?php bloginfo('url'); ?>"><div class="header-img"></div></a></h1>
            <input type='button' id='toggle' value="Menu" />
                <?php
                    $top_menu = array(
    'theme_location'  => 'top',
    'menu'            => 'top-menu',
    'container'       => 'nav',
    'container_class' => 'top-nav',
    'container_id'    => 'menu',
    'menu_class'      => 'top',
    'menu_id'         => '',
    'echo'            => true,
    'fallback_cb'     => 'wp_page_menu',
    'before'          => '',
    'after'           => '',
    'link_before'     => '',
    'link_after'      => '',
    'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
    'depth'           => 1,
    'walker'          => ''
                    );
                    wp_nav_menu( $top_menu );

                    $top_menu_r = array(
    'theme_location'  => 'top',
    'menu'            => 'top-menu',
    'container'       => 'nav',
    'container_class' => 'top-nav-r',
    'container_id'    => 'menu-r',
    'menu_class'      => 'top',
    'menu_id'         => '',
    'echo'            => true,
    'fallback_cb'     => 'wp_page_menu',
    'before'          => '',
    'after'           => '',
    'link_before'     => '',
    'link_after'      => '',
    'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
    'depth'           => 1,
    'walker'          => ''
                    );
                    wp_nav_menu( $top_menu_r );
                    ?>
        </header>