
<?php slot('title') ?>
  <?php  echo "Formulario a IRNC ({$porcCompletado} % completado)";?>
<?php end_slot(); ?>

<?php 
$url_save_post=url_for('IRNC/GuardarInstrumento?idEncuestado='.$idEncuestado);
if($consenso==1){
  $url_save_post=url_for('IRNC/GuardarInstrumento?idEncuestado='.$idEncuestado.'&modoConsenso=true');
}
?>

  <?php if(!($es_ultimo_bloque)): ?>
  <div class="grid-12-12 ui-widget ui-widget-header ui-corner-all" style="position: relative;">Formulario IRNC - <?php echo $porcCompletado; ?> % completado
  </div><div class="clear"></div>



<div id="msg-guardando" class="msg-guardando">
  <div class="grid-4-12"></div>
  <div class="grid-4-12"><?php echo image_tag('loading-image.gif','style=float:left;') ?><h3>Guardando...</h3></div>
  <div class="grid-4-12"></div>
</div><div class="clear"></div>

<form id="formulario_IRNC" name="formulario_IRNC" class="form" method="post" action="<?php echo $url_save_post; ?>">

<div class="grid-12-12">
  <div id="panelTabsPreguntas" class="ui-widget ui-widget-content ui-corner-all">
    <ul class="tabs">
      <?php foreach ($Preguntas_IRNC as $bloqueDePreguntas):?>
        <li><a href="#tabBloque<?php echo $bloqueDePreguntas["numBLoque"];?>"><?php echo $bloqueDePreguntas["numBLoque"];?></a></li>
        
      <?php endforeach ?>
        <li><a href="#tabBloque9">9</a></li>
        <li><a href="#tabBloque10">10</a></li>
    </ul>

    <?php foreach ($Preguntas_IRNC as $bloqueDePreguntas):?>
    <div id="tabBloque<?php echo $bloqueDePreguntas['numBLoque'] ?>">
      <div class="grid-12-12">
        <b><?php echo $bloqueDePreguntas["numBLoque"].".- ".$bloqueDePreguntas["textoBloque"]; ?></b>
      </div>
       <div class="clear"></div>
      <?php foreach ($bloqueDePreguntas["preguntasDelBloque"] as $pregunta):?>
        <!-- Comienzo Bloque Pregunta -->
        <div id="IRNC_pregunta_<?php echo $pregunta['id_pregunta'];?>" class="IRNC_bloque_pregunta">
          <div class="grid-5-12">
            <label class="form-lbl-V-or-F">
              &nbsp;&nbsp;<?php echo $pregunta["num_pregunta"].".- ".$pregunta["texto_pregunta"];?>
            </label>
          </div>
          <div class="grid-2-12">
            <ul class="form-list-rdo">
              <li><input type="radio" class="botonradio" name="b<?php echo $bloqueDePreguntas["numBLoque"];?>-p<?php echo $pregunta["num_pregunta"];?>" type="radio" value="SI"  /><label class="form-lbl">SI</label></li>
              <li><input type="radio" class="botonradio" name="b<?php echo $bloqueDePreguntas["numBLoque"];?>-p<?php echo $pregunta["num_pregunta"];?>" type="radio" value="NO" /><label class="form-lbl">NO</label></li>
              <li><input type="radio" class="botonradio" style="display:none" name="b<?php echo $bloqueDePreguntas["numBLoque"];?>-p<?php echo $pregunta["num_pregunta"];?>" type="radio" value="no_seleccionado" checked /></li>
              
        
            </ul>
          </div>
          <div class="grid-5-12"> <!--"Comentario adicional style="display: none;"-->
            <textarea class="textarea_comentario_expicito" id="comentario_<?php echo $pregunta["id_pregunta"];?>" name="comentario_<?php echo $pregunta["id_pregunta"];?>" title="Comentario"></textarea>
          </div>
        </div>
        <div class="clear"></div>
        <!-- Fin Bloque Pregunta -->
      <?php endforeach ?>
    </div>
    <?php endforeach ?>




    <div id="tabBloque9">
      <div class="grid-12-12">
        <b>9.- Familia / padres</b>
      </div>
       <div class="clear"></div>
        <!-- Comienzo Bloque Pregunta -->
        <div id="IRNC_pregunta_9" class="IRNC_bloque_pregunta">
          <div class="grid-3-12">
            <ul>
            
                 <li><input type="radio" value="si" name="b9p1" class="botonradio" >
                     <input type="radio" value="no" style="display:none" name="b9p1" class="botonradio" checked><label for="b9p1">Infraciones anteriores</label></li>
                   
            
      
               <li><input type="radio" value="si" name="b9p2" class="botonradio" >
                   <input type="radio" value="no" style="display:none" name="b9p2" class="botonradio" checked><label for="b9p2">Desamparo afect / psiquiátrico</label></li>
              <li><input type="radio" value="si" name="b9p1" class="botonradio" >
                  <input type="radio" value="no" style="display:none" name="b9p3" class="botonradio" checked><label for="b9p3">Drogadicción</label></li>
              
               <li><input type="radio" value="si" name="b9p4" class="botonradio" >
                   <input type="radio" value="no" style="display:none" name="b9p4" class="botonradio" checked><label for="b9p4">Desacuerdos conyugales</label></li>
            </ul>
          </div>
          <div class="grid-3-12">
            <ul>
              <li><input type="radio" value="si" name="b9p5" class="botonradio" >
                   <input type="radio" value="no" style="display:none" name="b9p5" class="botonradio" checked><label for="b9p5">Probl. Económ. / alojamiento</label></li>
              <li><input type="radio" value="si" name="b9p6" class="botonradio" >
                   <input type="radio" value="no" style="display:none" name="b9p6" class="botonradio" checked><label for="b9p6">Desinterés vs problemas</label></li>
              <li><input type="radio" value="si" name="b9p7" class="botonradio" >
                   <input type="radio" value="no" style="display:none" name="b9p7" class="botonradio" checked><label for="b9p7">Probl. de orden cultural (étnico)</label></li>
          <li><input type="radio" value="si" name="b9p8" class="botonradio" >
                   <input type="radio" value="no" style="display:none" name="b9p8" class="botonradio" checked><label for="b9p8">Maltrato de parte del padre</label></li>
            </ul>
          </div>
          <div class="grid-6-12">
            <ul>
              <li><input type="radio" value="si" name="b9p9" class="botonradio" >
                   <input type="radio" value="no" style="display:none" name="b9p9" class="botonradio" checked><label for="b9p9">Maltrato de parte de la madre</label></li>
              <li><input type="radio" value="si" name="b9p10" class="botonradio" >
                   <input type="radio" value="no" style="display:none" name="b9p10" class="botonradio" checked><label for="b9p10">Trauma familiar grave:</label><input type="text" class="form-txt" style="width:100px;" value="" name="b9p10" id="b9p10" /></li>              
             <li><input type="radio" value="si" name="b9p11" class="botonradio" >
                   <input type="radio" value="no" style="display:none" name="b9p11" class="botonradio" checked><label for="b9p11">Otro:</label><input type="text" class="form-txt" style="width:100px;" value="" name="b9p11o" id="b9p11o" /></li>   
            </ul>
          </div>
          <div class="clear"></div>
          <div class="grid-12-12"> <!--"Comentario adicional"-->
            <textarea class="textarea_comentario_expicito" id="comentario_bloque9" name="comentario_bloque9" title="Comentario"><?php echo $comentariobloque9;?></textarea>
          </div>
        </div>
        <div class="clear"></div>
        <!-- Fin Bloque Pregunta -->
    </div>

    <div id="tabBloque10">
      <div class="grid-12-12">
        <b>10.- Adolescente</b>
      </div>
       <div class="clear"></div>
        <!-- Comienzo Bloque Pregunta -->
        <div id="IRNC_pregunta_10" class="IRNC_bloque_pregunta">
          <div class="grid-3-12">
            <ul>
             <li><input type="radio" value="si" name="b10p1" class="botonradio" >
                   <input type="radio" value="no" style="display:none" name="b10p1" class="botonradio" checked><label for="b10p1">Problemas de salud</label></li>
             
             <li><input type="radio" value="si" name="b10p2" class="botonradio" >
                   <input type="radio" value="no" style="display:none" name="b10p2" class="botonradio" checked><label for="b10p2">Discapacidad física</label></li>
       
              <li><input type="radio" value="si" name="b10p3" class="botonradio" >
                   <input type="radio" value="no" style="display:none" name="b10p3" class="botonradio" checked><label for="b10p3">CI bajo / retraso del desarrollo</label></li>
            
              <li><input type="radio" value="si" name="b10p4" class="botonradio" >
                   <input type="radio" value="no" style="display:none" name="b10p4" class="botonradio" checked><label for="b10p4">Dificultades de aprendizaje</label></li>
         
              <li><input type="radio" value="si" name="b10p5" class="botonradio" >
                   <input type="radio" value="no" style="display:none" name="b10p5" class="botonradio" checked><label for="b10p5">Rendim. inferior a las expect.</label></li>
         
              <li><input type="radio" value="si" name="b10p6" class="botonradio" >
                   <input type="radio" value="no" style="display:none" name="b10p6" class="botonradio" checked><label for="b10p6">Baja capac. resoluc. conflictos</label></li>
              
              <li><input type="radio" value="si" name="b10p7" class="botonradio" >
                   <input type="radio" value="no" style="display:none" name="b10p7" class="botonradio" checked><label for="b10p7">Víct.de agresión física / sex.</label></li>
               
              <li><input type="radio" value="si" name="b10p8" class="botonradio" >
                   <input type="radio" value="no" style="display:none" name="b10p8" class="botonradio" checked><label for="b10p8">Víctima de negligencia parent.</label></li>
               
              <li><input type="radio" value="si" name="b10p9" class="botonradio" >
                   <input type="radio" value="no" style="display:none" name="b10p9" class="botonradio" checked><label for="b10p9">Tímido/a / cerrado/a</label></li>
            </ul>
          </div>
          <div class="grid-3-12">
            <ul>
                
              <li><input type="radio" value="si" name="b10p10" class="botonradio" >
                   <input type="radio" value="no" style="display:none" name="b10p10" class="botonradio" checked><label for="b10p10">Compañero-as de otra edad</label></li>
                
              <li><input type="radio" value="si" name="b10p11" class="botonradio" >
                   <input type="radio" value="no" style="display:none" name="b10p11" class="botonradio" checked><label for="b10p11">Estado depresivo</label></li>
                
              <li><input type="radio" value="si" name="b10p12" class="botonradio" >
                   <input type="radio" value="no" style="display:none" name="b10p12" class="botonradio" checked><label for="b10p12">Baja auto estima</label></li>
                
              <li><input type="radio" value="si" name="b10p13" class="botonradio" >
                   <input type="radio" value="no" style="display:none" name="b10p13" class="botonradio" checked><label for="b10p13">Actividad sexual inapropiada</label></li>
                
              <li><input type="radio" value="si" name="b10p14" class="botonradio" >
                   <input type="radio" value="no" style="display:none" name="b10p14" class="botonradio" checked><label for="b10p14">Actitud racista / sexista</label></li>
                
              <li><input type="radio" value="si" name="b10p15" class="botonradio" >
                   <input type="radio" value="no" style="display:none" name="b10p15" class="botonradio" checked><label for="b10p15">Bajas aptitudes sociales</label></li>
                
              <li><input type="radio" value="si" name="b10p16" class="botonradio" >
                   <input type="radio" value="no" style="display:none" name="b10p16" class="botonradio" checked><label for="b10p16">Se niega a ver la realidad</label></li>
                
              <li><input type="radio" value="si" name="b10p17" class="botonradio" >
                   <input type="radio" value="no" style="display:none" name="b10p17" class="botonradio" checked><label for="b10p17">Intento de suicidio</label></li>
               
              <li><input type="radio" value="si" name="b10p18" class="botonradio" >
                   <input type="radio" value="no" style="display:none" name="b10p18" class="botonradio" checked><label for="b10p18">Diagnóstico de psicosis</label></li>
            </ul>
          </div>
          <div class="grid-6-12">
            <ul>
                
              <li><input type="radio" value="si" name="b10p19" class="botonradio" >
                   <input type="radio" value="no" style="display:none" name="b10p19" class="botonradio" checked><label for="b10p19">Amenazas de un tercero</label></li>
                
              <li><input type="radio" value="si" name="b10p20" class="botonradio" >
                   <input type="radio" value="no" style="display:none" name="b10p20" class="botonradio" checked><label for="b10p20">Agresiones sexuales / físicas</label></li>
                
              <li><input type="radio" value="si" name="b10p21" class="botonradio" >
                   <input type="radio" value="no" style="display:none" name="b10p21" class="botonradio" checked><label for="b10p21">Agresión vs pers. en autoridad</label></li>
                
              <li><input type="radio" value="si" name="b10p22" class="botonradio" >
                   <input type="radio" value="no" style="display:none" name="b10p22" class="botonradio" checked><label for="b10p22">Uso de armas</label></li>
               
              <li><input type="radio" value="si" name="b10p23" class="botonradio" >
                   <input type="radio" value="no" style="display:none" name="b10p23" class="botonradio" checked><label for="b10p23">Piromanía</label></li>
                
              <li><input type="radio" value="si" name="b10p24" class="botonradio" >
                   <input type="radio" value="no" style="display:none" name="b10p24" class="botonradio" checked><label for="b10p24">Evasión</label></li>
                
              <li><input type="radio" value="si" name="b10p25" class="botonradio" >
                   <input type="radio" value="no" style="display:none" name="b10p25" class="botonradio" checked><label for="b10p25">Protección</label></li>
                
              <li><input type="radio" value="si" name="b10p26" class="botonradio" >
                   <input type="radio" value="no" style="display:none" name="b10p26" class="botonradio" checked><label for="b10p26">Condiciones de vida difíciles</label></li>
                
              <li><input type="radio" value="si" name="b10p27" class="botonradio" >
                   <input type="radio" value="no" style="display:none" name="b10p27" class="botonradio" checked><label for="b10p27">Otro</label><input type="text" class="form-txt" style="width:100px;" value="" name="b10p27o" id="b10p27o" /></li>
            </ul>
          </div>
          <div class="clear"></div>
          <div class="grid-12-12"> <!--"Comentario adicional"-->
            <textarea class="textarea_comentario_expicito" id="comentario_bloque10" name="comentario_bloque10" title="Comentario"><?php echo $comentariobloque10;?></textarea>
          </div>
        </div>
        <div class="clear"></div>
        <!-- Fin Bloque Pregunta -->
    </div>


  </div>
