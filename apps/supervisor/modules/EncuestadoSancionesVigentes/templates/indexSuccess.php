<h1>Encuestado sancioness List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Select sistema atencion</th>
      <th>Input nombre programa</th>
      <th>Select ciudad programa</th>
      <th>Input tiempo total condena</th>
      <th>Input fecha inicio condena</th>
      <th>Select tipo materia</th>
      <th>Select causa delito</th>
      <th>Id encuestado</th>
      <th>Select tipo tiempo total condena</th>
      <th>Input ruk</th>
      <th>Input fecha detencion</th>
      <th>Input fecha control detencion</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($encuestado_sancioness as $encuestado_sanciones): ?>
    <tr>
      <td><a href="<?php echo url_for('EncuestadoSancionesVigentes/edit?id='.$encuestado_sanciones->getId()) ?>"><?php echo $encuestado_sanciones->getId() ?></a></td>
      <td><?php echo $encuestado_sanciones->getSelectSistemaAtencion() ?></td>
      <td><?php echo $encuestado_sanciones->getInputNombrePrograma() ?></td>
      <td><?php echo $encuestado_sanciones->getSelectCiudadPrograma() ?></td>
      <td><?php echo $encuestado_sanciones->getInputTiempoTotalCondena() ?></td>
      <td><?php echo $encuestado_sanciones->getInputFechaInicioCondena() ?></td>
      <td><?php echo $encuestado_sanciones->getSelectTipoMateria() ?></td>
      <td><?php echo $encuestado_sanciones->getSelectCausaDelito() ?></td>
      <td><?php echo $encuestado_sanciones->getIdEncuestado() ?></td>
      <td><?php echo $encuestado_sanciones->getSelectTipoTiempoTotalCondena() ?></td>
      <td><?php echo $encuestado_sanciones->getInputRuk() ?></td>
      <td><?php echo $encuestado_sanciones->getInputFechaDetencion() ?></td>
      <td><?php echo $encuestado_sanciones->getInputFechaControlDetencion() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('EncuestadoSancionesVigentes/new') ?>">New</a>
