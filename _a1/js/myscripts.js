
//# sourceMappingURL=myscripts.js.map
$(function(){
	"use strict";
	
	//Highlight current nav
	$("#home a:contains('Add An Image')").parent().addClass('active');
	// Make menus drop on rollover
	$('ul.nav li.dropdown').hover(function(){
		$('.dropdown-menu',this).fadeIn();
	}, function(){
		$('.dropdown-menu',this).fadeOut('fast');
	}); // hover
});