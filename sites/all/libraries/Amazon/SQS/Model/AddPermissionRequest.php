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
 * Amazon_SQS_Model_AddPermissionRequest
 * 
 * Properties:
 * <ul>
 * 
 * <li>QueueUrl: string</li>
 * <li>Label: string</li>
 * <li>AWSAccountId: string</li>
 * <li>ActionName: string</li>
 *
 * </ul>
 */ 
class Amazon_SQS_Model_AddPermissionRequest extends Amazon_SQS_Model
{


    /**
     * Construct new Amazon_SQS_Model_AddPermissionRequest
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>QueueUrl: string</li>
     * <li>Label: string</li>
     * <li>AWSAccountId: string</li>
     * <li>ActionName: string</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'QueueUrl' => array('FieldValue' => null, 'FieldType' => 'string'),
        'Label' => array('FieldValue' => null, 'FieldType' => 'string'),
        'AWSAccountId' => array('FieldValue' => array(), 'FieldType' => array('string')),
        'ActionName' => array('FieldValue' => array(), 'FieldType' => array('string')),
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
     * @return Amazon_SQS_Model_AddPermissionRequest instance
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
     * Gets the value of the Label property.
     * 
     * @return string Label
     */
    public function getLabel() 
    {
        return $this->_fields['Label']['FieldValue'];
    }

    /**
     * Sets the value of the Label property.
     * 
     * @param string Label
     * @return this instance
     */
    public function setLabel($value) 
    {
        $this->_fields['Label']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Sets the value of the Label and returns this instance
     * 
     * @param string $value Label
     * @return Amazon_SQS_Model_AddPermissionRequest instance
     */
    public function withLabel($value)
    {
        $this->setLabel($value);
        return $this;
    }


    /**
     * Checks if Label is set
     * 
     * @return bool true if Label  is set
     */
    public function isSetLabel()
    {
        return !is_null($this->_fields['Label']['FieldValue']);
    }

    /**
     * Gets the value of the AWSAccountId .
     * 
     * @return array of string AWSAccountId
     */
    public function getAWSAccountId() 
    {
        return $this->_fields['AWSAccountId']['FieldValue'];
    }

    /**
     * Sets the value of the AWSAccountId.
     * 
     * @param string or an array of string AWSAccountId
     * @return this instance
     */
    public function setAWSAccountId($AWSAccountId) 
    {
        if (!$this->_isNumericArray($AWSAccountId)) {
            $AWSAccountId =  array ($AWSAccountId);    
        }
        $this->_fields['AWSAccountId']['FieldValue'] = $AWSAccountId;
        return $this;
    }
  

    /**
     * Sets single or multiple values of AWSAccountId list via variable number of arguments. 
     * For example, to set the list with two elements, simply pass two values as arguments to this function
     * <code>withAWSAccountId($AWSAccountId1, $AWSAccountId2)</code>
     * 
     * @param string  $stringArgs one or more AWSAccountId
     * @return Amazon_SQS_Model_AddPermissionRequest  instance
     */
    public function withAWSAccountId($stringArgs)
    {
        foreach (func_get_args() as $AWSAccountId) {
            $this->_fields['AWSAccountId']['FieldValue'][] = $AWSAccountId;
        }
        return $this;
    }  
      

    /**
     * Checks if AWSAccountId list is non-empty
     * 
     * @return bool true if AWSAccountId list is non-empty
     */
    public function isSetAWSAccountId()
    {
        return count ($this->_fields['AWSAccountId']['FieldValue']) > 0;
    }

    /**
     * Gets the value of the ActionName .
     * 
     * @return array of string ActionName
     */
    public function getActionName() 
    {
        return $this->_fields['ActionName']['FieldValue'];
    }

    /**
     * Sets the value of the ActionName.
     * 
     * @param string or an array of string ActionName
     * @return this instance
     */
    public function setActionName($actionName) 
    {
        if (!$this->_isNumericArray($actionName)) {
            $actionName =  array ($actionName);    
        }
        $this->_fields['ActionName']['FieldValue'] = $actionName;
        return $this;
    }
  

    /**
     * Sets single or multiple values of ActionName list via variable number of arguments. 
     * For example, to set the list with two elements, simply pass two values as arguments to this function
     * <code>withActionName($actionName1, $actionName2)</code>
     * 
     * @param string  $stringArgs one or more ActionName
     * @return Amazon_SQS_Model_AddPermissionRequest  instance
     */
    public function withActionName($stringArgs)
    {
        foreach (func_get_args() as $actionName) {
            $this->_fields['ActionName']['FieldValue'][] = $actionName;
        }
        return $this;
    }  
      

    /**
     * Checks if ActionName list is non-empty
     * 
     * @return bool true if ActionName list is non-empty
     */
    public function isSetActionName()
    {
        return count ($this->_fields['ActionName']['FieldValue']) > 0;
    }




}