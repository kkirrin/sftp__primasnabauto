<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package flare
 */

get_header(); ?>

<div id="content" class="site-content">
	<div class="container tb-post-content">
		<div id="primary--single" class="content-area">
			<main id="main" class="site-main" role="main">
					<?php
					while ( have_posts() ) : the_post();

						get_template_part( 'template-parts/content', 'single'  );

						the_post_navigation( array(
							'next_text' => '<span class="post-navi" aria-hidden="true">' . __('NEXT POST', 'flare' ) . '</span> ' .
								'<span class="screen-reader-text">' . __( 'Next post:', 'flare' ) . '</span> ' .
								'<span class="post-title"> %title &raquo</span>',
							'prev_text' => '<span class="post-navi" aria-hidden="true">' . __('PREVIOUS POST', 'flare' ) . '</span> ' .
								'<span class="screen-reader-text">' . __('Previous post:', 'flare' ) . '</span> ' .
								'<span class="post-title">&laquo %title</span>',

						) );
					endwhile; // End of the loop.
					?>
			</main><!-- #main -->
		</div><!-- #primary -->
		<?php
			get_sidebar();
		?>
</div>
<?php
get_footer();
