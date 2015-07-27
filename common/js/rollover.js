$(function() {
	var nav = $('.overimg,a img');
	nav.hover(
		function(){
			$(this).fadeTo( 'fast',0.5);
		},
		function () {
			$(this).fadeTo('fast',1);
		}
	);
});