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
 * Amazon_SQS_Model_ChangeMessageVisibilityRequest
 * 
 * Properties:
 * <ul>
 * 
 * <li>QueueUrl: string</li>
 * <li>ReceiptHandle: string</li>
 * <li>VisibilityTimeout: int</li>
 * <li>Attribute: Amazon_SQS_Model_Attribute</li>
 *
 * </ul>
 */ 
class Amazon_SQS_Model_ChangeMessageVisibilityRequest extends Amazon_SQS_Model
{


    /**
     * Construct new Amazon_SQS_Model_ChangeMessageVisibilityRequest
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>QueueUrl: string</li>
     * <li>ReceiptHandle: string</li>
     * <li>VisibilityTimeout: int</li>
     * <li>Attribute: Amazon_SQS_Model_Attribute</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'QueueUrl' => array('FieldValue' => null, 'FieldType' => 'string'),
        'ReceiptHandle' => array('FieldValue' => null, 'FieldType' => 'string'),
        'VisibilityTimeout' => array('FieldValue' => null, 'FieldType' => 'int'),
        'Attribute' => array('FieldValue' => array(), 'FieldType' => array('Amazon_SQS_Model_Attribute')),
        );
        parent::__construct($data);
    }

        /**
     * Gets the value of the QueueUrl property.
     * 
     * @return string QueueUrl
     */
    public function getQueueUrl() 
    {
        return $this->_fields['QueueUrl']['FieldValue'];
    }

    /**
     * Sets the value of the QueueUrl property.
     * 
     * @param string QueueUrl
     * @return this instance
     */
    public function setQueueUrl($value) 
    {
        $this->_fields['QueueUrl']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the QueueUrl and returns this instance
     * 
     * @param string $value QueueUrl
     * @return Amazon_SQS_Model_ChangeMessageVisibilityRequest instance
     */
    public function withQueueUrl($value)
    {
        $this->setQueueUrl($value);
        return $this;
    }


    /**
     * Checks if QueueUrl is set
     * 
     * @return bool true if QueueUrl  is set
     */
    public function isSetQueueUrl()
    {
        return !is_null($this->_fields['QueueUrl']['FieldValue']);
    }

    /**
     * Gets the value of the ReceiptHandle property.
     * 
     * @return string ReceiptHandle
     */
    public function getReceiptHandle() 
    {
        return $this->_fields['ReceiptHandle']['FieldValue'];
    }

    /**
     * Sets the value of the ReceiptHandle property.
     * 
     * @param string ReceiptHandle
     * @return this instance
     */
    public function setReceiptHandle($value) 
    {
        $this->_fields['ReceiptHandle']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the ReceiptHandle and returns this instance
     * 
     * @param string $value ReceiptHandle
     * @return Amazon_SQS_Model_ChangeMessageVisibilityRequest instance
     */
    public function withReceiptHandle($value)
    {
        $this->setReceiptHandle($value);
        return $this;
    }


    /**
     * Checks if ReceiptHandle is set
     * 
     * @return bool true if ReceiptHandle  is set
     */
    public function isSetReceiptHandle()
    {
        return !is_null($this->_fields['ReceiptHandle']['FieldValue']);
    }

    /**
     * Gets the value of the VisibilityTimeout property.
     * 
     * @return int VisibilityTimeout
     */
    public function getVisibilityTimeout() 
    {
        return $this->_fields['VisibilityTimeout']['FieldValue'];
    }

    /**
     * Sets the value of the VisibilityTimeout property.
     * 
     * @param int VisibilityTimeout
     * @return this instance
     */
    public function setVisibilityTimeout($value) 
    {
        $this->_fields['VisibilityTimeout']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the VisibilityTimeout and returns this instance
     * 
     * @param int $value VisibilityTimeout
     * @return Amazon_SQS_Model_ChangeMessageVisibilityRequest instance
     */
    public function withVisibilityTimeout($value)
    {
        $this->setVisibilityTimeout($value);
        return $this;
    }


    /**
     * Checks if VisibilityTimeout is set
     * 
     * @return bool true if VisibilityTimeout  is set
     */
    public function isSetVisibilityTimeout()
    {
        return !is_null($this->_fields['VisibilityTimeout']['FieldValue']);
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
     * @return Amazon_SQS_Model_ChangeMessageVisibilityRequest  instance
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