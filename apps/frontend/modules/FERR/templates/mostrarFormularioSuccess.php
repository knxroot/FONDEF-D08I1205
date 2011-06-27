<?php slot('title') ?>
  <?php  echo "[{$porcCompletado} % completado] (FERR) Ficha de evaluación de riesgos y recursos de comportamiento desadaptativo";?>
<?php end_slot(); ?>

<?php $url_save_post=url_for('FERR/GuardarInstrumento?idEncuestado='.$idEncuestado);?>

  <?php if(!($es_ultimo_bloque)): ?>
  <div class="grid-12-12 ui-widget ui-widget-header ui-corner-all" style="position: relative;"><?php  echo "[{$porcCompletado} % completado] (FERR) Ficha de evaluación de riesgos y recursos de comportamiento desadaptativo";?>
  </div><div class="clear"></div>


<div id="msgzone">
    <div class="grid-12-12">
      <?php echo image_tag('loading-image.gif','style=float:left;') ?><h3 id="mensaje">Guardando...</h3>
    </div>
    <div class="clear"></div>
</div>

<div id="contenido" style="display:display">
    <form id="formulario_FERR" name="formulario_FERR" class="form960" method="post" action="<?php echo $url_save_post; ?>">
    <div class="grid-12-12">
      <div id="panelTabsPreguntas" class="ui-widget ui-widget-content ui-corner-all">
        <ul class="tabs">
            <li><a href="#tabBloque1">1</a></li>
            <li><a href="#tabBloque2">2</a></li>
            <li><a href="#tabBloque3">3</a></li>
            <li><a href="#tabBloque4">4</a></li>
            <li><a href="#tabBloque5">5</a></li>
            <li><a href="#tabBloque6">6</a></li>
            <li><a href="#tabBloque7">7</a></li>
            <li><a href="#tabBloque8">8</a></li>
            <li><a href="#tabBloque9">9</a></li>
            <li><a href="#tabBloque10">10</a></li>
            <li><a href="#tabBloque11">11</a></li>
        </ul>


        <div id="tabBloque1" style="padding: 1em 0em;">
          <div class="grid-12-12" style="margin-left: 0px;">
            <table class="ta1" border="0" cellpadding="0" cellspacing="0">
                    <colgroup>
                            <col width="57.3px" />
                            <col width="57.3px" />
                            <col width="57.3px" />
                            <col width="57.3px" />
                            <col width="57.3px" />
                            <col width="57.3px" />
                            <col width="57.3px" />
                            <col width="57.3px" />
                            <col width="57.3px" />
                            <col width="57.3px" />
                            <col width="57.3px" />
                            <col width="57.3px" />
                            <col width="57.3px" />
                            <col width="57.3px" />
                            <col width="57.3px" />
            </colgroup>
            <tbody>
            <tr class="ro1">
            <td colspan="15" style="text-align: left; width: 57.3px;"
            class="ce1">
            <p>F-2 HISTORIA EN CONDUCTAS DE DESADAPTACIÓN SOCIAL (Ingrese
            Frecuencia)</p>
            </td>
            </tr>
            <tr class="ro2">
            <td colspan="2" style="text-align: left; width: 57.3px;"
            class="ce2">
            <p>Edad de Inicio <a href="#" class="edadtrigger"><IMG src="/images/question-white.png" /></p>
            </td>
            <td colspan="7" style="text-align: left; width: 57.3px;"
            class="ce29">
            <p>Delitos contra la propiedad "DCP" <a href="#" class="dcptrigger"><IMG src="/images/question-white.png" /></a></p>
            </td>
            <td colspan="3" style="text-align: left; width: 57.3px;"
            class="ce46">
            <p>Delitos contra la Integridad Física "DCIF" <a href="#" class="dciftrigger"><IMG src="/images/question-white.png" /></a></p>
            </td>
            <td colspan="3" style="text-align: left; width: 57.3px;"
            class="ce66">
            <p>Delitos Específicos "DE" </p>
            </td>
            </tr>
            <tr class="ro2">
            <td colspan="2" style="text-align: left; width: 57.3px;color: #ffffff"
                class="ce3"><input id="edad_inicio" name="edad_inicio" type="text" value="0" style="color: #000000"/> años</td>
            <td style="text-align: left; width: 57.3px;" class="ce30">
            <p>Hurtos</p>
            </td>
            <td style="text-align: left; width: 57.3px;" class="ce30">
            <p>Robo por Sorpresa</p>
            </td>
            <td style="text-align: left; width: 57.3px;" class="ce40">
            <p>Robo Bienes Nacionales</p>
            </td>
            <td style="text-align: left; width: 57.3px;" class="ce30">
            <p>Robo Lugar No Habitado </p>
            </td>
            <td style="text-align: left; width: 57.3px;" class="ce40">
            <p>Robo Lugar Habitado</p>
            </td>
            <td style="text-align: left; width: 57.3px;" class="ce30">
            <p>Robo con Intimidación</p>
            </td>
            <td style="text-align: left; width: 57.3px;" class="ce30">
            <p>Robo con Violencia</p>
            </td>
            <td style="text-align: left; width: 57.3px;" class="ce47">
            <p>Lesiones Leves</p>
            </td>
            <td style="text-align: left; width: 57.3px;" class="ce57">
            <p>Lesiones Graves</p>
            </td>
            <td style="text-align: left; width: 57.3px;" class="ce47">
            <p>Homicidios</p>
            </td>
            <td style="text-align: left; width: 57.3px;" class="ce67">
            <p>Ley de Drogas</p>
            </td>
            <td style="text-align: left; width: 57.3px;" class="ce76">
            <p>Delitos Sexuales</p>
            </td>
            <td style="text-align: left; width: 57.3px;" class="ce83">
            <p>Otros Delitos</p>
            </td>
            </tr>
            <tr class="ro3">
            <td rowspan="2" style="text-align: left; width: 57.3px;"
            class="ce4">
            <p>8 a 9 </p>
            </td>
            <td style="text-align: left; width: 57.3px;" class="ce19">
            <p>No Judicial</p>
            </td>
            <td style="text-align: left; width: 57.3px;" class="ce31"><input id="A1" name="A1" type="text" value="0"/></td>
            <td style="text-align: left; width: 57.3px;" class="ce31"><input id="B1" name="B1" type="text" value="0"/></td>
            <td style="text-align: left; width: 57.3px;" class="ce31"><input id="C1" name="C1" type="text" value="0"/></td>
            <td style="text-align: left; width: 57.3px;" class="ce31"><input id="D1" name="D1" type="text" value="0"/></td>
            <td style="text-align: left; width: 57.3px;" class="ce31"><input id="E1" name="E1" type="text" value="0"/></td>
            <td style="text-align: left; width: 57.3px;" class="ce31"><input id="F1" name="F1" type="text" value="0"/></td>
            <td style="text-align: left; width: 57.3px;" class="ce31"><input id="G1" name="G1" type="text" value="0"/></td>
            <td style="text-align: left; width: 57.3px;" class="ce48"><input id="H1" name="H1" type="text" value="0"/></td>
            <td style="text-align: left; width: 57.3px;" class="ce48"><input id="I1" name="I1" type="text" value="0"/></td>
            <td style="text-align: left; width: 57.3px;" class="ce48"><input id="J1" name="J1" type="text" value="0"/></td>
            <td style="text-align: left; width: 57.3px;" class="ce68"><input id="K1" name="K1" type="text" value="0"/></td>
            <td style="text-align: left; width: 57.3px;" class="ce68"><input id="L1" name="L1" type="text" value="0"/></td>
            <td style="text-align: left; width: 57.3px;" class="ce84"><input id="M1" name="M1" type="text" value="0"/></td>
            </tr>
            <tr class="ro3">
            <td style="text-align: left; width: 57.3px;" class="ce20">
            <p>Judicializado</p>
            </td>
            <td style="text-align: left; width: 57.3px;" class="ce32"><input id="A2" name="A2" type="text" value="0"/></td>
            <td style="text-align: left; width: 57.3px;" class="ce32"><input id="B2" name="B2" type="text" value="0"/></td>
            <td style="text-align: left; width: 57.3px;" class="ce32"><input id="C2" name="C2" type="text" value="0"/></td>
            <td style="text-align: left; width: 57.3px;" class="ce32"><input id="D2" name="D2" type="text" value="0"/></td>
            <td style="text-align: left; width: 57.3px;" class="ce32"><input id="E2" name="E2" type="text" value="0"/></td>
            <td style="text-align: left; width: 57.3px;" class="ce32"><input id="F2" name="F2" type="text" value="0"/></td>
            <td style="text-align: left; width: 57.3px;" class="ce32"><input id="G2" name="G2" type="text" value="0"/></td>
            <td style="text-align: left; width: 57.3px;" class="ce49"><input id="H2" name="H2" type="text" value="0"/></td>
            <td style="text-align: left; width: 57.3px;" class="ce49"><input id="I2" name="I2" type="text" value="0"/></td>
            <td style="text-align: left; width: 57.3px;" class="ce49"><input id="J2" name="J2" type="text" value="0"/></td>
            <td style="text-align: left; width: 57.3px;" class="ce69"><input id="K2" name="K2" type="text" value="0"/></td>
            <td style="text-align: left; width: 57.3px;" class="ce69"><input id="L2" name="L2" type="text" value="0"/></td>
            <td style="text-align: left; width: 57.3px;" class="ce85"><input id="M2" name="M2" type="text" value="0"/></td>
            </tr>
            <tr class="ro3">
            <td rowspan="2" style="text-align: left; width: 57.3px;"
            class="ce4">
            <p>10 a 12 </p>
            </td>
            <td style="text-align: left; width: 57.3px;" class="ce19">
            <p>No Judicial</p>
            </td>
            <td style="text-align: left; width: 57.3px;" class="ce31"><input id="A3" name="A3" type="text" value="0"/></td>
            <td style="text-align: left; width: 57.3px;" class="ce31"><input id="B3" name="B3" type="text" value="0"/></td>
            <td style="text-align: left; width: 57.3px;" class="ce31"><input id="C3" name="C3" type="text" value="0"/></td>
            <td style="text-align: left; width: 57.3px;" class="ce31"><input id="D3" name="D3" type="text" value="0"/></td>
            <td style="text-align: left; width: 57.3px;" class="ce31"><input id="E3" name="E3" type="text" value="0"/></td>
            <td style="text-align: left; width: 57.3px;" class="ce31"><input id="F3" name="F3" type="text" value="0"/></td>
            <td style="text-align: left; width: 57.3px;" class="ce31"><input id="G3" name="G3" type="text" value="0"/></td>
            <td style="text-align: left; width: 57.3px;" class="ce48"><input id="H3" name="H3" type="text" value="0"/></td>
            <td style="text-align: left; width: 57.3px;" class="ce48"><input id="I3" name="I3" type="text" value="0"/></td>
            <td style="text-align: left; width: 57.3px;" class="ce48"><input id="J3" name="J3" type="text" value="0"/></td>
            <td style="text-align: left; width: 57.3px;" class="ce68"><input id="K3" name="K3" type="text" value="0"/></td>
            <td style="text-align: left; width: 57.3px;" class="ce68"><input id="L3" name="L3" type="text" value="0"/></td>
            <td style="text-align: left; width: 57.3px;" class="ce84"><input id="M3" name="M3" type="text" value="0"/></td>
            </tr>
            <tr class="ro3">
            <td style="text-align: left; width: 57.3px;" class="ce20">
            <p>Judicializado</p>
            </td>
            <td style="text-align: left; width: 57.3px;" class="ce32"><input id="A4" name="A4" type="text" value="0"/></td>
            <td style="text-align: left; width: 57.3px;" class="ce32"><input id="B4" name="B4" type="text" value="0"/></td>
            <td style="text-align: left; width: 57.3px;" class="ce32"><input id="C4" name="C4" type="text" value="0"/></td>
            <td style="text-align: left; width: 57.3px;" class="ce32"><input id="D4" name="D4" type="text" value="0"/></td>
            <td style="text-align: left; width: 57.3px;" class="ce32"><input id="E4" name="E4" type="text" value="0"/></td>
            <td style="text-align: left; width: 57.3px;" class="ce32"><input id="F4" name="F4" type="text" value="0"/></td>
            <td style="text-align: left; width: 57.3px;" class="ce32"><input id="G4" name="G4" type="text" value="0"/></td>
            <td style="text-align: left; width: 57.3px;" class="ce49"><input id="H4" name="H4" type="text" value="0"/></td>
            <td style="text-align: left; width: 57.3px;" class="ce58"><input id="I4" name="I4" type="text" value="0"/></td>
            <td style="text-align: left; width: 57.3px;" class="ce49"><input id="J4" name="J4" type="text" value="0"/></td>
            <td style="text-align: left; width: 57.3px;" class="ce69"><input id="K4" name="K4" type="text" value="0"/></td>
            <td style="text-align: left; width: 57.3px;" class="ce69"><input id="L4" name="L4" type="text" value="0"/></td>
            <td style="text-align: left; width: 57.3px;" class="ce85"><input id="M4" name="M4" type="text" value="0"/></td>
            </tr>
            <tr class="ro3">
            <td rowspan="2" style="text-align: left; width: 57.3px;"
            class="ce4">
            <p>13 a 14</p>
            </td>
            <td style="text-align: left; width: 57.3px;" class="ce19">
            <p>No Judicial</p>
            </td>
            <td style="text-align: left; width: 57.3px;" class="ce31"><input id="A5" name="A5" type="text" value="0"/></td>
            <td style="text-align: left; width: 57.3px;" class="ce31"><input id="B5" name="B5" type="text" value="0"/></td>
            <td style="text-align: left; width: 57.3px;" class="ce31"><input id="C5" name="C5" type="text" value="0"/></td>
            <td style="text-align: left; width: 57.3px;" class="ce31"><input id="D5" name="D5" type="text" value="0"/></td>
            <td style="text-align: left; width: 57.3px;" class="ce31"><input id="E5" name="E5" type="text" value="0"/></td>
            <td style="text-align: left; width: 57.3px;" class="ce31"><input id="F5" name="F5" type="text" value="0"/></td>
            <td style="text-align: left; width: 57.3px;" class="ce31"><input id="G5" name="G5" type="text" value="0"/></td>
            <td style="text-align: left; width: 57.3px;" class="ce48"><input id="H5" name="H5" type="text" value="0"/></td>
            <td style="text-align: left; width: 57.3px;" class="ce48"><input id="I5" name="I5" type="text" value="0"/></td>
            <td style="text-align: left; width: 57.3px;" class="ce48"><input id="J5" name="J5" type="text" value="0"/></td>
            <td style="text-align: left; width: 57.3px;" class="ce68"><input id="K5" name="K5" type="text" value="0"/></td>
            <td style="text-align: left; width: 57.3px;" class="ce68"><input id="L5" name="L5" type="text" value="0"/></td>
            <td style="text-align: left; width: 57.3px;" class="ce84"><input id="M5" name="M5" type="text" value="0"/></td>
            </tr>
            <tr class="ro3">
            <td style="text-align: left; width: 57.3px;" class="ce20">
            <p>Judicializado</p>
            </td>
            <td style="text-align: left; width: 57.3px;" class="ce32"><input id="A6" name="A6" type="text" value="0"/></td>
            <td style="text-align: left; width: 57.3px;" class="ce32"><input id="B6" name="B6" type="text" value="0"/></td>
            <td style="text-align: left; width: 57.3px;" class="ce32"><input id="C6" name="C6" type="text" value="0"/></td>
            <td style="text-align: left; width: 57.3px;" class="ce32"><input id="D6" name="D6" type="text" value="0"/></td>
            <td style="text-align: left; width: 57.3px;" class="ce32"><input id="E6" name="E6" type="text" value="0"/></td>
            <td style="text-align: left; width: 57.3px;" class="ce32"><input id="F6" name="F6" type="text" value="0"/></td>
            <td style="text-align: left; width: 57.3px;" class="ce32"><input id="G6" name="G6" type="text" value="0"/></td>
            <td style="text-align: left; width: 57.3px;" class="ce49"><input id="H6" name="H6" type="text" value="0"/></td>
            <td style="text-align: left; width: 57.3px;" class="ce49"><input id="I6" name="I6" type="text" value="0"/></td>
            <td style="text-align: left; width: 57.3px;" class="ce49"><input id="J6" name="J6" type="text" value="0"/></td>
            <td style="text-align: left; width: 57.3px;" class="ce69"><input id="K6" name="K6" type="text" value="0"/></td>
            <td style="text-align: left; width: 57.3px;" class="ce69"><input id="L6" name="L6" type="text" value="0"/></td>
            <td style="text-align: left; width: 57.3px;" class="ce85"><input id="M6" name="M6" type="text" value="0"/></td>
            </tr>
            <tr class="ro3">
            <td rowspan="2" style="text-align: left; width: 57.3px;"
            class="ce4">
            <p>15 a 16 </p>
            </td>
            <td style="text-align: left; width: 57.3px;" class="ce19">
            <p>No Judicial</p>
            </td>
            <td style="text-align: left; width: 57.3px;" class="ce31"><input id="A7" name="A7" type="text" value="0"/></td>
            <td style="text-align: left; width: 57.3px;" class="ce31"><input id="B7" name="B7" type="text" value="0"/></td>
            <td style="text-align: left; width: 57.3px;" class="ce31"><input id="C7" name="C7" type="text" value="0"/></td>
            <td style="text-align: left; width: 57.3px;" class="ce31"><input id="D7" name="D7" type="text" value="0"/></td>
            <td style="text-align: left; width: 57.3px;" class="ce31"><input id="E7" name="E7" type="text" value="0"/></td>
            <td style="text-align: left; width: 57.3px;" class="ce31"><input id="F7" name="F7" type="text" value="0"/></td>
            <td style="text-align: left; width: 57.3px;" class="ce31"><input id="G7" name="G7" type="text" value="0"/></td>
            <td style="text-align: left; width: 57.3px;" class="ce48"><input id="H7" name="H7" type="text" value="0"/></td>
            <td style="text-align: left; width: 57.3px;" class="ce48"><input id="I7" name="I7" type="text" value="0"/></td>
            <td style="text-align: left; width: 57.3px;" class="ce48"><input id="J7" name="J7" type="text" value="0"/></td>
            <td style="text-align: left; width: 57.3px;" class="ce68"><input id="K7" name="K7" type="text" value="0"/></td>
            <td style="text-align: left; width: 57.3px;" class="ce68"><input id="L7" name="L7" type="text" value="0"/></td>
            <td style="text-align: left; width: 57.3px;" class="ce84"><input id="M7" name="M7" type="text" value="0"/></td>
            </tr>
            <tr class="ro3">
            <td style="text-align: left; width: 57.3px;" class="ce20">
            <p>Judicializado</p>
            </td>
            <td style="text-align: left; width: 57.3px;" class="ce32"><input id="A8" name="A8" type="text" value="0"/></td>
            <td style="text-align: left; width: 57.3px;" class="ce32"><input id="B8" name="B8" type="text" value="0"/></td>
            <td style="text-align: left; width: 57.3px;" class="ce32"><input id="C8" name="C8" type="text" value="0"/></td>
            <td style="text-align: left; width: 57.3px;" class="ce32"><input id="D8" name="D8" type="text" value="0"/></td>
            <td style="text-align: left; width: 57.3px;" class="ce32"><input id="E8" name="E8" type="text" value="0"/></td>
            <td style="text-align: left; width: 57.3px;" class="ce32"><input id="F8" name="F8" type="text" value="0"/></td>
            <td style="text-align: left; width: 57.3px;" class="ce32"><input id="G8" name="G8" type="text" value="0"/></td>
            <td style="text-align: left; width: 57.3px;" class="ce49"><input id="H8" name="H8" type="text" value="0"/></td>
            <td style="text-align: left; width: 57.3px;" class="ce49"><input id="I8" name="I8" type="text" value="0"/></td>
            <td style="text-align: left; width: 57.3px;" class="ce49"><input id="J8" name="J8" type="text" value="0"/></td>
            <td style="text-align: left; width: 57.3px;" class="ce69"><input id="K8" name="K8" type="text" value="0"/></td>
            <td style="text-align: left; width: 57.3px;" class="ce69"><input id="L8" name="L8" type="text" value="0"/></td>
            <td style="text-align: left; width: 57.3px;" class="ce85"><input id="M8" name="M8" type="text" value="0"/></td>

            </tr>
            <tr class="ro3">
            <td rowspan="2" style="text-align: left; width: 57.3px;"
            class="ce4">
            <p>17 a 18 </p>
            </td>
            <td style="text-align: left; width: 57.3px;" class="ce19">
            <p>No Judicial</p>
            </td>
            <td style="text-align: left; width: 57.3px;" class="ce31"><input id="A9" name="A9" type="text" value="0"/></td>
            <td style="text-align: left; width: 57.3px;" class="ce31"><input id="B9" name="B9" type="text" value="0"/></td>
            <td style="text-align: left; width: 57.3px;" class="ce31"><input id="C9" name="C9" type="text" value="0"/></td>
            <td style="text-align: left; width: 57.3px;" class="ce31"><input id="D9" name="D9" type="text" value="0"/></td>
            <td style="text-align: left; width: 57.3px;" class="ce31"><input id="E9" name="E9" type="text" value="0"/></td>
            <td style="text-align: left; width: 57.3px;" class="ce31"><input id="F9" name="F9" type="text" value="0"/></td>
            <td style="text-align: left; width: 57.3px;" class="ce31"><input id="G9" name="G9" type="text" value="0"/></td>
            <td style="text-align: left; width: 57.3px;" class="ce48"><input id="H9" name="H9" type="text" value="0"/></td>
            <td style="text-align: left; width: 57.3px;" class="ce48"><input id="I9" name="I9" type="text" value="0"/></td>
            <td style="text-align: left; width: 57.3px;" class="ce48"><input id="J9" name="J9" type="text" value="0"/></td>
            <td style="text-align: left; width: 57.3px;" class="ce68"><input id="K9" name="K9" type="text" value="0"/></td>
            <td style="text-align: left; width: 57.3px;" class="ce68"><input id="L9" name="L9" type="text" value="0"/></td>
            <td style="text-align: left; width: 57.3px;" class="ce84"><input id="M9" name="M9" type="text" value="0"/></td>

            </tr>
            <tr class="ro3">
            <td style="text-align: left; width: 57.3px;" class="ce20">
            <p>Judicializado</p>
            </td>
            <td style="text-align: left; width: 57.3px;" class="ce32"><input id="A10" name="A10" type="text" value="0"/></td>
            <td style="text-align: left; width: 57.3px;" class="ce32"><input id="B10" name="B10" type="text" value="0"/></td>
            <td style="text-align: left; width: 57.3px;" class="ce32"><input id="C10" name="C10" type="text" value="0"/></td>
            <td style="text-align: left; width: 57.3px;" class="ce32"><input id="D10" name="D10" type="text" value="0"/></td>
            <td style="text-align: left; width: 57.3px;" class="ce32"><input id="E10" name="E10" type="text" value="0"/></td>
            <td style="text-align: left; width: 57.3px;" class="ce32"><input id="F10" name="F10" type="text" value="0"/></td>
            <td style="text-align: left; width: 57.3px;" class="ce32"><input id="G10" name="G10" type="text" value="0"/></td>
            <td style="text-align: left; width: 57.3px;" class="ce49"><input id="H10" name="H10" type="text" value="0"/></td>
            <td style="text-align: left; width: 57.3px;" class="ce49"><input id="I10" name="I10" type="text" value="0"/></td>
            <td style="text-align: left; width: 57.3px;" class="ce49"><input id="J10" name="J10" type="text" value="0"/></td>
            <td style="text-align: left; width: 57.3px;" class="ce69"><input id="K10" name="K10" type="text" value="0"/></td>
            <td style="text-align: left; width: 57.3px;" class="ce69"><input id="L10" name="L10" type="text" value="0"/></td>
            <td style="text-align: left; width: 57.3px;" class="ce85"><input id="M10" name="M10" type="text" value="0"/></td>
            </tr>
            <tr class="ro4">
            <td rowspan="3" style="text-align: left; width: 57.3px;"
            class="ce6">
            <p>Totales</p>
            </td>
            <td style="text-align: left; width: 57.3px;" class="ce21">&nbsp;</td>
            <td style="text-align: left; width: 57.3px;" class="ce33">
            <p>TH</p>
            </td>
            <td style="text-align: left; width: 57.3px;" class="ce33">
            <p>TRS</p>
            </td>
            <td style="text-align: left; width: 57.3px;" class="ce33">
            <p>TRBN</p>
            </td>
            <td style="text-align: left; width: 57.3px;" class="ce33">
            <p>TRLNH</p>
            </td>
            <td style="text-align: left; width: 57.3px;" class="ce33">
            <p>TRLH</p>
            </td>
            <td style="text-align: left; width: 57.3px;" class="ce33">
            <p>TRI</p>
            </td>
            <td style="text-align: left; width: 57.3px;" class="ce33">
            <p>TRV</p>
            </td>
            <td style="text-align: left; width: 57.3px;" class="ce33">
            <p>TLL</p>
            </td>
            <td style="text-align: left; width: 57.3px;" class="ce33">
            <p>TLG</p>
            </td>
            <td style="text-align: left; width: 57.3px;" class="ce33">
            <p>TH</p>
            </td>
            <td style="text-align: left; width: 57.3px;" class="ce33">
            <p>TLD</p>
            </td>
            <td style="text-align: left; width: 57.3px;" class="ce33">
            <p>TDS</p>
            </td>
            <td style="text-align: left; width: 57.3px;" class="ce86">
            <p>Años Des <a href="#" class="anosdestrigger"><IMG src="/images/question-white.png" /></a></p>
            </td>
            </tr>
            <tr class="ro5">
            <td style="text-align: left; width: 57.3px;" class="ce19">
            <p>No Judicial</p>
            </td>
            <td style="text-align: right; width: 57.3px;" class="ce34">
            <p id="A11_2">0</p><input id="A11" name="A11" type="text" value="0" style="display:none;"/>
            </td>
            <td style="text-align: right; width: 57.3px;" class="ce34">
            <p id="B11_2">0</p><input id="B11" name="B11" type="text" value="0" style="display:none;"/>
            </td>
            <td style="text-align: right; width: 57.3px;" class="ce34">
            <p id="C11_2">0</p><input id="C11" name="C11" type="text" value="0" style="display:none;"/>
            </td>
            <td style="text-align: right; width: 57.3px;" class="ce34">
            <p id="D11_2">0</p><input id="D11" name="D11" type="text" value="0" style="display:none;"/>
            </td>
            <td style="text-align: right; width: 57.3px;" class="ce34">
            <p id="E11_2">0</p><input id="E11" name="E11" type="text" value="0" style="display:none;"/>
            </td>
            <td style="text-align: right; width: 57.3px;" class="ce34">
            <p id="F11_2">0</p><input id="F11" name="F11" type="text" value="0" style="display:none;"/>
            </td>
            <td style="text-align: right; width: 57.3px;" class="ce34">
            <p id="G11_2">0</p><input id="G11" name="G11" type="text" value="0" style="display:none;"/>
            </td>
            <td style="text-align: right; width: 57.3px;" class="ce50">
            <p id="H11_2">0</p><input id="H11" name="H11" type="text" value="0" style="display:none;"/>
            </td>
            <td style="text-align: right; width: 57.3px;" class="ce50">
            <p id="I11_2">0</p><input id="I11" name="I11" type="text" value="0" style="display:none;"/>
            </td>
            <td style="text-align: right; width: 57.3px;" class="ce50">
            <p id="J11_2">0</p><input id="J11" name="J11" type="text" value="0" style="display:none;"/>
            </td>
            <td style="text-align: right; width: 57.3px;" class="ce70">
            <p id="K11_2">0</p><input id="K11" name="K11" type="text" value="0" style="display:none;"/>
            </td>
            <td style="text-align: right; width: 57.3px;" class="ce70">
            <p id="L11_2">0</p><input id="L11" name="L11" type="text" value="0" style="display:none;"/>
            </td>
            <td rowspan="2" style="text-align: left; width: 57.3px;"
            class="ce87"><input id="anos_desaptacion" name="anos_desaptacion" type="text" value="0"/></td>
            </tr>
            <tr class="ro5">
            <td style="text-align: left; width: 57.3px;" class="ce20">
            <p>Judicializado</p>
            </td>
            <td style="text-align: right; width: 57.3px;" class="ce34">
            <p id="A12_2">0</p><input id="A12" name="A12" type="text" value="0" style="display:none;"/>
            </td>
            <td style="text-align: right; width: 57.3px;" class="ce34">
            <p id="B12_2">0</p><input id="B12" name="B12" type="text" value="0" style="display:none;"/>
            </td>
            <td style="text-align: right; width: 57.3px;" class="ce34">
            <p id="C12_2">0</p><input id="C12" name="C12" type="text" value="0" style="display:none;"/>
            </td>
            <td style="text-align: right; width: 57.3px;" class="ce34">
            <p id="D12_2">0</p><input id="D12" name="D12" type="text" value="0" style="display:none;"/>
            </td>
            <td style="text-align: right; width: 57.3px;" class="ce34">
            <p id="E12_2">0</p><input id="E12" name="E12" type="text" value="0" style="display:none;"/>
            </td>
            <td style="text-align: right; width: 57.3px;" class="ce34">
            <p id="F12_2">0</p><input id="F12" name="F12" type="text" value="0" style="display:none;"/>
            </td>
            <td style="text-align: right; width: 57.3px;" class="ce34">
            <p id="G12_2">0</p><input id="G12" name="G12" type="text" value="0" style="display:none;"/>
            </td>
            <td style="text-align: right; width: 57.3px;" class="ce50">
            <p id="H12_2">0</p><input id="H12" name="H12" type="text" value="0" style="display:none;"/>
            </td>
            <td style="text-align: right; width: 57.3px;" class="ce50">
            <p id="I12_2">0</p><input id="I12" name="I12" type="text" value="0" style="display:none;"/>
            </td>
            <td style="text-align: right; width: 57.3px;" class="ce50">
            <p id="J12_2">0</p><input id="J12" name="J12" type="text" value="0" style="display:none;"/>
            </td>
            <td style="text-align: right; width: 57.3px;" class="ce70">
            <p id="K12_2">0</p><input id="K12" name="K12" type="text" value="0" style="display:none;"/>
            </td>
            <td style="text-align: right; width: 57.3px;" class="ce70">
            <p id="L12_2">0</p><input id="L12" name="L12" type="text" value="0" style="display:none;"/>
            </td>
            </tr>


            <tr class="rofix">
            <td style="text-align: left;padding: 2px;" class="ce10" colspan="9">
            <p>Observaciones<span class="T1"> (Especificar otros delitos) <a href="#" class="obs1trigger"><IMG src="/images/question-white.png" /></a></span></p>
            <textarea title="Porfavor escribe aqui tu comentario" class="ui-corner-all" id="observaciones_otrosdelitos" name="observaciones_otrosdelitos" style="width:510px; height:120px;"></textarea>
            </td>
            <td colspan="6" style="text-align: left;"
            class="ce53">

    <div> 
       <div class="CR RCR_P">
            <p style="width:100%">Polimorfismo <a href="#" class="polimorfismo1trigger"><IMG src="/images/question-white.png" /></a></p>
            <select id="polimorfismo" name="polimorfismo">
			<option value="No">No</option>
			<option value="Si">Si</option>
	    </select>
       </div> 
       <div class="CR RCR_TPD"><p style="width:100%">TDP</p><p id="RCR_TPD_2" class="RCR">0</p><input id="RCR_TPD" name="RCR_TPD" type="text" value="0" style="display:none;"/> </div> 
       <div class="CR RCR_TDIF"><p style="width:100%">TDIF</p><p id="RCR_TDIF_2" class="RCR">0</p><input id="RCR_TDIF" name="RCR_TDIF" type="text" value="0" style="display:none;"/></div>   
    </div>
    <div>
       <div class="CR RCR_ED">
            <p style="width:100%">E. Delictiva <a href="#" class="edelictiva1trigger"><IMG src="/images/question-white.png" /></a></p>
            <select id="edelictiva" name="edelictiva">
			<option value="No">No</option>
			<option value="Si">Si</option>
	    </select>
       </div>
       <div class="CR RCR_IEDSD"><p style="width:100%">IEDS-D <a href="#" class="iedsdmotrigger"><IMG src="/images/question-white.png" /></a></p><p id="RCR_IEDSD_2" class="RCR">0</p><input id="RCR_IEDSD" name="RCR_IEDSD" type="text" value="0" style="display:none;"/></div>
       <div class="CR RCR_IEDSP"><p style="width:100%">IEDS-Ponderado <a href="#" class="eidsptrigger"><IMG src="/images/question-white.png" /></a></p><p id="RCR_IEDSP_2" class="RCR">0</p><input id="RCR_IEDSP" name="RCR_IEDSP" type="text" value="0" style="display:none;"/></div>
    </div>


            </td>
            </tr>
            <tr class="rofix">
              <td style="text-align: left;padding: 2px;" class="cetcd" colspan="15">
              <p>Tipos de conductas delictivas registradas: <span class="T1"> describa brevemente secuencia, polimorfismo, actuación sólo o en grupos, si realiza varios tipos de delitos o sólo robos, etc. </span></p>
              <textarea title="Porfavor escribe aqui tu comentario" class="ui-corner-all" id="coment_tipoconductasdelictivas" name="coment_tipoconductasdelictivas" style="width:98%; height:120px;"></textarea>
              </td>
            </tr>
            </tbody>
            </table>
            </div>
           <div class="clear"></div>
        </div>

        <div id="tabBloque2">
          <div class="grid-6-12" style="background-color: #F2F2F2">
            Genograma familiar: <a href="#" class="genogramatrigger"><IMG src="/images/question-white.png" /></a><br>
                    <div id="file-uploader-genopro">
              <noscript>
                <p>Porfavor habilita JavaScript para poder subir los ficheros de gnopro.</p>
                <!-- or put a simple form for upload here -->
              </noscript>
              </div>
              <script>
                  function createUploader(){
                      var uploader = new qq.FileUploader({
                          element: document.getElementById('file-uploader-genopro'),
                          action: '<?php echo url_for('FERR/subirArchivo'); ?>',
                          debug: true,
                          multiple: false,
                          allowedExtensions: ['gno'],
                          messages: {
                            typeError: "{file} posee una extension invalida. Solo la extension {extensions} (GenoPro) esta permitida.",
                            sizeError: "{file} es demasiado grande, el tamano maximo de un archivo es {sizeLimit}.",
                            minSizeError: "{file} es demasiado pequeno, el tamano minimo de un archivo es {minSizeLimit}.",
                            emptyError: "{file} esta vacio, porfavor selecciona el archivo denuevo e intenta otra vez.",
                            onLeave: "Los archivos se estan subiendo, si te cierras la ventana ahora la subida se cancelara."
                           }

                      });
                  }

                  // REF http://www.symfonylab.com/file-uploader-reload/
                  window.onload = createUploader;
              </script>
          </div>
          <div class="grid-6-12" style="background-color: #F2F2F2">
            <div style="width: 100%;">Personas con las que vive actualmente <a href="#" class="viveactualtrigger"><IMG src="/images/question-white.png" /></a><br><textarea title="Porfavor escribe aqui tu comentario" class="ui-corner-all" id="pconlasquevive_comentario" name="pconlasquevive_comentario" style="width:98%; height:70px;"></textarea></div>
            <div style="width: 100%;">Vínculos significativos autoreportados <a href="#" class="vinculostrigger"><IMG src="/images/question-white.png" /></a><br><textarea title="Porfavor escribe aqui tu comentario" class="ui-corner-all" id="vsignificativosautoreportados_comentario" name="vsignificativosautoreportados_comentario" style="width:98%; height:70px;"></textarea></div>
          </div>
          <div class="clear"></div> <br>
          <div class="grid-12-12" style="background-color: #F2F2F2">
            <b>Autoreporte:</b> ¿A qué atribuye su comportamiento delictivo o transgresor? <a href="#" class="autoreportetrigger"><IMG src="/images/question-white.png" /></a><br><textarea title="Porfavor escribe aqui tu comentario" class="ui-corner-all" id="autoreporte_comentario" name="autoreporte_comentario" style="width:98%; height:70px;"></textarea>
          </div>

        </div>

        <div id="tabBloque3">
          <div class="grid-12-12">
            <div class="grid-6-12 title_tabla3">
              Tipo de Programa
            </div>
            <div class="grid-2-12 title_tabla3">
              Edad ingreso
            </div>
            <div class="grid-4-12 title_tabla3">
              Observaciones
            </div>
          </div><div class="clear"></div>

          <div class="grid-12-12">
            <div class="grid-6-12 row_tabla3_even">
              <input type="text" name="F3_1_frecuencia" id="F3_1_frecuencia" value="0" style="width:32px;height:32px;"/> Prevención Ambulatoria y Protección de Derechos (CAD, CIJ, PIE, PIB, OPD, PRM) <a href="#" class="prevenciontrigger"><IMG src="/images/question-white.png" /></a></div>
            <div class="grid-2-12 row_tabla3_even">
              <input type="text" name="F3_1_edad" id="F3_1_edad" value="0" style="width:32px;height:32px;"/> años
            </div>
            <div class="grid-4-12 row_tabla3_even">
              <textarea title="Porfavor escribe aqui tu comentario" class="ui-corner-all" id="F3_1_comentario" name="F3_1_comentario" style="width:98%; height:70px;"></textarea>
            </div>
          </div><div class="clear"></div>

          <div class="grid-12-12">
            <div class="grid-6-12 row_tabla3_odd">
              <input type="text" name="F3_2_frecuencia" id="F3_2_frecuencia" value="0" style="width:32px;height:32px;"/> Internación en Protección Simple (CTD, CREAD, Hogares) <a href="#" class="internaciontrigger"><IMG src="/images/question-white.png" /></a></div>
            <div class="grid-2-12 row_tabla3_odd">
              <input type="text" name="F3_1_edad" id="F3_1_edad" value="0" style="width:32px;height:32px;"/> años
            </div>
            <div class="grid-4-12 row_tabla3_odd">
              <textarea title="Porfavor escribe aqui tu comentario" class="ui-corner-all" id="F3_2_comentario" name="F3_2_comentario" style="width:98%; height:70px;"></textarea>
            </div>
          </div><div class="clear"></div>

          <div class="grid-12-12">
            <div class="grid-6-12 row_tabla3_even">
              <input type="text" name="F3_3_frecuencia" id="F3_3_frecuencia" value="0" style="width:32px;height:32px;"/> Programas ambulatorios RPA (PSA, SBC, PLA, PLAE).  <a href="#" class="rpatrigger"><IMG src="/images/question-white.png" /></a></div>
            <div class="grid-2-12 row_tabla3_even">
              <input type="text" name="F3_3_edad" id="F3_3_edad" value="0" style="width:32px;height:32px;"/> años
            </div>
            <div class="grid-4-12 row_tabla3_even">
              <textarea title="Porfavor escribe aqui tu comentario" class="ui-corner-all" id="F3_3_comentario" name="F3_3_comentario" style="width:98%; height:70px;"></textarea>
            </div>
          </div><div class="clear"></div>

          <div class="grid-12-12">
            <div class="grid-6-12 row_tabla3_odd">
              <input type="text" name="F3_4_frecuencia" id="F3_4_frecuencia" value="0" style="width:32px;height:32px;"/> Intervención ambulatoria Infractores (PIA, PLA, PLAE, SBC, PSA) <a href="#" class="iaitrigger"><IMG src="/images/question-white.png" /></a></div>
            <div class="grid-2-12 row_tabla3_odd">
              <input type="text" name="F3_4_edad" id="F3_4_edad" value="0" style="width:32px;height:32px;"/> años
            </div>
            <div class="grid-4-12 row_tabla3_odd">
              <textarea title="Porfavor escribe aqui tu comentario" class="ui-corner-all" id="F3_4_comentario" name="F3_4_comentario" style="width:98%; height:70px;"></textarea>
            </div>
          </div><div class="clear"></div>

          <div class="grid-12-12">
            <div class="grid-6-12 row_tabla3_even">
              <input type="text" name="F3_5_frecuencia" id="F3_5_frecuencia" value="0" style="width:32px;height:32px;"/> Centro Semi Cerrado <a href="#" class="semicerradotrigger"><IMG src="/images/question-white.png" /></a></div>
            <div class="grid-2-12 row_tabla3_even">
              <input type="text" name="F3_5_edad" id="F3_5_edad" value="0" style="width:32px;height:32px;"/> años
            </div>
            <div class="grid-4-12 row_tabla3_even">
              <textarea title="Porfavor escribe aqui tu comentario" class="ui-corner-all" id="F3_5_comentario" name="F3_5_comentario" style="width:98%; height:70px;"></textarea>
            </div>
          </div><div class="clear"></div>

          <div class="grid-12-12">
            <div class="grid-6-12 row_tabla3_odd">
              <input type="text" name="F3_6_frecuencia" id="F3_6_frecuencia" value="0" style="width:32px;height:32px;"/> Sistema Cerrado (COD, CERECO, CIP, CRC, GENCHI) <a href="#" class="sistemacerradotrigger"><IMG src="/images/question-white.png" /></a></div>
            <div class="grid-2-12 row_tabla3_odd">
              <input type="text" name="F3_6_edad" id="F3_6_edad" value="0" style="width:32px;height:32px;"/> años
            </div>
            <div class="grid-4-12 row_tabla3_odd">
              <textarea title="Porfavor escribe aqui tu comentario" class="ui-corner-all" id="F3_6_comentario" name="F3_6_comentario" style="width:98%; height:70px;"></textarea>
            </div>
          </div><div class="clear"></div>


          <div class="grid-12-12 row_tabla3_even">
            <div class="grid-1-12">
              Otro
            </div>
            <div class="grid-5-12">
              <textarea title="Otro" class="ui-corner-all" id="F3_OTRO" name="F3_OTRO" style="width:98%; height:70px;"></textarea>
            </div>
            <div class="grid-6-12"> Nº Total de Derivaciones a programas <a href="#" class="ntotaltrigger"><IMG src="/images/question-white.png" /></a>
              <input type="text" name="F3_nroderivaciones_a_programas" id="F3_nroderivaciones_a_programas" value="0" style="width:32px;height:32px;"/>
            </div>
          </div><div class="clear"></div>
        </div>

    <div id="tabBloque4">

       <div class="grid-8-12">
                               <label class="form-lbl-V-or-F">
               a.- Presentó conducta transgresora y fue puesto a disposición de algún tribunal antes de la causa actual <a href="#" class="4atrigger"><IMG src="/images/question-white.png" /></a>
                     </label>
       </div>
       <div class="grid-4-12">
             <ul class="form-list-rdo">
               <li><input type="radio" value="Si" name="f4a" class="botonradio"><label class="form-lbl">Si</label>
               </li>
               <li><input type="radio" value="No" name="f4a" class="botonradio"><label class="form-lbl">No</label></li>
               <li><input type="radio" value="NI" name="f4a" class="botonradio" checked><label class="form-lbl">NI</label></li>
             </ul>
       </div><div class="clear"></div>



       <div class="grid-8-12">
                               <label class="form-lbl-V-or-F">
               b.- Asistió, al menos una vez, a un programa de intervención por conductas delictivas antes de esta causa <a href="#" class="4btrigger"><IMG src="/images/question-white.png" /></a>
                     </label>
       </div>
       <div class="grid-4-12">
             <ul class="form-list-rdo">
               <li><input type="radio" value="Si" name="f4b" class="botonradio"><label class="form-lbl">Si</label>
               </li>
               <li><input type="radio" value="No" name="f4b" class="botonradio"><label class="form-lbl">No</label></li>
               <li><input type="radio" value="NI" name="f4b" class="botonradio" checked><label class="form-lbl">NI</label></li>
             </ul>
       </div><div class="clear"></div>


       <div class="grid-8-12">
                               <label class="form-lbl-V-or-F">
               c.- Existen antecedentes en informes previos o expedientes de tribunal de al menos dos incumplimientos de medida <a href="#" class="4ctrigger"><IMG src="/images/question-white.png" /></a>
                     </label>
       </div>
       <div class="grid-4-12">
             <ul class="form-list-rdo">
               <li><input type="radio" value="Si" name="f4c" class="botonradio"><label class="form-lbl">Si</label>
               </li>
               <li><input type="radio" value="No" name="f4c" class="botonradio"><label class="form-lbl">No</label></li>
               <li><input type="radio" value="NI" name="f4c" class="botonradio" checked><label class="form-lbl">NI</label></li>
             </ul>
       </div><div class="clear"></div>


       <div class="grid-8-12">
                               <label class="form-lbl-V-or-F">
               d.- Existen antecedentes que corroboran al menos 3 causas por conductas delictivas anteriores a la causa actual <a href="#" class="4dtrigger"><IMG src="/images/question-white.png" /></a>
                     </label>
       </div>
       <div class="grid-4-12">
             <ul class="form-list-rdo">
               <li><input type="radio" value="Si" name="f4d" class="botonradio"><label class="form-lbl">Si</label>
               </li>
               <li><input type="radio" value="No" name="f4d" class="botonradio"><label class="form-lbl">No</label></li>
               <li><input type="radio" value="NI" name="f4d" class="botonradio" checked><label class="form-lbl">NI</label></li>
             </ul>
       </div><div class="clear"></div>
    </div>

    <div id="tabBloque5">

       <div class="grid-8-12">
                               <label class="form-lbl-V-or-F">
               a.- Deserción escolar por más de 1 año <a href="#" class="5atrigger"><IMG src="/images/question-white.png" /></a>
                     </label>
       </div>
       <div class="grid-4-12">
             <ul class="form-list-rdo">
               <li><input type="radio" value="Si" name="f5a" class="botonradio"><label class="form-lbl">Si</label>
               </li>
               <li><input type="radio" value="No" name="f5a" class="botonradio" ><label class="form-lbl">No</label></li>
               <li><input type="radio" value="NI" name="f5a" class="botonradio"checked><label class="form-lbl">NI</label></li>
             </ul>
       </div><div class="clear"></div>



       <div class="grid-8-12">
                               <label class="form-lbl-V-or-F">
               b.- Ausentismo escolar <a href="#" class="5btrigger"><IMG src="/images/question-white.png" /></a>
                     </label>
       </div>
       <div class="grid-4-12">
             <ul class="form-list-rdo">
               <li><input type="radio" value="Si" name="f5b" class="botonradio"><label class="form-lbl">Si</label>
               </li>
               <li><input type="radio" value="No" name="f5b" class="botonradio" ><label class="form-lbl">No</label></li>
               <li><input type="radio" value="NI" name="f5b" class="botonradio" checked><label class="form-lbl">NI</label></li>
             </ul>
       </div><div class="clear"></div>


       <div class="grid-8-12">
                               <label class="form-lbl-V-or-F">
               c.- Deserta del sistema escolar y no realiza ningún trabajo remunerado <a href="#" class="5ctrigger"><IMG src="/images/question-white.png" /></a>
                     </label>
       </div>
       <div class="grid-4-12">
             <ul class="form-list-rdo">
               <li><input type="radio" value="Si" name="f5c" class="botonradio"><label class="form-lbl">Si</label>
               </li>
               <li><input type="radio" value="No" name="f5c" class="botonradio" ><label class="form-lbl">No</label></li>
               <li><input type="radio" value="NI" name="f5c" class="botonradio" checked><label class="form-lbl">NI</label></li>
             </ul>
       </div><div class="clear"></div>


       <div class="grid-8-12">
                               <label class="form-lbl-V-or-F">
               d.- Fugas de la escuela (más de 3 escapadas) <a href="#" class="5ftrigger"><IMG src="/images/question-white.png" /></a>
                     </label>
       </div>
       <div class="grid-4-12">
             <ul class="form-list-rdo">
               <li><input type="radio" value="Si" name="f5d" class="botonradio"><label class="form-lbl">Si</label>
               </li>
               <li><input type="radio" value="No" name="f5d" class="botonradio" ><label class="form-lbl">No</label></li>
               <li><input type="radio" value="NI" name="f5d" class="botonradio" checked><label class="form-lbl">NI</label></li>
             </ul>
       </div><div class="clear"></div>


       <div class="grid-8-12">
                               <label class="form-lbl-V-or-F">
               e.- Repitencia de curso (más de uno) <a href="#" class="5etrigger"><IMG src="/images/question-white.png" /></a>
                     </label>
       </div>
       <div class="grid-4-12">
             <ul class="form-list-rdo">
               <li><input type="radio" value="Si" name="f5e" class="botonradio"><label class="form-lbl">Si</label>
               </li>
               <li><input type="radio" value="No" name="f5e" class="botonradio" ><label class="form-lbl">No</label></li>
               <li><input type="radio" value="NI" name="f5e" class="botonradio" checked><label class="form-lbl">NI</label></li>
             </ul>
       </div><div class="clear"></div>

       <div class="grid-8-12">
                               <label class="form-lbl-V-or-F">
               f.- Bajo rendimiento escolar (2 promedios rojos) <a href="#" class="5ftrigger"><IMG src="/images/question-white.png" /></a>
                     </label>
       </div>
       <div class="grid-4-12">
             <ul class="form-list-rdo">
               <li><input type="radio" value="Si" name="f5f" class="botonradio"><label class="form-lbl">Si</label>
               </li>
               <li><input type="radio" value="No" name="f5f" class="botonradio" ><label class="form-lbl">No</label></li>
               <li><input type="radio" value="NI" name="f5f" class="botonradio" checked><label class="form-lbl">NI</label></li>
             </ul>
       </div><div class="clear"></div>

       <div class="grid-8-12">
                               <label class="form-lbl-V-or-F">
               g.- Comportamiento perturbador en recreos o patio <a href="#" class="5gtrigger"><IMG src="/images/question-white.png" /></a>
                     </label>
       </div>
       <div class="grid-4-12">
             <ul class="form-list-rdo">
               <li><input type="radio" value="Si" name="f5g" class="botonradio"><label class="form-lbl">Si</label>
               </li>
               <li><input type="radio" value="No" name="f5g" class="botonradio" ><label class="form-lbl">No</label></li>
               <li><input type="radio" value="NI" name="f5g" class="botonradio" checked><label class="form-lbl">NI</label></li>
             </ul>
       </div><div class="clear"></div>

       <div class="grid-8-12">
                               <label class="form-lbl-V-or-F">
               h.- Malas relaciones con compañeros de curso <a href="#" class="5htrigger"><IMG src="/images/question-white.png" /></a>
                     </label>
       </div>
       <div class="grid-4-12">
             <ul class="form-list-rdo">
               <li><input type="radio" value="Si" name="f5h" class="botonradio"><label class="form-lbl">Si</label>
               </li>
               <li><input type="radio" value="No" name="f5h" class="botonradio" ><label class="form-lbl">No</label></li>
               <li><input type="radio" value="NI" name="f5h" class="botonradio" checked><label class="form-lbl">NI</label></li>
             </ul>
       </div><div class="clear"></div>


       <div class="grid-8-12">
                               <label class="form-lbl-V-or-F">
               i.- Agresiones, riñas o peleas en la Escuela(más de 3) <a href="#" class="5itrigger"><IMG src="/images/question-white.png" /></a>
                     </label>
       </div>
       <div class="grid-4-12">
             <ul class="form-list-rdo">
               <li><input type="radio" value="Si" name="f5i" class="botonradio"><label class="form-lbl">Si</label>
               </li>
               <li><input type="radio" value="No" name="f5i" class="botonradio" ><label class="form-lbl">No</label></li>
               <li><input type="radio" value="NI" name="f5i" class="botonradio" checked><label class="form-lbl">NI</label></li>
             </ul>
       </div><div class="clear"></div>

       <div class="grid-8-12">
                               <label class="form-lbl-V-or-F">
               j.- Comportamiento perturbador en sala de clases <a href="#" class="5jtrigger"><IMG src="/images/question-white.png" /></a>
                     </label>
       </div>
       <div class="grid-4-12">
             <ul class="form-list-rdo">
               <li><input type="radio" value="Si" name="f5j" class="botonradio"><label class="form-lbl">Si</label>
               </li>
               <li><input type="radio" value="No" name="f5j" class="botonradio" ><label class="form-lbl">No</label></li>
               <li><input type="radio" value="NI" name="f5j" class="botonradio" checked><label class="form-lbl">NI</label></li>
             </ul>
       </div><div class="clear"></div>


       <div class="grid-3-12"></div>
       <div class="grid-5-12 f5total">
                               Total F-5a Problemas de Conducta
       </div>
       <div id="total_problemas_conducta" class="grid-1-12 f5resultado">0</div>
       <div class="grid-3-12"></div>
       <div class="clear"></div>

       <div class="grid-3-12"></div>
       <div class="grid-5-12 f5total">
                               Total F-5b Desenganche Escolar
       </div>
       <div id="total_desenganche_escolar" class="grid-1-12 f5resultado">0</div>
       <div class="grid-3-12"></div>
       <div class="clear"></div>

       <div class="grid-3-12"></div>
       <div class="grid-5-12 f5total">
                               Total F-5 Riesgos Escolares
       </div>
       <div id="total_riesgos_totales" class="grid-1-12 f5resultado">0</div>
       <div class="grid-3-12"></div>
       <div class="clear"></div>

      </div>

    <div id="tabBloque6">

    <?php
    $fx='f6';
    $array_f6=array(
                                  "a"=>"Los amigos del sector donde vive no asisten al sistema escolar",
                                  "b"=>"Algunos amigos presentan problemas con carabineros y han sido detenidos",
                                  "c"=>"Actualmente no pertenece y no le motiva integrarse a un grupo organizado en su barrio o comunidad",
                                  "d"=>"Entre sus amigos , no hay jóvenes trabajando o estudiando satisfactoriamente",
                                  "e"=>"Los amigos y el adolescente consumen juntos OH y/o drogas");?>

          <?php foreach ($array_f6 as $indice => $valor):?>
       <div class="grid-8-12">
                               <label class="form-lbl-V-or-F">
              <?php echo $indice.".-".$valor.$html;?>
			  <a href="#" class="6<?php echo $indice;?>trigger"><IMG src="/images/question-white.png" /></a>
                     </label>
       </div>
       <div class="grid-4-12">
             <ul class="form-list-rdo">
               <li><input type="radio" value="Si" name="<?php echo $fx.$indice;?>" class="botonradio"><label class="form-lbl">Si</label></li>
                       <li><input type="radio" value="No" name="<?php echo $fx.$indice;?>" class="botonradio"><label class="form-lbl">No</label></li>
               <li><input type="radio" value="NI" name="<?php echo $fx.$indice;?>" class="botonradio" checked><label class="form-lbl">NI</label></li>
             </ul>
       </div><div class="clear"></div>

          <?php endforeach ?>

       <div class="grid-3-12"></div>
       <div class="grid-5-12 f5total">
                               Total F-6 Relación con partes con desadaptación social
       </div>
       <div id="total_relacion_con_pares" class="grid-1-12 f5resultado">0</div>
       <div class="grid-3-12"></div>
       <div class="clear"></div>

      </div>
    <div id="tabBloque7">

    <?php
    $fx='f7';

    $array_f7=array(
                                  "a"=>"Muerte de uno de los padres",
                                  "b"=>"Uno de los padresabandona el hogar en su infancia",
                                  "c"=>"La familia no se muestra vinculada afectivamente al joven, no lo visita o no existe como tal",
                                  "d"=>"Relación conflictiva con uno de los padres",
                                  "e"=>"Los padres no supervisan las conductas del joven (dejan hacer)",
                                  "f"=>"Muestra comportamiento perturbador en la familia,  los padres refieren no poder controlarle",
                                  "g"=>"La familia impresiona sin ninguna organización. No hay roles delimitados",
                                  "h"=>"Rol parental inconsistente. Los padres presentan conductas de desadaptación emocional y/o social",
                                  "i"=>"Los adultos o uno de los padres, no trabajan o están cesantes por más de un año",
                                  "j"=>"La familia o algún miembro de ella aprueba las conductas delictivas del joven",
                                  "k"=>"Otros miembros de la familia presentan conductas delictivas",
                                  "l"=>"Se registra violencia intrafamiliar severa",
                                  "m"=>"Abuso de alcohol en los adultos de la familia",
								  "n"=>"Abuso de alcohol en los adultos de la familia",								  
                                  "o"=>"Uno o más miembros de la familiar presentan un transtorno psiquiátrico. Psicosis, demencia u otro.",
                                  "p"=>"Ha sido víctima de abuso sexual",
                                  "q"=>"Ha sido víctima de maltrato físico");?>

          <?php foreach ($array_f7 as $indice => $valor):?>
       <div class="grid-8-12">
                               <label class="form-lbl-V-or-F">
              <?php echo $indice.".-".$valor.$html;?>
			  <a href="#" class="7<?php echo $indice;?>trigger"><IMG src="/images/question-white.png" /></a>
                     </label>
       </div>
       <div class="grid-4-12">
             <ul class="form-list-rdo">
               <li><input type="radio" value="Si" name="<?php echo $fx.$indice;?>" class="botonradio"><label class="form-lbl">Si</label></li>
                <li><input type="radio" value="No" name="<?php echo $fx.$indice;?>" class="botonradio" checked><label class="form-lbl">No</label></li>
                       <li><input type="radio" value="NI" name="<?php echo $fx.$indice;?>" class="botonradio" checked><label class="form-lbl">NI</label></li>
             </ul>
       </div><div class="clear"></div>

          <?php endforeach ?>

       <div class="grid-3-12"></div>
       <div class="grid-5-12 f5total">
                               Total F-7 Riesgos familiares
       </div>
       <div id="totalf7_riesgosfamiliares" class="grid-1-12 f5resultado">0</div>
       <div class="grid-3-12"></div>
       <div class="clear"></div>

       <div class="grid-3-12"></div>
       <div class="grid-5-12 f5total">
                               Total F-7a Malos tratos
       </div>
       <div id="totalf7_malostratos" class="grid-1-12 f5resultado">0</div>
       <div class="grid-3-12"></div>
       <div class="clear"></div>

       <div class="grid-3-12"></div>
       <div class="grid-5-12 f5total">
                               Total F-7b Débil Supervisión
       </div>
       <div id="totalf7_debilsupervision" class="grid-1-12 f5resultado">0</div>
       <div class="grid-3-12"></div>
       <div class="clear"></div>



      </div>

    <div id="tabBloque8">

    <?php
    $fx='f8';
    $array_f8=array(
                                  "a"=>"Actualmente se interesa en capacitarse en un oficio u otra actividad",
                                  "b"=>"Manifiesta interés concreto por alcanzar una meta (conductas que demuestran interés laboral u otro)",
                                  "c"=>"Manifiesta un claro proyecto de vida futuro",
                                  "d"=>"Escasa preocupación o motivación por alcanzar un sueño o meta",
                                  "e"=>"No manifiesta interés particular en su vida futura en lo personal o familiar");?>

          <?php foreach ($array_f8 as $indice => $valor):?>
       <div class="grid-8-12">
                               <label class="form-lbl-V-or-F">
             <?php echo $indice.".-".$valor.$html;?>
			  <a href="#" class="8<?php echo $indice;?>trigger"><IMG src="/images/question-white.png" /></a>
                     </label>
       </div>
       <div class="grid-4-12">
             <ul class="form-list-rdo">
               <li><input type="radio" value="Si" name="<?php echo $fx.$indice;?>" class="botonradio"><label class="form-lbl">Si</label></li>
               <li><input type="radio" value="No" name="<?php echo $fx.$indice;?>" class="botonradio" ><label class="form-lbl">No</label></li>
               <li><input type="radio" value="NI" name="<?php echo $fx.$indice;?>" class="botonradio" checked><label class="form-lbl">NI</label></li>
             </ul>
       </div><div class="clear"></div>

          <?php endforeach ?>

       <div class="grid-3-12"></div>
       <div class="grid-5-12 f5total">
                              Total F-8 con Intereses
       </div>
       <div id="totalf8_conintereses" class="grid-1-12 f5resultado">0</div>
       <div class="grid-3-12"></div>
       <div class="clear"></div>

       <div class="grid-3-12"></div>
       <div class="grid-5-12 f5total">
                               Total F-8 sin Intereses
       </div>
       <div id="totalf8_sinintereses" class="grid-1-12 f5resultado">0</div>
       <div class="grid-3-12"></div>
       <div class="clear"></div>

       <div class="grid-3-12"></div>
       <div class="grid-5-12 f5total">
                               Total F-8 Intereses
       </div>
       <div id="totalf8_intereses" class="grid-1-12 f5resultado">0</div>
       <div class="grid-3-12"></div>
       <div class="clear"></div>



      </div>


    <div id="tabBloque9">

    <?php
    $fx='f9';
    $array_f9=array(
                                  "a"=>"Hay abuso de alguna droga",
                                  "b"=>"Hay abuso de alcohol",
                                  "c"=>"Hay una conducta adictiva dependiente de drogas o alcohol en grupo y sólo",
                                  "d"=>"El consumo de drogas afecta negativamente su comportamiento y funcionamiento en general",
                                  "e"=>"Consume solventes volátiles o pasta base",
                                  "f"=>"Presenta conductas delictivas asociadas a la dependencia de droga");?>

          <?php foreach ($array_f9 as $indice => $valor):?>
       <div class="grid-8-12">
                               <label class="form-lbl-V-or-F">
            <?php echo $indice.".-".$valor.$html;?>
			  <a href="#" class="9<?php echo $indice;?>trigger"><IMG src="/images/question-white.png" /></a>
                     </label>
       </div>
       <div class="grid-4-12">
             <ul class="form-list-rdo">
               <li><input type="radio" value="Si" name="<?php echo $fx.$indice;?>" class="botonradio"><label class="form-lbl">Si</label></li>
               <li><input type="radio" value="No" name="<?php echo $fx.$indice;?>" class="botonradio"><label class="form-lbl">No</label></li>
               <li><input type="radio" value="NI" name="<?php echo $fx.$indice;?>" class="botonradio" checked><label class="form-lbl">NI</label></li>
             </ul>
       </div><div class="clear"></div>

          <?php endforeach ?>

       <div class="grid-3-12"></div>
       <div class="grid-5-12 f5total">
                              Total F-9 Drogas
       </div>
       <div id="totalf9" class="grid-1-12 f5resultado">0</div>
       <div class="grid-3-12"></div>
       <div class="clear"></div>





      </div>

    <div id="tabBloque10">

    <?php
    $fx='f10';
    $array_f10=array(
                                  "a"=>"Suele subestimar sus aciertos. Baja autoestima ",
                                  "b"=>"Actitud pasiva ante situaciones problema.",
                                  "c"=>"Ha manifestado conductas autodestructivas o suicidas",
                                  "d"=>"No busca ayuda",
                                  "e"=>"Incapacidad para aceptar que lo que desea  salga mal. Baja tolerancia a la frustración",
                                  "f"=>"Actitud agresiva, verbal, o corporal. Rabia constante",
                                  "g"=>"Poco sensible a problemas de otros, indiferente");
    ?>

          <?php foreach ($array_f10 as $indice => $valor):?>
       <div class="grid-8-12">
                               <label class="form-lbl-V-or-F">
               <?php echo $indice.".-".$valor.$html;?>
			  <a href="#" class="10<?php echo $indice;?>trigger"><IMG src="/images/question-white.png" /></a>
                     </label>
       </div>
       <div class="grid-4-12">
             <ul class="form-list-rdo">
               <li><input type="radio" value="Si" name="<?php echo $fx.$indice;?>" class="botonradio"><label class="form-lbl">Si</label></li>
                <li><input type="radio" value="No" name="<?php echo $fx.$indice;?>" class="botonradio" ><label class="form-lbl">No</label></li>
               <li><input type="radio" value="NI" name="<?php echo $fx.$indice;?>" class="botonradio" checked><label class="form-lbl">NI</label></li>
             </ul>
       </div><div class="clear"></div>

          <?php endforeach ?>

       <div class="grid-3-12"></div>
       <div class="grid-5-12 f5total">
                              Total F-10 Actitudes y tendencias manifiestas
       </div>
       <div id="totalf10" class="grid-1-12 f5resultado">0</div>
       <div class="grid-3-12"></div>
       <div class="clear"></div>
    </div>

    <div id="tabBloque11">

    <?php
    $fx='f11';
    $array_f11=array(
                                  "a"=>"Se muestra con buenos recursos cognitivos para comprender y pensar sobre si mismo y su realidad",
                                  "b"=>"Muestra habilidades sociales con sus pares. Se comunica muy bien ",
                                  "c"=>"Muestra habilidades sociales para comunicarse con adultos",
                                  "d"=>"Solicita activamente colaboración o ayuda cuando lo necesita ",
                                  "e"=>"Acepta la ayuda que se le ofrece y participa",
                                  "f"=>"Muestra una valoración positiva de sí mismo",
                                  "g"=>"Demuestra una actitud positiva, es optimista ante el futuro",
                                  "h"=>"Habla con frecuencia de algún sueño o meta que le gustaría realizar en el futuro",
                                  "i"=>"Amigos o pares se preocupan por él o ella",
                                  "j"=>"Los miembros de la familia están constantemente preguntando por él o ella",
                                  "k"=>"La familia participa activamente en su comunidad",
                                  "l"=>"El o ella refiere importantes vínculos afectivos con miembros de su familia",
                                  "m"=>"Muestra vínculos significativo con otro adulto que actúa como guía o apoyo (puede ser parte del sistema asistencial)",
                                  "n"=>"Muestra estrategias o conductas concretas dirigidas a resolver los problemas que enfrenta");
    ?>

          <?php foreach ($array_f11 as $indice => $valor):?>
       <div class="grid-8-12">
                               <label class="form-lbl-V-or-F">
               <?php echo $indice.".-".$valor.$html;?>
			  <a href="#" class="11<?php echo $indice;?>trigger"><IMG src="/images/question-white.png" /></a>
                     </label>
       </div>
       <div class="grid-4-12">
             <ul class="form-list-rdo">
               <li><input type="radio" value="Si" name="<?php echo $fx.$indice;?>" class="botonradio"><label class="form-lbl">Si</label></li>
               <li><input type="radio" value="No" name="<?php echo $fx.$indice;?>" class="botonradio" ><label class="form-lbl">No</label></li>
               <li><input type="radio" value="NI" name="<?php echo $fx.$indice;?>" class="botonradio" checked><label class="form-lbl">NI</label></li>
             </ul>
       </div><div class="clear"></div>

          <?php endforeach ?>

       <div class="grid-3-12"></div>
       <div class="grid-5-12 f5total">
                              Total F-11a Recursos personales activos y  vinculación afectiva
       </div>
       <div id="totalf11_a" class="grid-1-12 f5resultado">0</div>
       <div class="grid-3-12"></div>
       <div class="clear"></div>


       <div class="grid-3-12"></div>
       <div class="grid-5-12 f5total">
                              Total F-11b Competencias cognitivas y sociales
       </div>
       <div id="totalf11_b" class="grid-1-12 f5resultado">0</div>
       <div class="grid-3-12"></div>
       <div class="clear"></div>

       <div class="grid-3-12"></div>
       <div class="grid-5-12 f5total">
                              Total F-11c Vinculación familiar
       </div>
       <div id="totalf11_c" class="grid-1-12 f5resultado">0</div>
       <div class="grid-3-12"></div>
       <div class="clear"></div>


       <div class="grid-3-12"></div>
       <div class="grid-5-12 f5total">
                              Total F-11 Recursos Protectores
       </div>
       <div id="totalf11_d" class="grid-1-12 f5resultado">0</div>
       <div class="grid-3-12"></div>
       <div class="clear"></div>

      </div>
      </div>
    <?php else: ?>
    <div class="ui-widget">
                                    <div style="margin-top: 20px; padding: 0pt 0.7em;" class="ui-state-highlight ui-corner-all">
                                            <p><span style="float: left; margin-right: 0.3em;" class="ui-icon ui-icon-info"></span>
                                            <strong>"</strong>El cuestionario ha sido completado.<strong>"</strong></p>
                                    </div>
    </div>
    <br>
    <?php endif; ?>

    <!-- Comienzo Botón envio de formulario, en caso de ser último bloque advierte que se cerrará el formulario si se continua -->
    <?php if(!($es_ultimo_bloque)): ?>
    <div class="grid-4-12">
      <a class="form-button-off form-left" style="display: block;" href="<?php echo url_for('principal/dashboard?idEncuestado='.$idEncuestado);?>" onclick="return confirm('Al salir del formulario perderás la información que hayas respondido en la pantalla actual. ¿Estas seguro que deseas salir del formulario actual?');"><- Volver al menú</a>
    </div>
    <div class="grid-4-12">
      <button class="form-button" type="submit" name="Guardar"><span class="ui-icon ui-icon-disk" style="float:left;"></span>Guardar</button>
    </div>
    <div class="grid-4-12">
      <?php if($porcCompletado>=100):?><!-- Solo si el procentaje de avance es 100%muestro el botón para finalizar el formulario -->
      <button class="form-button-off" type="button" name="Finalizar" onclick = "finalizarFERR();"><span class="ui-icon ui-icon-circle-check" style="float:left;"></span>Finalizar Formulario</button>
      <input type="text" name="esCerrarForm" id="esCerrarForm" style="display: none" value="NOCERRAR"/>
      <?php endif; ?>
    </div><div class="clear"></div>

    <?php else: ?>
    <div class="grid-4-12"></div>
    <div class="grid-4-12">
      <a class="form-button form-right" href="<?php echo url_for('principal/dashboard?idEncuestado='.$idEncuestado);?>"><- Volver al menú</a>
    </div>
    <div class="grid-4-12"></div><div class="clear"></div>
    <?php endif; ?>
    <!-- Fin Botón envio de formulario, en caso de ser último bloque advierte que se cerrará el formulario si se continua -->
    </form>
    <br>
