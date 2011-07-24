<?php slot('title') ?>
  <?php  echo "(FCMF) Ficha Criminométrica"; ?>
<?php end_slot(); ?>

<?php 
$url_save_post=url_for('FCMF/GuardarInstrumento?idEncuestado='.$idEncuestado);
if($consenso==1){
  $url_save_post=url_for('FCMF/GuardarInstrumento?idEncuestado='.$idEncuestado.'&modoConsenso=true');
}
?>

  <?php if(!($es_ultimo_bloque)): ?>

  <?php if($consenso==1): ?>
           
  <div class="grid-12-12 ui-widget ui-consenso-header ui-corner-all" style="position: relative;"><?php  echo "(FCMF) Ficha Criminométrica (Modo consenso)";?>
  </div><div class="clear"></div>
        

    <?php else: ?>
          
  <div class="grid-12-12 ui-widget ui-widget-header ui-corner-all" style="position: relative;"><?php  echo "(FCMF) Ficha Criminométrica ";?>
  </div><div class="clear"></div>
      
      <?php endif; ?>
        

<div id="msgzone">
    <div class="grid-12-12">
      <?php echo image_tag('loading-image.gif','style=float:left;') ?><h3 id="mensaje">Guardando...</h3>
    </div>
    <div class="clear"></div>
</div>

<div id="contenido" style="display:display">
 <form id="formulario_FCRIMINOMETRICA" name="formulario_FCRIMINOMETRICA" class="form" method="post" action="<?php echo $url_save_post; ?>">


<!-- **************** FORMULARIO BY DALACOST ********************************** -->

<div class="grid-6-12">
 <div id="accordion"> 
 <h3><a href="#"><div style="float:left;">1.1 Antagonismo</div> <div id="result_11" style="margin-left: 350px;">(0)</div></a> </h3>
	 <div>
						<div id="516965" align=left x:publishsource="Excel">

				<table border=0 cellpadding=0 cellspacing=0 width=288 style='border-collapse:
				 collapse;table-layout:fixed;width:217pt'>
				 <col width=33 style='mso-width-source:userset;mso-width-alt:1206;width:25pt'>
				 <col width=68 style='mso-width-source:userset;mso-width-alt:2486;width:51pt'>
				 <col width=33 style='mso-width-source:userset;mso-width-alt:1206;width:25pt'>
				 <col width=51 style='mso-width-source:userset;mso-width-alt:1865;width:38pt'>
				 <col width=37 style='mso-width-source:userset;mso-width-alt:1353;width:28pt'>
				 <col width=33 span=2 style='mso-width-source:userset;mso-width-alt:1206;
				 width:25pt'>
				 <tr height=17 style='height:12.75pt'>
				  <td height=17 class=xl6530990 colspan=3 width=134 style='height:12.75pt; width:101pt'>A -<font class="font530990"> Acto delictivo </font><a href="#" class="tip_trigger"> <IMG src="/images/question-white.png" /><span class="tip">En este punto considere las conductas judicializadas </br>y no judicializadas.</span></a></td>
