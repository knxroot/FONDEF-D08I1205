<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<form action="<?php echo url_for('EncuestadoSancionesVigentes/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?id='.$form->getObject()->getId() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
<?php if (!$form->getObject()->isNew()): ?>
<input type="hidden" name="sf_method" value="put" />
<?php endif; ?>
  <table>
    <tfoot>
      <tr>
        <td colspan="2">
          <?php echo $form->renderHiddenFields(false) ?>
          &nbsp;<a href="<?php echo url_for('EncuestadoSancionesVigentes/index') ?>">Back to list</a>
          <?php if (!$form->getObject()->isNew()): ?>
            &nbsp;<?php echo link_to('Delete', 'EncuestadoSancionesVigentes/delete?id='.$form->getObject()->getId(), array('method' => 'delete', 'confirm' => 'Are you sure?')) ?>
          <?php endif; ?>
          <input type="submit" value="Save" />
        </td>
      </tr>
    </tfoot>
    <tbody>
      <?php echo $form->renderGlobalErrors() ?>
      <tr>
        <th><?php echo $form['select_sistema_atencion']->renderLabel() ?></th>
        <td>
          <?php echo $form['select_sistema_atencion']->renderError() ?>
          <?php echo $form['select_sistema_atencion'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['input_nombre_programa']->renderLabel() ?></th>
        <td>
          <?php echo $form['input_nombre_programa']->renderError() ?>
          <?php echo $form['input_nombre_programa'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['select_ciudad_programa']->renderLabel() ?></th>
        <td>
          <?php echo $form['select_ciudad_programa']->renderError() ?>
          <?php echo $form['select_ciudad_programa'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['input_tiempo_total_condena']->renderLabel() ?></th>
        <td>
          <?php echo $form['input_tiempo_total_condena']->renderError() ?>
          <?php echo $form['input_tiempo_total_condena'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['input_fecha_inicio_condena']->renderLabel() ?></th>
        <td>
          <?php echo $form['input_fecha_inicio_condena']->renderError() ?>
          <?php echo $form['input_fecha_inicio_condena'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['select_tipo_materia']->renderLabel() ?></th>
        <td>
          <?php echo $form['select_tipo_materia']->renderError() ?>
          <?php echo $form['select_tipo_materia'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['select_causa_delito']->renderLabel() ?></th>
        <td>
          <?php echo $form['select_causa_delito']->renderError() ?>
          <?php echo $form['select_causa_delito'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['id_encuestado']->renderLabel() ?></th>
        <td>
          <?php echo $form['id_encuestado']->renderError() ?>
          <?php echo $form['id_encuestado'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['select_tipo_tiempo_total_condena']->renderLabel() ?></th>
        <td>
          <?php echo $form['select_tipo_tiempo_total_condena']->renderError() ?>
          <?php echo $form['select_tipo_tiempo_total_condena'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['input_ruk']->renderLabel() ?></th>
        <td>
          <?php echo $form['input_ruk']->renderError() ?>
          <?php echo $form['input_ruk'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['input_fecha_detencion']->renderLabel() ?></th>
        <td>
          <?php echo $form['input_fecha_detencion']->renderError() ?>
          <?php echo $form['input_fecha_detencion'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['input_fecha_control_detencion']->renderLabel() ?></th>
        <td>
          <?php echo $form['input_fecha_control_detencion']->renderError() ?>
          <?php echo $form['input_fecha_control_detencion'] ?>
        </td>
      </tr>
    </tbody>
  </table>
</form>
