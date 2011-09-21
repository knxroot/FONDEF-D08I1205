<?php
/**
 * Information dashboard.
 *
 * Information dashboard organizes and presents the most important information
 * from large amounts of data in a way that it is easy to read and understand
 * for the user. Dashboards summarize information and focus on changes
 * and exceptions in the data.
 *
 * @package    psicologia
 * @subpackage formulario
 * @author Gustavo Lacoste <gustavo@lacosox.org>
 */?>

<?php slot('title') ?>
  <?php  echo sprintf('Formulario a completar') ?>
<?php end_slot(); ?>

	<div class="grid-4-12">
		<label class="form-lbl">Otra pregunta<em class="form-req">*</em></label>
		<input type="text" class="form-txt form-medium" name="test" value=""/>
	</div>

