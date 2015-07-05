<?php
/**
 * Created by PhpStorm.
 * User: Thomas
 * Date: 05.07.2015
 * Time: 11:34
 */

namespace classes\Console;

use classes\Console\Functions;

class ConsoleBootstrap {

    protected $aryAttributes = [];

    public function __construct($aryArguments){
        $this->getAttributes($aryArguments);
        if($this->aryAttributes['function'] == 'Observer'){
            $objFunction = new Functions\ObserverPatternFunction();
            $objFunction->execute();
        }
    }

    protected function getAttributes($aryArguments){
        foreach($aryArguments as $intID => $strArgument){
            if($intID > 0) {
                $aryArgumentSplitted = explode('=', $strArgument);
                $this->aryAttributes[trim($aryArgumentSplitted[0])] = trim($aryArgumentSplitted[1]);
            }
        }
    }

}