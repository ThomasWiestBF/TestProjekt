<?php
/**
 * Created by PhpStorm.
 * User: thomas
 * Date: 03.06.2015
 * Time: 15:32
 */

namespace classes\Configuration;


abstract class Configuration {
    protected static $aryConfigValues = [];

    /**
     * @param string $strConfigKey
     *
     * @return string
     * @throws \Exception
     */
    public static function getConfigValue($strConfigKey){
        if(array_key_exists($strConfigKey, static::$aryConfigValues)) {
            return static::$aryConfigValues[$strConfigKey];
        } else {
            throw new \Exception("The ConfigKey $strConfigKey does not exist");
        }
    }
}