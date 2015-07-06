<?php
namespace classes\Console;

use classes\Console\Functions;

class ConsoleBootstrap {

    protected $aryAttributes = [];

    /**
     * How to call:
     * php -f bin/console.php function=Observer for an Observer Pattern Test
     * php -f bin/console.php function=Decorator for an Decorator Pattern Test
     *
     * @param $aryArguments
     */
    public function __construct($aryArguments){
        $this->getAttributes($aryArguments);
        if($this->aryAttributes['function'] == 'Observer'){
            $objFunction = new Functions\ObserverPatternFunction($this->aryAttributes);
        } elseif($this->aryAttributes['function'] == 'Decorator'){
            $objFunction = new Functions\DecoratorPatternFunction($this->aryAttributes);
        }
        $objFunction->execute();
    }

    /**
     * Load and Filter the given execution parameters
     *
     * @param $aryArguments
     */
    protected function getAttributes($aryArguments){
        foreach($aryArguments as $intID => $strArgument){
            if($intID > 0) {
                $aryArgumentSplitted = explode('=', $strArgument);
                $this->aryAttributes[trim($aryArgumentSplitted[0])] = trim($aryArgumentSplitted[1]);
            }
        }
    }

}