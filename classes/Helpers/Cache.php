<?php
/**
 * Created by PhpStorm.
 * User: thomas
 * Date: 29.05.2015
 * Time: 16:23
 */

namespace classes\Helpers;


class Cache {

    /**
     * @var string array
     */
    protected static $aryCacheBuffer = [];

    /**
     * @param string $strKey
     * @param string $mxValue
     */
    public static function addValueToCache($strKey, $mxValue){
        self::$aryCacheBuffer[$strKey] = $mxValue;
    }

    /**
     * @param string $strKey
     *
     * @return mixed
     */
    public static function getValueFromCache($strKey){
        return self::$aryCacheBuffer[$strKey];
    }

}