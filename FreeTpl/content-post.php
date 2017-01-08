<?php
/**
 * The template for displaying the Post
 *
 *
 * @subpackage FreeTpl
 * @since FreeTpl 1.0
 */
?>
<article class="post">
	<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>

	<div class="postInner clearfix">
		<div class="leftContent">
		<?php
			if ( has_post_thumbnail() ):
			$title= get_the_title();
			the_post_thumbnail(array( 250,250 ),array( 'alt' =>$title, 'title' => $title ));?>
		<?php else: ?>
			<a href="<?php the_permalink();?>"><img src="<?php bloginfo('template_directory');?>/image/noimage.png" alt="no image" title="no image" width="250" height="250" class="photo" /></a>
		<?php endif; ?>
		</div><!-- /.leftContent -->

		<div class="rightContent">
			<ul class="postMeta">
				<li><time><?php the_date("Y.m/d");?></time></li>
				<li>カテゴリー：<?php the_category(' / ');?></li>
				<li>タグ：<?php the_tags('',' / ','');?></li>
			</ul>
			<div class="postText">
      			<?php echo mb_substr(strip_tags($post-> post_content), 0, 300); ?>
	  		</div><!-- /.postText -->
	  	</div><!-- /.rightContent -->
	  		<p class="moreLink"><a href="<?php the_permalink();?>">続きを読む</a></p>
	  	</div><!-- /.postInner .clearfix -->
</article><!-- /.post-->