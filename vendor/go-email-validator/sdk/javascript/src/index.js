/**
 * Email Validator
 * All timeouts are set in seconds with nanosecond precision. For example, 1.505402 is 1 second, 505 milliseconds and 402 microseconds. 
 *
 * The version of the OpenAPI document: 0.0.1
 * 
 *
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 *
 */


import ApiClient from './ApiClient';
import CheckIfEmailExistMX from './model/CheckIfEmailExistMX';
import CheckIfEmailExistMisc from './model/CheckIfEmailExistMisc';
import CheckIfEmailExistResult from './model/CheckIfEmailExistResult';
import CheckIfEmailExistSMTP from './model/CheckIfEmailExistSMTP';
import CheckIfEmailExistSyntax from './model/CheckIfEmailExistSyntax';
import EmailRequest from './model/EmailRequest';
import EmailRequestSmtp from './model/EmailRequestSmtp';
import EmailResponse from './model/EmailResponse';
import MailboxvalidatorResult from './model/MailboxvalidatorResult';
import PromptEmailVerificationApiMX from './model/PromptEmailVerificationApiMX';
import PromptEmailVerificationApiResult from './model/PromptEmailVerificationApiResult';
import ResultType from './model/ResultType';
import UnexpectedError from './model/UnexpectedError';
import EmailValidationApi from './api/EmailValidationApi';


/**
* All_timeouts_are_set_in_seconds_with_nanosecond_precision__For_example_1_505402_is_1_second_505_milliseconds_and_402_microseconds_.<br>
* The <code>index</code> module provides access to constructors for all the classes which comprise the public API.
* <p>
* An AMD (recommended!) or CommonJS application will generally do something equivalent to the following:
* <pre>
* var EmailValidator = require('index'); // See note below*.
* var xxxSvc = new EmailValidator.XxxApi(); // Allocate the API class we're going to use.
* var yyyModel = new EmailValidator.Yyy(); // Construct a model instance.
* yyyModel.someProperty = 'someValue';
* ...
* var zzz = xxxSvc.doSomething(yyyModel); // Invoke the service.
* ...
* </pre>
* <em>*NOTE: For a top-level AMD script, use require(['index'], function(){...})
* and put the application logic within the callback function.</em>
* </p>
* <p>
* A non-AMD browser application (discouraged) might do something like this:
* <pre>
* var xxxSvc = new EmailValidator.XxxApi(); // Allocate the API class we're going to use.
* var yyy = new EmailValidator.Yyy(); // Construct a model instance.
* yyyModel.someProperty = 'someValue';
* ...
* var zzz = xxxSvc.doSomething(yyyModel); // Invoke the service.
* ...
* </pre>
* </p>
* @module index
* @version 0.0.1
*/
export {
    /**
     * The ApiClient constructor.
     * @property {module:ApiClient}
     */
    ApiClient,

    /**
     * The CheckIfEmailExistMX model constructor.
     * @property {module:model/CheckIfEmailExistMX}
     */
    CheckIfEmailExistMX,

    /**
     * The CheckIfEmailExistMisc model constructor.
     * @property {module:model/CheckIfEmailExistMisc}
     */
    CheckIfEmailExistMisc,

    /**
     * The CheckIfEmailExistResult model constructor.
     * @property {module:model/CheckIfEmailExistResult}
     */
    CheckIfEmailExistResult,

    /**
     * The CheckIfEmailExistSMTP model constructor.
     * @property {module:model/CheckIfEmailExistSMTP}
     */
    CheckIfEmailExistSMTP,

    /**
     * The CheckIfEmailExistSyntax model constructor.
     * @property {module:model/CheckIfEmailExistSyntax}
     */
    CheckIfEmailExistSyntax,

    /**
     * The EmailRequest model constructor.
     * @property {module:model/EmailRequest}
     */
    EmailRequest,

    /**
     * The EmailRequestSmtp model constructor.
     * @property {module:model/EmailRequestSmtp}
     */
    EmailRequestSmtp,

    /**
     * The EmailResponse model constructor.
     * @property {module:model/EmailResponse}
     */
    EmailResponse,

    /**
     * The MailboxvalidatorResult model constructor.
     * @property {module:model/MailboxvalidatorResult}
     */
    MailboxvalidatorResult,

    /**
     * The PromptEmailVerificationApiMX model constructor.
     * @property {module:model/PromptEmailVerificationApiMX}
     */
    PromptEmailVerificationApiMX,

    /**
     * The PromptEmailVerificationApiResult model constructor.
     * @property {module:model/PromptEmailVerificationApiResult}
     */
    PromptEmailVerificationApiResult,

    /**
     * The ResultType model constructor.
     * @property {module:model/ResultType}
     */
    ResultType,

    /**
     * The UnexpectedError model constructor.
     * @property {module:model/UnexpectedError}
     */
    UnexpectedError,

    /**
    * The EmailValidationApi service constructor.
    * @property {module:api/EmailValidationApi}
    */
    EmailValidationApi
};
