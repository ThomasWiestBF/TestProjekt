<?php
/**
 * Created by PhpStorm.
 * User: thomas
 * Date: 02.06.2015
 * Time: 10:12
 */

namespace classes\Core\Database\Drivers;
use classes\Configuration\Database;
use PDO;

class MySQL extends Driver{

    protected function connect(){
        $this->objDriver = new \PDO($this->getDSN(), Database::getConfigValue('db_user'), Database::getConfigValue('db_password'), [PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8']);
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
        return 'mysql:dbname='.Database::getConfigValue('db_name').';host='.Database::getConfigValue('db_host').';port=3306';
    }
}