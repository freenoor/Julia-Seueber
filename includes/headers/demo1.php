<?php
/**
 * @package Standard
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <!-- <meta charset="<?php bloginfo( 'charset' ); ?>"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="description" content="Build your own ecommerce shop">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="apple-touch-icon" href="src/img/apple.png">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div id="page" class="site">

        <!-- Header no topbar w normal navmenu -->
        <header id="demoone" class="site-header">
            <!-- Top NAV -->
            <div class="topbar">
                <div class="container">
                    <div class="flex justify-between topbar-dir">
                    <?php if(is_active_sidebar('widget-3') ) { ?>
                        <div class="leftside_head-btn">
                            <ul>
                            <?php dynamic_sidebar('widget-3');?>
                            </ul>
                        </div>
                        <?php } ?>
                        <?php if(is_active_sidebar('widget-2') ) { ?>
                        <div class="rightside_head-btn">
                            <ul>
                            <?php dynamic_sidebar('widget-2');?>
                            </ul>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <!-- Normal NAV -->
            <?php if (is_front_page() || is_404() ): ?>
            <div class="headerbar header-demo1" id="headerbar">
                <div class="container">
                    <div class="menu-here frontpage-header">
                        <nav class="navbar navbar-expand-lg navbar-light navbar-center" id="scroll-change">

                            <?php if(is_active_sidebar('widget-1') ) { ?>
                            <a class="logo_header" href="<?php echo esc_url(home_url('/')); ?>" aria-label="logo header">
                            <ul>
                                <?php dynamic_sidebar('widget-1');?>
                            </ul>
                            </a>
                            <?php } ?>

                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                <div class="menu-m">
                                    <span class="menu-global menu-top"></span>
                                    <span class="menu-global menu-middle"></span>
                                    <span class="menu-global menu-bottom"></span>
                                </div>
                            </button>

                            <?php wp_nav_menu(
                                array(
                                'theme_location'    => 'menu-1',
                                'menu_id'        => 'primary-menu',
                                'menu_class'        => 'navbar-nav',
                                'container_class'  => 'collapse navbar-collapse main-nav-toggle',
                                'container_id'    => 'navbarNav',
                                )
                                ); 
                            ?>

                            <div class="searchbar">
                                <div class="control">
                                    <div class="btn-material search-toggle">
                                    </div>
                                    <i class="fa fa-search-loc"></i>
                                </div>
                                <i class="icon-close material-icons">Schließen</i>
                                <div class="search-input">
                                    <form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                                    <label>
                                        <span class="screen-reader-text">Suchen nach:</span>
                                        <input type="search" class="search-field" placeholder="Search..." value="<?php echo get_search_query(); ?>" name="s" />
                                    </label>
                                    <button type="submit" aria-label="search results" class="search-submit"></button>
                                    </form>
                                </div>
                            </div>

                        </nav>
                    </div>
                </div>
            </div>
            <?php else: ?>
            <!-- other pages - different header -->
            <div class="headerbar header-demo1 demo1-other" id="headerbar">
                <div class="container">
                    <div class="menu-here frontpage-header">
                        <nav class="navbar navbar-expand-lg navbar-light navbar-center" id="scroll-change">

                            <?php if(is_active_sidebar('widget-1') ) { ?>
                            <a class="logo_header" href="<?php echo esc_url(home_url('/')); ?>">
                            <ul>
                                <?php dynamic_sidebar('widget-1');?>
                            </ul>
                            </a>
                            <?php } ?>

                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                <div class="menu-m">
                                    <span class="menu-global menu-top"></span>
                                    <span class="menu-global menu-middle"></span>
                                    <span class="menu-global menu-bottom"></span>
                                </div>
                            </button>

                            <?php wp_nav_menu(
						array(
						'theme_location'    => 'menu-1',
						'menu_id'        => 'primary-menu',
						'menu_class'        => 'navbar-nav',
						'container_class'  => 'collapse navbar-collapse main-nav-toggle',
						'container_id'    => 'navbarNav',
						)
						); 
					?>
                     <div class="searchbar">
                                <div class="control">
                                    <div class="btn-material search-toggle">
                                    </div>
                                    <i class="fa fa-search-loc"></i>
                                </div>
                                <i class="icon-close material-icons">Schließen</i>
                                <div class="search-input">
                                    <form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                                    <label>
                                        <span class="screen-reader-text">Suchen nach:</span>
                                        <input type="search" class="search-field" placeholder="Suchen..." value="<?php echo get_search_query(); ?>" name="s" />
                                    </label>
                                    <button type="submit" class="search-submit"></button>
                                    </form>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
            <?php endif;?>
        </header><!-- #demoone -->

        <script>
        // Demo1 - Header with topbar
        var prevScrollpos = window.pageYOffset;
        window.onscroll = function() {
            var currentScrollPos = window.pageYOffset;
            if (prevScrollpos > currentScrollPos) {
                document.getElementById("demoone").style.cssText = "top: 0px; transition: .5s";
            } else {
                document.getElementById("demoone").style.cssText =
                    "top: -81px; transition: .5s; box-shadow: 0px 10px 16px #1a1a2e10;";
            }
            prevScrollpos = currentScrollPos;
        }
        </script>
