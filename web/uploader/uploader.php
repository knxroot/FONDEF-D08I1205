<?php //config.php
$upload_folder = "upload";
$upload_folder = "http://" . $_SERVER['HTTP_HOST'] . dirname($_SERVER['SCRIPT_NAME'])."/".$upload_folder;
echo $upload_folder;



$link = mysql_connect('localhost', 'root', 'holahola');
if (!$link) {
    die('Not connected : ' . mysql_error());
}

if (! mysql_select_db('psico') ) {
    die ('Can\'t use foo : ' . mysql_error());
}


$concensoMode=$_GET['concensoMode'];
$idEncuestado=$_GET['idEncuestado'];
$idUser=$_GET['idUser'];

if(isset($_GET['borrar']) ){
  mysql_query("DELETE FROM `archivos` WHERE `id_user` = '$idUser' AND `id_encuestado` = '$idEncuestado' AND `concensoMode`=  '$concensoMode'  ") ; 
}



if (isset($_GET['submitted'])) {
   $concensoMode=$_GET['concensoMode'];
   $idEncuestado=$_GET['idEncuestado'];
   $idUser=$_GET['idUser'];
   $nombre_archivo="HOLA.TXT";

  $sql = "INSERT INTO `archivos` ( `id_archivo` ,  `nombre_archivo` ,  `id_user` ,  `id_encuestado` ,  `concensoMode`  ) VALUES(  '' ,  '{$nombre_archivo}' ,  '{$idUser}' ,  '{$idEncuestado}' ,  '{$concensoMode}'  ) "; 
  mysql_query($sql) or die(mysql_error()); 
} 

?>

<?php
   function ValidateEmail($email)
   {
      $pattern = '/^([0-9a-z]([-.\w]*[0-9a-z])*@(([0-9a-z])+([-\w]*[0-9a-z])*\.)+[a-z]{2,6})$/i';
      return preg_match($pattern, $email);
   }

   function RecursiveMkdir($path)
   {
      if (!file_exists($path))
      {
         RecursiveMkdir(dirname($path));
         mkdir($path, 0777);
      }
   }

   if($_SERVER['REQUEST_METHOD'] == 'POST')
   {
      $mailto = '';
      $mailfrom = isset($_POST['email']) ? $_POST['email'] : $mailto;
      $subject = '';
      $message = '';
      $success_url = '';
      $error_url = '';
      $error = '';
      $eol = "\n";
      $max_filesize = isset($_POST['filesize']) ? $_POST['filesize'] * 1024 : 1024000;
      $upload_folder = "upload";
      $upload_folder = "http://" . $_SERVER['HTTP_HOST'] . dirname($_SERVER['SCRIPT_NAME'])."/".$upload_folder;

      $boundary = md5(uniqid(time()));

      $header  = 'From: '.$mailfrom.$eol;
      $header .= 'Reply-To: '.$mailfrom.$eol;
      $header .= 'MIME-Version: 1.0'.$eol;
      $header .= 'Content-Type: multipart/mixed; boundary="'.$boundary.'"'.$eol;
      $header .= 'X-Mailer: PHP v'.phpversion().$eol;
      if (!ValidateEmail($mailfrom))
      {
         $error .= "The specified email address is invalid!\n<br>";
      }

      $prefix = rand(111111, 999999);

      $i = 0;
      while (list ($key, $val) = each ($_FILES))
      {
         if ($_FILES[$key]['name'] != "" and file_exists($_FILES[$key]['tmp_name']) and $_FILES[$key]['size'] > 0)
         {
            $upload_DstName[$i] = $prefix . "_" . str_replace(" ", "_", $_FILES[$key]['name']);
            $upload_SrcName[$i] = $_FILES[$key]['name'];
            $upload_Size[$i] = ($_FILES[$key]['size']);
            $upload_Temp[$i] = ($_FILES[$key]['tmp_name']);
            $upload_Type[$i] = ($_FILES[$key]['type']);
            $uploadlink[$i] = "$upload_folder/$upload_DstName[$i]";
            $upload_fieldname[$i] = $key;
            $upload_fieldname_final[$i] = ucwords(str_replace("_", " ", $key));
            $fieldvalue[$i] = $uploadlink[$i];
            $i++;
         }
         if ($upload_Size[$i] >= $max_filesize)
         {
            $error .= "The size of $key (file: $upload_SrcName[$i]) is bigger than the allowed " . $max_filesize/1024 . " Kbytes!\n";
         }
      }

      if (!empty($error))
      {
         $errorcode = file_get_contents($error_url);
         $replace = "##error##";
         $errorcode = str_replace($replace, $error, $errorcode);
         echo $errorcode;
         exit;
      }

      $uploadfolder = basename($upload_folder);
      for ($i = 0; $i < count($upload_DstName); $i++)
      {
         $uploadFile = $uploadfolder . "/" . $upload_DstName[$i];
         if (!is_dir(dirname($uploadFile)))
         {
            RecursiveMkdir(dirname($uploadFile));
         }
         else
         {
            chmod(dirname($uploadFile), 0777);
         }
         move_uploaded_file($upload_Temp[$i] , $uploadFile);
         chmod($uploadFile, 0644);
      }

      $internalfields = array ("submit", "reset", "send", "captcha_code");
      $message .= $eol;
      $message .= "IP Address : ";
      $message .= $_SERVER['REMOTE_ADDR'];
      $message .= $eol;
      foreach ($_POST as $key => $value)
      {
         if (!in_array(strtolower($key), $internalfields))
         {
            if (!is_array($value))
            {
               $message .= ucwords(str_replace("_", " ", $key)) . " : " . $value . $eol;
            }
            else
            {
               $message .= ucwords(str_replace("_", " ", $key)) . " : " . implode(",", $value) . $eol;
            }
         }
      }

      if (count($upload_SrcName) > 0)
      {
         $message .= "\nThe following files have been uploaded:\n";
         for ($i = 0; $i < count($upload_SrcName); $i++)
         {
            $message .= $upload_SrcName[$i] . " Link: " . $uploadlink[$i] . "\n";
         }
      }
      $body  = 'This is a multi-part message in MIME format.'.$eol.$eol;
      $body .= '--'.$boundary.$eol;
      $body .= 'Content-Type: text/plain; charset=ISO-8859-1'.$eol;
      $body .= 'Content-Transfer-Encoding: 8bit'.$eol;
      $body .= $eol.stripslashes($message).$eol;
      $body .= '--'.$boundary.'--'.$eol;
      mail($mailto, $subject, $body, $header);
      header('Location: '.$success_url);
      exit;
   }
