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
require_once dirname(__FILE__).'/Interface.php';


/**
 * Amazon Simple Queue Service (Amazon SQS) offers a reliable, highly scalable hosted queue for storing messages as they travel between computers. By using Amazon SQS, developers can simply move data between distributed application components performing different tasks, without losing messages or requiring each component to be always available.  Amazon SQS works by exposing Amazon's web-scale messaging infrastructure as a web service. Any computer on the Internet can add or read messages without any installed software or special firewall configurations. Components of applications using Amazon SQS can run independently, and do not need to be on the same network, developed with the same technologies, or running at the same time.
 * 
 * Amazon_SQS_Client is an implementation of Amazon_SQS
 *
 */
class Amazon_SQS_Client implements Amazon_SQS_Interface
{

    const SERVICE_VERSION = '2009-02-01';

    /** @var string */
    private  $_awsAccessKeyId = null;

    /** @var string */
    private  $_awsSecretAccessKey = null;

    /** @var array */
    private  $_config = array ('ServiceURL' => 'https://queue.amazonaws.com',
                               'UserAgent' => 'Amazon SQS PHP5 Library',
                               'SignatureVersion' => 2,
                               'SignatureMethod' => 'HmacSHA256',
                               'ProxyHost' => null,
                               'ProxyPort' => -1,
                               'MaxErrorRetry' => 3
                               );

    /**
     * Construct new Client
     *
     * @param string $awsAccessKeyId AWS Access Key ID
     * @param string $awsSecretAccessKey AWS Secret Access Key
     * @param array $config configuration options.
     * Valid configuration options are:
     * <ul>
     * <li>ServiceURL</li>
     * <li>UserAgent</li>
     * <li>SignatureVersion</li>
     * <li>TimesRetryOnError</li>
     * <li>ProxyHost</li>
     * <li>ProxyPort</li>
     * <li>MaxErrorRetry</li>
     * </ul>
     */
    public function __construct($awsAccessKeyId, $awsSecretAccessKey, $config = null)
    {
        iconv_set_encoding('output_encoding', 'UTF-8');
        iconv_set_encoding('input_encoding', 'UTF-8');
        iconv_set_encoding('internal_encoding', 'UTF-8');

        $this->_awsAccessKeyId = $awsAccessKeyId;
        $this->_awsSecretAccessKey = $awsSecretAccessKey;
        if (!is_null($config)) $this->_config = array_merge($this->_config, $config);
    }

