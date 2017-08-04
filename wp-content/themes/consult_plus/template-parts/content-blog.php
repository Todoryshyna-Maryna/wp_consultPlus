<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package consult_plus
 */

?>

<<<<<<< HEAD
       <?php if($count==2) :
       echo ' <article class="grid-item item m-blue-bg"> ';
       else :
            echo '<article class="grid-item item">';
       endif; ?>
            <header class="entry-header">
                <div class="col-lg-1 col-md-2 green-label item-label"><?php

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



	            <?php
	            if ( has_post_thumbnail() ) :
		            ?><div class="item-bg"><?php  the_post_thumbnail('full'); set_post_thumbnail_size('9999') ?></div>
	            <?php endif; ?>


                <?php
				if ( is_singular() ) :
					the_title( '<h1 class="entry-title">', '</h1>' );
				else :
					the_title( '<h2 class="item_heading"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
				endif; ?>
            </header><!-- .entry-header -->

            <div class="entry-content">
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

            <footer class="entry-footer">
                <!--			    --><?php //consult_plus_entry_footer(); ?>

				<?php if ( 'post' === get_post_type() ) : ?>

                    <span class="item_date">
=======
<article class="grid-item item">
<header class="entry-header">
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

	<?php
	if ( has_post_thumbnail() ) :
		?><div class="item-bg"><?php  the_post_thumbnail('full'); set_post_thumbnail_size('9999') ?></div>
	<?php endif; ?>


	<?php
	if ( is_singular() ) :
		the_title( '<h1 class="entry-title">', '</h1>' );
	else :
		the_title( '<h2 class="item_heading"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
	endif; ?>
</header><!-- .entry-header -->

<div class="entry-content">
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

<footer class="entry-footer">
    <!--			    --><?php //consult_plus_entry_footer(); ?>

	<?php if ( 'post' === get_post_type() ) : ?>

        <span class="item_date">
>>>>>>> a365bda6ca57c89ca806986c58a51ad557ac4d49
						 <?php consult_plus_posted_on(); ?>
                    </span>

        <div class="col-lg-offset-7 item_share">
            <i class="fa fa-share-alt" aria-hidden="true"></i>
        </div>
		<?php
	endif;
	?>

</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->




