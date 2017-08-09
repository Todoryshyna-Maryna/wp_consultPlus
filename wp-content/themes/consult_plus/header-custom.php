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
        <div class="container">
            <div class="row">
                <div class="site-branding col-lg-2 site-header_branding">
                    <?php
                    the_custom_logo(); ?>
                </div>
                <nav id="site-navigation" class="main-navigation col-lg-7 site-header_navigation">
                    <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
                        <?php esc_html_e('Primary Menu', 'consult_plus'); ?>
                    </button>
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'menu-1',
                        'menu_id' => 'primary-menu',
                    ));
                    ?>
                </nav>
                <div class="col-lg-3 col-md-2 col-sm-3">
                    <div class="phone__wr">
                        <a class="contact_top" href="tel:+1234567890">+91 5685 6664 555</a>
                    </div>
                </div>
            </div>
        </div>

        <div id="header-carousel" class="carousel slide carousel_positioning" data-ride="carousel">
            <div class="container">
                <div class="carousel-inner carousel-inner_header_position">
                    <div class="item active fixed-item">
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
                    <div class="item fixed-item">
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
                    <div class="item fixed-item" id="3">
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
        </div>


