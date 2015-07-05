<?php
/**
 * Created by PhpStorm.
 * User: Thomas
 * Date: 05.07.2015
 * Time: 12:22
 */

namespace classes\Console\Functions\ObserverPattern\Subject;

abstract class ZeitungsAbonennt {
    protected $strAbonenntenName = '';

    public abstract function __construct($strAbonenntenName);
    public function bekommeZeitung($strZeitungsName){
        echo $this->strAbonenntenName.': '.$strZeitungsName.' erhalten!'."\n";
    }
}