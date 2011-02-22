function changeTab(id) {
	// Set tab styles
	$('ul.tabs li.'+id).siblings().removeClass('active');
	$('ul.tabs li.'+id).addClass('active');
	// Hide all element siblings and show this one
	$('.tab-bodies .'+id).siblings().hide();
	$('.tab-bodies .'+id).show();
	// Done
	return false;
}