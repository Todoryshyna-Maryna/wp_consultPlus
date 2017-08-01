<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package consult_plus
 */

get_header(); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main  single-post">
            <div class="m-container">
				<?php
				while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content-single', get_post_format() );

				?>

                <div class="single-post_related-posts">
                    <div class="single-post_related-posts_heading">
                        Related Post
                    </div>
					<?php
					$related = get_posts( array( 'category__in' => wp_get_post_categories($post->ID), 'numberposts' => 5, 'post__not_in' => array($post->ID) ) );
					if( $related ) foreach( $related as $post ) {
						setup_postdata($post); ?>
                        <div class="single-post_related-posts_item">
							<?php
							if ( has_post_thumbnail() ) :
								?><div class="single-post_related-posts_thumbnail"><?php  the_post_thumbnail('full'); set_post_thumbnail_size('9999') ?></div>
							<?php endif; ?>
                            <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a>
                            <span class="item_date single-post_related-posts_date">
						 <?php consult_plus_posted_on_single(); ?>
                    </span>
                        </div>
					<?php }
					wp_reset_postdata();
					?>
                </div>
            </div>
            <!--                 If comments are open or we have at least one comment, load up the comment template.-->
            <div class="comments-bg">
				<?php
				if ( comments_open() || get_comments_number() ) :
					comments_template(   '/comments-singlePost.php',  false );
				endif;
				?>
				<?php
				endwhile; // End of the loop.
				?>
            </div>
        </main><!-- #main -->
    </div><!-- #primary -->

<?php
get_footer();