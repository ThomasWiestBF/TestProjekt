<?php
/**
 * Created by PhpStorm.
 * User: thomas
 * Date: 03.06.2015
 * Time: 15:34
 */

namespace classes\Configuration;


class Database extends Configuration{

    protected static $aryConfigValues = [
        'db_host' => '127.0.0.1',
        'db_name' => 'jun',
        'db_user' => 'root',
        'db_password' => '',
    ];

}