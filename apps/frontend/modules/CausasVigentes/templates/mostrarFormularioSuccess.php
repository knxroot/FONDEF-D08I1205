<?php slot('title') ?>
  <?php  echo "[{$porcCompletado} % completado] (CausasVigentes) Ficha Criminométrica"; ?>
<?php end_slot(); ?>

<?php $url_save_post=url_for('CausasVigentes/GuardarInstrumento?idEncuestado='.$idEncuestado);?>

  <?php if(!($es_ultimo_bloque)): ?>
  


<div id="contenido" style="display:display">
 <form id="formulario_CausasVigentes" name="formulario_CausasVigentes" class="form" method="post" action="<?php echo $url_save_post; ?>">


     
     
     
            <div id="bloque-sanciones">
	<div class="ui-widget-header ui-corner-all">
			Causas Vigentes
		</div>
        
    <?php for($i = 1; $i <= 10; $i++): ?>
        
        <div class="form2-par" id="sancion-fieldset_svigente<?php echo $i;?>" <?php if($i>1){echo "style='display:none'";};?>>
            <div class="grid-3-12">
                <label class="form-lbl">Sistema de Atención <em class="form-req">*</em></label>
                <select name="select_sistema_atencion_svigente<?php echo $i;?>" id="select_sistema_atencion_svigente<?php echo $i;?>">
                    <option value="MCA" selected="">MCA</option>
                    <option value="PSA">PSA</option>
                    <option value="SBC">SBC</option>
                    <option value="PLA">PLA</option>
                    <option value="PLAE">PLAE</option>
                    <option value="CSC">CSC</option>
                    <option value="CIP">CIP</option>
                    <option value="CDP">CDP</option>
                    <option value="CRC">CRC</option>
                    <option value="CCP">CCP</option>
                </select>
            </div>

            <div class="grid-9-12">
                <label class="form-lbl">Nombre del Programa<em class="form-req">*</em></label>
                <input type="text" class="form-txt required error" name="input_nombre_programa_svigente<?php echo $i;?>" id="input_nombre_programa_svigente<?php echo $i;?>" value="Escriba el nombre del programa"/>
            </div>

            <div class="grid-4-12">
                <label class="form-lbl">Ciudad del Programa <em class="form-req">*</em></label>
                <select name="select_ciudad_programa_svigente<?php echo $i;?>" id="select_ciudad_programa_svigente<?php echo $i;?>">
                    <option value="Chillán" selected="">Chillán</option>
                    <option value="Concepción">Concepción</option>
                    <option value="Coronel">Coronel</option>
                    <option value="Angol">Angol</option>
                    <option value="Temuco">Temuco</option>
                    <option value="Chol Chol">Chol Chol</option>
                    <option value="Valdivia">Valdivia</option>
                    <option value="La Unión">La Unión</option>
                    <option value="Osorno">Osorno</option>
                    <option value="Puerto Montt">Puerto Montt</option>
                </select>
            </div>

            <div class="grid-4-12">
                <label class="form-lbl">T. Total de Condena <em class="form-req">*</em></label>
                <input type="text" class="form-txt form-date-year" style="float:left;" name="input_tiempo_total_condena_svigente<?php echo $i;?>" id="input_tiempo_total_condena_svigente<?php echo $i;?>"  value=""/>
                <select name="select_tipo_tiempo_total_condena_svigente<?php echo $i;?>" id="select_tipo_tiempo_total_condena_svigente<?php echo $i;?>" style="width:70px;">
                    <option value="D" selected="">Dias</option>
                    <option value="A">Años</option>
                    <option value="H">Horas</option>
                </select>
                <?php echo image_tag('clock.png', 'alt=Tiempo style=margin: 4px 0pt 0pt 6px;') ?>
            </div>

            <div class="grid-4-12">
                <label class="form-lbl">F. inicio Condena  aaaa/mm/dd <em class="form-req">*</em></label>
                <input type="text" class="form-txt" name="input_fecha_inicio_condena_svigente<?php echo $i;?>" id="input_fecha_inicio_condena_svigente<?php echo $i;?>"/>
            </div>

            <div class="grid-4-12">
                <label class="form-lbl">RUC <em class="form-req">*</em></label>
                <input type="text" class="form-txt" name="input_ruk_svigente<?php echo $i;?>" id="input_ruk_svigente<?php echo $i;?>"/>
            </div>

            <div class="grid-4-12">
                <label class="form-lbl">Fecha de comisión del delito  aaaa/mm/dd <em class="form-req">*</em></label>
                <input type="text" class="form-txt" name="input_fecha_detencion_svigente<?php echo $i;?>" id="input_detencion_svigente<?php echo $i;?>"/>
            </div>

            <div class="grid-4-12">
                <label class="form-lbl">Fecha control de detención aaaa/mm/dd <em class="form-req">*</em></label>
                <input type="text" class="form-txt" name="input_fecha_control_detencion_svigente<?php echo $i;?>" id="input_fecha_control_detencion_svigente<?php echo $i;?>"/>
            </div>	
	
            <div class="grid-12-12">
                <label class="form-lbl">Causal de ingreso <em class="form-req">*</em></label>
                <select name="select_tipo_materia_svigente<?php echo $i;?>" id="select_tipo_materia_svigente<?php echo $i;?>"  style="width: 500px;float:left;">
                    <option value="none" selected="">Seleccione Tipo de materia</option>
                </select>
                <select name="select_causa_delito_svigente<?php echo $i;?>" id="select_causa_delito_svigente<?php echo $i;?>" disabled="disabled" style="width: 400px;margin-left: 5px;">
                    <option value="none" selected="">Seleccione Causa Delito</option>
                </select>
            </div>

        </div>
        
          <?php  endfor; ?> 
        
    </div>
   	<div id="bloque-boton-agregar-sancion">
      <div class="grid-4-12"></div>
      <div class="grid-4-12">
      <div class="medium blue awesome" onClick="agregarBloqueSVIGENTE()">
        <div class="form-button-add"></div>&nbsp;Agregar sanción vigente</div>
        <input type="text" id="CANT_CAUSASVIGENTES" name="CANT_CAUSASVIGENTES" style="display:none" value="1"></input>
      </div>
      <div class="grid-3-12">
        <div class="bloque-sancion-borrar" onClick="eliminarBloqueSVIGENTE()">Eliminar último bloque</div>
      </div><div class="grid-1-12"></div>
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



    <input type="text" id="CLOSE_FLAG" name="CLOSE_FLAG" style="display:none" value="NOCERRADO"></input>
    <div class="grid-4-12">
    <a class="form-button-off form-left" style="display: block;"
      onclick="
              if(confirm('OJO. Al cerrar el formulario ya no podrás volver a modificarlo.')){
                  $('#CLOSE_FLAG').val('CERRADO');
                   document.formulario_CausasVigentes.submit();
              }">Cerrar</a>
    </div>
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
 

