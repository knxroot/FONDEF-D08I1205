<?php slot('title') ?>
  <?php  echo sprintf('Menú Principal') ?>
<?php end_slot(); ?>


<div id="listaEncuestas" style="<?php echo $style?>">

<table cellspacing="1" cellpadding="0" border="0" class="tablesorter" id="tablesorter-listaEncuestados">
		<thead>
			<tr>
				<th class="header">Primer Nombre</th>
				<th class="header headerSortDown">Apellidos</th>
				<th class="header">Nombre de usuario</th>
				<th class="header">Último login</th>
				<th class="header">Acción</th>
			</tr>
		</thead>
		<tbody>
    <?php
      $i=1;
      while($encuestador=mysql_fetch_array($encuestadores)){
      if($i%2){echo "<tr class='even'>";}else{echo "<tr class='odd'>";}
      	echo "<td>{$encuestador['first_name']} </td>";
				echo "<td>{$encuestador['last_name']} </td>";
				echo "<td>{$encuestador['username']} </td>";
				echo "<td>{$encuestador['last_login']}</td>";
        $url="principal/home?idEncuestador={$encuestador['id']}";
        echo "<td class='operaciones'><a href='"; echo url_for($url); echo "'>OBSERVAR</a></td>";
			echo "</tr>";
      $i++;
      }
    ?>



    </tbody>
	</table>
    
</div>
