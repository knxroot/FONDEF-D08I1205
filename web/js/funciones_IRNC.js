/**
 * @fileoverview Este archivo contiene las funciones javascript utilizadas en el
 * formulario de IRNC
 *
 * El sistema de documentacion de los ficheros JS es <a href='http://code.google.com/p/jsdoc-toolkit'>jsdoc-toolkit</a>
 * @author Gustavo Lacoste gustavo@lacosox.org
 * @version 0.1
 */

/** Capa de apoyo mediante JS al formulario IRNC
 * @class FormIRNC
 * @requires jquery-1.4.2.min.js, jquery-ui-1.8.1.custom.min.js,jquery.validate.js,funciones_global.js, DOM READY
 * @see  <h3>BIBLIOGRAFIA</h3>
 *
 * 1.- <a href="http://youhack.me/2010/04/22/live-character-count-with-progress-bar-using-jquery/comment-page-1/">+JQuery limitador de palabras/a><br>.
 */
FormIRNC= function(){
  /** @ignore */
  var inicializar=function(){};
  /** @ignore */
  var validar=function(){};
  /** @ignore */
  var finalizar=function(){};
}

/**
 * Define los procedimeintos estaticos del formulario IRNC
 * @function
 **/
FormIRNC.prototype.inicializar= function(){

  /**
   * @description El fomrulario es limpio al recargar la páguina
   **/
  $('#formulario_IRNC')[0].reset();

  /** @description Efecto al hacer un focus sobre un radio, hace un efecto
   * resaltado para resaltar que es esa la pregunta que se esta respondiendo.
   * El efecto puede ser logrado también cambiando el focus con la tecla tab.
   **/
  $('.botonradio').focusin(function() {
    var nombre_radio=$(this).attr('name');//nombreradio
    nombre_bloque=nombre_radio.replace("radio_VorF_IRNC_", "IRNC_pregunta_");//se transforma en el nombre del bloque
    $("#"+nombre_bloque).addClass('IRNC_bloque_pregunta_seleccionada');
    $(this).focusout(function() {
      var nombre_radio=$(this).attr('name');//nombreradio
      nombre_bloque=nombre_radio.replace("radio_VorF_IRNC_", "IRNC_pregunta_");//se transforma en el nombre del bloque
      $("#"+nombre_bloque).removeClass('IRNC_bloque_pregunta_seleccionada');
    });
  });


  /** @description Efecto al hacer un focus sobre un campo de comentario, hace un efecto
   * resaltado para resaltar que es esa la pregunta que se esta respondiendo.
   * El efecto puede ser logrado también cambiando el focus con la tecla tab.
   **/
  $('.textarea_comentario_expicito').focusin(function() {
    var nombre_radio=$(this).attr('name');//nombreradio
    nombre_bloque=nombre_radio.replace("comentario_", "IRNC_pregunta_");//se transforma en el nombre del bloque
    $("#"+nombre_bloque).addClass('IRNC_bloque_pregunta_seleccionada');
    $(this).focusout(function() {
      var nombre_radio=$(this).attr('name');//nombreradio
      nombre_bloque=nombre_radio.replace("comentario_", "IRNC_pregunta_");//se transforma en el nombre del bloque
      $("#"+nombre_bloque).removeClass('IRNC_bloque_pregunta_seleccionada');
    });
  });


  /** @description Setea las configuraciones para el dialog de añadir comentario.
   **/

//$('.textarea_comentario_expicito').height(30);
$('.textarea_comentario_expicito').autoResize({
    // On resize:
    onResize : function() {
        $(this).css({opacity:0.8});
    },
    // After resize:
    animateCallback : function() {
        $(this).css({opacity:1});
    },
    // Quite slow animation:
    animateDuration : 300,
    // More extra space:
    extraSpace : 40,
    limit: 93
});




   /** Efecto campu input religión participa
    **/
   $('input[name="check_VorF_IRNC_52"]').change(function () {
        if($("#check_VorF_IRNC_52").is(':checked')){
          $("#check_VorF_IRNComfix_input").fadeIn().focus();
        }else{
          $("#check_VorF_IRNComfix_input").hide();
      }
   });

   $('input[name="check_VorF_IRNC_53"]').change(function () {
        if($("#check_VorF_IRNC_53").is(':checked')){
          $("#check_VorF_IRNComfix_input").fadeIn().focus();
        }else{
          $("#check_VorF_IRNComfix_input").hide();
      }
   });

   $('input[name="check_VorF_IRNC_80"]').change(function () {
        if($("#check_VorF_IRNC_80").is(':checked')){
          $("#check_VorF_IRNComfix_input").fadeIn().focus();
        }else{
          $("#check_VorF_IRNComfix_input").hide();
      }
   });

/*Resaltar label para checkboxs (js compactado)*/
$('input:checkbox').change(function () {
  ($(this).is(':checked')) ? $("label[for='"+ $(this).attr('id')+"']").addClass("checkboxlabel_on") : $("label[for='"+$(this).attr('id')+"']").removeClass("checkboxlabel_on");
});

   /** @description Setea las configuraciones para el dialog confirmar envio_resp_por_bloque.
   **/
  		// a workaround for a flaw in the demo system (http://dev.jqueryui.com/ticket/4375), ignore!
		$("#dialog:ui-dialog").dialog( "destroy" );
		$("#dialog-envio-finalizarIRNC").dialog({
			resizable: false,
			height: 250,
			width: 450,
			modal: true,
      autoOpen: false,
			buttons: {
				"Continuar y finalizar el instrumento": function() {
          document.formulario_IRNC.submit();
				},
				"Cancelar": function() {
					$(this).dialog("close");
				}
			}
		});


/*Configuración tabs paguinado*/
$('#panelTabsPreguntas').tabs({ fx: { opacity: 'toggle' }});
$('#panelTabsPreguntas').tabs('select', 8);
$('#panelTabsPreguntas').tabs('paging', { cycle: true, follow: true, followOnSelect: true, selectOnAdd: true,nextButton: 'Siguiente &gt;', prevButton: '&lt; Anterior' });


} //END FormIngresoEncuestado.prototype.inicializar

