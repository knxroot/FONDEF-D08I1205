<?php slot('title') ?>
  <?php  echo "Formulario a CSVE ({$porcCompletado} % completado)";?>
<?php end_slot(); ?>

<?php $url_next_post=url_for('CSVE/proximoBloqueCSVE?idEncuestado='.$idEncuestado);?>

<!-- Comienzo Bloque Dialogo Instrucciones -->
  <div id="dialogo-instrucciones" style="display: none;" title="Instrucciones CSVE">
	<p>
	
    El cuestionario que responderás a continuación contiene una serie experiencias o  sucesos que pueden ocurrir a jóvenes como tú.  <br><br>
      
Lee cada frase detenidamente y marca en la celda correspondiente de acuerdo a las siguientes indicaciones y al responder hazlo del modo más serio y honesto posible: 
      <br><br>
       <ul>
      <li>Si el suceso señalado no lo has vivido, selecciona NO y continúa con la siguiente frase.</li>
      <br>
      <li>Si el suceso señalado si lo viviste, selección SI, e inmediatamente se desplegaran otras tres opciones de respuesta que debes completar, en base a las siguientes indicaciones:</li>
       </ul>
      <div style="margin-left:65px;">
      <ul>
          <li>Si te ocurrió en los últimos 12 meses, selecciona SI. Y si fue hace más de un año, selecciona NO.</li>
          <li>En la columna ¿Qué valor que le otorgas?, tienes que decidir si esta experiencia fue para ti positiva, negativa o neutra, seleccionando cualquiera de estas tres alternativas.</li>
          <li>Por último, en la columna ¿Importancia que tuvo para ti? debes elegir entre las cinco alternativas señaladas: ninguna, baja, mediana, alta o muy alta.</li>
      </ul>
          </div>
       <li>Frente a algunas frases, en la columna ¿viviste este suceso?, aparecerá la alternativa de respuesta NO CORRESPONDE, esto ocurre en aquellos sucesos referidos a experiencias donde la respuesta NO, no se aplica, pues supone una  experiencia previa que en tú caso no se ha dado,</li>
      <br> 
      <br>
    
     
     
	</p>
  <h6>Recuerda:</h6>
  <ul>
    <li>Comienza leyendo cada frase, una a una y trata de responder a todas, aun cuando no estés muy seguro/a de tu decisión. Si lo has intentado pero no puedes decidirte, entonces responde la frase escribiendo la letra <b>F (Falso)</b>.</li>
    <li>Si te equivocas o deseas cambiar alguna respuesta, selecciona nuevamente la letra correspondiente.</li>
    <li>Si tienes dudas o deseas que te expliquen una palabra o frase, <b>pide ayuda</b>.</li>
    <li>Para volver a hacer aparecer estas instrucciones haz click en el ícono superior <?php echo image_tag('pediarayuda.png', 'alt=el icono que tiene la i') ?>.</li>
 </ul>
 <br>
  <input type="checkbox" id="LeiLasInstrucciones" name="LeiLasInstrucciones" value="LeiLasInstrucciones" /> <b>Declaro haber leido las instrucciones y comprenderlas.</b> <br>
  </div>
<!-- Fin Bloque Dialogo Instrucciones -->

<form id="formulario_CSVE" name="formulario_CSVE" class="form" method="post" action="<?php echo $url_next_post; ?>">
  <?php if(!($es_ultimo_bloque)): ?>
  <div class="grid-12-12 ui-widget-header ui-corner-all" style="position: relative;">Formulario CSVE - <?php echo $porcCompletado; ?> % completado
  <span class="icono-ver-instrucciones" onclick="$('#dialogo-instrucciones').dialog('open');"></span>
  </div>
    <div class="grid-4-12">Suceso</div>
     <div class="grid-3-12">¿Viviste este suceso?</div>
     <div id="respuesta2" class="grid-4-12" >
         <div  style="Text-align:center; width: 78px;display: inline;float: left;height: 100%;margin-left: 1%;margin-right: 1%;padding: 0.5% 0.5% 0.8%;" >
             ¿Qué valor le otorgas?
         </div>
         <div  style="Text-align:center; width: 80px;display: inline;float: left;height: 100%;margin-left: 1%;margin-right: 1%;padding: 0.5% 0.5% 0.8%;" >
             ¿Qué importancia tuvo para ti?
         </div>
         <div style="Text-align:center; width: 100px;display: inline;float: left;height: 100%;margin-left: 1%;margin-right: 1%;padding: 0.5% 0.5% 0.8%;">
             ¿Ocurrió en los últimos 12 meses?
         </div>
     </div>
         
    
    <?php $nc = array(2,"4","8","10","14","18","21","27","35","38","43","45","49","51","57","68","70","75","79","81"); ?>
