<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Shihab,Department Of Computer Science & Engineering,DU
 * Date: 8/24/13
 * Time: 11:30 PM
 * To change this template use File | Settings | File Templates.
 */

 include_once __DIR__ . "/../util/json_encode.php";
 include_once __DIR__ . "/../util/base_64_encode.php";
 include_once __DIR__ . "/../util/base_64_decode.php";
 include_once __DIR__ . "/../dao/products/latest_products.php";


 if( isset($_GET["getLatestProduct"]))
 {
     $latestProducts = new LatestProducts();
     JSONEncode::jEncode("latestProducts",$latestProducts->getLatestProducts());

 }


//$imageName = "1.JPG";
// echo IMAGE_DIR;
// echo Base64Encode::encodeImage($imageName);
// JSONEncode::jEncode("hello",array(new MessageEntity("A","B","C","D","E")));
 //echo Base64Decode::decodeAndSave("lol",Base64Encode::encodeImage($imageName))



?>