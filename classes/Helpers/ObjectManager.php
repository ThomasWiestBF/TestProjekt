<?php
/**
 * Created by PhpStorm.
 * User: thomas
 * Date: 05.06.2015
 * Time: 09:35
 */

namespace classes\Helpers;


class ObjectManager {

    /**
     * @var array
     */
    protected static $arySingletons = [];

    /**
     * Returns an SINGLETON Instance of the specified class
     * $strClassName needs to include the full namespace
     *
     * @param string $strClassName
     *
     * @return object
     * @throws \Exception
     */
    public static function getSingleton($strClassName){
        try{
            if(!in_array($strClassName, self::$arySingletons)){
                self::$arySingletons[$strClassName] = new $strClassName();
            }
        } catch(Exception $objException) {
            throw new \Exception("The class $strClassName does not exist!");
        }
        return self::$arySingletons[$strClassName];
    }

    /**
     * Returns an Instance of the specified class
     * $strClassName needs to include the full namespace
     *
     * @param string $strClassName
     *
     * @return object
     * @throws \Exception
     */
    public static function getInstance($strClassName){
        if(class_exists($strClassName)){
            return new $strClassName();
        } else {
            throw new \Exception("The class $strClassName does not exist!");
        }
    }

}