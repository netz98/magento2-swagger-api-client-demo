<?php
/**
 * RmaDataCommentInterface
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Magento Enterprise
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 2.1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;

/**
 * RmaDataCommentInterface Class Doc Comment
 *
 * @category    Class
 * @description Interface CommentInterface
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class RmaDataCommentInterface implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'rma-data-comment-interface';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'comment' => 'string',
        'rma_entity_id' => 'int',
        'created_at' => 'string',
        'entity_id' => 'int',
        'customer_notified' => 'bool',
        'visible_on_front' => 'bool',
        'status' => 'string',
        'admin' => 'bool',
        'extension_attributes' => '\Swagger\Client\Model\RmaDataCommentExtensionInterface',
        'custom_attributes' => '\Swagger\Client\Model\FrameworkAttributeInterface[]'
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'comment' => 'comment',
        'rma_entity_id' => 'rma_entity_id',
        'created_at' => 'created_at',
        'entity_id' => 'entity_id',
        'customer_notified' => 'customer_notified',
        'visible_on_front' => 'visible_on_front',
        'status' => 'status',
        'admin' => 'admin',
        'extension_attributes' => 'extension_attributes',
        'custom_attributes' => 'custom_attributes'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'comment' => 'setComment',
        'rma_entity_id' => 'setRmaEntityId',
        'created_at' => 'setCreatedAt',
        'entity_id' => 'setEntityId',
        'customer_notified' => 'setCustomerNotified',
        'visible_on_front' => 'setVisibleOnFront',
        'status' => 'setStatus',
        'admin' => 'setAdmin',
        'extension_attributes' => 'setExtensionAttributes',
        'custom_attributes' => 'setCustomAttributes'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'comment' => 'getComment',
        'rma_entity_id' => 'getRmaEntityId',
        'created_at' => 'getCreatedAt',
        'entity_id' => 'getEntityId',
        'customer_notified' => 'getCustomerNotified',
        'visible_on_front' => 'getVisibleOnFront',
        'status' => 'getStatus',
        'admin' => 'getAdmin',
        'extension_attributes' => 'getExtensionAttributes',
        'custom_attributes' => 'getCustomAttributes'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['comment'] = isset($data['comment']) ? $data['comment'] : null;
        $this->container['rma_entity_id'] = isset($data['rma_entity_id']) ? $data['rma_entity_id'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['entity_id'] = isset($data['entity_id']) ? $data['entity_id'] : null;
        $this->container['customer_notified'] = isset($data['customer_notified']) ? $data['customer_notified'] : null;
        $this->container['visible_on_front'] = isset($data['visible_on_front']) ? $data['visible_on_front'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['admin'] = isset($data['admin']) ? $data['admin'] : null;
        $this->container['extension_attributes'] = isset($data['extension_attributes']) ? $data['extension_attributes'] : null;
        $this->container['custom_attributes'] = isset($data['custom_attributes']) ? $data['custom_attributes'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['comment'] === null) {
            $invalid_properties[] = "'comment' can't be null";
        }
        if ($this->container['rma_entity_id'] === null) {
            $invalid_properties[] = "'rma_entity_id' can't be null";
        }
        if ($this->container['created_at'] === null) {
            $invalid_properties[] = "'created_at' can't be null";
        }
        if ($this->container['entity_id'] === null) {
            $invalid_properties[] = "'entity_id' can't be null";
        }
        if ($this->container['customer_notified'] === null) {
            $invalid_properties[] = "'customer_notified' can't be null";
        }
        if ($this->container['visible_on_front'] === null) {
            $invalid_properties[] = "'visible_on_front' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalid_properties[] = "'status' can't be null";
        }
        if ($this->container['admin'] === null) {
            $invalid_properties[] = "'admin' can't be null";
        }
        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        if ($this->container['comment'] === null) {
            return false;
        }
        if ($this->container['rma_entity_id'] === null) {
            return false;
        }
        if ($this->container['created_at'] === null) {
            return false;
        }
        if ($this->container['entity_id'] === null) {
            return false;
        }
        if ($this->container['customer_notified'] === null) {
            return false;
        }
        if ($this->container['visible_on_front'] === null) {
            return false;
        }
        if ($this->container['status'] === null) {
            return false;
        }
        if ($this->container['admin'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets comment
     * @return string
     */
    public function getComment()
    {
        return $this->container['comment'];
    }

    /**
     * Sets comment
     * @param string $comment Comment
     * @return $this
     */
    public function setComment($comment)
    {
        $this->container['comment'] = $comment;

        return $this;
    }

    /**
     * Gets rma_entity_id
     * @return int
     */
    public function getRmaEntityId()
    {
        return $this->container['rma_entity_id'];
    }

    /**
     * Sets rma_entity_id
     * @param int $rma_entity_id Rma Id
     * @return $this
     */
    public function setRmaEntityId($rma_entity_id)
    {
        $this->container['rma_entity_id'] = $rma_entity_id;

        return $this;
    }

    /**
     * Gets created_at
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     * @param string $created_at Created_at
     * @return $this
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets entity_id
     * @return int
     */
    public function getEntityId()
    {
        return $this->container['entity_id'];
    }

    /**
     * Sets entity_id
     * @param int $entity_id Entity_id
     * @return $this
     */
    public function setEntityId($entity_id)
    {
        $this->container['entity_id'] = $entity_id;

        return $this;
    }

    /**
     * Gets customer_notified
     * @return bool
     */
    public function getCustomerNotified()
    {
        return $this->container['customer_notified'];
    }

    /**
     * Sets customer_notified
     * @param bool $customer_notified Is_customer_notified
     * @return $this
     */
    public function setCustomerNotified($customer_notified)
    {
        $this->container['customer_notified'] = $customer_notified;

        return $this;
    }

    /**
     * Gets visible_on_front
     * @return bool
     */
    public function getVisibleOnFront()
    {
        return $this->container['visible_on_front'];
    }

    /**
     * Sets visible_on_front
     * @param bool $visible_on_front Is_visible_on_front
     * @return $this
     */
    public function setVisibleOnFront($visible_on_front)
    {
        $this->container['visible_on_front'] = $visible_on_front;

        return $this;
    }

    /**
     * Gets status
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     * @param string $status Status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets admin
     * @return bool
     */
    public function getAdmin()
    {
        return $this->container['admin'];
    }

    /**
     * Sets admin
     * @param bool $admin Is_admin
     * @return $this
     */
    public function setAdmin($admin)
    {
        $this->container['admin'] = $admin;

        return $this;
    }

    /**
     * Gets extension_attributes
     * @return \Swagger\Client\Model\RmaDataCommentExtensionInterface
     */
    public function getExtensionAttributes()
    {
        return $this->container['extension_attributes'];
    }

    /**
     * Sets extension_attributes
     * @param \Swagger\Client\Model\RmaDataCommentExtensionInterface $extension_attributes
     * @return $this
     */
    public function setExtensionAttributes($extension_attributes)
    {
        $this->container['extension_attributes'] = $extension_attributes;

        return $this;
    }

    /**
     * Gets custom_attributes
     * @return \Swagger\Client\Model\FrameworkAttributeInterface[]
     */
    public function getCustomAttributes()
    {
        return $this->container['custom_attributes'];
    }

    /**
     * Sets custom_attributes
     * @param \Swagger\Client\Model\FrameworkAttributeInterface[] $custom_attributes Custom attributes values.
     * @return $this
     */
    public function setCustomAttributes($custom_attributes)
    {
        $this->container['custom_attributes'] = $custom_attributes;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
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
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this));
    }
}

