<?php slot('title') ?>
  <?php  echo sprintf('Formulario a completar') ?>
<?php end_slot(); ?>

<script type="text/javascript">var url_consultaProvincias="<?php echo url_for('principal/consultaProvincias'); ?>";</script>
<script type="text/javascript">var url_consultaComunas="<?php echo url_for('principal/consultaComunas'); ?>";</script>
<script type="text/javascript">var url_consultaRegiones="<?php echo url_for('principal/consultaRegiones'); ?>";</script>
<script type="text/javascript">var url_consultaCausaDelito="<?php echo url_for('principal/consultaCausaDelito'); ?>";</script>
<script type="text/javascript">var url_consultaMateriaDelito="<?php echo url_for('principal/consultaMateriaDelito'); ?>";</script>
<script type="text/javascript">var url_consultaRUNExiste="<?php echo url_for('principal/getSiRUNYaRegistrado'); ?>";</script>
<script type="text/javascript">var url_consultaCoevaluador="<?php echo url_for('principal/ConsultaCoEvaluador'); ?>";</script>



<form id="formulario_IngRegAIDLey" name="formulario_IngRegAIDLey" class="form" method="post" action="<?php echo url_for('principal/procesarForm', true) ?>">
<!-- ********************Primera etapa******************** -->
<div id="first" class="step">
		<div class="ui-widget-header ui-corner-all">
			Ingreso de datos de nuevo encuestado
		</div>

 <div class="form2-impar">
    <div class="grid-4-12">
    <!-- En Chile, comúnmente se le denomina RUT tanto al RUT (Rol Único Tributario) como al RUN (Rol Único Nacional). La diferencia está en que el primero es un identificador de empresas mientras que el segundo sólo es para personas naturales.Aqui se considera el normbre real osea el RUN. -->
          <label class="form-lbl">RUN <em class="form-req">*</em></label>
          <input type="text" value="" id="input_run_nconverificador" name="input_run_nconverificador" style="width: 200px;float: left;" class="form-txt run">
    </div>
	   
	   <div class="grid-6-12">
    <!-- En Chile, comúnmente se le denomina RUT tanto al RUT (Rol Único Tributario) como al RUN (Rol Único Nacional). La diferencia está en que el primero es un identificador de empresas mientras que el segundo sólo es para personas naturales.Aqui se considera el normbre real osea el RUN. -->
          <label class="form-lbl">Co-evaluador <em class="form-req">*</em></label>
          <select name="select_user_responsable_secundario1" id="select_user_responsable_secundario1"  style="width: 500px;float:left;">
                    <option value="" selected="">Seleccione Co-evaluador</option>
                </select>
    </div>
	


		<div class="especial4" style="width:170px;overflow: hidden !important;">
			<label class="form-lbl">Nombres<em class="form-req">*</em></label>
		<input type="text" class="form-txt especial4 defaultInvalid" style="width:80px;" value="Primer Nombre" name="input_primer_nombre" id="input_primer_nombre"/>
		<input type="text" class="form-txt especial4" style="width:80px;" value="Otros Nombres" name="input_otros_nombres" id="input_otros_nombres" />
		</div>
		<div class="especial4" style="width:170px;overflow: hidden !important;">
		<label class="form-lbl">Apellidos<em class="form-req">*</em></label>
		<input type="text" class="form-txt especial4" style="width:80px;" name="input_primer_apellido" id="input_primer_apellido" value="Primer Apellido"/>
		<input type="text" class="form-txt especial4" style="width:80px;" name="input_segundo_apellido" id="input_segundo_apellido" value="Segundo Apellido"/>
		</div>

		<div class="grid-3-12">
			<label class="form-lbl">Sexo <em class="form-req">*</em></label>
			<ul class="form-list-rdo">
			<li><input name="radio_sexo" type="radio" /><label class="form-lbl">Hombre</label></li>
			<li><input name="radio_sexo" type="radio" /><label class="form-lbl">Mujer</label></li>
			</ul>
		</div>

    <div class="grid-3-12">
    <label class="form-lbl">Fecha Nacimiento aaaa/mm/dd <em class="form-req">*</em></label>
      <input type="text" class="form-txt" name="input_fnacimiento" id="input_fnacimiento"/>
    </div>


		<div class="grid-12-12">

		<label class="form-lbl">Origen <em class="form-req">*</em></label>
		<select name="select_region" id="select_region" class="form-small">
			<option value="none" selected="">Seleccione una Región</option>
		</select>
		<select name="select_provincia" id="select_provincia" disabled="disabled" class="form-small">
			<option value="none" selected="">Seleccione Provincia</option>
		</select>
		<select name="select_comuna" id="select_comuna" class="form-small"  disabled="disabled">
			<option value="none" selected="">Seleccione Comuna</option>
		</select>
		</div>
     
                 <div class="grid-7-12">
                   <label class="form-lbl">Domicilio <em class="form-req">*</em></label>
                   <input type="text" value="" id="input_domicilio" name="input_domicilio" style="float: left;" class="form-txt run">
                 </div>

		<div class="grid-5-12">
		<label class="form-lbl">Nacionalidad<em class="form-req">*</em></label>
                <select name="select_nacionalidad" id="select_nacionalidad">
			<option value="Chilena" selected="">Chilena</option>
                        <option value="Peruana">Peruana</option>
                        <option value="Argentina">Argentina</option>
                        <option value="Boliviana">Boliviana</option>
                        <option value="Ecuatoriana">Ecuatoriana</option>
                        <option value="Brasilena">Brasileña</option>
                        
		</select>
		</div>
     
     
		<div class="grid-5-12">
			<label class="form-lbl">Procedencia <em class="form-req">*</em></label>
			<ul class="form-list-rdo">
			<li><input name="radio_procedencia" type="radio" /><label class="form-lbl">Urbano</label></li>
			<li><input name="radio_procedencia" type="radio" /><label class="form-lbl">Rural</label></li>
			<li><input name="radio_procedencia" type="radio" /><label class="form-lbl">Comunidad Indígena</label></li>
			</ul>
		</div>

		<div class="grid-4-12">
		<label class="form-lbl">Localidad o Comunidad Indígena<em class="form-req"></em></label>
		<input type="text" class="form-txt" name="input_localidad_indigena" id="input_localidad_indigena" value="Favor especifíque la comunidad"/>
		</div>

   
     
     
		<div class="grid-3-12">
		<label class="form-lbl">Origen Étnico <em class="form-req">*</em></label>
		<select name="select_origen_etnico" id="select_origen_etnico">
			<option value="Seleccione" selected="">Seleccione</option>
			<option value="Aymara">Aymara</option>
			<option value="Quechua">Quechua</option>
                        <option value="Atacameño">Atacameño o Likanantay</option>
			<option value="Colla">Colla</option>
                        <option value="Diaguita">Diaguita</option>
			<option value="Pascuense">Rapa Nui o Pascuense</option>
                        <option value="Mapuche">Mapuche</option>
			<option value="Kawésqar">Kawésqar</option>
                         <option value="Yagan">Yagan</option>
			<option value="Gitano">Gitano</option>
                        <option value="Otro">Otro</option>
		</select>
		</div>

		<div class="grid-6-12">
		<label class="form-lbl">Ingreso Familiar <em class="form-req">*</em></label>
		<select name="select_ingreso_familiar" id="select_ingreso_familiar">
			<option value="Menos de $150.000" selected="">Menos de $150.000</option>
			<option value="$150.000 a $300.000">$150.000 a $300.000</option>
			<option value="$300.000 a $500.000">$300.000 a $500.000</option>
			<option value="$500.000 a $900.000">$500.000 a $900.000</option>
			<option value="$900.000 a $1.200.000">$900.000 a $1.200.000</option>
			<option value="Más de $1.200.000">Más de $1.200.000</option>
		</select>
		</div>


		<div class="grid-3-12">
		<label class="form-lbl">Residencia Regular <em class="form-req">*</em></label>
		<select name="select_residencia_regular" id="select_residencia_regular">
			<option value="Ambos Padres">Ambos Padres</option>
			<option value="Madre">Madre</option>
			<option value="Padre">Padre</option>
			<option value="Solo">Solo</option>
			<option value="Internado">Internado</option>
			<option value="Conviviente">Conviviente</option>
			<option value="Otro Familiar">Otro Familiar</option>
			<option value="Otros">Otros</option>
		</select>
		</div>

		<div class="grid-2-12">
		<label class="form-lbl">Hijos<em class="form-req">*</em></label>
		<select name="select_hijo" id="select_hijo">
			<option value="Si">Si</option>
			<option value="No">No</option>
			<option value="Embarazo">Embarazo</option>
		</select>
		</div>

		<div class="grid-3-12">
		<label class="form-lbl">Último Curso Aprobado <em class="form-req">*</em></label>
		<select name="select_ultimcurso_aprobado" id="select_ultimcurso_aprobado">
			<option value="Analfabeto" selected="">Analfabeto</option>
			<option value="Sin escolaridad pero lee y escribe" selected="">Sin escolaridad pero lee y escribe</option>
			<option value="1º Básico" selected="">1º Básico</option>
			<option value="2º Básico">2º Básico</option>
			<option value="3º Básico">3º Básico</option>
			<option value="4º Básico">4º Básico</option>
			<option value="5º Básico">5º Básico</option>
			<option value="6º Básico">6º Básico</option>
			<option value="7º Básico">7º Básico</option>
			<option value="8º Básico">8º Básico</option>
			<option value="1º Medio Cientifico Humanista">1º Medio Cientifico Humanista</option>
			<option value="2º Medio Cientifico Humanista">2º Medio Cientifico Humanista</option>
			<option value="3º Medio Cientifico Humanista">3º Medio Cientifico Humanista</option>
			<option value="4º Medio Cientifico Humanista">4º Medio Cientifico Humanista</option>
      <option value="1º Medio Técnico Profesional">1º Medio Técnico Profesional</option>
			<option value="2º Medio Técnico Profesional">2º Medio Técnico Profesional</option>
			<option value="3º Medio Técnico Profesional">3º Medio Técnico Profesional</option>
			<option value="4º Medio Técnico Profesional">4º Medio Técnico Profesional</option>
			<option value="1º Nivel Básico Adultos">1º Nivel Básico Adultos</option>
			<option value="2º Nivel Básico Adultos">2º Nivel Básico Adultos</option>
			<option value="3º Nivel Básico Adultos">3º Nivel Básico Adultos</option>
			<option value="1º Nivel Medio Adultos">1º Nivel Medio Adultos</option>
			<option value="2º Nivel Medio Adultos">2º Nivel Medio Adultos</option>
			<option value="Programa especial básica (exámenes libres)">Programa especial básica (exámenes libres)</option>
			<option value="Programa especial media (exámenes libres)">Programa especial media (exámenes libres)</option>
			<option value="Superior (instituto profesional y universidad)">Superior (instituto profesional y universidad)</option>
			<option value="Termino enseñanza media completa">Terminó enseñanza media completa</option>
			<option value="Pre-universitario">Pre-universitario</option>
		</select>
		</div>

		<div class="grid-2-12">
		<label class="form-lbl">Áño último curso <em class="form-req">*</em></label>
 		<input type="text" class="form-txt" name="input_anio_ultimocurso" id="input_anio_ultimocurso"  value=""/>
		</div>

		<div class="grid-3-12">
		<label class="form-lbl">Situación escolar actual<em class="form-req">*</em></label>
		<select name="select_actesc_encurso" id="select_actesc_encurso">
			<option value="none" selected="">Seleccione Estado</option>
			<option value="Analfabeto" selected="">Analfabeto</option>
			<option value="Sin escolaridad pero lee y escribe" selected="">Sin escolaridad pero lee y escribe</option>
			<option value="1º Básico" selected="">1º Básico</option>
			<option value="2º Básico">2º Básico</option>
			<option value="3º Básico">3º Básico</option>
			<option value="4º Básico">4º Básico</option>
			<option value="5º Básico">5º Básico</option>
			<option value="6º Básico">6º Básico</option>
			<option value="7º Básico">7º Básico</option>
			<option value="8º Básico">8º Básico</option>
			<option value="1º Medio Cientifico Humanista">1º Medio Cientifico Humanista</option>
			<option value="2º Medio Cientifico Humanista">2º Medio Cientifico Humanista</option>
			<option value="3º Medio Cientifico Humanista">3º Medio Cientifico Humanista</option>
			<option value="4º Medio Cientifico Humanista">4º Medio Cientifico Humanista</option>
      <option value="1º Medio Técnico Profesional">1º Medio Técnico Profesional</option>
			<option value="2º Medio Técnico Profesional">2º Medio Técnico Profesional</option>
			<option value="3º Medio Técnico Profesional">3º Medio Técnico Profesional</option>
			<option value="4º Medio Técnico Profesional">4º Medio Técnico Profesional</option>
			<option value="1º Nivel Básico Adultos">1º Nivel Básico Adultos</option>
			<option value="2º Nivel Básico Adultos">2º Nivel Básico Adultos</option>
			<option value="3º Nivel Básico Adultos">3º Nivel Básico Adultos</option>
			<option value="1º Nivel Medio Adultos">1º Nivel Medio Adultos</option>
			<option value="2º Nivel Medio Adultos">2º Nivel Medio Adultos</option>
			<option value="Programa especial básica (exámenes libres)">Programa especial básica (exámenes libres)</option>
			<option value="Programa especial media (exámenes libres)">Programa especial media (exámenes libres)</option>
			<option value="Superior (instituto profesional y universidad)">Superior (instituto profesional y universidad)</option>
			<option value="Termino enseñanza media completa">Terminó enseñanza media completa</option>
			<option value="Pre-universitario">Pre-universitario</option>
			<option value="Fuera del sistema escolar">Fuera del sistema escolar</option>
		</select>
		</div>

		<div class="grid-2-12">
		<label class="form-lbl">Tipo de asistencia <em class="form-req">*</em></label>
		<select name="select_tipo_asistencia" id="select_tipo_asistencia">
			<option value="Termino enseñanza media completa">Termino enseñanza media completa</option>
			<option value="Asiste regularmente">Asiste regularmente</option>
			<option value="Asiste en forma interrumpida">Asiste en forma interrumpida</option>
			<option value="No asiste">No asiste</option>
			<option value="Matriculado (a la espera de inicio de clases)">Matriculado (a la espera de inicio de clases)</option>
			<option value="Nunca ha sido inscrito en sistema escolar">Nunca ha sido inscrito en sistema escolar</option>
		</select>
		</div>
 </div> <!-- Form IMPAR -->
 
	
	
	
	
      <div class="grid-5-12">
			<label class="form-lbl">Asistencia a programa CONACE <em class="form-req">*</em></label>
      <select name="select_asistencia_pconace" id="select_asistencia_pconace">
            <option value="Sanción accesoria">Sanción accesoria</option>
            <option value="Asistencia voluntaria">Asistencia voluntaria</option>
            <option value="No" selected="">No</option>
      </select>
      </div>
      <div class="grid-3-12">
        <div id="bloque-tipo-pconace" style="display: none;">
          <label class="form-lbl">Tipo de programa CONACE <em class="form-req">*</em></label>
          <select name="select_tipo_pconace" id="select_tipo_pconace">
            <option value="Programa Ambulatorio Intensivo" selected="">Programa Ambulatorio Intensivo</option>
            <option value="Sistema residencial">Sistema residencial</option>
            <option value="Corta estadía">Corta estadía</option>
          </select>
        </div>
      </div>
      <div class="grid-4-12">
	  </div>


</div><!-- div PRIMERA ETAPA -->






<div id="dialog-confirm-registro" title="Ingresar nuevo evaluado?">
	<p><span class="ui-icon ui-icon-alert" style="float:left; margin:0 7px 20px 0;"></span><strong>Hey!</strong> ¿Estás seguro que quieres guardar los datos de este nuevo encuestado?. Si estas complertamente seguro de agregar a un nuevo encuestado presiona <b>Registrar Encuestado</b>; puedes presionar <b>Cancelar</b> si deseas corregir los datos antes de enviar el formulario.</p>
</div>


<div id="panelNavegacion">
	<div class="grid-12-12 form-no-lbl">
          <a class="form-button-off form-left" style="display: block;" href="<?php echo url_for('principal/home?showtable=yes');?>" onclick="return confirm('Al salir del formulario perderás la información que hayas respondido en la pantalla actual. ¿Estas seguro que deseas salir del formulario actual?');"><- Volver al menú</a>
	  <input class="form-button form-right" type="submit" title="siguiente" value="Siguiente"/>
	</div>
</div>



</form>

