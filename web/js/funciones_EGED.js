/**
 * @fileoverview Este archivo contiene las funciones javascript utilizadas en el
 * formulario de EGED
 *
 * El sistema de documentacion de los ficheros JS es <a href='http://code.google.com/p/jsdoc-toolkit'>jsdoc-toolkit</a>
 * @author Gustavo Lacoste gustavo@lacosox.org
 * @version 0.1
 */

/** Capa de apoyo mediante JS al formulario EGED
 * @class FormEGED
 * @requires jquery-1.4.2.min.js, jquery-ui-1.8.1.custom.min.js,jquery.validate.js,funciones_global.js, DOM READY
 * @see  <h3>BIBLIOGRAFIA</h3>
 *
 * 1.- <a href="http://youhack.me/2010/04/22/live-character-count-with-progress-bar-using-jquery/comment-page-1/">+JQuery limitador de palabras/a><br>.
 */
FormEGED= function(){
  /** @ignore */
  var inicializar=function(){};
  /** @ignore */
  var validar=function(){};

}

/**
 * Define los procedimeintos estaticos del formulario EGED
 * @function
 **/
FormEGED.prototype.inicializar= function(){

  /**
   * @description El fomrulario es limpio al recargar la páguina
   **/
  $('#formulario_EGED')[0].reset();

  /** @description Efecto al ahcer un focus sobre un radio, hace un efecto
   * resaltado para resaltar que es esa la pregunta que se esta respondiendo.
   * El efecto puede ser logrado también cambiando el focus con la tecla tab.
   **/
   
   $("#EGED_pregunta_1").simpletip({ content: 'Consignar este enunciado si el adolescente comete por lo menos un delito contra las personas', position: ["350", "20"] });
  $("#EGED_pregunta_2").simpletip({ content: 'Consignar este enunciado si el adolescente, en el conjunto de su historia delictiva, acumula más de 5 delitos', position: ["350", "-10"] });
     $("#EGED_pregunta_3").simpletip({ content: 'Consignar este enunciado si el adolescente estaba intoxicado (droga o alcohol) durante la comisión de por lo menos uno de los delitos', position: ["350", "-5"] });
      $("#EGED_pregunta_4").simpletip({ content: 'Consignar este enunciado si el adolescente tenía en su poder o utilizaba instrumentos o un arma durante la comisión de por lo menos uno de los delitos', position: ["350", "-5"] });
	  $("#EGED_pregunta_5").simpletip({ content: 'Consignar este enunciado si el adolescente ha planeado u organizado sus delitos', position: ["350", "-5"] });
	  $("#EGED_pregunta_6").simpletip({ content: 'Consignar este enunciado si el adolescente comete por lo menos un delito en compañía de pares que tienen antecedentes criminales', position: ["350", "-5"] });
	  $("#EGED_pregunta_7").simpletip({ content: 'Consignar este enunciado si el adolescente tiene entre sus conocidos o amigos (además de los cómplices) pares desadaptados y / o infractores', position: ["350", "-5"] });
	  $("#EGED_pregunta_8").simpletip({ content: 'Consignar este enunciado si el adolescente no siente ningún tipo de tensión durante la comisión de por lo menos un delito', position: ["350", "-5"] });
	  $("#EGED_pregunta_9").simpletip({ content: 'Consignar este enunciado si el adolescente tiene motivaciones utilitarias en por lo menos uno de los delitos', position: ["350", "-5"] });
	  $("#EGED_pregunta_10").simpletip({ content: 'Consignar este enunciado si el adolescente tiene antecedentes penales', position: ["350", "-5"] });
	  $("#EGED_pregunta_11").simpletip({ content: 'Consignar este enunciado si el adolescente comete un delito antes de los 12 años', position: ["350", "-5"] });
	  $("#EGED_pregunta_12").simpletip({ content: 'Consignar este enunciado si el adolescente ha presentado comportamientos destructivos durante la comisión de uno o dos delitos', position: ["350", "-5"] });
	 
  $('.botonradio').focusin(function() {
    var nombre_radio=$(this).attr('name');//nombreradio
    nombre_bloque=nombre_radio.replace("radio_VorF_EGED_", "EGED_pregunta_");//se transforma en el nombre del bloque
    $("#"+nombre_bloque).addClass('EGED_bloque_pregunta_seleccionada');
    $(this).focusout(function() {
      var nombre_radio=$(this).attr('name');//nombreradio
      nombre_bloque=nombre_radio.replace("radio_VorF_EGED_", "EGED_pregunta_");//se transforma en el nombre del bloque
      $("#"+nombre_bloque).removeClass('EGED_bloque_pregunta_seleccionada');
    });
  });

  /** @description Setea las configuraciones para el dialog de añadir comentario.
   **/
  $( "#dialogo-addcomentario" ).dialog( "destroy" );
  $( "#dialogo-addcomentario").dialog({
    height: 350,
    width: 551,
    modal: true,
    autoOpen: false,
    buttons: {
      "Comentar": function() {
        var id_pregunta=$(this).data('pregunta').id;
        $("#comentario_"+id_pregunta).val(allTrim($("#text_area_input_comentario").val()));
        if($("#comentario_"+id_pregunta).val()!=""){
          $("#boton_add_comentario_"+id_pregunta).removeClass("ui-icon-comentar");
          $("#boton_add_comentario_"+id_pregunta).addClass("ui-icon-comentado");
        }
        else{
          $("#boton_add_comentario_"+id_pregunta).removeClass("ui-icon-comentado");
          $("#boton_add_comentario_"+id_pregunta).addClass("ui-icon-comentar");
        }
        $(this).dialog( "close" );
      },
      "Cancelar": function() {
        $( this ).dialog( "close" );
      }
   },
   open: function(event, ui) {
     var id_pregunta=$(this).data('pregunta').id;
     var num_pregunta=$(this).data('pregunta').numero;
     var texto_pregunta=$(this).data('pregunta').texto;

     /*Obtengo el comentario que ya se habia hecho a la pregunta desde el
      *textarea oculto(por si es una edicion), en caso de que nunca se halla
      *comentado la pregunta esto se devolvera vacio.
      *
      *El valor sera utilizado como valor por defecto del dialogo de
      *comentario*/
     var c_editar=$("#comentario_"+id_pregunta).val();
     $("#text_area_input_comentario").val(c_editar);
     var texto_pregunta_corto='"'+texto_pregunta.substring(0,81)+' ..."';
     $("#dialog_i_pregunta_referencia").html(texto_pregunta_corto);
     // cambiamos el titulo del dialogo para indicar la pregunta que se esta editando
     $(this).dialog( "option", "title", "Agregar comentario - Pregunta "+num_pregunta );
   }
  });



  /*Contador de máxima cantidad de palabras en el comentario a añadir
   *Ref: http://youhack.me/2010/04/22/live-character-count-with-progress-bar-using-jquery/comment-page-1/
   **/
  $("#text_area_input_comentario").keyup(function()//Detect keypress in the textarea
    {
      var text_area_box =$(this).val();//Get the values in the textarea
      var max_numb_of_words = 280;//Set the Maximum Number of words
      var main = text_area_box.length*100;//Multiply the lenght on words x 100
      var value= (main / max_numb_of_words);//Divide it by the Max numb of words previously declared
      var count= max_numb_of_words - text_area_box.length;//Get Count of remaining characters

      if(text_area_box.length <= max_numb_of_words)
      {
        $("#progressbar").css("background-color","#445c8a");//Set the background of the progressbar to blue
        $('#count').html(count);//Output the count variable previously calculated into the div with id= count
        $('#progressbar').animate(//Increase the width of the css property "width"
          {
          "width": value+'%',
          }, 1);//Increase the progress bar
      } else {
        $("#progressbar").css("background-color","#ff8200");//If More words is typed into the textarea than the specified limit ,Change the progress bar from blue to yellow
        $("#text_area_input_comentario").val(text_area_box.substr(0,max_numb_of_words));//Remove the excess words using substring
      }
      return false;
    });


   /** @description Setea las configuraciones para el dialog confirmar envio_resp_por_bloque.
   **/
  		// a workaround for a flaw in the demo system (http://dev.jqueryui.com/ticket/4375), ignore!
		$("#dialog:ui-dialog").dialog( "destroy" );
		$("#dialog-envio-resp-por-bloque").dialog({
			resizable: false,
			height: 250,
			width: 450,
			modal: true,
      autoOpen: false,
			buttons: {
				"Continuar con proximo bloque": function() {
          document.formulario_EGED.submit();
				},
				"Cancelar": function() {
					$(this).dialog("close");
				}
			}
		});

} //END FormIngresoEncuestado.prototype.inicializar

