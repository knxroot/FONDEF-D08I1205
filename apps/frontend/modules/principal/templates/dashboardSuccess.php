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
     <a href="<?php echo url_for('ENTREVISTA/index?idEncuestado='.$idEncuestado);?>">
     <div class="menu-dashboard-autoreporte-clickeable">
      ENTREVISTA
      </div></a>
   <?php endif; ?><?php if($esEvaluadorSecundario): ?>&#160;<?php endif; ?>
   </div>
   <div class="grid_3 ">
   <?php if(!($esEvaluadorSecundario)): ?>    
     <div class="menu-dashboard-autoreporte">
      <?php echo $porcCompletadoENTREVISTA; ?> %
      </div>
   <?php endif; ?><?php if($esEvaluadorSecundario): ?>&#160;<?php endif; ?>
   </div>  


 <div class="prefix_1 grid_2">
     <div class="menu-dashboard-juicioprofesional">
       <a href="<?php echo url_for('EGED/index?idEncuestado='.$idEncuestado);?>">
       <div class="menu-dashboard-juicioprofesional-clickeable">
        EGED
        </div></a>
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
      I
      </div>
   <?php endif; ?><?php if($esEvaluadorSecundario): ?>&#160;<?php endif; ?>
   </div>

  <div class="clear"></div><br>

   <div class="grid_3">
   <?php if(!($esEvaluadorSecundario)): ?>    
     <a href="<?php echo url_for('CAIE/index?idEncuestado='.$idEncuestado);?>">
     <div class="menu-dashboard-autoreporte-clickeable">
      CICUM
      </div></a>
   <?php endif; ?><?php if($esEvaluadorSecundario): ?>&#160;<?php endif; ?>
   </div>
   <div class="grid_3">
   <?php if(!($esEvaluadorSecundario)): ?>
     <div class="menu-dashboard-autoreporte">
      <?php echo $porcCompletadoCAIE; ?> %
      </div>
   <?php endif; ?><?php if($esEvaluadorSecundario): ?>&#160;<?php endif; ?>
   </div>


   <div class="prefix_1 grid_2">
     <a href="<?php echo url_for('FERR/index?idEncuestado='.$idEncuestado);?>">
     <div class="menu-dashboard-juicioprofesional">
      FERR
      </div></a>
   </div>
   <div class="grid_3">
     <div class="menu-dashboard-juicioprofesional">
      <?php echo $porcCompletadoFERR; ?> %
      </div>
   </div>
   <div class="grid_3">
   <?php if(!$esEvaluadorSecundario && $mostrarColumnaConsenso3): ?> 
     <div class="menu-dashboard-juicioprofesional">
      L
      </div>
   <?php endif; ?><?php if($esEvaluadorSecundario): ?>&#160;<?php endif; ?>
   </div>




  <div class="clear"></div><br>

   <div class="grid_3">
     <?php if(!($esEvaluadorSecundario)): ?>
     <a href="<?php echo url_for('CACSA/index?idEncuestado='.$idEncuestado);?>">
     <div class="menu-dashboard-autoreporte-clickeable">
      CACSA
      </div></a>
     <?php endif; ?><?php if($esEvaluadorSecundario): ?>&#160;<?php endif; ?>
   </div>
   <div class="grid_3">
     <?php if(!($esEvaluadorSecundario)): ?>
     <div class="menu-dashboard-autoreporte">
     <?php echo $porcCompletadoCACSA; ?> %
     </div>
     <?php endif; ?><?php if($esEvaluadorSecundario): ?>&#160;<?php endif; ?>
   </div>

   <div class="prefix_1 grid_2">
     <div class="menu-dashboard-juicioprofesional">
       <a href="<?php echo url_for('IRNC/index?idEncuestado='.$idEncuestado);?>">
       <div class="menu-dashboard-juicioprofesional-clickeable">
        IRNC
        </div></a>
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
      I
      </div>
   <?php endif; ?><?php if($esEvaluadorSecundario): ?>&#160;<?php endif; ?>
   </div>

  <div class="clear"></div><br>

   <div class="grid_3">
   <?php if(!($esEvaluadorSecundario)): ?>
     <a href="<?php echo url_for('EDA/index?idEncuestado='.$idEncuestado);?>">
     <div class="menu-dashboard-autoreporte-clickeable">
      EDA
      </div></a>
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
    <a href="<?php echo url_for('FCMF/index?idEncuestado='.$idEncuestado.'&modoConsenso=true');?>">
    <?php else: ?>
    <a href="<?php echo url_for('FCMF/index?idEncuestado='.$idEncuestado);?>">
    <?php endif; ?>
        
    <?php if(!$esEvaluadorSecundario && $mostrarColumnaConsenso5): ?>
    <div class="menu-consenso">
        

    <?php else: ?>
    <div class="menu-dashboard-juicioprofesional-clickeable">
      
      <?php endif; ?>
    
      FCMF
    </div></a>
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
     <a href="<?php echo url_for('SQIFA/index?idEncuestado='.$idEncuestado);?>">
     <div class="menu-dashboard-autoreporte-clickeable">
      CESMA
      </div></a>
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
       <a href="<?php echo url_for('DEP_ADO/index?idEncuestado='.$idEncuestado);?>">
       <div class="menu-dashboard-autoreporte-clickeable">
        DEPADO
        </div></a>
   </div>
   <div class="grid_3">
     <div class="menu-dashboard-autoreporte">
      <?php echo $porcCompletadoDEP_ADO; ?> %
      </div>
   </div>

   <div class="clear"></div><br>

   <div class="grid_3">
     <a href="<?php echo url_for('MACI/index?idEncuestado='.$idEncuestado);?>">
     <div class="menu-dashboard-autoreporte-clickeable">
      MACI
      </div></a>
   </div>
   <div class="grid_3">
     <div class="menu-dashboard-autoreporte">
      <?php echo $porcCompletadoMACI; ?> %
      </div>
   </div>
   <div class="clear"></div><br>

   <div class="grid_3">
     <a href="<?php echo url_for('CSVE/index?idEncuestado='.$idEncuestado);?>">
     <div class="menu-dashboard-autoreporte-clickeable">
      CSVE
      </div></a>
   </div>
   <div class="grid_3">
     <div class="menu-dashboard-autoreporte">
      <?php echo $porcCompletadoCSVE; ?> %
      </div>
   </div>
  <div class="clear"></div><br>

   <div class="grid_3">
     <a href="<?php echo url_for('JIR/index?idEncuestado='.$idEncuestado);?>">
     <div class="menu-dashboard-autoreporte-clickeable">
      JIR
      </div></a>
   </div>
   <div class="grid_3">
     <div class="menu-dashboard-autoreporte">
      <?php echo $porcCompletadoJIR; ?> %
      </div>
   </div>
  <div class="clear"></div><br>

   <div class="grid_3">
     <a href="<?php echo url_for('CONCLUSIONES/index?idEncuestado='.$idEncuestado);?>">
     <div class="menu-dashboard-autoreporte-clickeable">
      CONCLUSIONES
      </div></a>
   </div>
   <div class="grid_3">
     <div class="menu-dashboard-autoreporte">
      <?php echo $porcCompletadoCONCLUSIONES; ?> %
      </div>
   </div>
   <?php endif; ?><?php if($esEvaluadorSecundario): ?>&#160;<?php endif; ?>
  <div class="clear"></div><br>



<div class="prefix_4 grid_11">
     <div class="botonerainferior" style="padding: 0.3em 0.4em !important;">
       <a class="form-button form-left" style="display: block;" href="<?php echo url_for('principal/home?showtable=yes');?>"><- Ir a  la lista de encuestados</a>
       <?php if(!($esEvaluadorSecundario)): ?>    
         <a class="form-button-off form-left" style="display: block;" href="">Dar de alta a encuestado -></a>
       <?php endif; ?><?php if($esEvaluadorSecundario): ?>&#160;<?php endif; ?>
     </div>
</div>


<div class="clear"></div><br>
  


