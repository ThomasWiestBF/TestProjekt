<?php
/**
 * Created by PhpStorm.
 * User: thomas
 * Date: 01.06.2015
 * Time: 14:19
 */

namespace classes\Core\Modules\Controllers;


use classes\Core\Controller;

class Home extends Controller{

    public function index(){
        $this->objViewEngine->assign('test', 'TestVar');
        $this->objViewEngine->render('test.twig');
        $this->objModel->test();
    }

}