/**
 * @fileoverview Este archivo contiene las funciones javascript utilizadas en el
 * formulario de ingreso de un nuevo encuestado
 *
 * El sistema de documentacion de los ficheros JS es <a href='http://code.google.com/p/jsdoc-toolkit'>jsdoc-toolkit</a>
 * @author Gustavo Lacoste gustavo@lacosox.org
 * @version 0.1
 */

/** Capa de apoyo mediante JS al formulario de ingreso de nuevo encuestado
 * @class formIngresoEncuestado
 * @requires jquery-1.4.2.min.js, jquery-ui-1.8.1.custom.min.js,jquery.validate.js,funciones_global.js, DOM READY
 * @see  <h3>BIBLIOGRAFIA</h3>
 * 
 * 1.- <a href="http://www.miguelmanchego.com/2009/combos-dependientes-ajax-jquery/">+JQuery selects dependientes</a> <i>CONSULTADA EL 16 JUN de 2010</i><br>.
 * 2.- <a href="http://jquery.bassistance.de/validate/demo/radio-checkbox-select-demo.html"> +JQuery validation plugin</a><br>
 * 3.- <a href="http://www.devcomments.com/Jquery-and-AJAX-symfony-1-4-at144148.htm"> +Jquery en symfony</a><br>
 */

FormIngresoEncuestado= function(){
  /** @ignore */
  var inicializar=function(){};
  /** @ignore */
  var validar=function(){};

}



/**
 * Define los procedimeintos estaticos del formulario de ingreso de nuevo encuestado
 * @function
 **/
