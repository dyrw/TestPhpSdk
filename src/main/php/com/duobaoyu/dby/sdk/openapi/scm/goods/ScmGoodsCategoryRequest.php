<?php
namespace DbyPhpSdk\openapi\scm\goods;

use DbyPhpSdk\base\DbyBaseRequest;
use DbyPhpSdk\constant\DbyMethodConstants;

class ScmGoodsCategoryRequest extends DbyBaseRequest{
    public function requestMethod(){
        return DbyMethodConstants::SCM_GOODS_CATEGORY;
    }
    public function getBizParam(){
        return $this->bizParam;
    }
}