<?php
/**
 * Created by PhpStorm.
 * User: thomas
 * Date: 15.06.2015
 * Time: 12:38
 */
namespace classes\Core\ViewEngine;

abstract class ViewEngine {
    protected $objInstance;
    protected $aryVariables = [];

    public function assign($strKey, $strValue){
        $this->aryVariables[$strKey] = $strValue;
    }

    public abstract function render($strTemplateName);
}