/**
 * Realiza una validación del formulario aplicando las reglas de  validación de primer nivel para el formulario
 * IRNC. Las configuraciones por defecto de las validaciones (estilo grafico, etc) son heredadas
 * desde el objeto Main en el archivo funciones_global.js.
 * @function
 * @requires 1.- <a href="http://docs.jquery.com/Plugins/Validation">jQuery validation</a><br>
 * 2.- Requiere que las validaciones esten activadas desde el objeto Main en
 *  funciones_global.js <br>
 **/
FormIRNC.prototype.validar= function(){
    if(Main.getInstance().enableValidation === 'true'){
      jQuery.validator.addClassRules("botonradio", {
        required: true
      });
      return $("#formulario_IRNC").valid(); //retorna true si valido, false si invalido
    } else{
      return true; //retorna verdadero si las validaciones estan desactivadas, esto es para que pase como si los campos fueran validos
    }
}


/**
 * Finaliza el instrumento IRNC activo.
 * @function
 **/
function finalizarIRNC(){
  $('#esCerrarForm').val('CERRAR');
  $('#dialog-envio-finalizarIRNC').dialog('open');
  $('form#formulario_IRNC').submit();
//alert($('#esCerrarForm').val());

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
  var myFormularioIRNC=new FormIRNC();
  myFormularioIRNC.inicializar();

   /** Si es válido muestro una confirmación sino no hago nada ya que el
    * método validar mostrará errores de validación y frenará el evento
    * submit.
    */
    $('form#formulario_IRNC').submit(function(){
      if($('#esCerrarForm').val()!='CERRAR'){
        $('form#formulario_IRNC').hide();
        $('#msg-guardando').show();
      }
    });
	});



