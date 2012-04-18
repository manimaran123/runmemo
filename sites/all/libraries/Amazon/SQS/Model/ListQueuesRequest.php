<?php
/** 
 *  PHP Version 5
 *
 *  @category    Amazon
 *  @package     Amazon_SQS
 *  @copyright   Copyright 2008 Amazon Technologies, Inc.
 *  @link        http://aws.amazon.com
 *  @license     http://aws.amazon.com/apache2.0  Apache License, Version 2.0
 *  @version     2009-02-01
 */
/******************************************************************************* 
 *    __  _    _  ___ 
 *   (  )( \/\/ )/ __)
 *   /__\ \    / \__ \
 *  (_)(_) \/\/  (___/
 * 
 *  Amazon SQS PHP5 Library
 *  Generated: Wed Apr 08 20:15:38 PDT 2009
 * 
 */

/**
 *  @see Amazon_SQS_Model
 */
require_once ('Amazon/SQS/Model.php');  

    

/**
 * Amazon_SQS_Model_ListQueuesRequest
 * 
 * Properties:
 * <ul>
 * 
 * <li>QueueNamePrefix: string</li>
 * <li>Attribute: Amazon_SQS_Model_Attribute</li>
 *
 * </ul>
 */ 
class Amazon_SQS_Model_ListQueuesRequest extends Amazon_SQS_Model
{


    /**
     * Construct new Amazon_SQS_Model_ListQueuesRequest
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>QueueNamePrefix: string</li>
     * <li>Attribute: Amazon_SQS_Model_Attribute</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'QueueNamePrefix' => array('FieldValue' => null, 'FieldType' => 'string'),
        'Attribute' => array('FieldValue' => array(), 'FieldType' => array('Amazon_SQS_Model_Attribute')),
        );
        parent::__construct($data);
    }

        /**
     * Gets the value of the QueueNamePrefix property.
     * 
     * @return string QueueNamePrefix
     */
    public function getQueueNamePrefix() 
    {
        return $this->_fields['QueueNamePrefix']['FieldValue'];
    }

    /**
     * Sets the value of the QueueNamePrefix property.
     * 
     * @param string QueueNamePrefix
     * @return this instance
     */
    public function setQueueNamePrefix($value) 
    {
        $this->_fields['QueueNamePrefix']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the QueueNamePrefix and returns this instance
     * 
     * @param string $value QueueNamePrefix
     * @return Amazon_SQS_Model_ListQueuesRequest instance
     */
    public function withQueueNamePrefix($value)
    {
        $this->setQueueNamePrefix($value);
        return $this;
    }


    /**
     * Checks if QueueNamePrefix is set
     * 
     * @return bool true if QueueNamePrefix  is set
     */
    public function isSetQueueNamePrefix()
    {
        return !is_null($this->_fields['QueueNamePrefix']['FieldValue']);
    }

    /**
     * Gets the value of the Attribute.
     * 
     * @return array of Attribute Attribute
     */
    public function getAttribute() 
    {
        return $this->_fields['Attribute']['FieldValue'];
    }

    /**
     * Sets the value of the Attribute.
     * 
     * @param mixed Attribute or an array of Attribute Attribute
     * @return this instance
     */
    public function setAttribute($attribute) 
    {
        if (!$this->_isNumericArray($attribute)) {
            $attribute =  array ($attribute);    
        }
        $this->_fields['Attribute']['FieldValue'] = $attribute;
        return $this;
    }


    /**
     * Sets single or multiple values of Attribute list via variable number of arguments. 
     * For example, to set the list with two elements, simply pass two values as arguments to this function
     * <code>withAttribute($attribute1, $attribute2)</code>
     * 
     * @param Attribute  $attributeArgs one or more Attribute
     * @return Amazon_SQS_Model_ListQueuesRequest  instance
     */
    public function withAttribute($attributeArgs)
    {
        foreach (func_get_args() as $attribute) {
            $this->_fields['Attribute']['FieldValue'][] = $attribute;
        }
        return $this;
    }   



    /**
     * Checks if Attribute list is non-empty
     * 
     * @return bool true if Attribute list is non-empty
     */
    public function isSetAttribute()
    {
        return count ($this->_fields['Attribute']['FieldValue']) > 0;
    }




}