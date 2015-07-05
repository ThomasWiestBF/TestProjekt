<?php
/**
 * Created by PhpStorm.
 * User: Thomas
 * Date: 05.07.2015
 * Time: 11:52
 */

namespace classes\Console\Functions;

use classes\Console\Functions\ObserverPattern\Observer;
use classes\Console\Functions\ObserverPattern\Subject;

class ObserverPatternFunction extends ConsoleFunction{

    public function __construct(){

    }

    public function execute(){
        $objObserver = new Observer\FAZVerlag();
        $objObserver->addAbonennt(new Subject\PrivatAbonennt('Meier'));
        $objObserver->addAbonennt(new Subject\PrivatAbonennt('Huber'));
        $objObserver->addAbonennt(new Subject\PrivatAbonennt('Müller'));
        $objObserver->addAbonennt(new Subject\PrivatAbonennt('Fischer'));
        $objObserver->addAbonennt(new Subject\FirmenAbonennt('Brainformatik GmbH'));
        $objObserver->addAbonennt(new Subject\FirmenAbonennt('No Solutions GmbH'));
        $objObserver->verteileAusgabe('Neue Ausgabe am Sonntag');
    }

}