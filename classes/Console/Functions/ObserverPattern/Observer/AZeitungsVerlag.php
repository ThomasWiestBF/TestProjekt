<?php
/**
 * Created by PhpStorm.
 * User: Thomas
 * Date: 05.07.2015
 * Time: 12:12
 */
namespace classes\Console\Functions\ObserverPattern\Observer;

abstract class AZeitungsVerlag {

    protected $aryAbonennten = [];
    protected $strCurrentAusgabe = '';
    protected $strVerlagName = '';

    public function addAbonennt($objSubject){
        $this->aryAbonennten[] = $objSubject;
    }

    public function deleteAbonennt($objSubject){
        foreach($this->aryAbonennten as $intID => $objAbonennt){
            if($objAbonennt == $objSubject){
                unset($this->aryAbonennten[$intID]);
            }
        }
    }

    public function verteileAusgabe($strAugabenName){
        foreach($this->aryAbonennten as $objAbonennt){
            $objAbonennt->bekommeZeitung($this->strVerlagName . ' - ' . $strAugabenName);
        }
    }


}