<?php slot('title') ?>
  <?php  echo sprintf('Escala de Delicuencia Autorevelada') ?>
<?php end_slot(); ?>

<!-- Instrucciones -->
<?php include_partial('instrucciones') ?>

<!-- Encabezado del formulario -->
<div class="grid-12-12 ui-widget-header ui-corner-all" style="position: relative;">
    <span>Escala de Delicuencia Autorevelada</span>
</div>
<div class="clear"></div>

<!-- Formulario -->
<form id="form_eda" name="form_eda" class="form960 page-main-form" method="post" action="<?php echo url_for('EDA/save') ?>">
    <div class="grid-12-12">
        <div id="tabPanel" class="ui-widget ui-widget-content ui-corner-all">
            <!-- Tabs -->
            <ul class="tabs">
                <li><a href="#tabBloque1">Hurtos y Robos</a></li>
                <li><a href="#tabBloque2">Agresiones</a></li>
                <li><a href="#tabBloque3">Otros delitos</a></li>
                <li><a href="#tabBloque4">Preguntas</a></li>
            </ul>

            <!-- Paneles -->
            <div id="tabBloque1">
                <?php include_partial('crosstable', array(
                    'intervalos' => $config['intervalos'], 
                    'preguntas'  => $config['bloques']['hurtos_robos'],
                    'inputprefix'=> 'block1-',
                    'tableclass' => 'x-eda-1-table')) ?>
            </div>            
            <div id="tabBloque2">
                <?php include_partial('crosstable', array(
                    'intervalos' => $config['intervalos'], 
                    'preguntas'  => $config['bloques']['agresiones'], 
                    'inputprefix'=> 'block2-',
                    'tableclass' => 'x-eda-2-table')) ?>
            </div>            
            <div id="tabBloque3">
                <?php include_partial('crosstable', array(
                    'intervalos'  => $config['intervalos'], 
                    'preguntas'   => $config['bloques']['otros_delitos'], 
                    'tableclass'  => 'x-eda-3-table',
                    'inputprefix' => 'block3-',
                    'descripcion' => 'Delitos no contemplados en las categorías anteriores y tipificados para la LRPA' )) ?>
            </div>            
            <div id="tabBloque4">
                <?php include_partial('preguntas', array(
                    'alternativas' => $config['bloques']['preguntas']['items'], 
                    'opciones'     => $config['bloques']['preguntas']['opciones'],
                    'inputprefix'  => 'block4',
                    'tableclass'   => 'x-eda-1-table'
                )) ?>
            </div>
        </div>
    </div>
<a class="form-button-off form-left" 
   style="display: block;" 
   href="<?php echo url_for('EDA/index?idEncuestado=' . $idEncuestado) ?>" 
   onclick="return confirm('Al salir del formulario perderás la información que hayas respondido en la pantalla actual. ¿Estas seguro que deseas salir del formulario actual?');">
   <- Volver al menú
</a>
<input type="submit" value="Finalizar" title="enviar" class="form-button form-right">

<!-- Javascript de inicio de form -->
<?php include_partial('javascript', array('iniciado' => $iniciado)) ?>