FormIngresoEncuestado.prototype.inicializar= function(){

      $('form#formulario_IngRegAIDLey')[0].reset();
      /** @description Select dependientes regiones,comunas, provincias
       *  SELECT REGION
       *  @lends SA
       *  @returns {String} Codigo HTML del select de las provincias .
       *  @see <a href="http://www.lacosox.org/?q=codigo_territorial_sql_Regiones_provincias_comunas_de_Chile"></a>
       **/
      $("#select_region").change(function () {
        $("#select_region option:selected").each(function () {
          var regionSeleccionada=$(this).val();
          /*alert("soy la region "+regionSeleccionada);*/
          $.get(url_consultaProvincias,
              {region: regionSeleccionada
              },
              function(data){
              $("#select_provincia").html(data);
              $("#select_provincia").removeAttr('disabled');
              });
        });
      });
	  
	   $("#select_user_responsable_secundario1").change(function () {
        $("#select_user_responsable_secundario1 option:selected").each(function () {
          var evalSeleccionada=$(this).val();
          /*alert("soy la region "+regionSeleccionada);*/
          
        });
      });
	  
	  
	   

      /** @description Select dependientes regiones,comunas, provincias
       *  SELECT PROVINCIA
       *  @returns {String} Codigo HTML del select de las comunas .
       *  @see <a href="http://www.lacosox.org/?q=codigo_territorial_sql_Regiones_provincias_comunas_de_Chile"></a>
       **/
      $("#select_provincia").change(function () {
        $("#select_provincia option:selected").each(function () {
          var provinciaSeleccionada=$(this).val();
          $.get(url_consultaComunas,
              {provincia: provinciaSeleccionada
              },
              function(data){
              /*alert(data);*/
              $("#select_comuna").html(data);
              $("#select_comuna").removeAttr('disabled');
              });
        });
      });


      /** @description Select dependientes materia delictual, causa delitos
       *  SELECT MATERIA
       *  @returns {String} Codigo HTML del select de materia delictual, materia delito.
       *  @see carpeta de requerimientos usuario
       *          $("input[name^='select_tipo_materia']").change(function () {
       **/
      
      $("#select_tipo_materia").change(function () {
        $("#select_tipo_materia option:selected").each(function () {
          var materiaSeleccionada=$(this).val();
          $.get(url_consultaCausaDelito,
              {materia: materiaSeleccionada
              },
              function(data){
                $("#select_causa_delito").html(data);
                $("#select_causa_delito").removeAttr('disabled');
              });
          });
      });
	  //
      $("#select_tipo_materia2").change(function () {
        $("#select_tipo_materia2 option:selected").each(function () {
          var materiaSeleccionada=$(this).val();
          $.get(url_consultaCausaDelito,
              {materia: materiaSeleccionada
              },
              function(data){
                $("#select_causa_delito2").html(data);
                $("#select_causa_delito2").removeAttr('disabled');
              });
          });
      });

      /** @description Select dependientes materia delictual, causa delitos
       *  SELECT CAUSA DELITO
       *  @returns {String} Codigo HTML del select de materia delictual, causa delito.
       *  @see carpeta de requerimientos usuario
       **/
      $("#select_tipo_materia3").change(function () {
        $("#select_tipo_materia3 option:selected").each(function () {
          var materiaSeleccionada=$(this).val();
          $.get(url_consultaCausaDelito,
              {materia: materiaSeleccionada
              },
              function(data){
                $("#select_causa_delito3").html(data);
                $("#select_causa_delito3").removeAttr('disabled');
              });
          });
      });


      /*Desactivando listas sin información *es un bug que creo llega desde el jquwerywizard que no interpreta los disables del html sobre los selects* */
      $("#select_provincia").attr("disabled","disabled");
      $("#select_comuna").attr("disabled","disabled");
      $("#select_actesc_encurso_nivel").attr("disabled","disabled");
      $("#panel_ap_rep_actesc_encurso").hide(); /*por defecto el panel de ap o rep esta oculto*/
      $("#radio_ap").removeClass("required");/*y como esta oculto tampoco es requerido*/

      /*cargo valores por defecto a regiones*/
      $.get(url_consultaRegiones,
              function(data){
              $("#select_region").html($("#select_region").html()+data);
              });
			  
	  $.get(url_consultaCoevaluador,
              function(data){
              $("#select_user_responsable_secundario1").html($("#select_user_responsable_secundario1").html()+data);
              });
	

      /*cargo valores por defecto a materiasdelitos*/
      $.get(url_consultaMateriaDelito,
              function(data){
              $("#select_tipo_materia").html($("#select_tipo_materia").html()+data);
			    $("#select_tipo_materia2").html($("#select_tipo_materia2").html()+data);
			  
            });
			
			
     

      $("#select_asistencia_pconace").change(function () {
       $("#select_asistencia_pconace option:selected").each(function () {
          if($(this).val()!="No"){
            $("#bloque-tipo-pconace").show();
          }else{$("#bloque-tipo-pconace").hide();}
        });
      });


		// a workaround for a flaw in the demo system (http://dev.jqueryui.com/ticket/4375), ignore!
		$("#dialog:ui-dialog").dialog( "destroy" );
		$("#dialog-confirm-registro").dialog({
			resizable: false,
			height: 235,
			width: 510,
			modal: true,
      autoOpen: false,
			buttons: {
				"Registrar Encuestado": function() {
           $('#input_run_nconverificador').val($.Rut.quitarFormato($('#input_run_nconverificador').val()));
          document.formulario_IngRegAIDLey.submit();
				},
				Cancel: function() {
					$(this).dialog("close");
				}
			}
		});


     jQuery.validator.addMethod("noExisteRegistrado", function(value, element) {
        var respuesta = '';
        $.ajax({ type: "GET",
                 url: url_consultaRUNExiste,
                 data: "run="+$.Rut.quitarFormato(value),
                 async: false,
                 success : function(data)
                 {
                     respuesta = data;
                 }
        });
        if(respuesta=='noExiste'){return true;}
        else{return false;}
      }, "El RUN ya Existe en la BD.");

/**
 * Activa el formateo para el campo del rut, la validacion se habilita en el método validate.
 *
 * En Chile, comúnmente se le denomina RUT tanto al RUT (Rol Único Tributario)
 * como al RUN (Rol Único Nacional). La diferencia está en que el primero es un
 * identificador de empresas mientras que el segundo sólo es para personas
 * naturales. Aqui llamamos RUN al Rol Único Nacional osea al de las personas.
 *
 * @see 1.- <a href="http://joaquinnunez.cl/jQueryRutPlugin/#int-jq-validation">jq-validation</a> <br>
 *  2.- <a href="http://blog.unreal4u.com/2010/09/revision-de-rut-con-javascript-y-php-revisited/">http://blog.unreal4u.com/2010/09/revision-de-rut-con-javascript-y-php-revisited/</a><br>
 **/
   $('#input_run_nconverificador').Rut({
									  validation: false,
                    format_on: 'keyup'
	 });
}




