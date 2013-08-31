<?php

   class LatestProducts
   {
       function getLatestProducts()
       {
           include_once __DIR__ . "/../../util/base_64_encode.php";
           include_once __DIR__ . "/../../util/db_connect.php";
           include_once __DIR__ . "/../../util/db_execute_query.php";
           include_once __DIR__ . "/../../domain/product/product_list_entity.php";

           $latestProducts = array();
           $connection = DBConnect::connect();
           $sql = "SELECT `product_id` , `product_name` , `product_image` , `category_name` , `fixed_or_auction` , `fixed_price` \n"
               . "FROM `productinfo` \n"
               . "ORDER BY post_time DESC \n"
               . "LIMIT 0 , 30";
           $result = DBExecuteQuery::executeQuery($sql,$connection);


           foreach($result as $row)
           {
               @array_push($latestProducts, new ProductListEntity($row["product_id"],$row["product_name"],PRODUCT_IMAGES.$row["product_image"],$row["category_name"],$row["fixed_or_auction"],$row["fixed_price"]));

//               @array_push($latestProducts, new ProductListEntity($row["product_id"],$row["product_name"],Base64Encode::encodeImage($row["product_image"]),$row["category_name"],$row["fixed_or_auction"],$row["fixed_price"]));
           }

           return $latestProducts;
       }
   }

?>