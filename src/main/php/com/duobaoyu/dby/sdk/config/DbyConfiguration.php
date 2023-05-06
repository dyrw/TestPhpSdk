<?php

namespace DbyPhpSdk\config;

class DbyConfiguration{
    /**
     * 连接池最大连接数，默认值为500
     */
    private $maxConnections;
    /**
     * 每个路由的最大连接数，默认值为500
     */
    private $maxRouteConnections;
    /**
     * 最大请求等待队列大小
     */
    private $maxRequestQueueSize;
    /**
     * 最大异步线程数
     */
    private $MaxAsyncThreadSize;
    /**
     * 最大异步线程池队列大小
     */
    private $maxAsyncQueueSize;
    /**
     * 请求超时时间，单位为毫秒, 默认值为10000
     */
    private $timeout = 10000;
    /**
     * 连接超时时间，单位为毫秒, 默认值为2000
     */
    private $connectTimeout;
    /**
     * 请求失败后重试次数，默认为0次不重试
     */
    private $maxRetryCount;
    /**
     * 单向验证的HTTPS的默认SSL协议，默认为SSLv3
     */
    private $SslProtocol;
    /**
     * 打开或关闭日志，默认为true
     */
    private $logEnabled = true;
}