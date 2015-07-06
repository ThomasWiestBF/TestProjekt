<?php
namespace classes\Console\Functions\DecoratorPattern\Component;

use classes\Console\Functions\DecoratorPattern\Component;

class TestString implements Component{
    public function getString(){
        return 'test';
    }
}