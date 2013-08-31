<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Shihab,Department Of Computer Science & Engineering,DU
 * Date: 8/29/13
 * Time: 10:54 PM
 * To change this template use File | Settings | File Templates.
 */


include_once __DIR__ . "/../util/json_encode.php";
include_once __DIR__ . "/../util/base_64_encode.php";
include_once __DIR__ . "/../util/base_64_decode.php";
include_once __DIR__ . "/../dao/products/count_products.php";


if (isset($_GET["getNumberOfProducts"]))
{
    $countProducts = new CountProducts();
    JSONEncode::jEncode("numberOfProducts", $countProducts->getNumberOfProducts());
}

?>