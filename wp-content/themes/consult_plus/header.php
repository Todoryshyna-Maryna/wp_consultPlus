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
    <a class="skip-link screen-reader-text" href="#content">
        <?php esc_html_e( 'Skip to content', 'consult_plus' ); ?>
    </a>

    <header id="masthead" class="site-header">
        <div class="m-container">
            <div class="site-branding col-lg-2 col-lg-offset-0 col-md-2 col-md-offset-5 site-header_branding">
				<?php
				the_custom_logo();?>
            </div><!-- .site-branding -->

            <nav id="site-navigation" class="main-navigation col-lg-7 col-lg-offset-0 col-md-offset-1 site-header_navigation">
                <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
                    <?php esc_html_e( 'Primary Menu', 'consult_plus' ); ?>
                </button>
				<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				) );
				?>
            </nav><!-- #site-navigation -->

            <div class="site-header_contacts">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/public/images/phone-icon.png"></img>
                <span class="site-header_contacts_phone">+91 5685 6664 555</span>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/public/images/icon-envelope.png"></img>
            </div>

            <div class="col-lg-2 description ">
                <p class="site-title"><?php bloginfo( 'name' ); ?></p>
            </div>
        </div>

        <div class="col-lg-12 col-md-12 m-heading">
            <?php if (is_home()):
	            _e('Blog');
            else:
	            wp_title('',true);
            endif;?>
        </div>

    </header><!-- #masthead -->

    <div id="content" class="site-content">
<?php wp_footer(); ?>