</div></td>
				  <td class=xl1530990 width=51 style='width:38pt'></td>
				  <td class=xl1530990 width=37 style='width:28pt'></td>
				  <td class=xl1530990 width=33 style='width:25pt'></td>
				  <td class=xl1530990 width=33 style='width:25pt'></td>
				 </tr>
				 <tr height=17 style='height:12.75pt'>
				  <td height=17 class=xl6530990 colspan=2 style='height:12.75pt'><div id="texto_otros">1. Ritmo <a href="#" class="ritmotrigger"><IMG src="/images/question-white.png" /></a> </td>
				  <td class=xl1530990></td>
				  <td class=xl1530990></td>
				  <td class=xl6630990><input id="11a1" size="2" name="11a1" type="text" style="color: #000000" class="transparente"/></td>
				  <td class=xl1530990></td>
				  <td class=xl1530990></td>
				 </tr>
				 <tr height=20 style='height:15.0pt'>
				  <td height=20 class=xl6530990 colspan=2 style='height:15.0pt'>2. Gravedad <a href="#" class="gravedadtrigger"><IMG src="/images/question-white.png" /></a></td>
				  <td class=xl1530990></td>
				  <td class=xl1530990></td>
				  <td class=xl6630990 style='border-top:none'><input id="11a2" size="2" name="11a2" type="text" style="color: #000000" class="transparente"/></td>
				  <td class=xl1530990></td>
				  <td class=xl1530990></td>
				 </tr>
				 <tr height=17 style='height:12.75pt'>
				  <td height=17 class=xl6530990 colspan=2 style='height:12.75pt'>3. Variedad <a href="#" class="variedadtrigger"><IMG src="/images/question-white.png" /></a></td>
				  <td class=xl1530990></td>
				  <td class=xl1530990></td>
				  <td class=xl6630990 align='right' style='border-top:none'><input id="11a3" size="2" name="11a3" type="text" style="color: #000000" class="transparente"/></td>
				  <td class=xl1530990></td>
				  <td class=xl1530990></td>
				 </tr>
				 <tr height=20 style='height:15.0pt'>
				  <td height=20 class=xl6530990 colspan=2 style='height:15.0pt'>4. Evolución <a href="#" class="evoluciontrigger"><IMG src="/images/question-white.png" /></a></td>
				  <td class=xl1530990></td>
				  <td class=xl1530990></td>
				  <td class=xl6630990 style='border-top:none'><input id="11a4" size="2" name="11a4" type="text" style="color: #000000" class="transparente"/></td>
				  <td class=xl1530990></td>
				  <td class=xl1530990></td>
				 </tr>
				 <tr height=17 style='height:12.75pt'>
				  <td height=17 class=xl6530990 colspan=2 style='height:12.75pt'>5. Precocidad <a href="#" class="precocidadtrigger"><IMG src="/images/question-white.png" /></a></td>
				  <td class=xl1530990></td>
				  <td class=xl1530990></td>
				  <td class=xl6630990 style='border-top:none'><input id="11a5" size="2" name="11a5" type="text" style="color: #000000" class="transparente"/></td>
				  <td class=xl1530990></td>
				  <td class=xl1530990></td>
				 </tr>
				 <tr height=18 style='height:13.5pt'>
				  <td height=18 class=xl6530990 colspan=2 style='height:13.5pt'>6. Frecuencia <a href="#" class="frecuenciatrigger"><IMG src="/images/question-white.png" /></a></td>
				  <td class=xl1530990></td>
				  <td class=xl1530990></td>
				  <td class=xl6630990 style='border-top:none'><input id="11a6" size="2" name="11a6" type="text" style="color: #000000" class="transparente"/></td>
				  <td class=xl1530990></td>
				  <td class=xl1530990></td>
				 </tr>
				 <tr height=22 style='height:16.5pt'>
				  <td height=22 class=xl6530990 colspan=2 style='height:16.5pt'>7. Experticia <a href="#" class="experticiatrigger"><IMG src="/images/question-white.png" /></a></td>
				  <td class=xl1530990></td>
				  <td class=xl1530990></td>
				  <td class=xl6730990 style='border-top:none'><input id="11a7" size="2" name="11a7" type="text" style="color: #000000" class="transparente"/></td>
				  <td class=xl1530990></td>
				  <td class=xl1530990></td>
				 </tr>
				 <tr height=21 style='height:15.75pt'>
				  <td height=21 class=xl1530990 style='height:15.75pt'></td>
				  <td class=xl1530990></td>
				  <td class=xl1530990></td>
				  <td class=xl8030990>Total:</td>
				  <td class=xl6830990><input id="11asuma" size="2" name="11asuma" type="text" style="color: #000000" class="transparente" readonly="readonly" /></td>
				  <td class=xl1530990></td>
				  <td class=xl1530990></td>
				 </tr>
				 <tr height=20 style='height:15.0pt'>
				  <td height=20 class=xl1530990 style='height:15.0pt'></td>
				  <td class=xl7630990></td>
				  <td class=xl7630990></td>
				  <td class=xl7930990>Dividido por:</td>
				  <td class=xl7630990 align=right>7</td>
				  <td class=xl6930990><input id="11a" size="2" name="11a" type="text" style="color: #000000" class="transparente" readonly="readonly"/></td>
				  <td class=xl7730990></td>
				 </tr>
				 <tr height=17 style='height:12.75pt'>
				  <td height=17 class=xl6530990 colspan=5 style='height:12.75pt'>B - <font
				  class="font530990">Problemas de comportamiento</font></td>
				  <td class=xl1530990></td>
				  <td class=xl1530990></td>
				 </tr>
				 <tr height=17 style='height:12.75pt'>
				  <td height=17 class=xl6530990 colspan=3 style='height:12.75pt'>1. Fugas / Evasiones <a href="#" class="fugastrigger"><IMG src="/images/question-white.png" /></a></td>
				  <td class=xl1530990></td>
				  <td class=xl6630990><input id="11b1" size="2" name="11b1" type="text" style="color: #000000" class="transparente"/></td>
				  <td class=xl1530990></td>
				  <td class=xl1530990></td>
				 </tr>
				 <tr height=20 style='height:15.0pt'>
				  <td height=20 class=xl6530990 colspan=2 style='height:15.0pt'>2. Vandalismo <a href="#" class="vandalismotrigger"><IMG src="/images/question-white.png" /></a></td>
				  <td class=xl1530990></td>
				  <td class=xl1530990></td>
				  <td class=xl6630990 style='border-top:none'><input id="11b2" size="2" name="11b2" type="text" style="color: #000000" class="transparente"/></td>
				  <td class=xl1530990></td>
				  <td class=xl1530990></td>
				 </tr>
				 <tr height=17 style='height:12.75pt'>
				  <td height=17 class=xl6530990 colspan=2 style='height:12.75pt'>3. Riñas <a href="#" class="rinastrigger"><IMG src="/images/question-white.png" /></a></td>
				  <td class=xl1530990></td>
				  <td class=xl1530990></td>
				  <td class=xl6630990 style='border-top:none'><input id="11b3" size="2" name="11b3" type="text" style="color: #000000" class="transparente"/></td>
				  <td class=xl1530990></td>
				  <td class=xl1530990></td>
				 </tr>
				 <tr height=21 style='height:15.75pt'>
				  <td height=21 class=xl6530990 colspan=4 style='height:15.75pt'>4. Consumo de drogas <a href="#" class="consumotrigger"><IMG src="/images/question-white.png" /></a></td>
				  <td class=xl1530990></td>
				  <td class=xl1530990></td>
				  <td class=xl1530990></td>
				 </tr>
				 <tr height=21 style='height:15.75pt'>
				  <td height=21 class=xl1530990 style='height:15.75pt'></td>
				  <td class=xl6530990 colspan=2>Substancia</td>
				  <td class=xl6630990><input id="11b41" size="2" name="11b41" type="text" style="color: #000000" class="transparente"/></td>
				  <td class=xl1530990></td>
				  <td class=xl1530990></td>
				  <td class=xl1530990></td>
				 </tr>
				 <tr height=20 style='height:15.0pt'>
				  <td height=20 class=xl1530990 style='height:15.0pt'></td>
				  <td class=xl6530990>Gravedad</td>
				  <td class=xl1530990></td>
				  <td class=xl6630990 style='border-top:none'><input id="11b42" size="2" name="11b42" type="text" style="color: #000000" class="transparente"/></td>
				  <td class=xl1530990></td>
				  <td class=xl1530990></td>
				  <td class=xl1530990></td>
				 </tr>
				 <tr height=20 style='height:15.0pt'>
				  <td height=20 class=xl1530990 style='height:15.0pt'></td>
				  <td class=xl6530990 colspan=2>Continuidad</td>
				  <td class=xl6630990 style='border-top:none'><input id="11b43" size="2" name="11b43" type="text" style="color: #000000" class="transparente"/></td>
				  <td class=xl7130990><input id="11b4" size="2" name="11b4" type="text" style="color: #000000" class="transparente" readonly="readonly"/></td>
				  <td class=xl1530990></td>
				  <td class=xl1530990></td>
				 </tr>
				 <tr height=17 style='height:12.75pt'>
				  <td height=17 class=xl6530990 colspan=2 style='height:12.75pt'>5. Indisciplina <a href="#" class="indisiplinatrigger"><IMG src="/images/question-white.png" /></a></td>
				  <td class=xl1530990></td>
				  <td class=xl1530990></td>
				  <td class=xl7030990><input id="11b5" size="2" name="11b5" type="text" style="color: #000000" class="transparente"/></td>
				  <td class=xl1530990></td>
				  <td class=xl1530990></td>
				 </tr>
				 <tr height=17 style='height:12.75pt'>
				  <td height=17 class=xl6530990 colspan=2 style='height:12.75pt'>6. Ociosidad <a href="#" class="ociosidadtrigger"><IMG src="/images/question-white.png" /></a></td>
				  <td class=xl1530990></td>
				  <td class=xl1530990></td>
				  <td class=xl7030990 style='border-top:none'><input id="11b6" size="2" name="11b6" type="text" style="color: #000000" class="transparente"/></td>
				  <td class=xl1530990></td>
				  <td class=xl1530990></td>
				 </tr>
				 <tr height=18 style='height:13.5pt'>
				  <td height=18 class=xl6530990 colspan=4 style='height:13.5pt'>7. Conductas negativas <a href="#" class="negativotrigger"><IMG src="/images/question-white.png" /></a></td>
				  <td class=xl7230990 style='border-top:none'><input id="11b7" size="2" name="11b7" type="text" style="color: #000000" class="transparente"/></td>
				  <td class=xl1530990></td>
				  <td class=xl1530990></td>
				 </tr>
				 <tr height=21 style='height:15.75pt'>
				  <td height=21 class=xl1530990 style='height:15.75pt'></td>
				  <td class=xl1530990></td>
				  <td class=xl1530990></td>
				  <td class=xl8030990>Total:</td>
				  <td class=xl6830990><input id="11bsuma" size="2" name="11bsuma" type="text" style="color: #000000" class="transparente" readonly="readonly"/></td>
				  <td class=xl1530990></td>
				  <td class=xl1530990></td>
				 </tr>
				 <tr height=20 style='height:15.0pt'>
				  <td height=20 class=xl1530990 style='height:15.0pt'></td>
				  <td class=xl7630990></td>
				  <td class=xl7630990></td>
				  <td class=xl7930990>Dividido por:</td>
				  <td class=xl7630990 align=right>7</td>
				  <td class=xl6930990><input id="11b" size="2" name="11b" type="text" style="color: #000000" class="transparente" readonly="readonly"/></td>
				  <td class=xl7730990>B</td>
				 </tr>
				 <tr height=17 style='height:12.75pt'>
				  <td height=17 class=xl6530990 colspan=4 style='height:12.75pt'>C - <font
				  class="font530990">Controles sociales</font></td>
				  <td class=xl1530990></td>
				  <td class=xl1530990></td>
				  <td class=xl1530990></td>
				 </tr>
				 <tr height=17 style='height:12.75pt'>
				  <td height=17 class=xl6530990 colspan=3 style='height:12.75pt'>1. Sanciones referidas <a href="#" class="sancionestrigger"><IMG src="/images/question-white.png" /></a></td>
				  <td class=xl1530990></td>
				  <td class=xl6630990><input id="11c1" size="2" name="11c1" type="text" style="color: #000000" class="transparente"/></td>
				  <td class=xl1530990></td>
				  <td class=xl1530990></td>
				 </tr>
				 <tr height=17 style='height:12.75pt'>
				  <td height=17 class=xl6530990 colspan=4 style='height:12.75pt'>2. Medidas de protección <a href="#" class="sancionestrigger"><IMG src="/images/question-white.png" /></a></td>
				  <td class=xl6630990 style='border-top:none'><input id="11c2" size="2" name="11c2" type="text" style="color: #000000" class="transparente"/></td>
				  <td class=xl1530990></td>
				  <td class=xl1530990></td>
				 </tr>
				 <tr height=17 style='height:12.75pt'>
				  <td height=17 class=xl6530990 colspan=3 style='height:12.75pt'>3. Medidas escolares <a href="#" class="escolarestrigger"><IMG src="/images/question-white.png" /></a></td>
				  <td class=xl1530990></td>
				  <td class=xl6630990 style='border-top:none'><input id="11c3" size="2" name="11c3" type="text" style="color: #000000" class="transparente"/></td>
				  <td class=xl1530990></td>
				  <td class=xl1530990></td>
				 </tr>
				 <tr height=18 style='height:13.5pt'>
				  <td height=18 class=xl6530990 colspan=2 style='height:13.5pt'>4. Arrestos <a href="#" class="detencionestrigger"><IMG src="/images/question-white.png" /></a></td>
				  <td class=xl1530990></td>
				  <td class=xl1530990></td>
				  <td class=xl6630990 style='border-top:none'><input id="11c4" size="2" name="11c4" type="text" style="color: #000000" class="transparente"/></td>
				  <td class=xl1530990></td>
				  <td class=xl1530990></td>
				 </tr>
				 <tr height=22 style='height:16.5pt'>
				  <td height=22 class=xl6530990 colspan=3 style='height:16.5pt'>5. Medida más severa <a href="#" class="severatrigger"><IMG src="/images/question-white.png" /></a></td>
				  <td class=xl1530990></td>
				  <td class=xl7430990 style='border-top:none'><input id="11c5" size="2" name="11c5" type="text" style="color: #000000" class="transparente"/></td>
				  <td class=xl1530990></td>
				  <td class=xl1530990></td>
				 </tr>
				 <tr height=22 style='height:16.5pt'>
				  <td height=22 class=xl1530990 style='height:16.5pt'></td>
				  <td class=xl1530990></td>
				  <td class=xl1530990></td>
				  <td class=xl8030990>Total:</td>
				  <td class=xl7330990><input id="11csuma" size="2" name="11csuma" type="text" style="color: #000000" class="transparente" readonly="readonly"/></td>
				  <td class=xl1530990></td>
				  <td class=xl1530990></td>
				 </tr>
				 <tr height=22 style='height:16.5pt'>
				  <td height=22 class=xl1530990 style='height:16.5pt'></td>
				  <td class=xl7630990></td>
				  <td class=xl7630990></td>
				  <td class=xl7930990>Dividido por:</td>
				  <td class=xl7630990 align=right>5</td>
				  <td class=xl6930990><input id="11c" size="2" name="11c" type="text" style="color: #000000" class="transparente" readonly="readonly"/></td>
				  <td class=xl7730990>C</td>
				 </tr>
				 <tr height=21 style='height:15.75pt'>
				  <td height=21 class=xl6530990 colspan=3 style='height:15.75pt'>D - <font class="font530990">Enculturación <a href="#" class="enculturaciontrigger"><IMG src="/images/question-white.png" /></a></font></td>
				  <td class=xl1530990></td>
				  <td class=xl1530990></td>
				  <td class=xl7530990 style='border-top:none'><input id="11d" size="2" name="11d" type="text" style="color: #000000" class="transparente"/></td>
				  <td class=xl7730990>D</td>
				 </tr>
				 <tr height=22 style='height:16.5pt'>
				  <td height=22 class=xl1530990 style='height:16.5pt'></td>
				  <td class=xl1530990></td>
				  <td class=xl7630990></td>
				  <td class=xl7630990 colspan=2>Total (ABCD)</td>
				  <td class=xl8230990><input id="11suma" size="2" name="11suma" type="text" style="color: #000000" class="transparente" readonly="readonly"/></td>
				  <td class=xl7830990>÷4</td>
				 </tr>
				 <tr height=21 style='height:15.75pt'>
				  <td height=21 class=xl1530990 style='height:15.75pt'></td>
				  <td class=xl1530990></td>
				  <td class=xl1530990></td>
				  <td colspan=3 class=xl8330990 style='border-right:1.0pt solid black'>Antagonismo:</td>
				  <td class=xl8130990><input id="11" size="2" name="11" type="text" style="color: #000000" class="transparente" readonly="readonly"/></td>
				 </tr>
				 <![if supportMisalignedColumns]>
				 <tr height=0 style='display:none'>
				  <td width=33 style='width:25pt'></td>
				  <td width=68 style='width:51pt'></td>
				  <td width=33 style='width:25pt'></td>
				  <td width=51 style='width:38pt'></td>
				  <td width=37 style='width:28pt'></td>
				  <td width=33 style='width:25pt'></td>
				  <td width=33 style='width:25pt'></td>
				 </tr>
				 <![endif]>
				</table>

				</div>
		

	</div> 

