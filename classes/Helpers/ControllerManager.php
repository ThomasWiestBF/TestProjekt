<?php
/**
 * Created by PhpStorm.
 * User: thomas
 * Date: 02.06.2015
 * Time: 14:20
 */

namespace classes\Helpers;


use classes\Configuration\Modules;

class ControllerManager {

    /**
     * Get the current Module required to load
     * @todo add logic - currently hardcoded
     *       needs to be loaded from $_REQUEST ($_GET)
     *       standard when not logged in: Login
     *       standard when logged in: Home
     *
     * @return string
     */
    public static function getCurrentModule(){
        $strModule = Modules::getConfigValue('standard_module_logged_in');
        if(Request::is_set(Modules::getConfigValue('standard_module_key'))){
            $strModule = Request::get(Modules::getConfigValue('standard_module_key'));
        }
        return $strModule;
    }

    /**
     * Get the current action required to load
     * @todo add logic - currently hardcoded
     *       needs to be loaded from $_REQUEST ($_GET)
     *       standard: index
     *
     * @return string
     */
    public static function getCurrentAction(){
        $strAction = Modules::getConfigValue('standard_action_logged_in');
        if(Request::is_set(Modules::getConfigValue('standard_action_key'))){
            $strAction = Request::get(Modules::getConfigValue('standard_action_key'));
        }
        return $strAction;
    }
}