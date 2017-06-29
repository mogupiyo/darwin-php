<?php

namespace Trustalk;

class Client
{
    static function sample()
    {
        $array1 = array("testA" => 1, "testB" => 2);
        $array2 = array("testC" => 3, "testD" => 4);
        $test = $array1 + $array2;
        // var_dump($test);
        return $test;
    }
}
