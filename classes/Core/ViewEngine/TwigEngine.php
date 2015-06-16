<?php
/**
 * Created by PhpStorm.
 * User: thomas
 * Date: 15.06.2015
 * Time: 12:51
 */

namespace classes\Core\ViewEngine;
use \classes\Configuration;

class TwigEngine extends ViewEngine {

    public function __construct() {
        $objLoader = new \Twig_Loader_Filesystem(Configuration\ViewEngine::getConfigValue('templates'));
        $this->objInstance = new \Twig_Environment($objLoader, [
            'auto_reload' => true,
            'cache' => Configuration\ViewEngine::getConfigValue('cache')
        ]);
        $this->objInstance->addExtension(new \Twig_Extension_Debug());
    }

    public function render($strTemplateName){
        echo $this->objInstance->render($strTemplateName, $this->aryVariables);
    }
}