<!-- apps/frontend/templates/layout.php -->
<!DOCTYPE html>
<html lang="es">                                 
  <head>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <title>
        <?php if (!get_slot('title')): ?>
          Sistema de registro de adolescentes infractores de ley
        <?php else: ?>
          Sistema de registro de adolescentes infractores de ley - <?php include_slot('title') ?>
        <?php endif ?>

    </title>                                                        
    <?php include_stylesheets() ?>
    <?php include_javascripts() ?>                                                 
  </head>                                   
  <body>
  <noscript>
  <!-- Comienzo Advertencia aplicación sólo funciona con JS activo -->
    <span class="form-msg-error"><strong>Error:</strong> <font face="arial">JavaScript debe estar habilitado para poder utilizar este sistema en la vista estándar. Sin embargo, parece que esta funcionalidad no está habilitada o que no es compatible con tu navegador. Para utilizar la vista estándar, habilita JavaScript cambiando las opciones de tu navegador y, a continuación, <a href="">inténtalo de nuevo</a>.</font>
    </span>
  <style>
  #contenedorPrincipal{
    display: none;
  }
  </style>
  <!-- Fin Advertencia aplicación sólo funciona con JS activo -->
  </noscript>

  <!-- Comienzo Advertencia aplicación sólo funciona con navgadores que soporten HTML5 no con Iexplorer menores a 9.0-->
  <!--[if lt IE 9]>
    <span class="form-msg-error"><strong>Error:</strong> La versión de Internet Explorer que estás utilizando no es recomendada para navegar en Internet.
    Por razones técnicas y de seguridad esta web no soporta versiones de Internet Explorer inferiores a la versión 9.0. Te recomendamos que actualices a <a href="http://windows.microsoft.com/ie9">una versión más reciente</a> o pruebes otros navegadores como <a href="http://www.mozilla.com" title="Firefox web browser">Firefox</a>, <a href="http://www.opera.com/" title="Opera Browser">Opera</a>, <a href="http://www.apple.com/safari/" title="Apple Safari">Safari</a> o <a href="http://www.google.com/chrome" title="Google Chrome">Chrome</a>.<br><br>
    <h2>El navegador recomendado para trabajar con esta web es <a href="http://www.mozilla.com" title="Firefox web browser">Firefox 3.6 o superior</a> bajo GNU/Linux o Microsoft Windows.</h2>
    <a href="http://download.mozilla.org"><?php echo image_tag('descargarNavRecomendado.gif', 'alt=Descarga el navegador recomendado;');?></a>
    </span>
  <style>
  #contenedorPrincipal{
    display: none;
  }
  </style>
  <![endif]-->
<!-- Fin Advertencia aplicación sólo funciona con navgadores que soporten HTML5 no con Iexplorer menores a 9.0 -->
  <div id="contenedorPrincipal">
    <div class="container_16 ui-corner-top" id="container-header">                
      <div class="clear">                      
      </div>                                                
    </div>                                                                   
    <div class="container_16" id="centro">                                       
      <div class="grid_16" id="body-header">                      
        <div class="grid_11">&#160;
        </div>                   
        <div class="grid_4 ui-corner-all" id="login-box">
          <?php if (!include_slot('login-box')): ?>
          <div class="grid_1">
          <?php if ($sf_user->isAuthenticated()): ?>
                <p id="login-text"><?php echo link_to('Salir', '@sf_guard_signout') ?></p>
          <?php else: ?>
                <p id="login-text"><?php echo link_to('Entrar', '@sf_guard_signin') ?></p>
          <?php endif; ?>
          </div> 
          <div class="grid_2">
            <?php if ($sf_user->isAuthenticated()): ?>
            <?php echo image_tag('icoentrar.png', 'id=login-img;style=float:left;');?>
            <?php echo $sf_user->getUsername();?>
            <?php endif; ?>
          </div>
          <?php endif; ?>                       
        </div>                            
      </div>                  
      <div class="clear">                      
      </div>         
      <div class="grid_16" id="body">
        <?php if ($sf_user->hasFlash('notice')): ?>
          <div class="flash_notice">
            <?php echo $sf_user->getFlash('notice') ?>
          </div>
        <?php endif; ?>
 
        <?php if ($sf_user->hasFlash('error')): ?>
          <div class="flash_error">
            <?php echo $sf_user->getFlash('error') ?>
          </div>
        <?php endif; ?>
        <!-- INICIO CONTENIDO CENTRAL -->
        <?php echo $sf_content ?>
        <!-- FIN CONTENIDO CENTRAL -->
      </div>                                                             
      <div class="clear">                      
      </div>                                                                                                                                                                 
    </div>                                  
    <div class="container_16 ui-corner-bottom" id="footer">                  
      <div class="footer-menu">                      
        <div class="grid_6"><?php echo link_to('Universidad de la Frontera, Temuco - Chile', 'http://www.ufro.cl') ?>
        </div>                      
        <div class="grid_1">|                  
        </div>                      
        <div class="grid_2 suffix_5"><?php echo link_to('Acerca de ...', 'http://psicologia.ufro.cl/') ?>
        </div>                      
        <div class="grid_2"><b><?php echo link_to('Fondef D08I1205', 'http://www.fondef.cl/bases/fondef/PROYECTO/08/I/D08I1205.HTML') ?></b>
        </div>                              
        <div class="clear">                        
        </div>             
      </div>                         
    </div>
  </div>
  </body>
</html>
