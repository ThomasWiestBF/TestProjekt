<?php
/**
 * Created by PhpStorm.
 * User: thomas
 * Date: 29.05.2015
 * Time: 16:24
 */
namespace classes\Core;

use classes\Helpers\ObjectManager;
use \classes\Core\ViewEngine;

abstract class Controller {

    /**
     * @var Model
     */
    protected $objModel = null;

    /**
     * @var ViewEngine\TwigEngine
     */
    protected $objViewEngine = null;

    /**
     * @throws \Exception
     */
    public function __construct(){
        /*
         * Loading the Controller-matching Model
         * and the View-Engine
         */
        $strClassName = str_replace('Controllers', 'Models', get_class($this));
        try{
            $this->objModel = ObjectManager::getSingleton($strClassName);
            $this->objViewEngine = ObjectManager::getSingleton('\classes\Core\ViewEngine\TwigEngine');
        } catch (Exception $objException){
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