    // Public API ------------------------------------------------------------//


            
    /**
     * Create Queue 
     * The CreateQueue action creates a new queue, or returns the URL of an existing one.  When you request CreateQueue, you provide a name for the queue. To successfully create a new queue, you must provide a name that is unique within the scope of your own queues. If you provide the name of an existing queue, a new queue isn't created and an error isn't returned. Instead, the request succeeds and the queue URL for the existing queue is returned. Exception: if you provide a value for DefaultVisibilityTimeout that is different from the value for the existing queue, you receive an error.
     * @see http://docs.amazonwebservices.com/AWSSimpleQueueService/2009-02-01/SQSDeveloperGuide/Query_QueryCreateQueue.html
     * @param mixed $request array of parameters for Amazon_SQS_Model_CreateQueueRequest request
     * or Amazon_SQS_Model_CreateQueueRequest object itself
     * @see Amazon_SQS_Model_CreateQueue
     * @return Amazon_SQS_Model_CreateQueueResponse Amazon_SQS_Model_CreateQueueResponse
     *
     * @throws Amazon_SQS_Exception
     */
    public function createQueue($request)
    {
        if (!$request instanceof Amazon_SQS_Model_CreateQueueRequest) {
            require_once dirname(__FILE__).'/Model/CreateQueueRequest.php';
            $request = new Amazon_SQS_Model_CreateQueueRequest($request);
        }
        require_once dirname(__FILE__).'/Model/CreateQueueResponse.php';
        return Amazon_SQS_Model_CreateQueueResponse::fromXML($this->_invoke($this->_convertCreateQueue($request)));
    }


            
    /**
     * List Queues 
     * The ListQueues action returns a list of your queues.
     * 
     * @see http://docs.amazonwebservices.com/AWSSimpleQueueService/2009-02-01/SQSDeveloperGuide/Query_QueryListQueues.html
     * @param mixed $request array of parameters for Amazon_SQS_Model_ListQueuesRequest request
     * or Amazon_SQS_Model_ListQueuesRequest object itself
     * @see Amazon_SQS_Model_ListQueues
     * @return Amazon_SQS_Model_ListQueuesResponse Amazon_SQS_Model_ListQueuesResponse
     *
     * @throws Amazon_SQS_Exception
     */
    public function listQueues($request)
    {
        if (!$request instanceof Amazon_SQS_Model_ListQueuesRequest) {
            require_once dirname(__FILE__).'/Model/ListQueuesRequest.php';
            $request = new Amazon_SQS_Model_ListQueuesRequest($request);
        }
        require_once dirname(__FILE__).'/Model/ListQueuesResponse.php';
        return Amazon_SQS_Model_ListQueuesResponse::fromXML($this->_invoke($this->_convertListQueues($request)));
    }


            
    /**
     * Add Permission 
     * Adds the specified permission(s) to a queue for the specified principal(s). This allows for sharing access to the queue.
     * 
     * @see http://docs.amazonwebservices.com/AWSSimpleQueueService/2009-02-01/SQSDeveloperGuide/Query_QueryAddPermission.html
     * @param mixed $request array of parameters for Amazon_SQS_Model_AddPermissionRequest request
     * or Amazon_SQS_Model_AddPermissionRequest object itself
     * @see Amazon_SQS_Model_AddPermission
     * @return Amazon_SQS_Model_AddPermissionResponse Amazon_SQS_Model_AddPermissionResponse
     *
     * @throws Amazon_SQS_Exception
     */
    public function addPermission($request)
    {
        if (!$request instanceof Amazon_SQS_Model_AddPermissionRequest) {
            require_once dirname(__FILE__).'/Model/AddPermissionRequest.php';
            $request = new Amazon_SQS_Model_AddPermissionRequest($request);
        }
        require_once dirname(__FILE__).'/Model/AddPermissionResponse.php';
        return Amazon_SQS_Model_AddPermissionResponse::fromXML($this->_invoke($this->_convertAddPermission($request)));
    }


            
    /**
     * Change Message Visibility 
     * The ChangeMessageVisibility action extends the read lock timeout of the specified message from the specified queue to the specified value.
     * 
     * @see http://docs.amazonwebservices.com/AWSSimpleQueueService/2009-02-01/SQSDeveloperGuide/Query_QueryChangeMessageVisibility.html
     * @param mixed $request array of parameters for Amazon_SQS_Model_ChangeMessageVisibilityRequest request
     * or Amazon_SQS_Model_ChangeMessageVisibilityRequest object itself
     * @see Amazon_SQS_Model_ChangeMessageVisibility
     * @return Amazon_SQS_Model_ChangeMessageVisibilityResponse Amazon_SQS_Model_ChangeMessageVisibilityResponse
     *
     * @throws Amazon_SQS_Exception
     */
    public function changeMessageVisibility($request)
    {
        if (!$request instanceof Amazon_SQS_Model_ChangeMessageVisibilityRequest) {
            require_once dirname(__FILE__).'/Model/ChangeMessageVisibilityRequest.php';
            $request = new Amazon_SQS_Model_ChangeMessageVisibilityRequest($request);
        }
        require_once dirname(__FILE__).'/Model/ChangeMessageVisibilityResponse.php';
        return Amazon_SQS_Model_ChangeMessageVisibilityResponse::fromXML($this->_invoke($this->_convertChangeMessageVisibility($request)));
    }


            
    /**
     * Delete Message 
     * The DeleteMessage action unconditionally removes the specified message from the specified queue. Even if the message is locked by another reader due to the visibility timeout setting, it is still deleted from the queue.
     * 
     * @see http://docs.amazonwebservices.com/AWSSimpleQueueService/2009-02-01/SQSDeveloperGuide/Query_QueryDeleteMessage.html
     * @param mixed $request array of parameters for Amazon_SQS_Model_DeleteMessageRequest request
     * or Amazon_SQS_Model_DeleteMessageRequest object itself
     * @see Amazon_SQS_Model_DeleteMessage
     * @return Amazon_SQS_Model_DeleteMessageResponse Amazon_SQS_Model_DeleteMessageResponse
     *
     * @throws Amazon_SQS_Exception
     */
    public function deleteMessage($request)
    {
        if (!$request instanceof Amazon_SQS_Model_DeleteMessageRequest) {
            require_once dirname(__FILE__).'/Model/DeleteMessageRequest.php';
            $request = new Amazon_SQS_Model_DeleteMessageRequest($request);
        }
        require_once dirname(__FILE__).'/Model/DeleteMessageResponse.php';
        return Amazon_SQS_Model_DeleteMessageResponse::fromXML($this->_invoke($this->_convertDeleteMessage($request)));
    }


            
    /**
     * Delete Queue 
     * This action unconditionally deletes the queue specified by the queue URL. Use this operation WITH CARE!  The queue is deleted even if it is NOT empty.
     * 
     * @see http://docs.amazonwebservices.com/AWSSimpleQueueService/2009-02-01/SQSDeveloperGuide/Query_QueryDeleteQueue.html
     * @param mixed $request array of parameters for Amazon_SQS_Model_DeleteQueueRequest request
     * or Amazon_SQS_Model_DeleteQueueRequest object itself
     * @see Amazon_SQS_Model_DeleteQueue
     * @return Amazon_SQS_Model_DeleteQueueResponse Amazon_SQS_Model_DeleteQueueResponse
     *
     * @throws Amazon_SQS_Exception
     */
    public function deleteQueue($request)
    {
        if (!$request instanceof Amazon_SQS_Model_DeleteQueueRequest) {
            require_once dirname(__FILE__).'/Model/DeleteQueueRequest.php';
            $request = new Amazon_SQS_Model_DeleteQueueRequest($request);
        }
        require_once dirname(__FILE__).'/Model/DeleteQueueResponse.php';
        return Amazon_SQS_Model_DeleteQueueResponse::fromXML($this->_invoke($this->_convertDeleteQueue($request)));
    }


            
    /**
     * Get Queue Attributes 
     * Gets one or all attributes of a queue. Queues currently have two attributes you can get: ApproximateNumberOfMessages and VisibilityTimeout.
     * 
     * @see http://docs.amazonwebservices.com/AWSSimpleQueueService/2009-02-01/SQSDeveloperGuide/Query_QueryGetQueueAttributes.html
     * @param mixed $request array of parameters for Amazon_SQS_Model_GetQueueAttributesRequest request
     * or Amazon_SQS_Model_GetQueueAttributesRequest object itself
     * @see Amazon_SQS_Model_GetQueueAttributes
     * @return Amazon_SQS_Model_GetQueueAttributesResponse Amazon_SQS_Model_GetQueueAttributesResponse
     *
     * @throws Amazon_SQS_Exception
     */
    public function getQueueAttributes($request)
    {
        if (!$request instanceof Amazon_SQS_Model_GetQueueAttributesRequest) {
            require_once dirname(__FILE__).'/Model/GetQueueAttributesRequest.php';
            $request = new Amazon_SQS_Model_GetQueueAttributesRequest($request);
        }
        require_once dirname(__FILE__).'/Model/GetQueueAttributesResponse.php';
        return Amazon_SQS_Model_GetQueueAttributesResponse::fromXML($this->_invoke($this->_convertGetQueueAttributes($request)));
    }


            
    /**
     * Remove Permission 
     * Removes the permission with the specified statement id from the queue.
     * 
     * @see http://docs.amazonwebservices.com/AWSSimpleQueueService/2009-02-01/SQSDeveloperGuide/Query_QueryRemovePermission.html
     * @param mixed $request array of parameters for Amazon_SQS_Model_RemovePermissionRequest request
     * or Amazon_SQS_Model_RemovePermissionRequest object itself
     * @see Amazon_SQS_Model_RemovePermission
     * @return Amazon_SQS_Model_RemovePermissionResponse Amazon_SQS_Model_RemovePermissionResponse
     *
     * @throws Amazon_SQS_Exception
     */
    public function removePermission($request)
    {
        if (!$request instanceof Amazon_SQS_Model_RemovePermissionRequest) {
            require_once DRUPAL_ROOT . '/sites/all/libraries/Amazon/SQS/Model/RemovePermissionRequest.php';
            $request = new Amazon_SQS_Model_RemovePermissionRequest($request);
        }
        require_once DRUPAL_ROOT . '/sites/all/libraries/Amazon/SQS/Model/RemovePermissionResponse.php';
        return Amazon_SQS_Model_RemovePermissionResponse::fromXML($this->_invoke($this->_convertRemovePermission($request)));
    }


            
    /**
     * Receive Message 
     * Retrieves one or more messages from the specified queue.  For each message returned, the response includes the message body; MD5 digest of the message body; receipt handle, which is the identifier you must provide when deleting the message; and message ID of each message. Messages returned by this action stay in the queue until you delete them. However, once a message is returned to a ReceiveMessage request, it is not returned on subsequent ReceiveMessage requests for the duration of the VisibilityTimeout. If you do not specify a VisibilityTimeout in the request, the overall visibility timeout for the queue is used for the returned messages.
     * 
     * @see http://docs.amazonwebservices.com/AWSSimpleQueueService/2009-02-01/SQSDeveloperGuide/Query_QueryReceiveMessage.html
     * @param mixed $request array of parameters for Amazon_SQS_Model_ReceiveMessageRequest request
     * or Amazon_SQS_Model_ReceiveMessageRequest object itself
     * @see Amazon_SQS_Model_ReceiveMessage
     * @return Amazon_SQS_Model_ReceiveMessageResponse Amazon_SQS_Model_ReceiveMessageResponse
     *
     * @throws Amazon_SQS_Exception
     */
    public function receiveMessage($request)
    {
        if (!$request instanceof Amazon_SQS_Model_ReceiveMessageRequest) {
            require_once DRUPAL_ROOT . '/sites/all/libraries/Amazon/SQS/Model/ReceiveMessageRequest.php';
            $request = new Amazon_SQS_Model_ReceiveMessageRequest($request);
        }
        require_once DRUPAL_ROOT . '/sites/all/libraries/Amazon/SQS/Model/ReceiveMessageResponse.php';
        return Amazon_SQS_Model_ReceiveMessageResponse::fromXML($this->_invoke($this->_convertReceiveMessage($request)));
    }


            
    /**
     * Send Message 
     * The SendMessage action delivers a message to the specified queue.
     * 
     * @see http://docs.amazonwebservices.com/AWSSimpleQueueService/2009-02-01/SQSDeveloperGuide/Query_QuerySendMessage.html
     * @param mixed $request array of parameters for Amazon_SQS_Model_SendMessageRequest request
     * or Amazon_SQS_Model_SendMessageRequest object itself
     * @see Amazon_SQS_Model_SendMessage
     * @return Amazon_SQS_Model_SendMessageResponse Amazon_SQS_Model_SendMessageResponse
     *
     * @throws Amazon_SQS_Exception
     */
    public function sendMessage($request)
    {
        if (!$request instanceof Amazon_SQS_Model_SendMessageRequest) {
            require_once DRUPAL_ROOT . '/sites/all/libraries/Amazon/SQS/Model/Amazon/SQS/Model/SendMessageRequest.php';
            $request = new Amazon_SQS_Model_SendMessageRequest($request);
        }
		require_once DRUPAL_ROOT . '/sites/all/libraries/Amazon/SQS/Interface.php';

        require_once DRUPAL_ROOT . '/sites/all/libraries/Amazon/SQS/Model/SendMessageResponse.php';
        return Amazon_SQS_Model_SendMessageResponse::fromXML($this->_invoke($this->_convertSendMessage($request)));
    }


            
    /**
     * Set Queue Attributes 
     * Sets an attribute of a queue. Currently, you can set only the VisibilityTimeout attribute for a queue.
     * 
     * @see http://docs.amazonwebservices.com/AWSSimpleQueueService/2009-02-01/SQSDeveloperGuide/Query_QuerySetQueueAttributes.html
     * @param mixed $request array of parameters for Amazon_SQS_Model_SetQueueAttributesRequest request
     * or Amazon_SQS_Model_SetQueueAttributesRequest object itself
     * @see Amazon_SQS_Model_SetQueueAttributes
     * @return Amazon_SQS_Model_SetQueueAttributesResponse Amazon_SQS_Model_SetQueueAttributesResponse
     *
     * @throws Amazon_SQS_Exception
     */
    public function setQueueAttributes($request)
    {
        if (!$request instanceof Amazon_SQS_Model_SetQueueAttributesRequest) {
            require_once DRUPAL_ROOT . '/sites/all/libraries/Amazon/SQS/Model/Amazon/SQS/Model/SetQueueAttributesRequest.php';
            $request = new Amazon_SQS_Model_SetQueueAttributesRequest($request);
        }
        require_once DRUPAL_ROOT . '/sites/all/libraries/Amazon/SQS/Model/SetQueueAttributesResponse.php';
        return Amazon_SQS_Model_SetQueueAttributesResponse::fromXML($this->_invoke($this->_convertSetQueueAttributes($request)));
    }

