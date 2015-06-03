<?php
/**
 * Created by PhpStorm.
 * User: thomas
 * Date: 01.06.2015
 * Time: 13:46
 */

namespace classes\Helpers\Elements;


use classes\Helpers\Elements\Types\InputType;

class Input extends Element {

    /**
     * @var string
     */
    protected $strType;


    /**
     * @param string $strType
     *
     * @throws \Exception
     */
    public function setType($strType){
        if(InputType::inputTypeExists($strType)) {
            $this->strType = $strType;
        } else {
            throw new \Exception('Unavailable Input Type!');
        }
    }

    /**
     * @return string
     */
    public function getType(){
        return InputType::getInputType($this->strType);
    }

    /**
     * @return string
     */
    public function spawn(){
        $strElement = '<input ';
        if($this->getName() != ''){
            $strElement .= 'name="'.$this->getName().'" ';
        }

        if($this->getID() != ''){
            $strElement .= 'id="'.$this->getID().'" ';
        }

        if($this->getType() != ''){
            $strElement .= 'type="'.$this->getType().'" ';
        }

        return $strElement . ">";
    }
}