<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Shihab,Department Of Computer Science & Engineering,DU
 * Date: 8/24/13
 * Time: 1:18 AM
 * To change this template use File | Settings | File Templates.
 */

class MessageEntity {

    var $senderName;
    var $senderEmail;
    var $receiverName;
    var $receiverEmail;
    var $message;

    function __construct($message, $receiverEmail, $receiverName, $senderEmail, $senderName)
    {
        $this->message = $message;
        $this->receiverEmail = $receiverEmail;
        $this->receiverName = $receiverName;
        $this->senderEmail = $senderEmail;
        $this->senderName = $senderName;
    }

    /**
     * @param mixed $message
     */
    public function setMessage($message)
    {
        $this->message = $message;
    }

    /**
     * @return mixed
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @param mixed $receiverEmail
     */
    public function setReceiverEmail($receiverEmail)
    {
        $this->receiverEmail = $receiverEmail;
    }

    /**
     * @return mixed
     */
    public function getReceiverEmail()
    {
        return $this->receiverEmail;
    }

    /**
     * @param mixed $receiverName
     */
    public function setReceiverName($receiverName)
    {
        $this->receiverName = $receiverName;
    }

    /**
     * @return mixed
     */
    public function getReceiverName()
    {
        return $this->receiverName;
    }

    /**
     * @param mixed $senderEmail
     */
    public function setSenderEmail($senderEmail)
    {
        $this->senderEmail = $senderEmail;
    }

    /**
     * @return mixed
     */
    public function getSenderEmail()
    {
        return $this->senderEmail;
    }

    /**
     * @param mixed $senderName
     */
    public function setSenderName($senderName)
    {
        $this->senderName = $senderName;
    }

    /**
     * @return mixed
     */
    public function getSenderName()
    {
        return $this->senderName;
    }


}