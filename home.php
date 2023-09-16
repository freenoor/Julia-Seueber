
<?php /* Template Name: Home */ 
include("includes/headers/demo1.php"); 
?>
<div class="page-home">
<section class="desk-height banner__section">
        <div class="swiper mySwiper mySwiperone">
            <div class="swiper-wrapper ">
                <?php
                $args = array(
                'post_type' => 'banner-pt',
                'posts_per_page' => '-1',
                );
                $loop = new WP_Query($args);
                while($loop->have_posts()):
                $loop->the_post();
                ?>
                <div class="swiper-slide" style="background-image: url(<?php the_post_thumbnail_url();?>" alt="" loading= “lazy”);>	
                    <!-- <img src="<?php the_post_thumbnail_url();?>" alt="" loading= “lazy”> -->
                    <div class="slider__content">
                        <div class="container">
                            <h2><?php the_content();?></h2>
                            <h1><?php the_title();?></h1>
                            <!-- <h3><?php the_excerpt();?></h3> -->
                            
                            <?php if(is_active_sidebar('widget-4') ) { ?>
                            <div class="button_welcomesection">
                            <div class="rightside_head-btn">
                                <ul>
                                <?php dynamic_sidebar('widget-4');?>
                            </div>
                            </div>
                            <?php } ?>
                            
                        </div>
                    </div>
                </div>
                <div class="arrows">
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                </div>
                <?php
                endwhile;
                wp_reset_postdata();
                ?>
            </div>
        </div>
