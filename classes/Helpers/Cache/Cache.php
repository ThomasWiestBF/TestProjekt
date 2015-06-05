<?php
/**
 * Created by PhpStorm.
 * User: thomas
 * Date: 29.05.2015
 * Time: 16:23
 */

namespace classes\Helpers\Cache;


abstract class Cache {


    /**
     * @var string array
     */
    protected $aryCacheBuffer = [];


    /**
     * @param string $strKey
     * @param string $mxValue
     */
    public function addValueToCache($strKey, $mxValue){
        $this->aryCacheBuffer[$strKey] = $mxValue;
    }

    /**
     * @param string $strKey
     *
     * @return mixed
     */
    public function getValueFromCache($strKey){
        return $this->aryCacheBuffer[$strKey];
    }

    /**
     * Simple debugging method
     * generates a formatted print_r output
     */
    public function debug(){
        echo '<pre>';
        print_r($this->aryCacheBuffer);
        echo '</pre>';
    }

}