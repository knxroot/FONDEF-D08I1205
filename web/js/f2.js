$(document).ready(function()
{

 $("#cargar").click(function(){
$.get(url, function(data){
  		$("#mensaje").html(data);
	});
 });


});
