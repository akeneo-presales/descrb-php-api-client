<?php
/**
 * ProductHistoryInDB
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
 * ProductHistoryInDB Class Doc Comment
 *
 * @category Class
 * @package  AkeneoPresales\DescrbAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ProductHistoryInDB implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ProductHistoryInDB';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'name' => 'string',
        'description' => 'string',
        'prompt' => 'string',
        'length' => 'int',
        'language' => 'string',
        'data_language' => 'string',
        'language_style' => 'string',
        'owner_id' => 'string',
        'created_at' => '\DateTime',
        'updated_at' => '\DateTime',
        'completed' => 'bool',
        'comment' => 'string',
        'score' => 'int',
        'reviewed' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => 'uuid',
        'name' => null,
        'description' => null,
        'prompt' => null,
        'length' => null,
        'language' => null,
        'data_language' => null,
        'language_style' => null,
        'owner_id' => 'uuid',
        'created_at' => 'date-time',
        'updated_at' => 'date-time',
        'completed' => null,
        'comment' => null,
        'score' => null,
        'reviewed' => null
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
        'id' => 'id',
        'name' => 'name',
        'description' => 'description',
        'prompt' => 'prompt',
        'length' => 'length',
        'language' => 'language',
        'data_language' => 'data_language',
        'language_style' => 'language_style',
        'owner_id' => 'owner_id',
        'created_at' => 'created_at',
        'updated_at' => 'updated_at',
        'completed' => 'completed',
        'comment' => 'comment',
        'score' => 'score',
        'reviewed' => 'reviewed'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'description' => 'setDescription',
        'prompt' => 'setPrompt',
        'length' => 'setLength',
        'language' => 'setLanguage',
        'data_language' => 'setDataLanguage',
        'language_style' => 'setLanguageStyle',
        'owner_id' => 'setOwnerId',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt',
        'completed' => 'setCompleted',
        'comment' => 'setComment',
        'score' => 'setScore',
        'reviewed' => 'setReviewed'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'description' => 'getDescription',
        'prompt' => 'getPrompt',
        'length' => 'getLength',
        'language' => 'getLanguage',
        'data_language' => 'getDataLanguage',
        'language_style' => 'getLanguageStyle',
        'owner_id' => 'getOwnerId',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt',
        'completed' => 'getCompleted',
        'comment' => 'getComment',
        'score' => 'getScore',
        'reviewed' => 'getReviewed'
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
        $this->container['id'] = $data['id'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
        $this->container['prompt'] = $data['prompt'] ?? null;
        $this->container['length'] = $data['length'] ?? 512;
        $this->container['language'] = $data['language'] ?? 'pl';
        $this->container['data_language'] = $data['data_language'] ?? null;
        $this->container['language_style'] = $data['language_style'] ?? 'Neutral';
        $this->container['owner_id'] = $data['owner_id'] ?? null;
        $this->container['created_at'] = $data['created_at'] ?? null;
        $this->container['updated_at'] = $data['updated_at'] ?? null;
        $this->container['completed'] = $data['completed'] ?? false;
        $this->container['comment'] = $data['comment'] ?? null;
        $this->container['score'] = $data['score'] ?? null;
        $this->container['reviewed'] = $data['reviewed'] ?? false;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 1024)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 1024.";
        }

        if (!is_null($this->container['prompt']) && (mb_strlen($this->container['prompt']) > 512)) {
            $invalidProperties[] = "invalid value for 'prompt', the character length must be smaller than or equal to 512.";
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
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name name
     *
     * @return self
     */
    public function setName($name)
    {
        if (!is_null($name) && (mb_strlen($name) > 1024)) {
            throw new \InvalidArgumentException('invalid length for $name when calling ProductHistoryInDB., must be smaller than or equal to 1024.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description description
     *
     * @return self
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets prompt
     *
     * @return string|null
     */
    public function getPrompt()
    {
        return $this->container['prompt'];
    }

    /**
     * Sets prompt
     *
     * @param string|null $prompt prompt
     *
     * @return self
     */
    public function setPrompt($prompt)
    {
        if (!is_null($prompt) && (mb_strlen($prompt) > 512)) {
            throw new \InvalidArgumentException('invalid length for $prompt when calling ProductHistoryInDB., must be smaller than or equal to 512.');
        }

        $this->container['prompt'] = $prompt;

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
            throw new \InvalidArgumentException('invalid length for $data_language when calling ProductHistoryInDB., must be smaller than or equal to 3.');
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
     * Gets created_at
     *
     * @return \DateTime|null
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param \DateTime|null $created_at created_at
     *
     * @return self
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets updated_at
     *
     * @return \DateTime|null
     */
    public function getUpdatedAt()
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     *
     * @param \DateTime|null $updated_at updated_at
     *
     * @return self
     */
    public function setUpdatedAt($updated_at)
    {
        $this->container['updated_at'] = $updated_at;

        return $this;
    }

    /**
     * Gets completed
     *
     * @return bool|null
     */
    public function getCompleted()
    {
        return $this->container['completed'];
    }

    /**
     * Sets completed
     *
     * @param bool|null $completed completed
     *
     * @return self
     */
    public function setCompleted($completed)
    {
        $this->container['completed'] = $completed;

        return $this;
    }

    /**
     * Gets comment
     *
     * @return string|null
     */
    public function getComment()
    {
        return $this->container['comment'];
    }

    /**
     * Sets comment
     *
     * @param string|null $comment comment
     *
     * @return self
     */
    public function setComment($comment)
    {
        $this->container['comment'] = $comment;

        return $this;
    }

    /**
     * Gets score
     *
     * @return int|null
     */
    public function getScore()
    {
        return $this->container['score'];
    }

    /**
     * Sets score
     *
     * @param int|null $score score
     *
     * @return self
     */
    public function setScore($score)
    {
        $this->container['score'] = $score;

        return $this;
    }

    /**
     * Gets reviewed
     *
     * @return bool|null
     */
    public function getReviewed()
    {
        return $this->container['reviewed'];
    }

    /**
     * Sets reviewed
     *
     * @param bool|null $reviewed reviewed
     *
     * @return self
     */
    public function setReviewed($reviewed)
    {
        $this->container['reviewed'] = $reviewed;

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


