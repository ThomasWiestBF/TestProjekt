<?php
/**
 * Created by PhpStorm.
 * User: thomas
 * Date: 05.06.2015
 * Time: 10:00
 */

require_once '..\classes\Helpers\Cache\Cache.php';
require_once '..\classes\Helpers\Cache\RequestCache.php';
require_once '..\classes\Helpers\Cache\StoredCache.php';
require_once '..\classes\Helpers\ObjectManager.php';
require_once '..\classes\Helpers\Session.php';

class CacheTest extends PHPUnit_Framework_TestCase {

    protected $objStoredCache;
    protected $objRequestCache;
    protected $aryTestValues = [
        'key1' => 'value1',
        'key2' => 'value2',
        'key3' => 'value3',
        'key4' => 'value4',
    ];

    public function setUp(){
        $this->objRequestCache = new \classes\Helpers\Cache\RequestCache();
        $this->objStoredCache = new \classes\Helpers\Cache\StoredCache();
    }

    public function testCacheAdding(){
        $this->markTestSkipped('$_SESSION not usable');
        foreach($this->aryTestValues as $strKey => $mxValue) {
            $this->objStoredCache->addValueToCache($strKey, $mxValue);
            $this->objRequestCache->addValueToCache($strKey, $mxValue);
        }

        foreach($this->aryTestValues as $strKey => $mxValue) {
            $this->assertEquals($this->objStoredCache->getValueFromCache($strKey), $mxValue);
            $this->assertEquals($this->objRequestCache->getValueFromCache($strKey), $mxValue);
        }

        /*
         * Calling Destructors
         */
        unset($this->objRequestCache);
        unset($this->objStoredCache);
    }

    public function testCacheRestoring(){
        $this->markTestSkipped('$_SESSION not usable');
        foreach($this->aryTestValues as $strKey => $mxValue) {
            $this->assertEquals($this->objStoredCache->getValueFromCache($strKey), $mxValue);
            $this->assertEquals($this->objRequestCache->getValueFromCache($strKey), NULL);
        }
    }

    public function testCacheFlushing(){
        $this->markTestSkipped('$_SESSION not usable');
        foreach($this->aryTestValues as $strKey => $mxValue) {
            $this->objStoredCache->addValueToCache($strKey, $mxValue);
            $this->objRequestCache->addValueToCache($strKey, $mxValue);
        }

        $this->objStoredCache->flush();
        $this->objRequestCache->flush();

        foreach($this->aryTestValues as $strKey => $mxValue) {
            $this->assertEquals($this->objStoredCache->getValueFromCache($strKey), NULL);
            $this->assertEquals($this->objRequestCache->getValueFromCache($strKey), NULL);
        }
    }

}