/**
 * Realiza una validación del formulario aplicando las reglas de  validación de primer nivel para el formulario
 * de ingreso de nuevo encuestado. Las configuraciones por defecto de las validaciones (estilo grafico, etc) son heredadas
 * desde el objeto Main en el archivo funciones_global.js.
 * @function
 * @requires 1.- <a href="http://docs.jquery.com/Plugins/Validation">jQuery validation</a><br>
 * 2.- Requiere que las validaciones esten activadas desde el objeto Main en
 *  funciones_global.js <br>
 **/
FormIngresoEncuestado.prototype.validar= function(){
    /**
     * @description Configuración de las reglas de  validación de primer nivel para el formulario
     * de ingreso de nuevo encuestado
     *  @requires Requiere que las validaciones esten activadas desde el objeto Main en
     *  funciones_global.js
     */
    if(Main.getInstance().enableValidation === 'true'){
       $("#formulario_IngRegAIDLey").validate({
            //Reglas de validación
            rules: {
              input_run_nconverificador: {
                required: true,
                isValidRUN_Chile: true,
                maxlength: 12,
                noExisteRegistrado: true
              },
			   select_user_responsable_secundario1: {
                noDefaultSelect: true /*no es la seleccion por default*/
              },
              input_primer_nombre: {
                required: true,
                minlength: 3,/*nombre de minimo 3 letras*/
                defaultInvalid: true
              },
              input_otros_nombres: {
                required: true,
                minlength: 3,/*nombre de minimo 3 letras*/
                defaultInvalid: true
              },
              input_primer_apellido: {
                required: true,
                minlength: 3,/*nombre de minimo 3 letras*/
                defaultInvalid: true
              },
              input_segundo_apellido: {
                required: true,
                minlength: 3,/*nombre de minimo 3 letras*/
                defaultInvalid: true
              },
              radio_sexo: {
                required: true
              },
              input_fnacimiento: {
                required: true,
                dateISO: true
              },
              select_region: {
                noDefaultSelect: true /*no es la seleccion por default*/
              },
			 
              select_provincia: {
                noDefaultSelect: true
              },
              select_comuna: {
                noDefaultSelect: true
              },
              radio_procedencia: {
                required: true,
                defaultInvalid: true
              },
              input_localidad_indigena: {
                required: true,
                minlength: 3,/*nombre de minimo 3 letras*/
                defaultInvalid: true
              },
              input_anio_ultimocurso: {
                required: true,
                digits: true,
                range: [1900, 2011]
              },
              select_actesc_encurso: {
                noDefaultSelect: true
              },
              input_nombre_programa: {
                required: true,
                minlength: 4,/*nombre de minimo 4 letras*/
                defaultInvalid: true
              },
              input_fecha_inicio_condena: {
                required: true,
                dateISO: true
              },
              input_tiempo_total_condena: {
                required: true,
                digits: true
              },
			   input_ruk: {
                required: true,
                digits: true
              },
			   input_fecha_detencion: {
                required: true,
                digits: true
              },
			   input_fecha_control_detencion: {
                required: true,
                digits: true
              },
              select_tipo_materia: {
                noDefaultSelect: true /*no es la seleccion por default*/
              },
              select_causa_delito: {
                noDefaultSelect: true /*no es la seleccion por default*/
              }
            },
            messages: {
              input_edad: {
                digits: "Introduzca el número de años"
              }
            }
           });//fin definicion de validaciones
      return $("#formulario_IngRegAIDLey").valid(); //retorna true si valido, false si invalido
    } else{
      return true; //retorna verdadero si las validaciones estan desactivadas, esto es para que pase como si los campos fueran validos
    }
}

/**
 * Agrega un nuevo bloque para agregar una sancion extra que pueda tener la persona
 **/
