<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       http://example.com
 *
 * @package    Email_Validator
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Email_Validator
 */
class Email_Validator_Admin {
	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string $plugin_name The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string $version The current version of this plugin.
	 */
	private $version;

	/**
	 * Helper to work with get_options of plugin.
	 *
	 * @var GEV_Email_Validator_Options
	 */
	protected $options;

	/**  @var GEV_Email_Validator_Validator */
	protected $validator;

	protected $ajaxVerifyUrl;
	protected $ajaxEmailTestUrl;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @param string $plugin_name The name of this plugin.
	 * @param string $version The version of this plugin.
	 * @param GEV_Email_Validator_Options $options
	 * @param GEV_Email_Validator_Validator $validator
	 *
	 * @since    1.0.0
	 */
	public function __construct(
		$plugin_name,
		$version,
		GEV_Email_Validator_Options $options,
		GEV_Email_Validator_Validator $validator
	) {
		$this->plugin_name = $plugin_name;
		$this->version     = $version;
		$this->options     = $options;
		$this->validator   = $validator;

		$this->ajaxVerifyUrl    = $this->plugin_name . '_api_verify';
		$this->ajaxEmailTestUrl = $this->plugin_name . '_email_test';
	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {
		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Email_Validator_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Email_Validator_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name,
			plugin_dir_url( __FILE__ ) . 'css/email-validator-admin.css',
			array(),
			$this->version,
			'all' );
	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {
		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Email_Validator_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Email_Validator_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name,
			plugin_dir_url( __FILE__ ) . 'js/email-validator-admin.js',
			array( 'jquery' ),
			$this->version,
			false );
	}

