$('#menu a.submenu').click(function(){
	$('a.submenu').removeClass('menu-active');
	$(this).addClass('menu-active');
})