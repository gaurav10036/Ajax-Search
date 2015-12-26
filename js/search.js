$(document).ready(function(){
	var self = $(this);
  
  $('#s').keydown(function(event){
		if(event.keyCode == 13) 
		{
 
			event.preventDefault();
			return false;
		}
		
	});
	
	
	$('#s').keyup(function(event){
		if(event.keyCode == 13) 
		{
 
			event.preventDefault();
			return false;
		}
 
		$('.loading').show();
		var query = $('#s').val();
		$.ajax({
			url:'result.php',
			type:'POST',
			data:{q:query},
			success:function(data)
			{
				$('.result-inner').html(data);
				$('#result').delay(1000).fadeIn(200);
				$('.loading').delay(1000).fadeOut(300);
			}
		});
	});
	
});
