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
 require_once DRUPAL_ROOT . '/sites/all/libraries/Amazon/SQS/Model.php';

    

/**
 * Amazon_SQS_Model_ReceiveMessageRequest
 * 
 * Properties:
 * <ul>
 * 
 * <li>QueueUrl: string</li>
 * <li>MaxNumberOfMessages: int</li>
 * <li>VisibilityTimeout: int</li>
 * <li>AttributeName: string</li>
 *
 * </ul>
 */ 
class Amazon_SQS_Model_ReceiveMessageRequest extends Amazon_SQS_Model
{


    /**
     * Construct new Amazon_SQS_Model_ReceiveMessageRequest
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>QueueUrl: string</li>
     * <li>MaxNumberOfMessages: int</li>
     * <li>VisibilityTimeout: int</li>
     * <li>AttributeName: string</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'QueueUrl' => array('FieldValue' => null, 'FieldType' => 'string'),
        'MaxNumberOfMessages' => array('FieldValue' => null, 'FieldType' => 'int'),
        'VisibilityTimeout' => array('FieldValue' => null, 'FieldType' => 'int'),
        'AttributeName' => array('FieldValue' => array(), 'FieldType' => array('string')),
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
     * @return Amazon_SQS_Model_ReceiveMessageRequest instance
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
     * Gets the value of the MaxNumberOfMessages property.
     * 
     * @return int MaxNumberOfMessages
     */
    public function getMaxNumberOfMessages() 
    {
        return $this->_fields['MaxNumberOfMessages']['FieldValue'];
    }

    /**
     * Sets the value of the MaxNumberOfMessages property.
     * 
     * @param int MaxNumberOfMessages
     * @return this instance
     */
    public function setMaxNumberOfMessages($value) 
    {
        $this->_fields['MaxNumberOfMessages']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the MaxNumberOfMessages and returns this instance
     * 
     * @param int $value MaxNumberOfMessages
     * @return Amazon_SQS_Model_ReceiveMessageRequest instance
     */
    public function withMaxNumberOfMessages($value)
    {
        $this->setMaxNumberOfMessages($value);
        return $this;
    }


    /**
     * Checks if MaxNumberOfMessages is set
     * 
     * @return bool true if MaxNumberOfMessages  is set
     */
    public function isSetMaxNumberOfMessages()
    {
        return !is_null($this->_fields['MaxNumberOfMessages']['FieldValue']);
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
     * @return Amazon_SQS_Model_ReceiveMessageRequest instance
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
     * Gets the value of the AttributeName .
     * 
     * @return array of string AttributeName
     */
    public function getAttributeName() 
    {
        return $this->_fields['AttributeName']['FieldValue'];
    }

    /**
     * Sets the value of the AttributeName.
     * 
     * @param string or an array of string AttributeName
     * @return this instance
     */
    public function setAttributeName($attributeName) 
    {
        if (!$this->_isNumericArray($attributeName)) {
            $attributeName =  array ($attributeName);    
        }
        $this->_fields['AttributeName']['FieldValue'] = $attributeName;
        return $this;
    }
  

    /**
     * Sets single or multiple values of AttributeName list via variable number of arguments. 
     * For example, to set the list with two elements, simply pass two values as arguments to this function
     * <code>withAttributeName($attributeName1, $attributeName2)</code>
     * 
     * @param string  $stringArgs one or more AttributeName
     * @return Amazon_SQS_Model_ReceiveMessageRequest  instance
     */
    public function withAttributeName($stringArgs)
    {
        foreach (func_get_args() as $attributeName) {
            $this->_fields['AttributeName']['FieldValue'][] = $attributeName;
        }
        return $this;
    }  
      

    /**
     * Checks if AttributeName list is non-empty
     * 
     * @return bool true if AttributeName list is non-empty
     */
    public function isSetAttributeName()
    {
        return count ($this->_fields['AttributeName']['FieldValue']) > 0;
    }




}