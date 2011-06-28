/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
$().ready(function() {
    $("#formulario_ENTREVISTA").validate({
                rules: {
                  encuadre_entrevista: {
                    required: true,
                    minlength: 3
                  },
                  expectativas: {
                    required: true,
                    minlength: 3
                  },
                  congruencias_incongruencias: {
                    required: true,
                    minlength: 3
                  },
                  creencias_valores_cog: {
                    required: true,
                    minlength: 3
                  },
                  estrat_res_problemas: {
                    required: true,
                    minlength: 3
                  },
                  sintesis_aspectos_rel: {
                    required: true,
                    minlength: 3
                  },
                  obs_generales_impresioncaso: {
                    required: true,
                    minlength: 3
                  },
                  apreciacion_posibilidad_cambio: {
                    required: true,
                    minlength: 3
                  },
                  file: {
                    required: true
                  }
                },
                messages: {
                  file: {
                    required: "El archivo no se ha subido o ha fallado el proceso de carga. Sube otro e intenta denuevo."
                  }
                }
    });//fin definicion de validaciones


    $('#formulario_ENTREVISTA').submit(function(){
        if($("#formulario_ENTREVISTA").valid()){
            document.formulario_ENTREVISTA.submit();
        }else{
            alert("Hay campos inv\u00e1lidos, favor revisar y intentar de nuevo");
        }
        return false;
    });
});