        // Private API ------------------------------------------------------------//

    /**
     * Invoke request and return response
     */
    private function _invoke(array $parameters)
    {
        $actionName = $parameters["Action"];
        $queueUrl = array_key_exists("QueueUrl",$parameters) ? $parameters["QueueUrl"] : $this->_config["ServiceURL"];
        if (array_key_exists("QueueUrl",$parameters)) {
             unset($parameters["QueueUrl"]);
        }

        $response = array();
        $responseBody = null;
        $statusCode = 200;

        /* Submit the request and read response body */
        try {

            /* Add required request parameters */
            $parameters = $this->_addRequiredParameters($parameters, $queueUrl);

            $shouldRetry = true;
            $retries = 0;
            do {
                try {
                        $response = $this->_httpPost($parameters, $queueUrl);
                        if ($response['Status'] === 200) {
                            $shouldRetry = false;
                        } else {
                            if ($response['Status'] === 500 || $response['Status'] === 503) {
                                $shouldRetry = true;
                                $this->_pauseOnRetry(++$retries, $response['Status']);
                            } else {
                                throw $this->_reportAnyErrors($response['ResponseBody'], $response['Status']);
                            }
                       }
                /* Rethrow on deserializer error */
                } catch (Exception $e) {
                    require_once DRUPAL_ROOT . '/sites/all/libraries/Amazon/SQS/Exception.php';
                    if ($e instanceof Amazon_SQS_Exception) {
                        throw $e;
                    } else {
                        require_once DRUPAL_ROOT . '/sites/all/libraries/Amazon/SQS/Exception.php';
                        throw new Amazon_SQS_Exception(array('Exception' => $e, 'Message' => $e->getMessage()));
                    }
                }

            } while ($shouldRetry);

        } catch (Amazon_SQS_Exception $se) {
            throw $se;
        } catch (Exception $t) {
            throw new Amazon_SQS_Exception(array('Exception' => $t, 'Message' => $t->getMessage()));
        }

        return $response['ResponseBody'];
    }