</div>


 
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
<div class="grid-4-12">
  <a class="form-button-off form-left" style="display: block;" href="<?php echo url_for('principal/dashboard?idEncuestado='.$idEncuestado);?>" onclick="return confirm('Al salir del formulario perderás la información que hayas respondido en la pantalla actual. ¿Estas seguro que deseas salir del formulario actual?');"><- Volver al menú</a>
</div>
<div class="grid-4-12">
  <button class="form-button" type="submit" name="Guardar"><span class="ui-icon ui-icon-disk" style="float:left;"></span>Guardar</button>
</div>
<div class="grid-4-12">
  <?php if($porcCompletado>=100):?><!-- Solo si el procentaje de avance es 100%muestro el botón para finalizar el formulario -->
  <button class="form-button-off" type="button" name="Finalizar" onclick = "finalizarIRNC();"><span class="ui-icon ui-icon-circle-check" style="float:left;"></span>Finalizar Formulario</button>
<input type="text" name="esCerrarForm" id="esCerrarForm" style="display: none" value="NOCERRAR"/>
  <?php endif; ?>
</div><div class="clear"></div>

<?php else: ?>
<div class="grid-4-12"></div>
<div class="grid-4-12">
  <a class="form-button form-right" href="<?php echo url_for('principal/dashboard?idEncuestado='.$idEncuestado);?>"><- Volver al menú</a>
