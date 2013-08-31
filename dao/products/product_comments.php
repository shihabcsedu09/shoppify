<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Shihab,Department Of Computer Science & Engineering,DU
 * Date: 8/24/13
 * Time: 1:10 AM
 * To change this template use File | Settings | File Templates.
 */
class ProductComments
{
    function getProductComments($productId)
    {
        include_once __DIR__ . "/../../util/db_connect.php";
        include_once __DIR__ . "/../../util/db_execute_query.php";
        include_once __DIR__ . "/../../domain/product/product_comment_entity.php";

        $productComments = array();
        $connection = DBConnect::connect();
        $sql = "SELECT `product_comments`.user_id AS user_id, `product_comments`.full_name AS full_name, `product_comments`.post_time AS post_time, `product_comments`.product_comment AS product_comments,`product_comments`.avatar AS avatar\n"
            . "FROM `productinfo` \n"
            . "INNER JOIN `product_comments` \n"
            . "USING ( product_id ) \n"
            . "WHERE `productinfo`.product_id =" . $productId . "\n"
            . "ORDER BY `product_comments`.post_time DESC ";

        $result = DBExecuteQuery::executeQuery($sql, $connection);
        foreach ($result as $row) {
            @array_push($productComments, new ProductCommentEntity($row["user_id"], $row["full_name"], $row["post_time"], $row["product_comments"], PRODUCT_IMAGES . $row["avatar"]));
        }

        return $productComments;
    }
}

?>