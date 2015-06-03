<?php
/**
 * Created by PhpStorm.
 * User: thomas
 * Date: 02.06.2015
 * Time: 10:51
 */

namespace classes\Helpers;


class ControllerFactory {

    /**
     * @param string $strModuleName
     *
     * @return \classes\Core\Controller
     */
    public static function create($strModuleName){
        $strClassPath = '\classes\Core\Modules\Controllers\\'.$strModuleName;
        return new $strClassPath();
    }
}