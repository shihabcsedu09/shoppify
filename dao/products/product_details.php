<?php

class ProductDetails
{
    function getProductDetails($productId)
    {
        include_once __DIR__ . "/../../util/db_connect.php";
        include_once __DIR__ . "/../../util/db_execute_query.php";
        include_once __DIR__ . "/../../domain/product/product_details_entity.php";
        include_once __DIR__ . "/../../dao/products/product_comments.php";
        include_once __DIR__ . "/../../dao/products/product_images.php";
        $productDetails = array();

        $getProductComments = new ProductComments();
        $productComments = $getProductComments->getProductComments($productId);

        $getProductImages = new ProductImages();
        $productImages = $getProductImages->getProductImages($productId);

        $connection = DBConnect::connect();
        $sql = "SELECT * FROM `productinfo` WHERE product_id=" . $productId . "\n";
        $result = DBExecuteQuery::executeQuery($sql, $connection);
        foreach ($result as $row) {
                  @array_push($productDetails, new ProductDetailsEntity($row["product_id"], $row["product_name"], $productImages, $row["product_description"], $row["category_name"], $row["seller_full_name"], $row["seller_email"], $row["seller_image"], $row["seller_cell_no"], $row["seller_reputation"], $row["product_longitude"], $row["product_latitude"], $row["fixed_or_auction"], $row["bidding_start_time"], $row["bidding_end_time"], $row["bidding_end"], $row["minimum_bidding_price"], $row["auction_id"], $row["fixed_price"], $row["post_time"], $row["ups"], $row["downs"], $row["sold"], $productComments));
        }

        return $productDetails;
    }
}

?>