<!-- inicio tooltips 1.1a -->
<div class="jqmWindow" id="ritmo">
<img src="/images/loading-image.gif" />
</div>
 <div class="jqmWindow" id="gravedad">
<img src="/images/loading-image.gif" />
</div>
  <div class="jqmWindow" id="variedad">
<img src="/images/loading-image.gif" />
</div>
  <div class="jqmWindow" id="evolucion">
<img src="/images/loading-image.gif" />
</div>
  <div class="jqmWindow" id="precocidad">
<img src="/images/loading-image.gif" />
</div>
  <div class="jqmWindow" id="frecuencia">
<img src="/images/loading-image.gif" />
</div>
  <div class="jqmWindow" id="experticia">
<img src="/images/loading-image.gif" />
</div>
 <!-- inicio tooltips 1.1b -->
  <div class="jqmWindow" id="fugas">
<img src="/images/loading-image.gif" />
</div>
  <div class="jqmWindow" id="vandalismo">
<img src="/images/loading-image.gif" />
</div>
  <div class="jqmWindow" id="rinas">
<img src="/images/loading-image.gif" />
</div>
  <div class="jqmWindow" id="consumo">
<img src="/images/loading-image.gif" />
</div>
   <div class="jqmWindow" id="indisiplina">
<img src="/images/loading-image.gif" />
</div>
  <div class="jqmWindow" id="ociosidad">
<img src="/images/loading-image.gif" />
</div>
  <div class="jqmWindow" id="negativo">
<img src="/images/loading-image.gif" />
</div>
  <div class="jqmWindow" id="sanciones">
<img src="/images/loading-image.gif" />
</div>  <div class="jqmWindow" id="proteccion">
<img src="/images/loading-image.gif" />
</div>
  <div class="jqmWindow" id="escolares">
<img src="/images/loading-image.gif" />
</div>

  <div class="jqmWindow" id="detenciones">
<img src="/images/loading-image.gif" />
</div>
  <div class="jqmWindow" id="severa">
<img src="/images/loading-image.gif" />
</div>
 <div class="jqmWindow" id="enculturacion">
<img src="/images/loading-image.gif" />
</div>
<!-- 1.2 -->
 <div class="jqmWindow" id="repetitivo">
<img src="/images/loading-image.gif" />
</div>
 <div class="jqmWindow" id="resignacion">
<img src="/images/loading-image.gif" />
</div>
 
  <div class="jqmWindow" id="experiencia">
<img src="/images/loading-image.gif" />
</div>
 
  <div class="jqmWindow" id="rechazo">
<img src="/images/loading-image.gif" />
</div>
  <div class="jqmWindow" id="impunidad">
<img src="/images/loading-image.gif" />
</div>  <div class="jqmWindow" id="inestabilidad">
<img src="/images/loading-image.gif" />
</div>
 
 
</div><!-- Fin contenido -->





<script type="text/javascript">
                $().ready(function() {
                     $("form").loadJSON(<?php echo $sf_data->getRaw('respuestasGuardadas');?>);
                     $("#msgzone").hide();
                     $("#contenido").show();
                });
</script>