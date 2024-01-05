<?php
/**
 * ProductDescription
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
 * ProductDescription Class Doc Comment
 *
 * @category Class
 * @package  AkeneoPresales\DescrbAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ProductDescription implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ProductDescription';

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
        'reviewed' => 'bool',
        'brand_name' => 'string',
        'keywords' => 'string',
        'seotags' => 'bool',
        'labels' => 'mixed',
        'logos' => 'mixed',
        'captions' => 'string',
        'photo_url' => 'string',
        'google_product_id' => 'string',
        'product_sku' => 'string',
        'product_mpn' => 'string',
        'product_code' => 'string',
        'search_data' => 'mixed',
        'google_product_description' => 'mixed',
        'status' => 'string',
        'describe_colors' => 'bool',
        'describe_materials' => 'bool',
        'brand_description_bool' => 'bool',
        'product_history_description_bool' => 'bool',
        'technologies_bool' => 'bool',
        'seen_bool' => 'bool'
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
        'reviewed' => null,
        'brand_name' => null,
        'keywords' => null,
        'seotags' => null,
        'labels' => null,
        'logos' => null,
        'captions' => null,
        'photo_url' => 'uri',
        'google_product_id' => null,
        'product_sku' => null,
        'product_mpn' => null,
        'product_code' => null,
        'search_data' => null,
        'google_product_description' => null,
        'status' => null,
        'describe_colors' => null,
        'describe_materials' => null,
        'brand_description_bool' => null,
        'product_history_description_bool' => null,
        'technologies_bool' => null,
        'seen_bool' => null
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
        'reviewed' => 'reviewed',
        'brand_name' => 'brand_name',
        'keywords' => 'keywords',
        'seotags' => 'seotags',
        'labels' => 'labels',
        'logos' => 'logos',
        'captions' => 'captions',
        'photo_url' => 'photo_url',
        'google_product_id' => 'google_product_id',
        'product_sku' => 'product_sku',
        'product_mpn' => 'product_mpn',
        'product_code' => 'product_code',
        'search_data' => 'search_data',
        'google_product_description' => 'google_product_description',
        'status' => 'status',
        'describe_colors' => 'describe_colors',
        'describe_materials' => 'describe_materials',
        'brand_description_bool' => 'brand_description_bool',
        'product_history_description_bool' => 'product_history_description_bool',
        'technologies_bool' => 'technologies_bool',
        'seen_bool' => 'seen_bool'
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
        'reviewed' => 'setReviewed',
        'brand_name' => 'setBrandName',
        'keywords' => 'setKeywords',
        'seotags' => 'setSeotags',
        'labels' => 'setLabels',
        'logos' => 'setLogos',
        'captions' => 'setCaptions',
        'photo_url' => 'setPhotoUrl',
        'google_product_id' => 'setGoogleProductId',
        'product_sku' => 'setProductSku',
        'product_mpn' => 'setProductMpn',
        'product_code' => 'setProductCode',
        'search_data' => 'setSearchData',
        'google_product_description' => 'setGoogleProductDescription',
        'status' => 'setStatus',
        'describe_colors' => 'setDescribeColors',
        'describe_materials' => 'setDescribeMaterials',
        'brand_description_bool' => 'setBrandDescriptionBool',
        'product_history_description_bool' => 'setProductHistoryDescriptionBool',
        'technologies_bool' => 'setTechnologiesBool',
        'seen_bool' => 'setSeenBool'
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
        'reviewed' => 'getReviewed',
        'brand_name' => 'getBrandName',
        'keywords' => 'getKeywords',
        'seotags' => 'getSeotags',
        'labels' => 'getLabels',
        'logos' => 'getLogos',
        'captions' => 'getCaptions',
        'photo_url' => 'getPhotoUrl',
        'google_product_id' => 'getGoogleProductId',
        'product_sku' => 'getProductSku',
        'product_mpn' => 'getProductMpn',
        'product_code' => 'getProductCode',
        'search_data' => 'getSearchData',
        'google_product_description' => 'getGoogleProductDescription',
        'status' => 'getStatus',
        'describe_colors' => 'getDescribeColors',
        'describe_materials' => 'getDescribeMaterials',
        'brand_description_bool' => 'getBrandDescriptionBool',
        'product_history_description_bool' => 'getProductHistoryDescriptionBool',
        'technologies_bool' => 'getTechnologiesBool',
        'seen_bool' => 'getSeenBool'
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
        $this->container['brand_name'] = $data['brand_name'] ?? null;
        $this->container['keywords'] = $data['keywords'] ?? null;
        $this->container['seotags'] = $data['seotags'] ?? false;
        $this->container['labels'] = $data['labels'] ?? null;
        $this->container['logos'] = $data['logos'] ?? null;
        $this->container['captions'] = $data['captions'] ?? null;
        $this->container['photo_url'] = $data['photo_url'] ?? null;
        $this->container['google_product_id'] = $data['google_product_id'] ?? null;
        $this->container['product_sku'] = $data['product_sku'] ?? null;
        $this->container['product_mpn'] = $data['product_mpn'] ?? null;
        $this->container['product_code'] = $data['product_code'] ?? null;
        $this->container['search_data'] = $data['search_data'] ?? null;
        $this->container['google_product_description'] = $data['google_product_description'] ?? null;
        $this->container['status'] = $data['status'] ?? 'success';
        $this->container['describe_colors'] = $data['describe_colors'] ?? false;
        $this->container['describe_materials'] = $data['describe_materials'] ?? false;
        $this->container['brand_description_bool'] = $data['brand_description_bool'] ?? null;
        $this->container['product_history_description_bool'] = $data['product_history_description_bool'] ?? null;
        $this->container['technologies_bool'] = $data['technologies_bool'] ?? null;
        $this->container['seen_bool'] = $data['seen_bool'] ?? null;
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

        if (!is_null($this->container['brand_name']) && (mb_strlen($this->container['brand_name']) > 1024)) {
            $invalidProperties[] = "invalid value for 'brand_name', the character length must be smaller than or equal to 1024.";
        }

        if (!is_null($this->container['photo_url']) && (mb_strlen($this->container['photo_url']) > 2083)) {
            $invalidProperties[] = "invalid value for 'photo_url', the character length must be smaller than or equal to 2083.";
        }

        if (!is_null($this->container['photo_url']) && (mb_strlen($this->container['photo_url']) < 1)) {
            $invalidProperties[] = "invalid value for 'photo_url', the character length must be bigger than or equal to 1.";
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
            throw new \InvalidArgumentException('invalid length for $name when calling ProductDescription., must be smaller than or equal to 1024.');
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
            throw new \InvalidArgumentException('invalid length for $prompt when calling ProductDescription., must be smaller than or equal to 512.');
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
            throw new \InvalidArgumentException('invalid length for $data_language when calling ProductDescription., must be smaller than or equal to 3.');
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
     * Gets brand_name
     *
     * @return string|null
     */
    public function getBrandName()
    {
        return $this->container['brand_name'];
    }

    /**
     * Sets brand_name
     *
     * @param string|null $brand_name brand_name
     *
     * @return self
     */
    public function setBrandName($brand_name)
    {
        if (!is_null($brand_name) && (mb_strlen($brand_name) > 1024)) {
            throw new \InvalidArgumentException('invalid length for $brand_name when calling ProductDescription., must be smaller than or equal to 1024.');
        }

        $this->container['brand_name'] = $brand_name;

        return $this;
    }

    /**
     * Gets keywords
     *
     * @return string|null
     */
    public function getKeywords()
    {
        return $this->container['keywords'];
    }

    /**
     * Sets keywords
     *
     * @param string|null $keywords Important Keywords to include
     *
     * @return self
     */
    public function setKeywords($keywords)
    {
        $this->container['keywords'] = $keywords;

        return $this;
    }

    /**
     * Gets seotags
     *
     * @return bool|null
     */
    public function getSeotags()
    {
        return $this->container['seotags'];
    }

    /**
     * Sets seotags
     *
     * @param bool|null $seotags Add SEO Tags
     *
     * @return self
     */
    public function setSeotags($seotags)
    {
        $this->container['seotags'] = $seotags;

        return $this;
    }

    /**
     * Gets labels
     *
     * @return mixed|null
     */
    public function getLabels()
    {
        return $this->container['labels'];
    }

    /**
     * Sets labels
     *
     * @param mixed|null $labels Labels to include
     *
     * @return self
     */
    public function setLabels($labels)
    {
        $this->container['labels'] = $labels;

        return $this;
    }

    /**
     * Gets logos
     *
     * @return mixed|null
     */
    public function getLogos()
    {
        return $this->container['logos'];
    }

    /**
     * Sets logos
     *
     * @param mixed|null $logos Logos to include
     *
     * @return self
     */
    public function setLogos($logos)
    {
        $this->container['logos'] = $logos;

        return $this;
    }

    /**
     * Gets captions
     *
     * @return string|null
     */
    public function getCaptions()
    {
        return $this->container['captions'];
    }

    /**
     * Sets captions
     *
     * @param string|null $captions Image Captions
     *
     * @return self
     */
    public function setCaptions($captions)
    {
        $this->container['captions'] = $captions;

        return $this;
    }

    /**
     * Gets photo_url
     *
     * @return string|null
     */
    public function getPhotoUrl()
    {
        return $this->container['photo_url'];
    }

    /**
     * Sets photo_url
     *
     * @param string|null $photo_url Photo URL
     *
     * @return self
     */
    public function setPhotoUrl($photo_url)
    {
        if (!is_null($photo_url) && (mb_strlen($photo_url) > 2083)) {
            throw new \InvalidArgumentException('invalid length for $photo_url when calling ProductDescription., must be smaller than or equal to 2083.');
        }
        if (!is_null($photo_url) && (mb_strlen($photo_url) < 1)) {
            throw new \InvalidArgumentException('invalid length for $photo_url when calling ProductDescription., must be bigger than or equal to 1.');
        }

        $this->container['photo_url'] = $photo_url;

        return $this;
    }

    /**
     * Gets google_product_id
     *
     * @return string|null
     */
    public function getGoogleProductId()
    {
        return $this->container['google_product_id'];
    }

    /**
     * Sets google_product_id
     *
     * @param string|null $google_product_id Google Product Identification
     *
     * @return self
     */
    public function setGoogleProductId($google_product_id)
    {
        $this->container['google_product_id'] = $google_product_id;

        return $this;
    }

    /**
     * Gets product_sku
     *
     * @return string|null
     */
    public function getProductSku()
    {
        return $this->container['product_sku'];
    }

    /**
     * Sets product_sku
     *
     * @param string|null $product_sku Stock Keeping Unit
     *
     * @return self
     */
    public function setProductSku($product_sku)
    {
        $this->container['product_sku'] = $product_sku;

        return $this;
    }

    /**
     * Gets product_mpn
     *
     * @return string|null
     */
    public function getProductMpn()
    {
        return $this->container['product_mpn'];
    }

    /**
     * Sets product_mpn
     *
     * @param string|null $product_mpn Manufacturer Part Number
     *
     * @return self
     */
    public function setProductMpn($product_mpn)
    {
        $this->container['product_mpn'] = $product_mpn;

        return $this;
    }

    /**
     * Gets product_code
     *
     * @return string|null
     */
    public function getProductCode()
    {
        return $this->container['product_code'];
    }

    /**
     * Sets product_code
     *
     * @param string|null $product_code Manufacturer Code or Style Number
     *
     * @return self
     */
    public function setProductCode($product_code)
    {
        $this->container['product_code'] = $product_code;

        return $this;
    }

    /**
     * Gets search_data
     *
     * @return mixed|null
     */
    public function getSearchData()
    {
        return $this->container['search_data'];
    }

    /**
     * Sets search_data
     *
     * @param mixed|null $search_data Search Data
     *
     * @return self
     */
    public function setSearchData($search_data)
    {
        $this->container['search_data'] = $search_data;

        return $this;
    }

    /**
     * Gets google_product_description
     *
     * @return mixed|null
     */
    public function getGoogleProductDescription()
    {
        return $this->container['google_product_description'];
    }

    /**
     * Sets google_product_description
     *
     * @param mixed|null $google_product_description Google Product Description
     *
     * @return self
     */
    public function setGoogleProductDescription($google_product_description)
    {
        $this->container['google_product_description'] = $google_product_description;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string|null $status status
     *
     * @return self
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets describe_colors
     *
     * @return bool|null
     */
    public function getDescribeColors()
    {
        return $this->container['describe_colors'];
    }

    /**
     * Sets describe_colors
     *
     * @param bool|null $describe_colors describe_colors
     *
     * @return self
     */
    public function setDescribeColors($describe_colors)
    {
        $this->container['describe_colors'] = $describe_colors;

        return $this;
    }

    /**
     * Gets describe_materials
     *
     * @return bool|null
     */
    public function getDescribeMaterials()
    {
        return $this->container['describe_materials'];
    }

    /**
     * Sets describe_materials
     *
     * @param bool|null $describe_materials describe_materials
     *
     * @return self
     */
    public function setDescribeMaterials($describe_materials)
    {
        $this->container['describe_materials'] = $describe_materials;

        return $this;
    }

    /**
     * Gets brand_description_bool
     *
     * @return bool|null
     */
    public function getBrandDescriptionBool()
    {
        return $this->container['brand_description_bool'];
    }

    /**
     * Sets brand_description_bool
     *
     * @param bool|null $brand_description_bool brand_description_bool
     *
     * @return self
     */
    public function setBrandDescriptionBool($brand_description_bool)
    {
        $this->container['brand_description_bool'] = $brand_description_bool;

        return $this;
    }

    /**
     * Gets product_history_description_bool
     *
     * @return bool|null
     */
    public function getProductHistoryDescriptionBool()
    {
        return $this->container['product_history_description_bool'];
    }

    /**
     * Sets product_history_description_bool
     *
     * @param bool|null $product_history_description_bool product_history_description_bool
     *
     * @return self
     */
    public function setProductHistoryDescriptionBool($product_history_description_bool)
    {
        $this->container['product_history_description_bool'] = $product_history_description_bool;

        return $this;
    }

    /**
     * Gets technologies_bool
     *
     * @return bool|null
     */
    public function getTechnologiesBool()
    {
        return $this->container['technologies_bool'];
    }

    /**
     * Sets technologies_bool
     *
     * @param bool|null $technologies_bool technologies_bool
     *
     * @return self
     */
    public function setTechnologiesBool($technologies_bool)
    {
        $this->container['technologies_bool'] = $technologies_bool;

        return $this;
    }

    /**
     * Gets seen_bool
     *
     * @return bool|null
     */
    public function getSeenBool()
    {
        return $this->container['seen_bool'];
    }

    /**
     * Sets seen_bool
     *
     * @param bool|null $seen_bool seen_bool
     *
     * @return self
     */
    public function setSeenBool($seen_bool)
    {
        $this->container['seen_bool'] = $seen_bool;

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


