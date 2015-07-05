<?php
/**
 * Created by PhpStorm.
 * User: Thomas
 * Date: 05.07.2015
 * Time: 12:19
 */

namespace classes\Console\Functions\ObserverPattern\Observer;

class FAZVerlag extends AZeitungsVerlag {
    public function __construct(){
        $this->strVerlagName = 'FAZ Verlag';
    }
}