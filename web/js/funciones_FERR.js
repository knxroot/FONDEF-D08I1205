/**
 * @fileoverview Este archivo contiene las funciones javascript utilizadas en el
 * formulario de FERR
 *
 * El sistema de documentacion de los ficheros JS es <a href='http://code.google.com/p/jsdoc-toolkit'>jsdoc-toolkit</a>
 * @author Gustavo Lacoste gustavo@lacosox.org
 * @version 0.1
 */

/**Capa de apoyo mediante JS al formulario FERR
 * @class FormFERR
 * @requires jquery-1.4.2.min.js, jquery-ui-1.8.1.custom.min.js,jquery.validate.js,funciones_global.js, DOM READY
 * @see  <h3>BIBLIOGRAFIA</h3>
 *
 * 1.- <a href="http://youhack.me/2010/04/22/live-character-count-with-progress-bar-using-jquery/comment-page-1/">+JQuery limitador de palabras/a><br>.
 */
FormFERR= function(){
  /** @ignore */
  var inicializar=function(){};
  /** @ignore */
  var validar=function(){};
  /** @ignore */
  var finalizar=function(){};
}

/**
 * Define los procedimeintos estaticos del formulario FERR
 * @function
 **/
FormFERR.prototype.inicializar= function(){

  /**
   * @description El fomrulario es limpio al recargar la páguina
   **/
  $('#formulario_FERR')[0].reset();


  /* FERR */
$("table input[type='text']").change( function() {
  var col=$(this).attr('name').substring(0,1);
  if(col!="M"){
  
	  var suma=0;
	  var NJ = [1,3,5,7,9]; // filas a sumar en no judicial
	  var J   = [2,4,6,8,10]; // filas a sumar en judicial

	  for(var i in NJ)
	  {
		suma=suma+parseInt($('#'+col+NJ[i]).val());
	  }
	  $('#'+col+'11_2').html(suma);
	  $('#'+col+'11').val(suma);

	  suma=0;i=0;
	  for(var i in J)
	  {
		suma=suma+parseInt($('#'+col+J[i]).val());
	  }
	  $('#'+col+'12_2').html(suma);
	  $('#'+col+'12').val(suma);
	  
	  /*START Calculo del TPD*/
	  var NJ_RR = ['A','B','C','D','E','F','G'];suma=0;i=0; // NJ_RR= NO JUDICIAL RESULT ROW
	  var J_RR=NJ_RR;// J_RR= JUDICIAL RESULT ROW 
	  for(var col in NJ_RR)
	  {
		suma=suma+parseInt($('#'+NJ_RR[col]+'11').val());
	  }
	  for(var col in J_RR)
	  {
		suma=suma+parseInt($('#'+J_RR[col]+'12').val());
	  }
	  $('#RCR_TPD_2').html(suma);
	  $('#RCR_TPD').val(suma);
	  
	  /*FIN Calculo del TPD*/
	  
	  /*START Calculo del TDIF*/
	  var NJ_RR = ['H','I','J'];suma=0;i=0; // NJ_RR= NO JUDICIAL RESULT ROW
	  var J_RR=NJ_RR;// J_RR= JUDICIAL RESULT ROW 
	  for(var col in NJ_RR)
	  {
		suma=suma+parseInt($('#'+NJ_RR[col]+'11').val());
	  }
	  for(var col in J_RR)
	  {
		suma=suma+parseInt($('#'+J_RR[col]+'12').val());
	  }
	  $('#RCR_TDIF_2').html(suma);
	  $('#RCR_TDIF').val(suma);
	  /*FIN Calculo del TDIF*/
  }
	  /*START Calculo del IEDS-D*/
	  var NJ_RR = ['A','B','C','D','E','F','G','H','I','J','K','L'];suma=0;i=0; // RR= RESULT'S ROW
	  var J_RR=NJ_RR;// J_RR= JUDICIAL RESULT ROW
	  var OD_R='M';
	  for(var col in NJ_RR)
	  {
		suma=suma+parseInt($('#'+NJ_RR[col]+'11').val());
	  }
	  for(var col in J_RR)
	  {
		suma=suma+parseInt($('#'+J_RR[col]+'12').val());
	  }
	  for (var i=1;i<=10;i++)
	  {
        suma=suma+parseInt($('#M'+i).val());
	
	  }
	  $('#RCR_IEDSD_2').html(suma);
	  $('#RCR_IEDSD').val(suma);
	  /*FIN Calculo del IEDS-D*/
	  
	  /*START Calculo del RCR_IEDSP*/  
	  var ponderacion=((parseInt($('#A11').val())+parseInt($('#A12').val()))*1)+
	  ((parseInt($('#B11').val())+parseInt($('#B12').val()))*2)+
	  ((parseInt($('#C11').val())+parseInt($('#C12').val()))*2)+
	  ((parseInt($('#D11').val())+parseInt($('#D12').val()))*2)+
	  ((parseInt($('#E11').val())+parseInt($('#E12').val()))*3)+
	  ((parseInt($('#F11').val())+parseInt($('#F12').val()))*3.5)+
	  ((parseInt($('#G11').val())+parseInt($('#G12').val()))*4)+
	  ((parseInt($('#H11').val())+parseInt($('#H12').val()))*1)+
	  ((parseInt($('#I11').val())+parseInt($('#I12').val()))*3)+
	  ((parseInt($('#J11').val())+parseInt($('#J12').val()))*5);
	  $('#RCR_IEDSP_2').html(ponderacion);
	  $('#RCR_IEDSP').val(ponderacion);
	  /*FIN Calculo del RCR_IEDSP*/

});


function respuestaToInt(respuesta){
  if(respuesta=="Si")
    return 1
  else if(respuesta=="No")
    return 0
  else if(respuesta=="NI")
    return 0
  else
    return 0
}

$("#tabBloque5 input:radio").change( function() { 
  var tpc=respuestaToInt($("input:radio[name='f5g']:checked").val())+respuestaToInt($("input:radio[name='f5h']:checked").val())+respuestaToInt($("input:radio[name='f5i']:checked").val())+respuestaToInt($("input:radio[name='f5j']:checked").val());
  var tde=respuestaToInt($("input:radio[name='f5a']:checked").val())+respuestaToInt($("input:radio[name='f5b']:checked").val())+respuestaToInt($("input:radio[name='f5c']:checked").val())+respuestaToInt($("input:radio[name='f5d']:checked").val())+respuestaToInt($("input:radio[name='f5e']:checked").val())+respuestaToInt($("input:radio[name='f5f']:checked").val());

  $("#total_problemas_conducta").html(tpc);
  $("#total_desenganche_escolar").html(tde);
  $("#total_riesgos_totales").html(tpc+tde);
});

$("#tabBloque6 input:radio").change( function() {
  var abc=["a","b","c","d","e"];
  var total=0;
  for(var l in abc)
{
    total=total+respuestaToInt($("input:radio[name='f6"+abc[l]+"']:checked").val())
}

  $("#total_relacion_con_pares").html(total);
});


$("#tabBloque7 input:radio").change( function() {
  var abc=["a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q"];
  var total=0;
  for(var l in abc)
{
    total=total+respuestaToInt($("input:radio[name='f7"+abc[l]+"']:checked").val())
}
  var tmt=respuestaToInt($("input:radio[name='f7l']:checked").val())+respuestaToInt($("input:radio[name='f7m']:checked").val())+respuestaToInt($("input:radio[name='f7q']:checked").val());
  var tds=respuestaToInt($("input:radio[name='f7e']:checked").val())+respuestaToInt($("input:radio[name='f7g']:checked").val())+respuestaToInt($("input:radio[name='f7h']:checked").val());

  $("#totalf7_riesgosfamiliares").html(total);
  $("#totalf7_malostratos").html(tmt);
  $("#totalf7_debilsupervision").html(tds);
});

$("#tabBloque8 input:radio").change( function() {

  var tci=respuestaToInt($("input:radio[name='f8a']:checked").val())+respuestaToInt($("input:radio[name='f8b']:checked").val())+respuestaToInt($("input:radio[name='f8c']:checked").val());
  var tsi=respuestaToInt($("input:radio[name='f8d']:checked").val())+respuestaToInt($("input:radio[name='f8e']:checked").val());

  $("#totalf8_conintereses").html(tci);
  $("#totalf8_sinintereses").html(tsi);
  $("#totalf8_intereses").html(tci+tsi);
});


$("#tabBloque9 input:radio").change( function() {
  var abc=["a","b","c","d","e","f"];
  var total=0;
  for(var l in abc)
{
    total=total+respuestaToInt($("input:radio[name='f9"+abc[l]+"']:checked").val())
}
  $("#totalf9").html(total);

});

$("#tabBloque10 input:radio").change( function() {
  var abc=["a","b","c","d","e","f","g"];
  var total=0;
  for(var l in abc)
{
    total=total+respuestaToInt($("input:radio[name='f10"+abc[l]+"']:checked").val())
}

  $("#totalf10").html(total);

});

$("#tabBloque11 input:radio").change( function() {

  var trp=respuestaToInt($("input:radio[name='f11d']:checked").val())+respuestaToInt($("input:radio[name='f11h']:checked").val())+respuestaToInt($("input:radio[name='f11j']:checked").val())+respuestaToInt($("input:radio[name='f11m']:checked").val())+respuestaToInt($("input:radio[name='f11n']:checked").val());
  var tcc=respuestaToInt($("input:radio[name='f11a']:checked").val())+respuestaToInt($("input:radio[name='f11b']:checked").val())+respuestaToInt($("input:radio[name='f11c']:checked").val())+respuestaToInt($("input:radio[name='f11e']:checked").val())+respuestaToInt($("input:radio[name='f11f']:checked").val())+respuestaToInt($("input:radio[name='f11g']:checked").val());
  var tvf=respuestaToInt($("input:radio[name='f11i']:checked").val())+respuestaToInt($("input:radio[name='f11j']:checked").val());

  $("#totalf11_a").html(trp);
  $("#totalf11_b").html(tcc);
  $("#totalf11_c").html(tvf);
    $("#totalf11_d").html(trp+tcc+tvf);
});


/* para los campus input al presionar ENTER no se hace nada, para dejar el focus del input el usuario debe hacer click
fuera del input, el enter es manejado fuera del focus del input como un envio del formulario*/

$("table input[type='text']").keypress(function (e) {
	if ((e.which && e.which == 13) || (e.keyCode && e.keyCode == 13)) {
		return false;
	} else {
		return true;
	}
});  
  
/* by danilo*/
	/*$(this).children("input").width($(this).css('width'));*/
	/*
$("td").each(function(){

	$(this).children("input").width("57,3px");
	$(this).children("input").height($(this).css('height'));
});
*/


/*Configuración tabs paguinado*/
$('#panelTabsPreguntas').tabs({ fx: { opacity: 'toggle' }});
$('#panelTabsPreguntas').tabs('select', 0);
$('#panelTabsPreguntas').tabs('paging', { cycle: true, follow: true, followOnSelect: true, selectOnAdd: true,nextButton: 'Siguiente &gt;', prevButton: '&lt; Anterior' });


} //END FormIngresoEncuestado.prototype.inicializar

