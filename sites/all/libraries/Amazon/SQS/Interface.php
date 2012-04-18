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
 * Amazon Simple Queue Service (Amazon SQS) offers a reliable, highly scalable hosted queue for storing messages as they travel between computers. By using Amazon SQS, developers can simply move data between distributed application components performing different tasks, without losing messages or requiring each component to be always available.  Amazon SQS works by exposing Amazon's web-scale messaging infrastructure as a web service. Any computer on the Internet can add or read messages without any installed software or special firewall configurations. Components of applications using Amazon SQS can run independently, and do not need to be on the same network, developed with the same technologies, or running at the same time.
 * 
 */

interface  Amazon_SQS_Interface 
{
    

            
    /**
     * Create Queue 
     * The CreateQueue action creates a new queue, or returns the URL of an existing one.  When you request CreateQueue, you provide a name for the queue. To successfully create a new queue, you must provide a name that is unique within the scope of your own queues. If you provide the name of an existing queue, a new queue isn't created and an error isn't returned. Instead, the request succeeds and the queue URL for the existing queue is returned. Exception: if you provide a value for DefaultVisibilityTimeout that is different from the value for the existing queue, you receive an error.  
     * @see http://docs.amazonwebservices.com/AWSSimpleQueueService/2009-02-01/SQSDeveloperGuide/Query_QueryCreateQueue.html      
     * @param mixed $request array of parameters for Amazon_SQS_Model_CreateQueueRequest request
     * or Amazon_SQS_Model_CreateQueueRequest object itself
     * @see Amazon_SQS_Model_CreateQueueRequest
     * @return Amazon_SQS_Model_CreateQueueResponse Amazon_SQS_Model_CreateQueueResponse
     *
     * @throws Amazon_SQS_Exception
     */
    public function createQueue($request);


            
    /**
     * List Queues 
     * The ListQueues action returns a list of your queues.
     *   
     * @see http://docs.amazonwebservices.com/AWSSimpleQueueService/2009-02-01/SQSDeveloperGuide/Query_QueryListQueues.html      
     * @param mixed $request array of parameters for Amazon_SQS_Model_ListQueuesRequest request
     * or Amazon_SQS_Model_ListQueuesRequest object itself
     * @see Amazon_SQS_Model_ListQueuesRequest
     * @return Amazon_SQS_Model_ListQueuesResponse Amazon_SQS_Model_ListQueuesResponse
     *
     * @throws Amazon_SQS_Exception
     */
    public function listQueues($request);


            
    /**
     * Add Permission 
     * Adds the specified permission(s) to a queue for the specified principal(s). This allows for sharing access to the queue.
     *   
     * @see http://docs.amazonwebservices.com/AWSSimpleQueueService/2009-02-01/SQSDeveloperGuide/Query_QueryAddPermission.html      
     * @param mixed $request array of parameters for Amazon_SQS_Model_AddPermissionRequest request
     * or Amazon_SQS_Model_AddPermissionRequest object itself
     * @see Amazon_SQS_Model_AddPermissionRequest
     * @return Amazon_SQS_Model_AddPermissionResponse Amazon_SQS_Model_AddPermissionResponse
     *
     * @throws Amazon_SQS_Exception
     */
    public function addPermission($request);


            
    /**
     * Change Message Visibility 
     * The ChangeMessageVisibility action extends the read lock timeout of the specified message from the specified queue to the specified value.
     *   
     * @see http://docs.amazonwebservices.com/AWSSimpleQueueService/2009-02-01/SQSDeveloperGuide/Query_QueryChangeMessageVisibility.html      
     * @param mixed $request array of parameters for Amazon_SQS_Model_ChangeMessageVisibilityRequest request
     * or Amazon_SQS_Model_ChangeMessageVisibilityRequest object itself
     * @see Amazon_SQS_Model_ChangeMessageVisibilityRequest
     * @return Amazon_SQS_Model_ChangeMessageVisibilityResponse Amazon_SQS_Model_ChangeMessageVisibilityResponse
     *
     * @throws Amazon_SQS_Exception
     */
    public function changeMessageVisibility($request);


            
    /**
     * Delete Message 
     * The DeleteMessage action unconditionally removes the specified message from the specified queue. Even if the message is locked by another reader due to the visibility timeout setting, it is still deleted from the queue.
     *   
     * @see http://docs.amazonwebservices.com/AWSSimpleQueueService/2009-02-01/SQSDeveloperGuide/Query_QueryDeleteMessage.html      
     * @param mixed $request array of parameters for Amazon_SQS_Model_DeleteMessageRequest request
     * or Amazon_SQS_Model_DeleteMessageRequest object itself
     * @see Amazon_SQS_Model_DeleteMessageRequest
     * @return Amazon_SQS_Model_DeleteMessageResponse Amazon_SQS_Model_DeleteMessageResponse
     *
     * @throws Amazon_SQS_Exception
     */
    public function deleteMessage($request);


            
    /**
     * Delete Queue 
     * This action unconditionally deletes the queue specified by the queue URL. Use this operation WITH CARE!  The queue is deleted even if it is NOT empty.
     *   
     * @see http://docs.amazonwebservices.com/AWSSimpleQueueService/2009-02-01/SQSDeveloperGuide/Query_QueryDeleteQueue.html      
     * @param mixed $request array of parameters for Amazon_SQS_Model_DeleteQueueRequest request
     * or Amazon_SQS_Model_DeleteQueueRequest object itself
     * @see Amazon_SQS_Model_DeleteQueueRequest
     * @return Amazon_SQS_Model_DeleteQueueResponse Amazon_SQS_Model_DeleteQueueResponse
     *
     * @throws Amazon_SQS_Exception
     */
    public function deleteQueue($request);


            
    /**
     * Get Queue Attributes 
     * Gets one or all attributes of a queue. Queues currently have two attributes you can get: ApproximateNumberOfMessages and VisibilityTimeout.
     *   
     * @see http://docs.amazonwebservices.com/AWSSimpleQueueService/2009-02-01/SQSDeveloperGuide/Query_QueryGetQueueAttributes.html      
     * @param mixed $request array of parameters for Amazon_SQS_Model_GetQueueAttributesRequest request
     * or Amazon_SQS_Model_GetQueueAttributesRequest object itself
     * @see Amazon_SQS_Model_GetQueueAttributesRequest
     * @return Amazon_SQS_Model_GetQueueAttributesResponse Amazon_SQS_Model_GetQueueAttributesResponse
     *
     * @throws Amazon_SQS_Exception
     */
    public function getQueueAttributes($request);


            
    /**
     * Remove Permission 
     * Removes the permission with the specified statement id from the queue.
     *   
     * @see http://docs.amazonwebservices.com/AWSSimpleQueueService/2009-02-01/SQSDeveloperGuide/Query_QueryRemovePermission.html      
     * @param mixed $request array of parameters for Amazon_SQS_Model_RemovePermissionRequest request
     * or Amazon_SQS_Model_RemovePermissionRequest object itself
     * @see Amazon_SQS_Model_RemovePermissionRequest
     * @return Amazon_SQS_Model_RemovePermissionResponse Amazon_SQS_Model_RemovePermissionResponse
     *
     * @throws Amazon_SQS_Exception
     */
    public function removePermission($request);


            
    /**
     * Receive Message 
     * Retrieves one or more messages from the specified queue.  For each message returned, the response includes the message body; MD5 digest of the message body; receipt handle, which is the identifier you must provide when deleting the message; and message ID of each message. Messages returned by this action stay in the queue until you delete them. However, once a message is returned to a ReceiveMessage request, it is not returned on subsequent ReceiveMessage requests for the duration of the VisibilityTimeout. If you do not specify a VisibilityTimeout in the request, the overall visibility timeout for the queue is used for the returned messages.
     *   
     * @see http://docs.amazonwebservices.com/AWSSimpleQueueService/2009-02-01/SQSDeveloperGuide/Query_QueryReceiveMessage.html      
     * @param mixed $request array of parameters for Amazon_SQS_Model_ReceiveMessageRequest request
     * or Amazon_SQS_Model_ReceiveMessageRequest object itself
     * @see Amazon_SQS_Model_ReceiveMessageRequest
     * @return Amazon_SQS_Model_ReceiveMessageResponse Amazon_SQS_Model_ReceiveMessageResponse
     *
     * @throws Amazon_SQS_Exception
     */
    public function receiveMessage($request);


            
    /**
     * Send Message 
     * The SendMessage action delivers a message to the specified queue.
     *   
     * @see http://docs.amazonwebservices.com/AWSSimpleQueueService/2009-02-01/SQSDeveloperGuide/Query_QuerySendMessage.html      
     * @param mixed $request array of parameters for Amazon_SQS_Model_SendMessageRequest request
     * or Amazon_SQS_Model_SendMessageRequest object itself
     * @see Amazon_SQS_Model_SendMessageRequest
     * @return Amazon_SQS_Model_SendMessageResponse Amazon_SQS_Model_SendMessageResponse
     *
     * @throws Amazon_SQS_Exception
     */
    public function sendMessage($request);


            
    /**
     * Set Queue Attributes 
     * Sets an attribute of a queue. Currently, you can set only the VisibilityTimeout attribute for a queue.
     *   
     * @see http://docs.amazonwebservices.com/AWSSimpleQueueService/2009-02-01/SQSDeveloperGuide/Query_QuerySetQueueAttributes.html      
     * @param mixed $request array of parameters for Amazon_SQS_Model_SetQueueAttributesRequest request
     * or Amazon_SQS_Model_SetQueueAttributesRequest object itself
     * @see Amazon_SQS_Model_SetQueueAttributesRequest
     * @return Amazon_SQS_Model_SetQueueAttributesResponse Amazon_SQS_Model_SetQueueAttributesResponse
     *
     * @throws Amazon_SQS_Exception
     */
    public function setQueueAttributes($request);

}