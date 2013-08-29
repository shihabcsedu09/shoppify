<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Shihab,Department Of Computer Science & Engineering,DU
 * Date: 8/24/13
 * Time: 11:47 PM
 * To change this template use File | Settings | File Templates.
 */

class JSONEncode
{
        static function jEncode($name,$value)
        {
            header('Content-type: application/json');
            echo json_encode(array($name=>$value));
        }
}