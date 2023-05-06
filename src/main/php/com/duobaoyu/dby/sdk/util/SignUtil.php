<?php

namespace DbyPhpSdk\util;

use DbyPhpSdk\constant\CommonConstants;

class SignUtil{
    /**
     * 多宝鱼签名参考
     *
     * @param string $appKey 商户应用appKey
     * @param string $method 接口方法名称
     * @param string $timestamp 13位格式时间戳,5分钟误差内
     * @param string $version 版本号,现在固定为v1
     * @param string $appSecret 商户应用appSecret
     * @param array  $bizParam 业务参数,具体参数请查看接口对接文档
     * @return string 签名字符串
     */

    public static function sign($paramSet,$appSecret){
        //对所有层级参数递归排序(a-z)
        self::recursionSort($paramSet);
        //将参数按序拼接成字符串
        $spliceStr = '&';
        foreach ($paramSet as $key => $value) {
            $spliceStr .= '&'.$key.'='. (is_array($value) ?json_encode($value, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE):$value);
        }
        $spliceStr = trim($spliceStr,'&') .'&'.CommonConstants::APP_SECRET.'='.$appSecret;
        //生成待签名字符串,md5签名并转大写
        $sign = strtoupper(md5($spliceStr));
        return $sign;
    }


    /**
     * 关联数组递归排序,并
     * @param array $arr
     * @param bool $removeNull 是否去除数组中的值为null的元素
     * @return array
     */
    private static function recursionSort(&$arr,$removeNull = true){
        $kString = true;
        foreach ($arr as $k => &$v) {
            if (!is_string($k)) {
                $kString = false;
            }
            if (is_null($v)&&$removeNull) {
                unset($arr[$k]);
            } elseif (is_array($v)) {
                self::recursionSort($v,$removeNull);
            }
        }
        if ($kString) {
            ksort($arr);
        }
    }


}