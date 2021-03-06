<div id="box-account-login" class="box">
  <h3 class="title"><?php echo language::translate('title_login', 'Login'); ?></h3>
  <div class="content">
    <?php echo functions::form_draw_form_begin('login_form', 'post', document::ilink('login')); ?>
    <?php echo functions::form_draw_hidden_field('redirect_url', !empty($_GET['redirect_url']) ? $_GET['redirect_url'] : document::ilink('')); ?>
      <table>
        <tr>
          <td><?php echo language::translate('title_email_address', 'Email Address'); ?> <span class="required">*</span><br />
            <?php echo functions::form_draw_text_field('email', true, 'required="required" style="width: 190px"'); ?></td>
        </tr>
        <tr>
          <td><?php echo language::translate('title_password', 'Password'); ?><br />
          <?php echo functions::form_draw_password_field('password', '', 'style="width: 190px"'); ?></td>
        </tr>
        <tr>
          <td><label><?php echo functions::form_draw_checkbox('remember_me', '1', true); ?> <?php echo language::translate('title_remember_me', 'Remember Me'); ?></label></td>
	    </tr>
        <tr>
          <td><span class="button-set"><?php echo functions::form_draw_button('login', language::translate('title_login', 'Login')); ?><?php echo functions::form_draw_button('lost_password', language::translate('title_lost_password', 'Lost Password'), 'submit', 'style="font-size: 0.8em;"'); ?></span></td>
        </tr>
        <tr>
          <td><a href="<?php echo document::href_ilink('create_account'); ?>"><?php echo language::translate('text_new_customers_click_here', 'New customers click here'); ?></a></td>
        </tr>
    </table>
    <?php echo functions::form_draw_form_end(); ?>
  </div>
</div>