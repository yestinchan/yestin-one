<?php
/*
 * The Template for displaying all single posts.
 *
 * @package WordPress - Yestin
 * @subpackage Yestin_One
 * @since Yestin One 1.0
 */

get_header(); ?>
	<div id="primary" class="site-content">
		<div id="content" role="main">

		<?php if (function_exists('yestin_breadcrumbs')) yestin_breadcrumbs(); ?>

			<?php while ( have_posts() ) : the_post(); ?>

				<?php 
				//阅读计数
				add_post_views(get_the_ID()); 
				?>
				<?php get_template_part( 'content', get_post_format() ); ?>
				<nav class="nav-single">
					<div class="assistive-text"><?php _e( 'Post navigation', 'themonic' ); ?></div>
					<span class="nav-previous"><?php previous_post_link( '%link', '<span class="meta-nav">' . _x( '&larr;', 'Previous post link', 'themonic' ) . '</span> %title' ); ?></span>
					<span class="nav-next"><?php next_post_link( '%link', '%title <span class="meta-nav">' . _x( '&rarr;', 'Next post link', 'themonic' ) . '</span>' ); ?></span>
				</nav><!-- .nav-single -->

				<?php comments_template( '', true ); ?>

			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>