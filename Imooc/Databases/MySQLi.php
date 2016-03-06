<?php
/**
 * Created by PhpStorm.
 * User: MYL
 * Date: 2016/3/6
 * Time: 22:39
 */

namespace Imooc\Databases;

use Imooc\IDatabases;

class MySQLi implements IDatabases
{
    protected $conn;

    function connect($host, $user, $passwd, $dbname)
    {
        $conn = mysqli_connect($host, $user, $passwd, $dbname);
        $this->$conn = $conn;
    }

    function query($sql)
    {
        $res = mysqli_query($this->conn, $sql);
        return $res;

    }

    function close()
    {
        mysqli_close($this->conn);
    }
}