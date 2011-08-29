<?php

/**
 * jQueryFileUpload actions.
 *
 * @package    psicologia
 * @subpackage jQueryFileUpload
 * @author     Gustavo Lacoste <gustavo@lacosox.org>
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class jQueryFileUploadActions extends Actions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
  //  $this->forward('default', 'module');

  }


  public function executeUpload(sfWebRequest $request)
  {
    if ($request->getFiles('files'))
    {
      foreach ($request->getFileNames() as $uploadedFile)
      {
        $fileName  = $request->getFileName($uploadedFile);
        $fileSize  = $request->getFileSize($uploadedFile);
        $fileType  = $request->getFileType($uploadedFile);
        $fileError = $request->hasFileError($uploadedFile);
        $uploadDir = sfConfig::get('sf_upload_dir');
        $request->moveFile($uploadedFile, $uploadDir.'/'.$fileName);
      }
      $this->redirect('jQueryFileUpload/index');
    }
  }




}
