/* Set the width of the side navigation to 250px */
$(function(){
	$('#menuIcon').click(function(){
		$('#mySidenav').css('width','250px');
	})
	$('.closebtn').click(function(){
		$('#mySidenav').css('width','0');
	})
});