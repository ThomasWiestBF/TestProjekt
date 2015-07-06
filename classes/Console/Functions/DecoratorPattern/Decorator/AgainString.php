<?php
/**
 * Created by PhpStorm.
 * User: thomas
 * Date: 06.07.2015
 * Time: 08:50
 */

namespace classes\Console\Functions\DecoratorPattern\Decorator;

use classes\Console\Functions\DecoratorPattern\Decorator;

class AgainString extends Decorator {
    public function getString(){
        return $this->objDecorator->getString().' again';
    }
}