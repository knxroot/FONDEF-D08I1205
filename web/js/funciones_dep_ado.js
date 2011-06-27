/**
 * @fileoverview Este archivo contiene las funciones javascript utilizadas en el
 * formulario de DEP_ADO
 *
 * El sistema de documentacion de los ficheros JS es <a href='http://code.google.com/p/jsdoc-toolkit'>jsdoc-toolkit</a>
 * @author Gustavo Lacoste gustavo@lacosox.org
 * @version 0.1
 */

/** Capa de apoyo mediante JS al formulario DEP_ADO
 * @class FormDEP_ADO
 * @requires jquery-1.4.2.min.js, jquery-ui-1.8.1.custom.min.js,jquery.validate.js,funciones_global.js, DOM READY
 * @see  <h3>BIBLIOGRAFIA</h3>
 *
 * 1.- <a href="http://youhack.me/2010/04/22/live-character-count-with-progress-bar-using-jquery/comment-page-1/">+JQuery limitador de palabras/a><br>.
 */
FormDEP_ADO= function(){
  /** @ignore */
  var inicializar=function(){};
  /** @ignore */
  var validar=function(){};

}

/**
 * Define los procedimeintos estaticos del formulario DEP_ADO
 * @function
 **/
FormDEP_ADO.prototype.inicializar= function(){

  /**
   * @description El fomrulario es limpio al recargar la páguina
   **/
  $('#formulario_DEP_ADO')[0].reset();

  /**
   * @description Habilita tools algunos tool tips particulares en el instrumento
   **/
  $("#texto_otros").simpletip({ content: 'Uno u otro de los siguientes medicamentos <u>tomados sin receta</u>:<br>anticonvulsionantes, antidepresivo, hipnóticos, tranquilizantes, ritalín, etc', position: 'right', offset: [10, 0] });

 /*
  * 9= Durante tu vida ¿Has consumido alguna vez uno de estos productos en forma regular?
  **/
 $("input[name='9']").change(function(){
  if ($("input[name='9']:checked").val() == 'Si') {
  $('#pregunta2b').show();
  }else{ /*== No*/
    $('#pregunta2b').hide();
  }
 });


/**
 * Esta funcion verifica que en la pregunta uno se ha declarado que el adolecente no ha consumido ningún tipo de droga durante los últimos 12 meses
 *@function
 **/
function esSinConsumoen12meses(){
var sinConsumoEnLosUltimos12Meses=false;
 if ($("input[name='1']:checked").val() == 'No ha consumido') {
    if ($("input[name='2']:checked").val() == 'No ha consumido') {
      if ($("input[name='3']:checked").val() == 'No ha consumido') {
        if ($("input[name='4']:checked").val() == 'No ha consumido') {
          if ($("input[name='5']:checked").val() == 'No ha consumido') {
            if ($("input[name='6']:checked").val() == 'No ha consumido') {
              if ($("input[name='7']:checked").val() == 'No ha consumido') {
                if ($("input[name='8']:checked").val() == 'No ha consumido') {
                  sinConsumoEnLosUltimos12Meses=true;
                }
              }
            }
          }
        }
      }
    }
  }
  /* Si el adolecente no ha consumido drogas en los últimos 12 meses entonces se ocultan las preguntas para pasar directo a la pregunta7*/
  if(sinConsumoEnLosUltimos12Meses){
     $('#pregunta4').hide();$('#pregunta5').hide();$('#pregunta6').hide();
  }else{
     $('#pregunta4').show();$('#pregunta5').show();$('#pregunta6').show();
  }
 }
/* FIN esSinConsumoen12meses() */


/* Si cualquiera de los items de la pregunta uno se cambia entonces debemos ver si los otros estan en "No ha consumido" para decidir si
 * mostrar o no las preguntas 4,5,6*/
$("input[name='1']").change(function(){ esSinConsumoen12meses();});
$("input[name='2']").change(function(){ esSinConsumoen12meses();});
$("input[name='3']").change(function(){ esSinConsumoen12meses();});
$("input[name='4']").change(function(){ esSinConsumoen12meses();});
$("input[name='5']").change(function(){ esSinConsumoen12meses();});
$("input[name='6']").change(function(){ esSinConsumoen12meses();});
$("input[name='7']").change(function(){ esSinConsumoen12meses();});
$("input[name='8']").change(function(){ esSinConsumoen12meses();});




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
          document.formulario_DEP_ADO.submit();
				},
				"Cancelar": function() {
					$(this).dialog("close");
				}
			}
		});

} //END FormIngresoEncuestado.prototype.inicializar

/**
 * Realiza una validación del formulario aplicando las reglas de  validación de primer nivel para el formulario
 * DEP_ADO. Las configuraciones por defecto de las validaciones (estilo grafico, etc) son heredadas
 * desde el objeto Main en el archivo funciones_global.js.
 * @function
 * @requires 1.- <a href="http://docs.jquery.com/Plugins/Validation">jQuery validation</a><br>
 * 2.- Requiere que las validaciones esten activadas desde el objeto Main en
 *  funciones_global.js <br>
 **/
FormDEP_ADO.prototype.validar= function(){
    if(Main.getInstance().enableValidation === 'true'){
      jQuery.validator.addClassRules("botonradio", {
        required: true
      });
      return $("#formulario_DEP_ADO").valid(); //retorna true si valido, false si invalido
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
  var myFormularioDEP_ADO=new FormDEP_ADO();
  myFormularioDEP_ADO.inicializar();

   /** Si es válido muestro una confirDEP_ADOón sino no hago nada ya que el
    * método validar mostrará errores de validación y frenará el evento
    * submit.
    */
    $('form#formulario_DEP_ADO').submit(function(){
      if(myFormularioDEP_ADO.validar()){
        $("#dialog-envio-resp-por-bloque").dialog('open');
     }
      return false;
    });
	});