<h3><a href="#"><div style="float:left;">1.2 Inintimidabilidad</div> <div id="result_12" style="margin-left: 350px;">(0)</div></a></h3>
    <div>
	<div id="5_21727" align=left x:publishsource="Excel">

<table border=0 cellpadding=0 cellspacing=0 width=288 style='border-collapse:
 collapse;table-layout:fixed;width:217pt'>
 <col width=33 style='mso-width-source:userset;mso-width-alt:1206;width:25pt'>
 <col width=68 style='mso-width-source:userset;mso-width-alt:2486;width:51pt'>
 <col width=33 style='mso-width-source:userset;mso-width-alt:1206;width:25pt'>
 <col width=51 style='mso-width-source:userset;mso-width-alt:1865;width:38pt'>
 <col width=37 style='mso-width-source:userset;mso-width-alt:1353;width:28pt'>
 <col width=33 span=2 style='mso-width-source:userset;mso-width-alt:1206;
 width:25pt'>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl6521727 colspan=2 width=101 style='height:15.0pt;
  width:76pt'>A - <font class="font521727">Estereotipos</font></td>
  <td class=xl1521727 width=33 style='width:25pt'></td>
  <td class=xl1521727 width=51 style='width:38pt'></td>
  <td class=xl1521727 width=37 style='width:28pt'></td>
  <td class=xl1521727 width=33 style='width:25pt'></td>
  <td class=xl1521727 width=33 style='width:25pt'></td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 class=xl6521727 colspan=3 style='height:12.75pt'>1. Patrones repetitivos <a href="#" class="repetitivotrigger"><IMG src="/images/question-white.png" /></a></td>
  <td class=xl1521727></td>
  <td class=xl6621727><input id="12a1" size="2" name="12a1" type="text" style="color: #000000" class="transparente"/></td>
  <td class=xl1521727></td>
  <td class=xl1521727></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl6521727 colspan=2 style='height:15.0pt'>2. Resignación <a href="#" class="resignaciontrigger"><IMG src="/images/question-white.png" /></a></td>
  <td class=xl1521727></td>
  <td class=xl1521727></td>
  <td class=xl6621727 style='border-top:none'><input id="12a2" size="2" name="12a2" type="text" style="color: #000000" class="transparente"/></td>
  <td class=xl1521727></td>
  <td class=xl1521727></td>
 </tr>
 <tr height=18 style='height:13.5pt'>
  <td height=18 class=xl6521727 colspan=3 style='height:13.5pt'>3. Sub-utilización <a href="#" class="experienciatrigger"><IMG src="/images/question-white.png" /></a></td>
  <td class=xl1521727></td>
  <td class=xl6721727 style='border-top:none'><input id="12a3" size="2" name="12a3" type="text" style="color: #000000" class="transparente"/></td>
  <td class=xl1521727></td>
  <td class=xl1521727></td>
 </tr>
 <tr height=21 style='height:15.75pt'>
  <td height=21 class=xl1521727 style='height:15.75pt'></td>
  <td class=xl1521727></td>
  <td class=xl1521727></td>
  <td class=xl7521727>Total:</td>
  <td class=xl6821727><input id="12asuma" size="2" name="12asuma" type="text" style="color: #000000" class="transparente" readonly="readonly"/></td>
  <td class=xl1521727></td>
  <td class=xl1521727></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl1521727 style='height:15.0pt'></td>
  <td class=xl7221727></td>
  <td class=xl7221727></td>
  <td class=xl7421727>Dividido por :</td>
  <td class=xl7221727 align=right>3</td>
  <td class=xl6921727><input id="12a" size="2" name="12a" type="text" style="color: #000000" class="transparente" readonly="readonly"/></td>
  <td class=xl7321727>A</td>
 </tr>
 <tr height=21 style='height:15.75pt'>
  <td height=21 class=xl1521727 style='height:15.75pt'></td>
  <td class=xl1521727></td>
  <td class=xl1521727></td>
  <td class=xl1521727></td>
  <td class=xl1521727></td>
  <td class=xl1521727></td>
  <td class=xl1521727></td>
 </tr>
 <tr height=21 style='height:15.75pt'>
  <td height=21 class=xl6521727 colspan=4 style='height:15.75pt'>B - <font
  class="font521727">Rechazo a la autoridad <a href="#" class="rechazotrigger"><IMG src="/images/question-white.png" /></a></font></td>
  <td class=xl1521727></td>
  <td class=xl7121727><input id="12b" size="2" name="12b" type="text" style="color: #000000" class="transparente"/></td>
  <td class=xl7321727>B</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl1521727 style='height:15.0pt'></td>
  <td class=xl1521727></td>
  <td class=xl1521727></td>
  <td class=xl1521727></td>
  <td class=xl1521727></td>
  <td class=xl1521727></td>
  <td class=xl7221727></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl6521727 colspan=4 style='height:15.0pt'>C - <font
  class="font521727">Sentimientos de impunidad <a href="#" class="impunidadtrigger"><IMG src="/images/question-white.png" /></a></font></td>
  <td class=xl1521727></td>
  <td class=xl7121727><input id="12c" size="2" name="12c" type="text" style="color: #000000" class="transparente"/></td>
  <td class=xl7321727>C</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 class=xl1521727 style='height:12.75pt'></td>
  <td class=xl1521727></td>
  <td class=xl1521727></td>
  <td class=xl1521727></td>
  <td class=xl1521727></td>
  <td class=xl1521727></td>
  <td class=xl1521727></td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 class=xl6521727 colspan=3 style='height:12.75pt'>D - <font
  class="font521727">Inestabilidad <a href="#" class="inestabilidadtrigger"><IMG src="/images/question-white.png" /></a></font></td>
  <td class=xl1521727></td>
  <td class=xl1521727></td>
  <td class=xl1521727></td>
  <td class=xl1521727></td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 class=xl6521727 colspan=2 style='height:12.75pt'>1. Nomadismo</td>
  <td class=xl1521727></td>
  <td class=xl1521727></td>
  <td class=xl7021727><input id="12d1" size="2" name="12d1" type="text" style="color: #000000" class="transparente"/></td>
  <td class=xl1521727></td>
  <td class=xl1521727></td>
 </tr>
 <tr height=18 style='height:13.5pt'>
  <td height=18 class=xl6521727 colspan=3 style='height:13.5pt'>2. Desorganización<span style='mso-spacerun:yes'> </span></td>
  <td class=xl1521727></td>
  <td class=xl6721727><input id="12d2" size="2" name="12d2" type="text" style="color: #000000" class="transparente"/></td>
  <td class=xl1521727></td>
  <td class=xl1521727></td>
 </tr>
 <tr height=22 style='height:16.5pt'>
  <td height=22 class=xl1521727 style='height:16.5pt'></td>
  <td class=xl1521727></td>
  <td class=xl1521727></td>
  <td class=xl7521727>Total:</td>
  <td class=xl6821727><input id="12dsuma" size="2" name="12dsuma" type="text" style="color: #000000" class="transparente" readonly="readonly"/></td>
  <td class=xl1521727></td>
  <td class=xl1521727></td>
 </tr>
 <tr height=21 style='height:15.75pt'>
  <td height=21 class=xl1521727 style='height:15.75pt'></td>
  <td class=xl7221727></td>
  <td class=xl7221727></td>
  <td class=xl7421727>Dividido por:</td>
  <td class=xl7221727 align=right>2</td>
  <td class=xl6921727><input id="12d" size="2" name="12d" type="text" style="color: #000000" class="transparente" readonly="readonly"/></td>
  <td class=xl7321727>D</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl1521727 style='height:15.0pt'></td>
  <td class=xl1521727></td>
  <td class=xl1521727></td>
  <td class=xl1521727></td>
  <td class=xl1521727></td>
  <td class=xl1521727></td>
  <td class=xl1521727></td>
 </tr>
 <tr height=21 style='height:15.75pt'>
  <td height=21 class=xl1521727 style='height:15.75pt'></td>
  <td class=xl1521727></td>
  <td class=xl1521727></td>
  <td class=xl7821727 colspan=2>Total (ABCD)</td>
  <td class=xl7721727><input id="12suma" size="2" name="12suma" type="text" style="color: #000000" class="transparente" readonly="readonly"/></td>
  <td class=xl7321727>÷4</td>
 </tr>
 <tr height=21 style='height:15.75pt'>
  <td height=21 class=xl1521727 style='height:15.75pt'></td>
  <td class=xl1521727></td>
  <td colspan=4 class=xl7921727 style='border-right:1.0pt solid black'>Inintimidabilidad:</td>
  <td class=xl7621727><input id="12" size="2" name="12" type="text" style="color: #000000" class="transparente" readonly="readonly"/></td>
 </tr>
 <![if supportMisalignedColumns]>
 <tr height=0 style='display:none'>
  <td width=33 style='width:25pt'></td>
  <td width=68 style='width:51pt'></td>
  <td width=33 style='width:25pt'></td>
  <td width=51 style='width:38pt'></td>
  <td width=37 style='width:28pt'></td>
  <td width=33 style='width:25pt'></td>
  <td width=33 style='width:25pt'></td>
 </tr>
 <![endif]>
