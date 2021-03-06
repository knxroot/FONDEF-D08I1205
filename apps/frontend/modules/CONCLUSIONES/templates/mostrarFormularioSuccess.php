<?php slot('title') ?>
  <?php  echo "[{$porcCompletado} % completado] ";?>
<?php end_slot(); ?>

<?php $url_save_post=url_for('CONCLUSIONES/GuardarInstrumento?idEncuestado='.$idEncuestado);?>

<form id="formulario_CONCLUSIONES" name="formulario_CONCLUSIONES" class="form" method="post" action="<?php echo $url_save_post; ?>">
    
<div class="grid-12-12 ui-widget-header ui-corner-all" style="position: relative;text-align:center;">
    Conclusiones basadas en evidencia.
</div>
<div class="grid-4-12">
    <label class="form-lbl">Fecha inicio evaluación (aaaa/mm/dd):</label>
    <input type="text" id="f_inicio_evaluacion" name="f_inicio_evaluacion" class="form-txt">
</div>
<div class="grid-4-12">
    <label class="form-lbl">Fecha término evaluación (aaaa/mm/dd):</label>
    <input type="text" id="f_termino_evaluacion" name="f_termino_evaluacion" class="form-txt">
</div>
<div class="grid-4-12">
    <label class="form-lbl">Tiempo total invertido en la evaluación (horas):</label>
    <input type="text" id="t_total_invertido" name="t_total_invertido" class="form-txt">
</div>
<div class="clear"></div>


<div class="grid-12-12" style="font-weight:bolder;"><br>
Apreciación del profesional basada en la evidencia (puede o no coincidir con los puntajes obtenidos) en relación a:
</div><div class="clear"></div>
<br>

<div class="grid-12-12">
    <label class="form-lbl">Tipo de delincuencia:</label>
    <textarea class="form-txt" cols="" rows="" id="t_delincuencia" name="t_delincuencia"></textarea>
</div>
<div class="clear"></div>

<div class="grid-12-12">
    <label class="form-lbl">Principales riesgos criminogénicos:</label>
    <textarea class="form-txt" cols="" rows="" id="riesgos_criminogenicos" name="riesgos_criminogenicos"></textarea>
</div>
<div class="clear"></div>

<div class="grid-12-12">
    <label class="form-lbl">Principales recursos para la intervención:</label>
    <textarea class="form-txt" cols="" rows="" id="recursos_intervencion" name="recursos_intervencion"></textarea>
</div>
<div class="clear"></div>

<div class="grid-12-12">
    <label class="form-lbl">Capacidad de respuesta a la intervención:</label>
    <textarea class="form-txt" cols="" rows="" id="crespuesta_intervencion" name="crespuesta_intervencion"></textarea>
</div>
<div class="clear"></div>

<!-- Comienzo Botón envio de formulario, en caso de ser último bloque advierte que se cerrará el formulario si se continua -->
<a class="form-button-off form-left" 
   style="display: block;" 
   href="<?php echo url_for('principal/dashboard?idEncuestado='.$idEncuestado);?>" 
   onclick="return confirm('Al salir del formulario perderás la información que hayas respondido en la pantalla actual. ¿Estas seguro que deseas salir del formulario actual?');">
   <- Volver al menú
</a>
 <button class="form-button" type="submit" name="Guardar"><span class="ui-icon ui-icon-disk" style="float:left;"></span>Guardar</button>
 

 <input type="text" id="CLOSE_FLAG" name="CLOSE_FLAG" style="display:none" value="NOCERRADO"></input>
<div class="grid_2 prefix_9">
   <a class="form-button-off form-left" style="display: block;"
      onclick="
              if(confirm('ADVERTENCIA. Al cerrar el formulario ya no podrás volver a modificarlo.')){
                  $('#CLOSE_FLAG').val('CERRADO');
                   document.formulario_CONCLUSIONES.submit();
              }">Cerrar</a>
</div>
<div class="clear"></div>
<!-- Fin Botón envio de formulario, en caso de ser último bloque advierte que se cerrará el formulario si se continua -->
 <input type="text" id="tstart" name="tstart" style="display:none" value="<?php echo $tstart; ?>"></input>



</form>

<br>


<script type="text/javascript">
                $().ready(function() {
                     $("form").loadJSON(<?php echo $sf_data->getRaw('respuestasGuardadas');?>);
                });
</script>