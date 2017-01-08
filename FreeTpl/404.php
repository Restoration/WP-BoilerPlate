<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 *
 * @subpackage FreeTpl
 * @since FreeTpl 1.0
 */
get_header(); ?>

	<div id="main">

		<?php if ( have_posts() ) : ?>

			<h1 id="resultTitle">404エラー</h1>

			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content','post' ); ?>
			<?php endwhile; ?>

		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
		<?php endif; ?>

	</div><!-- #main -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>