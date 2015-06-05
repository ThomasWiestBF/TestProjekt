<?php
/**
 * Created by PhpStorm.
 * User: thomas
 * Date: 05.06.2015
 * Time: 09:12
 */

namespace classes\Helpers\Cache;


class RequestCache extends Cache {

    public function __construct(){
        $this->aryCacheBuffer = [];
    }

    /**
     * Delete all values from the cache
     */
    public function flush(){
        $this->aryCacheBuffer = [];
    }
}