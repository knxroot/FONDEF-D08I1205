  <div class="grid-12-12 ui-widget-header ui-corner-all" style="position: relative;">Formulario FERR; ?>
  </div>

<div class="grid-12-12">
  <span class="form-msg-error"><strong>ERROR:</strong> El instrumento NO se guardó correctamente.</span>
</div>

<br>
<div class="prefix_4 grid_11">


<a class="form-button-off form-left" style="display: block;" href="<?php echo url_for('principal/dashboard?idEncuestado='.$idEncuestado);?>"><span class="ui-icon ui-icon-circle-arrow-w" style="float:left;"></span>Volver al menú</a>
<a class="form-button form-left" style="display: block;" href="<?php echo url_for('FERR/index?idEncuestado='.$idEncuestado);?>"><span class="ui-icon ui-icon-pencil" style="float:left;"></span>Continuar editando instrumento FERR</a>
</div>
