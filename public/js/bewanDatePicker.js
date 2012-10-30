$(document).ready(function(){
       
	$('.datepicker').livequery(function(){
               
		$(this).datepicker({'dateFormat' : 'yy-mm-dd'});
	});
});