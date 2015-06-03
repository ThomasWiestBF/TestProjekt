<?php
/**
 * Created by PhpStorm.
 * User: thomas
 * Date: 01.06.2015
 * Time: 14:42
 */

namespace classes\Helpers\Elements;


class Form extends Element{

    /**
     * @var array
     */
    protected $aryElements = [];

    /**
     * @var string
     */
    protected $strMethod = '';

    /**
     * @param string $strMethod
     */
    public function setMethod($strMethod){
        $this->strMethod = $strMethod;
    }

    /**
     * @return string
     */
    public function getMethod(){
        return $this->strMethod;
    }

    /**
     * @param Element $objElement
     *
     * @throws \Exception
     */
    public function addElement(Element $objElement){
        if($objElement instanceof Element){
            $this->aryElements[] = $objElement;
        } else {
            throw new \Exception('The given Parameter is not an Element!');
        }
    }

    /**
     * @return string
     */
    public function spawn(){
        $strElement = '<form ';
        if($this->getName() != ''){
            $strElement .= 'name="'.$this->getName().'" ';
        }

        if($this->getMethod() != ''){
            $strElement .= 'method="'.$this->getMethod().'" ';
        }

        if($this->getID() != ''){
            $strElement .= 'id="'.$this->getID().'" ';
        }
        $strElement .= ">";
        foreach($this->aryElements as $objElement){
            $strElement .= $objElement->spawn();
        }
        $strElement .= '</form>';
        return $strElement;
    }
}