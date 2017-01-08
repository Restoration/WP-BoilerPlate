<?php
/**
 * The template for displaying  Index pages
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage 
 * @since 
 */
get_header(); ?>


	<div id="main">

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content','post' ); ?>
			<?php endwhile; else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
		<?php endif; ?>

</div><!-- /#main -->

  <?php get_sidebar();?>


<?php get_footer();?>