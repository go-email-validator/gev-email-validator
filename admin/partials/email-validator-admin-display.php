<?php
/**
 * @var $this Email_Validator_Admin
 */

$emailTestId = $this->options->id( GEV_Email_Validator::EMAIL_TEST );
?>
<div class="wrap">
    <form action="options.php" method="post">
		<?php
		settings_fields( 'gev-email-validator' );
		do_settings_sections( 'gev-email-validator' );
		?>
        <input type="submit" name="submit" class="button button-primary"
               value="<?= __( 'Save', $this->plugin_name ); ?>"/>
    </form>
	<?php
	if ( ! empty( $this->options->as_string( GEV_Email_Validator_Options::APIKEY ) ) ): ?>
        <h2 class="title"><?= __( 'Email Validation Demo', $this->plugin_name ); ?></h2>
        <p><?= __( 'You can use this form to see how Email Validator validates email addresses.',
				$this->plugin_name ); ?></p>
        <label for="sample_email">
            Email:
            <input class="regular_text code" type="text" id="<?= $emailTestId ?>" size="40"/>
        </label>
        <input type="button" value="<?= __( 'Validate Email', $this->plugin_name ) ?>"
               onclick="gevAjaxCheck({'action': '<?= $this->ajaxEmailTestUrl ?>','<?= $emailTestId ?>': jQuery('#<?= $emailTestId ?>').val()}, jQuery('#email_output'), jQuery(this), '<?= __( 'Checking...',
			       $this->plugin_name ) ?>')"/>
        <div id="email_output"></div>
	<?php
	endif; ?>
</div>