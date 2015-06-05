<?php
/**
 * Created by PhpStorm.
 * User: thomas
 * Date: 29.05.2015
 * Time: 16:29
 */

use \classes\Helpers\ControllerManager;

class Bootstrap {
    public function __construct(){
        $this->registerAutoloader();
        \classes\Helpers\Session::init();
        $this->loadActions();
    }

    /**
     * The main Bootstrap Method
     * Loading the required controller and call the required method
     *
     * @throws Exception
     */
    protected function loadActions(){
        $objController = \classes\Helpers\ControllerFactory::create(ControllerManager::getCurrentModule());
        $strMethod = ControllerManager::getCurrentAction();
        if(method_exists($objController, $strMethod)) {
            call_user_func([$objController, $strMethod]);
        } else {
            throw new Exception("The Method $strMethod does not exist!");
        }
    }

    /**
     * Register an PSR-0 Autoloader
     */
    protected function registerAutoloader(){
        spl_autoload_register(function ($className)
        {
            $className = ltrim($className, '\\');
            $fileName  = '';
            $namespace = '';
            if ($lastNsPos = strrpos($className, '\\')) {
                $namespace = substr($className, 0, $lastNsPos);
                $className = substr($className, $lastNsPos + 1);
                $fileName  = str_replace('\\', DIRECTORY_SEPARATOR, $namespace) . DIRECTORY_SEPARATOR;
            }
            $fileName .= str_replace('_', DIRECTORY_SEPARATOR, $className) . '.php';

            if(file_exists($fileName)) {
                require_once $fileName;
            } else {
                throw new Exception("The File $fileName does not exist!");
            }
        });
    }
}