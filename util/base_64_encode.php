<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Shihab,Department Of Computer Science & Engineering,DU
 * Date: 8/25/13
 * Time: 7:59 PM
 * To change this template use File | Settings | File Templates.
 */

class Base64Encode {


    static function encodeImage($imageName)
    {
       return base64_encode(fread(fopen(IMAGE_DIR.$imageName, "r"), filesize(IMAGE_DIR.$imageName)));
    }

}