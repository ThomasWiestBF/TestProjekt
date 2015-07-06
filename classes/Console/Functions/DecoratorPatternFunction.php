<?php
namespace classes\Console\Functions;

use classes\Console\Functions\DecoratorPattern\Component;
use classes\Console\Functions\DecoratorPattern\Decorator;

class DecoratorPatternFunction extends ConsoleFunction{

    public function execute(){
        $objDecorator = new Decorator\AgainString(new Decorator\AgainString(new Component\TestString()));
        echo $objDecorator->getString();
    }

}