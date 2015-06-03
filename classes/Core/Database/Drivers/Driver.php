<?php
/**
 * Created by PhpStorm.
 * User: thomas
 * Date: 02.06.2015
 * Time: 10:13
 */

namespace classes\Core\Database\Drivers;


abstract class Driver {

    protected $objDriver = null;

    public function __construct(){
        $this->connect();
    }

    abstract protected function connect();
    abstract public function query($strQuery);
    abstract public function pquery($strQuery, $aryArguments, $autoFetchByAssoc = true);

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
        foreach($aryArguments as $strArgument){
            $strQuery = preg_replace('/\?/', "'" . $strArgument . "'", $strQuery, 1);
        }
        return $strQuery;
    }
}