/**
 * Realiza una validación del formulario aplicando las reglas de  validación de primer nivel para el formulario
 * FERR. Las configuraciones por defecto de las validaciones (estilo grafico, etc) son heredadas
 * desde el objeto Main en el archivo funciones_global.js.
 * @function
 * @requires 1.- <a href="http://docs.jquery.com/Plugins/Validation">jQuery validation</a><br>
 * 2.- Requiere que las validaciones esten activadas desde el objeto Main en
 *  funciones_global.js <br>
 **/
FormFERR.prototype.validar= function(){
    if(Main.getInstance().enableValidation === 'true'){
      jQuery.validator.addClassRules("botonradio", {
        required: true
      });
      return $("#formulario_FERR").valid(); //retorna true si valido, false si invalido
    } else{
      return true; //retorna verdadero si las validaciones estan desactivadas, esto es para que pase como si los campos fueran validos
    }
}


/**
 * Finaliza el instrumento FERR activo.
 * @function
 **/
function finalizarFERR(){
  $('#dialog-envio-finalizarFERR').dialog('open');
}

/*Eliminar espacios en cadenas para ver si no hay nada*/
function lTrim(sStr){
 while (sStr.charAt(0) == " ")
  sStr = sStr.substr(1, sStr.length - 1);
 return sStr;
}
function rTrim(sStr){
 while (sStr.charAt(sStr.length - 1) == " ")
  sStr = sStr.substr(0, sStr.length - 1);
 return sStr;
}
function allTrim(sStr){
 return rTrim(lTrim(sStr));
}

