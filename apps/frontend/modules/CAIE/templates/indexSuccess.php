<?php slot('title') ?>
  <?php  echo sprintf('CICUM') ?>
<?php end_slot(); ?>

<!-- trabaja con un container grid 16  de 960grid system-->

   <div class="grid-12-12 ui-widget-header ui-corner-all">
     <div class="ui-corner-top" style="padding: 0.3em 0.4em !important;text-align: center;">
      <span class="ui-icon ui-icon-note" style="float: left;"></span> <div> CICUM </div>
      </div>
   </div>
   <div class="clear"></div><br>

 <div class="prefix_5 grid-2-12">
     <a href="<?php echo url_for('CAIE/listarBloque?idEncuestado='.$idEncuestado);?>">
     <div class="menu-dashboard-autoreporte-clickeable">
      CICUM (Parte 1)
      </div></a>
   </div>
   <div class="grid-2-12">
     <div class="menu-dashboard-autoreporte">
      <?php echo $porcCompletadoCAIE; ?> %
      </div>
   </div>
   <div class="clear"></div>

  <div class="prefix_5 grid-2-12">
     <a href="<?php echo url_for('CAIE/listarBloque2?idEncuestado='.$idEncuestado);?>">
     <div class="menu-dashboard-autoreporte-clickeable">
      CICUM (Parte 2)
      </div></a>
   </div>
   <div class="grid-2-12">
     <div class="menu-dashboard-autoreporte">
      <?php echo $porcCompletadoCAIE2; ?> %
      </div>
   </div>
  
  <div class="clear"></div><br><br><br>
  


