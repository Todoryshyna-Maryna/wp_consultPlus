<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package consult_plus
 */

?>
		<?php
		$args = array( 'post_type' => 'archive-acme_project', 'posts_per_page' => 10 );
		$loop = new WP_Query( $args );

		while ( $loop->have_posts() ) : $loop->the_post(); ?>
    <article class="grid-projects-item">
        <header class="entry-header">
        <div class="col-lg-1 col-md-2 m-orange-label projects-page_item-label"><?php

			$categories_list = get_the_category_list( esc_html__( ', ', 'consult_plus' ) );
			if ( $categories_list ) :
				/* translators: 1: list of categories. */
				printf( '<span class="cat-links m-cat-links">' . esc_html__( '%1$s', 'consult_plus' ) . '</span>', $categories_list ); // WPCS: XSS OK.

			endif;
			?>
        </div>
		<?php
		if ( has_post_thumbnail() ) :
			?>
            <div class="projects-page_item-bg ">
				<?php the_post_thumbnail( 'full' );
				set_post_thumbnail_size( '9999' ) ?>


                <div class="projects-page_post">
					<?php
					the_content( sprintf(
						wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
							__( 'Continue reading<p class="item_p"> "%s"</p>', 'consult_plus' ),
							array(
								'span' => array(
									'class' => array(),
								),
							)
						),
						get_the_title()
					) );

					wp_link_pages( array(
						'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'consult_plus' ),
						'after'  => '</div>',
					) );
					?>
                </div><!-- .entry-content -->
            </div>
    </header><!-- .entry-header -->
		<?php endif; ?>

    <div class="entry-content">
		<?php
		the_title( '<h2 class="item_heading"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '
<div class="project-ref green-label"><i class="fa fa-angle-up" aria-hidden="true"></i></div></a></h2>' );
		?>
    </div>

    <footer class="entry-footer">
    </footer><!-- .entry-footer -->
    </article><!-- #post-<?php the_ID(); ?> -->
		<?php
		endwhile;
		?>