    /**
     * Look for additional error strings in the response and return formatted exception
     */
    private function _reportAnyErrors($responseBody, $status, Exception $e =  null)
    {
        $ex = null;
        if (!is_null($responseBody) && strpos($responseBody, '<') === 0) {
            if (preg_match('@<RequestId>(.*)</RequestId>.*<Error><Code>(.*)</Code><Message>(.*)</Message></Error>.*(<Error>)?@mi',
                $responseBody, $errorMatcherOne)) {

                $requestId = $errorMatcherOne[1];
                $code = $errorMatcherOne[2];
                $message = $errorMatcherOne[3];

                require_once dirname(__FILE__).'/Exception.php';
                $ex = new Amazon_SQS_Exception(array ('Message' => $message, 'StatusCode' => $status, 'ErrorCode' => $code,
                                                           'ErrorType' => 'Unknown', 'RequestId' => $requestId, 'XML' => $responseBody));

            } elseif (preg_match('@<Error><Code>(.*)</Code><Message>(.*)</Message></Error>.*(<Error>)?.*<RequestID>(.*)</RequestID>@mi',
                $responseBody, $errorMatcherTwo)) {

                $code = $errorMatcherTwo[1];
                $message = $errorMatcherTwo[2];
                $requestId = $errorMatcherTwo[4];
                require_once dirname(__FILE__).'/Exception.php';
                $ex = new Amazon_SQS_Exception(array ('Message' => $message, 'StatusCode' => $status, 'ErrorCode' => $code,
                                                              'ErrorType' => 'Unknown', 'RequestId' => $requestId, 'XML' => $responseBody));
            } elseif (preg_match('@<Error><Type>(.*)</Type><Code>(.*)</Code><Message>(.*)</Message>.*</Error>.*(<Error>)?.*<RequestId>(.*)</RequestId>@mi',
                $responseBody, $errorMatcherThree)) {

                $type = $errorMatcherThree[1];
                $code = $errorMatcherThree[2];
                $message = $errorMatcherThree[3];
                $requestId = $errorMatcherThree[5];
                require_once DRUPAL_ROOT . '/sites/all/libraries/Amazon/SQS/Exception.php';
                $ex = new Amazon_SQS_Exception(array ('Message' => $message, 'StatusCode' => $status, 'ErrorCode' => $code,
                                                              'ErrorType' => $type, 'RequestId' => $requestId, 'XML' => $responseBody));

            } else {
                require_once dirname(__FILE__).'/Exception.php';
                $ex = new Amazon_SQS_Exception(array('Message' => 'Internal Error', 'StatusCode' => $status));
            }
        } else {
            require_once dirname(__FILE__).'/Exception.php';
            $ex = new Amazon_SQS_Exception(array('Message' => 'Internal Error', 'StatusCode' => $status));
        }
        return $ex;
    }



