jQuery(document).ready(function(){
	$(function(){
		$('#searchform').wrapInner('<table><tr></tr></table>');
		$('#s').wrap('<td></td>');
		$('#searchsubmit').wrap('<td></td>');
		$('.tagcloud').addClass('clearfix');
		$('.widgetList li .widgetArea').css('border','0');
	});
});


