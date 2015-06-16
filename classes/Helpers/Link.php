<?php
/**
 * Created by PhpStorm.
 * User: thomas
 * Date: 15.06.2015
 * Time: 15:40
 */

namespace classes\Helpers;


use classes\Configuration\Modules;

class Link {
    public static function getLink($strModule, $strAction, $strMoreParameters = false){
        $strLink = Modules::getConfigValue('standard_module_key').'='.$strModule;
        $strLink .= '&'.Modules::getConfigValue('standard_action_key').'='.$strAction;
        if($strMoreParameters){
            $strLink .= '&'.$strMoreParameters;
        }
        return $strLink;
    }
}