<!-- MODALS-->	
<!-- PESTAÑA1-->
  <div class="jqmWindow" id="edad">
<img src="/images/loading-image.gif" />
</div>
  <div class="jqmWindow" id="dcp">
<img src="/images/loading-image.gif" />
</div>  <div class="jqmWindow" id="dcif">
<img src="/images/loading-image.gif" />
</div>
   <div class="jqmWindow" id="anosdes">
<img src="/images/loading-image.gif" />
</div>
  <div class="jqmWindow" id="polimorfismo1">
<img src="/images/loading-image.gif" />
</div>  <div class="jqmWindow" id="edelictiva1">
<img src="/images/loading-image.gif" />
</div>
  
</div>  <div class="jqmWindow" id="obs1">
<img src="/images/loading-image.gif" />
</div>  <div class="jqmWindow" id="iedsd">
<img src="/images/loading-image.gif" />
</div>  <div class="jqmWindow" id="iedsp">
<img src="/images/loading-image.gif" />
</div> 	
<!-- PESTAÑA2-->
	</div>  <div class="jqmWindow" id="viveactual">
<img src="/images/loading-image.gif" />
</div>  <div class="jqmWindow" id="vinculos">
<img src="/images/loading-image.gif" />
</div>  <div class="jqmWindow" id="autoreporte">
<img src="/images/loading-image.gif" />
</div> 	

