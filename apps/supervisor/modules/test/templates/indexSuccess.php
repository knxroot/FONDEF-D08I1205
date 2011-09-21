ASD
<?php echo $idUser; ?>
<?php echo $idEncuestado; ?>

<br><br><br><br>
MODULO DE PRUEBA

<?php
  $modoConsenso=$request->getParameter('modoConsenso');
  $idEncuestado=$request->getParameter('idEncuestado');
  $nombremodulo="FERR";
?>

<IFRAME src="<?php echo url_for('uploader/index?modoConsenso='.$modoConsenso.'&idEncuestado='.$idEncuestado.'&nombremodulo='.$nombremodulo);?>" width="350" height="130" scrolling="auto" frameborder="0">
Cargando...
</IFRAME>

