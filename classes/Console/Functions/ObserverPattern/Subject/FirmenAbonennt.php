<?php
/**
 * Created by PhpStorm.
 * User: Thomas
 * Date: 05.07.2015
 * Time: 12:24
 */

namespace classes\Console\Functions\ObserverPattern\Subject;

class FirmenAbonennt extends ZeitungsAbonennt{
    public function __construct($strAbonenntenName){
        $this->strAbonenntenName = $strAbonenntenName.' (Firma)';
    }
}