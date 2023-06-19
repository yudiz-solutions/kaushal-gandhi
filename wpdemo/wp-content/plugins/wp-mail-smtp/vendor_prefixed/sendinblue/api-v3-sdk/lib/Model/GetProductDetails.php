<?php

/**
 * GetProductDetails
 *
 * PHP version 5
 *
 * @category Class
 * @package  SendinBlue\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
/**
 * SendinBlue API
 *
 * SendinBlue provide a RESTFul API that can be used with any languages. With this API, you will be able to :   - Manage your campaigns and get the statistics   - Manage your contacts   - Send transactional Emails and SMS   - and much more...  You can download our wrappers at https://github.com/orgs/sendinblue  **Possible responses**   | Code | Message |   | :-------------: | ------------- |   | 200  | OK. Successful Request  |   | 201  | OK. Successful Creation |   | 202  | OK. Request accepted |   | 204  | OK. Successful Update/Deletion  |   | 400  | Error. Bad Request  |   | 401  | Error. Authentication Needed  |   | 402  | Error. Not enough credit, plan upgrade needed  |   | 403  | Error. Permission denied  |   | 404  | Error. Object does not exist |   | 405  | Error. Method not allowed  |   | 406  | Error. Not Acceptable  |
 *
 * OpenAPI spec version: 3.0.0
 * Contact: contact@sendinblue.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.29
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */
namespace WPMailSMTP\Vendor\SendinBlue\Client\Model;

