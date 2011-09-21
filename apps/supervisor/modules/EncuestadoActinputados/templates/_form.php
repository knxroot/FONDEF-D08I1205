<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<form action="<?php echo url_for('EncuestadoActinputados/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?id='.$form->getObject()->getId() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
<?php if (!$form->getObject()->isNew()): ?>
<input type="hidden" name="sf_method" value="put" />
<?php endif; ?>
  <table>
    <tfoot>
      <tr>
        <td colspan="2">
          <?php echo $form->renderHiddenFields(false) ?>
          &nbsp;<a href="<?php echo url_for('EncuestadoActinputados/index') ?>">Back to list</a>
          <?php if (!$form->getObject()->isNew()): ?>
            &nbsp;<?php echo link_to('Delete', 'EncuestadoActinputados/delete?id='.$form->getObject()->getId(), array('method' => 'delete', 'confirm' => 'Are you sure?')) ?>
          <?php endif; ?>
          <input type="submit" value="Save" />
        </td>
      </tr>
    </tfoot>
    <tbody>
      <?php echo $form->renderGlobalErrors() ?>
      <tr>
        <th><?php echo $form['input_fecha_inicio_investigacion3']->renderLabel() ?></th>
        <td>
          <?php echo $form['input_fecha_inicio_investigacion3']->renderError() ?>
          <?php echo $form['input_fecha_inicio_investigacion3'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['input_plazo_investigacion3']->renderLabel() ?></th>
        <td>
          <?php echo $form['input_plazo_investigacion3']->renderError() ?>
          <?php echo $form['input_plazo_investigacion3'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['select_tribunal3']->renderLabel() ?></th>
        <td>
          <?php echo $form['select_tribunal3']->renderError() ?>
          <?php echo $form['select_tribunal3'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['select_tipo_materia3']->renderLabel() ?></th>
        <td>
          <?php echo $form['select_tipo_materia3']->renderError() ?>
          <?php echo $form['select_tipo_materia3'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['select_causa_delito3']->renderLabel() ?></th>
        <td>
          <?php echo $form['select_causa_delito3']->renderError() ?>
          <?php echo $form['select_causa_delito3'] ?>
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
        <th><?php echo $form['input_ruk_3']->renderLabel() ?></th>
        <td>
          <?php echo $form['input_ruk_3']->renderError() ?>
          <?php echo $form['input_ruk_3'] ?>
        </td>
      </tr>
    </tbody>
  </table>
</form>
