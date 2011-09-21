<?php slot('title') ?>
  <?php  echo "[{$porcCompletado} % completado] (CausasAnteriores) Ficha Criminométrica"; ?>
<?php end_slot(); ?>
<script type="text/javascript">var url_consultaCausaDelito="<?php echo url_for('CausasAnteriores/consultaCausaDelito'); ?>";</script>
<script type="text/javascript">var url_consultaMateriaDelito="<?php echo url_for('CausasAnteriores/consultaMateriaDelito'); ?>";</script>

<?php $url_save_post=url_for('CausasAnteriores/GuardarInstrumento?idEncuestado='.$idEncuestado);?>

  <?php if(!($es_ultimo_bloque)): ?>
  


<div id="contenido" style="display:display">
 <form id="formulario_CausasAnteriores" name="formulario_CausasAnteriores" class="form" method="post" action="<?php echo $url_save_post; ?>">


     
     
  <div id="bloque-sanciones1">
		<div class="ui-widget-header ui-corner-all">
			Causas Anteriores
		</div>
      
          <?php for($i = 1; $i <= 10; $i++): ?>
      
          <div class="form2-par" id="sancion-fieldset_svigente<?php echo $i;?>" <?php if($i>1){echo "style='display:none'";};?>>
   
          

            <div class="grid-4-12">
                <label class="form-lbl">RUC<em class="form-req">*</em></label>
                <input type="text" class="form-txt required error" name="input_ruk<?php echo $i;?>" id="input_ruk<?php echo $i;?>" />
            </div>
			
            <div class="grid-8-12">
                <label class="form-lbl">Tribunal <em class="form-req">*</em></label>
                <select id="select_tribunal<?php echo $i;?>" name="select_sistema_tribunal<?php echo $i;?>">
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
                <input type="text" class="form-txt" name="input_fecha_inicio_condena<?php echo $i;?>" id="input_fecha_inicio_condena<?php echo $i;?>"/>
            </div>

			
			
			
			 <div class="grid-5-12">
                <label class="form-lbl">F. termino Condena  aaaa/mm/dd <em class="form-req">*</em></label>
                <input type="text" class="form-txt" name="input_fecha_termino_condena<?php echo $i;?>" id="input_fecha_termino_condena<?php echo $i;?>"/>
            </div>
			
			
		
          

            <div class="grid-5-12">
                <label class="form-lbl">Fecha de comisión del delito aaaa/mm/dd<em class="form-req">*</em></label>
                <input type="text" class="form-txt" name="input_fecha_detencion<?php echo $i;?>" id="input_detencion<?php echo $i;?>"/>
            </div>

            <div class="grid-5-12">
                <label class="form-lbl">Fecha control de detención aaaa/mm/dd<em class="form-req">*</em></label>
                <input type="text" class="form-txt" name="input_fecha_control_detencion<?php echo $i;?>" id="input_fecha_control_detencion<?php echo $i;?>"/>
            </div>	
				
		
			
			
            <div class="grid-12-12">
                <label class="form-lbl">Causal de ingreso <em class="form-req">*</em></label>
                <select name="select_tipo_materia<?php echo $i;?>" id="select_tipo_materia<?php echo $i;?>"  style="width: 500px;float:left;">
                    <option value="none" selected="">Seleccione Tipo de materia</option>
                </select>
                <select name="select_causa_delito<?php echo $i;?>" id="select_causa_delito<?php echo $i;?>" disabled="disabled" style="width: 400px;margin-left: 5px;">
                    <option value="none" selected="">Seleccione Causa Delito</option>
                </select>
            </div>
        </div>
            <?php  endfor; ?> 
    </div>
   	<div id="bloque-boton-agregar-sancion">
      <div class="grid-4-12"></div>
      <div class="grid-4-12">
      <div class="medium blue awesome" onClick="agregarBloqueSVIGENTE()">
        <div class="form-button-add"></div>&nbsp;Agregar sanción vigente</div>
        <input type="text" id="CANT_CausasAnteriores" name="CANT_CausasAnteriores" style="display:none" value="1"></input>
      </div>
      <div class="grid-3-12">
        <div class="bloque-sancion-borrar" onClick="eliminarBloqueSVIGENTE()">Eliminar último bloque</div>
      </div><div class="grid-1-12"></div>
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
<div class="grid-4-12" style="display:none">
  <button class="form-button" type="submit" name="Guardar"><span class="ui-icon ui-icon-disk" style="float:left;"></span>Guardar</button>
</div>



    <input type="text" id="CLOSE_FLAG" name="CLOSE_FLAG" style="display:none" value="NOCERRADO"></input>
    <div class="grid-4-12">
    <a class="form-button-off form-left" style="display: block;"
      onclick="
              if(confirm('OJO. Al cerrar el formulario ya no podrás volver a modificarlo.')){
                  $('#CLOSE_FLAG').val('CERRADO');
                   document.formulario_CausasAnteriores.submit();
              }">Cerrar</a>
    </div>
</div><div class="clear"></div>

<?php else: ?>
<div class="grid-4-12"></div>
<div class="grid-4-12">
  <a class="form-button form-right" href="<?php echo url_for('principal/dashboard?idEncuestado='.$idEncuestado);?>"><- Volver al menú</a>
</div>
<div class="grid-4-12"></div><div class="clear"></div>
<?php endif; ?>
<!-- Fin Botón envio de formulario, en caso de ser último bloque advierte que se cerrará el formulario si se continua -->
<input type="text" id="tstart" name="tstart" style="display:none" value="<?php echo $tstart; ?>"></input>
</form>
 


 
 
</div><!-- Fin contenido -->





<script type="text/javascript">
                $().ready(function() {
                     $("form").loadJSON(<?php echo $sf_data->getRaw('respuestasGuardadas');?>);
                     $("#msgzone").hide();
                     $("#contenido").show();
                });
</script>