    /**
     * Perform HTTP post with exponential retries on error 500 and 503
     *
     */
    private function _httpPost(array $parameters, $queueUrl)
    {

        $query = $this->_getParametersAsString($parameters);
        $url = parse_url ($queueUrl);
        $post  = "POST " . $queueUrl . " HTTP/1.0\r\n";
        $post .= "Host: " . $url['host'] . "\r\n";
        $post .= "Content-Type: application/x-www-form-urlencoded; charset=utf-8\r\n";
        $post .= "Content-Length: " . strlen($query) . "\r\n";
        $post .= "User-Agent: " . $this->_config['UserAgent'] . "\r\n";
        $post .= "\r\n";
        $post .= $query;

        $port = array_key_exists('port',$url) ? $url['port'] : null;
        $scheme = '';

        switch ($url['scheme']) {
            case 'https':
                $scheme = 'ssl://';
                $port = $port === null ? 443 : $port;
                break;
            default:
                $scheme = '';
                $port = $port === null ? 80 : $port;
        }

        $response = '';
        if ($socket = @fsockopen($scheme . $url['host'], $port, $errno, $errstr, 10)) {

            fwrite($socket, $post);

            while (!feof($socket)) {
                $response .= fgets($socket, 1160);
            }
            fclose($socket);

            list($other, $responseBody) = explode("\r\n\r\n", $response, 2);
            $other = preg_split("/\r\n|\n|\r/", $other);
            list($protocol, $code, $text) = explode(' ', trim(array_shift($other)), 3);
        } else {
            throw new Exception ("Unable to establish connection to host " . $url['host'] . " $errstr");
        }
        return array ('Status' => (int)$code, 'ResponseBody' => $responseBody);
    }

    /**
     * Exponential sleep on failed request
     * @param retries current retry
     * @throws Amazon_SQS_Exception if maximum number of retries has been reached
     */
    private function _pauseOnRetry($retries, $status)
    {
        if ($retries <= $this->_config['MaxErrorRetry']) {
            $delay = (int) (pow(4, $retries) * 100000) ;
            usleep($delay);
        } else {
            require_once dirname(__FILE__).'/Exception.php';
            throw new Amazon_SQS_Exception (array ('Message' => "Maximum number of retry attempts reached :  $retries", 'StatusCode' => $status));
        }
    }

    /**
     * Add authentication related and version parameters
     */
    private function _addRequiredParameters(array $parameters, $queueUrl)
    {
        $parameters['AWSAccessKeyId'] = $this->_awsAccessKeyId;
        $parameters['Timestamp'] = $this->_getFormattedTimestamp();
        $parameters['Version'] = self::SERVICE_VERSION;
        $parameters['SignatureVersion'] = $this->_config['SignatureVersion'];
        if ($parameters['SignatureVersion'] > 1) {
            $parameters['SignatureMethod'] = $this->_config['SignatureMethod'];
        }
        $parameters['Signature'] = $this->_signParameters($parameters, $queueUrl, $this->_awsSecretAccessKey);

        return $parameters;
    }

    /**
     * Convert paremeters to Url encoded query string
     */
    private function _getParametersAsString(array $parameters)
    {
        $queryParameters = array();
        foreach ($parameters as $key => $value) {
            $queryParameters[] = $key . '=' . $this->_urlencode($value);
        }
        return implode('&', $queryParameters);
    }


