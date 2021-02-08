<?php
/**
 * PromptEmailVerificationApiResult
 *
 * PHP version 5.6
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Email Validator
 *
 * All timeouts are set in seconds with nanosecond precision. For example, 1.505402 is 1 second, 505 milliseconds and 402 microseconds.
 *
 * The version of the OpenAPI document: 0.0.1
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.1-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * PromptEmailVerificationApiResult Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class PromptEmailVerificationApiResult implements ModelInterface, ArrayAccess, \JsonSerializable
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PromptEmailVerificationApiResult';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'can_connect_smtp' => 'bool',
        'email' => 'string',
        'is_catch_all' => 'bool',
        'is_deliverable' => 'bool',
        'is_disabled' => 'bool',
        'is_disposable' => 'bool',
        'is_inbox_full' => 'bool',
        'is_role_account' => 'bool',
        'mx_records' => '\OpenAPI\Client\Model\PromptEmailVerificationApiMX',
        'syntax_valid' => 'bool',
        'message' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'can_connect_smtp' => null,
        'email' => null,
        'is_catch_all' => null,
        'is_deliverable' => null,
        'is_disabled' => null,
        'is_disposable' => null,
        'is_inbox_full' => null,
        'is_role_account' => null,
        'mx_records' => null,
        'syntax_valid' => null,
        'message' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'can_connect_smtp' => 'can_connect_smtp',
        'email' => 'email',
        'is_catch_all' => 'is_catch_all',
        'is_deliverable' => 'is_deliverable',
        'is_disabled' => 'is_disabled',
        'is_disposable' => 'is_disposable',
        'is_inbox_full' => 'is_inbox_full',
        'is_role_account' => 'is_role_account',
        'mx_records' => 'mx_records',
        'syntax_valid' => 'syntax_valid',
        'message' => 'message'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'can_connect_smtp' => 'setCanConnectSmtp',
        'email' => 'setEmail',
        'is_catch_all' => 'setIsCatchAll',
        'is_deliverable' => 'setIsDeliverable',
        'is_disabled' => 'setIsDisabled',
        'is_disposable' => 'setIsDisposable',
        'is_inbox_full' => 'setIsInboxFull',
        'is_role_account' => 'setIsRoleAccount',
        'mx_records' => 'setMxRecords',
        'syntax_valid' => 'setSyntaxValid',
        'message' => 'setMessage'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'can_connect_smtp' => 'getCanConnectSmtp',
        'email' => 'getEmail',
        'is_catch_all' => 'getIsCatchAll',
        'is_deliverable' => 'getIsDeliverable',
        'is_disabled' => 'getIsDisabled',
        'is_disposable' => 'getIsDisposable',
        'is_inbox_full' => 'getIsInboxFull',
        'is_role_account' => 'getIsRoleAccount',
        'mx_records' => 'getMxRecords',
        'syntax_valid' => 'getSyntaxValid',
        'message' => 'getMessage'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['can_connect_smtp'] = isset($data['can_connect_smtp']) ? $data['can_connect_smtp'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['is_catch_all'] = isset($data['is_catch_all']) ? $data['is_catch_all'] : null;
        $this->container['is_deliverable'] = isset($data['is_deliverable']) ? $data['is_deliverable'] : null;
        $this->container['is_disabled'] = isset($data['is_disabled']) ? $data['is_disabled'] : null;
        $this->container['is_disposable'] = isset($data['is_disposable']) ? $data['is_disposable'] : null;
        $this->container['is_inbox_full'] = isset($data['is_inbox_full']) ? $data['is_inbox_full'] : null;
        $this->container['is_role_account'] = isset($data['is_role_account']) ? $data['is_role_account'] : null;
        $this->container['mx_records'] = isset($data['mx_records']) ? $data['mx_records'] : null;
        $this->container['syntax_valid'] = isset($data['syntax_valid']) ? $data['syntax_valid'] : null;
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets can_connect_smtp
     *
     * @return bool|null
     */
    public function getCanConnectSmtp()
    {
        return $this->container['can_connect_smtp'];
    }

    /**
     * Sets can_connect_smtp
     *
     * @param bool|null $can_connect_smtp can_connect_smtp
     *
     * @return self
     */
    public function setCanConnectSmtp($can_connect_smtp)
    {
        $this->container['can_connect_smtp'] = $can_connect_smtp;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string|null
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string|null $email email
     *
     * @return self
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets is_catch_all
     *
     * @return bool|null
     */
    public function getIsCatchAll()
    {
        return $this->container['is_catch_all'];
    }

    /**
     * Sets is_catch_all
     *
     * @param bool|null $is_catch_all is_catch_all
     *
     * @return self
     */
    public function setIsCatchAll($is_catch_all)
    {
        $this->container['is_catch_all'] = $is_catch_all;

        return $this;
    }

    /**
     * Gets is_deliverable
     *
     * @return bool|null
     */
    public function getIsDeliverable()
    {
        return $this->container['is_deliverable'];
    }

    /**
     * Sets is_deliverable
     *
     * @param bool|null $is_deliverable is_deliverable
     *
     * @return self
     */
    public function setIsDeliverable($is_deliverable)
    {
        $this->container['is_deliverable'] = $is_deliverable;

        return $this;
    }

    /**
     * Gets is_disabled
     *
     * @return bool|null
     */
    public function getIsDisabled()
    {
        return $this->container['is_disabled'];
    }

    /**
     * Sets is_disabled
     *
     * @param bool|null $is_disabled is_disabled
     *
     * @return self
     */
    public function setIsDisabled($is_disabled)
    {
        $this->container['is_disabled'] = $is_disabled;

        return $this;
    }

    /**
     * Gets is_disposable
     *
     * @return bool|null
     */
    public function getIsDisposable()
    {
        return $this->container['is_disposable'];
    }

    /**
     * Sets is_disposable
     *
     * @param bool|null $is_disposable is_disposable
     *
     * @return self
     */
    public function setIsDisposable($is_disposable)
    {
        $this->container['is_disposable'] = $is_disposable;

        return $this;
    }

    /**
     * Gets is_inbox_full
     *
     * @return bool|null
     */
    public function getIsInboxFull()
    {
        return $this->container['is_inbox_full'];
    }

    /**
     * Sets is_inbox_full
     *
     * @param bool|null $is_inbox_full is_inbox_full
     *
     * @return self
     */
    public function setIsInboxFull($is_inbox_full)
    {
        $this->container['is_inbox_full'] = $is_inbox_full;

        return $this;
    }

    /**
     * Gets is_role_account
     *
     * @return bool|null
     */
    public function getIsRoleAccount()
    {
        return $this->container['is_role_account'];
    }

    /**
     * Sets is_role_account
     *
     * @param bool|null $is_role_account is_role_account
     *
     * @return self
     */
    public function setIsRoleAccount($is_role_account)
    {
        $this->container['is_role_account'] = $is_role_account;

        return $this;
    }

    /**
     * Gets mx_records
     *
     * @return \OpenAPI\Client\Model\PromptEmailVerificationApiMX|null
     */
    public function getMxRecords()
    {
        return $this->container['mx_records'];
    }

    /**
     * Sets mx_records
     *
     * @param \OpenAPI\Client\Model\PromptEmailVerificationApiMX|null $mx_records mx_records
     *
     * @return self
     */
    public function setMxRecords($mx_records)
    {
        $this->container['mx_records'] = $mx_records;

        return $this;
    }

    /**
     * Gets syntax_valid
     *
     * @return bool|null
     */
    public function getSyntaxValid()
    {
        return $this->container['syntax_valid'];
    }

    /**
     * Sets syntax_valid
     *
     * @param bool|null $syntax_valid syntax_valid
     *
     * @return self
     */
    public function setSyntaxValid($syntax_valid)
    {
        $this->container['syntax_valid'] = $syntax_valid;

        return $this;
    }

    /**
     * Gets message
     *
     * @return string|null
     */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
     * Sets message
     *
     * @param string|null $message message
     *
     * @return self
     */
    public function setMessage($message)
    {
        $this->container['message'] = $message;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


