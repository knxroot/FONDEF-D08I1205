<span class="form-msg-success"><strong>OK:</strong> La insercción en la base de datos fue realizada correctamente.</span>

<h5><strong>Enhorabuena <?php echo $username; ?></strong></h5>
Los datos de <strong><?php echo "{$input_primer_nombre} {$input_primer_apellido}"; ?></strong> 
fueron registrados exitosamente. Para comenzar a llenar los instrumentos asociados
a este nuevo encuestado debes continuar e ir a la opción <strong>"Administrar Encuestas"</strong>.

<br>
<div class="prefix_4 grid_11">
     <div class="botonerainferior" style="padding: 0.3em 0.4em !important;">
      <input type="submit" onClick="location.href = '<?php echo url_for('principal/home') ?>'" value="Continuar" title="ir a home" class="form-button form-left" style="display: block;">
    </div>
</div>