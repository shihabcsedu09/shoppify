<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Shihab,Department Of Computer Science & Engineering,DU
 * Date: 8/31/13
 * Time: 11:11 PM
 * To change this template use File | Settings | File Templates.
 */

class ProductCommentEntity
{

    var $userId;
    var $commentPostedBy;
    var $postTime;
    var $productComments;
    var $avatar;

    function __construct($userId, $productComments, $postTime, $commentPostedBy, $avatar)
    {
        $this->userId = $userId;
        $this->productComments = $productComments;
        $this->postTime = $postTime;
        $this->commentPostedBy = $commentPostedBy;
        $this->avatar = $avatar;
    }

    /**
     * @param mixed $userId
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
    }

    /**
     * @return mixed
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * @param mixed $productComments
     */
    public function setProductComments($productComments)
    {
        $this->productComments = $productComments;
    }

    /**
     * @return mixed
     */
    public function getProductComments()
    {
        return $this->productComments;
    }

    /**
     * @param mixed $postTime
     */
    public function setPostTime($postTime)
    {
        $this->postTime = $postTime;
    }

    /**
     * @return mixed
     */
    public function getPostTime()
    {
        return $this->postTime;
    }

    /**
     * @param mixed $commentPostedBy
     */
    public function setCommentPostedBy($commentPostedBy)
    {
        $this->commentPostedBy = $commentPostedBy;
    }

    /**
     * @return mixed
     */
    public function getCommentPostedBy()
    {
        return $this->commentPostedBy;
    }

    /**
     * @param mixed $avatar
     */
    public function setAvatar($avatar)
    {
        $this->avatar = $avatar;
    }

    /**
     * @return mixed
     */
    public function getAvatar()
    {
        return $this->avatar;
    }



}