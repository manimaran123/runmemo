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
 * Create Queue  Sample
 */

include_once ('.config.inc.php'); 

/************************************************************************
 * Instantiate Implementation of Amazon SQS
 * 
 * AWS_ACCESS_KEY_ID and AWS_SECRET_ACCESS_KEY constants 
 * are defined in the .config.inc.php located in the same 
 * directory as this sample
 ***********************************************************************/
 $service = new Amazon_SQS_Client(AWS_ACCESS_KEY_ID, 
                                       AWS_SECRET_ACCESS_KEY);
 
/************************************************************************
 * Uncomment to try out Mock Service that simulates Amazon_SQS
 * responses without calling Amazon_SQS service.
 *
 * Responses are loaded from local XML files. You can tweak XML files to
 * experiment with various outputs during development
 *
 * XML files available under Amazon/SQS/Mock tree
 *
 ***********************************************************************/
 // $service = new Amazon_SQS_Mock();

/************************************************************************
 * Setup request parameters and uncomment invoke to try out 
 * sample for Create Queue Action
 ***********************************************************************/
 // @TODO: set request. Action can be passed as Amazon_SQS_Model_CreateQueueRequest
 // object or array of parameters
 // invokeCreateQueue($service, $request);

                        
/**
  * Create Queue Action Sample
  * The CreateQueue action creates a new queue, or returns the URL of an existing one.  When you request CreateQueue, you provide a name for the queue. To successfully create a new queue, you must provide a name that is unique within the scope of your own queues. If you provide the name of an existing queue, a new queue isn't created and an error isn't returned. Instead, the request succeeds and the queue URL for the existing queue is returned. Exception: if you provide a value for DefaultVisibilityTimeout that is different from the value for the existing queue, you receive an error.  
  * @param Amazon_SQS_Interface $service instance of Amazon_SQS_Interface
  * @param mixed $request Amazon_SQS_Model_CreateQueue or array of parameters
  */
  function invokeCreateQueue(Amazon_SQS_Interface $service, $request) 
  {
      try {
              $response = $service->createQueue($request);
              
                echo ("Service Response\n");
                echo ("=============================================================================\n");

                echo("        CreateQueueResponse\n");
                if ($response->isSetCreateQueueResult()) { 
                    echo("            CreateQueueResult\n");
                    $createQueueResult = $response->getCreateQueueResult();
                    if ($createQueueResult->isSetQueueUrl()) 
                    {
                        echo("                QueueUrl\n");
                        echo("                    " . $createQueueResult->getQueueUrl() . "\n");
                    }
                } 
                if ($response->isSetResponseMetadata()) { 
                    echo("            ResponseMetadata\n");
                    $responseMetadata = $response->getResponseMetadata();
                    if ($responseMetadata->isSetRequestId()) 
                    {
                        echo("                RequestId\n");
                        echo("                    " . $responseMetadata->getRequestId() . "\n");
                    }
                } 

     } catch (Amazon_SQS_Exception $ex) {
         echo("Caught Exception: " . $ex->getMessage() . "\n");
         echo("Response Status Code: " . $ex->getStatusCode() . "\n");
         echo("Error Code: " . $ex->getErrorCode() . "\n");
         echo("Error Type: " . $ex->getErrorType() . "\n");
         echo("Request ID: " . $ex->getRequestId() . "\n");
         echo("XML: " . $ex->getXML() . "\n");
     }
 }
                                            