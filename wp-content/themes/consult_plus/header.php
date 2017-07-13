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
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="profile" href="http://gmpg.org/xfn/11">

		<?php wp_head(); ?>
    </head>

<body <?php body_class(); ?>>
<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'consult_plus' ); ?></a>

    <header id="masthead" class="site-header">
        <div class="container">
            <div class="site-branding col-lg-2">
				<?php
				the_custom_logo();?>
            </div><!-- .site-branding -->

            <nav id="site-navigation" class="col-lg-7 main-navigation">
                <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'consult_plus' ); ?></button>
				<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				) );
				?>
            </nav><!-- #site-navigation -->

            <div class="contacts">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/public/images/phone-icon.png"></img>
                <span class="phone">+91 5685 6664 555</span>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/public/images/icon-envelope.png"></img>
            </div>

            <div class="col-lg-2 description ">
                <p class="site-title"><?php bloginfo( 'name' ); ?></p>
            </div>
        </div>

        <div class="col-lg-12 blog-heading">
            BLOG
        </div>

    </header><!-- #masthead -->

    <div id="content" class="site-content">
<?php wp_footer(); ?>