<?php
/**
 * Created by PhpStorm.
 * User: thomas
 * Date: 29.05.2015
 * Time: 16:25
 */
namespace classes\Core;

use classes\Core\Database\Connector;

abstract class Model {

    /**
     * @var self
     */
    protected static $objInstance = null;

    /**
     * @var Connector
     */
    protected $objDatabase = null;

    protected function __construct(){
        $this->objDatabase = Connector::getInstance();
    }

    /**
     * @return Model|static
     */
    public static function getInstance(){
        if(self::$objInstance == null){
            self::$objInstance = new static();
        }

        return self::$objInstance;
    }
}