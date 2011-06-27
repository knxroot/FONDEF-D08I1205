<?php slot('title') ?>
  <?php  echo "Formulario a CAIE ({$porcCompletado} % completado)";?>
<?php end_slot(); ?>

<?php $url_next_post=url_for('CAIE/proximoBloque?idEncuestado='.$idEncuestado);?>

<!-- Comienzo Bloque Dialogo Instrucciones -->
  <div id="dialogo-instrucciones" style="display: none;" title="Instrucciones (CAIE)">
	<p>
		<span class="ui-icon-info-grande" style="float:left; margin:4px 4px 4px 4px;"></span>
     Tú sabes que en este región hay personas que son mapuches y también personas que no son mapuches. Ya que tú vives en esta región, queremos pedir tu ayuda para conocer mejor las costumbres y modos de ser de estos dos grupos de personas.
     <br><br>
     A continuación encontrarás una lista de preguntas sobre estos dos grupos. En estas preguntas, la palabra "<b>chileno o chilena</b>" significa “<b>persona que NO es mapuche</b>”. Cada pregunta debe ser contestada con un <b>SI</b> o con un <b>NO</b>. Lee con cuidado cada pregunta y contesta marcando la alternativa SI o NO.<br>
     <h6>Veamos un ejemplo, lee la siguiente pregunta:</h6>
      <br>
      <?php echo image_tag('CAIE_ej1.png', 'alt=¿Sabes canciones mapuches?	SI	NO') ?><br>
      Si tu sabes canciones mapuches debes marcar el <b>SI</b>:<br>
      <?php echo image_tag('CAIE_ej1_yes.png', 'alt=¿Sabes canciones mapuches?	*SI	 NO') ?><br>
      Si tu <b>no</b> sabes canciones mapuches debes marcar el <b>NO</b>:<br>
      <?php echo image_tag('CAIE_ej1_no.png', 'alt=¿Sabes canciones mapuches?	SI	 *NO') ?><br><br>
     <h6>Veamos otro ejemplo, lee la siguiente pregunta:</h6>
      <br>
      <?php echo image_tag('CAIE_ej2.png', 'alt=¿Tienes muchos amigos chilenos?	SI	NO') ?><br>
      Si tu tienes muchos amigos chilenos, es decir, muchos amigos que no son mapuches, debes marcar el <b>SI</b>:<br>
      <?php echo image_tag('CAIE_ej2_yes.png', 'alt=¿Tienes muchos amigos chilenos?	*SI	NO') ?><br>
      Si tu <b>no</b> tienes muchos amigos chilenos debes marcar el  <b>NO</b>:<br>
      <?php echo image_tag('CAIE_ej2_no.png', 'alt=¿Tienes muchos amigos chilenos?	SI	*NO') ?><br><br>
	</p>
  <h6>Recuerda:</h6>
  <ul>
    <li>Responde de la forma más sincera posible y contesta todas las preguntas.</li>
    <li>No existen respuestas buenas o malas, puedes consultar cualquier duda que tengas.</li>
    <li>Si tienes dudas o deseas que te expliquen una palabra o frase, <b>pide ayuda</b>.</li>
    <li>Para volver a hacer aparecer estas instrucciones haz click en el ícono superior <?php echo image_tag('pediarayuda.png', 'alt=el icono que tiene la i') ?>.</li>
  </ul>
  <br>

  <input type="checkbox" id="LeiLasInstrucciones" name="LeiLasInstrucciones" value="LeiLasInstrucciones" /> <b>Declaro haber leido las instrucciones y comprenderlas.</b> <br>
  </div>
<!-- Fin Bloque Dialogo Instrucciones -->

<form id="formulario_CAIE" name="formulario_CAIE" class="form" method="post" action="<?php echo $url_next_post; ?>">
  <?php if(!($es_ultimo_bloque)): ?>
  <div class="grid-12-12 ui-widget-header ui-corner-all" style="position: relative;">Formulario CAIE - <?php echo $porcCompletado; ?> % completado
  <span class="icono-ver-instrucciones" onclick="$('#dialogo-instrucciones').dialog('open');"></span>
  </div>
