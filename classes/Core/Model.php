<?php
/**
 * Created by PhpStorm.
 * User: thomas
 * Date: 29.05.2015
 * Time: 16:25
 */
namespace classes\Core;

use classes\Helpers\ObjectManager;

abstract class Model {

    /**
     * @var \classes\Core\Database\Connector
     */
    protected $objDatabase = null;

    public function __construct(){
        $this->objDatabase = ObjectManager::getSingleton('\classes\Core\Database\Connector');
    }
}