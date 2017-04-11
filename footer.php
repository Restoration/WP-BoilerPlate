<?php
/**
 * The template for displaying the footer
 *
 * The footer containing the widget area
 *
 * @subpackage WhiteTemplate
 * @since WhiteTemplate 1.0
 */
?>
</div><!-- /#wrap .clearfix -->
<footer id="footer">
	<div id="footerInner">
		<ul class="widgetList">
			<li id="footerLeft"><?php dynamic_sidebar('footerWidgetLeft'); ?></li><!-- /#footerleft -->
			<li id="footerCenter"><?php dynamic_sidebar('footerWidgetCenter'); ?></li><!-- /#footercenter -->
			<li id="footerRight"><?php dynamic_sidebar('footerWidgetRight'); ?></li><!-- /#footerright -->
		</ul>
		<p id="copyright">Copyright © <?php echo date('Y'); ?> <a href="<?php bloginfo('url'); ?>"><?php bloginfo('name');?></a>  All Rights Reserved.</p>
	</div><!-- /#footerInner -->
</footer><!-- /#footer -->
</div><!-- /#container -->
<?php wp_footer();?>
</body>
</html>