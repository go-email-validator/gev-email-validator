/* 
 * Email Validator
 *
 * All timeouts are set in seconds with nanosecond precision. For example, 1.505402 is 1 second, 505 milliseconds and 402 microseconds. 
 *
 * The version of the OpenAPI document: 0.0.1
 * 
 * Generated by: https://github.com/openapitools/openapi-generator.git
 */

using System;
using System.Linq;
using System.IO;
using System.Text;
using System.Text.RegularExpressions;
using System.Collections;
using System.Collections.Generic;
using System.Collections.ObjectModel;
using System.Runtime.Serialization;
using Newtonsoft.Json;
using Newtonsoft.Json.Converters;
using System.ComponentModel.DataAnnotations;
using OpenAPIDateConverter = Org.OpenAPITools.Client.OpenAPIDateConverter;

namespace Org.OpenAPITools.Model
{
    /// <summary>
    /// * CHECK_IF_EMAIL_EXIST, CIEE - [check-if-email-exists format](https://github.com/amaurymartiny/check-if-email-exists#%EF%B8%8F-json-output). * MAILBOXVALIDATOR, MAIL_BOX_VALIDATOR, MBV - [mailboxvalidator.com format](https://www.mailboxvalidator.com/api-single-validation). * PROMPT_EMAIL_VERIFICATION_API, PEVA - [Email Verification api format](https://promptapi.com/marketplace/description/email_verification-api) from [promptapi](https://promptapi.com). 
    /// </summary>
    /// <value>* CHECK_IF_EMAIL_EXIST, CIEE - [check-if-email-exists format](https://github.com/amaurymartiny/check-if-email-exists#%EF%B8%8F-json-output). * MAILBOXVALIDATOR, MAIL_BOX_VALIDATOR, MBV - [mailboxvalidator.com format](https://www.mailboxvalidator.com/api-single-validation). * PROMPT_EMAIL_VERIFICATION_API, PEVA - [Email Verification api format](https://promptapi.com/marketplace/description/email_verification-api) from [promptapi](https://promptapi.com). </value>
    
    [JsonConverter(typeof(StringEnumConverter))]
    
    public enum ResultType
    {
        /// <summary>
        /// Enum CHECKIFEMAILEXIST for value: CHECK_IF_EMAIL_EXIST
        /// </summary>
        [EnumMember(Value = "CHECK_IF_EMAIL_EXIST")]
        CHECKIFEMAILEXIST = 1,

        /// <summary>
        /// Enum CIEE for value: CIEE
        /// </summary>
        [EnumMember(Value = "CIEE")]
        CIEE = 2,

        /// <summary>
        /// Enum MAILBOXVALIDATOR for value: MAILBOXVALIDATOR
        /// </summary>
        [EnumMember(Value = "MAILBOXVALIDATOR")]
        MAILBOXVALIDATOR = 3,

        /// <summary>
        /// Enum MAILBOXVALIDATOR for value: MAIL_BOX_VALIDATOR
        /// </summary>
        [EnumMember(Value = "MAIL_BOX_VALIDATOR")]
        MAILBOXVALIDATOR = 4,

        /// <summary>
        /// Enum MBV for value: MBV
        /// </summary>
        [EnumMember(Value = "MBV")]
        MBV = 5,

        /// <summary>
        /// Enum PROMPTEMAILVERIFICATIONAPI for value: PROMPT_EMAIL_VERIFICATION_API
        /// </summary>
        [EnumMember(Value = "PROMPT_EMAIL_VERIFICATION_API")]
        PROMPTEMAILVERIFICATIONAPI = 6,

        /// <summary>
        /// Enum PEVA for value: PEVA
        /// </summary>
        [EnumMember(Value = "PEVA")]
        PEVA = 7

    }

}
