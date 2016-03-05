<?php
/**
 * Created by PhpStorm.
 * User: myl
 * Date: 16-3-2
 * Time: 上午7:03
 */

namespace Imooc;

class Loader
{
    static function autoload($class)
    {
       require BASEDIR . '/' .str_replace('\\','/',$class) . '.php';

    }
}