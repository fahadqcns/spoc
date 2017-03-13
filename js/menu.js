$(function() {
	alert('ttt');
	$('#main-menu > li').bind('mouseover', openSubMenu);
	$('#main-menu > li').bind('mouseout', closeSubMenu);
	
	function openSubMenu() {
		$(this).find('ul').css('visibility', 'visible');	
	};
	
	function closeSubMenu() {
		$(this).find('ul').css('visibility', 'hidden');	
	};
});