</table>

</div>
	</div>
</div> 
</div>
<div class="grid-6-12">
 <div id="accordion2">
    <h3><a href="#"><div style="float:left;">2.1 Funcionalidad</div> <div id="result_21" style="margin-left: 350px;">(0)</div></a></h3>
		<div>
						<div id="5_18094" align=center x:publishsource="Excel">

							<table border=0 cellpadding=0 cellspacing=0 width=363 style='border-collapse: collapse;table-layout:fixed;width:273pt'>
								 <col width=47 style='mso-width-source:userset;mso-width-alt:1718;width:35pt'>
								 <col width=68 style='mso-width-source:userset;mso-width-alt:2486;width:51pt'>
								 <col width=61 style='mso-width-source:userset;mso-width-alt:2230;width:46pt'>
								 <col width=33 style='mso-width-source:userset;mso-width-alt:1206;width:25pt'>
								 <col width=49 style='mso-width-source:userset;mso-width-alt:1792;width:37pt'>
								 <col width=33 style='mso-width-source:userset;mso-width-alt:1206;width:25pt'>
								 <col width=39 style='mso-width-source:userset;mso-width-alt:1426;width:29pt'>
								 <col width=33 style='mso-width-source:userset;mso-width-alt:1206;width:25pt'>
								 <tr height=17 style='height:12.75pt'>
								  <td height=17 class=xl6518094 colspan=2 width=115 style='height:12.75pt;
								  width:86pt'>A - <font class="font518094">Escolarización</font></td>
								  <td class=xl1518094 width=61 style='width:46pt'></td>
								  <td class=xl1518094 width=33 style='width:25pt'></td>
								  <td class=xl1518094 width=49 style='width:37pt'></td>
								  <td class=xl1518094 width=33 style='width:25pt'></td>
								  <td class=xl1518094 width=39 style='width:29pt'></td>
								  <td class=xl1518094 width=33 style='width:25pt'></td>
								 </tr>
								 <tr height=17 style='height:12.75pt'>
								  <td height=17 class=xl6518094 colspan=2 style='height:12.75pt'>1. Rendimiento</td>
								  <td class=xl1518094>12-13-14</td>
								  <td class=xl6618094><input id="21a11" size="2" name="21a11" type="text" style="color: #000000" class="transparente"/></td>
								  <td class=xl1518094></td>
								  <td class=xl1518094></td>
								  <td class=xl1518094></td>
								  <td class=xl1518094></td>
								 </tr>
								 <tr height=20 style='height:15.0pt'>
								  <td height=20 class=xl1518094 style='height:15.0pt'></td>
								  <td class=xl1518094></td>
								  <td class=xl1518094>15-16-17</td>
								  <td class=xl7818094 style='border-top:none'><input id="21a12" size="2" name="21a12" type="text" style="color: #000000" class="transparente"/></td>
								  <td class=xl1518094></td>
								  <td class=xl7018094><input id="21a1" size="2" name="21a1" type="text" style="color: #000000" class="transparente" readonly="readonly"/></td>
								  <td class=xl1518094></td>
								  <td class=xl1518094></td>
								 </tr>
								 <tr height=17 style='height:12.75pt'>
								  <td height=17 class=xl6518094 colspan=2 style='height:12.75pt'>2. Intereses</td>
								  <td class=xl1518094>12-13-14</td>
								  <td class=xl6618094 style='border-top:none'><input id="21a21" size="2" name="21a21" type="text" style="color: #000000" class="transparente"/></td>
								  <td class=xl1518094></td>
								  <td class=xl1518094></td>
								  <td class=xl1518094></td>
								  <td class=xl1518094></td>
								 </tr>
								 <tr height=20 style='height:15.0pt'>
								  <td height=20 class=xl1518094 style='height:15.0pt'></td>
								  <td class=xl1518094></td>
								  <td class=xl1518094>15-16-17</td>
								  <td class=xl6618094 style='border-top:none'><input id="21a22" size="2" name="21a22" type="text" style="color: #000000" class="transparente"/></td>
								  <td class=xl1518094></td>
								  <td class=xl7018094><input id="21a2" size="2" name="21a2" type="text" style="color: #000000" class="transparente" readonly="readonly"/></td>
								  <td class=xl1518094></td>
								  <td class=xl1518094></td>
								 </tr>
								 <tr height=17 style='height:12.75pt'>
								  <td height=17 class=xl6518094 colspan=3 style='height:12.75pt'>3.
								  Valorización de la escuela</td>
								  <td class=xl1518094></td>
								  <td class=xl1518094></td>
								  <td class=xl6618094><input id="21a3" size="2" name="21a3" type="text" style="color: #000000" class="transparente"/></td>
								  <td class=xl1518094></td>
								  <td class=xl1518094></td>
								 </tr>
								 <tr height=18 style='height:13.5pt'>
								  <td height=18 class=xl6518094 colspan=3 style='height:13.5pt'>4. Proyección
								  académica</td>
								  <td class=xl1518094></td>
								  <td class=xl1518094></td>
								  <td class=xl6718094 style='border-top:none'><input id="21a4" size="2" name="21a4" type="text" style="color: #000000" class="transparente"/></td>
								  <td class=xl1518094></td>
								  <td class=xl1518094></td>
								 </tr>
								 <tr height=22 style='height:16.5pt'>
								  <td height=22 class=xl1518094 style='height:16.5pt'></td>
								  <td class=xl1518094></td>
								  <td class=xl1518094></td>
								  <td class=xl1518094></td>
								  <td class=xl7718094>Total:</td>
								  <td class=xl7118094><input id="21asuma" size="2" name="21asuma" type="text" style="color: #000000" class="transparente" readonly="readonly"/></td>
								  <td class=xl1518094></td>
								  <td class=xl1518094></td>
								 </tr>
								 <tr height=21 style='height:15.75pt'>
								  <td height=21 class=xl1518094 style='height:15.75pt'></td>
								  <td class=xl1518094></td>
								  <td class=xl1518094></td>
								  <td colspan=2 class=xl7618094>Divido por:</td>
								  <td class=xl7518094 align=right>4</td>
								  <td class=xl6918094><input id="21a" size="2" name="21a" type="text" style="color: #000000" class="transparente" readonly="readonly"/></td>
								  <td class=xl7618094>A</td>
								 </tr>
								 <tr height=20 style='height:15.0pt'>
								  <td height=20 class=xl6518094 colspan=4 style='height:15.0pt'>B - <font
								  class="font518094">Adquisiciones operacionales</font></td>
								  <td class=xl1518094></td>
								  <td class=xl1518094></td>
								  <td class=xl1518094></td>
								  <td class=xl1518094></td>
								 </tr>
								 <tr height=17 style='height:12.75pt'>
								  <td height=17 class=xl6518094 colspan=3 style='height:12.75pt'>1. Dominio /
								  saber hacer</td>
								  <td class=xl1518094></td>
								  <td class=xl1518094></td>
								  <td class=xl6618094><input id="21b1" size="2" name="21b1" type="text" style="color: #000000" class="transparente"/></td>
								  <td class=xl1518094></td>
								  <td class=xl1518094></td>
								 </tr>
								 <tr height=17 style='height:12.75pt'>
								  <td height=17 class=xl6518094 colspan=2 style='height:12.75pt'>2. Implicación</td>
								  <td class=xl1518094>12-13-14</td>
								  <td class=xl6618094><input id="21b21" size="2" name="21b21" type="text" style="color: #000000" class="transparente"/></td>
								  <td class=xl1518094></td>
								  <td class=xl1518094></td>
								  <td class=xl1518094></td>
								  <td class=xl1518094></td>
								 </tr>
								 <tr height=20 style='height:15.0pt'>
								  <td colspan=2 height=20 class=xl8118094 style='height:15.0pt'><span
								  style='mso-spacerun:yes'>    </span>comunitaria</td>
								  <td class=xl1518094>15-16-17</td>
								  <td class=xl6618094 style='border-top:none'><input id="21b22" size="2" name="21b22" type="text" style="color: #000000" class="transparente"/></td>
								  <td class=xl1518094></td>
								  <td class=xl7018094><input id="21b2" size="2" name="21b2" type="text" style="color: #000000" class="transparente" readonly="readonly"/></td>
								  <td class=xl1518094></td>
								  <td class=xl1518094></td>
								 </tr>
								 <tr height=17 style='height:12.75pt'>
								  <td height=17 class=xl6518094 colspan=2 style='height:12.75pt'>3. Liderazgo</td>
								  <td class=xl1518094>12-13-14</td>
								  <td class=xl6618094 style='border-top:none'><input id="21b31" size="2" name="21b31" type="text" style="color: #000000" class="transparente"/></td>
								  <td class=xl1518094></td>
								  <td class=xl1518094></td>
								  <td class=xl1518094></td>
								  <td class=xl1518094></td>
								 </tr>
								 <tr height=21 style='height:15.75pt'>
								  <td height=21 class=xl1518094 style='height:15.75pt'></td>
								  <td class=xl1518094></td>
								  <td class=xl1518094>15-16-17</td>
								  <td class=xl6618094 style='border-top:none'><input id="21b32" size="2" name="21b32" type="text" style="color: #000000" class="transparente"/></td>
								  <td class=xl1518094></td>
								  <td class=xl7218094><input id="21b3" size="2" name="21b3" type="text" style="color: #000000" class="transparente" readonly="readonly"/></td>
								  <td class=xl1518094></td>
								  <td class=xl1518094></td>
								 </tr>
								 <tr height=21 style='height:15.75pt'>
								  <td height=21 class=xl1518094 style='height:15.75pt'></td>
								  <td class=xl1518094></td>
								  <td class=xl1518094></td>
								  <td class=xl1518094></td>
								  <td class=xl7718094>Total:</td>
								  <td class=xl7318094><input id="21bsuma" size="2" name="21bsuma" type="text" style="color: #000000" class="transparente" readonly="readonly"/></td>
								  <td class=xl1518094></td>
								  <td class=xl1518094></td>
								 </tr>
								 <tr height=20 style='height:15.0pt'>
								  <td height=20 class=xl1518094 style='height:15.0pt'></td>
								  <td class=xl1518094></td>
								  <td class=xl1518094></td>
								  <td colspan=2 class=xl8518094>Dividido por:</td>
								  <td class=xl7518094 align=right>3</td>
								  <td class=xl6918094><input id="21b" size="2" name="21b" type="text" style="color: #000000" class="transparente" readonly="readonly"/></td>
								  <td class=xl7618094>B</td>
								 </tr>
								 <tr height=20 style='height:15.0pt'>
								  <td height=20 class=xl6518094 colspan=3 style='height:15.0pt'>C - <font
								  class="font518094">Campos de interés</font></td>
								  <td class=xl1518094></td>
								  <td class=xl1518094></td>
								  <td class=xl1518094></td>
								  <td class=xl1518094></td>
								  <td class=xl1518094></td>
								 </tr>
								 <tr height=17 style='height:12.75pt'>
								  <td height=17 class=xl6518094 colspan=2 style='height:12.75pt'>1. Cultura</td>
								  <td class=xl1518094></td>
								  <td class=xl1518094></td>
								  <td class=xl1518094></td>
								  <td class=xl6618094><input id="21c1" size="2" name="21c1" type="text" style="color: #000000" class="transparente"/></td>
								  <td class=xl1518094></td>
								  <td class=xl1518094></td>
								 </tr>
								 <tr height=17 style='height:12.75pt'>
								  <td height=17 class=xl6518094 colspan=2 style='height:12.75pt'>2. Deportes</td>
								  <td class=xl1518094></td>
								  <td class=xl1518094></td>
								  <td class=xl1518094></td>
								  <td class=xl6618094 style='border-top:none'><input id="21c2" size="2" name="21c2" type="text" style="color: #000000" class="transparente"/></td>
								  <td class=xl1518094></td>
								  <td class=xl1518094></td>
								 </tr>
								 <tr height=18 style='height:13.5pt'>
								  <td height=18 class=xl6518094 colspan=2 style='height:13.5pt'>3. Actualidad</td>
								  <td class=xl1518094></td>
								  <td class=xl1518094></td>
								  <td class=xl1518094></td>
								  <td class=xl6718094 style='border-top:none'><input id="21c3" size="2" name="21c3" type="text" style="color: #000000" class="transparente"/></td>
								  <td class=xl1518094></td>
								  <td class=xl1518094></td>
								 </tr>
								 <tr height=21 style='height:15.75pt'>
								  <td height=21 class=xl1518094 style='height:15.75pt'></td>
								  <td class=xl1518094></td>
								  <td class=xl1518094></td>
								  <td class=xl1518094></td>
								  <td class=xl7718094>Total:</td>
								  <td class=xl6818094><input id="21csuma" size="2" name="21csuma" type="text" style="color: #000000" class="transparente" readonly="readonly"/></td>
								  <td class=xl1518094></td>
								  <td class=xl1518094></td>
								 </tr>
								 <tr height=20 style='height:15.0pt'>
								  <td height=20 class=xl1518094 style='height:15.0pt'></td>
								  <td class=xl1518094></td>
								  <td class=xl1518094></td>
								  <td colspan=2 class=xl8518094>Dividido por:</td>
								  <td class=xl7518094 align=right>3</td>
								  <td class=xl6918094><input id="21c" size="2" name="21c" type="text" style="color: #000000" class="transparente" readonly="readonly"/></td>
								  <td class=xl7618094>C</td>
								 </tr>
								 <tr height=17 style='height:12.75pt'>
								  <td height=17 class=xl6518094 colspan=3 style='height:12.75pt'>D - <font
								  class="font518094">Modos de comunicación</font></td>
								  <td class=xl1518094></td>
								  <td class=xl1518094></td>
								  <td class=xl1518094></td>
								  <td class=xl1518094></td>
								  <td class=xl1518094></td>
								 </tr>
								 <tr height=17 style='height:12.75pt'>
								  <td height=17 class=xl6518094 colspan=2 style='height:12.75pt'>1.
								  Disponibilidad</td>
								  <td class=xl1518094></td>
								  <td class=xl1518094></td>
								  <td class=xl1518094></td>
								  <td class=xl6618094><input id="21d1" size="2" name="21d1" type="text" style="color: #000000" class="transparente"/></td>
								  <td class=xl1518094></td>
								  <td class=xl1518094></td>
								 </tr>
								 <tr height=17 style='height:12.75pt'>
								  <td height=17 class=xl6518094 colspan=2 style='height:12.75pt'>2. Franqueza</td>
								  <td class=xl1518094></td>
								  <td class=xl1518094></td>
								  <td class=xl1518094></td>
								  <td class=xl6618094 style='border-top:none'><input id="21d2" size="2" name="21d2" type="text" style="color: #000000" class="transparente"/></td>
								  <td class=xl1518094></td>
								  <td class=xl1518094></td>
								 </tr>
								 <tr height=17 style='height:12.75pt'>
								  <td height=17 class=xl6518094 colspan=3 style='height:12.75pt'>3. Habilidades
								  sociales</td>
								  <td class=xl1518094></td>
								  <td class=xl1518094></td>
								  <td class=xl6618094 style='border-top:none'><input id="21d3" size="2" name="21d3" type="text" style="color: #000000" class="transparente"/></td>
								  <td class=xl1518094></td>
								  <td class=xl1518094></td>
								 </tr>
								 <tr height=18 style='height:13.5pt'>
								  <td height=18 class=xl6518094 colspan=2 style='height:13.5pt'>4.
								  Transparencia</td>
								  <td class=xl1518094></td>
								  <td class=xl1518094></td>
								  <td class=xl1518094></td>
								  <td class=xl6718094 style='border-top:none'><input id="21d4" size="2" name="21d4" type="text" style="color: #000000" class="transparente"/></td>
								  <td class=xl1518094></td>
								  <td class=xl1518094></td>
								 </tr>
								 <tr height=22 style='height:16.5pt'>
								  <td height=22 class=xl1518094 style='height:16.5pt'></td>
								  <td class=xl1518094></td>
								  <td class=xl1518094></td>
								  <td class=xl7518094></td>
								  <td class=xl7718094>Total:</td>
								  <td class=xl6818094><input id="21dsuma" size="2" name="21dsuma" type="text" style="color: #000000" class="transparente" readonly="readonly"/></td>
								  <td class=xl1518094></td>
								  <td class=xl1518094></td>
								 </tr>
								 <tr height=22 style='height:16.5pt'>
								  <td height=22 class=xl1518094 style='height:16.5pt'></td>
								  <td class=xl1518094></td>
								  <td class=xl7518094></td>
								  <td colspan=2 class=xl8518094>Dividido por:</td>
								  <td class=xl7518094 align=right>4</td>
								  <td class=xl7418094><input id="21d" size="2" name="21d" type="text" style="color: #000000" class="transparente" readonly="readonly"/></td>
								  <td class=xl7618094>D</td>
								 </tr>
								 <tr height=22 style='height:16.5pt'>
								  <td height=22 class=xl1518094 style='height:16.5pt'></td>
								  <td class=xl1518094></td>
								  <td class=xl1518094></td>
								  <td class=xl7518094></td>
								  <td colspan=2 class=xl8618094 style='border-right:.5pt solid #7F7F7F'>Total
								  (ABCD)</td>
								  <td class=xl8018094 style='border-left:none'><input id="21suma" size="2" name="21suma" type="text" style="color: #000000" class="transparente" readonly="readonly"/></td>
								  <td class=xl7618094>÷4</td>
								 </tr>
								 <tr height=21 style='height:15.75pt'>
								  <td height=21 class=xl1518094 style='height:15.75pt'></td>
								  <td class=xl1518094></td>
								  <td class=xl1518094></td>
								  <td class=xl1518094></td>
								  <td colspan=3 class=xl8218094 style='border-right:1.0pt solid black'>Funcionalidad:</td>
								  <td class=xl7918094><input id="21" size="2" name="21" type="text" style="color: #000000" class="transparente" readonly="readonly"/></td>
								 </tr>
								 <![if supportMisalignedColumns]>
								 <tr height=0 style='display:none'>
								  <td width=47 style='width:35pt'></td>
								  <td width=68 style='width:51pt'></td>
								  <td width=61 style='width:46pt'></td>
								  <td width=33 style='width:25pt'></td>
								  <td width=49 style='width:37pt'></td>
								  <td width=33 style='width:25pt'></td>
								  <td width=39 style='width:29pt'></td>
								  <td width=33 style='width:25pt'></td>
								 </tr>
								 <![endif]>
							</table>
						</div>
		</div>
					
					
    <h3><a href="#"><div style="float:left;">2.2 Receptividad</div> <div id="result_22" style="margin-left: 350px;">(0)</div></a></h3>
    <div><div id="5_21549" align=center x:publishsource="Excel">

