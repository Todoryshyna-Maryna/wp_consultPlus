<?php
/*
 * Template Name: Archive-projects
 * */

get_header(); ?>


    <main class="blog-content">
        <div class="container">

            <div class="blog-content_content-heading">
                <h2>
                    <b>Our featured Projects</b>
                </h2>
            </div>

        </div>

        <div class="grid-projects container">

			<?php
			if ( have_posts() ) :

				/* Start the Loop */
				while ( have_posts() ) : the_post();
					/*
					 * Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'template-parts/content-projects', get_post_format() );

				endwhile;

			else :

				get_template_part( 'template-parts/content-projects', 'none' );

			endif;?>



        </div>
    </main>

    <div class="pagination-container">
		<?php consultPlus_numeric_pagination(); ?>
    </div>

<?php
get_footer();