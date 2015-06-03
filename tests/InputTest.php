<?php
/**
 * Created by PhpStorm.
 * User: thomas
 * Date: 02.06.2015
 * Time: 11:03
 */

require_once '../classes/Helpers/Elements/Element.php';
require_once '../classes/Helpers/Elements/Form.php';
require_once '../classes/Helpers/Elements/Input.php';
require_once '../classes/Helpers/Elements/Types/InputType.php';

use classes\Helpers\Elements\Types\InputType;
class InputTest extends PHPUnit_Framework_TestCase{

    /**
     * @var \classes\Helpers\Elements\Input
     */
    protected $objInput = null;

    protected $aryInputTypes = [InputType::TEXT, InputType::PASSWORD, InputType::HIDDEN, InputType::NUMBER, InputType::FILE];

    protected $aryMixedTestCases = [
        ['name' => 'case1', 'id' => '', 'type' => InputType::TEXT, 'result' => '<input name="case1" type="text" >'],
        ['name' => '', 'id' => 'case2', 'type' => InputType::PASSWORD, 'result' => '<input id="case2" type="password" >'],
        ['name' => 'case3', 'id' => 'case3', 'type' => InputType::HIDDEN, 'result' => '<input name="case3" id="case3" type="hidden" >'],
        ['name' => 'case4', 'id' => '', 'type' => InputType::BUTTON, 'result' => '<input name="case4" type="button" >'],
    ];

    public function setUp(){
        $this->objInput = new \classes\Helpers\Elements\Input();
    }

    public function testInputIsElement(){
        $this->assertInstanceOf('\classes\Helpers\Elements\Element', $this->objInput);
    }

    public function testInputID(){
        $strID = "TestID";
        $this->objInput->setID($strID);
        $this->assertEquals($this->objInput->spawn(), '<input id="'.$strID.'" type="text" >');
    }

    public function testInputName(){
        $strName = "TestName";
        $this->objInput->setName($strName);
        $this->assertEquals($this->objInput->spawn(), '<input name="'.$strName.'" type="text" >');
    }

    public function testInputType(){
        foreach($this->aryInputTypes as $strType) {
            $this->objInput->setType($strType);
            $this->assertEquals($this->objInput->spawn(), '<input type="'.InputType::getInputType($strType).'" >');
        }
    }

    public function testMixedCases(){
        foreach($this->aryMixedTestCases as $aryCase) {
            $this->objInput->setType($aryCase['type']);
            $this->objInput->setID($aryCase['id']);
            $this->objInput->setName($aryCase['name']);
            $this->assertEquals($this->objInput->spawn(), $aryCase['result']);
        }
    }

    public function testWrongInputType(){
        $this->setExpectedException('Exception', 'Unavailable Input Type!');
        $this->objInput->setType('WrongInputType');
        $this->objInput->spawn();
    }


}