<table border=0 cellpadding=0 cellspacing=0 width=363 style='border-collapse:
 collapse;table-layout:fixed;width:273pt'>
 <col width=47 style='mso-width-source:userset;mso-width-alt:1718;width:35pt'>
 <col width=68 style='mso-width-source:userset;mso-width-alt:2486;width:51pt'>
 <col width=61 style='mso-width-source:userset;mso-width-alt:2230;width:46pt'>
 <col width=33 style='mso-width-source:userset;mso-width-alt:1206;width:25pt'>
 <col width=49 style='mso-width-source:userset;mso-width-alt:1792;width:37pt'>
 <col width=33 style='mso-width-source:userset;mso-width-alt:1206;width:25pt'>
 <col width=39 style='mso-width-source:userset;mso-width-alt:1426;width:29pt'>
 <col width=33 style='mso-width-source:userset;mso-width-alt:1206;width:25pt'>
 <tr height=21 style='height:15.75pt'>
  <td height=21 class=xl6521549 colspan=6 width=291 style='height:15.75pt;
  width:219pt'>A - <font class="font521549">Conformidad con las estructuras
  sociales</font></td>
  <td class=xl1521549 width=39 style='width:29pt'></td>
  <td class=xl1521549 width=33 style='width:25pt'></td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 class=xl6521549 colspan=2 style='height:12.75pt'>1.
  Escuela:<span style='mso-spacerun:yes'> </span></td>
  <td class=xl1521549>12-13-14</td>
  <td class=xl6721549><input id="22a11" size="2" name="22a11" type="text" style="color: #000000" class="transparente"/></td>
  <td class=xl1521549></td>
  <td class=xl1521549></td>
  <td class=xl1521549></td>
  <td class=xl1521549></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl1521549 style='height:15.0pt'></td>
  <td class=xl6621549>integración</td>
  <td class=xl1521549>15-16-17</td>
  <td class=xl6721549 style='border-top:none'><input id="22a12" size="2" name="22a12" type="text" style="color: #000000" class="transparente"/></td>
  <td class=xl1521549></td>
  <td class=xl7121549><input id="22a1" size="2" name="22a1" type="text" style="color: #000000" class="transparente" readonly="readonly"/></td>
  <td class=xl1521549></td>
  <td class=xl1521549></td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 class=xl6521549 colspan=2 style='height:12.75pt'>2. Trabajo:</td>
  <td class=xl1521549>12-13-14</td>
  <td class=xl6721549 style='border-top:none'><input id="22a21" size="2" name="22a21" type="text" style="color: #000000" class="transparente"/></td>
  <td class=xl1521549></td>
  <td class=xl7521549></td>
  <td class=xl1521549></td>
  <td class=xl1521549></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl1521549 style='height:15.0pt'></td>
  <td class=xl6621549>productividad</td>
  <td class=xl1521549>15-16-17</td>
  <td class=xl6721549 style='border-top:none'><input id="22a22" size="2" name="22a22" type="text" style="color: #000000" class="transparente"/></td>
  <td class=xl1521549></td>
  <td class=xl7121549><input id="22a2" size="2" name="22a2" type="text" style="color: #000000" class="transparente" readonly="readonly"/></td>
  <td class=xl1521549></td>
  <td class=xl1521549></td>
 </tr>
 <tr height=18 style='height:13.5pt'>
  <td height=18 class=xl6521549 colspan=2 style='height:13.5pt'>3. Familia<span
  style='mso-spacerun:yes'> </span></td>
  <td class=xl1521549>12-13-14</td>
  <td class=xl6721549 style='border-top:none'><input id="22a31" size="2" name="22a31" type="text" style="color: #000000" class="transparente"/></td>
  <td class=xl1521549></td>
  <td class=xl7521549></td>
  <td class=xl1521549></td>
  <td class=xl1521549></td>
 </tr>
 <tr height=21 style='height:15.75pt'>
  <td height=21 class=xl1521549 style='height:15.75pt'></td>
  <td class=xl1521549></td>
  <td class=xl1521549>15-16-17</td>
  <td class=xl6721549 style='border-top:none'><input id="22a32" size="2" name="22a32" type="text" style="color: #000000" class="transparente"/></td>
  <td class=xl1521549></td>
  <td class=xl7121549><input id="22a3" size="2" name="22a3" type="text" style="color: #000000" class="transparente" readonly="readonly"/></td>
  <td class=xl1521549></td>
  <td class=xl1521549></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl6521549 colspan=2 style='height:15.0pt'>4. Reglas</td>
  <td class=xl1521549>12-13-14</td>
  <td class=xl6721549 style='border-top:none'><input id="22a41" size="2" name="22a41" type="text" style="color: #000000" class="transparente"/></td>
  <td class=xl1521549></td>
  <td class=xl7521549></td>
  <td class=xl1521549></td>
  <td class=xl1521549></td>
 </tr>
 <tr height=21 style='height:15.75pt'>
  <td height=21 class=xl1521549 style='height:15.75pt'></td>
  <td class=xl1521549></td>
  <td class=xl1521549>15-16-17</td>
  <td class=xl6721549 style='border-top:none'><input id="22a42" size="2" name="22a42" type="text" style="color: #000000" class="transparente"/></td>
  <td class=xl1521549></td>
  <td class=xl7221549><input id="22a4" size="2" name="22a4" type="text" style="color: #000000" class="transparente" readonly="readonly"/></td>
  <td class=xl1521549></td>
  <td class=xl1521549></td>
 </tr>
 <tr height=21 style='height:15.75pt'>
  <td height=21 class=xl1521549 style='height:15.75pt'></td>
  <td class=xl1521549></td>
  <td class=xl1521549></td>
  <td class=xl1521549></td>
  <td class=xl7721549>Total:</td>
  <td class=xl7321549><input id="22asuma" size="2" name="22asuma" type="text" style="color: #000000" class="transparente" readonly="readonly"/></td>
  <td class=xl1521549></td>
  <td class=xl1521549></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl1521549 style='height:15.0pt'></td>
  <td class=xl1521549></td>
  <td class=xl7521549></td>
  <td colspan=2 class=xl8321549>Dividido por:</td>
  <td class=xl7521549 align=right>4</td>
  <td class=xl7021549><input id="22a" size="2" name="22a" type="text" style="color: #000000" class="transparente" readonly="readonly"/></td>
  <td class=xl7621549>A</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl6521549 colspan=2 style='height:15.0pt'>B - <font
  class="font521549">Lealtades</font></td>
  <td class=xl1521549></td>
  <td class=xl1521549></td>
  <td class=xl1521549></td>
  <td class=xl1521549></td>
  <td class=xl1521549></td>
  <td class=xl1521549></td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 class=xl6521549 colspan=3 style='height:12.75pt'>1. Adhesión a
  grupos</td>
  <td class=xl1521549></td>
  <td class=xl1521549></td>
  <td class=xl6721549><input id="22b1" size="2" name="22b1" type="text" style="color: #000000" class="transparente"/></td>
  <td class=xl1521549></td>
  <td class=xl1521549></td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 class=xl6521549 colspan=3 style='height:12.75pt'>2.
  Comportamiento de grupo</td>
  <td class=xl1521549></td>
  <td class=xl1521549></td>
  <td class=xl6721549 style='border-top:none'><input id="22b2" size="2" name="22b2" type="text" style="color: #000000" class="transparente"/></td>
  <td class=xl1521549></td>
  <td class=xl1521549></td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 class=xl6521549 colspan=3 style='height:12.75pt'>3. Modelos /
  héroes</td>
  <td class=xl1521549></td>
  <td class=xl1521549></td>
  <td class=xl6721549 style='border-top:none'><input id="22b3" size="2" name="22b3" type="text" style="color: #000000" class="transparente"/></td>
  <td class=xl1521549></td>
  <td class=xl1521549></td>
 </tr>
 <tr height=18 style='height:13.5pt'>
  <td height=18 class=xl6521549 colspan=2 style='height:13.5pt'>4. Afiliación</td>
  <td class=xl1521549>12-13-14</td>
  <td class=xl6721549><input id="22b41" size="2" name="22b41" type="text" style="color: #000000" class="transparente"/></td>
  <td class=xl1521549></td>
  <td class=xl1521549></td>
  <td class=xl1521549></td>
  <td class=xl1521549></td>
 </tr>
 <tr height=22 style='height:16.5pt'>
  <td height=22 class=xl1521549 style='height:16.5pt'></td>
  <td class=xl1521549></td>
  <td class=xl1521549>15-16-17</td>
  <td class=xl6721549 style='border-top:none'><input id="22b42" size="2" name="22b42" type="text" style="color: #000000" class="transparente"/></td>
  <td class=xl1521549></td>
  <td class=xl7221549><input id="22b4" size="2" name="22b4" type="text" style="color: #000000" class="transparente" readonly="readonly"/></td>
  <td class=xl1521549></td>
  <td class=xl1521549></td>
 </tr>
 <tr height=21 style='height:15.75pt'>
  <td height=21 class=xl1521549 style='height:15.75pt'></td>
  <td class=xl1521549></td>
  <td class=xl1521549></td>
  <td class=xl1521549></td>
  <td class=xl7721549>Total:</td>
  <td class=xl7321549><input id="22bsuma" size="2" name="22bsuma" type="text" style="color: #000000" class="transparente" readonly="readonly"/></td>
  <td class=xl1521549></td>
  <td class=xl1521549></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl1521549 style='height:15.0pt'></td>
  <td class=xl1521549></td>
  <td class=xl7521549></td>
  <td colspan=2 class=xl8321549>Dividido por:</td>
  <td class=xl7521549 align=right>4</td>
  <td class=xl7021549><input id="22b" size="2" name="22b" type="text" style="color: #000000" class="transparente" readonly="readonly"/></td>
  <td class=xl7621549>B</td>
 </tr>
 <tr height=21 style='height:15.75pt'>
  <td height=21 class=xl6521549 colspan=3 style='height:15.75pt'>C - <font
  class="font521549">Prácticas morales</font></td>
  <td class=xl1521549></td>
  <td class=xl1521549></td>
  <td class=xl1521549></td>
  <td class=xl1521549></td>
  <td class=xl1521549></td>
 </tr>
 <tr height=21 style='height:15.75pt'>
  <td height=21 class=xl6521549 colspan=2 style='height:15.75pt'>1. Moral
  personal</td>
  <td class=xl1521549></td>
  <td class=xl1521549></td>
  <td class=xl1521549></td>
  <td class=xl6721549><input id="22c1" size="2" name="22c1" type="text" style="color: #000000" class="transparente"/></td>
  <td class=xl1521549></td>
  <td class=xl1521549></td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 class=xl6521549 colspan=3 style='height:12.75pt'>2. Sectores de
  conformidad</td>
  <td class=xl1521549></td>
  <td class=xl1521549></td>
  <td class=xl6721549 style='border-top:none'><input id="22c2" size="2" name="22c2" type="text" style="color: #000000" class="transparente"/></td>
  <td class=xl1521549></td>
  <td class=xl1521549></td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 class=xl6521549 colspan=2 style='height:12.75pt'>3. Autocensura</td>
  <td class=xl1521549></td>
  <td class=xl1521549></td>
  <td class=xl1521549></td>
  <td class=xl6721549 style='border-top:none'><input id="22c3" size="2" name="22c3" type="text" style="color: #000000" class="transparente"/></td>
  <td class=xl1521549></td>
  <td class=xl1521549></td>
 </tr>
 <tr height=21 style='height:15.75pt'>
  <td height=21 class=xl6521549 colspan=2 style='height:15.75pt'>4. Congruencia</td>
  <td class=xl1521549></td>
  <td class=xl1521549></td>
  <td class=xl1521549></td>
  <td class=xl6821549 style='border-top:none'><input id="22c4" size="2" name="22c4" type="text" style="color: #000000" class="transparente"/></td>
  <td class=xl1521549></td>
  <td class=xl1521549></td>
 </tr>
 <tr height=21 style='height:15.75pt'>
  <td height=21 class=xl1521549 style='height:15.75pt'></td>
  <td class=xl1521549></td>
  <td class=xl1521549></td>
  <td class=xl1521549></td>
  <td class=xl7721549>Total:</td>
  <td class=xl6921549><input id="22csuma" size="2" name="22csuma" type="text" style="color: #000000" class="transparente" readonly="readonly"/></td>
  <td class=xl1521549></td>
  <td class=xl1521549></td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl1521549 style='height:15.0pt'></td>
  <td class=xl1521549></td>
  <td class=xl7521549></td>
  <td colspan=2 class=xl8321549>Dividido por:</td>
  <td class=xl7521549 align=right>4</td>
  <td class=xl7021549><input id="22c" size="2" name="22c" type="text" style="color: #000000" class="transparente" readonly="readonly"/></td>
  <td class=xl7621549>C</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 class=xl6521549 colspan=2 style='height:12.75pt'>D - <font
  class="font521549">Prospectiva</font></td>
  <td class=xl1521549></td>
  <td class=xl1521549></td>
  <td class=xl1521549></td>
  <td class=xl1521549></td>
  <td class=xl1521549></td>
  <td class=xl1521549></td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 class=xl6521549 colspan=3 style='height:12.75pt'>1.
  Expectativas sociales</td>
  <td class=xl1521549></td>
  <td class=xl1521549></td>
  <td class=xl6721549><input id="22d1" size="2" name="22d1" type="text" style="color: #000000" class="transparente"/></td>
  <td class=xl1521549></td>
  <td class=xl1521549></td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 class=xl6521549 colspan=3 style='height:12.75pt'>2. Objetivos
  para el futuro</td>
  <td class=xl1521549></td>
  <td class=xl1521549></td>
  <td class=xl6721549 style='border-top:none'><input id="22d2" size="2" name="22d2" type="text" style="color: #000000" class="transparente"/></td>
  <td class=xl1521549></td>
  <td class=xl1521549></td>
 </tr>
 <tr height=18 style='height:13.5pt'>
  <td height=18 class=xl6521549 colspan=3 style='height:13.5pt'>3.
  Planificación Realista</td>
  <td class=xl1521549></td>
  <td class=xl1521549></td>
  <td class=xl6821549 style='border-top:none'><input id="22d3" size="2" name="22d3" type="text" style="color: #000000" class="transparente"/></td>
  <td class=xl1521549></td>
  <td class=xl1521549></td>
 </tr>
 <tr height=21 style='height:15.75pt'>
  <td height=21 class=xl1521549 style='height:15.75pt'></td>
  <td class=xl1521549></td>
  <td class=xl1521549></td>
  <td class=xl1521549></td>
  <td class=xl7721549>Total:</td>
  <td class=xl6921549><input id="22dsuma" size="2" name="22dsuma" type="text" style="color: #000000" class="transparente" readonly="readonly"/></td>
  <td class=xl1521549></td>
  <td class=xl1521549></td>
 </tr>
 <tr height=21 style='height:15.75pt'>
  <td height=21 class=xl1521549 style='height:15.75pt'></td>
  <td class=xl1521549></td>
  <td class=xl7521549></td>
  <td colspan=2 class=xl8321549>Dividido por:</td>
  <td class=xl7521549 align=right>3</td>
  <td class=xl7421549><input id="22d" size="2" name="22d" type="text" style="color: #000000" class="transparente" readonly="readonly"/></td>
  <td class=xl7621549>D</td>
 </tr>
 <tr height=22 style='height:16.5pt'>
  <td height=22 class=xl1521549 style='height:16.5pt'></td>
  <td class=xl1521549></td>
  <td class=xl1521549></td>
  <td class=xl7521549></td>
  <td colspan=2 class=xl8421549 style='border-right:.5pt solid #7F7F7F'>Total
  (ABCD)</td>
  <td class=xl7921549 style='border-left:none'><input id="22suma" size="2" name="22suma" type="text" style="color: #000000" class="transparente" readonly="readonly"/></td>
  <td class=xl7621549>÷4</td>
 </tr>
 <tr height=21 style='height:15.75pt'>
  <td height=21 class=xl1521549 style='height:15.75pt'></td>
  <td class=xl1521549></td>
  <td class=xl1521549></td>
  <td class=xl7521549></td>
  <td colspan=3 class=xl8021549 style='border-right:1.0pt solid black'>Receptividad:</td>
  <td class=xl7821549><input id="22" size="2" name="22" type="text" style="color: #000000" class="transparente" readonly="readonly"/></td>
 </tr>
 <![if supportMisalignedColumns]>
 <tr height=0 style='display:none'>
  <td width=47 style='width:35pt'></td>
  <td width=68 style='width:51pt'></td>
  <td width=61 style='width:46pt'></td>
  <td width=33 style='width:25pt'></td>
  <td width=49 style='width:37pt'></td>
  <td width=33 style='width:25pt'></td>
  <td width=39 style='width:29pt'></td>
  <td width=33 style='width:25pt'></td>
 </tr>
 <![endif]>
