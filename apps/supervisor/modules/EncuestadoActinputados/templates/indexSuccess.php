<h1>Encuestado actinputados List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Input fecha inicio investigacion3</th>
      <th>Input plazo investigacion3</th>
      <th>Select tribunal3</th>
      <th>Select tipo materia3</th>
      <th>Select causa delito3</th>
      <th>Id encuestado</th>
      <th>Input ruk 3</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($encuestado_actinputados as $encuestado_actinputado): ?>
    <tr>
      <td><a href="<?php echo url_for('EncuestadoActinputados/edit?id='.$encuestado_actinputado->getId()) ?>"><?php echo $encuestado_actinputado->getId() ?></a></td>
      <td><?php echo $encuestado_actinputado->getInputFechaInicioInvestigacion3() ?></td>
      <td><?php echo $encuestado_actinputado->getInputPlazoInvestigacion3() ?></td>
      <td><?php echo $encuestado_actinputado->getSelectTribunal3() ?></td>
      <td><?php echo $encuestado_actinputado->getSelectTipoMateria3() ?></td>
      <td><?php echo $encuestado_actinputado->getSelectCausaDelito3() ?></td>
      <td><?php echo $encuestado_actinputado->getIdEncuestado() ?></td>
      <td><?php echo $encuestado_actinputado->getInputRuk3() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('EncuestadoActinputados/new') ?>">New</a>
