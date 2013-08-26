<?php

   class LatestProducts
   {
       function getLatestProducts()
       {
           include_once __DIR__."/../../util/Base64Encode.php";
           include_once __DIR__."/../../util/DBConnect.php";
           include_once __DIR__."/../../util/DBExecuteQuery.php";
           include_once __DIR__."/../../domain/product/ProductListEntity.php";

           $latestProducts = array();
           $connection = DBConnect::connect();
           $sql = "SELECT `product_id` , `product_name` , `product_image` , `category_name` , `fixed_or_auction` , `fixed_price` \n"
               . "FROM `productinfo` \n"
               . "ORDER BY post_time DESC \n"
               . "LIMIT 0 , 30";
           $result = DBExecuteQuery::executeQuery($sql,$connection);


           foreach($result as $row)
           {
               @array_push($latestProducts, new ProductListEntity($row["product_id"],$row["product_name"],Base64Encode::encodeImage($row["product_image"]),$row["category_name"],$row["fixed_or_auction"],$row["fixed_price"]));
           }

           return $latestProducts;
       }
   }

?>