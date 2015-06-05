<?php
/**
 * Created by PhpStorm.
 * User: thomas
 * Date: 05.06.2015
 * Time: 09:18
 */

namespace classes\Helpers;


class Session {

    /**
     * Initialize the Session
     */
    public static function init(){
        session_start();
    }

    /**
     * @param string $strKey
     * @param mixed $strValue
     */
    public static function set($strKey, $strValue){
        $_SESSION[$strKey] = $strValue;
    }

    /**
     * @param string $strKey
     *
     * @return mixed
     */
    public static function get($strKey){
        return $_SESSION[$strKey];
    }

    /**
     * @param string $strKey
     *
     * @return bool
     */
    public static function isEmpty($strKey){
        return empty($_SESSION[$strKey]);
    }

    /**
     * @param string $strKey
     */
    public static function clear($strKey){
        unset($_SESSION[$strKey]);
    }

}