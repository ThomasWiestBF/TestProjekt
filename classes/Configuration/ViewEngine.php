<?php
/**
 * Created by PhpStorm.
 * User: thomas
 * Date: 15.06.2015
 * Time: 12:43
 */

namespace classes\Configuration;


class ViewEngine extends Configuration{
    protected static $aryConfigValues = [
        'templates' => 'view/templates',
        'cache' => 'view/cache',
    ];
}