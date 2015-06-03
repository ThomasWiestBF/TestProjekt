<?php
/**
 * Created by PhpStorm.
 * User: thomas
 * Date: 02.06.2015
 * Time: 14:20
 */

namespace classes\Helpers;


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
        return 'Home';
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
        return 'index';
    }
}