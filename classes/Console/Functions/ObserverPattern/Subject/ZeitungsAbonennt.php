<?php
namespace classes\Console\Functions\ObserverPattern\Subject;

abstract class ZeitungsAbonennt {
    protected $strAbonenntenName = '';

    public abstract function __construct($strAbonenntenName);
    public function bekommeZeitung($strZeitungsName){
        echo $this->strAbonenntenName.': '.$strZeitungsName.' erhalten!'."\n";
    }
}