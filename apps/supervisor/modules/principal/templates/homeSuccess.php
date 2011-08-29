<?php slot('title') ?>
  <?php  echo sprintf('Menú Principal') ?>
<?php end_slot(); ?>


<script type="text/javascript" >
    function toogleListaEncuestas(){
      $("#listaEncuestas").toggle();
      if($("#botonadministrarEncuestas").val()=="Administrar Mis Cuestionarios +"){
        $("#botonadministrarEncuestas").val("Administrar Mis Cuestionarios -");
      }else{
        $("#botonadministrarEncuestas").val("Administrar Mis Cuestionarios +");
      }
      if($('#homeAlertMensaje').is(':visible') && $('#homeAlertMensaje').parents (':hidden').length == 0){ /*escondemos el alert si es que estaba por ahi*/
        $("#homeAlertMensaje").hide();
      }
    }

</script>

<div class="clear"></div><br>


<?php

    /*si me dice que liste las encuestas disponibles entonces escuendo el mensaje de alerta por defecto*/
    $styleAlert="";
    if($showtable == "yes"){
     $styleAlert="display: none;";
    }

?>

<div style="<?php echo $styleAlert?>">
  <div class="ui-widget" id="homeAlertMensaje">
          <div style="padding: 0pt 0.7em;" class="ui-state-error ui-corner-all">
            <p><span style="float: left; margin-right: 0.3em;" class="ui-icon ui-icon-alert"></span>
            <strong>Alerta:</strong> Recuerde que tiene encuestas sin completar totalmente.Asegurese de completar la información que falta.</p>
          </div>
  </div>
</div>

<br>

<div class="prefix_3 grid_9">
     <div class="botonerainferior" style="padding: 0.3em 0.4em !important;">
      <input type="submit" value="Agregar nuevo encuestado" title="agregar encuestado " onclick = "location.href = '<?php echo url_for('principal/index') ?>'" class="form-button-off" style="display: block;width:100%;height: 40px;">
     </div>
</div>
<div class="clear"></div>


<div class="prefix_3 grid_9">
     <div class="botonerainferior" style="padding: 0.3em 0.4em !important;">
<?php if($showtable == "yes"): ?>
       <input type="submit" id="botonadministrarEncuestas" onclick = "toogleListaEncuestas();" value="Administrar Mis Cuestionarios -" title="administrar cuestionarios" class="form-button admin-encuestas-btn" style="display: block;width:100%;height: 40px;">
<?php else: ?>
       <input type="submit" id="botonadministrarEncuestas" onclick = "toogleListaEncuestas();" value="Administrar Mis Cuestionarios +" title="administrar cuestionarios" class="form-button admin-encuestas-btn" style="display: block;width:100%;height: 40px;">       
<?php endif; ?>
     </div>
</div>
<div class="clear"></div><br>




<?php

    /*si me dice que liste las encuestas disponibles lo hago (osea si me pasa una variable)*/
    $style="display: none;";
    if($showtable == "yes"){
     $style="";
    }

?>
<div id="listaEncuestas" style="<?php echo $style?>">

<table cellspacing="1" cellpadding="0" border="0" class="tablesorter" id="tablesorter-listaEncuestados">
		<thead>
			<tr>
				<th class="header">RUN</th>
				<th class="header headerSortDown">Nombres</th>
				<th class="header">Apellidos</th>
				<th class="header">Primera modificación</th>
				<th class="header">Última modificación</th>
        <th class="header2">Operaciones</th>
			</tr>
		</thead>
		<tbody>
    <?php
      $i=1;
      while($encuestado=mysql_fetch_array($encuestados)){
      if($i%2){echo "<tr class='even'>";}else{echo "<tr class='odd'>";}
      	echo "<td>{$encuestado['input_run_nconverificador']}</td>";
				echo "<td>{$encuestado['input_primer_nombre']} {$encuestado['input_otros_nombres']}</td>";
				echo "<td>{$encuestado['input_primer_apellido']} {$encuestado['input_segundo_apellido']}</td>";
				echo "<td>{$encuestado['created_at']}</td>";
				echo "<td>{$encuestado['updated_at']}</td>";
        $url="principal/dashboard?idEncuestado={$encuestado['id_encuestado']}&idEncuestador={$idEncuestador}";
        echo "<td class='operaciones'><a href='"; echo url_for($url); echo "'>REVISAR ESTADOS</a></td>";
			echo "</tr>";
      $i++;
      }
    ?>



    </tbody>
	</table>
    
    
    
    
    <table cellspacing="1" cellpadding="0" border="0" class="tablesorter" id="tablesorter-listaEncuestados">
		<thead>
			<tr>
				<th class="header">RUN</th>
				<th class="header headerSortDown">Nombres</th>
				<th class="header">Apellidos</th>
				<th class="header">Primera modificación</th>
				<th class="header">Última modificación</th>
        <th class="header2">Operaciones</th>
			</tr>
		</thead>
		<tbody>
    <?php
      $i=1;
      while($coevaluado=mysql_fetch_array($coevaluados)){
      if($i%2){echo "<tr class='even'>";}else{echo "<tr class='odd'>";}
      	echo "<td>{$coevaluado['input_run_nconverificador']}</td>";
				echo "<td>{$coevaluado['input_primer_nombre']} {$coevaluado['input_otros_nombres']}</td>";
				echo "<td>{$coevaluado['input_primer_apellido']} {$coevaluado['input_segundo_apellido']}</td>";
				echo "<td>{$coevaluado['created_at']}</td>";
				echo "<td>{$coevaluado['updated_at']}</td>";
        $url="principal/dashboard?idEncuestado={$coevaluado['id_encuestado']}&idEncuestador={$idEncuestador}";
        echo "<td class='operaciones'><a href='"; echo url_for($url); echo "'>REVISAR ESTADOS</a></td>";
			echo "</tr>";
      $i++;
      }
    ?>



    </tbody>
	</table>
</div>
