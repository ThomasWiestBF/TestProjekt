<?php
/**
 * Created by PhpStorm.
 * User: thomas
 * Date: 05.06.2015
 * Time: 09:13
 */

namespace classes\Helpers\Cache;
use \classes\Helpers\ObjectManager;
use classes\Helpers\Session;

class StoredCache extends Cache{

    const SESSION_KEY = 'StoredCache';

    public function __construct(){
        if(!Session::isEmpty(self::SESSION_KEY)){
            $this->restoreBufferFromSession();
        }
    }

    /**
     * Delete all values from the cache
     */
    public function flush(){
        Session::clear(self::SESSION_KEY);
        $this->aryCacheBuffer = [];
    }

    public function __destruct(){
        if(!empty($this->aryCacheBuffer)){
            $this->saveBufferToSession();
        }
    }

    /**
     * Save $aryCacheBuffer serialized to session
     */
    protected function saveBufferToSession(){
        Session::set(self::SESSION_KEY, serialize($this->aryCacheBuffer));
    }

    /**
     * restore the $aryCacheBuffer from session
     */
    protected function restoreBufferFromSession(){
        $this->aryCacheBuffer = unserialize(Session::get(self::SESSION_KEY));
    }

}