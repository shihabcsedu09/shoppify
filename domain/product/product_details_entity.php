<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Shihab,Department Of Computer Science & Engineering,DU
 * Date: 8/24/13
 * Time: 12:39 AM
 * To change this template use File | Settings | File Templates.
 */

class ProductDetailsEntity {

    var $productId;
    var $productName;
    var $categoryName;
    var $productImage = array();
    var $productDescription = array();
    var $sellerFullName;
    var $sellerEmail;
    var $sellerImage;
    var $sellerCellNo;
    var $fixedOrBid;
    var $sellerReputation;
    var $productLongitude;
    var $productLatitude;
    var $biddingStartTime;
    var $biddingEndTime;
    var $biddingEnd;
    var $minimumBiddingPrice;
    var $auctionId;
    var $fixedPrice;
    var $postTime;
    var $ups;
    var $downs;
    var $sold;
    var $comments=array();

    function __construct($productId, $productName, $productImage, $productDescription, $categoryName, $sellerFullName, $sellerEmail, $sellerImage, $sellerCellNo, $sellerReputation, $productLongitude, $productLatitude, $fixedOrBid, $biddingStartTime, $biddingEndTime, $biddingEnd, $minimumBiddingPrice, $auctionId, $fixedPrice, $postTime, $ups, $downs, $sold, $comments)
    {
        $this->productId = $productId;
        $this->productName = $productName;
        $this->productImage = $productImage;
        $this->productDescription = $productDescription;
        $this->categoryName = $categoryName;
        $this->sellerFullName = $sellerFullName;
        $this->sellerEmail = $sellerEmail;
        $this->sellerImage = $sellerImage;
        $this->sellerCellNo = $sellerCellNo;
        $this->sellerReputation = $sellerReputation;
        $this->productLongitude = $productLongitude;
        $this->productLatitude = $productLatitude;
        $this->fixedOrBid = $fixedOrBid;
        $this->biddingStartTime = $biddingStartTime;
        $this->biddingEndTime = $biddingEndTime;
        $this->biddingEnd = $biddingEnd;
        $this->minimumBiddingPrice = $minimumBiddingPrice;
        $this->auctionId = $auctionId;
        $this->fixedPrice = $fixedPrice;
        $this->postTime = $postTime;
        $this->ups = $ups;
        $this->downs = $downs;
        $this->sold = $sold;
        $this->comments = $comments;
    }


    /**
     * @param mixed $auctionId
     */
    public function setAuctionId($auctionId)
    {
        $this->auctionId = $auctionId;
    }

    /**
     * @return mixed
     */
    public function getAuctionId()
    {
        return $this->auctionId;
    }

    /**
     * @param mixed $biddingEnd
     */
    public function setBiddingEnd($biddingEnd)
    {
        $this->biddingEnd = $biddingEnd;
    }

    /**
     * @return mixed
     */
    public function getBiddingEnd()
    {
        return $this->biddingEnd;
    }

    /**
     * @param mixed $biddingEndTime
     */
    public function setBiddingEndTime($biddingEndTime)
    {
        $this->biddingEndTime = $biddingEndTime;
    }

    /**
     * @return mixed
     */
    public function getBiddingEndTime()
    {
        return $this->biddingEndTime;
    }

    /**
     * @param mixed $biddingStartTime
     */
    public function setBiddingStartTime($biddingStartTime)
    {
        $this->biddingStartTime = $biddingStartTime;
    }

    /**
     * @return mixed
     */
    public function getBiddingStartTime()
    {
        return $this->biddingStartTime;
    }

    /**
     * @param mixed $categoryName
     */
    public function setCategoryName($categoryName)
    {
        $this->categoryName = $categoryName;
    }

    /**
     * @return mixed
     */
    public function getCategoryName()
    {
        return $this->categoryName;
    }

    /**
     * @param array $comments
     */
    public function setComments($comments)
    {
        $this->comments = $comments;
    }

    /**
     * @return array
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * @param mixed $downs
     */
    public function setDowns($downs)
    {
        $this->downs = $downs;
    }

