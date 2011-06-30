/**
 * @fileoverview Este archivo contiene las funciones javascript que son utilizadas
 * desde cualquier ámbito de alcance del sistema, esto implica que son cargadas
 * en todas las web de la aplicación.
 *
 * El sistema de documentacion de los ficheros JS es <a href='http://code.google.com/p/jsdoc-toolkit'>jsdoc-toolkit</a>
 * @author Gustavo Lacoste gustavo@lacosox.org
 * @version 0.1 
 */


/** Main principal de JS del sistema contiene operaciones e información que
 * son usadas de manera global en el sistema.
 * @class Representa el Main de los scripts JS y usa el patron Singleton
 * para su definicion.
 * @property {Array} [enableValidation="false"] Activar o desactivar la validacion de formularios
 * @requires jquery-1.4.2.min.js, jquery-ui-1.8.1.custom.min.js, DOM READY
 * @see The <a href="http://en.wikipedia.org/wiki/Singleton_pattern#Javascript">Singleton_pattern</a>.
 */
var Main = (function () {
    
  /** @memberOf Main
   *  @constructor
   **/
  function Main(args) {

    var args = args || {};
    this.name = 'Singleton';

    this.enableValidation = args.enableValidation || 'false';
    this.enableEfectosEnInputs = args.enableEfectosEnInputs || 'false';

    if(this.enableValidation === 'true'){
      /* @description Fija configuraciones por defecto para mostrar los errores
       * en cualquier parte donde se use el pluggin <a href="http://docs.jquery.com/Plugins/Validation">jQuery validation</a>
       * @ignore
       */
      jQuery.validator.setDefaults({
                debug: true,
                errorElement: "label",
                wrapper: "rel",  // a wrapper around the error message
                errorPlacement: function(error, element) {
                    offset = element.offset();
                    error.insertBefore(element);
                    $(error).append('<span></span>');/*inserta por dentro del div encubrido pero al final para poner el efecto de flechita*/
                    error.addClass('message');  // add a class to the wrapper
                    error.css('position', 'absolute');
                    error.css('left', offset.left + element.width()-10);
                    error.css('top', offset.top-error.height());
                    $('rel').wrapAll('<div class="new"/>');
                    element.addClass("input_invalido");
                }
      })

      /** @description Extiene el plugin agregando un metodo que podria chequear si
       *  el valor es diferente al que tenia por defecto un campo input. El valor debe
       *  ser diferente al por defecto.
       * @ignore
       */
      jQuery.validator.addMethod("defaultInvalid", function(value, element) {
          return value != element.defaultValue;
      }, "Porfavor ingresa aqui el valor solicitado.");


      /* @description En el select debes seleccionar algo, diferente a lo que se
       * muestra por defecto, excepto si el mismo esta desactivado obviamente
       * @ignore
       */
      jQuery.validator.addMethod("noDefaultSelect",function(value, element) {
          if (element.value == "none" && !($(element).is(":disabled"))){return false;}
          else {return true;}
          },"Porfavor selecciona una opción");

      /* @description Método de validación de un RUN Chileno extendido desde el plugin
       * http://plugins.jquery.com/project/Rut descrito tambien aquí:
       * http://joaquinnunez.cl/blog/2009/05/07/jquery-validate-plugin-jquery-rut-plugin/
       * @ignore
       */
     jQuery.validator.addMethod("isValidRUN_Chile", function(value, element) {
        return this.optional(element) || $.Rut.validar(value);
      }, "Este campo debe ser un RUN Chileno válido.");


    }// FIN IF this.enableValidation = TRUE

    if(this.enableEfectosEnInputs === 'true'){
      showEfectInputField();
    }

  }
  var instance;
/**
* @ignore _static
* */
  var _static = {
    name: 'Singleton',
    /**
     * @name getInstance
     * @memberOf Main
     * @function getInstance
     * @param object args Argumentos que son usados al crear la instancia del objeto singleton Main
     * @return Instancia única del objeto Main (el Singleton)
     */
    getInstance: function (args) {
      if (instance === undefined) {
        instance = new Main(args);
      }
      return instance;
    }
  };
  return _static;
})();


/**
 *  Muestra 2 efectos en los campos input, el efecto de un ico escribiendo y el
 *  efecto de borrar el value por defecto del campo (se usa en los input que no 
 *  tienen un label gráficamente)
 **/
function showEfectInputField(){

    //Efecto valor por defecto de los inputs
    $('input[type="text"]').focus(function() {
        if(!$(this).hasClass("input_invalido")){
          $(this).addClass("input_escribiendo");
        }
        if (this.value == this.defaultValue){
          this.value = '';
        }
        if(this.value != this.defaultValue){
          this.select();
        }
    });

    // Efecto ico escribiendo
    $('input[type="text"]').blur(function() {
        $(this).removeClass("input_escribiendo");
        $(this).val($(this).val());/*fix para re-reenderizar el valor por desface en ancho*/
        if ($.trim(this.value) == ''){
          this.value = (this.defaultValue ? this.defaultValue : '');
        }
    });
}




