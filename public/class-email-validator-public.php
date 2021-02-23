<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       http://example.com
 *
 * @package    Email_Validator
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    Email_Validator
 */
class GEV_Email_Validator_Public {

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

	/** @var GEV_Email_Validator_Options */
	protected $options;

	/** @var GEV_Email_Validator_Validator */
	protected $validator;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @param string $plugin_name The name of the plugin.
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
	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
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
			plugin_dir_url( __FILE__ ) . 'css/email-validator-public.css',
			array(),
			$this->version,
			'all' );
	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
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
			plugin_dir_url( __FILE__ ) . 'js/email-validator-public.js',
			array( 'jquery' ),
			$this->version,
			false );
	}

	/**
	 * https://wordpress.org/plugins/contact-form-7/
	 * {@see wpcf7_text_validation_filter}
	 *
	 * @param WPCF7_Validation $result
	 * @param $tags
	 *
	 * @return bool|WPCF7_Validation
	 */
	public function wpcf7_filter( $result, $tags ) {
		$tags = new WPCF7_FormTag( $tags );
		$type = $tags->type;

		if ( ! in_array( $type, [ 'email', 'email*' ] ) ) {
			return true;
		}

		$errors = $this->validator->validate( sanitize_email( $_POST[ $tags->name ] ) );

		if ( $errors->isEmpty() ) {
			return $result;
		}

		$result->invalidate( $tags, $this->validator->messages_text( $errors ) );

		return $result;
	}

	/**
	 * https://wordpress.org/plugins/formidable/
	 * {@see FrmEntryValidate::validate}
	 */
	public function formidable_filter( $errors, $values ) {
		foreach ( $values['item_meta'] as $key => $value ) {
			$fieldName = 'field' . $key;

			if ( ! preg_match( "/^\S+@\S+\.\S+$/", $value ) ||
			     $this->is_admin( $value ) ||
			     isset( $errors[ $fieldName ] )
			) {
				continue;
			}

			$validateErrors = $this->validator->validate( $value );

			if ( $validateErrors->isEmpty() ) {
				continue;
			}
			$errors[ $fieldName ] = $this->validator->messages_text( $validateErrors );
			break;
		}

		return $errors;
	}

	/**
	 * https://github.com/CalderaWP/Caldera-Forms
	 */
	public function caldera_filter( $entry, $field, $form ) {
		if ( is_wp_error( $entry ) ) {
			return $entry;
		}

		$errors = $this->validator->validate( $entry );
		if ( $errors->isEmpty() ) {
			return $entry;
		}

		return new WP_Error( 400, $this->validator->messages_text( $errors ) );
	}

	/**
	 * https://wordpress.org/plugins/profile-builder/
	 * {@see wppb_toolbox_check_email_domain}
	 */
	public function profile_builder_filter( $message, $field, $request_data, $form_location ) {
		$errors = $this->validator->validate( $request_data['email'] );

		if ( $errors->isEmpty() ) {
			return null;
		}

		return $this->validator->messages_text( $errors );
	}


	/**
	 * https://github.com/bestwebsoft/contact-form-wordpress-plugin
	 */
	public function contact_form_filter() {
		$email = '';
		if ( isset( $_POST['cntctfrm_contact_email'] ) ) {
			$email = sanitize_email( $_POST['cntctfrm_contact_email'] );
		}
		if ( empty ( $email ) ) {
			return null;
		}
		$email  = $_POST['cntctfrm_contact_email'];
		$errors = $this->validator->validate( $email );
		if ( $errors->isEmpty() ) {
			return null;
		}

		global $cntctfrm_error_message;
		$cntctfrm_error_message['error_email'] = $this->validator->messages_text( $errors );
	}

	/**
	 * {@see is_email}
	 */
	public function is_email_filter( $email ) {
		return $this->is_admin( $email ) || $this->validator->validate( $email )->isEmpty();
	}

	protected function admin_email() {
		static $email;

		if ( ! isset( $email ) ) {
			if ( defined( 'WPMS_PLUGIN_VER' ) ) {
				$wp_mail_options = get_option( 'wp_mail_smtp' );
				$email           = sanitize_email( $wp_mail_options['mail']['from_email'] );
			} else {
				$email = sanitize_email( get_option( 'admin_email' ) );
			}
		}

		return $email;
	}

	protected function is_admin( $email ) {
		return $this->admin_email() == $email;
	}
}
