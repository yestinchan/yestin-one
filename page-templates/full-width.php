<?php
/**
 * Template Name: Full-width Page Template, No Sidebar
 *
 * Description: Use this page template to remove the sidebar from any page.
 *
 * Tip: to remove the sidebar from all posts and pages simply remove
 * any active widgets from the Main Sidebar area, and the sidebar will
 * disappear everywhere.
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
				<?php get_template_part( 'content', 'page' ); ?>
				<?php comments_template( '', true ); ?>
			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->
<?php get_footer(); ?>