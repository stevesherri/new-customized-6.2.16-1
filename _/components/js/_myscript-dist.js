
//# sourceMappingURL=_myscript-dist.js.map
$(function(){
	
	// Make menus drop on rollover
	$('ul.nav li.dropdown').hover(function(){
		$('.dropdown-menu',this).fadeIn();
	}, function(){
		$('.dropdown-menu',this).fadeOut('fast');
	}); // hover
});