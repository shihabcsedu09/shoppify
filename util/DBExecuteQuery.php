<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Shihab,Department Of Computer Science & Engineering,DU
 * Date: 8/26/13
 * Time: 1:19 AM
 * To change this template use File | Settings | File Templates.
 */

class DBExecuteQuery
{
    static function executeQuery($sql,mysqli $connection)
    {
        $resultSet = $connection->query($sql);
        if($resultSet === false) {
            trigger_error('Wrong SQL: ' . $sql . ' Error: ' . $connection->error, E_USER_ERROR);
        } else {
            $result = $resultSet->fetch_all(MYSQLI_ASSOC);
        }
        return $result;
    }

}