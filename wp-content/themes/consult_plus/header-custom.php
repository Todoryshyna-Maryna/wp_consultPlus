<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package consult_plus
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#content">
        <?php esc_html_e('Skip to content', 'consult_plus'); ?>
    </a>
    <div class="bg__overlay">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/public/images/header-bg.png"/>
    </div>
    <!--        <div class="container">-->
    <!--            <div class="row">-->
    <!--                <div class="col-lg-2 col-md-2 col-sm-3">-->
    <!--                    <a href="#" class="site-logo"></a>-->
    <!--                </div>-->
    <!--                <div class="col-lg-7 col-md-8 col-sm-6">-->
    <!--                    <ul class="nav-menu nav-menu__header-eg">-->
    <!--                        <li class="nav-menu_li"><a href="#" class="nav-menu_item">home</a></li>-->
    <!--                        <li class="nav-menu_li"><a href="#" class="nav-menu_item">about us</a></li>-->
    <!--                        <li class="nav-menu_li"><a href="#" class="nav-menu_item">industry</a></li>-->
    <!--                        <li class="nav-menu_li"><a href="#" class="nav-menu_item">services</a></li>-->
    <!--                        <li class="nav-menu_li"><a href="#" class="nav-menu_item">pages</a></li>-->
    <!--                        <li class="nav-menu_li"><a href="#" class="nav-menu_item">contact us</a></li>-->
    <!--                    </ul>-->
    <!--                </div>-->
    <!--                <div class="col-lg-3 col-md-2 col-sm-3">-->
    <!--                    <div class="phone__wr">-->
    <!--                        <a class="contact_top" href="tel:+1234567890">+91 5685 6664 555</a>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <div id="header-carousel" class="carousel slide carousel_positioning" data-ride="carousel">
        <!-- Indicators -->
        <div class="container">
            <div class="carousel-inner carousel-inner_header_position">
                <div class="item active">
                    <p class="carousel_message">we are leading consulting company</p>
                    <h1 class="carousel_header">choose your industry</h1>
                    <div class="industry__wr">
                        <a href="#" class="industry-block">
                            <div class="icon_wr icon_wr_education"></div>
                            <p class="option_desc">education</p>
                        </a>
                        <a href="#" class="industry-block">
                            <div class="icon_wr icon_wr_business">
                            </div>
                            <p class="option_desc">business</p>
                        </a>
                        <a href="#" class="industry-block">
                            <div class="icon_wr icon_wr_technology">
                            </div>
                            <p class="option_desc">technology</p>
                        </a>
                        <a href="#" class="industry-block">
                            <div class="icon_wr icon_wr_banking">
                            </div>
                            <p class="option_desc">banking</p>
                        </a>
                    </div>
                </div>
                <div class="item">
                    <p class="carousel_message">we are leading consulting company</p>
                    <h1 class="carousel_header">choose your industry</h1>
                    <div class="industry__wr">
                        <a href="#" class="industry-block">
                            <div class="icon_wr icon_wr_education">
                            </div>
                            <p class="option_desc">education</p>
                        </a>
                        <a href="#" class="industry-block">
                            <div class="icon_wr icon_wr_business">
                            </div>
                            <p class="option_desc">business</p>
                        </a>
                        <a href="#" class="industry-block">
                            <div class="icon_wr icon_wr_technology">
                            </div>
                            <p class="option_desc">technology</p>
                        </a>
                        <a href="#" class="industry-block">
                            <div class="icon_wr icon_wr_banking">
                            </div>
                            <p class="option_desc">banking</p>
                        </a>
                    </div>
                </div>
                <div class="item">
                    <p class="carousel_message">we are leading consulting company</p>
                    <h1 class="carousel_header">choose your industry</h1>
                    <div class="industry__wr">
                        <a href="#" class="industry-block">
                            <div class="icon_wr icon_wr_education">
                            </div>
                            <p class="option_desc">education</p>
                        </a>
                        <a href="#" class="industry-block">
                            <div class="icon_wr icon_wr_business">
                            </div>
                            <p class="option_desc">business</p>
                        </a>
                        <a href="#" class="industry-block">
                            <div class="icon_wr icon_wr_technology">
                            </div>
                            <p class="option_desc">technology</p>
                        </a>
                        <a href="#" class="industry-block">
                            <div class="icon_wr icon_wr_banking">
                            </div>
                            <p class="option_desc">banking</p>
                        </a>
                    </div>
                </div>
                <ol class="carousel-indicators header_slider">
                    <li data-target="#header-carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#header-carousel" data-slide-to="1"></li>
                    <li data-target="#header-carousel" data-slide-to="2"></li>
                </ol>
            </div>
        </div>