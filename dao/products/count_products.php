<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Shihab,Department Of Computer Science & Engineering,DU
 * Date: 8/29/13
 * Time: 10:56 PM
 * To change this template use File | Settings | File Templates.
 */
class CountProducts
{
    function getNumberOfProducts()
    {
        include_once __DIR__ . "/../../util/base_64_encode.php";
        include_once __DIR__ . "/../../util/db_connect.php";
        include_once __DIR__ . "/../../util/db_execute_query.php";



        $connection = DBConnect::connect();
        $sql = "select count(product_id) as number_of_products from productinfo";
        $result = DBExecuteQuery::executeQuery($sql,$connection);


        foreach($result as $row)
        {
            $numberOfProducts = array("numberOfProducts",$row["number_of_products"]);
        }

        if (!empty($numberOfProducts)) {
            return $numberOfProducts;
        }
        else echo "hello";
    }
}

?>