    /**
     * @return mixed
     */
    public function getDowns()
    {
        return $this->downs;
    }

    /**
     * @param mixed $fixedOrBid
     */
    public function setFixedOrBid($fixedOrBid)
    {
        $this->fixedOrBid = $fixedOrBid;
    }

    /**
     * @return mixed
     */
    public function getFixedOrBid()
    {
        return $this->fixedOrBid;
    }

    /**
     * @param mixed $fixedPrice
     */
    public function setFixedPrice($fixedPrice)
    {
        $this->fixedPrice = $fixedPrice;
    }

    /**
     * @return mixed
     */
    public function getFixedPrice()
    {
        return $this->fixedPrice;
    }

    /**
     * @param mixed $minimumBiddingPrice
     */
    public function setMinimumBiddingPrice($minimumBiddingPrice)
    {
        $this->minimumBiddingPrice = $minimumBiddingPrice;
    }

    /**
     * @return mixed
     */
    public function getMinimumBiddingPrice()
    {
        return $this->minimumBiddingPrice;
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
     * @param mixed $productId
     */
    public function setProductId($productId)
    {
        $this->productId = $productId;
    }

    /**
     * @return mixed
     */
    public function getProductId()
    {
        return $this->productId;
    }

    /**
     * @param array $productImage
     */
    public function setProductImage($productImage)
    {
        $this->productImage = $productImage;
    }

    /**
     * @return array
     */
    public function getProductImage()
    {
        return $this->productImage;
    }

    /**
     * @param mixed $productLatitude
     */
    public function setProductLatitude($productLatitude)
    {
        $this->productLatitude = $productLatitude;
    }

    /**
     * @return mixed
     */
    public function getProductLatitude()
    {
        return $this->productLatitude;
    }

    /**
     * @param mixed $productLongitude
     */
    public function setProductLongitude($productLongitude)
    {
        $this->productLongitude = $productLongitude;
    }

    /**
     * @return mixed
     */
    public function getProductLongitude()
    {
        return $this->productLongitude;
    }

    /**
     * @param mixed $productName
     */
    public function setProductName($productName)
    {
        $this->productName = $productName;
    }

    /**
     * @return mixed
     */
    public function getProductName()
    {
        return $this->productName;
    }

    /**
     * @param mixed $sellerCellNo
     */
    public function setSellerCellNo($sellerCellNo)
    {
        $this->sellerCellNo = $sellerCellNo;
    }

    /**
     * @return mixed
     */
    public function getSellerCellNo()
    {
        return $this->sellerCellNo;
    }

    /**
     * @param mixed $sellerEmail
     */
    public function setSellerEmail($sellerEmail)
    {
        $this->sellerEmail = $sellerEmail;
    }

    /**
     * @return mixed
     */
    public function getSellerEmail()
    {
        return $this->sellerEmail;
    }

    /**
     * @param mixed $sellerFullName
     */
    public function setSellerFullName($sellerFullName)
    {
        $this->sellerFullName = $sellerFullName;
    }

    /**
     * @return mixed
     */
    public function getSellerFullName()
    {
        return $this->sellerFullName;
    }

    /**
     * @param mixed $sellerImage
     */
    public function setSellerImage($sellerImage)
    {
        $this->sellerImage = $sellerImage;
    }

    /**
     * @return mixed
     */
    public function getSellerImage()
    {
        return $this->sellerImage;
    }

    /**
     * @param mixed $sellerReputation
     */
    public function setSellerReputation($sellerReputation)
    {
        $this->sellerReputation = $sellerReputation;
    }

    /**
     * @return mixed
     */
    public function getSellerReputation()
    {
        return $this->sellerReputation;
    }

    /**
     * @param mixed $sold
     */
    public function setSold($sold)
    {
        $this->sold = $sold;
    }

    /**
     * @return mixed
     */
    public function getSold()
    {
        return $this->sold;
    }

    /**
     * @param mixed $ups
     */
    public function setUps($ups)
    {
        $this->ups = $ups;
    }

    /**
     * @return mixed
     */
    public function getUps()
    {
        return $this->ups;
    }


   }