<?php slot('title') ?>
  <?php  echo sprintf('Dash Board') ?>
<?php end_slot(); ?>

<!-- trabaja con un container grid 16  de 960grid system-->

<div class="clear"></div><br>

<div class="grid_15">
     <div class="menu-dashboard-encuestado ui-corner-top" style="padding: 0.3em 0.4em !important;">
      <span class="ui-icon-encuestado" style="float: left;"></span> <div><?php echo $nombreEncuestado; ?></div>
      </div>
</div>

<div class="clear"></div><br>






   <div class="grid_6">
   <?php if(!($esEvaluadorSecundario)): ?>
     <div class="menu-dashboard-autoreporte ui-corner-top" style="padding: 0.3em 0.4em !important;">
      <span class="ui-icon ui-icon-note" style="float: left;"></span> <div>Autoreporte</div>
      </div>
   <?php endif; ?><?php if($esEvaluadorSecundario): ?>&#160;<?php endif; ?>
   </div>

   <div class="prefix_1 grid_8" >
     <div class="menu-dashboard-juicioprofesional ui-corner-top" style="padding: 0.3em 0.4em !important;">
      <span class="ui-icon ui-icon-comment" style="float: left;"></span> <div>Juicio Profesional</div>
     </div>
   </div>

  
  <div class="clear"></div><br>

   <div class="prefix_9 grid_3">
     <div class="menu-dashboard-juicioprofesional  ui-corner-top">
       <span class="ui-icon ui-icon-person" style="float: left;"></span> <div><?php echo $responsable_principal; ?> </div>
     </div>
   </div>
   <div class="grid_3">
   <?php if(!$esEvaluadorSecundario && $mostrarColumnaConsenso1): ?>    
     <div class="menu-dashboard-juicioprofesional  ui-corner-top">
        <span class="ui-icon ui-icon-person" style="float: left;"></span> <div>CONSENSO</div>
      </div>
   <?php endif; ?><?php if($esEvaluadorSecundario): ?>&#160;<?php endif; ?>
   </div>



  <div class="clear"></div><br>

   <div class="grid_3">
   <?php if(!($esEvaluadorSecundario)): ?>
     <div class="menu-dashboard-autoreporte-clickeable">
      ENTREVISTA
      </div>
   <?php endif; ?><?php if($esEvaluadorSecundario): ?>&#160;<?php endif; ?>
   </div>
   <div class="grid_3 ">
   <?php if(!($esEvaluadorSecundario)): ?>    
     <div class="menu-dashboard-autoreporte">
      <?php echo $porcCompletadoENTREVISTA; ?> %
      </div>
   <?php endif; ?><?php if($esEvaluadorSecundario): ?>&#160;<?php endif; ?>
   </div>  

  <!-- CAMBIO CONSENSO START-->
   <div class="prefix_1 grid_2">
   <div class="menu-dashboard-juicioprofesional">
    <?php if(!$esEvaluadorSecundario && $mostrarColumnaConsenso2): ?>
    
    <?php else: ?>

     <?php endif; ?>
     <div class="<?php if(!$esEvaluadorSecundario && $mostrarColumnaConsenso2){echo "menu-consenso";}else{echo "menu-dashboard-juicioprofesional-clickeable";} ?>">
      EGED
     </div>

   </div>
   </div>
   <div class="grid_3">
     <div class="menu-dashboard-juicioprofesional">
      <?php echo $porcCompletadoEGED; ?> %
      </div>
   </div>
   <div class="grid_3">
   <?php if(!$esEvaluadorSecundario && $mostrarColumnaConsenso2): ?>  
     <div class="menu-dashboard-juicioprofesional">
      <?php echo $porcCompletadoEGED2; ?> %
      </div>
   <?php endif; ?><?php if($esEvaluadorSecundario): ?>&#160;<?php endif; ?>
   </div>
  <!-- CAMBIO CONSENSO STOP-->
  

  <div class="clear"></div><br>

   <div class="grid_3">
   <?php if(!($esEvaluadorSecundario)): ?>    

     <div class="menu-dashboard-autoreporte-clickeable">
      CICUM
      </div>
   <?php endif; ?><?php if($esEvaluadorSecundario): ?>&#160;<?php endif; ?>
   </div>
   <div class="grid_3">
   <?php if(!($esEvaluadorSecundario)): ?>
     <div class="menu-dashboard-autoreporte">
      <?php echo $porcCompletadoCAIE; ?> %
      </div>
   <?php endif; ?><?php if($esEvaluadorSecundario): ?>&#160;<?php endif; ?>
   </div>

   <!-- CAMBIO CONSENSO START-->
   <div class="prefix_1 grid_2">
   <div class="menu-dashboard-juicioprofesional">
     <div class="<?php if(!$esEvaluadorSecundario && $mostrarColumnaConsenso3){echo "menu-consenso";}else{echo "menu-dashboard-juicioprofesional-clickeable";} ?>">
      FERR
     </div>

   </div>
   </div>
   <div class="grid_3">
     <div class="menu-dashboard-juicioprofesional">
      <?php echo $porcCompletadoFERR; ?> %
      </div>
   </div>
   <div class="grid_3">
   <?php if(!$esEvaluadorSecundario && $mostrarColumnaConsenso3): ?>  
     <div class="menu-dashboard-juicioprofesional">
      <?php echo $porcCompletadoFERR2; ?> %
      </div>
   <?php endif; ?><?php if($esEvaluadorSecundario): ?>&#160;<?php endif; ?>
   </div>
  <!-- CAMBIO CONSENSO STOP-->




  <div class="clear"></div><br>

   <div class="grid_3">
     <?php if(!($esEvaluadorSecundario)): ?>

     <div class="menu-dashboard-autoreporte-clickeable">
      CACSA
      </div>
     <?php endif; ?><?php if($esEvaluadorSecundario): ?>&#160;<?php endif; ?>
   </div>
   <div class="grid_3">
     <?php if(!($esEvaluadorSecundario)): ?>
     <div class="menu-dashboard-autoreporte">
     <?php echo $porcCompletadoCACSA; ?> %
     </div>
     <?php endif; ?><?php if($esEvaluadorSecundario): ?>&#160;<?php endif; ?>
   </div>

  <!-- CAMBIO CONSENSO START-->
   <div class="prefix_1 grid_2">
   <div class="menu-dashboard-juicioprofesional">
    <?php if(!$esEvaluadorSecundario && $mostrarColumnaConsenso4): ?>

    <?php else: ?>

     <?php endif; ?>
     <div class="<?php if(!$esEvaluadorSecundario && $mostrarColumnaConsenso4){echo "menu-consenso";}else{echo "menu-dashboard-juicioprofesional-clickeable";} ?>">
      IRNC
     </div>

   </div>
   </div>
   <div class="grid_3">
     <div class="menu-dashboard-juicioprofesional">
      <?php echo $porcCompletadoIRNC; ?> %
      </div>
   </div>
   <div class="grid_3">
   <?php if(!$esEvaluadorSecundario && $mostrarColumnaConsenso4): ?>  
     <div class="menu-dashboard-juicioprofesional">
      <?php echo $porcCompletadoIRNC2; ?> %
      </div>
   <?php endif; ?><?php if($esEvaluadorSecundario): ?>&#160;<?php endif; ?>
   </div>
  <!-- CAMBIO CONSENSO STOP-->



  <div class="clear"></div><br>

   <div class="grid_3">
   <?php if(!($esEvaluadorSecundario)): ?>

     <div class="menu-dashboard-autoreporte-clickeable">
      EDA
      </div>
   <?php endif; ?><?php if($esEvaluadorSecundario): ?>&#160;<?php endif; ?>
   </div>
   <div class="grid_3">
   <?php if(!($esEvaluadorSecundario)): ?>
     <div class="menu-dashboard-autoreporte">
      <?php echo $porcCompletadoEDA; ?> %
      </div>
   <?php endif; ?><?php if($esEvaluadorSecundario): ?>&#160;<?php endif; ?>
   </div>

   <div class="prefix_1 grid_2">
    <div class="menu-dashboard-juicioprofesional">
    <?php if(!$esEvaluadorSecundario && $mostrarColumnaConsenso5): ?>

    <?php else: ?>

     <?php endif; ?>
     <div class="<?php if(!$esEvaluadorSecundario && $mostrarColumnaConsenso5){echo "menu-consenso";}else{echo "menu-dashboard-juicioprofesional-clickeable";} ?>">
      FCMF
     </div>
   </div>
   </div>
   
   <div class="grid_3">
     <div class="menu-dashboard-juicioprofesional">
      <?php echo $porcCompletadoFCMF; ?> %
      </div>
   </div>
   <div class="grid_3">
   <?php if(!$esEvaluadorSecundario && $mostrarColumnaConsenso5): ?>  
     <div class="menu-dashboard-juicioprofesional">
      <?php echo $porcCompletadoFCMF2; ?> %
      </div>
   <?php endif; ?><?php if($esEvaluadorSecundario): ?>&#160;<?php endif; ?>
   </div>


   <div class="clear"></div><br>

   <div class="grid_3">
   <?php if(!($esEvaluadorSecundario)): ?>

     <div class="menu-dashboard-autoreporte-clickeable">
      CESMA
      </div>
   <?php endif; ?><?php if($esEvaluadorSecundario): ?>&#160;<?php endif; ?>
   </div>
   
   <?php if(!($esEvaluadorSecundario)): ?>
   <div class="grid_3">
      <div class="menu-dashboard-autoreporte">
      <?php echo $porcCompletadoCESMA; ?> %
      </div>
   </div>
   <div class="clear"></div><br>

   <div class="grid_3">

       <div class="menu-dashboard-autoreporte-clickeable">
        DEPADO
        </div>
   </div>
   <div class="grid_3">
     <div class="menu-dashboard-autoreporte">
      <?php echo $porcCompletadodepado; ?> %
      </div>
   </div>

   <div class="clear"></div><br>

   <div class="grid_3">

     <div class="menu-dashboard-autoreporte-clickeable">
      MACI
      </div>
   </div>
   <div class="grid_3">
     <div class="menu-dashboard-autoreporte">
      <?php echo $porcCompletadoMACI; ?> %
      </div>
   </div>
   <div class="clear"></div><br>

   <div class="grid_3">

     <div class="menu-dashboard-autoreporte-clickeable">
      CSVE
      </div>
   </div>
   <div class="grid_3">
     <div class="menu-dashboard-autoreporte">
      <?php echo $porcCompletadoCSVE; ?> %
      </div>
   </div>
  <div class="clear"></div><br>

   <div class="grid_3">

     <div class="menu-dashboard-autoreporte-clickeable">
      JIR
      </div>
   </div>
   <div class="grid_3">
     <div class="menu-dashboard-autoreporte">
      <?php echo $porcCompletadoJIR; ?> %
      </div>
   </div>
  <div class="clear"></div><br>

   <div class="grid_3">
     <div class="menu-dashboard-autoreporte-clickeable">
      CONCLUSIONES
      </div>
   </div>
   <div class="grid_3">
     <div class="menu-dashboard-autoreporte">
      <?php echo $porcCompletadoCONCLUSIONES; ?> %
      </div>
   </div>
   <?php endif; ?><?php if($esEvaluadorSecundario): ?>&#160;<?php endif; ?>
  <div class="clear"></div><br>





<div class="clear"></div><br>
  


