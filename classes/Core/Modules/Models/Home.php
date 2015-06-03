<?php
/**
 * Created by PhpStorm.
 * User: thomas
 * Date: 01.06.2015
 * Time: 14:20
 */

namespace classes\Core\Modules\Models;


use classes\Core\Model;

class Home extends Model{

    public function test(){
        print_r($this->objDatabase->pquery('SELECT * FROM vtiger_users', []));
    }

}