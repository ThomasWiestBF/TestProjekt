<?php
/**
 * Created by PhpStorm.
 * User: thomas
 * Date: 15.06.2015
 * Time: 15:22
 */

namespace classes\Configuration;


class Modules extends Configuration {
    protected static $aryConfigValues = [
        'standard_module_logged_in' => 'Home',
        'standard_module_loggged_in' => 'Home',
        'standard_action_logged_out' => 'index',
        'standard_action_logged_in' => 'index',

        'standard_module_key' => 'module',
        'standard_action_key' => 'action',
    ];
}