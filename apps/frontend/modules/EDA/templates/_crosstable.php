<table class="<?php echo $tableclass ?> eda-table">
    <?php if(isset($descripcion)): ?>
    <tr>
        <td colspan="<?php echo count($intervalos) + 3 ?>" class="eda-table-desripcion">
            <?php echo $descripcion ?>
        </td>
    </tr>
    <?php endif ?>
    <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td colspan="<?php echo count($intervalos) ?>">
            <span class="eda-table-descripcion-intervalos">
                Cantidad de veces por edades en años
            </span>
        </td>
        <td>&nbsp;</td> 
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <?php foreach($intervalos as $intervalo => $nombre): ?>
            <td>
                <span class="eda-table-intervalo">
                    <?php echo $nombre ?>
                </span>
                <a href="#" class="x-ayuda-contextual"></a>
            </td>
        <?php endforeach ?>
        <td>&nbsp;</td> 
    </tr>
    <?php foreach($preguntas as $indice => $pregunta): ?>
    <tr>
        <td class="eda-table-indice-td">
            <span class="eda-table-indice"><?php echo $indice + 1 ?></span>
        </td>
        <td><span class="eda-table-pregunta app-context-help"><?php echo $pregunta ?></span></td>
        <?php for($i = 0; $i < count($intervalos); $i++) :?>
            <td>
                <input type="text" maxlength="2" size="20" 
                    name="<?php echo $inputprefix ?>pos-<?php echo $indice + 1 ?>[]" 
                    class="preg-val <?php echo $indice + 1?>-<?php echo $i ?>" />
            </td>
        <?php endfor ?>
        <td><input type="text" value="0" class="resultado-fila fila-<?php echo $i ?>" readonly /></td>
    </tr>
    <?php endforeach ?>
    <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <?php for($i = 0; $i < count($intervalos); $i++) :?>
            <td><input type="text" size="20" class="resultado-col col-<?php echo $i ?>" readonly /></td>
        <?php endfor ?>
        <td><input type="text" value="0" size="20" class="resultado-fila resultado-diag" readonly /></td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td colspan="<?php echo count($intervalos) + 2 ?>">Comentarios:</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td colspan="<?php echo count($intervalos) + 2 ?>">
            <textarea class="eda-table-comentarios" 
                name="<?php echo $inputprefix ?>comentarios"></textarea>
        </td>
    </tr>
</table>
