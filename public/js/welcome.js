/* Set the width of the side navigation to 250px */
$(function(){
	$('#menuIcon').click(function(){
		if($('#menuBar').css('visibility')=='hidden'){
				$('#menuBar').css('visibility','visible');
				$('#menuBar').css('opacity','1');
				$('#menuIcon img').css('transform','rotate(90deg)');
				$('#menuIcon img').css('transition','all 0.5s ease');
				$('#menuBar').css('transition','all 0.5s ease');
		}else{
				$('#menuBar').css('visibility','hidden');
				$('#menuBar').css('opacity','0');
				$('#menuBar').css('transition','all 0.5s ease');
				$('#menuIcon img').css('transform','rotate(180deg)');
				$('#menuIcon img').css('transition','all 0.5s ease');
		}
	})
});