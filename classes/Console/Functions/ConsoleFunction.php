<?php

namespace classes\Console\Functions;

abstract class ConsoleFunction {

    protected $aryArguments = [];

    public function __construct($aryArguments){
        $this->aryArguments = $aryArguments;
    }

    abstract function execute();

}