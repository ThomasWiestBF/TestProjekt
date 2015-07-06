<?php

namespace classes\Console\Functions\ObserverPattern\Subject;

class PrivatAbonennt extends ZeitungsAbonennt {

    public function __construct($strAbonenntenName){
        $this->strAbonenntenName = $strAbonenntenName.' (Privat)';
    }
}