</div>  <div class="jqmWindow" id="genograma">
<img src="/images/loading-image.gif" />
</div> 	
<!-- PESTAÑA3-->
	</div>  <div class="jqmWindow" id="prevencion">
<img src="/images/loading-image.gif" />

</div>  <div class="jqmWindow" id="internacion">
<img src="/images/loading-image.gif" />
</div>  <div class="jqmWindow" id="rpa">
<img src="/images/loading-image.gif" />
</div> 	
</div>  <div class="jqmWindow" id="iai">
<img src="/images/loading-image.gif" />
</div>  <div class="jqmWindow" id="semicerrado">
<img src="/images/loading-image.gif" />
</div> 	
</div>  <div class="jqmWindow" id="sistemacerrado">
<img src="/images/loading-image.gif" /></div> 
<div class="jqmWindow" id="ntotal">
<img src="/images/loading-image.gif" /></div> 
<!-- PESTAÑA4-->
<div class="jqmWindow" id="4a">
<img src="/images/loading-image.gif" />
</div>
  <div class="jqmWindow" id="4b">
<img src="/images/loading-image.gif" />
</div>  
<div class="jqmWindow" id="4c">
<img src="/images/loading-image.gif" />
</div>
 <div class="jqmWindow" id="4d">
<img src="/images/loading-image.gif" />
</div>
<!-- PESTAÑA5-->
<div class="jqmWindow" id="5a">
<img src="/images/loading-image.gif" />
</div>
  <div class="jqmWindow" id="5b">
