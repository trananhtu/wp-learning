<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

    <div class="container">

        <header class="site-header">

            <div class="row">
                <div class="col-xs-6">

                    <?php if ( is_home() ) : ?>
                        <h1 class="logo"><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
                    <?php else : ?>
                        <div class="logo"><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></div>
                    <?php endif; ?>

                    <h5><?php bloginfo('description'); ?></h5>
                </div>
                <div class="col-xs-6">
                    <div class="hd-search">
                        <?php get_search_form(); ?>
                    </div>
                </div>
            </div>

            <?php

            $args = array(
                'theme_location' => 'primary',
                'menu_class' => 'nav navbar-nav',
                'container' => 'nav',
                'container_id' => 'main-nav-container',
                //'menu_class' => 'main-nav',
                //'menu_id' => 'main-menu',
                //'link_before' => '<span>',
                //'link_after' => '</span>'

            );

            ?>

            <nav class="navbar navbar-light bg-faded">
                <button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#primary-menu">
                &#9776;
                </button>
                <div class="collapse navbar-toggleable-xs" id="primary-menu">
                    <!-- <a class="navbar-brand" href="#">Responsive navbar</a> -->
                    <?php wp_nav_menu( $args ); ?>
                    <!-- <ul class="nav navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Features</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Pricing</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About</a>
                        </li>
                    </ul> -->
                </div>
            </nav>
        </header> <!-- .site-header -->