<?php

/**
 * uploader actions.
 *
 * @package    psicologia
 * @subpackage uploader
 * @author     Gustavo Lacoste <gustavo@lacosox.org>
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class uploaderActions extends Actions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
   // $this->forward('default', 'module');
     $this->BD_Conectar();
     $this->modoConsenso = $request->getParameter('modoConsenso');
     $this->idUser=$this->getUser()->getGuardUser()->getId();
     $this->idEncuestado=$request->getParameter('idEncuestado');
     $this->nombremodulo=$request->getParameter('nombremodulo');

     $result = mysql_query("SELECT * FROM `archivos` WHERE `id_user` = '$this->idUser' AND `id_encuestado` = '$this->idEncuestado' AND `concensoMode`=  '$this->modoConsenso' AND `nombremodulo`=  '$this->nombremodulo'") or trigger_error(mysql_error());
     if (mysql_num_rows($result)>0){
       while($row = mysql_fetch_array($result)){
       foreach($row AS $key => $value) { $row[$key] = stripslashes($value); }
       $this->nombre_archivo=$row['nombre_archivo'];
       }
       sfContext::getInstance()->getConfiguration()->loadHelpers(array('Url'));
       $this->url_archivo=public_path('uploads'.'/'.$this->nombremodulo.'/'.$this->nombre_archivo);

       return 'Listar';
     }else{
       return 'Subir';
     }
  }

  public function executeSubirArchivo(sfWebRequest $request)
  {
   // $this->forward('default', 'module');
     $this->BD_Conectar();
     $this->modoConsenso = $request->getParameter('modoConsenso');
     $this->idUser=$this->getUser()->getGuardUser()->getId();
     $this->idEncuestado=$request->getParameter('idEncuestado');
     $this->nombremodulo=$request->getParameter('nombremodulo');

     $prefijo=substr(md5(uniqid(rand())),0,3);
     $prefijo=$this->idUser.$this->idEncuestado.$this->modoConsenso.$prefijo;
     move_uploaded_file( $_FILES['archivo'][ 'tmp_name' ], sfConfig::get('sf_upload_dir').'/'.$this->nombremodulo.'/'. $prefijo."_".$_FILES['archivo'][ 'name' ]);
     $this->nombre_archivo=$prefijo."_".$_FILES['archivo'][ 'name' ];

     $sql = "INSERT INTO `archivos` ( `id_archivo` ,  `nombre_archivo` ,  `id_user` ,  `id_encuestado` ,  `concensoMode` ,`nombremodulo` ) VALUES(  '' ,  '{$this->nombre_archivo}' ,  '{$this->idUser}' ,  '{$this->idEncuestado}' ,  '{$this->modoConsenso}',  '{$this->nombremodulo}'  ) ";
     mysql_query($sql) or die(mysql_error());
     $this->redirect('uploader/index?modoConsenso='.$this->modoConsenso.'&idEncuestado='.$this->idEncuestado.'&nombremodulo='.$this->nombremodulo);
  }

  public function executeBorrarArchivo(sfWebRequest $request)
  {
   // $this->forward('default', 'module');
     $this->BD_Conectar();
     $this->modoConsenso = $request->getParameter('modoConsenso');
     $this->idUser=$this->getUser()->getGuardUser()->getId();
     $this->idEncuestado=$request->getParameter('idEncuestado');
     $this->nombremodulo=$request->getParameter('nombremodulo');
     
     $sql = "DELETE FROM `archivos` WHERE `id_user` = '{$this->idUser}' AND `id_encuestado` = '{$this->idEncuestado}' AND `concensoMode`=  '{$this->modoConsenso}' AND `nombremodulo`=  '$this->nombremodulo'  ";
     mysql_query($sql) or die(mysql_error());
     $this->redirect('uploader/index?modoConsenso='.$this->modoConsenso.'&idEncuestado='.$this->idEncuestado.'&nombremodulo='.$this->nombremodulo);

  }

}
