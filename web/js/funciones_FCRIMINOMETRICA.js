

function IsNumeric(input)
{
    return (input - 0) == input && input.length > 0;
}


$().ready(function() {

alert("Aaa..");
//tip tooltip

$(".tip_trigger").hover(function(){
        tip = $(this).find('.tip');
        tip.show(); //Show tooltip
    }, function() {
        tip.hide(); //Hide tooltip
    }).mousemove(function(e) {
        var mousex = e.pageX -300; //Get X coodrinates
        var mousey = e.pageY - 185; //Get Y coordinates
        var tipWidth = tip.width(); //Find width of tooltip
        var tipHeight = tip.height(); //Find height of tooltip

        //Distance of element from the right edge of viewport
        var tipVisX = $(window).width() - (mousex + tipWidth);
        //Distance of element from the bottom of viewport
        var tipVisY = $(window).height() - (mousey + tipHeight);

        if ( tipVisX < 20 ) { //If tooltip exceeds the X coordinate of viewport
            mousex = e.pageX - tipWidth - 20;
        } if ( tipVisY < 20 ) { //If tooltip exceeds the Y coordinate of viewport
            mousey = e.pageY - tipHeight - 20;
        }
        //Absolute position the tooltip according to mouse position
        tip.css({  top: mousey, left: mousex });
    });



//fin tooltip
 $('#ritmo').jqm({ajax: '/modal/ritmo.html', trigger: 'a.ritmotrigger'});
 $('#gravedad').jqm({ajax: '/modal/gravedad.html', trigger: 'a.gravedadtrigger'});
  $('#variedad').jqm({ajax: '/modal/variedad.html', trigger: 'a.variedadtrigger'});
  $('#evolucion').jqm({ajax: '/modal/evolucion.html', trigger: 'a.evoluciontrigger'});
   $('#precocidad').jqm({ajax: '/modal/precocidad.html', trigger: 'a.precocidadtrigger'});
    $('#frecuencia').jqm({ajax: '/modal/frecuencia.html', trigger: 'a.frecuenciatrigger'});
	 $('#experticia').jqm({ajax: '/modal/experticia.html', trigger: 'a.experticiatrigger'});
	 $('#fugas').jqm({ajax: '/modal/fugas.html', trigger: 'a.fugastrigger'});
	 	 $('#vandalismo').jqm({ajax: '/modal/vandalismo.html', trigger: 'a.vandalismotrigger'});
		 $('#rinas').jqm({ajax: '/modal/rinas.html', trigger: 'a.rinastrigger'});
		 $('#consumo').jqm({ajax: '/modal/consumo.html', trigger: 'a.consumotrigger'});
		 $('#indisiplina').jqm({ajax: '/modal/indisiplina.html', trigger: 'a.indisiplinatrigger'});
		 $('#ociosidad').jqm({ajax: '/modal/ociosidad.html', trigger: 'a.ociosidadtrigger'});
		 $('#negativo').jqm({ajax: '/modal/negativo.html', trigger: 'a.negativotrigger'});
		 
		 $('#sanciones').jqm({ajax: '/modal/sanciones.html', trigger: 'a.sancionestrigger'});
		 $('#proteccion').jqm({ajax: '/modal/proteccion.html', trigger: 'a.protecciontrigger'});
		 $('#escolares').jqm({ajax: '/modal/escolares.html', trigger: 'a.escolarestrigger'});
		 $('#detenciones').jqm({ajax: '/modal/detenciones.html', trigger: 'a.detencionestrigger'});
		 $('#severa').jqm({ajax: '/modal/severa.html', trigger: 'a.severatrigger'});
		  $('#enculturacion').jqm({ajax: '/modal/enculturacion.html', trigger: 'a.enculturaciontrigger'});
	 //12
	 $('#repetitivo').jqm({ajax: '/modal/repetitivo.html', trigger: 'a.repetitivotrigger'});
	  $('#resignacion').jqm({ajax: '/modal/resignacion.html', trigger: 'a.resignaciontrigger'});
	   $('#experiencia').jqm({ajax: '/modal/experiencia.html', trigger: 'a.experienciatrigger'});
	  $('#rechazo').jqm({ajax: '/modal/rechazo.html', trigger: 'a.rechazotrigger'});
	  $('#impunidad').jqm({ajax: '/modal/impunidad.html', trigger: 'a.impunidadtrigger'});
	   $('#inestabilidad').jqm({ajax: '/modal/inestabilidad.html', trigger: 'a.inestabilidadtrigger'});
           //21
             $('#a21a1').jqm({ajax: '/modal/21a1.html', trigger: 'a.a21a1trigger'});
               $('#a21a2').jqm({ajax: '/modal/21a2.html', trigger: 'a.a21a2trigger'});
                 $('#a21a3').jqm({ajax: '/modal/21a3.html', trigger: 'a.a21a3trigger'});
                   $('#a21a4').jqm({ajax: '/modal/21a4.html', trigger: 'a.a21a4trigger'});
                   
                   
       $('#a21b1').jqm({ajax: '/modal/21b1.html', trigger: 'a.a21b1trigger'});
        $('#a21b2').jqm({ajax: '/modal/21b2.html', trigger: 'a.a21b2trigger'});
         $('#a21b3').jqm({ajax: '/modal/21b3.html', trigger: 'a.a21b3trigger'});
         
                            
       $('#a21c1').jqm({ajax: '/modal/21c1.html', trigger: 'a.a21c1trigger'});
        $('#a21c2').jqm({ajax: '/modal/21c2.html', trigger: 'a.a21c2trigger'});
         $('#a21c3').jqm({ajax: '/modal/21c3.html', trigger: 'a.a21c3trigger'});
         
            $('#a21d1').jqm({ajax: '/modal/21d1.html', trigger: 'a.a21d1trigger'});
        $('#a21d2').jqm({ajax: '/modal/21d2.html', trigger: 'a.a21d2trigger'});
         $('#a21d3').jqm({ajax: '/modal/21d3.html', trigger: 'a.a21d3trigger'});
            $('#a21d4').jqm({ajax: '/modal/21d4.html', trigger: 'a.a21d4trigger'})
         
	 
 // select + reference "triggering element" -- will pass to $.jqm()
  var triggers = $('a.ex3bTrigger')[0];
   
  $('#ex3b').jqm({
    trigger: triggers,
    ajax: 'images/3b.html',
    target: 'div.jqmAlertContent',
    overlay: 0
    });
  
  // Close Button Highlighting. IE doesn't support :hover. Surprise?
  if($.browser.msie) {
  $('div.jqmAlert .jqmClose')
  .hover(
    function(){ $(this).addClass('jqmCloseHover'); }, 
    function(){ $(this).removeClass('jqmCloseHover'); });
  }

  
  
 
  $("#accordion2").accordion({active:2 , collapsible: true });
  $("#accordion").accordion({active:2 , collapsible: true });

$('input').change(function () {
    var el2= $(this).attr("name");
    el = el2.substr(0, 3);
    


if(el.substr(0, 2)=='11'){
	var aux=sumartotal('11');
	if(!isNaN(aux)){
		$('#11suma').val(aux);
		$('#11').val(Math.round(($('#11suma').val()/4)*100)/100);
                
                $('#result_11').html('('+Math.round($('#11').val()*100)/100+')');
                
	}
}

if(el.substr(0, 2)=='12'){
	var aux=sumartotal('12');
	if(!isNaN(aux)){
		$('#12suma').val(aux);
		$('#12').val(Math.round(($('#12suma').val()/4)*100)/100);
                $('#result_12').html('('+Math.round($('#12').val()*100)/100+')');
	}
}

if(el.substr(0, 2)=='21'){
	var aux=sumartotal('21');
	if(!isNaN(aux)){
		$('#21suma').val(aux);
		$('#21').val(Math.round(($('#21suma').val()/4)*100)/100);
                $('#result_21').html('('+Math.round($('#21').val()*100)/100+')');
	}
}

if(el.substr(0, 2)=='22'){
	var aux=sumartotal('22');
	if(!isNaN(aux)){
		$('#22suma').val(aux);
		$('#22').val(Math.round(($('#22suma').val()/4)*100)/100);
                $('#result_22').html('('+Math.round($('#22').val()*100)/100+')');
	}
}

/* SUMAS DE ABAJO*/
var cdelic=parseFloat($('#11').val())+ parseFloat($('#12').val());

var csocial=parseFloat(10)-(parseFloat($('#21').val())+ parseFloat($('#22').val()));


if(!isNaN(cdelic) ){
$('#cdelic').val(Math.round(cdelic*100)/100);
}

if(!isNaN(csocial)){
	
	$('#csocial').val(Math.round(csocial*100)/100);
	
	
}

if(!isNaN(cdelic)&&!isNaN(csocial)){
$('#sumafinal').val(cdelic+csocial);
	$('#indicecrim').val(Math.round(($('#sumafinal').val()/2)*100)/100);
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