<?php foreach ($Preguntas_CSVE as $pregunta):?>
  <!-- Comienzo Bloque Pregunta -->
  <div id="CSVE_pregunta_<?php echo $pregunta["id_pregunta"];?>" class="CSVE_bloque_pregunta">
		<div class="grid-4-12">
			<label class="form-lbl-V-or-F">
        <?php echo $pregunta["id_pregunta"].".-".$pregunta["texto_pregunta"];?>
        <?php if($pregunta["es_requerida"]): ?>
          
          <em class="form-req"></em>
        <?php endif;?>
      </label>
		</div>
    <div class="grid-3-12">
      <ul class="form-list-rdo">
        <li><input class="botonradio" id="<?php echo $pregunta["id_pregunta"];?>" name="radio_VorF_CSVE_<?php echo $pregunta["id_pregunta"];?>" type="radio" value="si" Onclick="mostrar(<?php echo $pregunta["id_pregunta"];?>)"/><label class="form-lbl">Si</label></li>
        <li><input class="botonradio" id="<?php echo $pregunta["id_pregunta"];?>" name="radio_VorF_CSVE_<?php echo $pregunta["id_pregunta"];?>" type="radio" value="no" Onclick="ocultar(<?php echo $pregunta["id_pregunta"];?>)" /><label class="form-lbl">No</label></li>
	<?php if(in_array($pregunta["id_pregunta"], $nc)): ?> 
         <li><input class="botonradio" id="<?php echo $pregunta["id_pregunta"];?>" name="radio_VorF_CSVE_<?php echo $pregunta["id_pregunta"];?>" type="radio" value="NC" Onclick="ocultar(<?php echo $pregunta["id_pregunta"];?>)"/><label class="form-lbl">NC</label></li>
       <?php endif; ?>

      </ul>

    </div>

       <div id="respuesta2" class="grid-4-12" >
   
           <div id="envoltorio<?php echo $pregunta["id_pregunta"];?>" style="display:none">
               
                <div  style="width: 78px;display: inline;float: left;height: 100%;margin-left: 1%;margin-right: 1%;padding: 0.5% 0.5% 0.8%;" >
         
                     <ul>
                        <select type="checkbox" name="respuesta2a_CSVE_<?php echo $pregunta["id_pregunta"];?>">
                            <OPTION VALUE=""></OPTION>   
                            <OPTION VALUE="1">Positiva</OPTION>
                               <OPTION VALUE="-1">Negativa</OPTION>
                               <OPTION VALUE="0">Neutra</OPTION>
                                </select>
                     </ul>
        </div>

        <div  style="width: 80px;display: inline;float: left;height: 100%;margin-left: 1%;margin-right: 1%;padding: 0.5% 0.5% 0.8%;" >
         
                     <ul>
                        <select type="checkbox" name="respuesta2b_CSVE_<?php echo $pregunta["id_pregunta"];?>">
                             <OPTION VALUE=""></OPTION>   
                               <OPTION VALUE="0">Ninguna</OPTION>
                               <OPTION VALUE="1">Baja</OPTION>
                               <OPTION VALUE="2">Mediana</OPTION>
                               <OPTION VALUE="3">Alta</OPTION>
                               <OPTION VALUE="4">Muy Alta</OPTION>
                                </select>
                     </ul>
        </div>
		<div style="width: 100px;display: inline;float: left;height: 100%;margin-left: 1%;margin-right: 1%;padding: 0.5% 0.5% 0.8%;">
                    <ul class="form-list-rdo">
                        <li><input class="botonradio" name="radio_respuesta3_CSVE_<?php echo $pregunta["id_pregunta"];?>" type="radio" value="si" /><label class="form-lbl3">Si</label></li>
                        <li><input class="botonradio" name="radio_respuesta3_CSVE_<?php echo $pregunta["id_pregunta"];?>" type="radio" value="no" checked /><label class="form-lbl3">No</label></li>
                    </ul>

                 </div>

               
        </div> <!-- Fin envoltorio-->

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
<a class="form-button-off form-left" style="display: block;" href="<?php echo url_for('principal/dashboard?idEncuestado='.$idEncuestado);?>" onclick="return confirm('Al salir del formulario perderás la inforCSVEón que hayas respondido en la pantalla actual. ¿Estas seguro que deseas salir del formulario actual?');"><- Volver al menú</a>
<input type="submit" value="Siguiente" title="siguiente" class="form-button form-right">
<?php else: ?>
  <a class="form-button form-right" href="<?php echo url_for('principal/dashboard?idEncuestado='.$idEncuestado);?>"><- Volver al menú</a>
<?php endif; ?>
<!-- Fin Botón envio de formulario, en caso de ser último bloque advierte que se cerrará el formulario si se continua -->
<input type="text" id="tstart" name="tstart" style="display:none" value="<?php echo $tstart; ?>"></input>
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
  if(is_show_instruccions==null){ var is_show_instruccions=false;$("#formulario_CSVE").hide();alert("Al parecer ha habido un problema de connección, es recomendable que recarge la página");}

 if(is_show_instruccions){
    $("#formulario_CSVE").hide();
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
        $("#formulario_CSVE").show();
      }
		});
</script>
<!-- Fin código diálogo de instrucciones -->