<img src="/images/loading-image.gif" />
</div>  
<div class="jqmWindow" id="5c">
<img src="/images/loading-image.gif" />
</div>
 <div class="jqmWindow" id="5d">
<img src="/images/loading-image.gif" />
</div>
<div class="jqmWindow" id="5g">
<img src="/images/loading-image.gif" />
</div>
  <div class="jqmWindow" id="5e">
<img src="/images/loading-image.gif" />
</div>  
<div class="jqmWindow" id="5f">
<img src="/images/loading-image.gif" />
</div>
 <div class="jqmWindow" id="5h">
<img src="/images/loading-image.gif" />
</div>
<div class="jqmWindow" id="5i">
<img src="/images/loading-image.gif" />
</div>
 <div class="jqmWindow" id="5j">
<img src="/images/loading-image.gif" />
</div>
<!-- PESTAÑA6-->
<div class="jqmWindow" id="6a">
<img src="/images/loading-image.gif" />
</div>
  <div class="jqmWindow" id="6b">
<img src="/images/loading-image.gif" />
</div>  
<div class="jqmWindow" id="6c">
<img src="/images/loading-image.gif" />
</div>
 <div class="jqmWindow" id="6d">
<img src="/images/loading-image.gif" />
</div>
<div class="jqmWindow" id="6e">
<img src="/images/loading-image.gif" />
</div>

