<?php
/**
 * Created by PhpStorm.
 * User: thomas
 * Date: 02.06.2015
 * Time: 10:10
 */

namespace classes\Core\Database;


use classes\Core\Database\Drivers\MySQL;

class Connector {

    /**
     * @var self
     */
    protected static $objInstance;

    /**
     * @var \classes\Core\Database\Drivers\Driver
     */
    protected $objDriver = null;

    protected function __construct(){
        $this->objDriver = new MySQL(); //Hardcoded for testing
    }

    public static function getInstance(){
        if(self::$objInstance == null){
            self::$objInstance = new self();
        }

        return self::$objInstance;
    }

    /**
     * @param string $strQuery
     *
     * @return \PDOStatement
     */
    public function query($strQuery){
        return $this->objDriver->query($strQuery);
    }

    /**
     * When $autpFetchByAssoc is true, the result will get returned as associative array
     *
     * @param string $strQuery
     * @param array $aryArguments
     * @param bool $autoFetchByAssoc
     *
     * @return \PDOStatemen|array
     */
    public function pquery($strQuery, $aryArguments, $autoFetchByAssoc = true){
        return $this->objDriver->pquery($strQuery, $aryArguments, $autoFetchByAssoc);
    }

    /**
     * Takes same Arguments as pquery
     * does not execute the query, only returns it as string
     * for debugging purposes
     *
     * @param string $strQuery
     * @param string $aryArguments
     *
     * @return string
     */
    public function convert2sql($strQuery, $aryArguments){
        return $this->objDriver->convert2sql($strQuery, $aryArguments);
    }

}