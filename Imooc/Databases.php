<?php
/**
 * Created by PhpStorm.
 * User: MYL
 * Date: 2016/3/6
 * Time: 22:13
 */

namespace Imooc;

interface TDatabases
{
    function connect($host, $user, $passwd, $dbname);

    function query($sql);
    function close();
}

class Databases
{
    private $db;

    private function __construct()
    {

    }

    static function getInstance()
    {
        if (self::$db) {
            return self::$db;
        } else {
            return self::$db = new self();
        }

    }

    function where()
    {
        return $this;
    }

    function order()
    {
        return $this;
    }

    function limit()
    {
        return $this;
    }
}