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
            <select class="select-mini"
                name="<?php echo $opcion ?>-<?php echo $alternativa ?>">
           
            <option value="Si">Si</option><option selected="selected"  value="No">No</option></select>
            
        </td>
        <?php $aux=$aux+1; ?>
        <?php endforeach ?>
        
    </tr>
    <?php endforeach ?>
    <td class="eda-table-indice-td">
           <span class="eda-table-indice">27</span>
        </td>
        
         <td>
          Otro
        </td>
        
          <td class="eda-opcion">
          <input type="text" class="form-txt" style="width:100px;" value="" name="Yo_me_identifico-Otro" id="Yo_me_identifico-Otro" />
        </td>
         <td class="eda-opcion">
     <input type="text" class="form-txt" style="width:100px;" value="" name="Mis_amigos_me_dicen-Otro" id="Mis_amigos_me_dicen-Otro" />
    
        </td>
</table>
