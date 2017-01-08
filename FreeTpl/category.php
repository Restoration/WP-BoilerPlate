<?php
/**
 * The template for displaying Category pages
 *
 *
 * @subpackage FreeTpl
 * @since FreeTpl 1.0
 */
get_header(); ?>

	<div id="main">

		<?php if ( have_posts() ) : ?>

			<h1 id="resultTitle">CategoryArchives：<?php  single_cat_title(); ?></h1>

				<?php if ( category_description() ) : ?>
				<div id="archiveMeta"><?php echo category_description(); ?></div>
				<?php endif; ?>


			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content','post' ); ?>
			<?php endwhile; ?>

		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
		<?php endif; ?>

	</div><!-- #main -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>