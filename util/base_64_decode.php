<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Shihab,Department Of Computer Science & Engineering,DU
 * Date: 8/25/13
 * Time: 8:03 PM
 * To change this template use File | Settings | File Templates.
 */


class Base64Decode
{


    static function decodeAndSave($imageName,$base64String)
    {
         return file_put_contents(IMAGE_DIR.$imageName.".JPG",base64_decode($base64String));
    }


}
?>