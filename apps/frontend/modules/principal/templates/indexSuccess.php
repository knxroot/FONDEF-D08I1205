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
        <!-- COMENTARIOS INCREIBLEMENTE INUTILES PARA QUIEN MIRA EL CODIGO: EL PROGRAMADOR -->
    <!-- En Chile, comúnmente se le denomina RUT tanto al RUT (Rol Único Tributario) como al RUN (Rol Único Nacional). La diferencia está en que el primero es un identificador de empresas mientras que el segundo sólo es para personas naturales.Aqui se considera el normbre real osea el RUN. -->
          <label class="form-lbl">RUN <em class="form-req">*</em></label>
          <input type="text" value="" id="input_run_nconverificador" name="input_run_nconverificador" style="width: 200px;float: left;" class="form-txt run">
    </div>
	   
	   <div class="grid-6-12">
        <!-- COMENTARIOS INCREIBLEMENTE INUTILES PARA QUIEN MIRA EL CODIGO: EL PROGRAMADOR -->
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
		<div class="grid-5-12">
			<label class="form-lbl">Procedencia <em class="form-req">*</em></label>
			<ul class="form-list-rdo">
			<li><input name="radio_procedencia" type="radio" /><label class="form-lbl">Urbano</label></li>
			<li><input name="radio_procedencia" type="radio" /><label class="form-lbl">Rural</label></li>
			<li><input name="radio_procedencia" type="radio" /><label class="form-lbl">Comunidad Indígena</label></li>
			</ul>
		</div>

		<div class="grid-4-12">
		<label class="form-lbl">Localidad o Comunidad Indígena<em class="form-req">*</em></label>
		<input type="text" class="form-txt" name="input_localidad_indigena" id="input_localidad_indigena" value="Favor especifíque la comunidad"/>
		</div>

		<div class="grid-3-12">
		<label class="form-lbl">Origen Étnico <em class="form-req">*</em></label>
		<select name="select_origen_etnico" id="select_origen_etnico">
			<option value="Chileno" selected="">Chileno</option>
			<option value="Mapuche">Mapuche</option>
			<option value="Otro">Otro</option>
		</select>
		</div>

		<div class="grid-6-12">
		<label class="form-lbl">IngresoFamiliar <em class="form-req">*</em></label>
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

    <!-- INICIO BLOQUE SANCIONES -->
    <div id="bloque-sanciones">
	<div class="ui-widget-header ui-corner-all">
			Causas Vigentes
		</div>
        <div class="form2-par" id="sancion-fieldset">
            <div class="grid-3-12">
                <label class="form-lbl">Sistema de Atención <em class="form-req">*</em></label>
                <select name="select_sistema_atencion[]" id="select_sistema_atencion">
                    <option value="MCA" selected="">MCA</option>
                    <option value="PSA">PSA</option>
                    <option value="SBC">SBC</option>
                    <option value="PLA">PLA</option>
                    <option value="PLAE">PLAE</option>
                    <option value="CSC">CSC</option>
                    <option value="CIP">CIP</option>
                    <option value="CDP">CDP</option>
                    <option value="CRC">CRC</option>
                    <option value="CCP">CCP</option>
                </select>
            </div>

            <div class="grid-9-12">
                <label class="form-lbl">Nombre del Programa<em class="form-req">*</em></label>
                <input type="text" class="form-txt required error" name="input_nombre_programa[]" id="input_nombre_programa" value="Escriba el nombre del programa"/>
            </div>

            <div class="grid-4-12">
                <label class="form-lbl">Ciudad del Programa <em class="form-req">*</em></label>
                <select name="select_ciudad_programa[]" id="select_ciudad_programa">
                    <option value="Chillán" selected="">Chillán</option>
                    <option value="Concepción">Concepción</option>
                    <option value="Coronel">Coronel</option>
                    <option value="Angol">Angol</option>
                    <option value="Temuco">Temuco</option>
                    <option value="Chol Chol">Chol Chol</option>
                    <option value="Valdivia">Valdivia</option>
                    <option value="La Unión">La Unión</option>
                    <option value="Osorno">Osorno</option>
                    <option value="Puerto Montt">Puerto Montt</option>
                </select>
            </div>

            <div class="grid-4-12">
                <label class="form-lbl">T. Total de Condena <em class="form-req">*</em></label>
                <input type="text" class="form-txt form-date-year" style="float:left;" name="input_tiempo_total_condena[]" id="input_tiempo_total_condena"  value=""/>
                <select name="select_tipo_tiempo_total_condena[]" id="select_tipo_tiempo_total_condena" style="width:70px;">
                    <option value="D" selected="">Dias</option>
                    <option value="A">Años</option>
                    <option value="H">Horas</option>
                </select>
                <?php echo image_tag('clock.png', 'alt=Tiempo style=margin: 4px 0pt 0pt 6px;') ?>
            </div>

            <div class="grid-4-12">
                <label class="form-lbl">F. inicio Condena  aaaa/mm/dd <em class="form-req">*</em></label>
                <input type="text" class="form-txt" name="input_fecha_inicio_condena[]" id="input_fecha_inicio_condena"/>
            </div>

			
			
			
			 <div class="grid-4-12">
                <label class="form-lbl">RUC <em class="form-req">*</em></label>
                <input type="text" class="form-txt" name="input_ruk[]" id="input_ruk"/>
            </div>

            <div class="grid-4-12">
                <label class="form-lbl">Fecha detención <em class="form-req">*</em></label>
                <input type="text" class="form-txt" name="input_fecha_detencion[]" id="input_detencion"/>
            </div>

            <div class="grid-4-12">
                <label class="form-lbl">Fecha control de detención <em class="form-req">*</em></label>
                <input type="text" class="form-txt" name="input_fecha_control_detencion[]" id="input_fecha_control_detencion"/>
            </div>	
			
			
			
			
			
			
			
			
            <div class="grid-12-12">
                <label class="form-lbl">Causal de ingreso <em class="form-req">*</em></label>
                <select name="select_tipo_materia[]" id="select_tipo_materia"  style="width: 500px;float:left;">
                    <option value="none" selected="">Seleccione Tipo de materia</option>
                </select>
                <select name="select_causa_delito[]" id="select_causa_delito" disabled="disabled" style="width: 400px;margin-left: 5px;">
                    <option value="none" selected="">Seleccione Causa Delito</option>
                </select>
            </div>
        </div>
    </div>
   	<div id="bloque-boton-agregar-sancion">
      <div class="grid-4-12"></div>
      <div class="grid-4-12">
      <div class="medium blue awesome" onClick="agregarBloqueSancion()">
        <div class="form-button-add"></div>&nbsp;Agregar sanción vigente</div>
      </div>
      <div class="grid-4-12"></div>
    </div>
    <!-- FIN BLOQUE SANCIONES -->
	
		
	<!-- Causas anteriores -->
	    <div id="bloque-sanciones1">
		<div class="ui-widget-header ui-corner-all">
			Causas Anteriores
		</div>
        <div class="form2-par" id="sancion-fieldset1">
          

            <div class="grid-4-12">
                <label class="form-lbl">RUC<em class="form-req">*</em></label>
                <input type="text" class="form-txt required error" name="input_ruk_2[]" id="input_ruk_2" />
            </div>
			
            <div class="grid-8-12">
                <label class="form-lbl">Tribunal <em class="form-req">*</em></label>
                <select id="select_tribunal2" name="select_sistema_tribunal2[]">
					<option value="Seleccione Tribunal">Seleccione Tribunal</option>
				
								<optgroup label="C.A. DE ARICA.                ">
				
									   	<option value="JUZGADO DE GARANTÍA DE ARICA.">JUZGADO DE GARANTÍA DE ARICA.</option> 							    
				
									   	<option value="TRIBUNAL DE JUICIO ORAL EN LO PENAL DE ARICA.">TRIBUNAL DE JUICIO ORAL EN LO PENAL DE ARICA.</option> 							    
				
								</optgroup>
				
								<optgroup label="C.A. DE IQUIQUE.              ">
				
									   	<option value="JUZGADO DE GARANTÍA DE IQUIQUE.">JUZGADO DE GARANTÍA DE IQUIQUE.</option> 							    
				
									   	<option value="JUZGADO DE LETRAS Y GARANTÍA DE POZO ALMONTE.">JUZGADO DE LETRAS Y GARANTÍA DE POZO ALMONTE.</option> 							    
				
									   	<option value="TRIBUNAL DE JUICIO ORAL EN LO PENAL DE IQUIQUE.">TRIBUNAL DE JUICIO ORAL EN LO PENAL DE IQUIQUE.</option> 							    
				
								</optgroup>
				
								<optgroup label="C.A. DE ANTOFAGASTA.          ">
				
									   	<option value="JUZGADO DE GARANTÍA DE ANTOFAGASTA.">JUZGADO DE GARANTÍA DE ANTOFAGASTA.</option> 							    
				
									   	<option value="JUZGADO DE GARANTÍA DE CALAMA.">JUZGADO DE GARANTÍA DE CALAMA.</option> 							    
				
									   	<option value="JUZGADO DE GARANTÍA DE TOCOPILLA.">JUZGADO DE GARANTÍA DE TOCOPILLA.</option> 							    
				
									   	<option value="JUZGADO DE LETRAS Y GARANTÍA DE MARÍA ELENA.">JUZGADO DE LETRAS Y GARANTÍA DE MARÍA ELENA.</option> 							    
				
									   	<option value="JUZGADO DE LETRAS Y GARANTÍA DE TALTAL.">JUZGADO DE LETRAS Y GARANTÍA DE TALTAL.</option> 							    
				
									   	<option value="TRIBUNAL DE JUICIO ORAL EN LO PENAL DE ANTOFAGASTA.">TRIBUNAL DE JUICIO ORAL EN LO PENAL DE ANTOFAGASTA.</option> 							    
				
									   	<option value="TRIBUNAL DE JUICIO ORAL EN LO PENAL DE CALAMA.">TRIBUNAL DE JUICIO ORAL EN LO PENAL DE CALAMA.</option> 							    
				
								</optgroup>
				
								<optgroup label="C.A. DE COPIAPÓ.             ">
				
									   	<option value="JUZGADO DE GARANTÍA DE COPIAPO.">JUZGADO DE GARANTÍA DE COPIAPO.</option> 							    
				
									   	<option value="JUZGADO DE GARANTÍA DE DIEGO DE ALMAGRO.">JUZGADO DE GARANTÍA DE DIEGO DE ALMAGRO.</option> 							    
				
									   	<option value="JUZGADO DE GARANTÍA DE VALLENAR.">JUZGADO DE GARANTÍA DE VALLENAR.</option> 							    
				
									   	<option value="JUZGADO DE LETRAS Y GARANTÍA DE CALDERA.">JUZGADO DE LETRAS Y GARANTÍA DE CALDERA.</option> 							    
				
									   	<option value="JUZGADO DE LETRAS Y GARANTÍA DE CHAÑARAL.">JUZGADO DE LETRAS Y GARANTÍA DE CHAÑARAL.</option> 							    
				
									   	<option value="JUZGADO DE LETRAS Y GARANTÍA DE FREIRINA.">JUZGADO DE LETRAS Y GARANTÍA DE FREIRINA.</option> 							    
				
									   	<option value="TRIBUNAL DE JUICIO ORAL EN LO PENAL DE COPIAPO.">TRIBUNAL DE JUICIO ORAL EN LO PENAL DE COPIAPO.</option> 							    
				
								</optgroup>
				
								<optgroup label="C.A. DE LA SERENA.            ">
				
									   	<option value="JUZGADO DE GARANTÍA DE COQUIMBO.">JUZGADO DE GARANTÍA DE COQUIMBO.</option> 							    
				
									   	<option value="JUZGADO DE GARANTÍA DE ILLAPEL.">JUZGADO DE GARANTÍA DE ILLAPEL.</option> 							    
				
									   	<option value="JUZGADO DE GARANTÍA DE LA SERENA.">JUZGADO DE GARANTÍA DE LA SERENA.</option> 							    
				
									   	<option value="JUZGADO DE GARANTÍA DE OVALLE.">JUZGADO DE GARANTÍA DE OVALLE.</option> 							    
				
									   	<option value="JUZGADO DE GARANTÍA DE VICUÑA.">JUZGADO DE GARANTÍA DE VICUÑA.</option> 							    
				
									   	<option value="JUZGADO DE LETRAS Y GARANTÍA DE ANDACOLLO.">JUZGADO DE LETRAS Y GARANTÍA DE ANDACOLLO.</option> 							    
				
									   	<option value="JUZGADO DE LETRAS Y GARANTÍA DE COMBARBALA.">JUZGADO DE LETRAS Y GARANTÍA DE COMBARBALA.</option> 							    
				
									   	<option value="JUZGADO DE LETRAS Y GARANTÍA DE LOS VILOS.">JUZGADO DE LETRAS Y GARANTÍA DE LOS VILOS.</option> 							    
				
									   	<option value="TRIBUNAL DE JUICIO ORAL EN LO PENAL DE LA SERENA.">TRIBUNAL DE JUICIO ORAL EN LO PENAL DE LA SERENA.</option> 							    
				
									   	<option value="TRIBUNAL DE JUICIO ORAL EN LO PENAL DE OVALLE.">TRIBUNAL DE JUICIO ORAL EN LO PENAL DE OVALLE.</option> 							    
				
								</optgroup>
				
								<optgroup label="C.A. DE VALPARAÍSO.          ">
				
									   	<option value="JUZGADO DE GARANTÍA DE CASABLANCA.">JUZGADO DE GARANTÍA DE CASABLANCA.</option> 							    
				
									   	<option value="JUZGADO DE GARANTÍA DE LA CALERA.">JUZGADO DE GARANTÍA DE LA CALERA.</option> 							    
				
									   	<option value="JUZGADO DE GARANTÍA DE LA LIGUA.">JUZGADO DE GARANTÍA DE LA LIGUA.</option> 							    
				
									   	<option value="JUZGADO DE GARANTÍA DE LIMACHE.">JUZGADO DE GARANTÍA DE LIMACHE.</option> 							    
				
									   	<option value="JUZGADO DE GARANTÍA DE LOS ANDES.">JUZGADO DE GARANTÍA DE LOS ANDES.</option> 							    
				
									   	<option value="JUZGADO DE GARANTÍA DE QUILLOTA.">JUZGADO DE GARANTÍA DE QUILLOTA.</option> 							    
				
									   	<option value="JUZGADO DE GARANTÍA DE QUILPUÉ.">JUZGADO DE GARANTÍA DE QUILPUÉ.</option> 							    
				
									   	<option value="JUZGADO DE GARANTÍA DE SAN ANTONIO.">JUZGADO DE GARANTÍA DE SAN ANTONIO.</option> 							    
				
									   	<option value="JUZGADO DE GARANTÍA DE SAN FELIPE.">JUZGADO DE GARANTÍA DE SAN FELIPE.</option> 							    
				
									   	<option value="JUZGADO DE GARANTÍA DE VALPARAÍSO.">JUZGADO DE GARANTÍA DE VALPARAÍSO.</option> 							    
				
									   	<option value="JUZGADO DE GARANTÍA DE VILLA ALEMANA.">JUZGADO DE GARANTÍA DE VILLA ALEMANA.</option> 							    
				
									   	<option value="JUZGADO DE GARANTÍA DE VIÑA DEL MAR.">JUZGADO DE GARANTÍA DE VIÑA DEL MAR.</option> 							    
				
									   	<option value="JUZGADO DE LETRAS Y GARANTÍA DE ISLA DE PASCUA.">JUZGADO DE LETRAS Y GARANTÍA DE ISLA DE PASCUA.</option> 							    
				
									   	<option value="JUZGADO DE LETRAS Y GARANTÍA DE PETORCA.">JUZGADO DE LETRAS Y GARANTÍA DE PETORCA.</option> 							    
				
									   	<option value="JUZGADO DE LETRAS Y GARANTÍA DE PUTAENDO.">JUZGADO DE LETRAS Y GARANTÍA DE PUTAENDO.</option> 							    
				
									   	<option value="JUZGADO DE LETRAS Y GARANTÍA DE QUINTERO.">JUZGADO DE LETRAS Y GARANTÍA DE QUINTERO.</option> 							    
				
									   	<option value="TRIBUNAL DE JUICIO ORAL EN LO PENAL DE LOS ANDES.">TRIBUNAL DE JUICIO ORAL EN LO PENAL DE LOS ANDES.</option> 							    
				
									   	<option value="TRIBUNAL DE JUICIO ORAL EN LO PENAL DE QUILLOTA.">TRIBUNAL DE JUICIO ORAL EN LO PENAL DE QUILLOTA.</option> 							    
				
									   	<option value="TRIBUNAL DE JUICIO ORAL EN LO PENAL DE SAN FELIPE.">TRIBUNAL DE JUICIO ORAL EN LO PENAL DE SAN FELIPE.</option> 							    
				
									   	<option value="TRIBUNAL DE JUICIO ORAL EN LO PENAL DE VALPARAÍSO.">TRIBUNAL DE JUICIO ORAL EN LO PENAL DE VALPARAÍSO.</option> 							    
				
									   	<option value="TRIBUNAL DE JUICIO ORAL EN LO PENAL SAN ANTONIO.">TRIBUNAL DE JUICIO ORAL EN LO PENAL SAN ANTONIO.</option> 							    
				
									   	<option value="TRIBUNAL DE JUICIO ORAL EN LO PENAL VIÑA DEL MAR.">TRIBUNAL DE JUICIO ORAL EN LO PENAL VIÑA DEL MAR.</option> 							    
				
								</optgroup>
				
								<optgroup label="C.A. DE RANCAGUA.             ">
				
									   	<option value="1º JUZGADO DE LETRAS Y GARANTÍA DE PEUMO.">1º JUZGADO DE LETRAS Y GARANTÍA DE PEUMO.</option> 							    
				
									   	<option value="JUZGADO DE GARANTÍA DE GRANEROS.">JUZGADO DE GARANTÍA DE GRANEROS.</option> 							    
				
									   	<option value="JUZGADO DE GARANTÍA DE RANCAGUA.">JUZGADO DE GARANTÍA DE RANCAGUA.</option> 							    
				
									   	<option value="JUZGADO DE GARANTÍA DE RENGO.">JUZGADO DE GARANTÍA DE RENGO.</option> 							    
				
									   	<option value="JUZGADO DE GARANTÍA DE SAN FERNANDO.">JUZGADO DE GARANTÍA DE SAN FERNANDO.</option> 							    
				
									   	<option value="JUZGADO DE GARANTÍA DE SAN VICENTE DE TAGUA-TAGUA.">JUZGADO DE GARANTÍA DE SAN VICENTE DE TAGUA-TAGUA.</option> 							    
				
									   	<option value="JUZGADO DE GARANTÍA DE SANTA CRUZ.">JUZGADO DE GARANTÍA DE SANTA CRUZ.</option> 							    
				
									   	<option value="JUZGADO DE LETRAS Y GARANTÍA DE LITUECHE.">JUZGADO DE LETRAS Y GARANTÍA DE LITUECHE.</option> 							    
				
									   	<option value="JUZGADO DE LETRAS Y GARANTÍA DE PERALILLO.">JUZGADO DE LETRAS Y GARANTÍA DE PERALILLO.</option> 							    
				
									   	<option value="JUZGADO DE LETRAS Y GARANTÍA DE PICHILEMU.">JUZGADO DE LETRAS Y GARANTÍA DE PICHILEMU.</option> 							    
				
									   	<option value="TRIBUNAL DE JUICIO ORAL EN LO PENAL DE RANCAGUA.">TRIBUNAL DE JUICIO ORAL EN LO PENAL DE RANCAGUA.</option> 							    
				
									   	<option value="TRIBUNAL DE JUICIO ORAL EN LO PENAL DE SANTA CRUZ.">TRIBUNAL DE JUICIO ORAL EN LO PENAL DE SANTA CRUZ.</option> 							    
				
									   	<option value="TRIBUNAL DE JUICIO ORAL EN LO PENAL SAN FERNANDO.">TRIBUNAL DE JUICIO ORAL EN LO PENAL SAN FERNANDO.</option> 							    
				
								</optgroup>
				
								<optgroup label="C.A. DE TALCA.                ">
				
									   	<option value="JUZGADO DE GARANTÍA DE CAUQUENES.">JUZGADO DE GARANTÍA DE CAUQUENES.</option> 							    
				
									   	<option value="JUZGADO DE GARANTÍA DE CONSTITUCIÓN.">JUZGADO DE GARANTÍA DE CONSTITUCIÓN.</option> 							    
				
									   	<option value="JUZGADO DE GARANTÍA DE CURICO.">JUZGADO DE GARANTÍA DE CURICO.</option> 							    
				
									   	<option value="JUZGADO DE GARANTÍA DE LINARES.">JUZGADO DE GARANTÍA DE LINARES.</option> 							    
				
									   	<option value="JUZGADO DE GARANTÍA DE MOLINA.">JUZGADO DE GARANTÍA DE MOLINA.</option> 							    
				
									   	<option value="JUZGADO DE GARANTÍA DE PARRAL.">JUZGADO DE GARANTÍA DE PARRAL.</option> 							    
				
									   	<option value="JUZGADO DE GARANTÍA DE SAN JAVIER.">JUZGADO DE GARANTÍA DE SAN JAVIER.</option> 							    
				
									   	<option value="JUZGADO DE GARANTÍA DE TALCA.">JUZGADO DE GARANTÍA DE TALCA.</option> 							    
				
									   	<option value="TRIBUNAL DE JUICIO ORAL EN LO PENAL DE CAUQUENES.">TRIBUNAL DE JUICIO ORAL EN LO PENAL DE CAUQUENES.</option> 							    
				
									   	<option value="TRIBUNAL DE JUICIO ORAL EN LO PENAL DE CURICO.">TRIBUNAL DE JUICIO ORAL EN LO PENAL DE CURICO.</option> 							    
				
									   	<option value="TRIBUNAL DE JUICIO ORAL EN LO PENAL DE LINARES.">TRIBUNAL DE JUICIO ORAL EN LO PENAL DE LINARES.</option> 							    
				
									   	<option value="TRIBUNAL DE JUICIO ORAL EN LO PENAL DE TALCA.">TRIBUNAL DE JUICIO ORAL EN LO PENAL DE TALCA.</option> 							    
				
								</optgroup>
				
								<optgroup label="C.A. DE CHILLÁN.             ">
				
									   	<option value="JUZGADO DE GARANTÍA DE CHILLÁN.">JUZGADO DE GARANTÍA DE CHILLÁN.</option> 							    
				
									   	<option value="JUZGADO DE GARANTÍA DE SAN CARLOS.">JUZGADO DE GARANTÍA DE SAN CARLOS.</option> 							    
				
									   	<option value="JUZGADO DE GARANTÍA DE YUNGAY.">JUZGADO DE GARANTÍA DE YUNGAY.</option> 							    
				
									   	<option value="JUZGADO DE LETRAS Y GARANTÍA DE BULNES.">JUZGADO DE LETRAS Y GARANTÍA DE BULNES.</option> 							    
				
									   	<option value="JUZGADO DE LETRAS Y GARANTÍA DE COELEMU.">JUZGADO DE LETRAS Y GARANTÍA DE COELEMU.</option> 							    
				
									   	<option value="JUZGADO DE LETRAS Y GARANTÍA DE QUIRIHUE.">JUZGADO DE LETRAS Y GARANTÍA DE QUIRIHUE.</option> 							    
				
									   	<option value="TRIBUNAL DE JUICIO ORAL EN LO PENAL DE CHILLÁN.">TRIBUNAL DE JUICIO ORAL EN LO PENAL DE CHILLÁN.</option> 							    
				
								</optgroup>
				
								<optgroup label="C.A. DE CONCEPCIÓN.          ">
				
									   	<option value="JUZGADO DE GARANTÍA DE ARAUCO.">JUZGADO DE GARANTÍA DE ARAUCO.</option> 							    
				
									   	<option value="JUZGADO DE GARANTÍA DE CAÑETE.">JUZGADO DE GARANTÍA DE CAÑETE.</option> 							    
				
									   	<option value="JUZGADO DE GARANTÍA DE CHIGUAYANTE.">JUZGADO DE GARANTÍA DE CHIGUAYANTE.</option> 							    
				
									   	<option value="JUZGADO DE GARANTÍA DE CONCEPCIÓN.">JUZGADO DE GARANTÍA DE CONCEPCIÓN.</option> 							    
				
									   	<option value="JUZGADO DE GARANTÍA DE CORONEL.">JUZGADO DE GARANTÍA DE CORONEL.</option> 							    
				
									   	<option value="JUZGADO DE GARANTÍA DE LOS ANGELES.">JUZGADO DE GARANTÍA DE LOS ANGELES.</option> 							    
				
									   	<option value="JUZGADO DE GARANTÍA DE SAN PEDRO DE LA PAZ.">JUZGADO DE GARANTÍA DE SAN PEDRO DE LA PAZ.</option> 							    
				
									   	<option value="JUZGADO DE GARANTÍA DE TALCAHUANO.">JUZGADO DE GARANTÍA DE TALCAHUANO.</option> 							    
				
									   	<option value="JUZGADO DE GARANTÍA DE TOMÉ.">JUZGADO DE GARANTÍA DE TOMÉ.</option> 							    
				
									   	<option value="JUZGADO DE LETRAS Y GARANTÍA DE CABRERO.">JUZGADO DE LETRAS Y GARANTÍA DE CABRERO.</option> 							    
				
									   	<option value="JUZGADO DE LETRAS Y GARANTÍA DE CURANILAHUE.">JUZGADO DE LETRAS Y GARANTÍA DE CURANILAHUE.</option> 							    
				
									   	<option value="JUZGADO DE LETRAS Y GARANTÍA DE FLORIDA.">JUZGADO DE LETRAS Y GARANTÍA DE FLORIDA.</option> 							    
				
									   	<option value="JUZGADO DE LETRAS Y GARANTÍA DE LAJA.">JUZGADO DE LETRAS Y GARANTÍA DE LAJA.</option> 							    
				
									   	<option value="JUZGADO DE LETRAS Y GARANTÍA DE LEBU.">JUZGADO DE LETRAS Y GARANTÍA DE LEBU.</option> 							    
				
									   	<option value="JUZGADO DE LETRAS Y GARANTÍA DE LOTA.">JUZGADO DE LETRAS Y GARANTÍA DE LOTA.</option> 							    
				
									   	<option value="JUZGADO DE LETRAS Y GARANTÍA DE MULCHEN.">JUZGADO DE LETRAS Y GARANTÍA DE MULCHEN.</option> 							    
				
									   	<option value="JUZGADO DE LETRAS Y GARANTÍA DE SANTA BARBARA.">JUZGADO DE LETRAS Y GARANTÍA DE SANTA BARBARA.</option> 							    
				
									   	<option value="JUZGADO DE LETRAS Y GARANTÍA DE SANTA JUANA.">JUZGADO DE LETRAS Y GARANTÍA DE SANTA JUANA.</option> 							    
				
									   	<option value="JUZGADO DE LETRAS Y GARANTÍA DE YUMBEL.">JUZGADO DE LETRAS Y GARANTÍA DE YUMBEL.</option> 							    
				
									   	<option value="TRIBUNAL DE JUICIO ORAL EN LO PENAL DE CONCEPCIÓN.">TRIBUNAL DE JUICIO ORAL EN LO PENAL DE CONCEPCIÓN.</option> 							    
				
									   	<option value="TRIBUNAL ORAL EN LO PENAL DE CAÑETE">TRIBUNAL ORAL EN LO PENAL DE CAÑETE</option> 							    
				
									   	<option value="TRIBUNAL ORAL EN LO PENAL DE LOS ANGELES">TRIBUNAL ORAL EN LO PENAL DE LOS ANGELES</option> 							    
				
								</optgroup>
				
								<optgroup label="C.A. DE TEMUCO.               ">
				
									   	<option value="JUZGADO DE GARANTÍA DE ANGOL.">JUZGADO DE GARANTÍA DE ANGOL.</option> 							    
				
									   	<option value="JUZGADO DE GARANTÍA DE LAUTARO.">JUZGADO DE GARANTÍA DE LAUTARO.</option> 							    
				
									   	<option value="JUZGADO DE GARANTÍA DE LONCOCHE.">JUZGADO DE GARANTÍA DE LONCOCHE.</option> 							    
				
									   	<option value="JUZGADO DE GARANTÍA DE NUEVA IMPERIAL.">JUZGADO DE GARANTÍA DE NUEVA IMPERIAL.</option> 							    
				
									   	<option value="JUZGADO DE GARANTÍA DE PITRUFQUEN.">JUZGADO DE GARANTÍA DE PITRUFQUEN.</option> 							    
				
									   	<option value="JUZGADO DE GARANTÍA DE TEMUCO.">JUZGADO DE GARANTÍA DE TEMUCO.</option> 							    
				
									   	<option value="JUZGADO DE GARANTÍA DE VICTORIA.">JUZGADO DE GARANTÍA DE VICTORIA.</option> 							    
				
									   	<option value="JUZGADO DE GARANTÍA DE VILLARRICA.">JUZGADO DE GARANTÍA DE VILLARRICA.</option> 							    
				
									   	<option value="JUZGADO DE LETRAS Y GARANTÍA DE CARAHUE.">JUZGADO DE LETRAS Y GARANTÍA DE CARAHUE.</option> 							    
				
									   	<option value="JUZGADO DE LETRAS Y GARANTÍA DE COLLIPULLI.">JUZGADO DE LETRAS Y GARANTÍA DE COLLIPULLI.</option> 							    
				
									   	<option value="JUZGADO DE LETRAS Y GARANTÍA DE CURACAUTIN.">JUZGADO DE LETRAS Y GARANTÍA DE CURACAUTIN.</option> 							    
				
									   	<option value="JUZGADO DE LETRAS Y GARANTÍA DE PUCON.">JUZGADO DE LETRAS Y GARANTÍA DE PUCON.</option> 							    
				
									   	<option value="JUZGADO DE LETRAS Y GARANTÍA DE PUREN.">JUZGADO DE LETRAS Y GARANTÍA DE PUREN.</option> 							    
				
									   	<option value="JUZGADO DE LETRAS Y GARANTÍA DE TOLTEN.">JUZGADO DE LETRAS Y GARANTÍA DE TOLTEN.</option> 							    
				
									   	<option value="JUZGADO DE LETRAS Y GARANTÍA DE TRAIGUEN.">JUZGADO DE LETRAS Y GARANTÍA DE TRAIGUEN.</option> 							    
				
									   	<option value="TRIBUNAL DE JUICIO ORAL EN LO PENAL DE ANGOL.">TRIBUNAL DE JUICIO ORAL EN LO PENAL DE ANGOL.</option> 							    
				
									   	<option value="TRIBUNAL DE JUICIO ORAL EN LO PENAL DE TEMUCO.">TRIBUNAL DE JUICIO ORAL EN LO PENAL DE TEMUCO.</option> 							    
				
									   	<option value="TRIBUNAL DE JUICIO ORAL EN LO PENAL DE VILLARRICA.">TRIBUNAL DE JUICIO ORAL EN LO PENAL DE VILLARRICA.</option> 							    
				
								</optgroup>
				
								<optgroup label="C.A. DE VALDIVIA.             ">
				
									   	<option value="JUZGADO DE GARANTÍA DE LOS LAGOS.">JUZGADO DE GARANTÍA DE LOS LAGOS.</option> 							    
				
									   	<option value="JUZGADO DE GARANTÍA DE MARIQUINA.">JUZGADO DE GARANTÍA DE MARIQUINA.</option> 							    
				
									   	<option value="JUZGADO DE GARANTÍA DE OSORNO.">JUZGADO DE GARANTÍA DE OSORNO.</option> 							    
				
									   	<option value="JUZGADO DE GARANTÍA DE RÍO NEGRO.">JUZGADO DE GARANTÍA DE RÍO NEGRO.</option> 							    
				
									   	<option value="JUZGADO DE GARANTÍA DE VALDIVIA.">JUZGADO DE GARANTÍA DE VALDIVIA.</option> 							    
				
									   	<option value="JUZGADO DE LETRAS Y GARANTÍA DE LA UNIÓN.">JUZGADO DE LETRAS Y GARANTÍA DE LA UNIÓN.</option> 							    
				
									   	<option value="JUZGADO DE LETRAS Y GARANTÍA DE PAILLACO.">JUZGADO DE LETRAS Y GARANTÍA DE PAILLACO.</option> 							    
				
									   	<option value="JUZGADO DE LETRAS Y GARANTÍA DE PANGUIPULLI.">JUZGADO DE LETRAS Y GARANTÍA DE PANGUIPULLI.</option> 							    
				
									   	<option value="JUZGADO DE LETRAS Y GARANTÍA DE RÍO BUENO.">JUZGADO DE LETRAS Y GARANTÍA DE RÍO BUENO.</option> 							    
				
									   	<option value="TRIBUNAL DE JUICIO ORAL EN LO PENAL DE OSORNO">TRIBUNAL DE JUICIO ORAL EN LO PENAL DE OSORNO</option> 							    
				
									   	<option value="TRIBUNAL DE JUICIO ORAL EN LO PENAL DE VALDIVIA.">TRIBUNAL DE JUICIO ORAL EN LO PENAL DE VALDIVIA.</option> 							    
				
								</optgroup>
				
								<optgroup label="C.A. DE PUERTO MONTT.         ">
				
									   	<option value="JUGADO DE LETRAS Y GARANTÍA DE HUALAIHUE">JUGADO DE LETRAS Y GARANTÍA DE HUALAIHUE</option> 							    
				
									   	<option value="JUZGADO DE GARANTÍA DE ANCUD.">JUZGADO DE GARANTÍA DE ANCUD.</option> 							    
				
									   	<option value="JUZGADO DE GARANTÍA DE CASTRO.">JUZGADO DE GARANTÍA DE CASTRO.</option> 							    
				
									   	<option value="JUZGADO DE GARANTÍA DE PUERTO MONTT.">JUZGADO DE GARANTÍA DE PUERTO MONTT.</option> 							    
				
									   	<option value="JUZGADO DE GARANTÍA DE PUERTO VARAS.">JUZGADO DE GARANTÍA DE PUERTO VARAS.</option> 							    
				
									   	<option value="JUZGADO DE LETRAS Y GARANTÍA DE ACHAO.">JUZGADO DE LETRAS Y GARANTÍA DE ACHAO.</option> 							    
				
									   	<option value="JUZGADO DE LETRAS Y GARANTÍA DE CALBUCO.">JUZGADO DE LETRAS Y GARANTÍA DE CALBUCO.</option> 							    
				
									   	<option value="JUZGADO DE LETRAS Y GARANTÍA DE LOS MUERMOS.">JUZGADO DE LETRAS Y GARANTÍA DE LOS MUERMOS.</option> 							    
				
									   	<option value="JUZGADO DE LETRAS Y GARANTÍA DE QUELLON.">JUZGADO DE LETRAS Y GARANTÍA DE QUELLON.</option> 							    
				
									   	<option value="TRIBUNAL DE JUICIO ORAL EN LO PENAL PUERTO MONTT.">TRIBUNAL DE JUICIO ORAL EN LO PENAL PUERTO MONTT.</option> 							    
				
									   	<option value="TRIBUNAL ORAL EN LO PENAL DE CASTRO">TRIBUNAL ORAL EN LO PENAL DE CASTRO</option> 							    
				
								</optgroup>
				
								<optgroup label="C.A. DE COYHAIQUE.            ">
				
									   	<option value="JUZGADO DE GARANTÍA DE COYHAIQUE.">JUZGADO DE GARANTÍA DE COYHAIQUE.</option> 							    
				
									   	<option value="JUZGADO DE LETRAS Y GARANTÍA DE CHILE CHICO.">JUZGADO DE LETRAS Y GARANTÍA DE CHILE CHICO.</option> 							    
				
									   	<option value="JUZGADO DE LETRAS Y GARANTÍA DE CISNES.">JUZGADO DE LETRAS Y GARANTÍA DE CISNES.</option> 							    
				
									   	<option value="JUZGADO DE LETRAS Y GARANTÍA DE COCHRANE.">JUZGADO DE LETRAS Y GARANTÍA DE COCHRANE.</option> 							    
				
									   	<option value="JUZGADO DE LETRAS Y GARANTÍA DE PUERTO AYSEN.">JUZGADO DE LETRAS Y GARANTÍA DE PUERTO AYSEN.</option> 							    
				
									   	<option value="TRIBUNAL DE JUICIO ORAL EN LO PENAL DE COYHAIQUE.">TRIBUNAL DE JUICIO ORAL EN LO PENAL DE COYHAIQUE.</option> 							    
				
								</optgroup>
				
								<optgroup label="C.A. DE PUNTA ARENAS.         ">
				
									   	<option value="JUZGADO DE GARANTÍA DE PUNTA ARENAS.">JUZGADO DE GARANTÍA DE PUNTA ARENAS.</option> 							    
				
									   	<option value="JUZGADO DE LETRAS Y GARANTÍA DE PORVENIR.">JUZGADO DE LETRAS Y GARANTÍA DE PORVENIR.</option> 							    
				
									   	<option value="JUZGADO DE LETRAS Y GARANTÍA DE PUERTO NATALES.">JUZGADO DE LETRAS Y GARANTÍA DE PUERTO NATALES.</option> 							    
				
									   	<option value="TRIBUNAL DE JUICIO ORAL EN LO PENAL PUNTA ARENAS.">TRIBUNAL DE JUICIO ORAL EN LO PENAL PUNTA ARENAS.</option> 							    
				
								</optgroup>
				
								<optgroup label="C.A. DE SANTIAGO.             ">
				
									   	<option value="13º JUZGADO DE GARANTÍA DE SANTIAGO">13º JUZGADO DE GARANTÍA DE SANTIAGO</option> 							    
				
									   	<option value="14º JUZGADO DE GARANTÍA DE SANTIAGO">14º JUZGADO DE GARANTÍA DE SANTIAGO</option> 							    
				
									   	<option value="1º JUZGADO DE GARANTÍA DE SANTIAGO">1º JUZGADO DE GARANTÍA DE SANTIAGO</option> 							    
				
									   	<option value="1º TRIBUNAL DE JUICIO ORAL EN LO PENAL DE SANTIAGO">1º TRIBUNAL DE JUICIO ORAL EN LO PENAL DE SANTIAGO</option> 							    
				
									   	<option value="2º JUZGADO DE GARANTÍA DE SANTIAGO">2º JUZGADO DE GARANTÍA DE SANTIAGO</option> 							    
				
									   	<option value="2º TRIBUNAL DE JUICIO ORAL EN LO PENAL DE SANTIAGO">2º TRIBUNAL DE JUICIO ORAL EN LO PENAL DE SANTIAGO</option> 							    
				
									   	<option value="3º JUZGADO DE GARANTÍA DE SANTIAGO">3º JUZGADO DE GARANTÍA DE SANTIAGO</option> 							    
				
									   	<option value="3º TRIBUNAL DE JUICIO ORAL EN LO PENAL DE SANTIAGO">3º TRIBUNAL DE JUICIO ORAL EN LO PENAL DE SANTIAGO</option> 							    
				
									   	<option value="4º JUZGADO DE GARANTÍA DE SANTIAGO">4º JUZGADO DE GARANTÍA DE SANTIAGO</option> 							    
				
									   	<option value="4º TRIBUNAL DE JUICIO ORAL EN LO PENAL DE SANTIAGO">4º TRIBUNAL DE JUICIO ORAL EN LO PENAL DE SANTIAGO</option> 							    
				
									   	<option value="5º JUZGADO DE GARANTÍA DE SANTIAGO">5º JUZGADO DE GARANTÍA DE SANTIAGO</option> 							    
				
									   	<option value="5º TRIBUNAL DE JUICIO ORAL EN LO PENAL DE SANTIAGO">5º TRIBUNAL DE JUICIO ORAL EN LO PENAL DE SANTIAGO</option> 							    
				
									   	<option value="6º JUZGADO DE GARANTÍA DE SANTIAGO">6º JUZGADO DE GARANTÍA DE SANTIAGO</option> 							    
				
									   	<option value="7º JUZGADO DE GARANTÍA DE SANTIAGO">7º JUZGADO DE GARANTÍA DE SANTIAGO</option> 							    
				
									   	<option value="7º TRIBUNAL DE JUICIO ORAL EN LO PENAL DE SANTIAGO">7º TRIBUNAL DE JUICIO ORAL EN LO PENAL DE SANTIAGO</option> 							    
				
									   	<option value="8º JUZGADO DE GARANTÍA DE SANTIAGO">8º JUZGADO DE GARANTÍA DE SANTIAGO</option> 							    
				
									   	<option value="9º JUZGADO DE GARANTÍA DE SANTIAGO">9º JUZGADO DE GARANTÍA DE SANTIAGO</option> 							    
				
									   	<option value="JUZGADO DE GARANTÍA DE COLINA">JUZGADO DE GARANTÍA DE COLINA</option> 							    
				
									   	<option value="TRIBUNAL DE JUICIO ORAL EN LO PENAL COLINA">TRIBUNAL DE JUICIO ORAL EN LO PENAL COLINA</option> 							    
				
								</optgroup>
				
								<optgroup label="C.A. DE SAN MIGUEL.           ">
				
									   	<option value="10º JUZGADO DE GARANTÍA DE SANTIAGO">10º JUZGADO DE GARANTÍA DE SANTIAGO</option> 							    
				
									   	<option value="11º JUZGADO DE GARANTÍA DE SANTIAGO">11º JUZGADO DE GARANTÍA DE SANTIAGO</option> 							    
				
									   	<option value="12º JUZGADO DE GARANTÍA DE SANTIAGO">12º JUZGADO DE GARANTÍA DE SANTIAGO</option> 							    
				
									   	<option value="15º JUZGADO DE GARANTÍA DE SANTIAGO">15º JUZGADO DE GARANTÍA DE SANTIAGO</option> 							    
				
									   	<option value="6º TRIBUNAL DE JUICIO ORAL EN LO PENAL DE SAN MIGUEL">6º TRIBUNAL DE JUICIO ORAL EN LO PENAL DE SAN MIGUEL</option> 							    
				
									   	<option value="JUZGADO DE GARANTÍA DE CURACAVÍ">JUZGADO DE GARANTÍA DE CURACAVÍ</option> 							    
				
									   	<option value="JUZGADO DE GARANTÍA DE MELIPILLA">JUZGADO DE GARANTÍA DE MELIPILLA</option> 							    
				
									   	<option value="JUZGADO DE GARANTÍA DE PUENTE ALTO">JUZGADO DE GARANTÍA DE PUENTE ALTO</option> 							    
				
									   	<option value="JUZGADO DE GARANTÍA DE SAN BERNARDO">JUZGADO DE GARANTÍA DE SAN BERNARDO</option> 							    
				
									   	<option value="JUZGADO DE GARANTÍA DE TALAGANTE">JUZGADO DE GARANTÍA DE TALAGANTE</option> 							    
				
									   	<option value="TRIBUNAL DE JUICIO ORAL EN LO PENAL DE MELIPILLA">TRIBUNAL DE JUICIO ORAL EN LO PENAL DE MELIPILLA</option> 							    
				
									   	<option value="TRIBUNAL DE JUICIO ORAL EN LO PENAL PUENTE ALTO">TRIBUNAL DE JUICIO ORAL EN LO PENAL PUENTE ALTO</option> 							    
				
									   	<option value="TRIBUNAL DE JUICIO ORAL EN LO PENAL SAN BERNARDO">TRIBUNAL DE JUICIO ORAL EN LO PENAL SAN BERNARDO</option> 							    
				
									   	<option value="TRIBUNAL DE JUICIO ORAL EN LO PENAL TALAGANTE">TRIBUNAL DE JUICIO ORAL EN LO PENAL TALAGANTE</option> 							    
				
								</optgroup>
				
								<optgroup label="                              ">
				
								</optgroup>
				
								<optgroup label="CORTE SUPREMA.                ">
				
									   	<option value="CORTE SUPREMA - PRIMERA INSTANCIA.">CORTE SUPREMA - PRIMERA INSTANCIA.</option> 							    
				
				</optgroup></select>
            </div>
           
            <div class="grid-5-12">
                <label class="form-lbl">F. inicio Condena  aaaa/mm/dd <em class="form-req">*</em></label>
                <input type="text" class="form-txt" name="input_fecha_inicio_condena2[]" id="input_fecha_inicio_condena2"/>
            </div>

			
			
			
			 <div class="grid-5-12">
                <label class="form-lbl">F. termino Condena  aaaa/mm/dd <em class="form-req">*</em></label>
                <input type="text" class="form-txt" name="input_fecha_termino_condena2[]" id="input_fecha_termino_condena2"/>
            </div>
			
			
		
          

            <div class="grid-5-12">
                <label class="form-lbl">Fecha detención <em class="form-req">*</em></label>
                <input type="text" class="form-txt" name="input_fecha_detencion2[]" id="input_detencion2"/>
            </div>

            <div class="grid-5-12">
                <label class="form-lbl">Fecha control de detención <em class="form-req">*</em></label>
                <input type="text" class="form-txt" name="input_fecha_control_detencion2[]" id="input_fecha_control_detencion2"/>
            </div>	
				
		
			
			
            <div class="grid-12-12">
                <label class="form-lbl">Causal de ingreso <em class="form-req">*</em></label>
                <select name="select_tipo_materia2[]" id="select_tipo_materia2"  style="width: 500px;float:left;">
                    <option value="none" selected="">Seleccione Tipo de materia</option>
                </select>
                <select name="select_causa_delito2[]" id="select_causa_delito2" disabled="disabled" style="width: 400px;margin-left: 5px;">
                    <option value="none" selected="">Seleccione Causa Delito</option>
                </select>
            </div>
        </div>
    </div>
        <div id="bloque-boton-agregar-sancion1">
      <div class="grid-4-12"></div>
      <div class="grid-4-12">
      <div class="medium blue awesome" onClick="agregarBloqueSancion1()">
        <div class="form-button-add"></div>&nbsp;Agregar causa anterior</div>
      </div>
      <div class="grid-4-12"></div>
    </div>
    <!-- FIN causas anteriores -->

	<!-- Causas actualmente imputado -->
	    <div id="bloque-sanciones2">
		<div class="ui-widget-header ui-corner-all">
			Causas actualmente imputado
		</div>
        <div class="form3-par" id="sancion-fieldset2">
          

            <div class="grid-4-12">
                <label class="form-lbl">RUC<em class="form-req">*</em></label>
                <input type="text" class="form-txt required error" name="input_ruk_3[]" id="input_ruk_3" />
            </div>
			
            <div class="grid-8-12">
                <label class="form-lbl">Tribunal <em class="form-req">*</em></label>
                <select id="select_tribunal3" name="select_sistema_tribunal3[]">
					<option value="Seleccione Tribunal">Seleccione Tribunal</option>
				
								<optgroup label="C.A. DE ARICA.                ">
				
									   	<option value="JUZGADO DE GARANTÍA DE ARICA.">JUZGADO DE GARANTÍA DE ARICA.</option> 							    
				
									   	<option value="TRIBUNAL DE JUICIO ORAL EN LO PENAL DE ARICA.">TRIBUNAL DE JUICIO ORAL EN LO PENAL DE ARICA.</option> 							    
				
								</optgroup>
				
								<optgroup label="C.A. DE IQUIQUE.              ">
				
									   	<option value="JUZGADO DE GARANTÍA DE IQUIQUE.">JUZGADO DE GARANTÍA DE IQUIQUE.</option> 							    
				
									   	<option value="JUZGADO DE LETRAS Y GARANTÍA DE POZO ALMONTE.">JUZGADO DE LETRAS Y GARANTÍA DE POZO ALMONTE.</option> 							    
				
									   	<option value="TRIBUNAL DE JUICIO ORAL EN LO PENAL DE IQUIQUE.">TRIBUNAL DE JUICIO ORAL EN LO PENAL DE IQUIQUE.</option> 							    
				
								</optgroup>
				
								<optgroup label="C.A. DE ANTOFAGASTA.          ">
				
									   	<option value="JUZGADO DE GARANTÍA DE ANTOFAGASTA.">JUZGADO DE GARANTÍA DE ANTOFAGASTA.</option> 							    
				
									   	<option value="JUZGADO DE GARANTÍA DE CALAMA.">JUZGADO DE GARANTÍA DE CALAMA.</option> 							    
				
									   	<option value="JUZGADO DE GARANTÍA DE TOCOPILLA.">JUZGADO DE GARANTÍA DE TOCOPILLA.</option> 							    
				
									   	<option value="JUZGADO DE LETRAS Y GARANTÍA DE MARÍA ELENA.">JUZGADO DE LETRAS Y GARANTÍA DE MARÍA ELENA.</option> 							    
				
									   	<option value="JUZGADO DE LETRAS Y GARANTÍA DE TALTAL.">JUZGADO DE LETRAS Y GARANTÍA DE TALTAL.</option> 							    
				
									   	<option value="TRIBUNAL DE JUICIO ORAL EN LO PENAL DE ANTOFAGASTA.">TRIBUNAL DE JUICIO ORAL EN LO PENAL DE ANTOFAGASTA.</option> 							    
				
									   	<option value="TRIBUNAL DE JUICIO ORAL EN LO PENAL DE CALAMA.">TRIBUNAL DE JUICIO ORAL EN LO PENAL DE CALAMA.</option> 							    
				
								</optgroup>
				
								<optgroup label="C.A. DE COPIAPÓ.             ">
				
									   	<option value="JUZGADO DE GARANTÍA DE COPIAPO.">JUZGADO DE GARANTÍA DE COPIAPO.</option> 							    
				
									   	<option value="JUZGADO DE GARANTÍA DE DIEGO DE ALMAGRO.">JUZGADO DE GARANTÍA DE DIEGO DE ALMAGRO.</option> 							    
				
									   	<option value="JUZGADO DE GARANTÍA DE VALLENAR.">JUZGADO DE GARANTÍA DE VALLENAR.</option> 							    
				
									   	<option value="JUZGADO DE LETRAS Y GARANTÍA DE CALDERA.">JUZGADO DE LETRAS Y GARANTÍA DE CALDERA.</option> 							    
				
									   	<option value="JUZGADO DE LETRAS Y GARANTÍA DE CHAÑARAL.">JUZGADO DE LETRAS Y GARANTÍA DE CHAÑARAL.</option> 							    
				
									   	<option value="JUZGADO DE LETRAS Y GARANTÍA DE FREIRINA.">JUZGADO DE LETRAS Y GARANTÍA DE FREIRINA.</option> 							    
				
									   	<option value="TRIBUNAL DE JUICIO ORAL EN LO PENAL DE COPIAPO.">TRIBUNAL DE JUICIO ORAL EN LO PENAL DE COPIAPO.</option> 							    
				
								</optgroup>
				
								<optgroup label="C.A. DE LA SERENA.            ">
				
									   	<option value="JUZGADO DE GARANTÍA DE COQUIMBO.">JUZGADO DE GARANTÍA DE COQUIMBO.</option> 							    
				
									   	<option value="JUZGADO DE GARANTÍA DE ILLAPEL.">JUZGADO DE GARANTÍA DE ILLAPEL.</option> 							    
				
									   	<option value="JUZGADO DE GARANTÍA DE LA SERENA.">JUZGADO DE GARANTÍA DE LA SERENA.</option> 							    
				
									   	<option value="JUZGADO DE GARANTÍA DE OVALLE.">JUZGADO DE GARANTÍA DE OVALLE.</option> 							    
				
									   	<option value="JUZGADO DE GARANTÍA DE VICUÑA.">JUZGADO DE GARANTÍA DE VICUÑA.</option> 							    
				
									   	<option value="JUZGADO DE LETRAS Y GARANTÍA DE ANDACOLLO.">JUZGADO DE LETRAS Y GARANTÍA DE ANDACOLLO.</option> 							    
				
									   	<option value="JUZGADO DE LETRAS Y GARANTÍA DE COMBARBALA.">JUZGADO DE LETRAS Y GARANTÍA DE COMBARBALA.</option> 							    
				
									   	<option value="JUZGADO DE LETRAS Y GARANTÍA DE LOS VILOS.">JUZGADO DE LETRAS Y GARANTÍA DE LOS VILOS.</option> 							    
				
									   	<option value="TRIBUNAL DE JUICIO ORAL EN LO PENAL DE LA SERENA.">TRIBUNAL DE JUICIO ORAL EN LO PENAL DE LA SERENA.</option> 							    
				
									   	<option value="TRIBUNAL DE JUICIO ORAL EN LO PENAL DE OVALLE.">TRIBUNAL DE JUICIO ORAL EN LO PENAL DE OVALLE.</option> 							    
				
								</optgroup>
				
								<optgroup label="C.A. DE VALPARAÍSO.          ">
				
									   	<option value="JUZGADO DE GARANTÍA DE CASABLANCA.">JUZGADO DE GARANTÍA DE CASABLANCA.</option> 							    
				
									   	<option value="JUZGADO DE GARANTÍA DE LA CALERA.">JUZGADO DE GARANTÍA DE LA CALERA.</option> 							    
				
									   	<option value="JUZGADO DE GARANTÍA DE LA LIGUA.">JUZGADO DE GARANTÍA DE LA LIGUA.</option> 							    
				
									   	<option value="JUZGADO DE GARANTÍA DE LIMACHE.">JUZGADO DE GARANTÍA DE LIMACHE.</option> 							    
				
									   	<option value="JUZGADO DE GARANTÍA DE LOS ANDES.">JUZGADO DE GARANTÍA DE LOS ANDES.</option> 							    
				
									   	<option value="JUZGADO DE GARANTÍA DE QUILLOTA.">JUZGADO DE GARANTÍA DE QUILLOTA.</option> 							    
				
									   	<option value="JUZGADO DE GARANTÍA DE QUILPUÉ.">JUZGADO DE GARANTÍA DE QUILPUÉ.</option> 							    
				
									   	<option value="JUZGADO DE GARANTÍA DE SAN ANTONIO.">JUZGADO DE GARANTÍA DE SAN ANTONIO.</option> 							    
				
									   	<option value="JUZGADO DE GARANTÍA DE SAN FELIPE.">JUZGADO DE GARANTÍA DE SAN FELIPE.</option> 							    
				
									   	<option value="JUZGADO DE GARANTÍA DE VALPARAÍSO.">JUZGADO DE GARANTÍA DE VALPARAÍSO.</option> 							    
				
									   	<option value="JUZGADO DE GARANTÍA DE VILLA ALEMANA.">JUZGADO DE GARANTÍA DE VILLA ALEMANA.</option> 							    
				
									   	<option value="JUZGADO DE GARANTÍA DE VIÑA DEL MAR.">JUZGADO DE GARANTÍA DE VIÑA DEL MAR.</option> 							    
				
									   	<option value="JUZGADO DE LETRAS Y GARANTÍA DE ISLA DE PASCUA.">JUZGADO DE LETRAS Y GARANTÍA DE ISLA DE PASCUA.</option> 							    
				
									   	<option value="JUZGADO DE LETRAS Y GARANTÍA DE PETORCA.">JUZGADO DE LETRAS Y GARANTÍA DE PETORCA.</option> 							    
				
									   	<option value="JUZGADO DE LETRAS Y GARANTÍA DE PUTAENDO.">JUZGADO DE LETRAS Y GARANTÍA DE PUTAENDO.</option> 							    
				
									   	<option value="JUZGADO DE LETRAS Y GARANTÍA DE QUINTERO.">JUZGADO DE LETRAS Y GARANTÍA DE QUINTERO.</option> 							    
				
									   	<option value="TRIBUNAL DE JUICIO ORAL EN LO PENAL DE LOS ANDES.">TRIBUNAL DE JUICIO ORAL EN LO PENAL DE LOS ANDES.</option> 							    
				
									   	<option value="TRIBUNAL DE JUICIO ORAL EN LO PENAL DE QUILLOTA.">TRIBUNAL DE JUICIO ORAL EN LO PENAL DE QUILLOTA.</option> 							    
				
									   	<option value="TRIBUNAL DE JUICIO ORAL EN LO PENAL DE SAN FELIPE.">TRIBUNAL DE JUICIO ORAL EN LO PENAL DE SAN FELIPE.</option> 							    
				
									   	<option value="TRIBUNAL DE JUICIO ORAL EN LO PENAL DE VALPARAÍSO.">TRIBUNAL DE JUICIO ORAL EN LO PENAL DE VALPARAÍSO.</option> 							    
				
									   	<option value="TRIBUNAL DE JUICIO ORAL EN LO PENAL SAN ANTONIO.">TRIBUNAL DE JUICIO ORAL EN LO PENAL SAN ANTONIO.</option> 							    
				
									   	<option value="TRIBUNAL DE JUICIO ORAL EN LO PENAL VIÑA DEL MAR.">TRIBUNAL DE JUICIO ORAL EN LO PENAL VIÑA DEL MAR.</option> 							    
				
								</optgroup>
				
								<optgroup label="C.A. DE RANCAGUA.             ">
				
									   	<option value="1º JUZGADO DE LETRAS Y GARANTÍA DE PEUMO.">1º JUZGADO DE LETRAS Y GARANTÍA DE PEUMO.</option> 							    
				
									   	<option value="JUZGADO DE GARANTÍA DE GRANEROS.">JUZGADO DE GARANTÍA DE GRANEROS.</option> 							    
				
									   	<option value="JUZGADO DE GARANTÍA DE RANCAGUA.">JUZGADO DE GARANTÍA DE RANCAGUA.</option> 							    
				
									   	<option value="JUZGADO DE GARANTÍA DE RENGO.">JUZGADO DE GARANTÍA DE RENGO.</option> 							    
				
									   	<option value="JUZGADO DE GARANTÍA DE SAN FERNANDO.">JUZGADO DE GARANTÍA DE SAN FERNANDO.</option> 							    
				
									   	<option value="JUZGADO DE GARANTÍA DE SAN VICENTE DE TAGUA-TAGUA.">JUZGADO DE GARANTÍA DE SAN VICENTE DE TAGUA-TAGUA.</option> 							    
				
									   	<option value="JUZGADO DE GARANTÍA DE SANTA CRUZ.">JUZGADO DE GARANTÍA DE SANTA CRUZ.</option> 							    
				
									   	<option value="JUZGADO DE LETRAS Y GARANTÍA DE LITUECHE.">JUZGADO DE LETRAS Y GARANTÍA DE LITUECHE.</option> 							    
				
									   	<option value="JUZGADO DE LETRAS Y GARANTÍA DE PERALILLO.">JUZGADO DE LETRAS Y GARANTÍA DE PERALILLO.</option> 							    
				
									   	<option value="JUZGADO DE LETRAS Y GARANTÍA DE PICHILEMU.">JUZGADO DE LETRAS Y GARANTÍA DE PICHILEMU.</option> 							    
				
									   	<option value="TRIBUNAL DE JUICIO ORAL EN LO PENAL DE RANCAGUA.">TRIBUNAL DE JUICIO ORAL EN LO PENAL DE RANCAGUA.</option> 							    
				
									   	<option value="TRIBUNAL DE JUICIO ORAL EN LO PENAL DE SANTA CRUZ.">TRIBUNAL DE JUICIO ORAL EN LO PENAL DE SANTA CRUZ.</option> 							    
				
									   	<option value="TRIBUNAL DE JUICIO ORAL EN LO PENAL SAN FERNANDO.">TRIBUNAL DE JUICIO ORAL EN LO PENAL SAN FERNANDO.</option> 							    
				
								</optgroup>
				
								<optgroup label="C.A. DE TALCA.                ">
				
									   	<option value="JUZGADO DE GARANTÍA DE CAUQUENES.">JUZGADO DE GARANTÍA DE CAUQUENES.</option> 							    
				
									   	<option value="JUZGADO DE GARANTÍA DE CONSTITUCIÓN.">JUZGADO DE GARANTÍA DE CONSTITUCIÓN.</option> 							    
				
									   	<option value="JUZGADO DE GARANTÍA DE CURICO.">JUZGADO DE GARANTÍA DE CURICO.</option> 							    
				
									   	<option value="JUZGADO DE GARANTÍA DE LINARES.">JUZGADO DE GARANTÍA DE LINARES.</option> 							    
				
									   	<option value="JUZGADO DE GARANTÍA DE MOLINA.">JUZGADO DE GARANTÍA DE MOLINA.</option> 							    
				
									   	<option value="JUZGADO DE GARANTÍA DE PARRAL.">JUZGADO DE GARANTÍA DE PARRAL.</option> 							    
				
									   	<option value="JUZGADO DE GARANTÍA DE SAN JAVIER.">JUZGADO DE GARANTÍA DE SAN JAVIER.</option> 							    
				
									   	<option value="JUZGADO DE GARANTÍA DE TALCA.">JUZGADO DE GARANTÍA DE TALCA.</option> 							    
				
									   	<option value="TRIBUNAL DE JUICIO ORAL EN LO PENAL DE CAUQUENES.">TRIBUNAL DE JUICIO ORAL EN LO PENAL DE CAUQUENES.</option> 							    
				
									   	<option value="TRIBUNAL DE JUICIO ORAL EN LO PENAL DE CURICO.">TRIBUNAL DE JUICIO ORAL EN LO PENAL DE CURICO.</option> 							    
				
									   	<option value="TRIBUNAL DE JUICIO ORAL EN LO PENAL DE LINARES.">TRIBUNAL DE JUICIO ORAL EN LO PENAL DE LINARES.</option> 							    
				
									   	<option value="TRIBUNAL DE JUICIO ORAL EN LO PENAL DE TALCA.">TRIBUNAL DE JUICIO ORAL EN LO PENAL DE TALCA.</option> 							    
				
								</optgroup>
				
								<optgroup label="C.A. DE CHILLÁN.             ">
				
									   	<option value="JUZGADO DE GARANTÍA DE CHILLÁN.">JUZGADO DE GARANTÍA DE CHILLÁN.</option> 							    
				
									   	<option value="JUZGADO DE GARANTÍA DE SAN CARLOS.">JUZGADO DE GARANTÍA DE SAN CARLOS.</option> 							    
				
									   	<option value="JUZGADO DE GARANTÍA DE YUNGAY.">JUZGADO DE GARANTÍA DE YUNGAY.</option> 							    
				
									   	<option value="JUZGADO DE LETRAS Y GARANTÍA DE BULNES.">JUZGADO DE LETRAS Y GARANTÍA DE BULNES.</option> 							    
				
									   	<option value="JUZGADO DE LETRAS Y GARANTÍA DE COELEMU.">JUZGADO DE LETRAS Y GARANTÍA DE COELEMU.</option> 							    
				
									   	<option value="JUZGADO DE LETRAS Y GARANTÍA DE QUIRIHUE.">JUZGADO DE LETRAS Y GARANTÍA DE QUIRIHUE.</option> 							    
				
									   	<option value="TRIBUNAL DE JUICIO ORAL EN LO PENAL DE CHILLÁN.">TRIBUNAL DE JUICIO ORAL EN LO PENAL DE CHILLÁN.</option> 							    
				
								</optgroup>
				
								<optgroup label="C.A. DE CONCEPCIÓN.          ">
				
									   	<option value="JUZGADO DE GARANTÍA DE ARAUCO.">JUZGADO DE GARANTÍA DE ARAUCO.</option> 							    
				
									   	<option value="JUZGADO DE GARANTÍA DE CAÑETE.">JUZGADO DE GARANTÍA DE CAÑETE.</option> 							    
				
									   	<option value="JUZGADO DE GARANTÍA DE CHIGUAYANTE.">JUZGADO DE GARANTÍA DE CHIGUAYANTE.</option> 							    
				
									   	<option value="JUZGADO DE GARANTÍA DE CONCEPCIÓN.">JUZGADO DE GARANTÍA DE CONCEPCIÓN.</option> 							    
				
									   	<option value="JUZGADO DE GARANTÍA DE CORONEL.">JUZGADO DE GARANTÍA DE CORONEL.</option> 							    
				
									   	<option value="JUZGADO DE GARANTÍA DE LOS ANGELES.">JUZGADO DE GARANTÍA DE LOS ANGELES.</option> 							    
				
									   	<option value="JUZGADO DE GARANTÍA DE SAN PEDRO DE LA PAZ.">JUZGADO DE GARANTÍA DE SAN PEDRO DE LA PAZ.</option> 							    
				
									   	<option value="JUZGADO DE GARANTÍA DE TALCAHUANO.">JUZGADO DE GARANTÍA DE TALCAHUANO.</option> 							    
				
									   	<option value="JUZGADO DE GARANTÍA DE TOMÉ.">JUZGADO DE GARANTÍA DE TOMÉ.</option> 							    
				
									   	<option value="JUZGADO DE LETRAS Y GARANTÍA DE CABRERO.">JUZGADO DE LETRAS Y GARANTÍA DE CABRERO.</option> 							    
				
									   	<option value="JUZGADO DE LETRAS Y GARANTÍA DE CURANILAHUE.">JUZGADO DE LETRAS Y GARANTÍA DE CURANILAHUE.</option> 							    
				
									   	<option value="JUZGADO DE LETRAS Y GARANTÍA DE FLORIDA.">JUZGADO DE LETRAS Y GARANTÍA DE FLORIDA.</option> 							    
				
									   	<option value="JUZGADO DE LETRAS Y GARANTÍA DE LAJA.">JUZGADO DE LETRAS Y GARANTÍA DE LAJA.</option> 							    
				
									   	<option value="JUZGADO DE LETRAS Y GARANTÍA DE LEBU.">JUZGADO DE LETRAS Y GARANTÍA DE LEBU.</option> 							    
				
									   	<option value="JUZGADO DE LETRAS Y GARANTÍA DE LOTA.">JUZGADO DE LETRAS Y GARANTÍA DE LOTA.</option> 							    
				
									   	<option value="JUZGADO DE LETRAS Y GARANTÍA DE MULCHEN.">JUZGADO DE LETRAS Y GARANTÍA DE MULCHEN.</option> 							    
				
									   	<option value="JUZGADO DE LETRAS Y GARANTÍA DE SANTA BARBARA.">JUZGADO DE LETRAS Y GARANTÍA DE SANTA BARBARA.</option> 							    
				
									   	<option value="JUZGADO DE LETRAS Y GARANTÍA DE SANTA JUANA.">JUZGADO DE LETRAS Y GARANTÍA DE SANTA JUANA.</option> 							    
				
									   	<option value="JUZGADO DE LETRAS Y GARANTÍA DE YUMBEL.">JUZGADO DE LETRAS Y GARANTÍA DE YUMBEL.</option> 							    
				
									   	<option value="TRIBUNAL DE JUICIO ORAL EN LO PENAL DE CONCEPCIÓN.">TRIBUNAL DE JUICIO ORAL EN LO PENAL DE CONCEPCIÓN.</option> 							    
				
									   	<option value="TRIBUNAL ORAL EN LO PENAL DE CAÑETE">TRIBUNAL ORAL EN LO PENAL DE CAÑETE</option> 							    
				
									   	<option value="TRIBUNAL ORAL EN LO PENAL DE LOS ANGELES">TRIBUNAL ORAL EN LO PENAL DE LOS ANGELES</option> 							    
				
								</optgroup>
				
								<optgroup label="C.A. DE TEMUCO.               ">
				
									   	<option value="JUZGADO DE GARANTÍA DE ANGOL.">JUZGADO DE GARANTÍA DE ANGOL.</option> 							    
				
									   	<option value="JUZGADO DE GARANTÍA DE LAUTARO.">JUZGADO DE GARANTÍA DE LAUTARO.</option> 							    
				
									   	<option value="JUZGADO DE GARANTÍA DE LONCOCHE.">JUZGADO DE GARANTÍA DE LONCOCHE.</option> 							    
				
									   	<option value="JUZGADO DE GARANTÍA DE NUEVA IMPERIAL.">JUZGADO DE GARANTÍA DE NUEVA IMPERIAL.</option> 							    
				
									   	<option value="JUZGADO DE GARANTÍA DE PITRUFQUEN.">JUZGADO DE GARANTÍA DE PITRUFQUEN.</option> 							    
				
									   	<option value="JUZGADO DE GARANTÍA DE TEMUCO.">JUZGADO DE GARANTÍA DE TEMUCO.</option> 							    
				
									   	<option value="JUZGADO DE GARANTÍA DE VICTORIA.">JUZGADO DE GARANTÍA DE VICTORIA.</option> 							    
				
									   	<option value="JUZGADO DE GARANTÍA DE VILLARRICA.">JUZGADO DE GARANTÍA DE VILLARRICA.</option> 							    
				
									   	<option value="JUZGADO DE LETRAS Y GARANTÍA DE CARAHUE.">JUZGADO DE LETRAS Y GARANTÍA DE CARAHUE.</option> 							    
				
									   	<option value="JUZGADO DE LETRAS Y GARANTÍA DE COLLIPULLI.">JUZGADO DE LETRAS Y GARANTÍA DE COLLIPULLI.</option> 							    
				
									   	<option value="JUZGADO DE LETRAS Y GARANTÍA DE CURACAUTIN.">JUZGADO DE LETRAS Y GARANTÍA DE CURACAUTIN.</option> 							    
				
									   	<option value="JUZGADO DE LETRAS Y GARANTÍA DE PUCON.">JUZGADO DE LETRAS Y GARANTÍA DE PUCON.</option> 							    
				
									   	<option value="JUZGADO DE LETRAS Y GARANTÍA DE PUREN.">JUZGADO DE LETRAS Y GARANTÍA DE PUREN.</option> 							    
				
									   	<option value="JUZGADO DE LETRAS Y GARANTÍA DE TOLTEN.">JUZGADO DE LETRAS Y GARANTÍA DE TOLTEN.</option> 							    
				
									   	<option value="JUZGADO DE LETRAS Y GARANTÍA DE TRAIGUEN.">JUZGADO DE LETRAS Y GARANTÍA DE TRAIGUEN.</option> 							    
				
									   	<option value="TRIBUNAL DE JUICIO ORAL EN LO PENAL DE ANGOL.">TRIBUNAL DE JUICIO ORAL EN LO PENAL DE ANGOL.</option> 							    
				
									   	<option value="TRIBUNAL DE JUICIO ORAL EN LO PENAL DE TEMUCO.">TRIBUNAL DE JUICIO ORAL EN LO PENAL DE TEMUCO.</option> 							    
				
									   	<option value="TRIBUNAL DE JUICIO ORAL EN LO PENAL DE VILLARRICA.">TRIBUNAL DE JUICIO ORAL EN LO PENAL DE VILLARRICA.</option> 							    
				
								</optgroup>
				
								<optgroup label="C.A. DE VALDIVIA.             ">
				
									   	<option value="JUZGADO DE GARANTÍA DE LOS LAGOS.">JUZGADO DE GARANTÍA DE LOS LAGOS.</option> 							    
				
									   	<option value="JUZGADO DE GARANTÍA DE MARIQUINA.">JUZGADO DE GARANTÍA DE MARIQUINA.</option> 							    
				
									   	<option value="JUZGADO DE GARANTÍA DE OSORNO.">JUZGADO DE GARANTÍA DE OSORNO.</option> 							    
				
									   	<option value="JUZGADO DE GARANTÍA DE RÍO NEGRO.">JUZGADO DE GARANTÍA DE RÍO NEGRO.</option> 							    
				
									   	<option value="JUZGADO DE GARANTÍA DE VALDIVIA.">JUZGADO DE GARANTÍA DE VALDIVIA.</option> 							    
				
									   	<option value="JUZGADO DE LETRAS Y GARANTÍA DE LA UNIÓN.">JUZGADO DE LETRAS Y GARANTÍA DE LA UNIÓN.</option> 							    
				
									   	<option value="JUZGADO DE LETRAS Y GARANTÍA DE PAILLACO.">JUZGADO DE LETRAS Y GARANTÍA DE PAILLACO.</option> 							    
				
									   	<option value="JUZGADO DE LETRAS Y GARANTÍA DE PANGUIPULLI.">JUZGADO DE LETRAS Y GARANTÍA DE PANGUIPULLI.</option> 							    
				
									   	<option value="JUZGADO DE LETRAS Y GARANTÍA DE RÍO BUENO.">JUZGADO DE LETRAS Y GARANTÍA DE RÍO BUENO.</option> 							    
				
									   	<option value="TRIBUNAL DE JUICIO ORAL EN LO PENAL DE OSORNO">TRIBUNAL DE JUICIO ORAL EN LO PENAL DE OSORNO</option> 							    
				
									   	<option value="TRIBUNAL DE JUICIO ORAL EN LO PENAL DE VALDIVIA.">TRIBUNAL DE JUICIO ORAL EN LO PENAL DE VALDIVIA.</option> 							    
				
								</optgroup>
				
								<optgroup label="C.A. DE PUERTO MONTT.         ">
				
									   	<option value="JUGADO DE LETRAS Y GARANTÍA DE HUALAIHUE">JUGADO DE LETRAS Y GARANTÍA DE HUALAIHUE</option> 							    
				
									   	<option value="JUZGADO DE GARANTÍA DE ANCUD.">JUZGADO DE GARANTÍA DE ANCUD.</option> 							    
				
									   	<option value="JUZGADO DE GARANTÍA DE CASTRO.">JUZGADO DE GARANTÍA DE CASTRO.</option> 							    
				
									   	<option value="JUZGADO DE GARANTÍA DE PUERTO MONTT.">JUZGADO DE GARANTÍA DE PUERTO MONTT.</option> 							    
				
									   	<option value="JUZGADO DE GARANTÍA DE PUERTO VARAS.">JUZGADO DE GARANTÍA DE PUERTO VARAS.</option> 							    
				
									   	<option value="JUZGADO DE LETRAS Y GARANTÍA DE ACHAO.">JUZGADO DE LETRAS Y GARANTÍA DE ACHAO.</option> 							    
				
									   	<option value="JUZGADO DE LETRAS Y GARANTÍA DE CALBUCO.">JUZGADO DE LETRAS Y GARANTÍA DE CALBUCO.</option> 							    
				
									   	<option value="JUZGADO DE LETRAS Y GARANTÍA DE LOS MUERMOS.">JUZGADO DE LETRAS Y GARANTÍA DE LOS MUERMOS.</option> 							    
				
									   	<option value="JUZGADO DE LETRAS Y GARANTÍA DE QUELLON.">JUZGADO DE LETRAS Y GARANTÍA DE QUELLON.</option> 							    
				
									   	<option value="TRIBUNAL DE JUICIO ORAL EN LO PENAL PUERTO MONTT.">TRIBUNAL DE JUICIO ORAL EN LO PENAL PUERTO MONTT.</option> 							    
				
									   	<option value="TRIBUNAL ORAL EN LO PENAL DE CASTRO">TRIBUNAL ORAL EN LO PENAL DE CASTRO</option> 							    
				
								</optgroup>
				
								<optgroup label="C.A. DE COYHAIQUE.            ">
				
									   	<option value="JUZGADO DE GARANTÍA DE COYHAIQUE.">JUZGADO DE GARANTÍA DE COYHAIQUE.</option> 							    
				
									   	<option value="JUZGADO DE LETRAS Y GARANTÍA DE CHILE CHICO.">JUZGADO DE LETRAS Y GARANTÍA DE CHILE CHICO.</option> 							    
				
									   	<option value="JUZGADO DE LETRAS Y GARANTÍA DE CISNES.">JUZGADO DE LETRAS Y GARANTÍA DE CISNES.</option> 							    
				
									   	<option value="JUZGADO DE LETRAS Y GARANTÍA DE COCHRANE.">JUZGADO DE LETRAS Y GARANTÍA DE COCHRANE.</option> 							    
				
									   	<option value="JUZGADO DE LETRAS Y GARANTÍA DE PUERTO AYSEN.">JUZGADO DE LETRAS Y GARANTÍA DE PUERTO AYSEN.</option> 							    
				
									   	<option value="TRIBUNAL DE JUICIO ORAL EN LO PENAL DE COYHAIQUE.">TRIBUNAL DE JUICIO ORAL EN LO PENAL DE COYHAIQUE.</option> 							    
				
								</optgroup>
				
								<optgroup label="C.A. DE PUNTA ARENAS.         ">
				
									   	<option value="JUZGADO DE GARANTÍA DE PUNTA ARENAS.">JUZGADO DE GARANTÍA DE PUNTA ARENAS.</option> 							    
				
									   	<option value="JUZGADO DE LETRAS Y GARANTÍA DE PORVENIR.">JUZGADO DE LETRAS Y GARANTÍA DE PORVENIR.</option> 							    
				
									   	<option value="JUZGADO DE LETRAS Y GARANTÍA DE PUERTO NATALES.">JUZGADO DE LETRAS Y GARANTÍA DE PUERTO NATALES.</option> 							    
				
									   	<option value="TRIBUNAL DE JUICIO ORAL EN LO PENAL PUNTA ARENAS.">TRIBUNAL DE JUICIO ORAL EN LO PENAL PUNTA ARENAS.</option> 							    
				
								</optgroup>
				
								<optgroup label="C.A. DE SANTIAGO.             ">
				
									   	<option value="13º JUZGADO DE GARANTÍA DE SANTIAGO">13º JUZGADO DE GARANTÍA DE SANTIAGO</option> 							    
				
									   	<option value="14º JUZGADO DE GARANTÍA DE SANTIAGO">14º JUZGADO DE GARANTÍA DE SANTIAGO</option> 							    
				
									   	<option value="1º JUZGADO DE GARANTÍA DE SANTIAGO">1º JUZGADO DE GARANTÍA DE SANTIAGO</option> 							    
				
									   	<option value="1º TRIBUNAL DE JUICIO ORAL EN LO PENAL DE SANTIAGO">1º TRIBUNAL DE JUICIO ORAL EN LO PENAL DE SANTIAGO</option> 							    
				
									   	<option value="2º JUZGADO DE GARANTÍA DE SANTIAGO">2º JUZGADO DE GARANTÍA DE SANTIAGO</option> 							    
				
									   	<option value="2º TRIBUNAL DE JUICIO ORAL EN LO PENAL DE SANTIAGO">2º TRIBUNAL DE JUICIO ORAL EN LO PENAL DE SANTIAGO</option> 							    
				
									   	<option value="3º JUZGADO DE GARANTÍA DE SANTIAGO">3º JUZGADO DE GARANTÍA DE SANTIAGO</option> 							    
				
									   	<option value="3º TRIBUNAL DE JUICIO ORAL EN LO PENAL DE SANTIAGO">3º TRIBUNAL DE JUICIO ORAL EN LO PENAL DE SANTIAGO</option> 							    
				
									   	<option value="4º JUZGADO DE GARANTÍA DE SANTIAGO">4º JUZGADO DE GARANTÍA DE SANTIAGO</option> 							    
				
									   	<option value="4º TRIBUNAL DE JUICIO ORAL EN LO PENAL DE SANTIAGO">4º TRIBUNAL DE JUICIO ORAL EN LO PENAL DE SANTIAGO</option> 							    
				
									   	<option value="5º JUZGADO DE GARANTÍA DE SANTIAGO">5º JUZGADO DE GARANTÍA DE SANTIAGO</option> 							    
				
									   	<option value="5º TRIBUNAL DE JUICIO ORAL EN LO PENAL DE SANTIAGO">5º TRIBUNAL DE JUICIO ORAL EN LO PENAL DE SANTIAGO</option> 							    
				
									   	<option value="6º JUZGADO DE GARANTÍA DE SANTIAGO">6º JUZGADO DE GARANTÍA DE SANTIAGO</option> 							    
				
									   	<option value="7º JUZGADO DE GARANTÍA DE SANTIAGO">7º JUZGADO DE GARANTÍA DE SANTIAGO</option> 							    
				
									   	<option value="7º TRIBUNAL DE JUICIO ORAL EN LO PENAL DE SANTIAGO">7º TRIBUNAL DE JUICIO ORAL EN LO PENAL DE SANTIAGO</option> 							    
				
									   	<option value="8º JUZGADO DE GARANTÍA DE SANTIAGO">8º JUZGADO DE GARANTÍA DE SANTIAGO</option> 							    
				
									   	<option value="9º JUZGADO DE GARANTÍA DE SANTIAGO">9º JUZGADO DE GARANTÍA DE SANTIAGO</option> 							    
				
									   	<option value="JUZGADO DE GARANTÍA DE COLINA">JUZGADO DE GARANTÍA DE COLINA</option> 							    
				
									   	<option value="TRIBUNAL DE JUICIO ORAL EN LO PENAL COLINA">TRIBUNAL DE JUICIO ORAL EN LO PENAL COLINA</option> 							    
				
								</optgroup>
				
								<optgroup label="C.A. DE SAN MIGUEL.           ">
				
									   	<option value="10º JUZGADO DE GARANTÍA DE SANTIAGO">10º JUZGADO DE GARANTÍA DE SANTIAGO</option> 							    
				
									   	<option value="11º JUZGADO DE GARANTÍA DE SANTIAGO">11º JUZGADO DE GARANTÍA DE SANTIAGO</option> 							    
				
									   	<option value="12º JUZGADO DE GARANTÍA DE SANTIAGO">12º JUZGADO DE GARANTÍA DE SANTIAGO</option> 							    
				
									   	<option value="15º JUZGADO DE GARANTÍA DE SANTIAGO">15º JUZGADO DE GARANTÍA DE SANTIAGO</option> 							    
				
									   	<option value="6º TRIBUNAL DE JUICIO ORAL EN LO PENAL DE SAN MIGUEL">6º TRIBUNAL DE JUICIO ORAL EN LO PENAL DE SAN MIGUEL</option> 							    
				
									   	<option value="JUZGADO DE GARANTÍA DE CURACAVÍ">JUZGADO DE GARANTÍA DE CURACAVÍ</option> 							    
				
									   	<option value="JUZGADO DE GARANTÍA DE MELIPILLA">JUZGADO DE GARANTÍA DE MELIPILLA</option> 							    
				
									   	<option value="JUZGADO DE GARANTÍA DE PUENTE ALTO">JUZGADO DE GARANTÍA DE PUENTE ALTO</option> 							    
				
									   	<option value="JUZGADO DE GARANTÍA DE SAN BERNARDO">JUZGADO DE GARANTÍA DE SAN BERNARDO</option> 							    
				
									   	<option value="JUZGADO DE GARANTÍA DE TALAGANTE">JUZGADO DE GARANTÍA DE TALAGANTE</option> 							    
				
									   	<option value="TRIBUNAL DE JUICIO ORAL EN LO PENAL DE MELIPILLA">TRIBUNAL DE JUICIO ORAL EN LO PENAL DE MELIPILLA</option> 							    
				
									   	<option value="TRIBUNAL DE JUICIO ORAL EN LO PENAL PUENTE ALTO">TRIBUNAL DE JUICIO ORAL EN LO PENAL PUENTE ALTO</option> 							    
				
									   	<option value="TRIBUNAL DE JUICIO ORAL EN LO PENAL SAN BERNARDO">TRIBUNAL DE JUICIO ORAL EN LO PENAL SAN BERNARDO</option> 							    
				
									   	<option value="TRIBUNAL DE JUICIO ORAL EN LO PENAL TALAGANTE">TRIBUNAL DE JUICIO ORAL EN LO PENAL TALAGANTE</option> 							    
				
								</optgroup>
				
								<optgroup label="                              ">
				
								</optgroup>
				
								<optgroup label="CORTE SUPREMA.                ">
				
									   	<option value="CORTE SUPREMA - PRIMERA INSTANCIA.">CORTE SUPREMA - PRIMERA INSTANCIA.</option> 							    
				
				</optgroup></select>
            </div>
           
            <div class="grid-4-12">
                <label class="form-lbl">F. inicio investigacion  aaaa/mm/dd <em class="form-req">*</em></label>
                <input type="text" class="form-txt" name="input_fecha_inicio_condena3[]" id="input_fecha_inicio_condena3"/>
            </div>

					
			
			 <div class="grid-3-12">
                <label class="form-lbl">Plazo investigación (días) <em class="form-req">*</em></label>
                <input type="text" class="form-txt" name="input_plazo3[]" id="input_plazo3"/>
            </div>
			              
						
						
            <div class="grid-12-12">
                <label class="form-lbl">Causal de ingreso <em class="form-req">*</em></label>
                <select name="select_tipo_materia3[]" id="select_tipo_materia3"  style="width: 500px;float:left;">
                    <option value="none" selected="">Seleccione Tipo de materia</option>
                </select>
                <select name="select_causa_delito3[]" id="select_causa_delito3" disabled="disabled" style="width: 400px;margin-left: 5px;">
                    <option value="none" selected="">Seleccione Causa Delito</option>
                </select>
            </div>
        </div>
    </div>
        <div id="bloque-boton-agregar-sancion2">
      <div class="grid-4-12"></div>
      <div class="grid-4-12">
      <div class="medium blue awesome" onClick="agregarBloqueSancion2()">
        <div class="form-button-add"></div>&nbsp;Agregar causa actualmente imputado</div>
      </div>
      <div class="grid-4-12"></div>
    </div>
    <!-- FIN causas anteriores -->
	
	
	
	
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






<div id="dialog-confirm-registro" title="Ingresar nuevo encuestado?">
	<p><span class="ui-icon ui-icon-alert" style="float:left; margin:0 7px 20px 0;"></span><strong>Hey!</strong> ¿Estás seguro que quieres guardar los datos de este nuevo encuestado?. Si estas complertamente seguro de agregar a un nuevo encuestado presiona <b>Registrar Encuestado</b>; puedes presionar <b>Cancelar</b> si deseas corregir los datos antes de enviar el formulario.</p>
</div>


<div id="panelNavegacion">
	<div class="grid-12-12 form-no-lbl">
	<!--	<input class="form-button form-left" type="reset" title="anterior" value="Anterior" />  -->
		<input class="form-button form-right" type="submit" title="siguiente" value="Siguiente"/>
	</div>
</div>



</form>

