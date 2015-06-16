<?php
/**
 * Created by PhpStorm.
 * User: thomas
 * Date: 15.06.2015
 * Time: 15:12
 */

namespace classes\Helpers;


class Request {

    public static function get($strKey){
        return $_REQUEST[$strKey];
    }
    public static function set($strKey, $strValue){
        $_REQUEST[$strKey] = $strValue;
    }

    public static function is_set($strKey){
        return isset($_REQUEST[$strKey]);
    }

}