<?php
/**
 * Created by PhpStorm.
 * User: thomas
 * Date: 01.06.2015
 * Time: 14:20
 */

namespace classes\Core\Modules\Models;


use classes\Core\Model;
use classes\Helpers\ObjectManager;

class Home extends Model{

    public function test(){
        $objStoredCache = ObjectManager::getSingleton('\classes\Helpers\Cache\StoredCache');
        $objStoredCache->addValueToCache('test', 'TestWert');
        //$objStoredCache->flush();
        $objStoredCache->debug();

        $objRequestCache = ObjectManager::getSingleton('\classes\Helpers\Cache\RequestCache');
        $objRequestCache->addValueToCache('test', 'TestWert');
        $objRequestCache->debug();
    }

}