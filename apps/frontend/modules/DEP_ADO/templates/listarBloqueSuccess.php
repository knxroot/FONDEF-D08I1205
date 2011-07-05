<?php slot('title') ?>
  <?php  echo "Formulario DEP-ADO ({$porcCompletado} % completado)";?>
<?php end_slot(); ?>

<?php $url_next_post=url_for('DEP_ADO/proximoBloque?idEncuestado='.$idEncuestado);?>

<form id="formulario_DEP_ADO" name="formulario_DEP_ADO" class="form" method="post" action="<?php echo $url_next_post; ?>">
  <?php if($porcCompletado!=100): ?>
  <div class="grid-12-12 ui-widget-header ui-corner-all" style="position: relative;">Formulario DEP_ADO - <?php echo $porcCompletado; ?> % completado
  </div>
  <div class="grid-12-12">
    <br>
    <b>1.- Durante los <u>últimos 12 meses</u> ¿has consumido alguno de estos productos?; si es así ¿Cuál ha sido la frecuencia de tu consumo?.</b>
  </div>
  <div class="clear"></div>
  <br><br>
  
  <div class="grid-12-12 contenedor_tabla">
    <div class="grid-12-12 cabecera_tabla_ploma">
      <div class="grid-3-12"></div>
      <div class="grid-1-12">No ha consumido</div>
      <div class="grid-1-12">En ocasiones</div>
      <div class="grid-2-12">Alrededor de una vez al mes</div>
      <div class="grid-2-12">El fin de semana o una o dos veces en la semana</div>
      <div class="grid-2-12">3 veces y más en la semana, pero no todos los días</div>
      <div class="grid-1-12">Todos los días</div>
    </div>

    <div class="grid-12-12">
      <div class="grid-3-12"><b>Alcohol</b></div>
      <div class="grid-1-12"><input type="radio" class="botonradio" name="1" value="No ha consumido" /></div>
      <div class="grid-1-12"><input type="radio" class="botonradio" name="1" value="En ocasiones" /></div>
      <div class="grid-2-12"><input type="radio" class="botonradio" name="1" value="Alrededor de una vez al mes" /></div>
      <div class="grid-2-12"><input type="radio" class="botonradio" name="1" value="El fin de semana o una o dos veces en la semana" /></div>
      <div class="grid-2-12"><input type="radio" class="botonradio" name="1" value="3 veces y más en la semana, pero no todos los días" /></div>
      <div class="grid-1-12"><input type="radio" class="botonradio" name="1" value="Todos los dias" /></div>
    </div>

    <div class="grid-12-12 tabla_columna_par">
      <div class="grid-3-12"><b>Marihuana</b> <small>(ej.: yerba, pito, caña, huiro, macoña, etc.)</small></div>
      <div class="grid-1-12"><input type="radio" class="botonradio" name="2" value="No ha consumido" /></div>
      <div class="grid-1-12"><input type="radio" class="botonradio" name="2" value="En ocasiones" /></div>
      <div class="grid-2-12"><input type="radio" class="botonradio" name="2" value="Alrededor de una vez al mes" /></div>
      <div class="grid-2-12"><input type="radio" class="botonradio" name="2" value="El fin de semana o una o dos veces en la semana" /></div>
      <div class="grid-2-12"><input type="radio" class="botonradio" name="2" value="3 veces y más en la semana, pero no todos los días" /></div>
      <div class="grid-1-12"><input type="radio" class="botonradio" name="2" value="Todos los dias" /></div>
    </div>

    <div class="grid-12-12">
      <div class="grid-3-12"><b>Cocaina</b> <small>(ej: coca, haley, raya, pasta base, línea, angustia, etc.)</small></div>
      <div class="grid-1-12"><input type="radio" class="botonradio" name="3" value="No ha consumido" /></div>
      <div class="grid-1-12"><input type="radio" class="botonradio" name="3" value="En ocasiones" /></div>
      <div class="grid-2-12"><input type="radio" class="botonradio" name="3" value="Alrededor de una vez al mes" /></div>
      <div class="grid-2-12"><input type="radio" class="botonradio" name="3" value="El fin de semana o una o dos veces en la semana" /></div>
      <div class="grid-2-12"><input type="radio" class="botonradio" name="3" value="3 veces y más en la semana, pero no todos los días" /></div>
      <div class="grid-1-12"><input type="radio" class="botonradio" name="3" value="Todos los dias" /></div>
    </div>

    <div class="grid-12-12 tabla_columna_par">
      <div class="grid-3-12"><b>Pegamento/solvente</b> <small>(ej.: neopren, bencina, laca, etc.)</small></div>
      <div class="grid-1-12"><input type="radio" class="botonradio" name="4" value="No ha consumido" /></div>
      <div class="grid-1-12"><input type="radio" class="botonradio" name="4" value="En ocasiones" /></div>
      <div class="grid-2-12"><input type="radio" class="botonradio" name="4" value="Alrededor de una vez al mes" /></div>
      <div class="grid-2-12"><input type="radio" class="botonradio" name="4" value="El fin de semana o una o dos veces en la semana" /></div>
      <div class="grid-2-12"><input type="radio" class="botonradio" name="4" value="3 veces y más en la semana, pero no todos los días" /></div>
      <div class="grid-1-12"><input type="radio" class="botonradio" name="4" value="Todos los dias" /></div>
    </div>

    <div class="grid-12-12">
      <div class="grid-3-12"><b>Alucinógenos</b> <small>(ej.: LSD, PCP, éxtasis, floripondio, peyote, etc.)</small></div>
      <div class="grid-1-12"><input type="radio" class="botonradio" name="5" value="No ha consumido" /></div>
      <div class="grid-1-12"><input type="radio" class="botonradio" name="5" value="En ocasiones" /></div>
      <div class="grid-2-12"><input type="radio" class="botonradio" name="5" value="Alrededor de una vez al mes" /></div>
      <div class="grid-2-12"><input type="radio" class="botonradio" name="5" value="El fin de semana o una o dos veces en la semana" /></div>
      <div class="grid-2-12"><input type="radio" class="botonradio" name="5" value="3 veces y más en la semana, pero no todos los días" /></div>
      <div class="grid-1-12"><input type="radio" class="botonradio" name="5" value="Todos los dias" /></div>
    </div>

    <div class="grid-12-12 tabla_columna_par">
      <div class="grid-3-12"><b>Heroina</b> <small>(ej.: smack)</small></div>
      <div class="grid-1-12"><input type="radio" class="botonradio" name="6" value="No ha consumido" /></div>
      <div class="grid-1-12"><input type="radio" class="botonradio" name="6" value="En ocasiones" /></div>
      <div class="grid-2-12"><input type="radio" class="botonradio" name="6" value="Alrededor de una vez al mes" /></div>
      <div class="grid-2-12"><input type="radio" class="botonradio" name="6" value="El fin de semana o una o dos veces en la semana" /></div>
      <div class="grid-2-12"><input type="radio" class="botonradio" name="6" value="3 veces y más en la semana, pero no todos los días" /></div>
      <div class="grid-1-12"><input type="radio" class="botonradio" name="6" value="Todos los dias" /></div>
    </div>

    <div class="grid-12-12">
      <div class="grid-3-12"><b>Anfetaminas / speed</b> <small>(ej.: anfeta, pepa, tonaril, etc.)</small></div>
      <div class="grid-1-12"><input type="radio" class="botonradio" name="7" value="No ha consumido" /></div>
      <div class="grid-1-12"><input type="radio" class="botonradio" name="7" value="En ocasiones" /></div>
      <div class="grid-2-12"><input type="radio" class="botonradio" name="7" value="Alrededor de una vez al mes" /></div>
      <div class="grid-2-12"><input type="radio" class="botonradio" name="7" value="El fin de semana o una o dos veces en la semana" /></div>
      <div class="grid-2-12"><input type="radio" class="botonradio" name="7" value="3 veces y más en la semana, pero no todos los días" /></div>
      <div class="grid-1-12"><input type="radio" class="botonradio" name="7" value="Todos los dias" /></div>
    </div>

    <div class="grid-12-12 tabla_columna_par">
      <div id="opcion_otros" class="grid-3-12"><div style="width: 80%;" id="texto_otros"><b>Otros *</b></div></div>
      <div class="grid-1-12"><input type="radio" name="8" class="botonradio" value="No ha consumido" /></div>
      <div class="grid-1-12"><input type="radio" name="8" class="botonradio" value="En ocasiones" /></div>
      <div class="grid-2-12"><input type="radio" name="8" class="botonradio" value="Alrededor de una vez al mes" /></div>
      <div class="grid-2-12"><input type="radio" name="8" class="botonradio" value="El fin de semana o una o dos veces en la semana" /></div>
      <div class="grid-2-12"><input type="radio" name="8" class="botonradio" value="3 veces y más en la semana, pero no todos los días" /></div>
      <div class="grid-1-12"><input type="radio" name="8" class="botonradio" value="Todos los dias" /></div>
    </div>
  </div>
  <div class="clear"></div>

  <!-- CP2 -->
  <div class="grid-12-12">
    <b>2.-</b>
    <br>
    <div class="grid-8-12">
      <b>a) <u>Durante tu vida </u>¿Has consumido alguna vez uno de estos productos en forma regular?</b>
    </div>
    <div class="grid-3-12">
        <ul class="form-list-rdo">
          <li><input type="radio" value="Si" name="9" class="botonradio"><label class="form-lbl">Si</label></li>
          <li><input type="radio" value="No" name="9" class="botonradio"><label class="form-lbl">No</label></li>
        </ul>
    </div>
    <div class="grid-1-12"></div>
    <div class="clear"></div>

    <div id="pregunta2b" style="display: none;">
      <div class="grid-12-12">
        <b>b) A que edad comenzaste a consumir <u>regularmente</u>?</b> <small>(regularmente se considera una vez por semana, por lo menos durante un mes)</small>
      </div><div class="clear"></div>
      <div class="grid-12-12">
        <div class="grid-8-12"></div>
        <div class="grid-2-12"><input type="checkbox" name="esAlchol" value="OFF" /> Alcohol</div>
        <div class="grid-1-12"><input class="form-txt" type="text" name="esAlcoholANOS" value="" size="45px"/></div><div class="grid-1-12">Años </div>
      </div><div class="clear"></div>

      <div class="grid-12-12">
        <div class="grid-8-12"></div>
        <div class="grid-2-12"><input type="checkbox" name="esUnaOVariasDrogas" value="OFF" /> Una o varias drogas</div>
        <div class="grid-1-12"><input class="form-txt" type="text" name="esUnaOVariasDrogasANOS" value="" size="45px"/></div><div class="grid-1-12">Años </div>
      </div><div class="clear"></div>
    </div>
  </div>
  <!-- FP2 -->

  <!-- CP3 -->
  <div id="pregunta3" class="grid-12-12">
    <b>3.-</b>
    <br>
    <div class="grid-8-12">
      <b><u>Durante tu vida</u>. ¿Te has inyectado drogas alguna vez?</b>
    </div>
    <div class="grid-3-12">
        <ul class="form-list-rdo">
          <li><input type="radio" value="Si" name="11" class="botonradio"><label class="form-lbl">Si</label></li>
          <li><input type="radio" value="No" name="11" class="botonradio"><label class="form-lbl">No</label></li>
        </ul>
    </div>
    <div class="grid-1-12"></div><div class="clear"></div>
  </div>
  <!-- FP3 -->

  <!-- CP4 -->
  <div id="pregunta4" class="grid-12-12">
    <b>4.-</b>
    <br>
    <div class="grid-8-12">
      <b>¿Has consumido alcohol u otras drogas en los <u>30 últimos días</u>?</b>
    </div>
    <div class="grid-3-12">
        <ul class="form-list-rdo">
          <li><input type="radio" value="Si" name="12" class="botonradio2"><label class="form-lbl">Si</label></li>
          <li><input type="radio" value="No" name="12" checked="" class="botonradio2"><label class="form-lbl">No</label></li>
        </ul>
    </div>
    <div class="grid-1-12"></div><div class="clear"></div>
  </div>
  <!-- FP4 -->

  <!-- CP5 -->
  <div id="pregunta5" class="grid-12-12">
    <b>5.-</b>
    <br>
    <div id="pregunta5a">
      <div class="grid-10-12">
        <b>a) <u>Joven Varón</u></b> En los últimos 12 meses ¿cuántas veces has consumido 8 unidades de alcohol o más en una misma ocasión?
      </div>
      <div class="grid-1-12"><input class="form-txt" type="text" name="13" value="0" size="45px"/></div><div class="grid-1-12">Nº de veces</div>
      <div class="clear"></div>
    </div>
    <br>
    <div id="pregunta5b">
      <div class="grid-10-12">
        <b>b) <u>Joven Dama</u></b> En los últimos 12 meses ¿cuántas veces has consumido 5 unidades de alcohol o más en una misma ocasión?
      </div>
      <div class="grid-1-12"><input class="form-txt" type="text" name="14" value="0" size="45px"/></div><div class="grid-1-12">Nº de veces</div>
      <div class="clear"></div>
    </div>
  </div><div class="clear"></div>
  <!-- FP5 -->

  <!-- CP6 -->
  <div id="pregunta6" class="grid-12-12">
    <b>6.- <u>En los últimos 12 meses,</u> ¿te ha sucedido algunas de las siguientes situaciones?</b>
    <br><br>
    <div id="pregunta6a">
      <div class="grid-10-12">
        a) Se ha dañado tu salud física debido a tu consumo de alcohol u otras drogas <small>(Ej.:  Problemas digestivos, sobredosis, infecciones, irritación nasal, lesiones, etc.)</small>
      </div>
      <div class="grid-2-12">
        <ul class="form-list-rdo">
          <li><input type="radio" value="Si" name="15" class="botonradio2"><label class="form-lbl">Si</label></li>
          <li><input type="radio" value="No" name="15" checked="" class="botonradio2"><label class="form-lbl">No</label></li>
        </ul>
      </div>
      <div class="clear"></div>
    </div>
    <br>
    <div id="pregunta6b">
      <div class="grid-10-12">
        b) Has tenido dificultades psicológicas debido a tu consumo de alcohol u otras drogas <small>(Ej.: ansiedad, depresión, problemas de concentración, pensamientos suicidas, etc.)</small>
      </div>
      <div class="grid-2-12">
        <ul class="form-list-rdo">
          <li><input type="radio" value="Si" name="16" class="botonradio2"><label class="form-lbl">Si</label></li>
          <li><input type="radio" value="No" name="16" checked="" class="botonradio2"><label class="form-lbl">No</label></li>
        </ul>
      </div>
      <div class="clear"></div>
    </div>

    <br>
    <div id="pregunta6c">
      <div class="grid-10-12">
        c) Tu consumo de alcohol  u otras drogas ha dañado tus relaciones familiares
      </div>
      <div class="grid-2-12">
        <ul class="form-list-rdo">
          <li><input type="radio" value="Si" name="17" class="botonradio2"><label class="form-lbl">Si</label></li>
          <li><input type="radio" value="No" name="17" checked="" class="botonradio2"><label class="form-lbl">No</label></li>
        </ul>
      </div>
      <div class="clear"></div>
    </div>

    <br>
    <div id="pregunta6d">
      <div class="grid-10-12">
        d) Tu consumo de alcohol u otras drogas ha dañado a una de tus amistades o tu relación amorosa
      </div>
      <div class="grid-2-12">
        <ul class="form-list-rdo">
          <li><input type="radio" value="Si" name="18" class="botonradio2"><label class="form-lbl">Si</label></li>
          <li><input type="radio" value="No" name="18" checked="" class="botonradio2"><label class="form-lbl">No</label></li>
        </ul>
      </div>
      <div class="clear"></div>
    </div>


    <br>
    <div id="pregunta6e">
      <div class="grid-10-12">
        e) Has tenido dificultad en la escuela por tu consumo de alcohol u otras drogas <small>(Ej.: Falta a clases, suspensión,  baja de notas, falta de motivación, etc.)</small>
      </div>
      <div class="grid-2-12">
        <ul class="form-list-rdo">
          <li><input type="radio" value="Si" name="19" class="botonradio2"><label class="form-lbl">Si</label></li>
          <li><input type="radio" value="No" name="19" checked="" class="botonradio2"><label class="form-lbl">No</label></li>
        </ul>
      </div>
      <div class="clear"></div>
    </div>

    <br>
    <div id="pregunta6f">
      <div class="grid-10-12">
        f) Has gastado o perdido mucho dinero debido a tu consumo de alcohol  u otras drogas
      </div>
      <div class="grid-2-12">
        <ul class="form-list-rdo">
          <li><input type="radio" value="Si" name="20" class="botonradio2"><label class="form-lbl">Si</label></li>
          <li><input type="radio" value="No" name="20" checked="" class="botonradio2"><label class="form-lbl">No</label></li>
        </ul>
      </div>
      <div class="clear"></div>
    </div>

    <br>
    <div id="pregunta6g">
      <div class="grid-10-12">
        g) Has cometido delitos mientras consumías alcohol  u otras drogas, aún si la policía no te detuvo <small>(Ej.: robo, herir a alguien ,vandalismo, venta de drogas, manejar auto con facultades debilitadas, etc.)</small>
      </div>
      <div class="grid-2-12">
        <ul class="form-list-rdo">
          <li><input type="radio" value="Si" name="21" class="botonradio2"><label class="form-lbl">Si</label></li>
          <li><input type="radio" value="No" name="21" checked="" class="botonradio2"><label class="form-lbl">No</label></li>
        </ul>
      </div>
      <div class="clear"></div>
    </div>

    <br>
    <div id="pregunta6h">
      <div class="grid-10-12">
        h) Has tomado riesgos mientras consumías alcohol o drogas <small>(Ej.: relaciones sexuales sin protección, o inverosímiles para un  joven, conducir una bicicleta o actividad deportiva estando intoxicado, etc.)</small>
      </div>
      <div class="grid-2-12">
        <ul class="form-list-rdo">
          <li><input type="radio" value="Si" name="22" class="botonradio2"><label class="form-lbl">Si</label></li>
          <li><input type="radio" value="No" name="22" checked="" class="botonradio2"><label class="form-lbl">No</label></li>
        </ul>
      </div>
      <div class="clear"></div>
    </div>

    <br>
    <div id="pregunta6i">
      <div class="grid-10-12">
        i) Tienes la impresión que las mismas cantidades de alcohol u otras drogas hacen menos efecto en  ti
      </div>
      <div class="grid-2-12">
        <ul class="form-list-rdo">
          <li><input type="radio" value="Si" name="23" class="botonradio2"><label class="form-lbl">Si</label></li>
          <li><input type="radio" value="No" name="23" checked="" class="botonradio2"><label class="form-lbl">No</label></li>
        </ul>
      </div>
      <div class="clear"></div>
    </div>

    <br>
    <div id="pregunta6j">
      <div class="grid-10-12">
        j) Has hablado de tu consumo de alcohol u otras drogas con un operador social
      </div>
      <div class="grid-2-12">
        <ul class="form-list-rdo">
          <li><input type="radio" value="Si" name="24" class="botonradio2"><label class="form-lbl">Si</label></li>
          <li><input type="radio" value="No" name="24" checked="" class="botonradio2"><label class="form-lbl">No</label></li>
        </ul>
      </div>
      <div class="clear"></div>
    </div>

  </div><div class="clear"></div>
  <!-- FP6 -->

  <!-- CP7 -->
  <div id="pregunta7" class="grid-12-12">
    <b>7.- ¿Cuál ha sido tu consumo de tabaco en los <u>últimos 12 meses</u>?</b>
    <br><br>
    <div class="grid-6-12">
      <input type="radio" name="25" class="botonradio" value="Sin Consumo" />Sin Consumo <br>
      <input type="radio" name="25"  class="botonradio"  value="En ocasiones " />En ocasiones <br>
      <input type="radio" name="25"  class="botonradio" value="Alrededor de una vez al mes" />Alrededor de una vez al mes <br>
    </div>
    <div class="grid-6-12">
      <input type="radio" name="25"  class="botonradio"  value="El fin de semana o una a dos veces por semana" />El fin de semana o una a dos veces por semana<br>
      <input type="radio" name="25"  class="botonradio"  value="3 veces y + por semana pero no todos los días" />3 veces y + por semana pero no todos los días<br>
      <input type="radio" name="25"  class="botonradio" value="Todos los días" />Todos los días<br>
    </div>
  </div><div class="clear"></div><br><br>
  <!-- FP7 -->

  <!-- Comienzo Bloque Dialogo añadir comentario -->
  <div id="dialogo-addcomentario" style="display: none;" title="Agregar comentario">
    <p>A continuación agrega un comentario a la pregunta <i id="dialog_i_pregunta_referencia" class="referencia_pregunta"> ERROR RECARGE LA PAGINA PORFAVOR</i></p>
    <div  style="margin:auto; padding:auto;width:500px;">
      <div style="height:25px">

        <div style="float:left"><b>Comentario</b></div>
        <div id="barbox">
          <div id="progressbar"></div>
        </div>
        <div id="count">280</div>
      </div>
      <p>
        <textarea id="text_area_input_comentario" class="ui-corner-all" title="Porfavor escribe aqui tu comentario"></textarea>
      </p>
    </div>
  </div>
<!-- Fin Bloque Dialogo añadir comentario -->
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
<a class="form-button-off form-left" style="display: block;" href="<?php echo url_for('principal/dashboard?idEncuestado='.$idEncuestado);?>" onclick="return confirm('Al salir del formulario perderás la información que hayas respondido en la pantalla actual. ¿Estas seguro que deseas salir del formulario actual?');"><- Volver al menú</a>
<input type="submit" value="Finalizar" title="enviar" class="form-button form-right">
<!-- Fin Botón envio de formulario, en caso de ser último bloque advierte que se cerrará el formulario si se continua -->
</form>
<br>

<div id="dialog-envio-resp-por-bloque" title="Confirmar">
	<p><span class="ui-icon ui-icon-info" style="float:left; margin:0 7px 20px 0;"></span><strong>¿Estas seguro que deseas finalizar este instrumento?.</strong> Una vez que envies las respuestas de este instrumento ya no podrán ser modificadas.</p>
</div>


