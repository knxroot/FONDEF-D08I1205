<table class="<?php echo $tableclass ?> eda-table">
    <tr>
        <td colspan="<?php echo count($opciones) + 2?>" class="eda-3-descripcion">
            <p>Si tuvieses que definirte</p>			
            <p>¿Con cúal o cuales de los siguientes tipos te identificas?</p>		
            <p>¿Con cuál o cuales de ellos eres reconocido en tu grupo?</p>			
        </td>
    </tr>
    <tr>
        <td colspan="2">&nbsp;</td>
        <?php foreach($opciones as $opcion) :?>
        <td class="eda-opcion"><?php echo $opcion ?></td>
        <?php endforeach ?>
    </tr>
    <?php foreach($alternativas as $indice => $alternativa): ?>
    <tr>
        <td class="eda-table-indice-td">    
            <span class="eda-table-indice"><?php echo $indice + 1 ?></span>
        </td>
        <td><?php echo $alternativa ?></td>
        <?php $aux=1; ?>
        <?php foreach($opciones as $index => $opcion) :?>
        
        <td class="eda-opcion">
            <input type="checkbox" 
                name="<?php echo $inputprefix ?>-F<?php echo $indice + 1 ?>C<?php echo $aux ?>"
                value="<?php echo ($index + 1) % 2 ? 'me-identifico':'me-dicen' ?>" />
            
        </td>
        <?php $aux=$aux+1; ?>
        <?php endforeach ?>
    </tr>
    <?php endforeach ?>
</table>
