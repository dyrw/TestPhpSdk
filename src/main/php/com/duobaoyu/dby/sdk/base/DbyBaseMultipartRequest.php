<?php

namespace DbyPhpSdk\base;

use DbyPhpSdk\constant\CommonConstants;

abstract class DbyBaseMultipartRequest{
    public static $POST = "POST";
    protected $bizParam = array();

    /**
     * 默认 POST 请求,如果 GET 请求重写这个方法
     *
     * @return
     */
    public function requestMethodType(){
        return self::$POST;
    }

    /**
     * 版本号默认v1,版本号变更,重写该方法
     *
     * @return
     */
    public function apiVersion() {
        return CommonConstants::VERSION1;
    }

    /**
     * 请求的method
     *
     * @return
     */
    abstract public function requestMethod();

}