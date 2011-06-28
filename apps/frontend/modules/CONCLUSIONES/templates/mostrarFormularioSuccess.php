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

<div class="grid-12-12">
    <label class="form-lbl">Focos diferenciados para la intervención:</label>
    <textarea class="form-txt" cols="" rows="" id="fdiferenciados_intervencion" name="fdiferenciados_intervencion"></textarea>
</div>
<div class="clear"></div>

<br>
<div class="grid-3-12">
    <a class="form-button-off form-left" style="display: block;" href="<?php echo url_for('principal/dashboard?idEncuestado='.$idEncuestado);?>" onclick="return confirm('Al salir del formulario perderás la información que hayas respondido en la pantalla actual. ¿Estas seguro que deseas salir del formulario actual?');"><- Volver al menú</a>
</div>
<div class="grid-2-12"></div>
<div class="grid-4-12">
    <input type="submit" value="Finalizar" title="enviar" class="form-button form-right">
</div>
<div class="clear"></div>
<input type="text" id="CLOSE_FLAG" name="CLOSE_FLAG" style="display:none" value="CERRADO">
</form>

<br>