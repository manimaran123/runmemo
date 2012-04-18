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
 * Amazon_SQS_Model_RemovePermissionRequest
 * 
 * Properties:
 * <ul>
 * 
 * <li>QueueUrl: string</li>
 * <li>Label: string</li>
 *
 * </ul>
 */ 
class Amazon_SQS_Model_RemovePermissionRequest extends Amazon_SQS_Model
{


    /**
     * Construct new Amazon_SQS_Model_RemovePermissionRequest
     * 
     * @param mixed $data DOMElement or Associative Array to construct from. 
     * 
     * Valid properties:
     * <ul>
     * 
     * <li>QueueUrl: string</li>
     * <li>Label: string</li>
     *
     * </ul>
     */
    public function __construct($data = null)
    {
        $this->_fields = array (
        'QueueUrl' => array('FieldValue' => null, 'FieldType' => 'string'),
        'Label' => array('FieldValue' => null, 'FieldType' => 'string'),
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
     * @return Amazon_SQS_Model_RemovePermissionRequest instance
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
     * @return Amazon_SQS_Model_RemovePermissionRequest instance
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




}