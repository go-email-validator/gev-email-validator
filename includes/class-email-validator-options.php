<?php

class GEV_Email_Validator_Options {
	const APIKEY = 'gev_apikey_option';
	const INVALID = 'gev_invalid_option';
	const ROLE = 'gev_role_option';
	const FREE = 'gev_free_option';
	const DISPOSABLE = 'gev_disposable_option';
	const UNDELIVERABLE = 'gev_undeliverable_option';

	const SKIP_IN_ADMIN = 'gev_in_skip_admin_option';
	const SKIP_PAGES = 'gev_skip_pages_option';
	const SKIP_EMAILS = 'gev_skip_emails_option';
	const INTEGRATION_WITH_PLUGINS = 'gev_integration_with_plugins_option';

	const SKIP_PAGES_DEFAULT = <<<PAGES
/wp-login.php.*
/wp-cron.php.*
PAGES;

	const WPCF7 = 'contact-form-7/wp-contact-form-7.php';
	const FORMIDABLE = 'formidable/formidable.php';
	const CALDERA = 'caldera-forms/caldera-core.php';
	const PROFILE_BUILDER = 'profile-builder/index.php';
	const CONTACT_FORM = 'contact-form-plugin/contact_form.php';
	const IS_EMAIL = 'is_email';

	protected $integration_with_plugins_default;

	/** @var string */
	protected $plugin_name;

	/** @var array */
	protected $default_values;

	public function __construct( $plugin_name ) {
		$this->plugin_name = $plugin_name;

		$this->integration_with_plugins_default = [
			static::WPCF7,
			static::FORMIDABLE,
			static::CALDERA,
			static::PROFILE_BUILDER,
			static::CONTACT_FORM,
			static::IS_EMAIL,
		];

		$this->default_values = [
			static::APIKEY                   => '',
			static::INVALID                  => true,
			static::ROLE                     => false,
			static::FREE                     => false,
			static::DISPOSABLE               => false,
			static::UNDELIVERABLE            => true,
			static::SKIP_IN_ADMIN            => true,
			static::SKIP_PAGES               => static::SKIP_PAGES_DEFAULT,
			static::SKIP_EMAILS              => '',
			static::INTEGRATION_WITH_PLUGINS => $this->getListPlugins(),
		];
	}

	public function id( $name ) {
		return $this->plugin_name . '_' . $name;
	}

	public function name( $name ) {
		return $this->plugin_name . '[' . $name . ']';
	}

	public function getAll( $default = null ) {
		$options = get_option( $this->plugin_name );

		if ( empty( $options ) ) {
			if ( empty( $default ) ) {
				$default = $this->default_values;
			}
			$options = $default;
		}

		return array_merge( $this->default_values, $options );
	}

	public function getListPlugins() {
		return $this->integration_with_plugins_default;
	}

	public function get( $name, $default = null ) {
		$options = $this->getAll( $this->default_values );

		return isset( $options[ $name ] ) ? $options[ $name ] : $default;
	}

	public function as_string( $name, $default = '' ) {
		return strval( $this->get( $name, $default ) );
	}

	public function as_bool( $name, $default = false ) {
		return boolval( $this->get( $name, $default ) );
	}

	public function string_as_array( $name, $default = [] ) {
		$str = $this->as_string( $name );

		if ( empty( $str ) ) {
			return $default;
		}

		return preg_split( "/\r\n|\n|\r/", $str );
	}

	public function as_array( $name, $default = [] ) {
		$value = $this->get( $name );

		if ( empty( $value ) ) {
			return $default;
		}

		return $value;
	}
}