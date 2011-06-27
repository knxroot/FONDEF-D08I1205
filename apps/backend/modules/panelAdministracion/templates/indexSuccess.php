<?php slot('title') ?>
  <?php  echo sprintf('Dash Board') ?>
<?php end_slot(); ?>


<link href='http://fonts.googleapis.com/css?family=Philosopher&subset=latin' rel='stylesheet' type='text/css'>
<!-- trabaja con un container grid 16  de 960grid system-->

<div class="clear"></div><br>
<div class="grid_3">&nbsp;
</div>
<div class="grid_3 icopanel ui-corner-all" onclick="alert('No habilitado');">
<?php echo image_tag('administrar_usuarios.png', 'class=icopanelOpcion') ?>
</div>

<div class="grid_3 icopanel ui-corner-all" onclick="alert('No habilitado');">
<?php echo image_tag('editar_datos.png', 'class=icopanelOpcion') ?>
</div>

<div class="grid_3 icopanel ui-corner-all" onclick="alert('No habilitado');">
<?php echo image_tag('exportar_datos.png', 'class=icopanelOpcion') ?>
</div>
<div class="grid_3">&nbsp;
</div>
<div class="clear"></div><br>

<div class="clear"></div>
<div class="grid_3">&nbsp;
</div>
<div class="grid_3 icopanelDescripcion">
Admin. Usuarios
</div>

<div class="grid_3 icopanelDescripcion">&nbsp;
Editar Datos
</div>

<div class="grid_3 icopanelDescripcion">&nbsp;&nbsp;
Exportar Datos
</div>
<div class="grid_3">&nbsp;
</div>
<div class="clear"></div><br>

