<?php
/**
 * The template for displaying Taxonomy pages.
 *
 *
 * @subpackage WhiteTemplate
 * @since WhiteTemplate 1.0
 */
get_header(); ?>

	<div id="main">

		<?php if ( have_posts() ) : ?>

			<h1 id="resultTitle"><?php echo $s ?>Archives</h1>

			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content','post' ); ?>
			<?php endwhile; ?>

		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
		<?php endif; ?>

	</div><!-- #main -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>