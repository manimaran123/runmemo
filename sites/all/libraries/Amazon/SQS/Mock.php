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
 *  @see Amazon_SQS_Interface
 */
require_once ('Amazon/SQS/Interface.php'); 

/**
 * Amazon Simple Queue Service (Amazon SQS) offers a reliable, highly scalable hosted queue for storing messages as they travel between computers. By using Amazon SQS, developers can simply move data between distributed application components performing different tasks, without losing messages or requiring each component to be always available.  Amazon SQS works by exposing Amazon's web-scale messaging infrastructure as a web service. Any computer on the Internet can add or read messages without any installed software or special firewall configurations. Components of applications using Amazon SQS can run independently, and do not need to be on the same network, developed with the same technologies, or running at the same time.
 * 
 */
class  Amazon_SQS_Mock implements Amazon_SQS_Interface
{
    // Public API ------------------------------------------------------------//

            
    /**
     * Create Queue 
     * The CreateQueue action creates a new queue, or returns the URL of an existing one.  When you request CreateQueue, you provide a name for the queue. To successfully create a new queue, you must provide a name that is unique within the scope of your own queues. If you provide the name of an existing queue, a new queue isn't created and an error isn't returned. Instead, the request succeeds and the queue URL for the existing queue is returned. Exception: if you provide a value for DefaultVisibilityTimeout that is different from the value for the existing queue, you receive an error.  
     * @see http://docs.amazonwebservices.com/AWSSimpleQueueService/2009-02-01/SQSDeveloperGuide/Query_QueryCreateQueue.html      
     * @param mixed $request array of parameters for Amazon_SQS_Model_CreateQueue request or Amazon_SQS_Model_CreateQueue object itself
     * @see Amazon_SQS_Model_CreateQueue
     * @return Amazon_SQS_Model_CreateQueueResponse Amazon_SQS_Model_CreateQueueResponse
     *
     * @throws Amazon_SQS_Exception
     */
    public function createQueue($request) 
    {
        require_once ('Amazon/SQS/Model/CreateQueueResponse.php');
        return Amazon_SQS_Model_CreateQueueResponse::fromXML($this->_invoke('CreateQueue'));
    }


            
    /**
     * List Queues 
     * The ListQueues action returns a list of your queues.
     *   
     * @see http://docs.amazonwebservices.com/AWSSimpleQueueService/2009-02-01/SQSDeveloperGuide/Query_QueryListQueues.html      
     * @param mixed $request array of parameters for Amazon_SQS_Model_ListQueues request or Amazon_SQS_Model_ListQueues object itself
     * @see Amazon_SQS_Model_ListQueues
     * @return Amazon_SQS_Model_ListQueuesResponse Amazon_SQS_Model_ListQueuesResponse
     *
     * @throws Amazon_SQS_Exception
     */
    public function listQueues($request) 
    {
        require_once ('Amazon/SQS/Model/ListQueuesResponse.php');
        return Amazon_SQS_Model_ListQueuesResponse::fromXML($this->_invoke('ListQueues'));
    }


            
    /**
     * Add Permission 
     * Adds the specified permission(s) to a queue for the specified principal(s). This allows for sharing access to the queue.
     *   
     * @see http://docs.amazonwebservices.com/AWSSimpleQueueService/2009-02-01/SQSDeveloperGuide/Query_QueryAddPermission.html      
     * @param mixed $request array of parameters for Amazon_SQS_Model_AddPermission request or Amazon_SQS_Model_AddPermission object itself
     * @see Amazon_SQS_Model_AddPermission
     * @return Amazon_SQS_Model_AddPermissionResponse Amazon_SQS_Model_AddPermissionResponse
     *
     * @throws Amazon_SQS_Exception
     */
    public function addPermission($request) 
    {
        require_once ('Amazon/SQS/Model/AddPermissionResponse.php');
        return Amazon_SQS_Model_AddPermissionResponse::fromXML($this->_invoke('AddPermission'));
    }


            
    /**
     * Change Message Visibility 
     * The ChangeMessageVisibility action extends the read lock timeout of the specified message from the specified queue to the specified value.
     *   
     * @see http://docs.amazonwebservices.com/AWSSimpleQueueService/2009-02-01/SQSDeveloperGuide/Query_QueryChangeMessageVisibility.html      
     * @param mixed $request array of parameters for Amazon_SQS_Model_ChangeMessageVisibility request or Amazon_SQS_Model_ChangeMessageVisibility object itself
     * @see Amazon_SQS_Model_ChangeMessageVisibility
     * @return Amazon_SQS_Model_ChangeMessageVisibilityResponse Amazon_SQS_Model_ChangeMessageVisibilityResponse
     *
     * @throws Amazon_SQS_Exception
     */
    public function changeMessageVisibility($request) 
    {
        require_once ('Amazon/SQS/Model/ChangeMessageVisibilityResponse.php');
        return Amazon_SQS_Model_ChangeMessageVisibilityResponse::fromXML($this->_invoke('ChangeMessageVisibility'));
    }


            
    /**
     * Delete Message 
     * The DeleteMessage action unconditionally removes the specified message from the specified queue. Even if the message is locked by another reader due to the visibility timeout setting, it is still deleted from the queue.
     *   
     * @see http://docs.amazonwebservices.com/AWSSimpleQueueService/2009-02-01/SQSDeveloperGuide/Query_QueryDeleteMessage.html      
     * @param mixed $request array of parameters for Amazon_SQS_Model_DeleteMessage request or Amazon_SQS_Model_DeleteMessage object itself
     * @see Amazon_SQS_Model_DeleteMessage
     * @return Amazon_SQS_Model_DeleteMessageResponse Amazon_SQS_Model_DeleteMessageResponse
     *
     * @throws Amazon_SQS_Exception
     */
    public function deleteMessage($request) 
    {
        require_once ('Amazon/SQS/Model/DeleteMessageResponse.php');
        return Amazon_SQS_Model_DeleteMessageResponse::fromXML($this->_invoke('DeleteMessage'));
    }


            
    /**
     * Delete Queue 
     * This action unconditionally deletes the queue specified by the queue URL. Use this operation WITH CARE!  The queue is deleted even if it is NOT empty.
     *   
     * @see http://docs.amazonwebservices.com/AWSSimpleQueueService/2009-02-01/SQSDeveloperGuide/Query_QueryDeleteQueue.html      
     * @param mixed $request array of parameters for Amazon_SQS_Model_DeleteQueue request or Amazon_SQS_Model_DeleteQueue object itself
     * @see Amazon_SQS_Model_DeleteQueue
     * @return Amazon_SQS_Model_DeleteQueueResponse Amazon_SQS_Model_DeleteQueueResponse
     *
     * @throws Amazon_SQS_Exception
     */
    public function deleteQueue($request) 
    {
        require_once ('Amazon/SQS/Model/DeleteQueueResponse.php');
        return Amazon_SQS_Model_DeleteQueueResponse::fromXML($this->_invoke('DeleteQueue'));
    }


            
    /**
     * Get Queue Attributes 
     * Gets one or all attributes of a queue. Queues currently have two attributes you can get: ApproximateNumberOfMessages and VisibilityTimeout.
     *   
     * @see http://docs.amazonwebservices.com/AWSSimpleQueueService/2009-02-01/SQSDeveloperGuide/Query_QueryGetQueueAttributes.html      
     * @param mixed $request array of parameters for Amazon_SQS_Model_GetQueueAttributes request or Amazon_SQS_Model_GetQueueAttributes object itself
     * @see Amazon_SQS_Model_GetQueueAttributes
     * @return Amazon_SQS_Model_GetQueueAttributesResponse Amazon_SQS_Model_GetQueueAttributesResponse
     *
     * @throws Amazon_SQS_Exception
     */
    public function getQueueAttributes($request) 
    {
        require_once ('Amazon/SQS/Model/GetQueueAttributesResponse.php');
        return Amazon_SQS_Model_GetQueueAttributesResponse::fromXML($this->_invoke('GetQueueAttributes'));
    }


            
    /**
     * Remove Permission 
     * Removes the permission with the specified statement id from the queue.
     *   
     * @see http://docs.amazonwebservices.com/AWSSimpleQueueService/2009-02-01/SQSDeveloperGuide/Query_QueryRemovePermission.html      
     * @param mixed $request array of parameters for Amazon_SQS_Model_RemovePermission request or Amazon_SQS_Model_RemovePermission object itself
     * @see Amazon_SQS_Model_RemovePermission
     * @return Amazon_SQS_Model_RemovePermissionResponse Amazon_SQS_Model_RemovePermissionResponse
     *
     * @throws Amazon_SQS_Exception
     */
    public function removePermission($request) 
    {
        require_once ('Amazon/SQS/Model/RemovePermissionResponse.php');
        return Amazon_SQS_Model_RemovePermissionResponse::fromXML($this->_invoke('RemovePermission'));
    }


            
    /**
     * Receive Message 
     * Retrieves one or more messages from the specified queue.  For each message returned, the response includes the message body; MD5 digest of the message body; receipt handle, which is the identifier you must provide when deleting the message; and message ID of each message. Messages returned by this action stay in the queue until you delete them. However, once a message is returned to a ReceiveMessage request, it is not returned on subsequent ReceiveMessage requests for the duration of the VisibilityTimeout. If you do not specify a VisibilityTimeout in the request, the overall visibility timeout for the queue is used for the returned messages.
     *   
     * @see http://docs.amazonwebservices.com/AWSSimpleQueueService/2009-02-01/SQSDeveloperGuide/Query_QueryReceiveMessage.html      
     * @param mixed $request array of parameters for Amazon_SQS_Model_ReceiveMessage request or Amazon_SQS_Model_ReceiveMessage object itself
     * @see Amazon_SQS_Model_ReceiveMessage
     * @return Amazon_SQS_Model_ReceiveMessageResponse Amazon_SQS_Model_ReceiveMessageResponse
     *
     * @throws Amazon_SQS_Exception
     */
    public function receiveMessage($request) 
    {
        require_once ('Amazon/SQS/Model/ReceiveMessageResponse.php');
        return Amazon_SQS_Model_ReceiveMessageResponse::fromXML($this->_invoke('ReceiveMessage'));
    }


            
    /**
     * Send Message 
     * The SendMessage action delivers a message to the specified queue.
     *   
     * @see http://docs.amazonwebservices.com/AWSSimpleQueueService/2009-02-01/SQSDeveloperGuide/Query_QuerySendMessage.html      
     * @param mixed $request array of parameters for Amazon_SQS_Model_SendMessage request or Amazon_SQS_Model_SendMessage object itself
     * @see Amazon_SQS_Model_SendMessage
     * @return Amazon_SQS_Model_SendMessageResponse Amazon_SQS_Model_SendMessageResponse
     *
     * @throws Amazon_SQS_Exception
     */
    public function sendMessage($request) 
    {
        require_once ('Amazon/SQS/Model/SendMessageResponse.php');
        return Amazon_SQS_Model_SendMessageResponse::fromXML($this->_invoke('SendMessage'));
    }


            
    /**
     * Set Queue Attributes 
     * Sets an attribute of a queue. Currently, you can set only the VisibilityTimeout attribute for a queue.
     *   
     * @see http://docs.amazonwebservices.com/AWSSimpleQueueService/2009-02-01/SQSDeveloperGuide/Query_QuerySetQueueAttributes.html      
     * @param mixed $request array of parameters for Amazon_SQS_Model_SetQueueAttributes request or Amazon_SQS_Model_SetQueueAttributes object itself
     * @see Amazon_SQS_Model_SetQueueAttributes
     * @return Amazon_SQS_Model_SetQueueAttributesResponse Amazon_SQS_Model_SetQueueAttributesResponse
     *
     * @throws Amazon_SQS_Exception
     */
    public function setQueueAttributes($request) 
    {
        require_once ('Amazon/SQS/Model/SetQueueAttributesResponse.php');
        return Amazon_SQS_Model_SetQueueAttributesResponse::fromXML($this->_invoke('SetQueueAttributes'));
    }

    // Private API ------------------------------------------------------------//

    private function _invoke($actionName)
    {
        return $xml = file_get_contents('Amazon/SQS/Mock/' . $actionName . 'Response.xml', /** search include path */ TRUE);
    }
}