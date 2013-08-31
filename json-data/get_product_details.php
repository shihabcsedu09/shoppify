<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Shihab,Department Of Computer Science & Engineering,DU
 * Date: 8/29/13
 * Time: 10:01 PM
 * To change this template use File | Settings | File Templates.
 */


include_once __DIR__ . "/../util/json_encode.php";
include_once __DIR__ . "/../util/base_64_encode.php";
include_once __DIR__ . "/../util/base_64_decode.php";
include_once __DIR__ . "/../dao/products/product_details.php";



if (isset($_GET["getProductDetails"])) {
    $productId = mysql_real_escape_string($_GET["getProductDetails"]);
    $productDetails = new ProductDetails();
    JSONEncode::jEncode("productDetails",$productDetails->getProductDetails($productId));
}


?>