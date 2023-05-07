<?php

namespace DbyPhpSdk\base;

/**
 * 分页查询对象
 */
class Query{
    /**
     * 当前页
     */
    private $current = 1;

	/**
     * 每页的数量
     */
	private $size = 10;

	/**
     * 排序的字段名
     */
	private $ascs;

	/**
     * 排序方式
     */
	private $descs;

}