</div>
<div class="grid-4-12"></div><div class="clear"></div>
<?php endif; ?>
<!-- Fin Botón envio de formulario, en caso de ser último bloque advierte que se cerrará el formulario si se continua -->
    <input type="text" id="tstart" name="tstart" style="display:none" value="<?php echo $tstart; ?>"></input>
</form>
<br>

<div id="dialog-envio-finalizarIRNC" title="Confirmar">
	<p><span class="ui-icon ui-icon-info" style="float:left; margin:0 7px 20px 0;"></span><strong>¿Estas seguro que deseas finalizar el instrumento?.</strong> Una vez que finalices este instrumento ya no podrás modificadar ni agregar información en el.</p>
</div>




<!-- Codigo JS del dialogo de instrucciones: Se ha declarado acá dado que el
autodespliegue en la primera oportunidad es dinámico con respecto a un parámetro
pasado por php.

Si es la primera vez que se llama a la web se muestra el diálogo de
instrucciones, en caso contrario el diálogo permanece oculto y se muestra al
presionar el botón señalado con ícono (i).
-->
<script type="text/javascript">
   $().ready(function() {
                     $("form").loadJSON(<?php echo $sf_data->getRaw('respuestasGuardadas');?>);
                    <?php //if($consenso==1): ?>
                      /* $("form").loadAndBlockJSON(<?php //echo $sf_data->getRaw('coincidencias');?>); */
                    <?php //endif; ?>
                     $("#msgzone").hide();
                     $("#contenido").show();
                });
                
    ("#formulario_IRNC").hide();

  //alert(is_show_instruccions);
    
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
        $("#formulario_IRNC").show();
      }
		});
                
             
                
                
</script>
<!-- Fin código diálogo de instrucciones -->



