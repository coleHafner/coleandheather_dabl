<div class="padder rounded_corners login_form_container bg_color_light_tan border_dark_grey">
    <form id="auth_login_form">

	<div class="center header">
	    Login to manage the site's content.
	</div>

	<div id="result_login_attempt" class="result"></div>

	<div class="center bottom_spacer">
	    <input id="auth_auto_login" type="text" class="input text_input text_long font_normal input_clear" name="username" value="Username or Email" clear_if="Username or Email" />
	</div>

	<div class="center bottom_spacer">
	    <input id="auth_auto_login" type="password" class="input text_input text_long font_normal input_clear" name="password" value="passwd" clear_if="passwd" />
	</div>

	<div class="center">
	    <?php load_view('widgets/button', $params['login-button']); ?>
	</div>

    </form>
</div>

<div style="position:relative;margin:25px auto auto auto;width:362px;" class="center">
    <a href="<?php echo site_url('/') ?>"> &lt; &lt; Go To Site</a>
</div>
