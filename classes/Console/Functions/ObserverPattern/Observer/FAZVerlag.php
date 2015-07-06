<?php

namespace classes\Console\Functions\ObserverPattern\Observer;

class FAZVerlag extends AZeitungsVerlag {
    public function __construct(){
        $this->strVerlagName = 'FAZ Verlag';
    }
}