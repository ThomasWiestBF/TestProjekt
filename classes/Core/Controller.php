<?php
/**
 * Created by PhpStorm.
 * User: thomas
 * Date: 29.05.2015
 * Time: 16:24
 */
namespace classes\Core;

abstract class Controller {

    /**
     * @var Model
     */
    protected $objModel = null;

    public function __construct(){
        /*
         * Loading the Controller-matching Model
         */
        $strClassName = str_replace('Controllers', 'Models', get_class($this));
        if(class_exists($strClassName)) {
            $this->objModel = $strClassName::getInstance();
        } else {
            throw new \Exception("The model $strClassName was not found!");
        }
    }

    /**
     * Standard Method (action) which has to be implemented in every Module
     *
     * @return void
     */
    abstract public function index();
}