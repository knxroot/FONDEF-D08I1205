<?php
function findRespCom($array,$campo,$key){
  foreach ($array as $r){
   
    if($r["id_pregunta_IRNC"]==trim($key)){
      echo $r[$campo];
    }else{echo '';}
  }
}
function findRespRespSI($array,$campo,$key){
  foreach ($array as $r){

    if($r["id_pregunta_IRNC"]==trim($key)){
      if($r[$campo]=="SI"){echo "CHECKED";}
    }else{echo '';}
  }
}
function findRespRespNO($array,$campo,$key){
  foreach ($array as $r){

    if($r["id_pregunta_IRNC"]==trim($key)){
      if($r[$campo]=="NO"){echo "CHECKED";}
    }else{echo '';}
  }
}

function findEsRespCom($array,$campo,$key){
  $varnoesta=true;
  foreach ($array as $r){
    if($r["id_pregunta_IRNC"]==trim($key)){
      $varnoesta=false;
      if(trim($r[$campo])=="SI"){echo '';}else{echo 'display: none;';}
    }else{echo '';}
  }
  if($varnoesta){echo 'display: none;';}
}
?>



<?php slot('title') ?>
  <?php  echo "Formulario a IRNC ({$porcCompletado} % completado)";?>
<?php end_slot(); ?>

