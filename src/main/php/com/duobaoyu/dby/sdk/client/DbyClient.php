<?php

namespace DbyPhpSdk\client;
use DbyPhpSdk\base\DbyBaseRequest;
use DbyPhpSdk\config\Config;
use DbyPhpSdk\constant\CommonConstants;
use DbyPhpSdk\exception\DbySdkException;
use DbyPhpSdk\util\CommonUtil;
use DbyPhpSdk\util\SignUtil;


class DbyClient{
    private $baseUrl = Config::BASEURL;
    /**
     * 应用访问key
     */
    private $appKey = Config::APPKEY;
    /**
     * 应用访问密钥
     */
    private $appSecret = Config::APPSECRET;
    private $accessToken = Config::ACCESSTOKEN;
    protected $timestamp = null;
    private $dbyConfiguration = null;
    public function __construct($config = null){
        if(!empty($config->baseUrl)){
            $this->baseUrl = $config->baseUrl;
        }
        if(!empty($config->appKey)){
            $this->appKey = $config->appKey;
        }
        if(!empty($config->appSecret)){
            $this->appSecret = $config->appSecret;
        }
        if(!empty($config->accessToken)){
            $this->accessToken = $config->accessToken;
        }
        if(!empty($config->version)){
            $this->version = $config->version;
        }
//        if(!empty($config->dbyConfiguration)){
//            $this->dbyConfiguration = $config->dbyConfiguration;
//        }else{
//            $this->dbyConfiguration = new DbyConfiguration();
//        }

        $this->timestamp = CommonUtil::getMillisecond();
    }


    private function validInitParam(){
        //校验appkey
        if (empty($this->appKey)) {
            throw new DbySdkException("未初始化appKey参数");
        }
        //校验appSecret
        if (empty($this->appSecret)) {
            throw new DbySdkException("未初始化appSecret参数");
        }
        //校验baseUrl
        if (empty($this->baseUrl)) {
            throw new DbySdkException("未初始化baseUrl参数");
        }
    }



    private function setCommonHeader($request = array()){
        //设置appKey
        $request[] = $this->appKey;
        if(!empty($this->accessToken)){
            $request['accessToken'] = $this->accessToken;
        }
        return $request;
    }

    public function getCommonParam($method,$version){
        $commonParam = array();
        $commonParam[CommonConstants::METHOD] = $method;
        $commonParam[CommonConstants::APP_KEY] = $this->appKey;
        $commonParam[CommonConstants::TIMESTAMP] = $this->timestamp;
        $commonParam[CommonConstants::VERSION] = $version;
        return $commonParam;
    }
    public function execute($param){
        //$this->validInitParam();
        //校验必填参数
        $methodType = $param->requestMethodType();
        if (DbyBaseRequest::$POST === $methodType) {
            //request = config.post("/").contentTypeJson().addBody(param);
        } else {
            throw new DbySdkException("只支持POST请求");
        }

        $method = $param->requestMethod();
        $version = $param->apiVersion();

        //获取通用参数
        $commonParam = $this->getCommonParam($method, $version);
        //$this->setCommonHeader();
        //业务参数
        $bizParam = is_null($param->getBizParam) ? array() : $param->getBizParam;
        //合并通用参数和业务参数数组
        //var_dump($bizParam);die;
        $paramSet = array_merge($commonParam, $bizParam);
        //生成签名
        $sign = SignUtil::sign($paramSet, $this->appSecret);
        //拼接请求字符串
        $requestStr = $this->baseUrl . '?';
        foreach ($commonParam as $key => $value) {
            $requestStr .= $key . '=' . $value . '&';
        }
        $requestStr .= CommonConstants::SIGN . '=' . $sign;
        // 组装头文件信息
        $header = array(
            'Content-Type: application/json',
        );
        try {
            $resp = CommonUtil::curl($requestStr, $this->bizParam, $header);
        } catch (\Exception $e) {
            print_r($e->__toString());
        }
        return $resp;
    }



}