</section>
<section class="threeservices__section">
        <div class="container">
        <p class="resources__title"><?php the_field('prof_title'); ?></p>
            <div class="row flex justify-between">
                <div class="col-lg-4">
                <div class="res__box">
                    <img src="<?php echo ( get_field('group_profffesional')['imgone-values'] );?>" alt="" loading= “lazy”>
                <div class="content_box"><h2><?php echo ( get_field('group_profffesional')['txtone-values'] );?></h2><p><?php echo ( get_field('group_profffesional')['subone-values'] );?></p></div></div>
                </div>
                <div class="col-lg-4">
                <div class="res__box">
                    <img src="<?php echo ( get_field('group_profffesional')['imgtwo-values'] );?>" alt="" loading= “lazy”>
                <div class="content_box"><h2><?php echo ( get_field('group_profffesional')['txttwo-values'] );?></h2><p><?php echo ( get_field('group_profffesional')['subtwo-values'] );?></p></div></div>
                </div>
                <div class="col-lg-4">
                <div class="res__box">
                    <img src="<?php echo ( get_field('group_profffesional')['imgthree-values'] );?>" alt="" loading= “lazy”>
                <div class="content_box"><h2><?php echo ( get_field('group_profffesional')['txtthree-values'] );?></h2><p><?php echo ( get_field('group_profffesional')['subthree-values'] );?></p></div></div>
                </div>
            </div>
        </div>
    </section>
    <section class="uberuns__section" id="uns">
        <div class="container">
            <div class="row">
                <div class="lefts col-lg-6">
                    <div class="img" style="background-image: url(<?php the_field('uberuns-bg'); ?>"></div>
                </div>
                <div class="rights col-lg-6">
                <h1><?php echo ( get_field('gr_uberuns')['title-us'] );?></h1>
                <?php echo ( get_field('gr_uberuns')['sub-us'] );?>

                <div class="button_kostenles">
                <?php if(is_active_sidebar('widget-2') ) { ?>
                        <div class="rightside_head-btn">
                            <ul>
                            <?php dynamic_sidebar('widget-2');?>
                            </ul>
                        </div>
                        <?php } ?>
                </div>
                <?php
                $signature_url = get_field('gr_uberuns')['signature-us'];
                if (!empty($signature_url)) {
                    echo '<img src="' . $signature_url . '" alt="">';
                }
                ?>
                </div>
            </div>
        </div>
    </section>
    <section class="resources__section" id="rechtsgebiete">
        <div class="container">
        <p class="resources__title"><?php the_field('rechtsgebiete-title'); ?></p>
            <div class="row flex justify-between">
                <div class="res__box col-lg-4">
                    <div class="img">
                    <img src="<?php echo get_bloginfo('template_directory')?>/src/img/agreement.svg" alt="" loading= “lazy”>
                    </div>
                <div class="content_box"><h2><?php echo ( get_field('group_r')['title-rone'] );?></h2><p><?php echo ( get_field('group_r')['sub-rone'] );?></p></div></div>
                <div class="res__box col-lg-4">
                    <div class="img">
                    <img src="<?php echo get_bloginfo('template_directory')?>/src/img/judge.svg" alt="" loading= “lazy”>
                    </div>
                <div class="content_box"><h2><?php echo ( get_field('group_r')['title-rtwo'] );?></h2><p><?php echo ( get_field('group_r')['sub-rone'] );?></p></div></div>
                <div class="res__box col-lg-4">
                    <div class="img"><img src="<?php echo get_bloginfo('template_directory')?>/src/img/libra.svg" alt="" loading= “lazy”></div>
                <div class="content_box"><h2><?php echo ( get_field('group_r')['title-rthree'] );?></h2><p><?php echo ( get_field('group_r')['sub-rone'] );?></p></div></div>
            </div>
        </div>
    </section>

    <section class="fallstudio__section">
        <div class="container">
        <p class="fallstudio__title"><?php the_field('fallstudio_title'); ?></p>
            <div class="row flex justify-between">
            <?php
                $args = array(
                'post_type' => 'second-pt',
                'posts_per_page' => '3',
                );
                $loop = new WP_Query($args);
                while($loop->have_posts()):
                $loop->the_post();
                ?>
                <div class="col-lg-4">
                <a href="<?php the_permalink()?>" class="disable-link">
                <div class="res__box">
                <img src="<?php the_post_thumbnail_url();?>" alt="" loading= “lazy”>
                    <div class="content_box">
                        <?php the_excerpt(); ?>
                        <h2><?php the_title();?></h2>
                    </div>
                </div>
                </a>
                </div>
                <?php
                endwhile;
                wp_reset_postdata();
                ?>
            </div>
        </div>
    </section>

    <section class="blog__section" id="blog">
        <div class="container">
        <p class="blog__title"><?php the_field('blog_title'); ?></p>
        <div class="swiper mySwiper mySwipertwo">
            <div class="swiper-wrapper ">
            <?php
                $args = array(
                'post_type' => 'blogs-pt',
                'posts_per_page' => '-1',
                );
                $loop = new WP_Query($args);
                while($loop->have_posts()):
                $loop->the_post();
                ?>
                <div class="swiper-slide">	
                <div class="res__box">
                <div class="img">
                <img src="<?php the_post_thumbnail_url();?>" alt="" loading= “lazy”>
                </div>
                <a href="<?php the_permalink()?>">
                    <div class="content_box">
                        <div class="flex">
                            <span class="datepost"><?php the_date('j M Y'); ?></span>
                            <?php $excerpt = get_post_field('post_excerpt', get_the_ID()); ?>
                            <?php if (!empty($excerpt)) : ?>
                                <span class="namepost"><?php echo $excerpt; ?></span>
                            <?php endif; ?>
                        </div>
                        <h2><?php the_title();?></h2>
                        <?php the_content(); ?>
                    </div>
                </a>

                </div>
                </div>
                <?php
                endwhile;
                wp_reset_postdata();
                ?>
                </div>    
            </div>     
            <div class="arrows arrows-blog">
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                </div>
        </div>
    </section>
    <section class="clientssay__section">
    <p class="clientssay__title"><?php the_field('clients_saytitle'); ?></p>
        <div class="container">
    <div class="swiper mySwiper mySwiperthree">
            <div class="swiper-wrapper ">
                <?php
                $args = array(
                'post_type' => 'third-pt',
                'posts_per_page' => '-1',
                );
                $loop = new WP_Query($args);
                while($loop->have_posts()):
                $loop->the_post();
                ?>
                <div class="swiper-slide">	
                    <div class="inside__slide">
                        <div class="slider__content">
                        <span></span>
                            <h2><?php the_content();?></h2>
                            <div class="flex">
                            <h1><?php the_title();?></h1>
                            <?php $excerpt = get_post_field('post_excerpt', get_the_ID()); ?>
                            <?php if (!empty($excerpt)) : ?>
                                <?php the_excerpt();?>
                            <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                endwhile;
                wp_reset_postdata();
                ?>
            </div>
            <div class="swiper-pagination"></div>
        </div>
        </div>
    </section>

    <section class="contactus__section" id="kontakt">
        <div class="layer"><img src="<?php echo get_bloginfo('template_directory')?>/src/img/judge0img-bg.webp);" alt="" loading= “lazy”></div>
        <div class="container">
            <h1 class="resources__title"><?php the_field('contactus-title'); ?></h1>
            <h2 class="resources__sub"><?php the_field('contactus-sub'); ?></h2>
            <?php include("includes/sides/contactform.php");  ?>
        </div>
    </section>



</div>
<?php include("includes/footers/demo2.php");  ?>