</table>

</div></div>
</div>
</div>
<div class="clear"></div>
<div class="grid-1-12">.
</div>
<div class="grid-3-12">

							<div id="5_11627" align=left x:publishsource="Excel">

							<table border=0 cellpadding=0 cellspacing=0 width=468 style='border-collapse:
							 collapse;table-layout:fixed;padding-left:300px;width:352pt'>
							 <col width=33 style='mso-width-source:userset;mso-width-alt:1206;width:25pt'>
							 <col width=68 style='mso-width-source:userset;mso-width-alt:2486;width:51pt'>
							 <col width=33 style='mso-width-source:userset;mso-width-alt:1206;width:25pt'>
							 <col width=51 style='mso-width-source:userset;mso-width-alt:1865;width:38pt'>
							 <col width=37 style='mso-width-source:userset;mso-width-alt:1353;width:28pt'>
							 <col width=33 span=2 style='mso-width-source:userset;mso-width-alt:1206;
							 width:25pt'>
							 <col width=180 style='mso-width-source:userset;mso-width-alt:6582;width:135pt'>
							 <tr height=22 style='height:16.5pt'>
							  <td height=22 class=xl1511627 width=33 style='height:16.5pt;width:25pt'></td>
							  <td class=xl1511627 width=68 style='width:51pt'></td>
							  <td colspan=5 class=xl7211627 width=187 style='border-right:.5pt solid #7F7F7F;
							  width:141pt'>Compromiso delictivo:</td>
							  <td class=xl6611627 width=180 style='border-left:none;width:135pt'><input id="cdelic" size="2" name="cdelic" readonly="readonly" type="text" style="color: #000000" class="transparente"/></td>
							 </tr>
							 <tr height=21 style='height:15.75pt'>
							  <td height=21 class=xl1511627 style='height:15.75pt'></td>
							  <td class=xl1511627></td>
							  <td colspan=5 class=xl7211627 style='border-right:.5pt solid #7F7F7F'>10-Compromiso
							  Social:</td>
							  <td class=xl6711627 style='border-left:none'><input id="csocial" size="2" name="csocial" readonly="readonly" type="text" style="color: #000000" class="transparente"/></td>
							 </tr>
							 <tr height=20 style='height:15.0pt'>
							  <td height=20 class=xl1511627 style='height:15.0pt'></td>
							  <td class=xl1511627></td>
							  <td class=xl1511627></td>
							  <td class=xl1511627></td>
							  <td class=xl1511627></td>
							  <td colspan=2 class=xl7211627 style='border-right:.5pt solid #B2B2B2'>Total :</td>
							  <td class=xl6811627 style='border-left:none'><input id="sumafinal" size="2" name="sumafinal" readonly="readonly" type="text" style="color: #000000" class="transparente"/></td>
							 </tr>
							 <tr height=21 style='height:15.75pt'>
							  <td height=21 class=xl1511627 style='height:15.75pt'></td>
							  <td class=xl1511627></td>
							  <td class=xl1511627></td>
							  <td class=xl1511627></td>
							  <td class=xl1511627></td>
							  <td class=xl1511627></td>
							  <td class=xl1511627></td>
							  <td class=xl6511627>÷2</td>
							 </tr>
							 <tr height=21 style='mso-height-source:userset;height:15.75pt'>
							  <td colspan=7 height=21 class=xl7011627 style='border-right:1.0pt solid black;
							  height:15.75pt'>INDICE DE CRIMINALIDAD:</td>
							  <td class=xl6911627 style='border-left:none'><input id="indicecrim" size="2" name="indicecrim" readonly="readonly" type="text" style="color: #000000" class="transparente"/></td>
							 </tr>
							 <![if supportMisalignedColumns]>
							 <tr height=0 style='display:none'>
							  <td width=33 style='width:25pt'></td>
							  <td width=68 style='width:51pt'></td>
							  <td width=33 style='width:25pt'></td>
							  <td width=51 style='width:38pt'></td>
							  <td width=37 style='width:28pt'></td>
							  <td width=33 style='width:25pt'></td>
							  <td width=33 style='width:25pt'></td>
							  <td width=180 style='width:135pt'></td>
							 </tr>
							 <![endif]>
							</table>

							</div>
