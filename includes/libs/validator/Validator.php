<?php

namespace validator;


use OpenAPI\Client\Api\EmailValidationApi;
use OpenAPI\Client\Model\EmailRequest;
use OpenAPI\Client\Model\ResultType;

class Validator {
	const FALSE = 'False';
	const TRUE = 'True';

	/**     * @var ValidatorDTO */
	private $config;

	/** @var EmailValidationApi */
	private $sdk;

	public function __construct( ValidatorDTO $dto, EmailValidationApi $sdk ) {
		$this->config = $dto;
		$this->sdk    = $sdk;
	}

	public function validate( $email, ValidatorDTO $dto = null ) {
		if ( empty( $dto ) ) {
			$dto = $this->config;
		}

		$result = $this->sdk->emailValidationSingleValidationPost( new EmailRequest( [
			'email'       => $email,
			'result_type' => ResultType::MAIL_BOX_VALIDATOR,
		] ) );

		$mvbResult = $result->getMailboxvalidator();

		$errors = new Errors();
		if ( $dto->invalid && ! $mvbResult->getErrorMessage() && $mvbResult->getStatus() === self::FALSE ) {
			$errors->add( ErrorEnum::ERROR_INVALID );
		}
		if ( $dto->disposable && $mvbResult->getIsDisposable() === self::TRUE ) {
			$errors->add( ErrorEnum::ERROR_DISPOSABLE );
		}
		if ( $dto->free && $mvbResult->getIsFree() === self::TRUE ) {
			$errors->add( ErrorEnum::ERROR_FREE );
		}
		if ( $dto->role && $mvbResult->getIsRole() === self::TRUE ) {
			$errors->add( ErrorEnum::ERROR_ROLE );
		}
		if ( $dto->undeliverable && $mvbResult->getIsVerified() === self::FALSE ) {
			$errors->add( ErrorEnum::ERROR_UNDELIVERABLE );
		}

		return $errors;
	}
}