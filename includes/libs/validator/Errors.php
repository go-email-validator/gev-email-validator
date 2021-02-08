<?php


namespace validator;


class Errors {
	/** @var int[]  from constants {@see ErrorEnum} */
	private $values;

	/**
	 * @param int[] $values from constants {@see ErrorEnum}
	 */
	public function __construct( $values = [] ) {
		foreach ( $values as $value ) {
			$this->add( $value );
		}
	}

	public function add( $value ) {
		$this->values[ $value ] = null;

		return $this;
	}

	public function remove( $value ) {
		unset( $this->values[ $value ] );

		return $this;
	}

	public function is( $value ) {
		return array_key_exists( $value, $this->values );
	}

	public function isEmpty() {
		return empty( $this->values );
	}

	public function values() {
		return array_keys( $this->values );
	}
}