<?php
/**
 * Created by PhpStorm.
 * User: thomas
 * Date: 02.06.2015
 * Time: 10:12
 */

namespace classes\Core\Database\Drivers;
use PDO;

class MySQL extends Driver{

    protected function connect(){
        $this->objDriver = new \PDO($this->getDSN(), 'root', '', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
    }

    public function query($strQuery){
        return $this->objDriver->query($strQuery);
    }

    public function pquery($strQuery, $aryArguments, $autoFetchByAssoc = true){
        $objStatement = $this->objDriver->prepare($strQuery);
        foreach($aryArguments as $intKey => $strValue){
            $objStatement->bindValue($intKey + 1, $strValue);
        }
        $objStatement->execute();
        if($autoFetchByAssoc){
            return $objStatement->fetchAll(PDO::FETCH_ASSOC);
        }
        return $objStatement;
    }

    protected function getDSN(){
        return 'mysql:dbname=jun;host=127.0.0.1;port=3306';
    }
}