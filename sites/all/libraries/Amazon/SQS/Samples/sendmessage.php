<?php


require_once ('Amazon/SQS/Model/SendMessageRequest.php');
$request = new Amazon_SQS_Model_SendMessageRequest();
$request->setQueueUrl('queue URL you received from CreateQueue call');
$request->setMessageBody('This is my message text.');
invokeSendMessage($service, $request);


?>