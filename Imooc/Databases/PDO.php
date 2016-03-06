<?php
/**
 * Created by PhpStorm.
 * User: MYL
 * Date: 2016/3/6
 * Time: 22:39
 */

namespace Imooc\Databases;

use Imooc\IDatabases;


class PDO implements IDatabases
{
    protected $conn;

    function connect($host, $user, $passwd, $dbname)
    {
      $conn =   new \PDO("mysql:host=$host;dbname=$dbname", $user, $passwd);
        $this->conn = $conn;
    }

    function query($sql)
    {
        $res = $this->conn->query($sql);
        return $res;

    }

    function close()
    {
        unset($this->conn);
    }
}