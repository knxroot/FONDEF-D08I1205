<?php slot('title') ?>
  <?php  echo "[{$porcCompletado} % completado] (CESMA) Cuestionario de exploración en salud mental para adolecentes";?>
<?php end_slot(); ?>

<?php $url_next_post=url_for('SQIFA/proximoBloque?idEncuestado='.$idEncuestado);?>



<form id="formulario_SQIFA" name="formulario_SQIFA" class="form" method="post" action="<?php echo $url_next_post; ?>">
  <?php if(!($es_ultimo_bloque)): ?>
  <div class="grid-12-12 ui-widget-header ui-corner-all" style="position: relative;">(CESMA) Cuestionario de exploración en salud mental para adolecentes - <?php echo $porcCompletado; ?> % completado</div>
  <span style="border:1px solid red;dislay:block;padding:5px;margin-left:10px;">
  <?php if ($bloque_valor==1){
            echo 'Sección A. Las siguientes preguntas deben ser contestadas por el adolescente';
         }
         else if ($bloque_valor==2){
            echo 'Sección B. Más preuntas que debe contestar el adloscente (Respuestas tipo (Si/No)';
         }
         else if ($bloque_valor==3){
             echo 'Sección C. Las siguientes preguntas se basan observacuibes y otra información que haya obtenido de un profesor / padres / persona que conozco bien al adolscente';
         }  ?>
 </span>
  </br>
 <?php foreach ($Preguntas_SQIFA as $pregunta):?>
  <!-- Comienzo Bloque Pregunta -->
  <div id="SQIFA_pregunta_<?php echo $pregunta['id_pregunta'];?>" class="SQIFA_bloque_pregunta">
		<div class="grid-6-12">
			<label class="form-lbl-V-or-F">
        <?php echo $pregunta["id_pregunta"].".-".$pregunta["texto_pregunta"];?>
        <?php if($pregunta["es_requerida"]): ?>
          <em class="form-req">*</em>
        <?php endif;?>
      </label>
		</div>
    <div class="grid-4-12">
      <ul class="form-list-rdo">
        <?php if($bloque_valor==2){ 
        echo "<li><input class='botonradio' name='radio_VorF_SQIFA_".$pregunta['id_pregunta']."' type='radio' value='Si' /><label class='form-lbl'>Si</label></li>";
        echo "<li><input class='botonradio' name='radio_VorF_SQIFA_".$pregunta['id_pregunta']."' type='radio' value='No' /><label class='form-lbl'>No</label></li>";
        }
        else if($bloque_valor==1 || $bloque_valor==3){
        echo "<li><input class='botonradio' name='radio_VorF_SQIFA_".$pregunta['id_pregunta']."' type='radio' value='No, nunca' /><label class='form-lbl'>No, nunca</label></li>";
        echo "<li><input class='botonradio' name='radio_VorF_SQIFA_".$pregunta['id_pregunta']."' type='radio' value='A veces' /><label class='form-lbl'>A veces</label></li>";
        echo "<li><input class='botonradio' name='radio_VorF_SQIFA_".$pregunta['id_pregunta']."' type='radio' value='Si, mucho' /><label class='form-lbl'>Sí, mucho</label></li>";

        } ?>


      </ul>
    </div>
    <div class="grid-1-12"> <!-- tools para la pregunta -->
     <div id="boton_add_comentario_<?php echo $pregunta["id_pregunta"];?>" class="ui-icon-comentar" onclick="$('#dialogo-addcomentario').data('pregunta', {id: '<?php echo $pregunta["id_pregunta"];?>',numero: '<?php echo $pregunta["id_pregunta"];?>', texto: '<?php echo trim($pregunta["texto_pregunta"]);?>'}).dialog('open');"></div>
     </div>
    <div class="grid-6-12" style="display: none;"> <!--"Comentario adicional style="display: none;"-->
      <textarea id="comentario_<?php echo $pregunta["id_pregunta"];?>" name="comentario_<?php echo $pregunta["id_pregunta"];?>" title="Comentario"></textarea>
    </div>
  </div>
  <!-- Fin Bloque Pregunta -->
<?php endforeach ?>


  <!-- Comienzo Bloque Dialogo añadir comentario -->
  <div id="dialogo-addcomentario" style="display: none;" title="Agregar comentario">
    <p>A continuación agrega un comentario a la pregunta <i id="dialog_i_pregunta_referencia" class="referencia_pregunta"> ERROR RECARGE LA PAGINA PORFAVOR</i></p>
    <div  style="margin:auto; padding:auto;width:500px;">
      <div style="height:25px">

        <div style="float:left"><b>Comentario</b></div>
        <div id="barbox">
          <div id="progressbar"></div>
        </div>
        <div id="count">280</div>
      </div>
      <p>
        <textarea id="text_area_input_comentario" class="ui-corner-all" title="Porfavor escribe aqui tu comentario"></textarea>
      </p>
    </div>
  </div>
<!-- Fin Bloque Dialogo añadir comentario -->
<?php else: ?>
<div class="ui-widget">
				<div style="margin-top: 20px; padding: 0pt 0.7em;" class="ui-state-highlight ui-corner-all">
					<p><span style="float: left; margin-right: 0.3em;" class="ui-icon ui-icon-info"></span>
					<strong>"</strong>El cuestionario ha sido completado.<strong>"</strong></p>
				</div>
</div>
<br>
<?php endif; ?>

<!-- Comienzo Botón envio de formulario, en caso de ser último bloque advierte que se cerrará el formulario si se continua -->
<?php if(!($es_ultimo_bloque)): ?>
<a class="form-button-off form-left" style="display: block;" href="<?php echo url_for('principal/dashboard?idEncuestado='.$idEncuestado.'&idBloque='.$idBloque);?>" onclick="return confirm('Al salir del formulario perderás la inforSQIFAón que hayas respondido en la pantalla actual. ¿Estas seguro que deseas salir del formulario actual?');"><- Volver al menú</a>
<input type="submit" value="Siguiente" title="siguiente" class="form-button form-right">
<?php else: ?>
  <a class="form-button form-right" href="<?php   echo url_for('principal/dashboard?idEncuestado='.$idEncuestado);?>"><- Volver al menú</a>
<?php endif; ?>
<!-- Fin Botón envio de formulario, en caso de ser último bloque advierte que se cerrará el formulario si se continua -->
</form>
<br>

<div id="dialog-envio-resp-por-bloque" title="Confirmar">
	<p><span class="ui-icon ui-icon-info" style="float:left; margin:0 7px 20px 0;"></span><strong>¿Estas seguro que deseas continuar enviando los datos?.</strong> Una vez que envies las respuestas de este bloque de preguntas ya no podrán ser modificadas.</p>
</div>