    /**
     * Computes RFC 2104-compliant HMAC signature for request parameters
     * Implements AWS Signature, as per following spec:
     *
     * If Signature Version is 0, it signs concatenated Action and Timestamp
     *
     * If Signature Version is 1, it performs the following:
     *
     * Sorts all  parameters (including SignatureVersion and excluding Signature,
     * the value of which is being created), ignoring case.
     *
     * Iterate over the sorted list and append the parameter name (in original case)
     * and then its value. It will not URL-encode the parameter values before
     * constructing this string. There are no separators.
     *
     * If Signature Version is 2, string to sign is based on following:
     *
     *    1. The HTTP Request Method followed by an ASCII newline (%0A)
     *    2. The HTTP Host header in the form of lowercase host, followed by an ASCII newline.
     *    3. The URL encoded HTTP absolute path component of the URI
     *       (up to but not including the query string parameters);
     *       if this is empty use a forward '/'. This parameter is followed by an ASCII newline.
     *    4. The concatenation of all query string components (names and values)
     *       as UTF-8 characters which are URL encoded as per RFC 3986
     *       (hex characters MUST be uppercase), sorted using lexicographic byte ordering.
     *       Parameter names are separated from their values by the '=' character
     *       (ASCII character 61), even if the value is empty.
     *       Pairs of parameter and values are separated by the '&' character (ASCII code 38).
     *
     */
    private function _signParameters(array $parameters, $queueUrl, $key) {
        $signatureVersion = $parameters['SignatureVersion'];
        $algorithm = "HmacSHA1";
        $stringToSign = null;
        if (0 === $signatureVersion) {
            $stringToSign = $this->_calculateStringToSignV0($parameters);
        } else if (1 === $signatureVersion) {
            $stringToSign = $this->_calculateStringToSignV1($parameters);
        } else if (2 === $signatureVersion) {
            $algorithm = $this->_config['SignatureMethod'];
            $parameters['SignatureMethod'] = $algorithm;
            $stringToSign = $this->_calculateStringToSignV2($parameters, $queueUrl);
        } else {
            throw new Exception("Invalid Signature Version specified");
        }
        return $this->_sign($stringToSign, $key, $algorithm);
    }

    /**
     * Calculate String to Sign for SignatureVersion 0
     * @param array $parameters request parameters
     * @return String to Sign
     */
    private function _calculateStringToSignV0(array $parameters) {
        return $parameters['Action'] .  $parameters['Timestamp'];
    }

    /**
     * Calculate String to Sign for SignatureVersion 1
     * @param array $parameters request parameters
     * @return String to Sign
     */
    private function _calculateStringToSignV1(array $parameters) {
        $data = '';
        uksort($parameters, 'strcasecmp');
        foreach ($parameters as $parameterName => $parameterValue) {
            $data .= $parameterName . $parameterValue;
        }
        return $data;
    }

    /**
     * Calculate String to Sign for SignatureVersion 2
     * @param array $parameters request parameters
     * @return String to Sign
     */
    private function _calculateStringToSignV2(array $parameters, $queueUrl) {
        $data = 'POST';
        $data .= "\n";
        $endpoint = parse_url ($queueUrl);
        $data .= $endpoint['host'];
        $data .= "\n";
        $uri = array_key_exists('path', $endpoint) ? $endpoint['path'] : null;
        if (!isset ($uri)) {
        	$uri = "/";
        }
		$uriencoded = implode("/", array_map(array($this, "_urlencode"), explode("/", $uri)));
        $data .= $uriencoded;
        $data .= "\n";
        uksort($parameters, 'strcmp');
        $data .= $this->_getParametersAsString($parameters);
        return $data;
    }

    private function _urlencode($value) {
		return str_replace('%7E', '~', rawurlencode($value));
    }


    /**
     * Computes RFC 2104-compliant HMAC signature.
     */
    private function _sign($data, $key, $algorithm)
    {
        if ($algorithm === 'HmacSHA1') {
            $hash = 'sha1';
        } else if ($algorithm === 'HmacSHA256') {
            $hash = 'sha256';
        } else {
            throw new Exception ("Non-supported signing method specified");
        }
        return base64_encode(
            hash_hmac($hash, $data, $key, true)
        );
    }


