<?php if ($form->hasErrors()): ?>
<div class="flash_error ui-widget">
				<div style="padding: 0pt 0.7em;" class="ui-state-error ui-corner-all">
					<p><span style="float: left; margin-right: 0.3em;" class="ui-icon ui-icon-alert"></span>
					<strong>Por favor, vuelve a introducir tu contraseña:</strong> El nombre de usuario o contraseña no son válidos. Por favor, asegúrate de que el bloqueo de mayúsculas no está activado e inténtalo de nuevo.</p>
				</div>
</div>
<?php endif; ?>

<div class="grid-4-12"></div>
  <div class="grid-4-12 ui-widget ui-widget-content ui-corner-all" style="font-size: 1em;">
    <div class="ui-widget-header ui-corner-all"> Entrar en el Sistema </div>
      <form action="<?php echo url_for('@sf_guard_signin') ?>"  method="post" >
        <div style="margin-left:20%;">
                <label for="signin_username" class="form-lbl" style="margin-bottom:0em;">Usuario <em class="form-req">*</em></label>
                <div class="form-txt"><?php echo $form['username'] ?></div>
        </div>
         <div class="field-clear" style="margin-left:20%;">
                <label for="signin_password" class="form-lbl" style="margin-bottom:0em;">Clave <em class="form-req">*</em></label>
               <div class="form-txt"><?php echo $form['password'] ?></div>

        </div>

        <div class="field-clear" style="margin-left:20%;">
                <ul class="form-list-chk">
                    <li><?php echo $form['remember']->render() ?>
                      <label for="signin_remember">
                        Recordarme
                      </label>
                    </li>
                </ul>
        </div>

        <div class="field-clear" style="margin-left:20%;">
            <button type="submit" class="form-button">Iniciar Sesión</button>
            <?php echo $form['_csrf_token'] ?>
        </div>
      </form>
      <br>
      <div class="field-clear" style="text-align: center;">
          <a href="<?php echo url_for('@sf_guard_password'); ?>"><?php echo ('¿Has olvidado tu contraseña?') ?></a>
      </div>
    
    </div>
<div class="grid-4-12"></div>


