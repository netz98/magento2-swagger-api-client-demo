<?php
/**
 * CheckoutAgreementsDataAgreementInterface
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
 * CheckoutAgreementsDataAgreementInterface Class Doc Comment
 *
 * @category    Class
 * @description Interface AgreementInterface
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class CheckoutAgreementsDataAgreementInterface implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'checkout-agreements-data-agreement-interface';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'agreement_id' => 'int',
        'name' => 'string',
        'content' => 'string',
        'content_height' => 'string',
        'checkbox_text' => 'string',
        'is_active' => 'bool',
        'is_html' => 'bool',
        'mode' => 'int',
        'extension_attributes' => '\Swagger\Client\Model\CheckoutAgreementsDataAgreementExtensionInterface'
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
        'agreement_id' => 'agreement_id',
        'name' => 'name',
        'content' => 'content',
        'content_height' => 'content_height',
        'checkbox_text' => 'checkbox_text',
        'is_active' => 'is_active',
        'is_html' => 'is_html',
        'mode' => 'mode',
        'extension_attributes' => 'extension_attributes'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'agreement_id' => 'setAgreementId',
        'name' => 'setName',
        'content' => 'setContent',
        'content_height' => 'setContentHeight',
        'checkbox_text' => 'setCheckboxText',
        'is_active' => 'setIsActive',
        'is_html' => 'setIsHtml',
        'mode' => 'setMode',
        'extension_attributes' => 'setExtensionAttributes'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'agreement_id' => 'getAgreementId',
        'name' => 'getName',
        'content' => 'getContent',
        'content_height' => 'getContentHeight',
        'checkbox_text' => 'getCheckboxText',
        'is_active' => 'getIsActive',
        'is_html' => 'getIsHtml',
        'mode' => 'getMode',
        'extension_attributes' => 'getExtensionAttributes'
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
        $this->container['agreement_id'] = isset($data['agreement_id']) ? $data['agreement_id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['content'] = isset($data['content']) ? $data['content'] : null;
        $this->container['content_height'] = isset($data['content_height']) ? $data['content_height'] : null;
        $this->container['checkbox_text'] = isset($data['checkbox_text']) ? $data['checkbox_text'] : null;
        $this->container['is_active'] = isset($data['is_active']) ? $data['is_active'] : null;
        $this->container['is_html'] = isset($data['is_html']) ? $data['is_html'] : null;
        $this->container['mode'] = isset($data['mode']) ? $data['mode'] : null;
        $this->container['extension_attributes'] = isset($data['extension_attributes']) ? $data['extension_attributes'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['agreement_id'] === null) {
            $invalid_properties[] = "'agreement_id' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalid_properties[] = "'name' can't be null";
        }
        if ($this->container['content'] === null) {
            $invalid_properties[] = "'content' can't be null";
        }
        if ($this->container['checkbox_text'] === null) {
            $invalid_properties[] = "'checkbox_text' can't be null";
        }
        if ($this->container['is_active'] === null) {
            $invalid_properties[] = "'is_active' can't be null";
        }
        if ($this->container['is_html'] === null) {
            $invalid_properties[] = "'is_html' can't be null";
        }
        if ($this->container['mode'] === null) {
            $invalid_properties[] = "'mode' can't be null";
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

        if ($this->container['agreement_id'] === null) {
            return false;
        }
        if ($this->container['name'] === null) {
            return false;
        }
        if ($this->container['content'] === null) {
            return false;
        }
        if ($this->container['checkbox_text'] === null) {
            return false;
        }
        if ($this->container['is_active'] === null) {
            return false;
        }
        if ($this->container['is_html'] === null) {
            return false;
        }
        if ($this->container['mode'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets agreement_id
     * @return int
     */
    public function getAgreementId()
    {
        return $this->container['agreement_id'];
    }

    /**
     * Sets agreement_id
     * @param int $agreement_id Agreement ID.
     * @return $this
     */
    public function setAgreementId($agreement_id)
    {
        $this->container['agreement_id'] = $agreement_id;

        return $this;
    }

    /**
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     * @param string $name Agreement name.
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets content
     * @return string
     */
    public function getContent()
    {
        return $this->container['content'];
    }

    /**
     * Sets content
     * @param string $content Agreement content.
     * @return $this
     */
    public function setContent($content)
    {
        $this->container['content'] = $content;

        return $this;
    }

    /**
     * Gets content_height
     * @return string
     */
    public function getContentHeight()
    {
        return $this->container['content_height'];
    }

    /**
     * Sets content_height
     * @param string $content_height Agreement content height. Otherwise, null.
     * @return $this
     */
    public function setContentHeight($content_height)
    {
        $this->container['content_height'] = $content_height;

        return $this;
    }

    /**
     * Gets checkbox_text
     * @return string
     */
    public function getCheckboxText()
    {
        return $this->container['checkbox_text'];
    }

    /**
     * Sets checkbox_text
     * @param string $checkbox_text Agreement checkbox text.
     * @return $this
     */
    public function setCheckboxText($checkbox_text)
    {
        $this->container['checkbox_text'] = $checkbox_text;

        return $this;
    }

    /**
     * Gets is_active
     * @return bool
     */
    public function getIsActive()
    {
        return $this->container['is_active'];
    }

    /**
     * Sets is_active
     * @param bool $is_active Agreement status.
     * @return $this
     */
    public function setIsActive($is_active)
    {
        $this->container['is_active'] = $is_active;

        return $this;
    }

    /**
     * Gets is_html
     * @return bool
     */
    public function getIsHtml()
    {
        return $this->container['is_html'];
    }

    /**
     * Sets is_html
     * @param bool $is_html * true - HTML. * false - plain text.
     * @return $this
     */
    public function setIsHtml($is_html)
    {
        $this->container['is_html'] = $is_html;

        return $this;
    }

    /**
     * Gets mode
     * @return int
     */
    public function getMode()
    {
        return $this->container['mode'];
    }

    /**
     * Sets mode
     * @param int $mode The agreement applied mode.
     * @return $this
     */
    public function setMode($mode)
    {
        $this->container['mode'] = $mode;

        return $this;
    }

    /**
     * Gets extension_attributes
     * @return \Swagger\Client\Model\CheckoutAgreementsDataAgreementExtensionInterface
     */
    public function getExtensionAttributes()
    {
        return $this->container['extension_attributes'];
    }

    /**
     * Sets extension_attributes
     * @param \Swagger\Client\Model\CheckoutAgreementsDataAgreementExtensionInterface $extension_attributes
     * @return $this
     */
    public function setExtensionAttributes($extension_attributes)
    {
        $this->container['extension_attributes'] = $extension_attributes;

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