	public function register_settings() {
		add_action( 'wp_ajax_' . $this->ajaxVerifyUrl, [ $this, 'api_verify_ajax_callback' ] );
		add_action( 'wp_ajax_' . $this->ajaxEmailTestUrl, [ $this, 'email_test_ajax_callback' ] );

		register_setting(
			$this->plugin_name,
			$this->plugin_name,
			[
				'type'              => 'array',
				'sanitize_callback' => function ( $input ) {
					$options = $this->options->getAll();

					$options[ GEV_Email_Validator_Options::APIKEY ]  = isset( $input[ GEV_Email_Validator_Options::APIKEY ] ) ? sanitize_text_field( $input[ GEV_Email_Validator_Options::APIKEY ] ) : '';
					$options[ GEV_Email_Validator_Options::INVALID ] = ! empty( $input[ GEV_Email_Validator_Options::INVALID ] );

					$options[ GEV_Email_Validator_Options::ROLE ]       = ! empty( $input[ GEV_Email_Validator_Options::ROLE ] );
					$options[ GEV_Email_Validator_Options::FREE ]       = ! empty( $input[ GEV_Email_Validator_Options::FREE ] );
					$options[ GEV_Email_Validator_Options::DISPOSABLE ] = ! empty( $input[ GEV_Email_Validator_Options::DISPOSABLE ] );

					$options[ GEV_Email_Validator_Options::UNDELIVERABLE ] = ! empty( $input[ GEV_Email_Validator_Options::UNDELIVERABLE ] );

					$options[ GEV_Email_Validator_Options::SKIP_IN_ADMIN ] = ! empty( $input[ GEV_Email_Validator_Options::SKIP_IN_ADMIN ] );

					$options[ GEV_Email_Validator_Options::SKIP_PAGES ]  = isset( $input[ GEV_Email_Validator_Options::SKIP_PAGES ] ) ? sanitize_textarea_field( $input[ GEV_Email_Validator_Options::SKIP_PAGES ] ) : '';
					$options[ GEV_Email_Validator_Options::SKIP_EMAILS ] = isset( $input[ GEV_Email_Validator_Options::SKIP_EMAILS ] ) ? sanitize_textarea_field( $input[ GEV_Email_Validator_Options::SKIP_EMAILS ] ) : '';

					$options[ GEV_Email_Validator_Options::INTEGRATION_WITH_PLUGINS ] = [];
					if ( isset( $input[ GEV_Email_Validator_Options::INTEGRATION_WITH_PLUGINS ] ) ) {
						$options[ GEV_Email_Validator_Options::INTEGRATION_WITH_PLUGINS ] = array_intersect(
							$this->options->getListPlugins(),
							$input[ GEV_Email_Validator_Options::INTEGRATION_WITH_PLUGINS ]
						);
					}

					return $options;
				},
			]
		);

		$sectionId = $this->plugin_name . '_section';
		add_settings_section( $sectionId,
			__( 'Email Validator Settings', $this->plugin_name ),
			function () {
			},
			$this->plugin_name );

		add_settings_field( $this->options->id( GEV_Email_Validator_Options::APIKEY ),
			__( 'API Key', $this->plugin_name ),
			function () {
				$apiKeyId       = $this->options->id( GEV_Email_Validator_Options::APIKEY );
				$apiKeyName     = $this->options->name( GEV_Email_Validator_Options::APIKEY );
				$apiKeyOutputId = $this->options->id( GEV_Email_Validator_Options::APIKEY ) . '_verify';
				?>
                <input size="55" type="text" required
                       id="<?php echo $apiKeyId ?>"
                       name="<?php echo $apiKeyName ?>"
                       value="<?php echo $this->options->as_string( GEV_Email_Validator_Options::APIKEY ) ?>"/>
                <input type="button" value="<?php echo __( 'Verify API Key', $this->plugin_name ) ?>"
                       onclick="gevAjaxCheck({'action': '<?php echo $this->ajaxVerifyUrl ?>','<?php echo $apiKeyId ?>': jQuery('#<?php echo $apiKeyId ?>').val()}, jQuery('#<?php echo $apiKeyOutputId ?>'), jQuery(this), '<?php echo __( 'Checking...',
					       $this->plugin_name ) ?>')"/>
                <br/>
                <div id="<?php echo $apiKeyOutputId ?>"></div>
                <p class="description"><?php echo __( 'You can find the key in <a href="https://rapidapi.com/developer/security/" target="_blank">Rapid Api</a>, <a href="https://docs.rapidapi.com/docs/keys" target="_blank">Documentation</a>.', $this->plugin_name ) ?></p>
				<?php
			},
			$this->plugin_name,
			$sectionId,
			[ 'label_for' => $this->options->id( GEV_Email_Validator_Options::APIKEY ) ] );
		add_settings_field( $this->options->id( GEV_Email_Validator_Options::INVALID ),
			__( 'Block Invalid Email', $this->plugin_name ),
			$this->generateRadioInput( GEV_Email_Validator_Options::INVALID ),
			$this->plugin_name,
			$sectionId,
			[ 'label_for' => $this->options->id( GEV_Email_Validator_Options::INVALID ) ] );
		add_settings_field( $this->options->id( GEV_Email_Validator_Options::ROLE ),
			__( 'Block Role-Based Email', $this->plugin_name ),
			$this->generateRadioInput( GEV_Email_Validator_Options::ROLE ),
			$this->plugin_name,
			$sectionId,
			[ 'label_for' => $this->options->id( GEV_Email_Validator_Options::ROLE ) ] );
		add_settings_field( $this->options->id( GEV_Email_Validator_Options::FREE ),
			__( 'Block Free Email', $this->plugin_name ),
			$this->generateRadioInput( GEV_Email_Validator_Options::FREE ),
			$this->plugin_name,
			$sectionId,
			[ 'label_for' => $this->options->id( GEV_Email_Validator_Options::FREE ) ] );
		add_settings_field( $this->options->id( GEV_Email_Validator_Options::DISPOSABLE ),
			__( 'Block Disposable Email', $this->plugin_name ),
			$this->generateRadioInput( GEV_Email_Validator_Options::DISPOSABLE ),
			$this->plugin_name,
			$sectionId,
			[ 'label_for' => $this->options->id( GEV_Email_Validator_Options::DISPOSABLE ) ] );
		add_settings_field( $this->options->id( GEV_Email_Validator_Options::UNDELIVERABLE ),
			__( 'Block UnDeliverable Email', $this->plugin_name ),
			$this->generateRadioInput( GEV_Email_Validator_Options::UNDELIVERABLE ),
			$this->plugin_name,
			$sectionId,
			[ 'label_for' => $this->options->id( GEV_Email_Validator_Options::UNDELIVERABLE ) ] );
		add_settings_field( $this->options->id( GEV_Email_Validator_Options::SKIP_IN_ADMIN ),
			__( 'Use in WP-Admin', $this->plugin_name ),
			$this->generateRadioInput( GEV_Email_Validator_Options::SKIP_IN_ADMIN ),
			$this->plugin_name,
			$sectionId,
			[ 'label_for' => $this->options->id( GEV_Email_Validator_Options::SKIP_IN_ADMIN ) ] );
		add_settings_field( $this->options->id( GEV_Email_Validator_Options::SKIP_PAGES ),
			__( 'Pages to Skip', $this->plugin_name ),
			$this->generateTextarea(
				GEV_Email_Validator_Options::SKIP_PAGES,
				[
					'description'   => __( 'One line one page as regular expression', $this->plugin_name ),
					'default_value' => GEV_Email_Validator_Options::SKIP_PAGES_DEFAULT,
				]
			),
			$this->plugin_name,
			$sectionId,
			[ 'label_for' => $this->options->id( GEV_Email_Validator_Options::SKIP_PAGES ) ] );
		add_settings_field( $this->options->id( GEV_Email_Validator_Options::SKIP_EMAILS ),
			__( 'Emails to Skip', $this->plugin_name ),
			$this->generateTextarea(
				GEV_Email_Validator_Options::SKIP_EMAILS,
				[
					'description' => __( 'One line one email as regular expression', $this->plugin_name ),
				]
			),
			$this->plugin_name,
			$sectionId,
			[ 'label_for' => $this->options->id( GEV_Email_Validator_Options::SKIP_EMAILS ) ] );
		add_settings_field( $this->options->id( GEV_Email_Validator_Options::INTEGRATION_WITH_PLUGINS ),
			__( 'Integration with', $this->plugin_name ),
			$this->generateSelect(
				GEV_Email_Validator_Options::INTEGRATION_WITH_PLUGINS,
				$this->options->getListPlugins(),
				[ 'multiple' => true ]
			),
			$this->plugin_name,
			$sectionId,
			[ 'label_for' => $this->options->id( GEV_Email_Validator_Options::INTEGRATION_WITH_PLUGINS ) ] );
	}

	public function api_verify_ajax_callback() {
		$apiKeyId = $this->options->id( GEV_Email_Validator_Options::APIKEY );
		$apiKey   = sanitize_text_field( $_POST[ $apiKeyId ] );

		if ( empty( $apiKey ) ) {
			?><span class="error-message">
			<?php echo __( 'Please enter a API Key and click \"Save\".', $this->plugin_name ) ?>
            </span><?php
			die();
		}

		$headers  = [
			'sslverify' => false,
			'timeout'   => 30,
			'headers'   => array(
				'X-RapidApi-Key' => $apiKey,
			)
		];
		$response = wp_remote_request( GEV_Email_Validator::HOST . '/me', $headers );

		if ( is_wp_error( $response ) ) {
			echo '<span class="error-message">' . $response->get_error_message() . '</span>';
			die();
		}

		$data = json_decode( $response['body'], true );
		if ( isset( $data['message'] ) ) {
			if ( $data['message'] == 'Endpoint/me does not exist' ) {
				?><span style="color: green">
				<?php echo __( 'API Key is valid. Click \"Save\" button below.', $this->plugin_name ) ?>
                </span><?php
				die();
			}
			echo '<span class="error-message">' . $data['message'] . '</span><>';
		} else {
			echo '<span class="error-message">' . $response['body'] . '</span>';
		}

		die();
	}

	public function email_test_ajax_callback() {
		$emailId = $this->options->id( GEV_Email_Validator::EMAIL_TEST );
		$email   = sanitize_email( $_POST[ $emailId ] );

		$errors = $this->validator->validate( $email );
		echo $this->validator->messages_html( $errors );
		die();
	}

	public function create_menu() {
		$settingsMenuName = 'GEV Email Validator';

		add_options_page(
			$settingsMenuName,
			$settingsMenuName,
			'manage_options',
			$this->plugin_name,
			function () {
				include plugin_dir_path( dirname( __FILE__ ) ) . 'admin/partials/email-validator-admin-display.php';
			}
		);

		add_filter( 'plugin_action_links_' . $this->plugin_name . '/' . $this->plugin_name . '.php', function ( $links ) {
			array_unshift( $links, '<a href="' . admin_url( 'options-general.php?page=' . $this->plugin_name ) . '">' . __( 'Settings', $this->plugin_name ) . '</a>' );

			return $links;
		} );
	}

	protected function generateRadioInput( $nameOpt ) {
		return function () use ( $nameOpt ) {
			$name  = $this->options->name( $nameOpt );
			$value = $this->options->as_bool( $nameOpt );
			?>
            <fieldset id="<?php echo $this->options->id( $nameOpt ) ?>">
                <label>
                    <input type="radio" name="<?php echo $name ?>>" value="1" <?php echo $value ? 'checked' : '' ?>>
					<?php echo __( 'On', $this->plugin_name ) ?>
                </label>
                <label>
                    <input type="radio" name="<?php echo $name ?>>" value="" <?php echo ! $value ? 'checked' : '' ?>>
					<?php echo __( 'Off', $this->plugin_name ) ?>
                </label>
            </fieldset>
			<?php
		};
	}

	protected $defaultGenerateTextarea = [
		'description'   => null,
		'default_value' => null,
		'rows'          => 3,
	];

	protected function generateTextarea(
		$nameOpt,
		$options = []
	) {
		$options = array_merge( $options, $this->defaultGenerateTextarea );

		return function () use ( $nameOpt, $options ) {
			$id    = $this->options->id( $nameOpt );
			$name  = $this->options->name( $nameOpt );
			$value = $this->options->as_string( $nameOpt );
			?>
            <textarea class="large-text" rows="<?php echo $options['rows'] ?>" name="<?php echo $name ?>>"
                      id="<?php echo $id ?>"><?php echo $value ?></textarea>
			<?php
			if ( isset( $options['description'] ) ) { ?>
                <p class="description"><?php echo $options['description'] ?></p>
				<?php
			}
			if ( isset( $options['default_value'] ) ) { ?>
                <input type="button" value="<?php echo __( 'Reset default value', $this->plugin_name ) ?>"
                       onclick='document.querySelector("#<?php echo $id ?>").value = <?php echo json_encode( $options['default_value'] ) ?>'>
				<?php
			}
		};
	}

	protected function generateSelect( $nameOpt, $options, $htmlOptions = [] ) {
		return function () use ( $nameOpt, $options, $htmlOptions ) {
			$id       = $this->options->id( $nameOpt );
			$name     = $this->options->name( $nameOpt );
			$valueSet = array_fill_keys( $this->options->as_array( $nameOpt ), null )
			?>
            <select name="<?php echo $name ?>[]" id="<?php echo $id ?>"
				<?php
				foreach ( $htmlOptions as $attr_name => $attr_value ) {
					echo $attr_name . '="' . esc_attr( $attr_value ) . '"';
				} ?>>
				<?php
				foreach ( $options as $option ) { ?>
                    <option value="<?php echo $option ?>" <?php echo array_key_exists( $option, $valueSet ) ? 'selected' : '' ?>>
						<?php echo $option ?>
                    </option>
					<?php
				} ?>
            </select> <?php
		};
	}
}
