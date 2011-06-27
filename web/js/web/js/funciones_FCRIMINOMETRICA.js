function IsNumeric(input)
{
    return (input - 0) == input && input.length > 0;
}


$().ready(function() {
  $("#accordion2").accordion({active:2 , collapsible: true });
   $("#accordion").accordion({active:2 , collapsible: true });

$('input').change(function () {
    var el2= $(this).attr("name");
    el = el2.substr(0, 3);
    


if(el.substr(0, 2)=='11'){
	var aux=sumartotal('11');
	if(!isNaN(aux)){
		$('#11suma').val(aux);
		$('#11').val($('#11suma').val()/4);
	}
}

if(el.substr(0, 2)=='12'){
	var aux=sumartotal('12');
	if(!isNaN(aux)){
		$('#12suma').val(aux);
		$('#12').val($('#12suma').val()/4);
	}
}

if(el.substr(0, 2)=='21'){
	var aux=sumartotal('21');
	if(!isNaN(aux)){
		$('#21suma').val(aux);
		$('#21').val($('#21suma').val()/4);
	}
}

if(el.substr(0, 2)=='22'){
	var aux=sumartotal('22');
	if(!isNaN(aux)){
		$('#22suma').val(aux);
		$('#22').val($('#22suma').val()/4);
	}
}

/* SUMAS DE ABAJO*/
var cdelic=parseFloat($('#11').val())+ parseFloat($('#12').val());
var csocial=parseFloat(10)-(parseFloat($('#21').val())+ parseFloat($('#22').val()));


if(!isNaN(cdelic) ){
$('#cdelic').val(cdelic);
}

if(!isNaN(csocial)){
	
	$('#csocial').val(csocial);
	
	
}

if(!isNaN(cdelic)&&!isNaN(csocial)){
$('#sumafinal').val(cdelic+csocial);
	$('#indicecrim').val($('#sumafinal').val()/2);
	
	}

switch(el)
{

case '11a':
  $('#11asuma').val(sumar('11a',7));
  $('#11a').val($('#11asuma').val()/7);
  break;
case '11b':
    $('#11b4').val(sumar('11b4',3));    
    $('#11bsuma').val(sumar('11b',7));
    $('#11b').val($('#11bsuma').val()/7);
  break;
  case '11c':
   $('#11csuma').val(sumar('11c',5));
  $('#11c').val($('#11csuma').val()/5);
  break;
 
 case '12a':
  $('#12asuma').val(sumar('12a',3));
  $('#12a').val($('#12asuma').val()/3);
  break;
  
  case '12d':
  $('#12dsuma').val(sumar('12d',2));
  $('#12d').val($('#12dsuma').val()/2);
    break;
	
case '21a':
    $('#21a1').val(sumar('21a1',2)/2); 
    $('#21a2').val(sumar('21a2',2)/2);    	
    $('#21asuma').val(sumar('21a',4));
    $('#21a').val($('#21asuma').val()/4);
  break;

case '21b':
    $('#21b2').val(sumar('21b2',2)/2); 
    $('#21b3').val(sumar('21b3',2)/2);    	
    $('#21bsuma').val(sumar('21a',3));
    $('#21b').val($('#21bsuma').val()/3);
  break;
  
  case '21c':
  $('#21csuma').val(sumar('21c',3));
  $('#21c').val($('#21csuma').val()/3);
    break;
	
	 case '21d':
  $('#21dsuma').val(sumar('21d',4));
  $('#21d').val($('#21dsuma').val()/4);
    break;
	
	case '22a':
    $('#22a1').val(sumar('22a1',2)/2); 
   $('#22a2').val(sumar('22a2',2)/2); 
   $('#22a3').val(sumar('22a3',2)/2); 
   $('#22a4').val(sumar('22a4',2)/2);    
    $('#22asuma').val(sumar('22a',4));
    $('#22a').val($('#22asuma').val()/4);
  break;
  
  case '22b':
  
   $('#22b4').val(sumar('22b4',2)/2);    
    $('#22bsuma').val(sumar('22b',4));
    $('#22b').val($('#22bsuma').val()/4);
  break;
  
    case '22c':
  
  
    $('#22csuma').val(sumar('22c',4));
    $('#22c').val($('#22csuma').val()/4);
  break;
  
    case '22d':
  
  
    $('#22dsuma').val(sumar('22d',3));
    $('#22d').val($('#22dsuma').val()/3);
  break;
  
  
   
  
	
	
default:
}


 });

    
    
    
    
function sumar(bloque, limit){
    var s=0;
    for(var i=1;i<=limit;i++){
        if(IsNumeric($('#'+bloque+i).val())){
            s=s+ parseInt($('#'+bloque+i).val());
        }
    }
    return s;
}

function sumartotal(bloque){
    var su=0;
  
            su=parseFloat($('#'+bloque+'a').val())+ parseFloat($('#'+bloque+'b').val())+ parseFloat($('#'+bloque+'c').val())+ parseFloat($('#'+bloque+'d').val());
       
       
    
    return su;
}



});