<!-- PESTAÑA7-->

<div class="jqmWindow" id="7a">
<img src="/images/loading-image.gif" />
</div>
  <div class="jqmWindow" id="7b">
<img src="/images/loading-image.gif" />
</div>  
<div class="jqmWindow" id="7c">
<img src="/images/loading-image.gif" />
</div>
 <div class="jqmWindow" id="7d">
<img src="/images/loading-image.gif" />
</div>
  <div class="jqmWindow" id="7e">
<img src="/images/loading-image.gif" />
</div> 
<div class="jqmWindow" id="7f">
<img src="/images/loading-image.gif" />
</div> 
<div class="jqmWindow" id="7g">
<img src="/images/loading-image.gif" />
</div>
 <div class="jqmWindow" id="7h">
<img src="/images/loading-image.gif" />
</div>
<div class="jqmWindow" id="7i">
<img src="/images/loading-image.gif" />
</div>
 <div class="jqmWindow" id="7j">
<img src="/images/loading-image.gif" />
</div>
 <div class="jqmWindow" id="7k">
<img src="/images/loading-image.gif" />
</div>
<div class="jqmWindow" id="7l">
<img src="/images/loading-image.gif" />
</div>
<div class="jqmWindow" id="7m">
<img src="/images/loading-image.gif" />
</div>
<div class="jqmWindow" id="7n">
<img src="/images/loading-image.gif" />
</div>
<div class="jqmWindow" id="7k">
<img src="/images/loading-image.gif" />
</div>
<div class="jqmWindow" id="7p">
<img src="/images/loading-image.gif" />
</div>
<div class="jqmWindow" id="7q">
<img src="/images/loading-image.gif" />
</div>

