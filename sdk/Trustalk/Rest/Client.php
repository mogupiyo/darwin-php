<?php

namespace Trustalk\Rest;

use Trustalk\Http\CurlClient;
use Trustalk\VersionInfo;
use Trustalk\Rest\Api\Account\AccountList as Account;

class Client
{
    protected $username;
    protected $password;

    public function __construct($username = null, $password = null)
    {
    }

    static function sample()
    {
        $array1 = array("testA" => 1, "testB" => 2);
        $array2 = array("testC" => 3, "testD" => 4);
        $test = $array1 + $array2;
        var_dump("doyaaa");
        return $test;
    }
}
