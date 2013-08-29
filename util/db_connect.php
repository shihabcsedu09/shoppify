<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Shihab
 * Date: 8/22/13
 * Time: 1:04 AM
 * To change this template use File | Settings | File Templates.
 */

class DBConnect
{

    static function connect()
    {
        require_once __DIR__ . '/config.php';
        $connection = new mysqli(DB_SERVER,DB_USER,DB_PASSWORD,DB_DATABASE);
        if ($connection->connect_error) {
            trigger_error('Database connection failed: '  . $connection->connect_error, E_USER_ERROR);
        }
        return $connection;
    }


    static function close(mysqli $connection)
    {
        $connection->close();
    }

}

?>