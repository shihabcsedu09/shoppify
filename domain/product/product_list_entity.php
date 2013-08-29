<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Shihab,Department Of Computer Science & Engineering,DU
 * Date: 8/22/13
 * Time: 1:31 AM
 * To change this template use File | Settings | File Templates.
 */

class ProductListEntity
{

    /**
     * @var
     */
    var $productId;
    /**
     * @var
     */
    var $productName;
    /**
     * @var
     */
    var $categoryName;
    /**
     * @var
     */
    var $productImage;
    /**
     * @var
     */
    var $fixedOrBid;
    /**
     * @var
     */
    var $fixedPrice;

    function __construct( $productId, $productName, $productImage, $categoryName, $fixedPrice, $fixedOrBid)
    {
        $this->productName = $productName;
        $this->productImage = $productImage;
        $this->productId = $productId;
        $this->categoryName = $categoryName;
        $this->fixedPrice = $fixedPrice;
        $this->fixedOrBid = $fixedOrBid;
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
     * @param mixed $productImage
     */
    public function setProductImage($productImage)
    {
        $this->productImage = $productImage;
    }

    /**
     * @return mixed
     */
    public function getProductImage()
    {
        return $this->productImage;
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




}

?>