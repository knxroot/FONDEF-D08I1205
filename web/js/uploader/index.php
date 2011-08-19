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
      $mailto = 'yourname@yourdomain.com';
      $mailfrom = isset($_POST['email']) ? $_POST['email'] : $mailto;
      $subject = 'Website form';
      $message = 'Values submitted from web site form:';
      $success_url = '';
      $error_url = '';
      $error = '';
      $mysql_server = '127.0.0.1';
      $mysql_database = 'psico';
      $mysql_table = 'archivos';
      $mysql_username = 'root';
      $mysql_password = 'holahola';
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
      $search = array("ä", "Ä", "ö", "Ö", "ü", "Ü", "ß", "!", "§", "$", "%", "&", "/", "\x00", "^", "°", "\x1a", "-", "\"", " ", "\\", "\0", "\x0B", "\t", "\n", "\r", "(", ")", "=", "?", "`", "*", "'", ":", ";", ">", "<", "{", "}", "[", "]", "~", "²", "³", "~", "µ", "@", "|", "<", "+", "#", ".", "´", "+", ",");
      $replace = array("ae", "Ae", "oe", "Oe", "ue", "Ue", "ss");
      foreach($_POST as $name=>$value)
      {
         $name = str_replace($search, $replace, $name);
         $name = strtoupper($name);
         $form_data[$name] = $value;
      }
      mysql_connect($mysql_server, $mysql_username, $mysql_password) or die('Failed to connect to database server!<br>'.mysql_error());
      mysql_query("CREATE DATABASE IF NOT EXISTS $mysql_database");
      mysql_select_db($mysql_database) or die('Failed to select database<br>'.mysql_error());
      mysql_query("CREATE TABLE IF NOT EXISTS $mysql_table (ID int(9) NOT NULL auto_increment, DATESTAMP DATE, TIME VARCHAR(8), IP VARCHAR(15), BROWSER TINYTEXT, PRIMARY KEY (id)) TYPE=MyISAM");
      foreach($form_data as $name=>$value)
      {
         mysql_query("ALTER TABLE $mysql_table ADD $name VARCHAR(255)");
      }
      mysql_query("INSERT INTO $mysql_table (DATESTAMP, TIME, IP, BROWSER)
                   VALUES ('".date("Y-m-d")."',
                   '".date("G:i:s")."',
                   '".$_SERVER['REMOTE_ADDR']."',
                   '".$_SERVER['HTTP_USER_AGENT']."')")or die('Failed to insert data into table!<br>'.mysql_error()); 
      $id = mysql_insert_id();
      foreach($form_data as $name=>$value)
      {
         mysql_query("UPDATE $mysql_table SET $name='".mysql_real_escape_string($value)."' WHERE ID=$id") or die('Failed to update table!<br>'.mysql_error());
      }
      mysql_close();
      header('Location: '.$success_url);
      exit;
   }
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE8">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Untitled Page</title>
<style type="text/css">
body
{
   background-color: #FFFFFF;
   color: #000000;
}
</style>
</head>
<body>
<div id="wb_Form1" style="position:absolute;background-color:#F0F0F0;left:0px;top:1px;width:355px;height:57px;z-index:2">
<form name="FormUploadFiles" method="post" action="<?php echo basename(__FILE__); ?>" enctype="multipart/form-data" id="Form1">
<div id="wb_Text1" style="margin:0;padding:0;position:absolute;left:12px;top:19px;width:81px;height:16px;text-align:left;z-index:0;">
<font style="font-size:13px" color="#000000" face="Arial">Subir Archivo</font></div>
<input type="file" id="FileUpload1" style="position:absolute;left:101px;top:15px;width:198px;height:23px;font-family:Arial;font-size:13px;z-index:1" name="FileUpload1">
</form>
</div>
</body>
</html>