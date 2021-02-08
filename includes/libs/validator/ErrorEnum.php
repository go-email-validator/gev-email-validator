<?php


namespace validator;


class ErrorEnum {
	const ERROR_INVALID = 'invalid';
	const ERROR_FREE = 'free';
	const ERROR_DISPOSABLE = 'disposable';
	const ERROR_ROLE = 'role';
	const ERROR_UNDELIVERABLE = 'undeliverable';

	protected $__default = null;

	protected $value;

	public function __construct( $value = null ) {
		$ref = new \ReflectionClass( $this );

		if ( ! in_array( $value, $ref->getConstants() ) ) {
			throw new \UnexpectedValueException( "Value '$value' is not part of the enum " . get_called_class() );
		}

		$this->value = $value;
	}

	public static function getConstList( $include_default = false ) {
		$reflected = new \ReflectionClass( new static( null ) );

		$constants = $reflected->getConstants();

		if ( ! $include_default ) {
			unset( $constants['__default'] );

			return $constants;
		}

		return $constants;
	}

	final public function __toString() {
		return strval( $this->value );
	}
}