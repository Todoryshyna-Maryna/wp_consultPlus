<article id="post-<?php the_ID(); ?>"  <?php post_class('m-single-post'); ?> >
    <header class="entry-header m-single-post_header">
        <div class="col-lg-1 col-md-2 col-xs-2 green-label item-label"><?php

			$categories_list = get_the_category_list( esc_html__( ', ', 'consult_plus' ) );
			if ( $categories_list ) :
				/* translators: 1: list of categories. */
				printf( '<span class="cat-links m-cat-links">' . esc_html__( '%1$s', 'consult_plus' ) . '</span>', $categories_list ); // WPCS: XSS OK.
				?>
                <i class="fa fa-quote-right"></i>
				<?php
			endif;
			?>
        </div>
    </header><!-- .entry-header -->

    <div class="entry-content m-single-post_content">


		<?php
		if ( has_post_thumbnail() ) :
			?><div class="m-single-post_content_thumbnail"><?php  the_post_thumbnail('full'); set_post_thumbnail_size('9999') ?></div>
		<?php endif; ?>
        <div class="m-single-post_content_text">
			<?php
			the_title( '<h1 class="entry-title m-single-post_content_title">', '</h1>' );
			?>

			<?php
			the_content( sprintf(
				wp_kses(
				/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'consult_plus' ),
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
        </div>
    </div><!-- .entry-content -->

    <footer class="entry-footer m-single-post_footer">
        <div class=" m-single-post_footer_contacts">
            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-share-alt m-single-post_footer_contacts_share" aria-hidden="true"></i></a>
        </div>


    </footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->