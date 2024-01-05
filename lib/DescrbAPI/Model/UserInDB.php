<?php
/**
 * UserInDB
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  AkeneoPresales\DescrbAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * {descrb}
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: 0.1.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.3.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace AkeneoPresales\DescrbAPI\Client\Model;

use \ArrayAccess;
use \AkeneoPresales\DescrbAPI\Client\ObjectSerializer;

/**
 * UserInDB Class Doc Comment
 *
 * @category Class
 * @package  AkeneoPresales\DescrbAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class UserInDB implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'UserInDB';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'email' => 'string',
        'email_validated' => 'bool',
        'is_active' => 'bool',
        'is_superuser' => 'bool',
        'full_name' => 'string',
        'remaining_api_limit' => 'int',
        'original_api_limit' => 'int',
        'user_type' => 'string',
        'terms_agreement' => 'bool',
        'marketing_agreement' => 'bool',
        'profile_picture' => 'string',
        'count_descriptions' => 'int',
        'user_language' => 'string',
        'id' => 'string',
        'hashed_password' => 'string',
        'totp_secret' => 'string',
        'totp_counter' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'email' => 'email',
        'email_validated' => null,
        'is_active' => null,
        'is_superuser' => null,
        'full_name' => null,
        'remaining_api_limit' => null,
        'original_api_limit' => null,
        'user_type' => null,
        'terms_agreement' => null,
        'marketing_agreement' => null,
        'profile_picture' => null,
        'count_descriptions' => null,
        'user_language' => null,
        'id' => 'uuid',
        'hashed_password' => null,
        'totp_secret' => null,
        'totp_counter' => null
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
        'email' => 'email',
        'email_validated' => 'email_validated',
        'is_active' => 'is_active',
        'is_superuser' => 'is_superuser',
        'full_name' => 'full_name',
        'remaining_api_limit' => 'remaining_api_limit',
        'original_api_limit' => 'original_api_limit',
        'user_type' => 'user_type',
        'terms_agreement' => 'terms_agreement',
        'marketing_agreement' => 'marketing_agreement',
        'profile_picture' => 'profile_picture',
        'count_descriptions' => 'count_descriptions',
        'user_language' => 'user_language',
        'id' => 'id',
        'hashed_password' => 'hashed_password',
        'totp_secret' => 'totp_secret',
        'totp_counter' => 'totp_counter'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'email' => 'setEmail',
        'email_validated' => 'setEmailValidated',
        'is_active' => 'setIsActive',
        'is_superuser' => 'setIsSuperuser',
        'full_name' => 'setFullName',
        'remaining_api_limit' => 'setRemainingApiLimit',
        'original_api_limit' => 'setOriginalApiLimit',
        'user_type' => 'setUserType',
        'terms_agreement' => 'setTermsAgreement',
        'marketing_agreement' => 'setMarketingAgreement',
        'profile_picture' => 'setProfilePicture',
        'count_descriptions' => 'setCountDescriptions',
        'user_language' => 'setUserLanguage',
        'id' => 'setId',
        'hashed_password' => 'setHashedPassword',
        'totp_secret' => 'setTotpSecret',
        'totp_counter' => 'setTotpCounter'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'email' => 'getEmail',
        'email_validated' => 'getEmailValidated',
        'is_active' => 'getIsActive',
        'is_superuser' => 'getIsSuperuser',
        'full_name' => 'getFullName',
        'remaining_api_limit' => 'getRemainingApiLimit',
        'original_api_limit' => 'getOriginalApiLimit',
        'user_type' => 'getUserType',
        'terms_agreement' => 'getTermsAgreement',
        'marketing_agreement' => 'getMarketingAgreement',
        'profile_picture' => 'getProfilePicture',
        'count_descriptions' => 'getCountDescriptions',
        'user_language' => 'getUserLanguage',
        'id' => 'getId',
        'hashed_password' => 'getHashedPassword',
        'totp_secret' => 'getTotpSecret',
        'totp_counter' => 'getTotpCounter'
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
        $this->container['email'] = $data['email'] ?? null;
        $this->container['email_validated'] = $data['email_validated'] ?? false;
        $this->container['is_active'] = $data['is_active'] ?? true;
        $this->container['is_superuser'] = $data['is_superuser'] ?? false;
        $this->container['full_name'] = $data['full_name'] ?? null;
        $this->container['remaining_api_limit'] = $data['remaining_api_limit'] ?? 0;
        $this->container['original_api_limit'] = $data['original_api_limit'] ?? 0;
        $this->container['user_type'] = $data['user_type'] ?? 'freemium';
        $this->container['terms_agreement'] = $data['terms_agreement'] ?? false;
        $this->container['marketing_agreement'] = $data['marketing_agreement'] ?? false;
        $this->container['profile_picture'] = $data['profile_picture'] ?? null;
        $this->container['count_descriptions'] = $data['count_descriptions'] ?? 0;
        $this->container['user_language'] = $data['user_language'] ?? 'en';
        $this->container['id'] = $data['id'] ?? null;
        $this->container['hashed_password'] = $data['hashed_password'] ?? null;
        $this->container['totp_secret'] = $data['totp_secret'] ?? null;
        $this->container['totp_counter'] = $data['totp_counter'] ?? null;
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
     * Gets email_validated
     *
     * @return bool|null
     */
    public function getEmailValidated()
    {
        return $this->container['email_validated'];
    }

    /**
     * Sets email_validated
     *
     * @param bool|null $email_validated email_validated
     *
     * @return self
     */
    public function setEmailValidated($email_validated)
    {
        $this->container['email_validated'] = $email_validated;

        return $this;
    }

    /**
     * Gets is_active
     *
     * @return bool|null
     */
    public function getIsActive()
    {
        return $this->container['is_active'];
    }

    /**
     * Sets is_active
     *
     * @param bool|null $is_active is_active
     *
     * @return self
     */
    public function setIsActive($is_active)
    {
        $this->container['is_active'] = $is_active;

        return $this;
    }

    /**
     * Gets is_superuser
     *
     * @return bool|null
     */
    public function getIsSuperuser()
    {
        return $this->container['is_superuser'];
    }

    /**
     * Sets is_superuser
     *
     * @param bool|null $is_superuser is_superuser
     *
     * @return self
     */
    public function setIsSuperuser($is_superuser)
    {
        $this->container['is_superuser'] = $is_superuser;

        return $this;
    }

    /**
     * Gets full_name
     *
     * @return string|null
     */
    public function getFullName()
    {
        return $this->container['full_name'];
    }

    /**
     * Sets full_name
     *
     * @param string|null $full_name full_name
     *
     * @return self
     */
    public function setFullName($full_name)
    {
        $this->container['full_name'] = $full_name;

        return $this;
    }

    /**
     * Gets remaining_api_limit
     *
     * @return int|null
     */
    public function getRemainingApiLimit()
    {
        return $this->container['remaining_api_limit'];
    }

    /**
     * Sets remaining_api_limit
     *
     * @param int|null $remaining_api_limit remaining_api_limit
     *
     * @return self
     */
    public function setRemainingApiLimit($remaining_api_limit)
    {
        $this->container['remaining_api_limit'] = $remaining_api_limit;

        return $this;
    }

    /**
     * Gets original_api_limit
     *
     * @return int|null
     */
    public function getOriginalApiLimit()
    {
        return $this->container['original_api_limit'];
    }

    /**
     * Sets original_api_limit
     *
     * @param int|null $original_api_limit original_api_limit
     *
     * @return self
     */
    public function setOriginalApiLimit($original_api_limit)
    {
        $this->container['original_api_limit'] = $original_api_limit;

        return $this;
    }

    /**
     * Gets user_type
     *
     * @return string|null
     */
    public function getUserType()
    {
        return $this->container['user_type'];
    }

    /**
     * Sets user_type
     *
     * @param string|null $user_type user_type
     *
     * @return self
     */
    public function setUserType($user_type)
    {
        $this->container['user_type'] = $user_type;

        return $this;
    }

    /**
     * Gets terms_agreement
     *
     * @return bool|null
     */
    public function getTermsAgreement()
    {
        return $this->container['terms_agreement'];
    }

    /**
     * Sets terms_agreement
     *
     * @param bool|null $terms_agreement terms_agreement
     *
     * @return self
     */
    public function setTermsAgreement($terms_agreement)
    {
        $this->container['terms_agreement'] = $terms_agreement;

        return $this;
    }

    /**
     * Gets marketing_agreement
     *
     * @return bool|null
     */
    public function getMarketingAgreement()
    {
        return $this->container['marketing_agreement'];
    }

    /**
     * Sets marketing_agreement
     *
     * @param bool|null $marketing_agreement marketing_agreement
     *
     * @return self
     */
    public function setMarketingAgreement($marketing_agreement)
    {
        $this->container['marketing_agreement'] = $marketing_agreement;

        return $this;
    }

    /**
     * Gets profile_picture
     *
     * @return string|null
     */
    public function getProfilePicture()
    {
        return $this->container['profile_picture'];
    }

    /**
     * Sets profile_picture
     *
     * @param string|null $profile_picture profile_picture
     *
     * @return self
     */
    public function setProfilePicture($profile_picture)
    {
        $this->container['profile_picture'] = $profile_picture;

        return $this;
    }

    /**
     * Gets count_descriptions
     *
     * @return int|null
     */
    public function getCountDescriptions()
    {
        return $this->container['count_descriptions'];
    }

    /**
     * Sets count_descriptions
     *
     * @param int|null $count_descriptions count_descriptions
     *
     * @return self
     */
    public function setCountDescriptions($count_descriptions)
    {
        $this->container['count_descriptions'] = $count_descriptions;

        return $this;
    }

    /**
     * Gets user_language
     *
     * @return string|null
     */
    public function getUserLanguage()
    {
        return $this->container['user_language'];
    }

    /**
     * Sets user_language
     *
     * @param string|null $user_language user_language
     *
     * @return self
     */
    public function setUserLanguage($user_language)
    {
        $this->container['user_language'] = $user_language;

        return $this;
    }

    /**
     * Gets id
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets hashed_password
     *
     * @return string|null
     */
    public function getHashedPassword()
    {
        return $this->container['hashed_password'];
    }

    /**
     * Sets hashed_password
     *
     * @param string|null $hashed_password hashed_password
     *
     * @return self
     */
    public function setHashedPassword($hashed_password)
    {
        $this->container['hashed_password'] = $hashed_password;

        return $this;
    }

    /**
     * Gets totp_secret
     *
     * @return string|null
     */
    public function getTotpSecret()
    {
        return $this->container['totp_secret'];
    }

    /**
     * Sets totp_secret
     *
     * @param string|null $totp_secret totp_secret
     *
     * @return self
     */
    public function setTotpSecret($totp_secret)
    {
        $this->container['totp_secret'] = $totp_secret;

        return $this;
    }

    /**
     * Gets totp_counter
     *
     * @return int|null
     */
    public function getTotpCounter()
    {
        return $this->container['totp_counter'];
    }

    /**
     * Sets totp_counter
     *
     * @param int|null $totp_counter totp_counter
     *
     * @return self
     */
    public function setTotpCounter($totp_counter)
    {
        $this->container['totp_counter'] = $totp_counter;

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
        return $this->container[$offset] ?? null;
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


