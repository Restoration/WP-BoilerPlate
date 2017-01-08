<?php
/**
 * The template for displaying post content
 *
 *
 * @subpackage FreeTpl
 * @since FreeTpl 1.0
 */
 ?>
<article>
		<h1><?php the_title();?></h1>
		<ul class="postMeta">
			<li><?php the_date(); ?></li>
			<li><?php the_category(' ');?></li>
			<li><?php the_tags(); ?></li>
		</ul>
	<div id="content">
		<?php the_content(); ?>
	</div><!-- /#content -->

	<div id="comment">
		<?php comment_form(); ?>
	</div><!-- /#comment -->

</article>