?>







<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE8">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Uploader</title>
<style type="text/css">
/*<![CDATA[*/
body
{
   background-color: #FFFFFF;
   color: #000000;
}
/*]]>*/
</style>
<script type="text/javascript">
//<![CDATA[
function ValidateForm1(theForm)
{
   var regexp;
   var extension = theForm.FileUpload1.value.substr(theForm.FileUpload1.value.lastIndexOf('.'));
   if ((extension.toLowerCase() != ".gno") &&
       (extension != ""))
   {
      alert("El archivo debe ser .GNO");
      theForm.FileUpload1.focus();
      return false;
   }
   return true;
}
//]]
</script>
</head>
<body>
<?php
   $result = mysql_query("SELECT * FROM `archivos` WHERE `id_user` = '$idUser' AND `id_encuestado` = '$idEncuestado' AND `concensoMode`=  '$concensoMode'") or trigger_error(mysql_error()); 
?>
<?php if (mysql_num_rows($result)>0): ?>
<?php

   while($row = mysql_fetch_array($result)){ 
   foreach($row AS $key => $value) { $row[$key] = stripslashes($value); }
?>

<div id="Layer1" style="position:absolute;background-color:#F0F0F0;left:5px;top:2px;width:293px;height:49px;z-index:5" title="">
<div id="wb_Text1" style="margin:0;padding:0;position:absolute;left:8px;top:13px;width:209px;height:15px;text-align:left;z-index:2;">
<font style="font-size:12px" color="#000000" face="Arial"><?php echo $row['nombre_archivo'];?> </font></div>
<div id="wb_Text3" style="margin:0;padding:0;position:absolute;left:221px;top:13px;width:63px;height:15px;text-align:left;z-index:3;">
<div style="position:absolute;left:0px;top:0px;width:63px;height:15px;"><font style="font-size:12px" color="#FF0000" face="Arial"><b><a href="<?php echo basename(__FILE__).'?concensoMode='.$concensoMode.'&idEncuestado='.$idEncuestado.'&idUser='.$idUser.'&borrar=1'; ?>">[Eliminar]</a></b></font><font style="font-size:8px" color="#000000" face="Arial"><br></font></div>
</div>
</div>
<?php }  ?>

<?php else: ?>
<div id="wb_Form1" style="position:absolute;background-color:#F0F0F0;left:4px;top:3px;width:295px;height:101px;z-index:4">
<form name="Form1" method="GET" action="<?php echo basename(__FILE__); ?>" enctype="multipart/form-data" id="Form1" onsubmit="return ValidateForm1(this)">
<input type="file" id="FileUpload1" style="position:absolute;left:5px;top:15px;width:150px;height:23px;font-family:Arial;font-size:13px;z-index:0" name="archivo">
<input type="submit" id="Button1" name="" value="Subir" style="position:absolute;left:83px;top:52px;width:96px;height:25px;font-family:Arial;font-size:13px;z-index:1">

<input type='hidden' value="<?php echo $concensoMode; ?>" name='concensoMode' /> 
<input type='hidden' value="<?php echo $idEncuestado; ?>" name='idEncuestado' /> 
<input type='hidden' value="<?php echo $idUser; ?>" name='idUser' /> 
<input type='hidden' value='1' name='submitted' /> 

</form>
</div>
<?php endif; ?>

</body>
</html>
