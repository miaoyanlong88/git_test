<?php
/**
 * Created by PhpStorm.
 * User: MYL
 * Date: 2016/3/6
 * Time: 22:23
 */

namespace Imooc;


class Register
{

    protected static $objects;

    static function set($alias, $object)
    {
        self::$objects[$alias] = $object;
    }

    function _unset($alias)
    {
        unset(self::$objects[$alias]);
    }

    static function get($name)
    {
        return self::$objects[$name];
    }
}