/**
 * Realiza una validación del formulario aplicando las reglas de  validación de primer nivel para el formulario
 * EGED. Las configuraciones por defecto de las validaciones (estilo grafico, etc) son heredadas
 * desde el objeto Main en el archivo funciones_global.js.
 * @function
 * @requires 1.- <a href="http://docs.jquery.com/Plugins/Validation">jQuery validation</a><br>
 * 2.- Requiere que las validaciones esten activadas desde el objeto Main en
 *  funciones_global.js <br>
 **/
FormEGED.prototype.validar= function(){
    if(Main.getInstance().enableValidation === 'true'){
      jQuery.validator.addClassRules("botonradio", {
        required: true
      });
      return $("#formulario_EGED").valid(); //retorna true si valido, false si invalido
    } else{
      return true; //retorna verdadero si las validaciones estan desactivadas, esto es para que pase como si los campos fueran validos
    }
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
  var myFormularioEGED=new FormEGED();
  myFormularioEGED.inicializar();

   /** Si es válido muestro una confirmación sino no hago nada ya que el
    * método validar mostrará errores de validación y frenará el evento
    * submit.
    */
    $('form#formulario_EGED').submit(function(){
      if(myFormularioEGED.validar()){
          document.formulario_EGED.submit();
          //$this.submit();
        //$("#dialog-envio-resp-por-bloque").dialog('open');
     }
      return false;
    }); 
	});



