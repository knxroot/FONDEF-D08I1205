/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
$().ready(function() {
    $("#formulario_ENTREVISTA").validate({
                rules: {
                  f_inicio_evaluacion: {
                    required: true,
                    dateISO: true
                  },
                  f_termino_evaluacion: {
                    required: true,
                    dateISO: true
                  },
                  t_total_invertido: {
                    required: true,
                    number: true
                  },
                  t_delincuencia: {
                    required: true,
                    minlength: 3
                  },
                  
                  riesgos_criminogenicos: {
                    required: true,
                    minlength: 3
                  },
                  recursos_intervencion: {
                    required: true,
                    minlength: 3
                  },
                  crespuesta_intervencion: {
                    required: true,
                    minlength: 3
                  },
                  fdiferenciados_intervencion: {
                    required: true,
                    minlength: 3
                  }
                  
                },
                messages: {
                  t_total_invertido: {
                    number: "Introduzca el tiempo invertido en horas"
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