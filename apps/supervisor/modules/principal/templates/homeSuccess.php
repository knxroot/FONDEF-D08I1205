<?php slot('title') ?>
  <?php  echo sprintf('Menú Principal') ?>
<?php end_slot(); ?>


<div class="clear"></div><br>

<div id="listaEncuestas">

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
