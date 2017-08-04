<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package consult_plus
 */

get_header(); ?>


    <main class="blog-content">
        <div class="m-container">

            <div class="blog-content_content-heading">
                <h2>
                    <b>BLOG PAGE</b>
                </h2>
            </div>

        </div>


        <div class="grid m-container">

            <?php
            $query_args = array(
	            'posts_per_page' => 9,
	            'paged' => get_query_var( 'paged' )
            );
            $wp_query = new WP_Query($query_args);
            ?>


			<?php if ( $wp_query->have_posts() ) :

				if ( is_home() && ! is_front_page() ) : ?>
                    <header>
                        <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
                    </header>

					<?php
				endif;
				/* Start the Loop */
				while ( $wp_query->have_posts() ) : $wp_query->the_post();


					/*
					 * Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'template-parts/content-blog', get_post_format() );


				endwhile;


			else :

				get_template_part( 'template-parts/content-blog', 'none' );

			endif;?>
<?php wp_reset_query(); ?>

        </div>
        <div class="m-pagination-container">
<!--			--><?php //consultPlus_numeric_pagination(); ?>
<!--			--><?php //consultPlus_ajax_pagination(); ?>
	        <?php
	        global $wp_query; // you can remove this line if everything works for you

	        // don't display the button if there are not enough posts
	        if (  $wp_query->max_num_pages > 1 )
		        echo '<div class="misha_loadmore">More posts</div>'; // you can use <a> as well
	        ?>
        </div>
    </main>


<?php
get_footer();
