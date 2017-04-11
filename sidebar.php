<?php
/**
 * The sidebar containing the widget area
 *
 *
 * @subpackage WhiteTemplate
 * @since WhiteTemplate 1.0
 */
?>
<div id="sidebar">
	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('sideWidget') ) : ?>
    	<h3 class="widgetTitle"></h3>
		<p>ウィジェットが設定されていない場合、ここが表示されます。</p>
	<?php endif; ?>
</div><!-- /#sidebar -->