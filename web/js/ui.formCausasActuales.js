/**
 * @fileoverview Este archivo contiene las funciones javascript utilizadas en el
 * formulario de ingreso de un nuevo encuestado
 *
 * El sistema de documentacion de los ficheros JS es <a href='http://code.google.com/p/jsdoc-toolkit'>jsdoc-toolkit</a>
 * @author Gustavo Lacoste gustavo@lacosox.org
 * @version 0.1
 */


var ultimo_bloque_svigente=1;

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

      $('form')[0].reset();
      /** @description Select dependientes regiones,comunas, provincias
       *  SELECT REGION
       *  @lends SA
       *  @returns {String} Codigo HTML del select de las provincias .
       *  @see <a href="http://www.lacosox.org/?q=codigo_territorial_sql_Regiones_provincias_comunas_de_Chile"></a>
       **/
   
      $("#select_tipo_materia1").change(function () {
        $("#select_tipo_materia1 option:selected").each(function () {
          var materiaSeleccionada=$(this).val();
          $.get(url_consultaCausaDelito,
              {materia: materiaSeleccionada
              },
              function(data){
                $("#select_causa_delito1").html(data);
                $("#select_causa_delito1").removeAttr('disabled');
              });
          });
      });
      
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
      
      $("#select_tipo_materia4").change(function () {
        $("#select_tipo_materia4 option:selected").each(function () {
          var materiaSeleccionada=$(this).val();
          $.get(url_consultaCausaDelito,
              {materia: materiaSeleccionada
              },
              function(data){
                $("#select_causa_delito4").html(data);
                $("#select_causa_delito4").removeAttr('disabled');
              });
          });
      });
      
      $("#select_tipo_materia5").change(function () {
        $("#select_tipo_materia5 option:selected").each(function () {
          var materiaSeleccionada=$(this).val();
          $.get(url_consultaCausaDelito,
              {materia: materiaSeleccionada
              },
              function(data){
                $("#select_causa_delito5").html(data);
                $("#select_causa_delito5").removeAttr('disabled');
              });
          });
      });
      
      $("#select_tipo_materia6").change(function () {
        $("#select_tipo_materia6 option:selected").each(function () {
          var materiaSeleccionada=$(this).val();
          $.get(url_consultaCausaDelito,
              {materia: materiaSeleccionada
              },
              function(data){
                $("#select_causa_delito6").html(data);
                $("#select_causa_delito6").removeAttr('disabled');
              });
          });
      });
      
      $("#select_tipo_materia7").change(function () {
        $("#select_tipo_materia7 option:selected").each(function () {
          var materiaSeleccionada=$(this).val();
          $.get(url_consultaCausaDelito,
              {materia: materiaSeleccionada
              },
              function(data){
                $("#select_causa_delito7").html(data);
                $("#select_causa_delito7").removeAttr('disabled');
              });
          });
      });
      
      $("#select_tipo_materia8").change(function () {
        $("#select_tipo_materia8 option:selected").each(function () {
          var materiaSeleccionada=$(this).val();
          $.get(url_consultaCausaDelito,
              {materia: materiaSeleccionada
              },
              function(data){
                $("#select_causa_delito8").html(data);
                $("#select_causa_delito8").removeAttr('disabled');
              });
          });
      });
      
      $("#select_tipo_materia9").change(function () {
        $("#select_tipo_materia9 option:selected").each(function () {
          var materiaSeleccionada=$(this).val();
          $.get(url_consultaCausaDelito,
              {materia: materiaSeleccionada
              },
              function(data){
                $("#select_causa_delito9").html(data);
                $("#select_causa_delito9").removeAttr('disabled');
              });
          });
      });
      
      $("#select_tipo_materia10").change(function () {
        $("#select_tipo_materia10 option:selected").each(function () {
          var materiaSeleccionada=$(this).val();
          $.get(url_consultaCausaDelito,
              {materia: materiaSeleccionada
              },
              function(data){
                $("#select_causa_delito10").html(data);
                $("#select_causa_delito10").removeAttr('disabled');
              });
          });
      });
      
	  //
     
      /*cargo valores por defecto a regiones*/
     			  
		

      /*cargo valores por defecto a materiasdelitos*/
      $.get(url_consultaMateriaDelito,
              function(data){
              $("#select_tipo_materia1").html($("#select_tipo_materia1").html()+data);
               $("#select_tipo_materia2").html($("#select_tipo_materia2").html()+data);
                $("#select_tipo_materia3").html($("#select_tipo_materia3").html()+data);
                 $("#select_tipo_materia4").html($("#select_tipo_materia5").html()+data);
                  $("#select_tipo_materia5").html($("#select_tipo_materia6").html()+data);
                   $("#select_tipo_materia6").html($("#select_tipo_materia1").html()+data);
                    $("#select_tipo_materia7").html($("#select_tipo_materia7").html()+data);
                     $("#select_tipo_materia8").html($("#select_tipo_materia8").html()+data);
                      $("#select_tipo_materia9").html($("#select_tipo_materia9").html()+data);
                       $("#select_tipo_materia10").html($("#select_tipo_materia10").html()+data);
                   
			 
			  
            });
			
			
     

      


	
		


    

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

/**
 * Agrega un nuevo bloque para agregar una sancion extra que pueda tener la persona
 **/
function agregarBloqueSVIGENTE(){
    if(ultimo_bloque_svigente<10){
        ultimo_bloque_svigente++;
        $('#CANT_CAUSASVIGENTES').val(ultimo_bloque_svigente);

    $('#sancion-fieldset_svigente'+ultimo_bloque_svigente).show();
    }else{
        alert("No se pueden agregar mas de 10 causas");
    }
}

/**
 * Elimina bloque para agregar una sancion extra que pueda tener la persona
 * @function
 **/
function eliminarBloqueSVIGENTE(){
    if(ultimo_bloque_svigente>1){
        
        $('#CANT_CAUSASVIGENTES').val(ultimo_bloque_svigente);
        $('#sancion-fieldset_svigente'+ultimo_bloque_svigente).hide();
        $('#input_nombre_programa_svigente'+ultimo_bloque_svigente).val('');
        $('#input_tiempo_total_condena_svigente'+ultimo_bloque_svigente).val('');
        $('#input_fecha_inicio_condena_svigente'+ultimo_bloque_svigente).val('');
        $('#input_ruk_svigente'+ultimo_bloque_svigente).val('');
        $('#input_detencion_svigente'+ultimo_bloque_svigente).val('');
        $('#input_fecha_control_detencion_svigente'+ultimo_bloque_svigente).val('');
        ultimo_bloque_svigente--;
    }
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
