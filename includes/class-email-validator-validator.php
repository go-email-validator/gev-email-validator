<?php

use validator\ErrorEnum;
use validator\Errors;
use validator\Validator;

class GEV_Email_Validator_Validator {
	protected $plugin_name;

	/** @var Validator */
	protected $validator;

	/** @var GEV_Email_Validator_Options */
	protected $options;

	public $errorsMatching = [];
	public $errorPrefix;
	public $errorSuffix;

	public function __construct( $plugin_name, Validator $validator, GEV_Email_Validator_Options $options ) {
		$this->plugin_name = $plugin_name;

		$this->validator = $validator;
		$this->options   = $options;

		$this->errorPrefix = __( 'Please enter a ', $this->plugin_name );
		$this->errorSuffix = __( ' email address.', $this->plugin_name );

		$this->errorsMatching = [
			ErrorEnum::ERROR_INVALID       => __( 'valid', $this->plugin_name ),
			ErrorEnum::ERROR_FREE          => __( 'non-free', $this->plugin_name ),
			ErrorEnum::ERROR_DISPOSABLE    => __( 'non-disposable', $this->plugin_name ),
			ErrorEnum::ERROR_ROLE          => __( 'non-role', $this->plugin_name ),
			ErrorEnum::ERROR_UNDELIVERABLE => __( 'existing', $this->plugin_name ),
		];
	}

	public function getValidator() {
		return $this->validator;
	}

	public function validate( $email ) {
		$email = sanitize_email( $email );

		if ( empty( $email ) || $this->wp_validate( $email ) ) {
			return new Errors();
		}

		$errors = wp_cache_get( $email, $this->plugin_name );

		if ( empty( $errors ) ) {
			$errors = $this->getValidator()->validate( $email );
			wp_cache_set( $email, $errors, $this->plugin_name );
		}

		return $errors;
	}

	protected function wp_validate( $email ) {
		if ( ! $this->is_on() ) {
			return true;
		}

		if ( ! $this->options->as_bool( GEV_Email_Validator_Options::SKIP_IN_ADMIN ) && is_admin() ) {
			return true;
		}

		$patterns = $this->options->string_as_array( GEV_Email_Validator_Options::SKIP_PAGES );
		if ( ! empty( $patterns ) ) {
			$pattern = '/(' . str_replace( '/', '\\', implode( ')|(', $patterns ) ) . ')/';
			if ( preg_match( $pattern, $_SERVER['REQUEST_URI'] ) === 1 ) {
				return true;
			}
		}

		$patterns = $this->options->string_as_array( GEV_Email_Validator_Options::SKIP_EMAILS );
		if ( ! empty( $patterns ) ) {
			$pattern = '/(' . implode( ')|(', $patterns ) . ')/';
			if ( preg_match( $pattern, $email ) === 1 ) {
				return true;
			}
		}

		return false;
	}

	public function is_on() {
		return ! empty( $this->options->as_string( GEV_Email_Validator_Options::APIKEY ) );
	}

	public function get_success_message() {
		return __( 'Address is valid.', $this->plugin_name );
	}

	public function get_error_message( $error ) {
		if ( ! array_key_exists( $error, $this->errorsMatching ) ) {
			return false;
		}

		return $this->errorsMatching[ $error ];
	}

	public function messages( Errors $errors ) {
		if ( $errors->isEmpty() ) {
			return [ $this->get_success_message() ];
		}

		$messages = [];
		foreach ( $errors->values() as $error ) {
			$message = $this->get_error_message( $error );
			if ( $message !== false ) {
				$messages[] = $message;
			}
		}

		return $messages;
	}

	public function messages_text( Errors $errors ) {
		$messages = $this->messages( $errors );

		if ( $errors->isEmpty() ) {
			return $messages[0];
		}

		return $this->errorPrefix . implode( ', ', $messages ) . $this->errorSuffix;
	}

	public function messages_html( Errors $errors ) {
		$messages = $this->messages( $errors );

		if ( $errors->isEmpty() ) {
			return '<span style="color: green">' . $messages[0] . '</span>';
		}

		return '<span class="error-message">' . $this->messages_text( $errors ) . '</span>';
	}
}
