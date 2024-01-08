<?php
/**
 * BrandTemplate
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

namespace AkeneoPresales\DescrbAPI\Model;

use \ArrayAccess;
use \AkeneoPresales\DescrbAPI\ObjectSerializer;

/**
 * BrandTemplate Class Doc Comment
 *
 * @category Class
 * @package  AkeneoPresales\DescrbAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class BrandTemplate implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'BrandTemplate';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => 'string',
        'length' => 'int',
        'language' => 'string',
        'data_language' => 'string',
        'language_style' => 'string',
        'order' => 'string[]',
        'id' => 'string',
        'owner_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'name' => null,
        'length' => null,
        'language' => null,
        'data_language' => null,
        'language_style' => null,
        'order' => null,
        'id' => 'uuid',
        'owner_id' => 'uuid'
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
        'name' => 'name',
        'length' => 'length',
        'language' => 'language',
        'data_language' => 'data_language',
        'language_style' => 'language_style',
        'order' => 'order',
        'id' => 'id',
        'owner_id' => 'owner_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'length' => 'setLength',
        'language' => 'setLanguage',
        'data_language' => 'setDataLanguage',
        'language_style' => 'setLanguageStyle',
        'order' => 'setOrder',
        'id' => 'setId',
        'owner_id' => 'setOwnerId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'length' => 'getLength',
        'language' => 'getLanguage',
        'data_language' => 'getDataLanguage',
        'language_style' => 'getLanguageStyle',
        'order' => 'getOrder',
        'id' => 'getId',
        'owner_id' => 'getOwnerId'
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
        $this->container['name'] = $data['name'] ?? null;
        $this->container['length'] = $data['length'] ?? 512;
        $this->container['language'] = $data['language'] ?? 'pl';
        $this->container['data_language'] = $data['data_language'] ?? null;
        $this->container['language_style'] = $data['language_style'] ?? 'Neutral';
        $this->container['order'] = $data['order'] ?? null;
        $this->container['id'] = $data['id'] ?? null;
        $this->container['owner_id'] = $data['owner_id'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ((mb_strlen($this->container['name']) > 1024)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 1024.";
        }

        if (!is_null($this->container['data_language']) && (mb_strlen($this->container['data_language']) > 3)) {
            $invalidProperties[] = "invalid value for 'data_language', the character length must be smaller than or equal to 3.";
        }

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
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name name
     *
     * @return self
     */
    public function setName($name)
    {
        if ((mb_strlen($name) > 1024)) {
            throw new \InvalidArgumentException('invalid length for $name when calling BrandTemplate., must be smaller than or equal to 1024.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets length
     *
     * @return int|null
     */
    public function getLength()
    {
        return $this->container['length'];
    }

    /**
     * Sets length
     *
     * @param int|null $length Number of Tokens
     *
     * @return self
     */
    public function setLength($length)
    {
        $this->container['length'] = $length;

        return $this;
    }

    /**
     * Gets language
     *
     * @return string|null
     */
    public function getLanguage()
    {
        return $this->container['language'];
    }

    /**
     * Sets language
     *
     * @param string|null $language language
     *
     * @return self
     */
    public function setLanguage($language)
    {
        $this->container['language'] = $language;

        return $this;
    }

    /**
     * Gets data_language
     *
     * @return string|null
     */
    public function getDataLanguage()
    {
        return $this->container['data_language'];
    }

    /**
     * Sets data_language
     *
     * @param string|null $data_language Data Language
     *
     * @return self
     */
    public function setDataLanguage($data_language)
    {
        if (!is_null($data_language) && (mb_strlen($data_language) > 3)) {
            throw new \InvalidArgumentException('invalid length for $data_language when calling BrandTemplate., must be smaller than or equal to 3.');
        }

        $this->container['data_language'] = $data_language;

        return $this;
    }

    /**
     * Gets language_style
     *
     * @return string|null
     */
    public function getLanguageStyle()
    {
        return $this->container['language_style'];
    }

    /**
     * Sets language_style
     *
     * @param string|null $language_style language_style
     *
     * @return self
     */
    public function setLanguageStyle($language_style)
    {
        $this->container['language_style'] = $language_style;

        return $this;
    }

    /**
     * Gets order
     *
     * @return string[]|null
     */
    public function getOrder()
    {
        return $this->container['order'];
    }

    /**
     * Sets order
     *
     * @param string[]|null $order order
     *
     * @return self
     */
    public function setOrder($order)
    {
        $this->container['order'] = $order;

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
     * Gets owner_id
     *
     * @return string|null
     */
    public function getOwnerId()
    {
        return $this->container['owner_id'];
    }

    /**
     * Sets owner_id
     *
     * @param string|null $owner_id owner_id
     *
     * @return self
     */
    public function setOwnerId($owner_id)
    {
        $this->container['owner_id'] = $owner_id;

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