<!-- PESTAÑA8-->
<div class="jqmWindow" id="8a">
<img src="/images/loading-image.gif" />
</div>
  <div class="jqmWindow" id="8b">
<img src="/images/loading-image.gif" />
</div>  
<div class="jqmWindow" id="8c">
<img src="/images/loading-image.gif" />
</div>
 <div class="jqmWindow" id="8d">
<img src="/images/loading-image.gif" />
</div>
  <div class="jqmWindow" id="8e">
<img src="/images/loading-image.gif" />
</div> 
<!-- PESTAÑA9-->
<div class="jqmWindow" id="9a">
<img src="/images/loading-image.gif" />
</div>
  <div class="jqmWindow" id="9b">
<img src="/images/loading-image.gif" />
</div>  
<div class="jqmWindow" id="9c">
<img src="/images/loading-image.gif" />
</div>
 <div class="jqmWindow" id="9d">
<img src="/images/loading-image.gif" />
</div>
  <div class="jqmWindow" id="9e">
<img src="/images/loading-image.gif" />
</div> 
<div class="jqmWindow" id="9f">
<img src="/images/loading-image.gif" />
</div> 
<!-- PESTAÑA10-->
<div class="jqmWindow" id="10a">
<img src="/images/loading-image.gif" />
</div>
  <div class="jqmWindow" id="10b">
