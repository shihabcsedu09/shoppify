<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Shihab,Department Of Computer Science & Engineering,DU
 * Date: 8/31/13
 * Time: 11:45 PM
 * To change this template use File | Settings | File Templates.
 */

class ProductImageEntity
{
    var $productId;
    var $productImage;

    function __construct($productId, $productImage)
    {
        $this->productId = $productId;
        $this->productImage = $productImage;
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

}