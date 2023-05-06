<?php

namespace DbyPhpSdk\util;

class CommonUtil{

    /**
     * 获取13位数的时间戳
     * @return float
     */
    public static function getMillisecond(){
        list($msec, $sec) = explode(' ', microtime());
        $millisecond = (float)sprintf('%.0f', (floatval($msec) + floatval($sec)) * 1000);
        if(strlen($millisecond) !== 13){
            $millisecond = floatval(time()*1000);
        }
        return $millisecond;
    }

    /**
     * 发送请求
     *
     * @param string $url
     * @param json|xml $postFields
     *        	$param array $header
     * @return json xml
     */
    public static function curl($url, $postFields = null, $header = array()) {

        $ch = curl_init();
        if ($ch === false) {
            return false;
        }
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_FAILONERROR, false);
        curl_setopt($ch, CURLOPT_HEADER, false);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
        //curl_setopt($ch, CURLOPT_TIMEOUT, self::$readTimeout);
        //curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, self::$connectTimeout);
        curl_setopt($ch, CURLOPT_POST, true);
        if(!empty($postFields)){
            curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($postFields,JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE));
        }
        $response = curl_exec($ch);
        if(curl_errno($ch)){
            throw new Exception(curl_error($ch), 0);
        }else{
            $httpStatusCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
            if(200 !== $httpStatusCode){
                throw new Exception($response, $httpStatusCode);
            }
        }
        curl_close($ch);
        return $response;
    }

}