<?php $url_save_post=url_for('IRNC/GuardarInstrumento?idEncuestado='.$idEncuestado);?>

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
              <li><input class="botonradio" name="radio_VorF_IRNC_<?php echo $pregunta["id_pregunta"];?>" type="radio" value="SI" <?php findRespRespSI($respuestas,'respuesta',$pregunta['id_pregunta']);?> /><label class="form-lbl">SI</label></li>
              <li><input class="botonradio" name="radio_VorF_IRNC_<?php echo $pregunta["id_pregunta"];?>" type="radio" value="NO" <?php findRespRespNO($respuestas,'respuesta',$pregunta['id_pregunta']);?>/><label class="form-lbl">NO</label></li>
            </ul>
          </div>
          <div class="grid-5-12"> <!--"Comentario adicional style="display: none;"-->
            <textarea class="textarea_comentario_expicito" id="comentario_<?php echo $pregunta["id_pregunta"];?>" name="comentario_<?php echo $pregunta["id_pregunta"];?>" title="Comentario"><?php findRespCom($respuestas,'comentario',$pregunta['id_pregunta']);?></textarea>
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
              <li><input type="checkbox" value="SI" name="check_VorF_IRNC_43" id="check_VorF_IRNC_43" <?php findRespRespSI($respuestas,'respuesta','43');?>><label for="check_VorF_IRNC_43">Infraciones anteriores</label></li>
              <li><input type="checkbox" value="SI" name="check_VorF_IRNC_44" id="check_VorF_IRNC_44" <?php findRespRespSI($respuestas,'respuesta','44');?>><label for="check_VorF_IRNC_44">Desamparo afect / psiquiátrico</label></li>
              <li><input type="checkbox" value="SI" name="check_VorF_IRNC_45" id="check_VorF_IRNC_45" <?php findRespRespSI($respuestas,'respuesta','45');?>><label for="check_VorF_IRNC_45">Drogadicción</label></li>
              <li><input type="checkbox" value="SI" name="check_VorF_IRNC_46" id="check_VorF_IRNC_46" <?php findRespRespSI($respuestas,'respuesta','46');?>><label for="check_VorF_IRNC_46">Desacuerdos conyugales</label></li>
            </ul>
          </div>
          <div class="grid-3-12">
            <ul>
              <li><input type="checkbox" value="SI" name="check_VorF_IRNC_47" id="check_VorF_IRNC_47" <?php findRespRespSI($respuestas,'respuesta','47');?>><label for="check_VorF_IRNC_47">Probl. Económ. / alojamiento</label></li>
              <li><input type="checkbox" value="SI" name="check_VorF_IRNC_48" id="check_VorF_IRNC_48" <?php findRespRespSI($respuestas,'respuesta','48');?>><label for="check_VorF_IRNC_48">Desinterés vs problemas</label></li>
              <li><input type="checkbox" value="SI" name="check_VorF_IRNC_49" id="check_VorF_IRNC_49" <?php findRespRespSI($respuestas,'respuesta','49');?>><label for="check_VorF_IRNC_49">Probl. de orden cultural (étnico)</label></li>
              <li><input type="checkbox" value="SI" name="check_VorF_IRNC_50" id="check_VorF_IRNC_50" <?php findRespRespSI($respuestas,'respuesta','50');?>><label for="check_VorF_IRNC_50">Maltrato de parte del padre</label></li>
            </ul>
          </div>
          <div class="grid-6-12">
            <ul>
              <li><input type="checkbox" value="SI" name="check_VorF_IRNC_51" id="check_VorF_IRNC_51" <?php findRespRespSI($respuestas,'respuesta','51');?>><label for="check_VorF_IRNC_51">Maltrato de parte de la madre</label></li>
              <li><input type="checkbox" value="SI" name="check_VorF_IRNC_52" id="check_VorF_IRNC_52" <?php findRespRespSI($respuestas,'respuesta','52');?>><label for="check_VorF_IRNC_52">Trauma familiar grave:</label><input type="text" class="form-txt" style="width:100px;<?php findEsRespCom($respuestas,'respuesta','52');?>" value="<?php findRespCom($respuestas,'comentario','52');?>" name="check_VorF_IRNComfix_52" id="check_VorF_IRNComfix_input" /></li>              
              <li><input type="checkbox" value="SI" name="check_VorF_IRNC_53" id="check_VorF_IRNC_53" <?php findRespRespSI($respuestas,'respuesta','53');?>><label for="check_VorF_IRNC_53">Otro:</label><input type="text" class="form-txt" style="width:100px;<?php findEsRespCom($respuestas,'respuesta','53');?>" value="<?php findRespCom($respuestas,'comentario','53');?>" name="check_VorF_IRNComfix_53" id="check_VorF_IRNComfix_input_otro" /></li>   
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
              <li><input type="checkbox" value="SI" name="check_VorF_IRNC_54" id="check_VorF_IRNC_54" <?php findRespRespSI($respuestas,'respuesta','54');?>><label for="check_VorF_IRNC_54">Problemas de salud</label></li>
              <li><input type="checkbox" value="SI" name="check_VorF_IRNC_55" id="check_VorF_IRNC_55" <?php findRespRespSI($respuestas,'respuesta','55');?>><label for="check_VorF_IRNC_55">Discapacidad física</label></li>
              <li><input type="checkbox" value="SI" name="check_VorF_IRNC_56" id="check_VorF_IRNC_56" <?php findRespRespSI($respuestas,'respuesta','56');?>><label for="check_VorF_IRNC_56">CI bajo / retraso del desarrollo</label></li>
              <li><input type="checkbox" value="SI" name="check_VorF_IRNC_57" id="check_VorF_IRNC_57" <?php findRespRespSI($respuestas,'respuesta','57');?>><label for="check_VorF_IRNC_57">Dificultades de aprendizaje</label></li>
              <li><input type="checkbox" value="SI" name="check_VorF_IRNC_58" id="check_VorF_IRNC_58" <?php findRespRespSI($respuestas,'respuesta','58');?>><label for="check_VorF_IRNC_58">Rendim. inferior a las expect.</label></li>
              <li><input type="checkbox" value="SI" name="check_VorF_IRNC_59" id="check_VorF_IRNC_59" <?php findRespRespSI($respuestas,'respuesta','59');?>><label for="check_VorF_IRNC_59">Baja capac. resoluc. conflictos</label></li>
              <li><input type="checkbox" value="SI" name="check_VorF_IRNC_60" id="check_VorF_IRNC_60" <?php findRespRespSI($respuestas,'respuesta','60');?>><label for="check_VorF_IRNC_60">Víct.de agresión física / sex.</label></li>
              <li><input type="checkbox" value="SI" name="check_VorF_IRNC_61" id="check_VorF_IRNC_61" <?php findRespRespSI($respuestas,'respuesta','61');?>><label for="check_VorF_IRNC_61">Víctima de negligencia parent.</label></li>
              <li><input type="checkbox" value="SI" name="check_VorF_IRNC_62" id="check_VorF_IRNC_62" <?php findRespRespSI($respuestas,'respuesta','62');?>><label for="check_VorF_IRNC_62">Tímido/a / cerrado/a</label></li>
            </ul>
          </div>
          <div class="grid-3-12">
            <ul>
              <li><input type="checkbox" value="SI" name="check_VorF_IRNC_63" id="check_VorF_IRNC_63" <?php findRespRespSI($respuestas,'respuesta','63');?>><label for="check_VorF_IRNC_63">Compañero-as de otra edad</label></li>
              <li><input type="checkbox" value="SI" name="check_VorF_IRNC_64" id="check_VorF_IRNC_64" <?php findRespRespSI($respuestas,'respuesta','64');?>><label for="check_VorF_IRNC_64">Estado depresivo</label></li>
              <li><input type="checkbox" value="SI" name="check_VorF_IRNC_65" id="check_VorF_IRNC_65" <?php findRespRespSI($respuestas,'respuesta','65');?>><label for="check_VorF_IRNC_65">Baja auto estima</label></li>
              <li><input type="checkbox" value="SI" name="check_VorF_IRNC_66" id="check_VorF_IRNC_66" <?php findRespRespSI($respuestas,'respuesta','66');?>><label for="check_VorF_IRNC_66">Actividad sexual inapropiada</label></li>
              <li><input type="checkbox" value="SI" name="check_VorF_IRNC_67" id="check_VorF_IRNC_67" <?php findRespRespSI($respuestas,'respuesta','67');?>><label for="check_VorF_IRNC_67">Actitud racista / sexista</label></li>
              <li><input type="checkbox" value="SI" name="check_VorF_IRNC_68" id="check_VorF_IRNC_68" <?php findRespRespSI($respuestas,'respuesta','68');?>><label for="check_VorF_IRNC_68">Bajas aptitudes sociales</label></li>
              <li><input type="checkbox" value="SI" name="check_VorF_IRNC_69" id="check_VorF_IRNC_69" <?php findRespRespSI($respuestas,'respuesta','69');?>><label for="check_VorF_IRNC_69">Se niega a ver la realidad</label></li>
              <li><input type="checkbox" value="SI" name="check_VorF_IRNC_70" id="check_VorF_IRNC_70" <?php findRespRespSI($respuestas,'respuesta','70');?>><label for="check_VorF_IRNC_70">Intento de suicidio</label></li>
              <li><input type="checkbox" value="SI" name="check_VorF_IRNC_71" id="check_VorF_IRNC_71" <?php findRespRespSI($respuestas,'respuesta','71');?>><label for="check_VorF_IRNC_71">Diagnóstico de psicosis</label></li>
            </ul>
          </div>
          <div class="grid-6-12">
            <ul>
              <li><input type="checkbox" value="SI" name="check_VorF_IRNC_72" id="check_VorF_IRNC_72" <?php findRespRespSI($respuestas,'respuesta','72');?>><label for="check_VorF_IRNC_72">Amenazas de un tercero</label></li>
              <li><input type="checkbox" value="SI" name="check_VorF_IRNC_73" id="check_VorF_IRNC_73" <?php findRespRespSI($respuestas,'respuesta','73');?>><label for="check_VorF_IRNC_73">Agresiones sexuales / físicas</label></li>
              <li><input type="checkbox" value="SI" name="check_VorF_IRNC_74" id="check_VorF_IRNC_74" <?php findRespRespSI($respuestas,'respuesta','74');?>><label for="check_VorF_IRNC_74">Agresión vs pers. en autoridad</label></li>
              <li><input type="checkbox" value="SI" name="check_VorF_IRNC_75" id="check_VorF_IRNC_75" <?php findRespRespSI($respuestas,'respuesta','75');?>><label for="check_VorF_IRNC_75">Uso de armas</label></li>
              <li><input type="checkbox" value="SI" name="check_VorF_IRNC_76" id="check_VorF_IRNC_76" <?php findRespRespSI($respuestas,'respuesta','76');?>><label for="check_VorF_IRNC_76">Piromanía</label></li>
              <li><input type="checkbox" value="SI" name="check_VorF_IRNC_77" id="check_VorF_IRNC_77" <?php findRespRespSI($respuestas,'respuesta','77');?>><label for="check_VorF_IRNC_77">Evasión</label></li>
              <li><input type="checkbox" value="SI" name="check_VorF_IRNC_78" id="check_VorF_IRNC_78" <?php findRespRespSI($respuestas,'respuesta','78');?>><label for="check_VorF_IRNC_78">Protección</label></li>
              <li><input type="checkbox" value="SI" name="check_VorF_IRNC_79" id="check_VorF_IRNC_79" <?php findRespRespSI($respuestas,'respuesta','79');?>><label for="check_VorF_IRNC_79">Condiciones de vida difíciles</label></li>
              <li><input type="checkbox" value="SI" name="check_VorF_IRNC_80" id="check_VorF_IRNC_80" <?php findRespRespSI($respuestas,'respuesta','80');?>><label for="check_VorF_IRNC_80">Otro</label><input type="text" class="form-txt" style="width:100px;<?php findEsRespCom($respuestas,'respuesta','80');?>" value="<?php findRespCom($respuestas,'comentario','80');?>" name="check_VorF_IRNComfix_80" id="check_VorF_IRNComfix_input_otro2" /></li>
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
  var is_show_instruccions=eval("<?php echo $is_show_instruccions;?>"); // pasa el string a bool en js
  if(is_show_instruccions==null){ var is_show_instruccions=false;$("#formulario_IRNC").hide();alert("Al parecer ha habido un problema de connección, es recomendable que recarge la página");}

 if(is_show_instruccions){
    $("#formulario_IRNC").hide();
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
        $("#formulario_IRNC").show();
      }
		});
</script>
<!-- Fin código diálogo de instrucciones -->