function agregarBloqueSancion(){
    // Obtener clon de primer bloque de sanciones
    var bloqueSanciones = $('#sancion-fieldset').clone();
    
    // Setar algunos atributos
    bloqueSanciones.removeAttr('id');
    bloqueSanciones.append('<span class="bloque-sancion-del">Eliminar bloque</span> ');
    $.each(bloqueSanciones.find('input'), function(index, el) { $(el).val('') });
    
    // Agregar al bloque de sanciones
    $('#bloque-sanciones').append(bloqueSanciones);
}

function agregarBloqueSancion1(){
    // Obtener clon de primer bloque de sanciones
    var bloqueSanciones1 = $('#sancion-fieldset1').clone();
    
    // Setar algunos atributos
    bloqueSanciones1.removeAttr('id');
    bloqueSanciones1.append('<span class="bloque-sancion-del">Eliminar bloque</span> ');
    $.each(bloqueSanciones1.find('input'), function(index, el) { $(el).val('') });
    
    // Agregar al bloque de sanciones
    $('#bloque-sanciones1').append(bloqueSanciones1);
}
function agregarBloqueSancion2(){
    // Obtener clon de primer bloque de sanciones
    var bloqueSanciones2 = $('#sancion-fieldset2').clone();
    
    // Setar algunos atributos
    bloqueSanciones2.removeAttr('id');
    bloqueSanciones2.append('<span class="bloque-sancion-del">Eliminar bloque</span> ');
    $.each(bloqueSanciones2.find('input'), function(index, el) { $(el).val('') });
    
    // Agregar al bloque de sanciones
    $('#bloque-sanciones2').append(bloqueSanciones2);
}


/**
 * Elimina bloque para agregar una sancion extra que pueda tener la persona
 * @function
 **/
function eliminarBloqueSancion(){
  $("#bloque-sancion-adicional").hide();
  $("#bloque-boton-agregar-sancion").show();
  $("#es_sancion2").val("NO");

  $("#input_nombre_programa2").rules("remove", "required minlength defaultInvalid");
  $("#input_fecha_inicio_condena2").rules("remove", "required dateISO");
  $("#input_tiempo_total_condena2").rules("remove", "required digits");
  $("#select_tipo_materia2").rules("remove", "noDefaultSelect");
  $("#select_causa_delito2").rules("remove", "noDefaultSelect");
  $("#formulario_IngRegAIDLey").valid();
}

function eliminarBloqueSancion1(){
  $("#bloque-sancion-adicional").hide();
  $("#bloque-boton-agregar-sancion").show();
  $("#es_sancion2").val("NO");

  $("#input_nombre_programa2").rules("remove", "required minlength defaultInvalid");
  $("#input_fecha_inicio_condena2").rules("remove", "required dateISO");
  $("#input_tiempo_total_condena2").rules("remove", "required digits");
  $("#select_tipo_materia2").rules("remove", "noDefaultSelect");
  $("#select_causa_delito2").rules("remove", "noDefaultSelect");
  $("#formulario_IngRegAIDLey").valid();
}
function eliminarBloqueSancion2(){
  $("#bloque-sancion-adicional").hide();
  $("#bloque-boton-agregar-sancion").show();
  $("#es_sancion2").val("NO");

  $("#input_nombre_programa2").rules("remove", "required minlength defaultInvalid");
  $("#input_fecha_inicio_condena2").rules("remove", "required dateISO");
  $("#input_tiempo_total_condena2").rules("remove", "required digits");
  $("#select_tipo_materia2").rules("remove", "noDefaultSelect");
  $("#select_causa_delito2").rules("remove", "noDefaultSelect");
  $("#formulario_IngRegAIDLey").valid();
}


$(document).ready(function() {
  var instancia=new FormIngresoEncuestado();
  instancia.inicializar();

   /** Si es válido muestro una confirmación sino no hago nada ya que el
    * método validar mostrará errores de validación y frenará el evento
    * submit.
    */
    $('form#formulario_IngRegAIDLey').submit(function(){
      if(instancia.validar()){
        $("#dialog-confirm-registro").dialog('open');
     }
      return false;
    });
    
    $('.bloque-sancion-del').live('click', function(){
        $(this).parent().remove();
    })

});
