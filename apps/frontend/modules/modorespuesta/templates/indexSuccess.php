<?php slot('title') ?>
  <?php  echo " Modalidad de respuesta";?>
<?php end_slot(); ?>
<script>
function validar(){
  var camposinvalidos = $(":radio[value='no_seleccionado']:checked").size();
  if(camposinvalidos>0){
    alert("Debes seleccionar una modalidad de respuesta antes de continuar");
    return false;
  }else{
    return true;
  }
}
</script>  
<form name="form_modorespuesta" class="form" method="post" action="<?php echo url_for('modorespuesta/guardarModoRespuesta?idEncuestado='.$idEncuestado.'&nombremodulo='.$nombremodulo); ?>">
  
  <div class="grid-12-12">
    <br>
    <b style="color:#DD4B39">*</b><b>Antes de comenzar a responder el instrumento <b style="color:#DD4B39"><?php 
switch ($nombremodulo) {
case "DEP_ADO":
  echo "DEPADO";
  break;
case "CAIE":
  echo "CICUM";
  break;
case "SQIFA":
  echo "CESMA";
  break;
default: echo $nombremodulo;
}   
    ?></b> para el encuestado <b style="color:#DD4B39"><?php echo $nombreEncuestado;?></b> debes 
definir la modalidad bajo la cual se llevará a cabo la entrevista.</b>
  </div>
  <div class="clear"></div>
  <br><br>
  <div style="margin-left: 200px;text-align: center; color:#3366CC">
    <ul class="form-list-rdo">
            <li><input type="radio" class="botonradio" name="modalidad" value="Autoreporte"><label class="form-lbl">Autoreporte</label></li>
            <li><input type="radio" class="botonradio" name="modalidad" value="Autoreporte acompañado"><label class="form-lbl">Autoreporte acompañado</label></li>
            <li><input type="radio" class="botonradio" name="modalidad" value="Autoreporte en papel"><label class="form-lbl">Autoreporte en papel</label></li>
            <li><input type="radio" class="botonradio" name="modalidad" value="Entrevista"><label class="form-lbl">Entrevista</label></li>
            <li><input type="radio" checked="" value="no_seleccionado" name="modalidad" style="display: none;" class="botonradio"></li>
    </ul>
  </div>
  <br>
  <div style="margin-left: 700px;margin-top: 50px; text-align: center">
    <a class="form-button form-left" style="display: block;"
      onclick="          
        if(confirm('ADVERTENCIA. Verifica la información antes de continuar ya no podrás volver a modificarlo.')){
                if(validar()){
                   document.form_modorespuesta.submit();
                }
              }">Ir al instrumento -></a>
  </div>
  <br>  <br>

</form>