<div id="wb_Form1" style="position:absolute;background-color:#F0F0F0;left:4px;top:3px;width:295px;height:101px;z-index:4">
<form name="Form1" enctype="multipart/form-data" method="post" action="<?php echo url_for('uploader/SubirArchivo?modoConsenso='.$modoConsenso.'&idEncuestado='.$idEncuestado.'&nombremodulo='.$nombremodulo);?>">
<input type="file" id="FileUpload1" style="position:absolute;left:5px;top:15px;width:150px;height:23px;font-family:Arial;font-size:13px;z-index:0" name="archivo">
<input type="submit" id="Button1" name="" value="Subir" style="position:absolute;left:83px;top:52px;width:96px;height:25px;font-family:Arial;font-size:13px;z-index:1">
</form>
</div>