<img src="/images/loading-image.gif" />
</div>  
<div class="jqmWindow" id="10c">
<img src="/images/loading-image.gif" />
</div>
 <div class="jqmWindow" id="10d">
<img src="/images/loading-image.gif" />
</div>
  <div class="jqmWindow" id="10e">
<img src="/images/loading-image.gif" />
</div> 
<div class="jqmWindow" id="10f">
<img src="/images/loading-image.gif" />
</div> 
<div class="jqmWindow" id="10g">
<img src="/images/loading-image.gif" />
</div>
<!-- PESTAÑA11-->
<div class="jqmWindow" id="11a">
<img src="/images/loading-image.gif" />
</div>
  <div class="jqmWindow" id="11b">
<img src="/images/loading-image.gif" />
</div>  
<div class="jqmWindow" id="11c">
<img src="/images/loading-image.gif" />
</div>
 <div class="jqmWindow" id="11d">
<img src="/images/loading-image.gif" />
</div>
  <div class="jqmWindow" id="11e">
<img src="/images/loading-image.gif" />
</div> 
<div class="jqmWindow" id="11f">
<img src="/images/loading-image.gif" />
</div> 
<div class="jqmWindow" id="11g">
<img src="/images/loading-image.gif" />
</div>
 <div class="jqmWindow" id="11h">
<img src="/images/loading-image.gif" />
</div>
<div class="jqmWindow" id="11i">
<img src="/images/loading-image.gif" />
</div>
 <div class="jqmWindow" id="11j">
<img src="/images/loading-image.gif" />
</div>
 <div class="jqmWindow" id="11k">
<img src="/images/loading-image.gif" />
</div>
<div class="jqmWindow" id="11l">
<img src="/images/loading-image.gif" />
</div>
<div class="jqmWindow" id="11m">
<img src="/images/loading-image.gif" />
</div>
<div class="jqmWindow" id="11n">
<img src="/images/loading-image.gif" />
</div>

<!-- Fin código diálogo de instrucciones
confirm('¿Desea Cancelar y volver a incidencia?')
-->
</div><!-- Fin contenido -->
<script type="text/javascript">
                $().ready(function() {
                     $("form").loadJSON(<?php echo $sf_data->getRaw('respuestasGuardadas');?>);
                     $("#msgzone").hide();
                     $("#contenido").show();
                });
</script>