$().ready(function() {

//modals
//pestaña1
 $('#edad').jqm({ajax: '/modal/ferr/edad.html', trigger: 'a.edadtrigger'});
  $('#dcp').jqm({ajax: '/modal/ferr/dcp.html', trigger: 'a.dcptrigger'});
  $('#dcif').jqm({ajax: '/modal/ferr/dcif.html', trigger: 'a.dciftrigger'});
  $('#anosdes').jqm({ajax: '/modal/ferr/anosdes.html', trigger: 'a.anosdestrigger'});
  $('#polimorfismo1').jqm({ajax: '/modal/ferr/polimorfismo1.html', trigger: 'a.polimorfismo1trigger'});
  $('#edelictiva1').jqm({ajax: '/modal/ferr/edelictiva1.html', trigger: 'a.edelictiva1trigger'});
 $('#obs1').jqm({ajax: '/modal/ferr/obs1.html', trigger: 'a.obs1trigger'});
  $('#iedsd').jqm({ajax: '/modal/ferr/iedsd.html', trigger: 'a.iedsdtrigger'});
   $('#iedsp').jqm({ajax: '/modal/ferr/iedsp.html', trigger: 'a.iedsptrigger'});
 //pestaña2
   $('#viveactual').jqm({ajax: '/modal/ferr/viveactual.html', trigger: 'a.viveactualtrigger'});
      $('#vinculos').jqm({ajax: '/modal/ferr/vinculos.html', trigger: 'a.vinculostrigger'});
	     $('#autoreporte').jqm({ajax: '/modal/ferr/autoreporte.html', trigger: 'a.autoreportetrigger'});
		     $('#genograma').jqm({ajax: '/modal/ferr/genograma.html', trigger: 'a.genogramatrigger'});	 
//pestaña3
$('#prevencion').jqm({ajax: '/modal/ferr/prevencion.html', trigger: 'a.prevenciontrigger'});	
$('#internacion').jqm({ajax: '/modal/ferr/internacion.html', trigger: 'a.internaciontrigger'});	
$('#rpa').jqm({ajax: '/modal/ferr/rpa.html', trigger: 'a.rpatrigger'});	
$('#iai').jqm({ajax: '/modal/ferr/iai.html', trigger: 'a.iaitrigger'});	
$('#semicerrado').jqm({ajax: '/modal/ferr/semicerrado.html', trigger: 'a.semicerradotrigger'});	
$('#sistemacerrado').jqm({ajax: '/modal/ferr/sistemacerrado.html', trigger: 'a.sistemacerradotrigger'});
$('#ntotal').jqm({ajax: '/modal/ferr/ntotal.html', trigger: 'a.ntotaltrigger'});	
//pestaña4
$('#4a').jqm({ajax: '/modal/ferr/4a.html', trigger: 'a.4atrigger'});	
$('#4b').jqm({ajax: '/modal/ferr/4b.html', trigger: 'a.4btrigger'});	
$('#4c').jqm({ajax: '/modal/ferr/4c.html', trigger: 'a.4ctrigger'});	
$('#4d').jqm({ajax: '/modal/ferr/4d.html', trigger: 'a.4dtrigger'});		 
 //pestaña5
 $('#5a').jqm({ajax: '/modal/ferr/5a.html', trigger: 'a.5atrigger'});
  $('#5b').jqm({ajax: '/modal/ferr/5b.html', trigger: 'a.5btrigger'});
   $('#5c').jqm({ajax: '/modal/ferr/5c.html', trigger: 'a.5ctrigger'});
    $('#5d').jqm({ajax: '/modal/ferr/5d.html', trigger: 'a.5dtrigger'});
	 $('#5e').jqm({ajax: '/modal/ferr/5e.html', trigger: 'a.5etrigger'});
	  $('#5f').jqm({ajax: '/modal/ferr/5f.html', trigger: 'a.5ftrigger'});
	   $('#5g').jqm({ajax: '/modal/ferr/5g.html', trigger: 'a.5gtrigger'});
	    $('#5h').jqm({ajax: '/modal/ferr/5h.html', trigger: 'a.5htrigger'});
		 $('#5i').jqm({ajax: '/modal/ferr/5i.html', trigger: 'a.5itrigger'});
		  $('#5j').jqm({ajax: '/modal/ferr/5j.html', trigger: 'a.5jtrigger'});
  //pestaña6
  $('#6a').jqm({ajax: '/modal/ferr/6a.html', trigger: 'a.6atrigger'});
  $('#6b').jqm({ajax: '/modal/ferr/6b.html', trigger: 'a.6btrigger'});
   $('#6c').jqm({ajax: '/modal/ferr/6c.html', trigger: 'a.6ctrigger'});
    $('#6d').jqm({ajax: '/modal/ferr/6d.html', trigger: 'a.6dtrigger'});
	 $('#6e').jqm({ajax: '/modal/ferr/6e.html', trigger: 'a.6etrigger'});
	 //pestaña7
 $('#7a').jqm({ajax: '/modal/ferr/7a.html', trigger: 'a.7atrigger'});
  $('#7b').jqm({ajax: '/modal/ferr/7b.html', trigger: 'a.7btrigger'});
   $('#7c').jqm({ajax: '/modal/ferr/7c.html', trigger: 'a.7ctrigger'});
    $('#7d').jqm({ajax: '/modal/ferr/7d.html', trigger: 'a.7dtrigger'});
	 $('#7e').jqm({ajax: '/modal/ferr/7e.html', trigger: 'a.7etrigger'});
	  $('#7f').jqm({ajax: '/modal/ferr/7f.html', trigger: 'a.7ftrigger'});
	   $('#7g').jqm({ajax: '/modal/ferr/7g.html', trigger: 'a.7gtrigger'});
	    $('#7h').jqm({ajax: '/modal/ferr/7h.html', trigger: 'a.7htrigger'});
		 $('#7i').jqm({ajax: '/modal/ferr/7i.html', trigger: 'a.7itrigger'});
		  $('#7j').jqm({ajax: '/modal/ferr/7j.html', trigger: 'a.7jtrigger'});	
		  $('#7k').jqm({ajax: '/modal/ferr/7k.html', trigger: 'a.7ktrigger'});
 $('#7l').jqm({ajax: '/modal/ferr/7l.html', trigger: 'a.7ltrigger'});
	  $('#7m').jqm({ajax: '/modal/ferr/7m.html', trigger: 'a.7mtrigger'});
	   $('#7n').jqm({ajax: '/modal/ferr/7n.html', trigger: 'a.7ntrigger'});
	    $('#7o').jqm({ajax: '/modal/ferr/7o.html', trigger: 'a.7otrigger'});
		 $('#7p').jqm({ajax: '/modal/ferr/7p.html', trigger: 'a.7ptrigger'});
		  $('#7q').jqm({ajax: '/modal/ferr/7q.html', trigger: 'a.7qtrigger'});			  
  //8
   $('#8a').jqm({ajax: '/modal/ferr/8a.html', trigger: 'a.8atrigger'});
  $('#8b').jqm({ajax: '/modal/ferr/8b.html', trigger: 'a.8btrigger'});
   $('#8c').jqm({ajax: '/modal/ferr/8c.html', trigger: 'a.8ctrigger'});
    $('#8d').jqm({ajax: '/modal/ferr/8d.html', trigger: 'a.8dtrigger'});
	 $('#8e').jqm({ajax: '/modal/ferr/8e.html', trigger: 'a.8etrigger'});
	 //9
	$('#9a').jqm({ajax: '/modal/ferr/9a.html', trigger: 'a.9atrigger'});
  $('#9b').jqm({ajax: '/modal/ferr/9b.html', trigger: 'a.9btrigger'});
   $('#9c').jqm({ajax: '/modal/ferr/9c.html', trigger: 'a.9ctrigger'});
    $('#9d').jqm({ajax: '/modal/ferr/9d.html', trigger: 'a.9dtrigger'});
	 $('#9e').jqm({ajax: '/modal/ferr/9e.html', trigger: 'a.9etrigger'});
	  $('#9f').jqm({ajax: '/modal/ferr/9f.html', trigger: 'a.9ftrigger'}); 
  var myFormularioFERR=new FormFERR();
  myFormularioFERR.inicializar();
  
//10

$('#10a').jqm({ajax: '/modal/ferr/10a.html', trigger: 'a.10atrigger'});
  $('#10b').jqm({ajax: '/modal/ferr/10b.html', trigger: 'a.10btrigger'});
   $('#10c').jqm({ajax: '/modal/ferr/10c.html', trigger: 'a.10ctrigger'});
    $('#10d').jqm({ajax: '/modal/ferr/10d.html', trigger: 'a.10dtrigger'});
	 $('#10e').jqm({ajax: '/modal/ferr/10e.html', trigger: 'a.10etrigger'});
	  $('#10f').jqm({ajax: '/modal/ferr/10f.html', trigger: 'a.10ftrigger'});
	   $('#10g').jqm({ajax: '/modal/ferr/10g.html', trigger: 'a.10gtrigger'});
	   
	//11

$('#11a').jqm({ajax: '/modal/ferr/11a.html', trigger: 'a.11atrigger'});
  $('#11b').jqm({ajax: '/modal/ferr/11b.html', trigger: 'a.11btrigger'});
   $('#11c').jqm({ajax: '/modal/ferr/11c.html', trigger: 'a.11ctrigger'});
    $('#11d').jqm({ajax: '/modal/ferr/11d.html', trigger: 'a.11dtrigger'});
	 $('#11e').jqm({ajax: '/modal/ferr/11e.html', trigger: 'a.11etrigger'});
	  $('#11f').jqm({ajax: '/modal/ferr/11f.html', trigger: 'a.11ftrigger'});
	   $('#11g').jqm({ajax: '/modal/ferr/11g.html', trigger: 'a.11gtrigger'});
	    $('#11h').jqm({ajax: '/modal/ferr/11h.html', trigger: 'a.11htrigger'});
		 $('#11i').jqm({ajax: '/modal/ferr/11i.html', trigger: 'a.11itrigger'});
		  $('#11j').jqm({ajax: '/modal/ferr/11j.html', trigger: 'a.11jtrigger'});	
		  $('#11k').jqm({ajax: '/modal/ferr/11k.html', trigger: 'a.11ktrigger'});
 $('#11l').jqm({ajax: '/modal/ferr/11l.html', trigger: 'a.11ltrigger'});
	  $('#11m').jqm({ajax: '/modal/ferr/11m.html', trigger: 'a.11mtrigger'});
	   $('#11n').jqm({ajax: '/modal/ferr/11n.html', trigger: 'a.11ntrigger'});
	   
   /** Si es válido muestro una confirmación sino no hago nada ya que el
    * método validar mostrará errores de validación y frenará el evento
    * submit.
    */
    $('form#formulario_FERR').submit(function(){
      if($('#esCerrarForm').val()!='CERRAR'){
        $('form#formulario_FERR').hide();
        $('#msgzone').show();
      }
    });
	});



