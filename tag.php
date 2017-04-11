<?php
/**
 * The template for displaying Tag pages
 *
 *
 * @subpackage WhiteTemplate
 * @since WhiteTemplate 1.0
 */
get_header(); ?>

	<div id="main">

		<?php if ( have_posts() ) : ?>

			<h1 id="resultTitle">TagArchives：<?php  single_cat_title(); ?></h1>

				<?php if ( tag_description() ) : ?>
					<div id="archiveMeta"><?php echo tag_description(); ?></div>
				<?php endif; ?>


			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content','post' ); ?>
			<?php endwhile; ?>

		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
		<?php endif; ?>

	</div><!-- /#main -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>