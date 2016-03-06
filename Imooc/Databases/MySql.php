<?php
/**
 * Created by PhpStorm.
 * User: MYL
 * Date: 2016/3/6
 * Time: 22:39
 */

namespace Imooc\Databases;

use Imooc\IDatabases;

class MySql implements IDatabases
{
    protected $conn;

    function connect($host, $user, $passwd, $dbname)
    {
        $conn = mysql_connect($host, $user, $passwd);
        mysql_select_db($dbname, $conn);
        $this->$conn = $conn;
    }

    function query($sql)
    {
      $res =   mysql_query($sql,$this->conn);
        return $res;

    }

    function close(){
        mysql_close($this->conn);
    }
}