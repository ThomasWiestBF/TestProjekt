<?php
namespace classes\Console\Functions\DecoratorPattern;

abstract class Decorator implements Component{
    protected $objDecorator;

    public function __construct($objDecorator){
        $this->objDecorator = $objDecorator;
    }
}