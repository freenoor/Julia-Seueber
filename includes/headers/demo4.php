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
            <div class="headerbar header-demo1 only-search" id="headerbar">
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

                            <h1 class="page-title"><?php printf( esc_html__( 'Suchergebnisse für: %s', 'yourtheme' ), '<span>' . get_search_query() . '</span>' ); ?></h1>

                            
                        </nav>
                    </div>
                </div>
            </div>
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

