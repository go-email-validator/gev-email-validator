<?php

/**
 * The file that defines the core plugin class
 *
 * A class definition that includes attributes and functions used across both the
 * public-facing side of the site and the admin area.
 *
 * @link       http://example.com
 *
 * @package    Email_Validator
 */

use OpenAPI\Client\Api\EmailValidationApi;
use OpenAPI\Client\Configuration;
use validator\Validator;
use validator\ValidatorDTO;

/**
 * The core plugin class.
 *
 * This is used to define internationalization, admin-specific hooks, and
 * public-facing site hooks.
 *
 * Also maintains the unique identifier of this plugin as well as the current
 * version of the plugin.
 *
 * @package    Email_Validator
 */
class GEV_Email_Validator {

	const EMAIL_TEST = 'email_test';

	const HOST = 'https://email-validator15.p.rapidapi.com';

	/**
	 * The loader that's responsible for maintaining and registering all hooks that power
	 * the plugin.
	 *
	 * @since    1.0.0
	 * @access   protected
	 * @var      Email_Validator_Loader $loader Maintains and registers all hooks for the plugin.
	 */
	protected $loader;

	/**
	 * The unique identifier of this plugin.
	 *
	 * @since    1.0.0
	 * @access   protected
	 * @var      string $plugin_name The string used to uniquely identify this plugin.
	 */
	protected $plugin_name;

	/**
	 * The current version of the plugin.
	 *
	 * @since    1.0.0
	 * @access   protected
	 * @var      string $version The current version of the plugin.
	 */
	protected $version;

	/**
	 * Helper to work with get_options of plugin.
	 */
	protected $options;

	/** @var GEV_Email_Validator_Validator */
	protected $validator;

	/**
	 * Define the core functionality of the plugin.
	 *
	 * Set the plugin name and the plugin version that can be used throughout the plugin.
	 * Load the dependencies, define the locale, and set the hooks for the admin area and
	 * the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function __construct() {
		if ( defined( 'EMAIL_VALIDATOR_VERSION' ) ) {
			$this->version = GEV_EMAIL_VALIDATOR_VERSION;
		} else {
			$this->version = '1.0.0';
		}
		$this->plugin_name = 'gev-email-validator';

		$this->load_dependencies();

		$this->set_locale();

		$this->options   = new GEV_Email_Validator_Options( $this->plugin_name );
		$this->validator = $this->wp_validator_factory();

		$this->define_admin_hooks();
		$this->define_public_hooks();
	}

	public function email_api_factory( $force_update = false ) {
		static $api;

		if ( $api === null || $force_update ) {
			$config = new Configuration();
			$config->setHost( GEV_Email_Validator::HOST );
			$config->setApiKey(
				'X-RapidAPI-Key',
				$this->options->as_string( GEV_Email_Validator_Options::APIKEY )
			);

			$api = new EmailValidationApi( null, $config );
		}

		return $api;
	}

	public function validator_factory( $force_update = false ) {
		static $validation;

		if ( $validation === null || $force_update ) {
			$config = new Configuration();
			$config->setHost( GEV_Email_Validator::HOST );
			$config->setApiKey(
				'X-RapidApi-Key',
				$this->options->as_string( GEV_Email_Validator_Options::APIKEY )
			);

			$dto                = new ValidatorDTO();
			$dto->invalid       = $this->options->as_bool( GEV_Email_Validator_Options::INVALID );
			$dto->role          = $this->options->as_bool( GEV_Email_Validator_Options::ROLE );
			$dto->disposable    = $this->options->as_bool( GEV_Email_Validator_Options::DISPOSABLE );
			$dto->free          = $this->options->as_bool( GEV_Email_Validator_Options::FREE );
			$dto->undeliverable = $this->options->as_bool( GEV_Email_Validator_Options::UNDELIVERABLE );

			$validation = new Validator( $dto, $this->email_api_factory( $force_update ) );
		}

		return $validation;
	}

	public function wp_validator_factory( $force_update = false ) {
		static $wp_validator;

		if ( $wp_validator === null || $force_update ) {
			$validator = $this->validator_factory( $force_update );

			$wp_validator = new GEV_Email_Validator_Validator( $this->plugin_name, $validator, $this->options );
		}

		return $wp_validator;
	}

	/**
	 * Load the required dependencies for this plugin.
	 *
	 * Include the following files that make up the plugin:
	 *
	 * - Email_Validator_Loader. Orchestrates the hooks of the plugin.
	 * - Email_Validator_i18n. Defines internationalization functionality.
	 * - Email_Validator_Admin. Defines all hooks for the admin area.
	 * - Email_Validator_Public. Defines all hooks for the public side of the site.
	 *
	 * Create an instance of the loader which will be used to register the hooks
	 * with WordPress.
	 *
	 * @since    1.0.0
	 * @access   private
	 */
	private function load_dependencies() {
		/**
		 * Composer integration
		 */
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'vendor/autoload.php';

		/**
		 * Validator integration
		 */
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'includes/libs/validator/ErrorEnum.php';
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'includes/libs/validator/Errors.php';
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'includes/libs/validator/Validator.php';
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'includes/libs/validator/ValidatorDTO.php';

		/**
		 * WP Validator
		 */
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'includes/class-email-validator-validator.php';

		/**
		 * The class responsible for orchestrating the actions and filters of the
		 * core plugin.
		 */
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'includes/class-email-validator-loader.php';

		/**
		 * The class responsible for defining internationalization functionality
		 * of the plugin.
		 */
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'includes/class-email-validator-i18n.php';

		/**
		 * The class responsible to work with options
		 */
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'includes/class-email-validator-options.php';

		/**
		 * The class responsible for defining all actions that occur in the admin area.
		 */
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'admin/class-email-validator-admin.php';

		/**
		 * The class responsible for defining all actions that occur in the public-facing
		 * side of the site.
		 */
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'public/class-email-validator-public.php';

		$this->loader = new Email_Validator_Loader();
	}