</div>
<div class="grid-4-12">
</div>
<div class="clear"></div>
<!-- **************** FIN FORMULARIO BY DALACOST ********************************** -->

 
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



    <input type="text" id="CLOSE_FLAG" name="CLOSE_FLAG" style="display:none" value="NOCERRADO"></input>
    <div class="grid-4-12">
    <a class="form-button-off form-left" style="display: block;"
      onclick="
              if(confirm('ALERTA. Al cerrar el formulario ya no podrás volver a modificarlo.')){
                  $('#CLOSE_FLAG').val('CERRADO');
                   document.formulario_FCRIMINOMETRICA.submit();
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
 

<!-- inicio tooltips 1.1a -->
<div class="jqmWindow" id="ritmo">
<img src="/images/loading-image.gif" />
</div>
 <div class="jqmWindow" id="gravedad">
<img src="/images/loading-image.gif" />
</div>
  <div class="jqmWindow" id="variedad">
<img src="/images/loading-image.gif" />
</div>
  <div class="jqmWindow" id="evolucion">
<img src="/images/loading-image.gif" />
</div>
  <div class="jqmWindow" id="precocidad">
<img src="/images/loading-image.gif" />
</div>
  <div class="jqmWindow" id="frecuencia">
<img src="/images/loading-image.gif" />
</div>
  <div class="jqmWindow" id="experticia">
<img src="/images/loading-image.gif" />
</div>
 <!-- inicio tooltips 1.1b -->
  <div class="jqmWindow" id="fugas">
<img src="/images/loading-image.gif" />
</div>
  <div class="jqmWindow" id="vandalismo">
<img src="/images/loading-image.gif" />
</div>
  <div class="jqmWindow" id="rinas">
<img src="/images/loading-image.gif" />
</div>
  <div class="jqmWindow" id="consumo">
<img src="/images/loading-image.gif" />
</div>
   <div class="jqmWindow" id="indisiplina">
<img src="/images/loading-image.gif" />
</div>
  <div class="jqmWindow" id="ociosidad">
<img src="/images/loading-image.gif" />
</div>
  <div class="jqmWindow" id="negativo">
<img src="/images/loading-image.gif" />
</div>
  <div class="jqmWindow" id="sanciones">
<img src="/images/loading-image.gif" />
</div>  <div class="jqmWindow" id="proteccion">
<img src="/images/loading-image.gif" />
</div>
  <div class="jqmWindow" id="escolares">
<img src="/images/loading-image.gif" />
</div>

  <div class="jqmWindow" id="detenciones">
<img src="/images/loading-image.gif" />
</div>
  <div class="jqmWindow" id="severa">
<img src="/images/loading-image.gif" />
</div>
 <div class="jqmWindow" id="enculturacion">
<img src="/images/loading-image.gif" />
</div>
<!-- 1.2 -->
 <div class="jqmWindow" id="repetitivo">
<img src="/images/loading-image.gif" />
</div>
 <div class="jqmWindow" id="resignacion">
<img src="/images/loading-image.gif" />
</div>
 
  <div class="jqmWindow" id="experiencia">
<img src="/images/loading-image.gif" />
</div>
 
  <div class="jqmWindow" id="rechazo">
<img src="/images/loading-image.gif" />
</div>
  <div class="jqmWindow" id="impunidad">
<img src="/images/loading-image.gif" />
</div>  <div class="jqmWindow" id="inestabilidad">
<img src="/images/loading-image.gif" />
</div>
 
 
</div><!-- Fin contenido -->





<script type="text/javascript">
                $().ready(function() {
                     $("form").loadJSON(<?php echo $sf_data->getRaw('respuestasGuardadas');?>);
                    <?php if($consenso==1): ?>
                      $("form").loadAndBlockJSON(<?php echo $sf_data->getRaw('coincidencias');?>); 
                    <?php endif; ?>
                     $("#msgzone").hide();
                     $("#contenido").show();
                });
</script>