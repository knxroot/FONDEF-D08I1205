asd

<?php
/*
 * Template para el error 404 personalizado
 * referencia: http://www.librosweb.es/symfony_1_2/capitulo19/opciones_de_symfony.html
 * and open the template in the editor.
 * Ejemplo de error http://psicologia2.ufro.cl/web/frontend_dev.php
 * tambien se puede adornar usando formee: 	<span class="form-msg-error">Página no encontrada. El servidor ha retornado un error 404.</span>
 */
?>
<!-- apps/frontend/templates/layout.php -->
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="author" content="Gustavo Lacoste &lt;gustavo@lacosox.org&gt;" />
<meta name="copyright" content="Licensed under GPL and MIT." />
<meta name="title" content="Sitema de registro de adolecentes infractores de ley" />
<meta name="description" content="Proyecto FONDEF d08i1205 (ESTRATEGIA ECOSISTÉMICA ESPECIALIZADA DE INTERVENCIÓN DIFERENCIADA PARA FAVORECER LA INTEGRACIÓN PSI COSOCIAL DE ADOLESCENTES INFRACTORES DE LEY)" />
<meta name="keywords" content="psicologia,psico, delitos,d08i1205," />
<meta name="language" content="es" />
<meta name="robots" content="all" />
    <title>
                  Sistema de registro de adolescentes infractores de ley -   ERROR 404
    </title>
<link rel="stylesheet" type="text/css" media="screen" href="/css/text.css" />
<link rel="stylesheet" type="text/css" media="screen" href="/css/redmond/jquery-ui-1.8.1.custom.css" />
<link rel="stylesheet" type="text/css" media="screen" href="/css/960.css" />
<link rel="stylesheet" type="text/css" media="screen" href="/css/formee/css/form-structure.css" />
<link rel="stylesheet" type="text/css" media="screen" href="/css/formee/css/form-style.css" />
<link rel="stylesheet" type="text/css" media="screen" href="/css/base.css" />


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

  <div id="contenedorPrincipal">

    <div class="container_16 ui-corner-top" id="container-header">
      <div class="clear">
      </div>
    </div>
    <div class="container_16" id="centro">
      <div class="grid_16" id="body-header">
        <div class="grid_11">&#160;
        </div>
      </div>
      <div class="clear">
      </div>
      <div class="grid_16" id="body">
        <!-- INICIO CONTENIDO CENTRAL -->
          <span class="form-msg-error"><strong>Error:</strong> yaml.</span>

            <?php

            echo sfYaml::dump(array(
                'error' => array(
                    'code' => $code,
                    'message' => $message,
                    )))
            ?>

          <ul class="sfTIconList">
                <li class="sfTLinkMessage"><a href="javascript:history.go(-1)">Volver a la página anterior</a></li>
          </ul>
        <!-- FIN CONTENIDO CENTRAL -->
      </div>
      <div class="clear">
      </div>
    </div>
    <div class="container_16 ui-corner-bottom" id="footer">
      <div class="footer-menu">
        <div class="grid_6"><a href="http://www.ufro.cl">Universidad de la Frontera, Temuco - Chile </a>        </div>
        <div class="grid_1">|
        </div>
        <div class="grid_2 suffix_5"><a href="http://code.google.com/p/fondef-d08i1205/">Acerca de ...</a>        </div>
        <div class="grid_2"><b><a href="http://www.fondef.cl/bases/fondef/PROYECTO/08/I/D08I1205.HTML">Fondef D08I1205</a></b>

        </div>
        <div class="clear">
        </div>
      </div>
    </div>
  </div>
  </body>
</html>