	/**
	 * Define the locale for this plugin for internationalization.
	 *
	 * Uses the Email_Validator_i18n class in order to set the domain and to register the hook
	 * with WordPress.
	 *
	 * @since    1.0.0
	 * @access   private
	 */
	private function set_locale() {
		$plugin_i18n = new Email_Validator_i18n();

		$this->loader->add_action( 'plugins_loaded', $plugin_i18n, 'load_plugin_textdomain' );
	}

	/**
	 * Register all of the hooks related to the admin area functionality
	 * of the plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 */
	private function define_admin_hooks() {
		$plugin_admin = new Email_Validator_Admin(
			$this->get_plugin_name(),
			$this->get_version(),
			$this->options,
			$this->validator
		);

		$this->loader->add_action( 'admin_enqueue_scripts', $plugin_admin, 'enqueue_styles' );
		$this->loader->add_action( 'admin_enqueue_scripts', $plugin_admin, 'enqueue_scripts' );

		$this->loader->add_action( 'admin_menu', $plugin_admin, 'create_menu' );
		$this->loader->add_action( 'admin_init', $plugin_admin, 'register_settings' );
	}

	/**
	 * Register all of the hooks related to the public-facing functionality
	 * of the plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 */
	private function define_public_hooks() {
		$plugin_public = new GEV_Email_Validator_Public(
			$this->get_plugin_name(),
			$this->get_version(),
			$this->options,
			$this->validator
		);

		$this->loader->add_action( 'wp_enqueue_scripts', $plugin_public, 'enqueue_styles' );
		$this->loader->add_action( 'wp_enqueue_scripts', $plugin_public, 'enqueue_scripts' );
		$this->define_public_email_filters( $plugin_public );
	}

	/**
	 * @TODO add skip for from email checking in mail sending
	 *
	 * Each filter try to be integrated in plugin without changing them behaviors
	 */
	private function define_public_email_filters( GEV_Email_Validator_Public $plugin_public ) {
		if ( ! $this->validator->is_on() ) {
			return;
		}

		$plugins = [
			GEV_Email_Validator_Options::WPCF7           => [ $this, 'define_wpcf7_filters' ],
			GEV_Email_Validator_Options::FORMIDABLE      => [ $this, 'define_formidable_filters' ],
			GEV_Email_Validator_Options::CALDERA         => [ $this, 'define_caldera_filters' ],
			GEV_Email_Validator_Options::PROFILE_BUILDER => [ $this, 'define_profile_builder_filters' ],
			GEV_Email_Validator_Options::CONTACT_FORM    => [ $this, 'define_contact_form_filters' ],
			GEV_Email_Validator_Options::IS_EMAIL        => [ $this, 'define_is_email_filters' ],
		];

		foreach ( $this->options->as_array( GEV_Email_Validator_Options::INTEGRATION_WITH_PLUGINS ) as $plugin ) {
			if ( isset( $plugins[ $plugin ] ) ) {
				$plugins[ $plugin ]( $plugin_public );
			}
		}
	}

