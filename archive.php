<?php
/**
 * The template for displaying Archive pages
 *
 *
 * @subpackage WhiteTemplate
 * @since WhiteTemplate 1.0
 */
get_header(); ?>

	<div id="main">

	<h1 id="resultTitle">
		<?php if ( have_posts() ) : ?>
			<?php if ( is_day() ) : ?>
			Daily Archives：<?php the_time('j');?>
			<?php elseif ( is_month() ) :?>
			Monthly Archives：<?php the_time('F'); ?>
			<?php elseif ( is_year() ) : ?>
			Yearly Archives：<?php the_time('Y'); ?>
			<?php else : ?>
			Archives：<?php the_time('Y/m/d'); ?>
			<?php endif;?>
	</h1>

			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', 'post'); ?>
			<?php endwhile; ?>

		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
		<?php endif; ?>

	</div><!-- #main -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>