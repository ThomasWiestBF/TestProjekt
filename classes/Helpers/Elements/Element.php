<?php
/**
 * Created by PhpStorm.
 * User: thomas
 * Date: 01.06.2015
 * Time: 13:37
 */

namespace classes\Helpers\Elements;


abstract class Element {

    /**
     * @var string
     */
    protected $strName;

    /**
     * @var string
     */
    protected $strID;

    /**
     * @param string $strName
     */
    public function setName($strName){
        $this->strName = $strName;
    }

    /**
     * @return string
     */
    protected function getName(){
        return $this->strName;
    }

    /**
     * @param string $strID
     */
    public function setID($strID){
        $this->strID = $strID;
    }

    /**
     * @return string
     */
    protected function getID(){
        return $this->strID;
    }

    /**
     * @return string
     */
    abstract public function spawn();

}