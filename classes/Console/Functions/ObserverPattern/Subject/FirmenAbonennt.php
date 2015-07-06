<?php

namespace classes\Console\Functions\ObserverPattern\Subject;

class FirmenAbonennt extends ZeitungsAbonennt{
    public function __construct($strAbonenntenName){
        $this->strAbonenntenName = $strAbonenntenName.' (Firma)';
    }
}