use ArrayAccess;
use WPMailSMTP\Vendor\SendinBlue\Client\ObjectSerializer;
/**
 * GetProductDetails Class Doc Comment
 *
 * @category Class
 * @package  SendinBlue\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GetProductDetails implements \WPMailSMTP\Vendor\SendinBlue\Client\Model\ModelInterface, \ArrayAccess
{
    const DISCRIMINATOR = null;
    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'getProductDetails';
    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = ['id' => 'string', 'name' => 'string', 'createdAt' => 'string', 'modifiedAt' => 'string', 'url' => 'string', 'imageUrl' => 'string', 'sku' => 'string', 'price' => 'float', 'categories' => 'string[]', 'parentId' => 'string', 's3Original' => 'string', 's3ThumbAnalytics' => 'string', 'metaInfo' => 'object', 's3ThumbEditor' => 'string', 'isDeleted' => 'bool'];
    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = ['id' => 'string', 'name' => 'string', 'createdAt' => null, 'modifiedAt' => null, 'url' => 'string', 'imageUrl' => 'string', 'sku' => 'string', 'price' => 'float', 'categories' => null, 'parentId' => 'string', 's3Original' => 'string', 's3ThumbAnalytics' => 'string', 'metaInfo' => null, 's3ThumbEditor' => 'string', 'isDeleted' => 'string'];
    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }
    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }
    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = ['id' => 'id', 'name' => 'name', 'createdAt' => 'createdAt', 'modifiedAt' => 'modifiedAt', 'url' => 'url', 'imageUrl' => 'imageUrl', 'sku' => 'sku', 'price' => 'price', 'categories' => 'categories', 'parentId' => 'parentId', 's3Original' => 's3Original', 's3ThumbAnalytics' => 's3ThumbAnalytics', 'metaInfo' => 'metaInfo', 's3ThumbEditor' => 's3ThumbEditor', 'isDeleted' => 'isDeleted'];
    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = ['id' => 'setId', 'name' => 'setName', 'createdAt' => 'setCreatedAt', 'modifiedAt' => 'setModifiedAt', 'url' => 'setUrl', 'imageUrl' => 'setImageUrl', 'sku' => 'setSku', 'price' => 'setPrice', 'categories' => 'setCategories', 'parentId' => 'setParentId', 's3Original' => 'setS3Original', 's3ThumbAnalytics' => 'setS3ThumbAnalytics', 'metaInfo' => 'setMetaInfo', 's3ThumbEditor' => 'setS3ThumbEditor', 'isDeleted' => 'setIsDeleted'];
    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = ['id' => 'getId', 'name' => 'getName', 'createdAt' => 'getCreatedAt', 'modifiedAt' => 'getModifiedAt', 'url' => 'getUrl', 'imageUrl' => 'getImageUrl', 'sku' => 'getSku', 'price' => 'getPrice', 'categories' => 'getCategories', 'parentId' => 'getParentId', 's3Original' => 'getS3Original', 's3ThumbAnalytics' => 'getS3ThumbAnalytics', 'metaInfo' => 'getMetaInfo', 's3ThumbEditor' => 'getS3ThumbEditor', 'isDeleted' => 'getIsDeleted'];
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
        return self::$swaggerModelName;
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['modifiedAt'] = isset($data['modifiedAt']) ? $data['modifiedAt'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['imageUrl'] = isset($data['imageUrl']) ? $data['imageUrl'] : null;
        $this->container['sku'] = isset($data['sku']) ? $data['sku'] : null;
        $this->container['price'] = isset($data['price']) ? $data['price'] : null;
        $this->container['categories'] = isset($data['categories']) ? $data['categories'] : null;
        $this->container['parentId'] = isset($data['parentId']) ? $data['parentId'] : null;
        $this->container['s3Original'] = isset($data['s3Original']) ? $data['s3Original'] : null;
        $this->container['s3ThumbAnalytics'] = isset($data['s3ThumbAnalytics']) ? $data['s3ThumbAnalytics'] : null;
        $this->container['metaInfo'] = isset($data['metaInfo']) ? $data['metaInfo'] : null;
        $this->container['s3ThumbEditor'] = isset($data['s3ThumbEditor']) ? $data['s3ThumbEditor'] : null;
        $this->container['isDeleted'] = isset($data['isDeleted']) ? $data['isDeleted'] : null;
    }
    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['createdAt'] === null) {
            $invalidProperties[] = "'createdAt' can't be null";
        }
        if ($this->container['modifiedAt'] === null) {
            $invalidProperties[] = "'modifiedAt' can't be null";
        }
        if ($this->container['s3ThumbAnalytics'] === null) {
            $invalidProperties[] = "'s3ThumbAnalytics' can't be null";
        }
        if ($this->container['s3ThumbEditor'] === null) {
            $invalidProperties[] = "'s3ThumbEditor' can't be null";
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
        return \count($this->listInvalidProperties()) === 0;
    }
    /**
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }
    /**
     * Sets id
     *
     * @param string $id Product ID for which you requested the details
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
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
     * @param string $name Name of the product for which you requested the details
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }
    /**
     * Gets createdAt
     *
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }
    /**
     * Sets createdAt
     *
     * @param string $createdAt Creation UTC date-time of the product (YYYY-MM-DDTHH:mm:ss.SSSZ)
     *
     * @return $this
     */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;
        return $this;
    }
    /**
     * Gets modifiedAt
     *
     * @return string
     */
    public function getModifiedAt()
    {
        return $this->container['modifiedAt'];
    }
    /**
     * Sets modifiedAt
     *
     * @param string $modifiedAt Last modification UTC date-time of the product (YYYY-MM-DDTHH:mm:ss.SSSZ)
     *
     * @return $this
     */
    public function setModifiedAt($modifiedAt)
    {
        $this->container['modifiedAt'] = $modifiedAt;
        return $this;
    }
    /**
     * Gets url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->container['url'];
    }
    /**
     * Sets url
     *
     * @param string $url URL to the product
     *
     * @return $this
     */
    public function setUrl($url)
    {
        $this->container['url'] = $url;
        return $this;
    }
    /**
     * Gets imageUrl
     *
     * @return string
     */
    public function getImageUrl()
    {
        return $this->container['imageUrl'];
    }
    /**
     * Sets imageUrl
     *
     * @param string $imageUrl Absolute URL to the cover image of the product
     *
     * @return $this
     */
    public function setImageUrl($imageUrl)
    {
        $this->container['imageUrl'] = $imageUrl;
        return $this;
    }
    /**
     * Gets sku
     *
     * @return string
     */
    public function getSku()
    {
        return $this->container['sku'];
    }
    /**
     * Sets sku
     *
     * @param string $sku Product identifier from the shop
     *
     * @return $this
     */
    public function setSku($sku)
    {
        $this->container['sku'] = $sku;
        return $this;
    }
    /**
     * Gets price
     *
     * @return float
     */
    public function getPrice()
    {
        return $this->container['price'];
    }
    /**
     * Sets price
     *
     * @param float $price Price of the product
     *
     * @return $this
     */
    public function setPrice($price)
    {
        $this->container['price'] = $price;
        return $this;
    }
    /**
     * Gets categories
     *
     * @return string[]
     */
    public function getCategories()
    {
        return $this->container['categories'];
    }
    /**
     * Sets categories
     *
     * @param string[] $categories Category ID-s of the product
     *
     * @return $this
     */
    public function setCategories($categories)
    {
        $this->container['categories'] = $categories;
        return $this;
    }
    /**
     * Gets parentId
     *
     * @return string
     */
    public function getParentId()
    {
        return $this->container['parentId'];
    }
    /**
     * Sets parentId
     *
     * @param string $parentId Parent product id of the product
     *
     * @return $this
     */
    public function setParentId($parentId)
    {
        $this->container['parentId'] = $parentId;
        return $this;
    }
    /**
     * Gets s3Original
     *
     * @return string
     */
    public function getS3Original()
    {
        return $this->container['s3Original'];
    }
    /**
     * Sets s3Original
     *
     * @param string $s3Original S3 url of original image
     *
     * @return $this
     */
    public function setS3Original($s3Original)
    {
        $this->container['s3Original'] = $s3Original;
        return $this;
    }
    /**
     * Gets s3ThumbAnalytics
     *
     * @return string
     */
    public function getS3ThumbAnalytics()
    {
        return $this->container['s3ThumbAnalytics'];
    }
    /**
     * Sets s3ThumbAnalytics
     *
     * @param string $s3ThumbAnalytics S3 thumbnail url of original image in 120x120 dimension for analytics section
     *
     * @return $this
     */
    public function setS3ThumbAnalytics($s3ThumbAnalytics)
    {
        $this->container['s3ThumbAnalytics'] = $s3ThumbAnalytics;
        return $this;
    }
    /**
     * Gets metaInfo
     *
     * @return object
     */
    public function getMetaInfo()
    {
        return $this->container['metaInfo'];
    }
    /**
     * Sets metaInfo
     *
     * @param object $metaInfo Meta data of product such as description, vendor, producer, stock level, etc.
     *
     * @return $this
     */
    public function setMetaInfo($metaInfo)
    {
        $this->container['metaInfo'] = $metaInfo;
        return $this;
    }
    /**
     * Gets s3ThumbEditor
     *
     * @return string
     */
    public function getS3ThumbEditor()
    {
        return $this->container['s3ThumbEditor'];
    }
    /**
     * Sets s3ThumbEditor
     *
     * @param string $s3ThumbEditor S3 thumbnail url of original image in 600x400 dimension for editor section
     *
     * @return $this
     */
    public function setS3ThumbEditor($s3ThumbEditor)
    {
        $this->container['s3ThumbEditor'] = $s3ThumbEditor;
        return $this;
    }
    /**
     * Gets isDeleted
     *
     * @return bool
     */
    public function getIsDeleted()
    {
        return $this->container['isDeleted'];
    }
    /**
     * Sets isDeleted
     *
     * @param bool $isDeleted product deleted from the shop's database
     *
     * @return $this
     */
    public function setIsDeleted($isDeleted)
    {
        $this->container['isDeleted'] = $isDeleted;
        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange]
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }
    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }
    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetSet($offset, $value)
    {
        if (\is_null($offset)) {
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
    #[\ReturnTypeWillChange]
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }
    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (\defined('JSON_PRETTY_PRINT')) {
            // use JSON pretty print
            return \json_encode(\WPMailSMTP\Vendor\SendinBlue\Client\ObjectSerializer::sanitizeForSerialization($this), \JSON_PRETTY_PRINT);
        }
        return \json_encode(\WPMailSMTP\Vendor\SendinBlue\Client\ObjectSerializer::sanitizeForSerialization($this));
    }
}