    /**
     * Formats date as ISO 8601 timestamp
     */
    private function _getFormattedTimestamp()
    {
        return gmdate("Y-m-d\TH:i:s.\\0\\0\\0\\Z", time());
    }


        
    /**
     * Convert CreateQueueRequest to name value pairs
     */
    private function _convertCreateQueue($request) {
        
        $parameters = array();
        $parameters['Action'] = 'CreateQueue';
        if ($request->isSetQueueName()) {
            $parameters['QueueName'] =  $request->getQueueName();
        }
        if ($request->isSetDefaultVisibilityTimeout()) {
            $parameters['DefaultVisibilityTimeout'] =  $request->getDefaultVisibilityTimeout();
        }
        foreach ($request->getAttribute() as $attributecreateQueueRequestIndex => $attributecreateQueueRequest) {
            if ($attributecreateQueueRequest->isSetName()) {
                $parameters['Attribute' . '.'  . ($attributecreateQueueRequestIndex + 1) . '.' . 'Name'] =  $attributecreateQueueRequest->getName();
            }
            if ($attributecreateQueueRequest->isSetValue()) {
                $parameters['Attribute' . '.'  . ($attributecreateQueueRequestIndex + 1) . '.' . 'Value'] =  $attributecreateQueueRequest->getValue();
            }

        }

        return $parameters;
    }
        
                        
    /**
     * Convert ListQueuesRequest to name value pairs
     */
    private function _convertListQueues($request) {
        
        $parameters = array();
        $parameters['Action'] = 'ListQueues';
        if ($request->isSetQueueNamePrefix()) {
            $parameters['QueueNamePrefix'] =  $request->getQueueNamePrefix();
        }
        foreach ($request->getAttribute() as $attributelistQueuesRequestIndex => $attributelistQueuesRequest) {
            if ($attributelistQueuesRequest->isSetName()) {
                $parameters['Attribute' . '.'  . ($attributelistQueuesRequestIndex + 1) . '.' . 'Name'] =  $attributelistQueuesRequest->getName();
            }
            if ($attributelistQueuesRequest->isSetValue()) {
                $parameters['Attribute' . '.'  . ($attributelistQueuesRequestIndex + 1) . '.' . 'Value'] =  $attributelistQueuesRequest->getValue();
            }

        }

        return $parameters;
    }
        
                        
    /**
     * Convert ChangeMessageVisibilityRequest to name value pairs
     */
    private function _convertChangeMessageVisibility($request) {
        
        $parameters = array();
        $parameters['Action'] = 'ChangeMessageVisibility';
        if ($request->isSetQueueUrl()) {
            $parameters['QueueUrl'] =  $request->getQueueUrl();
        }
        if ($request->isSetReceiptHandle()) {
            $parameters['ReceiptHandle'] =  $request->getReceiptHandle();
        }
        if ($request->isSetVisibilityTimeout()) {
            $parameters['VisibilityTimeout'] =  $request->getVisibilityTimeout();
        }
        foreach ($request->getAttribute() as $attributechangeMessageVisibilityRequestIndex => $attributechangeMessageVisibilityRequest) {
            if ($attributechangeMessageVisibilityRequest->isSetName()) {
                $parameters['Attribute' . '.'  . ($attributechangeMessageVisibilityRequestIndex + 1) . '.' . 'Name'] =  $attributechangeMessageVisibilityRequest->getName();
            }
            if ($attributechangeMessageVisibilityRequest->isSetValue()) {
                $parameters['Attribute' . '.'  . ($attributechangeMessageVisibilityRequestIndex + 1) . '.' . 'Value'] =  $attributechangeMessageVisibilityRequest->getValue();
            }

        }

        return $parameters;
    }
        
                        
    /**
     * Convert DeleteMessageRequest to name value pairs
     */
    private function _convertDeleteMessage($request) {
        
        $parameters = array();
        $parameters['Action'] = 'DeleteMessage';
        if ($request->isSetQueueUrl()) {
            $parameters['QueueUrl'] =  $request->getQueueUrl();
        }
        if ($request->isSetReceiptHandle()) {
            $parameters['ReceiptHandle'] =  $request->getReceiptHandle();
        }
        foreach ($request->getAttribute() as $attributedeleteMessageRequestIndex => $attributedeleteMessageRequest) {
            if ($attributedeleteMessageRequest->isSetName()) {
                $parameters['Attribute' . '.'  . ($attributedeleteMessageRequestIndex + 1) . '.' . 'Name'] =  $attributedeleteMessageRequest->getName();
            }
            if ($attributedeleteMessageRequest->isSetValue()) {
                $parameters['Attribute' . '.'  . ($attributedeleteMessageRequestIndex + 1) . '.' . 'Value'] =  $attributedeleteMessageRequest->getValue();
            }

        }

        return $parameters;
    }
        
                        
    /**
     * Convert DeleteQueueRequest to name value pairs
     */
    private function _convertDeleteQueue($request) {
        
        $parameters = array();
        $parameters['Action'] = 'DeleteQueue';
        if ($request->isSetQueueUrl()) {
            $parameters['QueueUrl'] =  $request->getQueueUrl();
        }
        foreach ($request->getAttribute() as $attributedeleteQueueRequestIndex => $attributedeleteQueueRequest) {
            if ($attributedeleteQueueRequest->isSetName()) {
                $parameters['Attribute' . '.'  . ($attributedeleteQueueRequestIndex + 1) . '.' . 'Name'] =  $attributedeleteQueueRequest->getName();
            }
            if ($attributedeleteQueueRequest->isSetValue()) {
                $parameters['Attribute' . '.'  . ($attributedeleteQueueRequestIndex + 1) . '.' . 'Value'] =  $attributedeleteQueueRequest->getValue();
            }

        }

        return $parameters;
    }
        
                        
    /**
     * Convert GetQueueAttributesRequest to name value pairs
     */
    private function _convertGetQueueAttributes($request) {
        
        $parameters = array();
        $parameters['Action'] = 'GetQueueAttributes';
        if ($request->isSetQueueUrl()) {
            $parameters['QueueUrl'] =  $request->getQueueUrl();
        }
        foreach  ($request->getAttributeName() as $attributeNamegetQueueAttributesRequestIndex => $attributeNamegetQueueAttributesRequest) {
            $parameters['AttributeName' . '.'  . ($attributeNamegetQueueAttributesRequestIndex + 1)] =  $attributeNamegetQueueAttributesRequest;
        }

        return $parameters;
    }
        
                        
    /**
     * Convert ReceiveMessageRequest to name value pairs
     */
    private function _convertReceiveMessage($request) {
        
        $parameters = array();
        $parameters['Action'] = 'ReceiveMessage';
        if ($request->isSetQueueUrl()) {
            $parameters['QueueUrl'] =  $request->getQueueUrl();
        }
        if ($request->isSetMaxNumberOfMessages()) {
            $parameters['MaxNumberOfMessages'] =  $request->getMaxNumberOfMessages();
        }
        if ($request->isSetVisibilityTimeout()) {
            $parameters['VisibilityTimeout'] =  $request->getVisibilityTimeout();
        }
        foreach  ($request->getAttributeName() as $attributeNamereceiveMessageRequestIndex => $attributeNamereceiveMessageRequest) {
            $parameters['AttributeName' . '.'  . ($attributeNamereceiveMessageRequestIndex + 1)] =  $attributeNamereceiveMessageRequest;
        }

        return $parameters;
    }
        
                        
    /**
     * Convert SendMessageRequest to name value pairs
     */
    private function _convertSendMessage($request) {
        
        $parameters = array();
        $parameters['Action'] = 'SendMessage';
        if ($request->isSetQueueUrl()) {
            $parameters['QueueUrl'] =  $request->getQueueUrl();
        }
        if ($request->isSetMessageBody()) {
            $parameters['MessageBody'] =  $request->getMessageBody();
        }
        foreach ($request->getAttribute() as $attributesendMessageRequestIndex => $attributesendMessageRequest) {
            if ($attributesendMessageRequest->isSetName()) {
                $parameters['Attribute' . '.'  . ($attributesendMessageRequestIndex + 1) . '.' . 'Name'] =  $attributesendMessageRequest->getName();
            }
            if ($attributesendMessageRequest->isSetValue()) {
                $parameters['Attribute' . '.'  . ($attributesendMessageRequestIndex + 1) . '.' . 'Value'] =  $attributesendMessageRequest->getValue();
            }

        }

        return $parameters;
    }
        
                        
    /**
     * Convert SetQueueAttributesRequest to name value pairs
     */
    private function _convertSetQueueAttributes($request) {
        
        $parameters = array();
        $parameters['Action'] = 'SetQueueAttributes';
        if ($request->isSetQueueUrl()) {
            $parameters['QueueUrl'] =  $request->getQueueUrl();
        }
        foreach ($request->getAttribute() as $attributesetQueueAttributesRequestIndex => $attributesetQueueAttributesRequest) {
            if ($attributesetQueueAttributesRequest->isSetName()) {
                $parameters['Attribute' . '.'  . ($attributesetQueueAttributesRequestIndex + 1) . '.' . 'Name'] =  $attributesetQueueAttributesRequest->getName();
            }
            if ($attributesetQueueAttributesRequest->isSetValue()) {
                $parameters['Attribute' . '.'  . ($attributesetQueueAttributesRequestIndex + 1) . '.' . 'Value'] =  $attributesetQueueAttributesRequest->getValue();
            }

        }

        return $parameters;
    }
        
                        
    /**
     * Convert AddPermissionRequest to name value pairs
     */
    private function _convertAddPermission($request) {
        
        $parameters = array();
        $parameters['Action'] = 'AddPermission';
        if ($request->isSetQueueUrl()) {
            $parameters['QueueUrl'] =  $request->getQueueUrl();
        }
        if ($request->isSetLabel()) {
            $parameters['Label'] =  $request->getLabel();
        }
        foreach  ($request->getAWSAccountId() as $AWSAccountIdaddPermissionRequestIndex => $AWSAccountIdaddPermissionRequest) {
            $parameters['AWSAccountId' . '.'  . ($AWSAccountIdaddPermissionRequestIndex + 1)] =  $AWSAccountIdaddPermissionRequest;
        }
        foreach  ($request->getActionName() as $actionNameaddPermissionRequestIndex => $actionNameaddPermissionRequest) {
            $parameters['ActionName' . '.'  . ($actionNameaddPermissionRequestIndex + 1)] =  $actionNameaddPermissionRequest;
        }

        return $parameters;
    }
        
                        
    /**
     * Convert RemovePermissionRequest to name value pairs
     */
    private function _convertRemovePermission($request) {
        
        $parameters = array();
        $parameters['Action'] = 'RemovePermission';
        if ($request->isSetQueueUrl()) {
            $parameters['QueueUrl'] =  $request->getQueueUrl();
        }
        if ($request->isSetLabel()) {
            $parameters['Label'] =  $request->getLabel();
        }

        return $parameters;
    }
        
                                                                                                

}