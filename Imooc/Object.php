<?php
/**
 * Created by PhpStorm.
 * User: myl
 * Date: 16-3-2
 * Time: 上午6:59
 */

namespace Imooc;
class Object
{
    static function test()
    {
        echo __METHOD__;
    }

    static function Mydump($data){
        echo "<pre/>";
        print_r($data);exit;
    }
}