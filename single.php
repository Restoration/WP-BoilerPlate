<?php
/**
 * The template for displaying all single posts
 *
 *
 * @subpackage WhiteTemplate
 * @since WhiteTemplate 1.0
 */
get_header(); ?>

	<div id="main">
		<?php if(have_posts()): while(have_posts()): the_post(); ?>

			<?php get_template_part('content','page');?>

		<?php endwhile; else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif;?>
	</div><!-- /#main -->

	<?php get_sidebar();?>

<?php get_footer();?>