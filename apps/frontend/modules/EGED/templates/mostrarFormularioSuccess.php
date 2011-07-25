<?php slot('title') ?>
  <?php  echo "Formulario a EGED ({$porcCompletado} % completado)";?>
<?php end_slot(); ?>

<!-- CAMBIO CONSENSO START-->
<?php 
$url_save_post=url_for('EGED/GuardarInstrumento?idEncuestado='.$idEncuestado);
if($consenso==1){
  $url_save_post=url_for('EGED/GuardarInstrumento?idEncuestado='.$idEncuestado.'&modoConsenso=true');
}
?>
<!-- CAMBIO CONSENSO STOP-->


<!-- Comienzo Bloque Dialogo Instrucciones -->
  <div id="dialogo-instrucciones" style="display: none;" title="Instrucciones EGED">
	<p>
		<span class="ui-icon-info-grande" style="float:left; margin:4px 4px 4px 4px;"></span>
      I. La escala está compuesta de 12 variables  <br><br>
	  II.	Se debe responder cuando se tenga una visión clara del historial delictivo del adolescente <br><br>
	   III.	Se toma en consideración la delincuencia en su totalidad (oculta y oficial)<br><br>
	 IV.	Debe consignarse sólo aquello de lo que se esté seguro y recoger más información para responder los ítems que le merezcan dudas<br><br>
      V.	Una puntuación de 4 o más da cuenta de la presencia de Delincuencia Distintiva<br><br>
	   <br>
  
  
 <br>
  <input type="checkbox" id="LeiLasInstrucciones" name="LeiLasInstrucciones" value="LeiLasInstrucciones" /> <b>Declaro haber leido las instrucciones y comprenderlas.</b> <br>
  </div>
<!-- Fin Bloque Dialogo Instrucciones -->

<form id="formulario_EGED" name="formulario_EGED" class="form" method="post" action="<?php echo $url_save_post; ?>">

<!-- CAMBIO CONSENSO START-->
  <?php if($consenso==1): ?>           
    <div class="grid-12-12 ui-widget ui-consenso-header ui-corner-all" style="position: relative;"><?php  echo "Formulario EGED (Modo consenso)";?>
  <span class="icono-ver-instrucciones" onclick="$('#dialogo-instrucciones').dialog('open');"></span>
    </div><div class="clear"></div>
  <?php else: ?>
    <div class="grid-12-12 ui-widget ui-widget-header ui-corner-all" style="position: relative;"><?php  echo "Formulario EGED";?>
   <span class="icono-ver-instrucciones" onclick="$('#dialogo-instrucciones').dialog('open');"></span>
    </div><div class="clear"></div>      
  <?php endif; ?>
<!-- CAMBIO CONSENSO STOP-->    
    

<?php foreach ($Preguntas_EGED as $pregunta):?>
  <!-- Comienzo Bloque Pregunta -->
  <div id="EGED_pregunta_<?php echo $pregunta["id_pregunta"];?>" class="EGED_bloque_pregunta">
		<div class="grid-8-12">
			<label class="form-lbl-V-or-F">
        <?php echo $pregunta["id_pregunta"].".-".$pregunta["texto_pregunta"];?><a href="#" class="tip_trigger"> <IMG src="/images/question-white.png" /><span class="tip"> <?php echo $pregunta["instrucciones"]; ?></span></a>
        <?php if($pregunta["es_requerida"]): ?>
          <em class="form-req"></em>
        <?php endif;?>
      </label>
		</div>
    <div class="grid-3-12">
      <ul class="form-list-rdo">
        <li><input class="botonradio" name="radio_VorF_EGED_<?php echo $pregunta["id_pregunta"];?>" type="radio" value="Si" /><label class="form-lbl">Sí</label></li>
        <li><input class="botonradio" name="radio_VorF_EGED_<?php echo $pregunta["id_pregunta"];?>" type="radio" value="No" /><label class="form-lbl">No</label></li>

			</ul>
    </div>
    <div class="grid-1-12"> <!-- tools para la pregunta -->
     <div id="boton_add_comentario_<?php echo $pregunta["id_pregunta"];?>" class="ui-icon-comentar" onclick="$('#dialogo-addcomentario').data('pregunta', {id: '<?php echo $pregunta["id_pregunta"];?>',numero: '<?php echo $pregunta["id_pregunta"];?>', texto: '<?php echo trim($pregunta["texto_pregunta"]);?>'}).dialog('open');"></div>
     </div>
    <div class="grid-12-12" style="display: none;"> <!--"Comentario adicional style="display: none;"-->
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

<div class="clear"></div>
<input type="text" id="CLOSE_FLAG" name="CLOSE_FLAG" style="display:none" value="CERRADO"></input>
<input type="text" id="tstart" name="tstart" style="display:none" value="<?php echo $tstart; ?>"></input>

<!-- Comienzo Botón envio de formulario, en caso de ser último bloque advierte que se cerrará el formulario si se continua -->
    <div class="grid-4-12">
      <a class="form-button-off form-left" style="display: block;" href="<?php echo url_for('principal/dashboard?idEncuestado='.$idEncuestado);?>" onclick="return confirm('Al salir del formulario perderás la información que hayas respondido en la pantalla actual. ¿Estas seguro que deseas salir del formulario actual?');"><- Volver al menú</a>
    </div>
    <div class="grid-4-12">
        <input type="submit" value="Cerrar" title="Cerrar" class="form-button form-right">
    </div>
    <div class="grid-4-12">&nbsp;</div>
<!-- Fin Botón envio de formulario, en caso de ser último bloque advierte que se cerrará el formulario si se continua -->



</form>
<br>




<!-- Codigo JS del dialogo de instrucciones: Se ha declarado acá dado que el
autodespliegue en la primera oportunidad es dinámico con respecto a un parámetro
pasado por php.

Si es la primera vez que se llama a la web se muestra el diálogo de
instrucciones, en caso contrario el diálogo permanece oculto y se muestra al
presionar el botón señalado con ícono (i).
-->


<!-- CAMBIO CONSENSO START-->
<script type="text/javascript">
    $().ready(function() {
        <?php if($consenso==1): ?>
          $("form").loadJSON(<?php echo $sf_data->getRaw('respuestasGuardadas');?>);
        <?php endif; ?>
    });

    $("#formulario_EGED").hide();
    $("#dialogo-instrucciones").dialog( "destroy" );
		$("#dialogo-instrucciones").dialog({
      height: 373,
      width: 960,
			modal: true,
      autoOpen: true, //se abre solito al cargar la paguina si es true
//      closeOnEscape: false,
      closeText: 'Cerrar',
      draggable: false,
      show: 'slide',
			buttons: {
				Ok: function() {
          if($('#LeiLasInstrucciones').attr("checked")){
              $(this).dialog('close')
          }else{
             alert("Debes declarar haber leido las instrucciones primero. Haz click en el botón inferior.");
          }
				}
			},
      beforeClose: function(event, ui) {
        $("#formulario_EGED").show();
      }
		});
</script>
<!-- CAMBIO CONSENSO STOP-->

<!-- Fin código diálogo de instrucciones -->
