<?php

namespace DbyPhpTests\test;

//class test{
//
//}

use DbyPhpSdk\client\DbyClient;
use DbyPhpSdk\openapi\scm\goods\ScmGoodsCategoryRequest;

require '../../vendor/autoload.php';

$req = new ScmGoodsCategoryRequest();
$dbyClient = new DbyClient();
print_r($dbyClient->execute($req));