	private function define_wpcf7_filters( GEV_Email_Validator_Public $plugin_public ) {
		$this->preparer_is_email_filters( $plugin_public, 'wpcf7_validate_email' );
		$this->preparer_is_email_filters( $plugin_public, 'wpcf7_validate_email*' );

		$this->loader->add_filter( 'wpcf7_validate_email',
			$plugin_public,
			'wpcf7_filter',
			11,
			2 );
		$this->loader->add_filter( 'wpcf7_validate_email*',
			$plugin_public,
			'wpcf7_filter',
			11,
			2 );
	}

	private function define_formidable_filters( GEV_Email_Validator_Public $plugin_public ) {
		$this->preparer_is_email_filters( $plugin_public, 'frm_posted_field_ids', 0, false );
		$this->preparer_is_email_filters( $plugin_public, 'frm_validate_entry', false );

		$this->loader->add_filter( 'frm_validate_entry',
			$plugin_public,
			'formidable_filter',
			11,
			2 );
	}

	private function define_caldera_filters( GEV_Email_Validator_Public $plugin_public ) {
		$this->preparer_is_email_filters( $plugin_public, 'caldera_forms_validate_field_email' );

		$this->loader->add_filter( 'caldera_forms_validate_field_email',
			$plugin_public,
			'caldera_filter',
			11,
			3 );
	}

	private function define_profile_builder_filters( GEV_Email_Validator_Public $plugin_public ) {
		$this->preparer_is_email_filters( $plugin_public, 'wppb_check_form_field_default-e-mail' );

		$this->loader->add_filter( 'wppb_check_form_field_default-e-mail',
			$plugin_public,
			'profile_builder_filter',
			11,
			4 );
	}

	private function define_contact_form_filters( GEV_Email_Validator_Public $plugin_public ) {
		add_filter( 'init', function ( $arg ) use ( $plugin_public ) {
			if ( $this->is_contact_form_request() ) {
				$this->remove_is_email_filters( $plugin_public );
			}

			return $arg;
		}, 49 );
		add_filter( 'init', function ( $arg ) use ( $plugin_public ) {
			if ( $this->is_contact_form_request() ) {
				$this->define_is_email_filters( $plugin_public );
			}

			return $arg;
		}, 51 );

		$this->loader->add_filter( 'cntctfrm_check_form',
			$plugin_public,
			'contact_form_filter',
			11 );
	}

	private function is_contact_form_request() {
		global $cntctfrm_result;

		return ( isset( $_POST['cntctfrm_contact_action'] ) && isset( $_POST['cntctfrm_language'] ) ) || true === $cntctfrm_result;
	}

	private function define_is_email_filters( GEV_Email_Validator_Public $plugin_public ) {
		add_filter( 'is_email', [ $plugin_public, 'is_email_filter' ] );
	}

	public function remove_is_email_filters( GEV_Email_Validator_Public $plugin_public ) {
		remove_filter( 'is_email', [ $plugin_public, 'is_email_filter' ] );
	}

	private function preparer_is_email_filters( $plugin_public, $tag, $removePriority = 0, $addPriority = 20 ) {
		if ( $removePriority !== false ) {
			add_filter( $tag, function ( $arg ) use ( $plugin_public ) {
				$this->remove_is_email_filters( $plugin_public );

				return $arg;
			}, $removePriority );
		}
		if ( $addPriority !== false ) {
			add_filter( $tag, function ( $arg ) use ( $plugin_public ) {
				$this->define_is_email_filters( $plugin_public );

				return $arg;
			}, $addPriority );
		}
	}

	/**
	 * Run the loader to execute all of the hooks with WordPress.
	 *
	 * @since    1.0.0
	 */
	public function run() {
		$this->loader->run();
	}

	/**
	 * The name of the plugin used to uniquely identify it within the context of
	 * WordPress and to define internationalization functionality.
	 *
	 * @return    string    The name of the plugin.
	 * @since     1.0.0
	 */
	public function get_plugin_name() {
		return $this->plugin_name;
	}

	/**
	 * The reference to the class that orchestrates the hooks with the plugin.
	 *
	 * @return    Email_Validator_Loader    Orchestrates the hooks of the plugin.
	 * @since     1.0.0
	 */
	public function get_loader() {
		return $this->loader;
	}

	/**
	 * Retrieve the version number of the plugin.
	 *
	 * @return    string    The version number of the plugin.
	 * @since     1.0.0
	 */
	public function get_version() {
		return $this->version;
	}

}
