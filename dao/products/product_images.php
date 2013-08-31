<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Shihab,Department Of Computer Science & Engineering,DU
 * Date: 8/31/13
 * Time: 11:48 PM
 * To change this template use File | Settings | File Templates.
 */

class ProductImages
{
    function getProductImages($productId)
    {
        include_once __DIR__ . "/../../util/Config.php";
        include_once __DIR__ . "/../../util/db_connect.php";
        include_once __DIR__ . "/../../util/db_execute_query.php";
        include_once __DIR__ . "/../../domain/product/product_image_entity.php";

        $productImages = array();
        $connection = DBConnect::connect();
        $sql = "SELECT *\n"
            . "FROM `product_image` \n"
            . "WHERE product_id = ".$productId." \n";

        $result = DBExecuteQuery::executeQuery($sql, $connection);
        foreach ($result as $row) {

            @array_push($productImages, new ProductImageEntity($row["product_id"], PRODUCT_IMAGES.$row["product_image"]));
        }

        return $productImages;

    }
}