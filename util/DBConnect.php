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
        require_once __DIR__ . '/Config.php';
        $connection = mysql_connect(DB_SERVER, DB_USER, DB_PASSWORD) or die(mysql_error());
        $database = mysql_select_db(DB_DATABASE) or die(mysql_error()) or die(mysql_error());
        return $connection;
    }


    static function close()
    {

        mysql_close();
    }

}

?>