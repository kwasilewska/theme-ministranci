<!DOCTYPE html>
<html ng-app="APP">
    <head>
        <?php
            /**
             * Inlude head
             */
            require_once __DIR__ . '/elements/head.php';
        ?>
    </head>
    <body>
        <div id="warpper">
            <div class="container-fluid">
                <div class="row" id="header">
                    <div id="title_row" class="row">
                        <div class="col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-xs-offset-1 col-lg-7 col-md-7 col-sm-7 col-xs-7 title">
                            <div class="title-center">
                                <h1 class="h1-title"><?php bloginfo('name'); ?></h1>
                                <h4 class="h4-title"><?php bloginfo('description'); ?></h4>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                            <div class="row">
                                
                                <?php
                                        require_once  __DIR__ . '/elements/search.php'
                                ?>
                                
                            </div>
                        </div>
                    </div>
                    <div id="menu_row" class="row">
                        <div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-2 col-xs-offset-2 col-lg-10 col-md-10 col-sm-10 col-xs-10">
                              <?php
                          
                          /*
                           * menu
                           */
                          
                          require_once __DIR__ . '/class/wp_bootstrap_navwalker.php';
                            wp_nav_menu( array(
                            'menu'              => 'primary_menu',
                            'depth'             => 2,
                            'container'         => 'div',
                            'container_class'   => 'collapse navbar-collapse',
                            'menu_class'        => 'nav navbar-nav menu_ul',
                            'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                            'walker'            => new wp_bootstrap_navwalker())
                        );
                          ?>
                        </div>
                    </div>
                </div>
                <div id="image_row" class="row hidden-xs">
                    <?php
                        require_once __DIR__ . '/elements/carousel.php';
                    ?>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <hr>
                    </div>
                </div>
                