$().ready(function() {
    var m=Main.getInstance({enableValidation: 'false',enableEfectosEnInputs: 'true'});
}); 



    //Fecha de nacimiento
    //Fecha de Primer Delito.
    /*
    $('#input_fecha_primerdelito').datepicker();
    $('#input_fecha_primerdelito').datepicker('option', 'firstDay', 1);
    $('#input_fecha_primerdelito').datepicker('option', 'dateFormat', 'yy-mm-dd');
    $('#input_fecha_primerdelito').datepicker('option', 'dayNamesMin', ['Do','Lu','Ma','Mi','Ju','Vi','Sa']);
    $('#input_fecha_primerdelito').datepicker('option', 'monthNames', ['Enero','Febrero','Marzo','Abril','Mayo','Junio',
        'Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre']);
    $('#input_fecha_primerdelito').datepicker('option', 'nextText', 'Seguir');
    $('#input_fecha_primerdelito').datepicker('option', 'prevText', 'Anterior');
    $('#input_fecha_primerdelito').datepicker('option', 'closeText', 'Listo');

    //Fecha de Inicio de Condena.
    $('#input_fecha_inicio_condena').datepicker();
    $('#input_fecha_inicio_condena').datepicker('option', 'firstDay', 1);
    $('#input_fecha_inicio_condena').datepicker('option', 'dateFormat', 'yy-mm-dd');
    $('#input_fecha_inicio_condena').datepicker('option', 'dayNamesMin', ['Do','Lu','Ma','Mi','Ju','Vi','Sa']);
    $('#input_fecha_inicio_condena').datepicker('option', 'monthNames', ['Enero','Febrero','Marzo','Abril','Mayo','Junio',
        'Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre']);
    $('#input_fecha_inicio_condena').datepicker('option', 'nextText', 'Seguir');
    $('#input_fecha_inicio_condena').datepicker('option', 'prevText', 'Anterior');
    $('#input_fecha_inicio_condena').datepicker('option', 'closeText', 'Listo');
  */

  /*select dependiente para actividad escolar en curso*/
  //$("#select_actesc_encurso").change(function ()  {
  //	$("#select_actesc_encurso option:selected").each(function () {
  // capturamos el valor elegido
  //	var cursos_normales_array = ["1º Básico","2º Básico","3º Básico","4º Básico","5º Básico","6º Básico","7º Básico","8º Básico","1º Medio","2º Medio","3º Medio","4º Medio"];
  //	var cursos_programa_regularizacion_array = ["1º Medio y 2º Medio","3º Medio y 4º Medio"];
  //	var datos="";
  //	$("#panel_ap_rep_actesc_encurso").hide(); /*por defecto el panel de ap o rep esta oculto*/
  //	$("#radio_ap").removeClass("required");/*y como esta oculto tampoco es requerido*/
  //	switch($(this).val()) //valor elegido en select 1
  //	{
  //		case "Asistiendo regularmente a":
  //		for(c in cursos_normales_array) {
  //			datos+="<option value='"+cursos_normales_array[c]+"'>"+cursos_normales_array[c]+"</option>";
  //		}
  //		break;
  //		case "Programa de regularización de estudios en":
  //		for(c in cursos_programa_regularizacion_array) {
  //			datos+="<option value='"+cursos_programa_regularizacion_array[c]+"'>"+cursos_programa_regularizacion_array[c]+"</option>";
  //		}
  //		break;
  //		case "En periodo de vacaciones con":
  //		for(c in cursos_normales_array) {
  //			datos+="<option value='"+cursos_normales_array[c]+"'>"+cursos_normales_array[c]+"</option>";
  //		}
  //		$("#panel_ap_rep_actesc_encurso").show();/*muestra panel para poner si esta en vacaciones con el curso aprobado o reprobado*/
  //		$("#radio_ap").addClass("required");/*hace que debas elegir entre reprobado o aprobado como un requerido*/
  //		break;
  //	}
  //	if(datos!=""){ $("#select_actesc_encurso_nivel").removeAttr('disabled');
  //	$("#formulario_IngRegAIDLey").validate().element( "#radio_ap" );
  //	}else{
  //		$("#select_actesc_encurso_nivel").attr("disabled","disabled");
  //		datos="<option value='none-back' selected=''>Año curso(s)</option>";/*solos e desactiva no se rechequea dado que no hace falta. Si se requiere chequear cambiar el value a 'none'*/
  //		$("#formulario_IngRegAIDLey").validate().element( "#radio_ap" );
  //	}
  //	$("#select_actesc_encurso_nivel").html(datos);/*seteamos los valores en el select 2 según sea el caso*/
   //       });
  //})