<?php foreach ($Preguntas_CAIE as $pregunta):?>
  <?php if(!($pregunta["id_pregunta"]=='39')): ?>
  <!-- Comienzo Bloque Pregunta -->
  <div id="CAIE_pregunta_<?php echo $pregunta["id_pregunta"];?>" class="CAIE_bloque_pregunta">
		<div class="grid-8-12">
			<label class="form-lbl-V-or-F">
        <?php echo $pregunta["id_pregunta"].".-".$pregunta["texto_pregunta"];?>
        <?php if($pregunta["es_requerida"]): ?>
          <em class="form-req">*</em>
        <?php endif;?>
      </label>
		</div>
    <div class="grid-3-12">
      <ul class="form-list-rdo">
        <li><input class="botonradio" name="radio_VorF_CAIE_<?php echo $pregunta["id_pregunta"];?>" type="radio" value="SI" /><label class="form-lbl">SI</label></li>
        <li><input class="botonradio" name="radio_VorF_CAIE_<?php echo $pregunta["id_pregunta"];?>" type="radio" value="NO" /><label class="form-lbl">NO</label></li>
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
  <?php else: ?>
  <div id="CAIE_pregunta_<?php echo $pregunta["id_pregunta"];?>" class="CAIE_bloque_pregunta">
    <div class="grid-8-12">
			<label class="form-lbl-V-or-F">
        <?php echo $pregunta["id_pregunta"].".-".$pregunta["texto_pregunta"];?>
        <?php if($pregunta["es_requerida"]): ?>
          <em class="form-req">*</em>
        <?php endif;?>
      </label>
		</div>
    <div class="grid-3-12">
      <ul class="form-list-rdo">
        <li><input class="botonradio" id="radio_VorF_CAIE_<?php echo $pregunta['id_pregunta'];?>" name="radio_VorF_CAIE_<?php echo $pregunta["id_pregunta"];?>" type="radio" value="Católica" /><label class="form-lbl">Católica</label></li>
        <li><input class="botonradio" id="radio_VorF_CAIE_<?php echo $pregunta['id_pregunta'];?>" name="radio_VorF_CAIE_<?php echo $pregunta["id_pregunta"];?>" type="radio" value="Evangélica" /><label class="form-lbl">Evangélica</label></li>
        <li><input class="botonradio" id="radio_VorF_CAIE_<?php echo $pregunta['id_pregunta'];?>" name="radio_VorF_CAIE_<?php echo $pregunta["id_pregunta"];?>" type="radio" value="Anglicana" /><label class="form-lbl">Anglicana</label></li>
        <li><input class="botonradio" id="radio_VorF_CAIE_<?php echo $pregunta['id_pregunta'];?>" name="radio_VorF_CAIE_<?php echo $pregunta['id_pregunta'];?>" type="radio" value="Mapuche" /><label class="form-lbl">Mapuche</label></li>
         <li><input class="botonradio" id="radio_VorF_CAIE_<?php echo $pregunta['id_pregunta'];?>" name="radio_VorF_CAIE_<?php echo $pregunta['id_pregunta'];?>" type="radio" value="Otra" /><label class="form-lbl">Otra(¿Cuál?)</label></li>
        <input type="text" class="form-txt especial4" style="width:80px;display: none;" value="" name="input_otra_iglesia" id="input_otra_iglesia" />
      </ul>
    </div>
    <div class="grid-1-12"> <!-- tools para la pregunta -->
     <div id="boton_add_comentario_<?php echo $pregunta["id_pregunta"];?>" class="ui-icon-comentar" onclick="$('#dialogo-addcomentario').data('pregunta', {id: '<?php echo $pregunta["id_pregunta"];?>',numero: '<?php echo $pregunta["id_pregunta"];?>', texto: '<?php echo trim($pregunta["texto_pregunta"]);?>'}).dialog('open');"></div>
     </div>
    <div class="grid-12-12" style="display: none;"> <!--"Comentario adicional style="display: none;"-->
      <textarea id="comentario_<?php echo $pregunta["id_pregunta"];?>" name="comentario_<?php echo $pregunta["id_pregunta"];?>" title="Comentario"></textarea>
    </div>
  </div>
  <?php endif; ?>
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
<a class="form-button-off form-left" style="display: block;" href="<?php echo url_for('principal/dashboard?idEncuestado='.$idEncuestado);?>" onclick="return confirm('Al salir del formulario perderás la información que hayas respondido en la pantalla actual. ¿Estas seguro que deseas salir del formulario actual?');"><- Volver al menú</a>
<input type="submit" value="Siguiente" title="siguiente" class="form-button form-right">
<?php else: ?>
  <a class="form-button form-right" href="<?php echo url_for('principal/dashboard?idEncuestado='.$idEncuestado);?>"><- Volver al menú</a>
<?php endif; ?>
<!-- Fin Botón envio de formulario, en caso de ser último bloque advierte que se cerrará el formulario si se continua -->
</form>
<br>

<div id="dialog-envio-resp-por-bloque" title="Confirmar">
	<p><span class="ui-icon ui-icon-info" style="float:left; margin:0 7px 20px 0;"></span><strong>¿Estas seguro que deseas continuar enviando los datos?.</strong> Una vez que envies las respuestas de este bloque de preguntas ya no podrán ser modificadas.</p>
</div>




<!-- Codigo JS del dialogo de instrucciones: Se ha declarado acá dado que el
autodespliegue en la primera oportunidad es dinámico con respecto a un parámetro
pasado por php.

Si es la primera vez que se llama a la web se muestra el diálogo de
instrucciones, en caso contrario el diálogo permanece oculto y se muestra al
presionar el botón señalado con ícono (i).
-->
<script type="text/javascript">
  var is_show_instruccions=eval("<?php echo $is_show_instruccions;?>"); // pasa el string a bool en js
  if(is_show_instruccions==null){ var is_show_instruccions=false;$("#formulario_CAIE").hide();alert("Al parecer ha habido un problema de connección, es recomendable que recarge la página");}

 if(is_show_instruccions){
    $("#formulario_CAIE").hide();
  }else{}
  //alert(is_show_instruccions);
    
		$("#dialogo-instrucciones").dialog( "destroy" );
		$("#dialogo-instrucciones").dialog({
      height: 373,
      width: 960,
			modal: true,
      autoOpen: is_show_instruccions, //se abre solito al cargar la paguina si es true
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
        $("#formulario_CAIE").show();
      }
		});
</script>
<!-- Fin código diálogo de instrucciones -->



